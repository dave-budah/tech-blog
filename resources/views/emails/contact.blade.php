<x-mail::message>
# New Message Notification

Dear Team,

You have received a new message from your website. Please find the details below:

**Name:** {{ $data['name'] }}
**Email:** {{ $data['email'] }}

**Message:**
{{ $data['message'] }}

<x-mail::button :url="''">
Reply to Message
</x-mail::button>

Thank you,
{{ config('app.name') }}
</x-mail::message>
