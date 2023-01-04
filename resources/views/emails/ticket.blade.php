@component('mail::message')
# Introduction

The body of your message.
${{ $name }}

You have a new Ticket with ID: {{ $ticket }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
