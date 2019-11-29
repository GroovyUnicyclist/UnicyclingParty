<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Validator;
use Spatie\WebhookServer\WebhookCall;

class FeedbackController extends Controller
{
    public function index()
    {
        return view('main.feedback');
    }

    public function store(Request $request)
    {
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
        // Test
        // WebhookCall::create()
        //     ->url('https://canary.discordapp.com/api/webhooks/610914097298669580/f2rNs2AjDZ-9eYqmtlOUMdIakw7CrIxCkoFEoQoXpAMnP43IxOpFl2I52l0t7M537b4h')
        //     ->payload([
        //         'content' => "Someone sent a :heart: from unicycling.party!"
        //     ])
        //     ->useSecret('sign-using-this-secret')
        //     ->dispatch();

        // General
        WebhookCall::create()
            ->url('https://canary.discordapp.com/api/webhooks/646941584750805022/ENsVqmFs_AoRtwtOAyckweeZS-KJI71nZ0r7silcjNGVXymYvJfmp6T5WqB3-aSl4zB8')
            ->payload([
                'content' => "Someone sent a :heart: from unicycling.party!"
            ])
            ->useSecret('sign-using-this-secret')
            ->dispatch();
            return Redirect::back()->with('message','Heart received!');
    }
}
