<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FormController extends Controller
{
    public function store(Request $request)
    {
        $validatedData =  $request->validate(
            [
                'name' => 'required|string|max:255',
                'agree' => 'required',
                'g-recaptcha-response' => 'required',
            ],

            [
                'name.required' => 'အမည်ဖြည့်ရန် လိုအပ်ပါသည်။',
                'agree.required' => 'စည်းကမ်းချက်များအား သဘောတူညီကြောင်း ဖြည့်ရန် လိုအပ်ပါသည်။',
                'g-recaptcha-response.required' => 'reCAPTCHA ကို အတည်ပြုပါ',
            ]
        );


        $response = Http::asForm()->post(
            'https://www.google.com/recaptcha/api/siteverify',
            [
                'secret' => config('recaptcha.secret_key'),
                'response' => $request->input('g-recaptcha-response'),
                'remoteip' => $request->ip(),
            ]
        );

        if (! $response->json('success')) {

            return back()->withErrors([
                'g-recaptcha-response' => 'reCAPTCHA verification failed. Please try again.'
            ])->withInput();
        }

        Form::create([
            'name' => $validatedData['name'],
            'agree' => $validatedData['agree']

        ]);


        return back()->with('success', 'စာရင်းသွင်းခြင်း အောင်မြင်ပါသည်။');
    }

    public function index()
    {
        return view('form');
    }
}
