<form action="" method="POST">
    @csrf
@foreach($post as $key => $value)
<label for="">Title</label>
<input type="text" name="title" id="" placeholder="Title" value="{{$value->title}}">
<label for="">Description</label>
<input type="text" name="description" id="" placeholder="Description" value="{{$value->description}}">
<button type="submit">Update</button>
@endforeach
</form>