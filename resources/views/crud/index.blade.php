<h1>Show All Students</h1>
<button><a href="{{ route('crud.create') }}">Add New</a></button><br /><br /><br />


<table>
    <thead>
        <tr>
            <th>#</th>  
            <th>Name</th>  
            <th>Email</th>  
            <th>Action</th>  
        </tr>
    </thead>
    <tbody>
        
        @foreach ($cruds as $crud)
            <tr> 
                <td>{{ $crud->id }}</td>
                <td>{{ $crud->name }}</td>
                <td>{{ $crud->email }}</td>
                <td>
                    <a href="{{ route('crud.edit' , $crud->id ) }}">Edit</a> |
                    <form action="{{ route('crud.destroy', $crud->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                    
                </td>
            </tr> 
        @endforeach 
    </tbody>
</table>




{{-- #1 Related to show error undefind variable $cruds --}}
{{-- 
@forelse ($cruds as $crud)
<tr> 
    <td>{{ $crud->id }}</td>
    <td>{{ $crud->name }}</td>
    <td>{{ $crud->email }}</td>
    <td>
        <a href="">Edit</a> | 
        <a href="">Delete</a>
    </td>
</tr> 
@empty
<tr>
    <td colspan="4">No records found.</td>
</tr>
@endforelse  --}}