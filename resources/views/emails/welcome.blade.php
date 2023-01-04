@component('mail::message')
# Welcome to my App

Hello Thank you for registering with us

@component('mail::button', ['url' => 'https://www.wap.com'])
Visit site
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
