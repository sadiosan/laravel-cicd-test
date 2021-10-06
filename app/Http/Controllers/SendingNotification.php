<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\SESNotification;
use App\Models\User;

class SendingNotification extends Controller
{
    public function sendSESNotification()
    {
        $newUser =  (new User)->forceFill([
            'email' => 'sadio.sanghare@volkeno-tank.com'
        ]);

        $newUser->notify(new SESNotification());

        return redirect()->back()->with('message','Email bien envoyé');

    }
}
