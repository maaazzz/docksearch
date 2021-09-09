@component('mail::message')
# Introduction

<strong>Name</strong> : {{ ucfirst($contact['name']) }}<br>
<strong>Email</strong> : {{ $contact['email'] }}<br>
@if (!empty($contact['subject']))
<strong>Subject</strong> : {{ $contact['subject'] ?? '' }}
@endif
<br>

<strong>Message :</strong>
<p style="color: rgb(78, 78, 78)">
    {{ $contact['message'] }}
</p>



Thanks,<br>
{{ config('app.name') }}
@endcomponent
