@component('mail::message')
# Register Camp : {{ $checkout->Camp->title }}

Hi {{ $checkout->User->name }}
<br>
Thank you for register <b>{{ $checkout->Camp->title }}, please see payment instruction by click the button below </b>

@component('mail::button', ['url' => route('dashboard')])
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
