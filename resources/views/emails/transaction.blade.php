@component('mail::message')
    # Transaction Notification

    Dear Customer,

    A transaction on occurred on your wallet find the details below

    Thanks,
    {{ config('app.name') }}

@endcomponent
