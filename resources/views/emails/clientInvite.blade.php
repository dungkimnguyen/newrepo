<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Hello John Smith!</h2>

        <div>
           


Welcome to Zinterim. You have been invited to join your company's Network list on behalf of your employer!

Is this you? Please click the link below and accept your login invite to begin.

            {{ URL::to('/clientInvite/' . $confirmation_code) }}.<br/>




        </div>

    </body>
</html>