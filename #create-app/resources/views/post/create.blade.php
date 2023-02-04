<h1>Success</h1>

<!-- url('post/insert') -->
<form action="{{route('smiya')}}" method="post">
    @csrf
    <input type="text" name="title"> Title <br>
    <textarea name="body" id="" cols="30" rows="10">Title</textarea>
    <button type="submit">Send</button>
</form>