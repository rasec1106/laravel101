<form action="{{ route('posts.store') }}" method="post">
    @csrf 
    <!-- csrf is a helper of blade  -->

    @if($errors->any())
        <ul>
        @foreach($errors->all() as $err)
            <li>{{$err}}</li>
        @endforeach
        </ul>
    @endif
    <input type="text" name="name" value="{{old('name')}}">
    <input type="text" name="description" value="{{old('description')}}">
    <input type="text" name="author" value="{{old('author')}}">
    <button type="submit">Enviar</button>
</form>