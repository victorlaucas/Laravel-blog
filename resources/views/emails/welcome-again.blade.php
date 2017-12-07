@component('mail::message')
# Introduction

Thanks for registering!

@component('mail::button', ['url' => 'https://laracasts.com'])
Start Browsing
@endcomponent

@component('mail::panel', ['url' => ''])
Some inspirational quote
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
