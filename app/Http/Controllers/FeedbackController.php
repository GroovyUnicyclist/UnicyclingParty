<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
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
}