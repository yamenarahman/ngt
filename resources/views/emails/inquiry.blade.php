@component('mail::message')
# New inquiry from "{{ $message->name }}", {{ $message->email }}
# Subject: {{ $message->subject }}

{{ $message->body }}

This inquiry was created at {{ $message->created_at->format('D, d-m-y H:i') }}<br>
@endcomponent
