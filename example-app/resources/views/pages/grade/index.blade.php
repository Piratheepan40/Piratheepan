<x-layout>
    <h1 class="mt-4" style="margin: 20px">Grade</h1>
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
                    </tr>
                </tfoot>
            </table>
            {{$grades->links()}}
        </div>
    </div>
</x-layout>