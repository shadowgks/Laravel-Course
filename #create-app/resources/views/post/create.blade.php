<h1>Create</h1>

<!-- url('post/insert') -->
<form action="{{route('smiya')}}" method="post">
    @csrf
    <input type="text" name="title"> Title <br>
    body<br>
    <textarea name="body" id="" cols="30" rows="10"></textarea>
    <button type="submit">Send</button>
</form>
