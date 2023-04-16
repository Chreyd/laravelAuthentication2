<x-mail::message>
# Introduction

Coucou les amis

<x-mail::button :url="$url" color="success">
Button Text
</x-mail::button>

Merci,<br>
{{ config('app.name') }}
</x-mail::message>
