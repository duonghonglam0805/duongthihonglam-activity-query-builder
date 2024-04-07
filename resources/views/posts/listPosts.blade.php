<a href="{{route('add')}}">Add new Post</a>
<h1>List posts</h1>
@foreach($posts as $key => $post)
    <p>{{$post->title}}</p>
    <p>{{$post->description}}</p>
    <a href="{{route('update',['id'=>$post->id])}}">Update</a>
    <a href="{{route('delete',['id'=>$post->id])}}">Delete</a>
    <hr>
@endforeach