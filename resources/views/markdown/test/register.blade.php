@component('mail::message')

# Email Verification Message


You are recieving this email inorder to verify your email address. 

@component('mail::button', ['url' => 'http:localhost:8000/test/' . $test->email . '/' . $test->token])
Click To Verify!
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
