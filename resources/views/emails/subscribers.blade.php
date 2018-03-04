@component('mail::message')
# Newsletter Updated list

@foreach ($emails as $email)
    {{ $email }}
@endforeach

Thanks,<br>
{{ config('app.name') }}
@endcomponent
