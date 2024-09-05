<x-layout>
    <h1 class="mt-4">Grade</h1>
    <div class="card mb-4" style="margin: 15px">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Example
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
                            <td><a href="{{ url('/grades/'.$grade->id) }}" class="btn btn-primary">Show</a></td>
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