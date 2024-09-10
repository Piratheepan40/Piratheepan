<x-layout>
    <h1 class="mt-4" style="color: orange; margin:20px">Student</h1>
    <div style="margin: 20px">
        <a href="/students/create" style="display: inline-block; text-decoration: none; color: white; background-color: #007bff; padding: 10px 20px; border-radius: 4px; font-weight: bold; text-align: center;">Add New Student</a>
    </div>
    
    <div class="card mb-4" style="margin: 15px ;background-color: #222533" >
        <div class="card-header" style="color: #fff">
            <i class="bi bi-person-circle"></i>
            Student's Details
        </div>
        <div class="card-body" style="margin: 15px">
            <table id="datatablesSimple" class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th>Student ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Grade Name</th>
                        <th>Show</th>
                        <th>Edit</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Student ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Grade Name</th>
                        <th>Show</th>
                        <th>Edit</th>
                        <th>Remove</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($students as $student)
                    <tr>
                        <td>{{$student->id}}</td>
                        <td>{{$student->first_name}}</td>
                        <td>{{$student->last_name}}</td>
                        <td>{{$student->grade->grade_name}}</td>
                        <td>
                            <a href="{{ url("/students/{$student->id}") }}" class="btn btn-sm btn-primary">
                                <i class="fa-solid fa-eye"></i> Show
                            </a>
                        </td>
                        <td>
                            <a href="{{ url("students/".$student->id.'/edit') }}" class="btn btn-sm btn-primary">
                                <i class="fa-solid fa-edit">Edit</i>
                           
                            </a>
                        </td>
                        <td>
                            <form action="/students/{{$student->id}}" method="POST">
                                @method('delete')
                                @csrf
                                <input type="submit" value="DELETE" onclick="return confirm('Do You Want Delete?')">
                            </form>
                        </td>
                       
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$students->links()}}
        </div>
    </div>
</x-layout>