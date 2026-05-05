<x-layout meta-title="Blog" meta-description="Blog Description" >
    

    <h1>Blog</h1>    
    <a href="{{route('posts.create')}}">Create new post</a>
    @foreach ($posts as $post)
    <div style="display: flex; align-items: baseline">
        <h2>
            <a href="{{route('posts.show',$post)}}">
                {{$post->title}}
            </a>
        </h2> &nbsp;
        <a href="{{route('posts.edit', $post)}}">{{__('Edit')}}</a>
    </div>
    @endforeach
</x-layout>
