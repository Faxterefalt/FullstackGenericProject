<x-layout :meta-title="$post->title" :meta-description="$post->body" >
<h1>
   {{__('Edit form')}}
</h1>
<form action="{{route('posts.update',$post)}}" method="POST">
    @csrf @method('PATCH')
    @include('posts.form-fields')
    <button type="submit">{{__('Send')}}</button>
</form>
<a href="{{route('posts.index')}}">
    Back
</a>
</x-layout>
