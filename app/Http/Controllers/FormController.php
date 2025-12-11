<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'name' => 'required|string|max:255',
                'agree' => 'required',
            ],
            [
                'name.required' => 'အမည်ဖြည့်ရန် လိုအပ်ပါသည်။',
                'agree.required' => 'စည်းကမ်းချက်များအား သဘောတူညီကြောင်း ဖြည့်ရန် လိုအပ်ပါသည်။',
            ]
        );


        Form::create($validated);

        return back()->with('success', 'စာရင်းသွင်းခြင်း အောင်မြင်ပါသည်။');
    }

    public function index()
    {
        return view('form');
    }
}
