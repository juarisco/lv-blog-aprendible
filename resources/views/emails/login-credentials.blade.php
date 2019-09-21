@component('mail::message')
# @lang('Your credentials to sign in ') {{ config('app.name') }}

@lang('Use these credentials to sign in to app').

@component('mail::table')
    | Username | Contraseña |
    |:----------|:------------|
    | {{ $user->email }} | {{ $password }} |
@endcomponent

@component('mail::button', ['url' => url('login')])
@lang('Login')
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
