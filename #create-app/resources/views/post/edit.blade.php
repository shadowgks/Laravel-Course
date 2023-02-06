<h1>Edit</h1>

<!-- url('post/insert') -->
<form action="{{route('update-post',$post->id)}}" method="post">
    @csrf;
    @method('put');
    <input type="text" name="title" value="{{$post->title}}"> Title <br>
    <textarea name="body" id="" cols="30" rows="10">{{$post->body}}</textarea>
    <button type="submit">Send</button>
</form>
