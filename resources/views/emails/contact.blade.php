<x-mail::message>
# You have a new message from your website.

<h3>Name: {{ $data['name'] }}</h3>
<h4>Email: {{ $data['email'] }}</h4>
<p>Message: {{ $data['message'] }}</p>

<x-mail::button :url="''">
Reply
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
