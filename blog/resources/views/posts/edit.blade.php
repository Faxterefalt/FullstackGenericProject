<x-layout :meta-title="$post->title" :meta-description="$post->body" >
<h1>
   {{__('Edit form')}}
</h1>
<form action="{{route('posts.update',$post)}}" method="POST">
    @csrf @method('PATCH')
    <label>
        {{ __('Title') }}<br/>
        <input name="title" type="text" value="{{ old('title',$post->title) }}"/>

        @error('title')
        <br />
        <small style="color:red">{{ $message }}</small>
        @enderror

    </label><br/>
        <label>
        {{__('Body')}} <br/>
        <textarea name="body" >{{old('body',$post->body)}}</textarea>

        @error('body')
        <br />
        <small style="color:red">{{ $message }}</small>
        @enderror

    </label><br/>
<button type="submit">{{__('Send')}}</button>
</form>
<a href="{{route('posts.index')}}">
    Back
</a>
</x-layout>
