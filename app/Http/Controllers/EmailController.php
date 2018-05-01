<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\UserPortfolio;

use Auth;


use View;
use Request;


use Mail;

use App\Http\Controllers\Controller;

class EmailController extends Controller
{
    /**
     * Send an e-mail reminder to the user.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */

 

    public function sendEmail()
    {



       $sent = Mail::raw('Sending emails with Mailgun and Laravel is easy! ', function($message)
        {
            $message->subject('Mailgun and Laravel are awesome!<br>


                ');
            $message->from('no-reply@zinterim.com', 'Website Name');
            $message->to('d.ortega009@gmail.com');
        });

               if( ! $sent) dd("something wrong");
        dd("send");

    }


}