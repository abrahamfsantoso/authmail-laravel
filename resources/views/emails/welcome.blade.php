@component('mail::message')
# Introduction

Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea minus tenetur id iure ratione itaque eveniet perferendis
similique voluptatibus non.

@component('mail::button', ['url' => 'https://www.google.com/'])
Visit Site
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent