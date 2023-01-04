@component('mail::message')
# New AttachmentMail template

The body of your message.

@component('mail::button', ['url' => 'www.example.com'])
Button Text
@endcomponent

Thanks for checking,<br>
{{ config('app.name') }}
@endcomponent
