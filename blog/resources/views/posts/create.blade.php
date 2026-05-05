<x-layout 
    meta-title="Create new post" 
    meta-description="Form to create a new post"
>
<h1>
    {{__('Create a new post')}}
</h1>


<form action="{{route('posts.store')}}" method="POST">
    @csrf
    <label>
        {{ __('Title') }}<br/>
        <input name="title" type="text" value="{{ old('title') }}"/>

        @error('title')
        <br />
        <small style="color:red">{{ $message }}</small>
        @enderror

    </label><br/>
        <label>
        {{__('Body')}} <br/>
        <textarea name="body" >{{old('body')}}</textarea>

        @error('body')
        <br />
        <small style="color:red">{{ $message }}</small>
        @enderror

    </label><br/>
<button type="submit">{{__('Send')}}</button>
</form>

<a href="{{route('posts.index')}}">{{__('Back')}}</a>

</x-layout>
