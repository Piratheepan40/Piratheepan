<x-layout>
    <h1 class="mt-4" style="margin: 20px">Grade</h1>
    <div style="margin: 20px">
        <a href="/grades/create" style="display: inline-block; text-decoration: none; color: white; background-color: #007bff; padding: 10px 20px; border-radius: 4px; font-weight: bold; text-align: center;">Add New Grade</a>
    </div>
    <div class="card mb-4" style="margin: 15px ;background-color: #222533">
        <div class="card-header"  style="color: #fff">
            <i class="bi bi-mortarboard"></i>
            Grade's Details
        </div>
        <div class="card-body" style="margin: 15px" >
            <table id="datatablesSimple" class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th>Grade ID</th>
                        <th>Grade Name</th>
                        <th>Grade Group</th>
                        <th>Grade Order</th>
                        <th>Grade Color</th>
                        <th>Show</th>
                        <th>Edit</th>
                        <th>Show</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($grades as $grade)
                        <tr>
                            <td>{{ $grade->id }}</td>
                            <td>{{ $grade->grade_name }}</td>
                            <td>{{ $grade->grade_group }}</td>
                            <td>{{ $grade->grade_order }}</td>
                            <td>{{ $grade->grade_color }}</td>
                            
                            <td>
                                <a href="{{ url('/grades/'.$grade->id) }}" class="btn btn-sm btn-primary">
                                    <i class="fa-solid fa-eye"></i> Show
                                </a>
                            </td>
                            <td>
                                <a href="{{ url("grades/".$grade->id.'/edit') }}" class="btn btn-sm btn-primary">
                                    <i class="fa-solid fa-edit">Edit</i>
                               
                                </a>
                            </td>
                            <td>
                                <form action="/grades/{{$grade->id}}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <input type="submit" value="DELETE" onclick="return confirm('Do You Want Delete?')">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Grade ID</th>
                        <th>Grade Name</th>
                        <th>Grade Group</th>
                        <th>Grade Order</th>
                        <th>Grade Color</th>
                        <th>Show</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </tfoot>
            </table>
            {{$grades->links()}}
        </div>
    </div>
</x-layout>