<x-layout>
    <h1 class="mt-4" style="color: rgb(239, 239, 236); margin:20px">Subjects</h1>
    
    <div style="margin: 20px">
        <a href="/subjects/create" style="display: inline-block; text-decoration: none; color: white; background-color: #182533; padding: 10px 20px; border-radius: 4px; font-weight: bold; text-align: center;">Add New Subject</a>
    </div>
    

    <div class="card mb-4" style="margin: 15px; background-color: #222533">
        <div class="card-header" style="color: #fff">
            <i class="bi bi-book"></i> Subject Details
        </div>
        <div class="card-body" style="margin: 15px">
            <table id="datatablesSimple" class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th>Subject ID</th>
                        <th>Subject Name</th>
                        <th>Subject Order</th>
                        <th>Subject Color</th>
                        <th>Show</th>
                        <th>Edit</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Subject ID</th>
                        <th>Subject Name</th>
                        <th>Subject Order</th>
                        <th>Subject Color</th>
                        <th>Show</th>
                        <th>Edit</th>
                        <th>Remove</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($subjects as $subject)
                        <tr>
                            <td>{{ $subject->id }}</td>
                            <td>{{ $subject->subject_name }}</td>
                            <td>{{ $subject->subject_order }}</td>
                            <td>{{ $subject->color }}</td>
                            <td>
                                <a href="{{ url('subjects', $subject->id) }}" class="btn btn-sm btn-primary">
                                    <i class="fa-solid fa-eye text-white"></i>
                                </a>
                            </td>
                            <td>
                                <a href="{{ url('subjects/'.$subject->id.'/edit') }}"class="btn btn-sm btn-info" >
                                    <i class="fa-solid fa-edit text-white"></i>
                                </a>
                            </td>
                            
                            <td>
                                <form action="/subjects/{{$subject->id}}" method="POST" onsubmit="return confirm('Do You Want to Delete?')">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" onclick="return confirm('Do You Want Delete?')" class="btn btn-sm btn-danger">
                                        <i class="fa-solid fa-trash text-white"></i>
                                    </button>
                                    
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

           
            {{ $subjects->links() }}
        </div>
    </div>
</x-layout>
