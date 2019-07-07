@component('mail::message')
{{ config('app.name') }}

# Congratulation ["email" => $email]

### You have just registered an account. 
### Verify your email address by clicking the link below.

@component('mail::button', ['url' => $verifyemail])
Verify Your Email
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
