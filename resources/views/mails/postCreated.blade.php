@component('mail::message')
# Nuovo Post
 
Un nuovo Post è stato Creato!
 
@component('mail::button', ['url' => route('admin.posts.show', $post)])
{{ $post->title }}
@endcomponent
 
Thanks,<br>
{{ config('app.name') }}
@endcomponent

