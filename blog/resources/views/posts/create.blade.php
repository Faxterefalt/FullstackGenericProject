<x-layout 
    meta-title="Create new post" 
    meta-description="Form to create a new post"
>
<h1>
    Create a new post
</h1>
<form action="{{route('posts.store')}}" method="POST">
    @csrf
    <label>
        Title <br/>
        <input name="title" type="text" />
    </label><br/>
        <label>
        Body <br/>
        <textarea name="body"></textarea>
    </label><br/>
<button type="submit">Send</button>
</form>

<a href="{{route('posts.index')}}">Back</a>

</x-layout>
