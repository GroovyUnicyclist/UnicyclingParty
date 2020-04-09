<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Validator;
use Spatie\WebhookServer\WebhookCall;
use Mews\Captcha\Captcha;

class FeedbackController extends Controller
{
    public function index()
    {
        return view('main.feedback');
    }

    public function store(Request $request)
    {
        request()->validate([
            'comment' => 'required',
            'captcha' => 'required|captcha'
        ],
        ['captcha.captcha'=>'Invalid captcha code.']);
        request()->validate(['captcha.captcha'=>'Invalid captcha code.']);
        WebhookCall::create()
            ->url('https://discordapp.com/api/webhooks/610914097298669580/f2rNs2AjDZ-9eYqmtlOUMdIakw7CrIxCkoFEoQoXpAMnP43IxOpFl2I52l0t7M537b4h')
            ->payload([
                'embeds' => Array([
                    "title" => "New feedback from unicycling.party",
                    "fields" => Array([
                        "name" => $request->input('email')==null? 'Anonymous' : $request->input('email'),
                        "value" => $request->input('comment')
                    ])
                ])
            ])
            ->useSecret('sign-using-this-secret')
            ->dispatch();
        return redirect(route('feedback'));
    }

    public function love(Request $request)
    {
        WebhookCall::create()
            ->url(env('DISCORD_WEBHOOK_URL'))
            ->payload([
                'content' => "Someone sent a :heart: from unicycling.party!"
            ])
            ->useSecret('sign-using-this-secret')
            ->dispatch();
            return Redirect::back()->with('message','Heart received!');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function myCaptcha()
    {
        return view('myCaptcha');
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function myCaptchaPost(Request $request)
    {
        request()->validate([
            'email' => 'required|email',
            'password' => 'required',
            'captcha' => 'required|captcha'
        ],
        ['captcha.captcha'=>'Invalid captcha code.']);
        dd("You are here :) .");
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function refreshCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}
