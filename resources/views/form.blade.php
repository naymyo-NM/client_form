<!DOCTYPE html>
<html lang="my">
<head>
    <meta charset="utf-8">
    <title>Application Form</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f8fafc;
        }

        .card {
            border-radius: 16px;
            border: none;
        }

        .form-control, .form-check-input {
            padding: 12px;
        }

        .terms-box {
            max-height: 260px;
            overflow-y: auto;
            padding-right: 6px;
        }

        /* Smooth scrolling */
        .terms-box::-webkit-scrollbar {
            width: 6px;
        }
        .terms-box::-webkit-scrollbar-thumb {
            background: #c2c3c4;
            border-radius: 20px;
        }

        /* MOBILE OPTIMIZATION */
        @media (max-width: 576px) {
            .container {
                padding: 0 12px !important;
            }

            .terms-box {
                max-height: 200px;
            }

            label, p, span {
                font-size: 15px !important;
                line-height: 1.6 !important;
            }

            button {
                font-size: 16px;
                padding: 12px;
            }
        }

        .toggle-link {
            cursor: pointer;
            font-weight: 600;
            font-size: 15px;
        }

        a[aria-expanded="false"] .show-less { display: none; }
        a[aria-expanded="true"] .show-more { display: none; }

    </style>

</head>

<body>

<div class="container py-3">
    <div class="card shadow p-3">

        <!-- LOGO -->
        <div class=" mb-3">
            <img src="/logo_r2o.png" alt="logo" height="45">
        </div>

        @if(session('success'))
    <div class="alert alert-success ">
        {{ session('success') }}
    </div>
