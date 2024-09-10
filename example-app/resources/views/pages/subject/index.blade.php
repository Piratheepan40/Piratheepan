<x-layout>
    <h1 class="mt-4" style="color: rgb(239, 239, 236); margin:20px">Subjects</h1>
    
    <div style="margin: 20px">
        <a href="/subjects/create" style="display: inline-block; text-decoration: none; color: white; background-color: #007bff; padding: 10px 20px; border-radius: 4px; font-weight: bold; text-align: center;">Add New Subject</a>
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
                                <a href="{{ url('subjects', $subject->id) }}" style="display: inline-block; text-decoration: none; color: white; background-color: #007bff; padding: 6px 12px; border-radius: 4px; text-align: center;">Show</a>
                            </td>
                            <td>
                                <a href="{{ url('subjects/'.$subject->id.'/edit') }}" style="display: inline-block; text-decoration: none; color: white; background-color: #28a745; padding: 6px 12px; border-radius: 4px; text-align: center;">Edit</a>
                            </td>
                            
                            <td>
                                <form action="/subjects/{{$subject->id}}" method="POST" onsubmit="return confirm('Do You Want to Delete?')">
                                    @method('delete')
                                    @csrf
                                    <input type="submit" value="DELETE">
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
