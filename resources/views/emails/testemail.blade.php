@component('mail::message')
# Dit is een test email

Dit is de body van een test email

@component('mail::button', ['url' => ''])
Druk hier en er gebeurt niks...
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
