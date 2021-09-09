@component('mail::message')
<h2>Admin | DockSearch</h2>

<strong>{{ $user->first_name }} </strong>just posted a new listing

Thank,<br>
{{ config('app.name') }}
@endcomponent
