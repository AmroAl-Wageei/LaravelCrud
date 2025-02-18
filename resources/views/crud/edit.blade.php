<h1> Edit Student </h1>

<form action="{{route('crud.update' , $crud->id )}}" method="POST">
    {{--  Important for request and increption تشفير    --}}
    @csrf
    @method('PUT')
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="{{$crud->name}}"><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{{$crud->email}}" required><br><br>

    <button type="submit">Update</button>

</form>

