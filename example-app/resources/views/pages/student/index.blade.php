<x-layout>
    <h1 class="mt-4" style="color: orange; margin:20px">Student</h1>
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
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Student ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Grade Name</th>
                        <th>Show</th>
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
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$students->links()}}
        </div>
    </div>
</x-layout>