@endif

        <form action="{{ route('form.store') }}" method="POST">
            @csrf

            <!-- NAME -->
            <div class="mb-4">
                <label for="name" class="fw-bold mb-1">အမည်</label>
                <input type="text"
                       id="name"
                       name="name"
                       class="form-control  @error('name') is-invalid @enderror "
                       placeholder="သင့်အမည်ရေးပါ" />
                       @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror




            </div>



            <!-- TITLE -->
            <h6 class="fw-bold mb-3 mt-2 text-dark">
                Samsung Knox စည်းကမ်းနှင့်သတ်မှတ်ချက်များ
            </h6>

            <!-- TERMS -->
            <div class="border rounded bg-white p-3 shadow-sm terms-box">

                <p class="lh-lg mb-2">
                    Rent 2 Own MMကုမ္ပဏီသည် လျှောက်ထားသူအား Samsung Knox Guard ဝန်ဆောင်မှုဖြင့် ထိန်းချုပ်ထားသော ကုမ္ပဏီ၏ Pay-As-You-Go (PAYG) စနစ်ဖြင့် Samsung မိုဘိုင်းလ်စက်ပစ္စည်းကို ရောင်းချရန် သဘောတူပြီး၊ လျှောက်ထားသူသည် ရွေးချယ်ထားသော ငွေပေးချေမှုအစီအစဉ် (၆၊ ၉၊ သို့မဟုတ် ၁၂ လ) နှင့် ဤသဘောတူညီချက်၏ စည်းကမ်းချက်များအတိုင်း စက်ပစ္စည်းကို ဝယ်ယူရန် သဘောတူပါသည်။

                </p>

                <span class="collapse" id="termsMore">
                    <p class="lh-lg">
                       လျှောက်ထားသူသည် ရွေးချယ်ထားသော ငွေပေးချေမှုအစီအစဉ်အရ သတ်မှတ်ထားသော လစဉ်အရစ်ကျပမာဏကို ကုမ္ပဏီသို့ ပေးချေရမည်။ ငွေပေးချေမှုအားလုံးကို လစဉ်သတ်မှတ်ထားသော ရက် သို့မဟုတ် ထိုရက်မတိုင်မီ ပေးချေရမည်။ သတ်မှတ်ထားသော နောက်ဆုံးရက်၏ ည ၁၁:၅၉ နာရီ (မြန်မာစံတော်ချိန်) တွင် ငွေအပြည့်အဝ မရရှိပါက ပျက်ကွက်သည်ဟု ယူဆမည်။ မည်သည့် ဆိုင်းငံ့ကာလကိုမျှ ခွင့်ပြုမည် မဟုတ်ပါ။ လစဉ်အရစ်ကျငွေကို သတ်မှတ်ထားသော နောက်ဆုံးရက်တွင် မပေးချေပါက လျှောက်ထားသူသည် "ငွေပေးချေရန် ပျက်ကွက်သည်”ဟု သတ်မှတ်ပါသည်။ ပျက်ကွက်ပါက၊ ကုမ္ပဏီသည် Knox Guard မှတစ်ဆင့် စက်ပစ္စည်းကို ကြိုတင်အသိပေးခြင်းမရှိဘဲ အဝေးမှ ကန့်သတ်မည်ဖြစ်သည်။ စက်ပစ္စည်းပေါ်တွင် အရေးပေါ်ခေါ်ဆိုမှုနှင့် Rent 2 Own ကုမ္ပဏီအား ဆက်သွယ်ရန်သာ သုံးစွဲနိုင်မည်ဖြစ်သည်။ အခြား အပလီကေးရှင်းများ၊ ဒေတာအသုံးပြုမှုနှင့် အရေးပေါ်မဟုတ်သော ဆက်သွယ်မှုများအားလုံးကို သုံးစွဲနိုင်မည် မဟုတ်ပါ။
                         <br>

                       စက်ပစ္စည်း၏ လုပ်ဆောင်နိုင်စွမ်းကို ကန့်သတ်ခံရခြင်းမှ ပြေလွတ်ရန်၊ အသုံးပြုသူသည် ကုမ္ပဏီသို့ အောက်ပါတို့ကို ပေးချေရမည်: (က) ပေးချေရန် ကျန်ရှိသော အရစ်ကျငွေများအားလုံး၊ နှင့် (ခ) ငွေပေးချေမှု စာမျက်နှာမှတစ်ဆင့် သိရှိနိုင်သော ကုမ္ပဏီမှ သတ်မှတ်ထားသော "ဒဏ်ကြေးငွေ"။
                         <br>

                        ပေးချေရန်ကျန်ရှိသော ငွေများနှင့် ဒဏ်ကြေးများအားလုံးကို လက်ခံရရှိကြောင်း အတည်ပြုပြီးပါက၊ ကုမ္ပဏီသည် စက်ပစ္စည်းကို ပြန်လည်အသက်သွင်းရန် အဝေးမှ အမိန့်ပေးပို့မည်ဖြစ်သည်။ စက်ပစ္စည်းသည် ဤအမိန့်ကို လက်ခံရရှိရန် အားသွင်းထားရန်နှင့် တည်ငြိမ်သော အင်တာနက်ချိတ်ဆက်မှု (Wi-Fi သို့မဟုတ် မိုဘိုင်းဒေတာ) လိုအပ်ကြောင်း လျှောက်ထားသူမှ အသိအမှတ်ပြုပါသည်။
                        <br>


                        လျှောက်ထားသူသည် Knox Guard ဝန်ဆောင်မှုကို နှောင့်ယှက်ခြင်း၊ ဖယ်ရှားခြင်း သို့မဟုတ် အခြားနည်းလမ်းဖြင့် ကျော်လွှားရန် ကြိုးပမ်းခြင်း မပြုရပါ။ ထိုသို့ ကြိုးပမ်းမှုမှန်သမျှသည် ဤသဘောတူညီချက်ကို သိသိသာသာ ချိုးဖောက်ခြင်းဖြစ်ပြီး၊ ကုမ္ပဏီ၏ ဆုံးဖြတ်ချက်အရ ကျန်ရှိသော လက်ကျန်ငွေ အပြည့်,အစုံကို ချက်ချင်းတောင်းဆိုနိုင်သည်။ စာချုပ်အရ ပေးဆောင်ရမည့် ငွေများနှင့် သက်ဆိုင်ရာ ဒဏ်ကြေးများ အပါအဝင် ငွေပေးချေမှုအားလုံးကို ကုမ္ပဏီမှ လက်ခံရရှိပြီးမှသာ စက်ပစ္စည်းပိုင်ဆိုင်ခွင့်သည် လျှောက်ထားသူထံသို့ လွှဲပြောင်းမည်ဖြစ်သည်။

                    </p>
                </span>

                <a class="toggle-link d-inline-block mt-1"
                   data-bs-toggle="collapse"
                   href="#termsMore"
                   aria-expanded="false">

                    <span class="show-more">ပိုမိုဖတ်ရှုရန်...</span>
                    <span class="show-less">ပိတ်မည်...</span>

                </a>

            </div>


            <!-- CHECKBOX -->



                <label for="agree" class="mt-2 lh-lg">
                အထက်ပါစည်းကမ်းနှင့် သတ်မှတ်ချက်များအားလုံးကို
              ဖတ်ရှုနားလည်ပြီးဖြစ်ကြောင်း အသိအမှတ်ပြုပါသည်။ <br>
              အထက်တွင် အသေးစိတ်ဖော်ပြထားသည့်အတိုင်း၊ ငွေပေးချေမှု တစ် (၁) ရက်
              နောက်ကျသည်နှင့် တပြိုင်နက် စက်ပစ္စည်း၏ လုပ်ဆောင်နိုင်စွမ်းကို
              အဝေးမှ ကန့်သတ်နိုင်သည့် Samsung Knox Guard ဝန်ဆောင်မှုပါဝင်သော
              မိုဘိုင်းလ်စက်ပစ္စည်းကို ဝယ်ယူရန် သဘောတူပါသည်။
                </label>
                <div class="form-check  mt-2 mb-5">
                <input type="checkbox"
                       name="agree"
                       id="agree"

                       class="form-check-input form-check-input-sm  @error('agree') is-invalid @enderror" />
                       <label class="ms-2 mt-1" >သဘောတူရန်နှိပ်ပါ။</label>

                    @error('agree')
                           <p class="text-danger">{{ $message }}</p>
                    @enderror


            </div>


            <!-- Submit -->
            <button type="submit" class="btn btn-primary w-100 fw-bold">
                လက်ခံပါသည်
            </button>

        </form>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
