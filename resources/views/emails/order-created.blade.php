@component('mail::message')
# Introduction

The body of your message.
{{$order->loadingClient}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
