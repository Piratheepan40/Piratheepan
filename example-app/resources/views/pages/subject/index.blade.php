<x-layout>
    <h1 class="mt-4">Subject</h1>
    <div class="card mb-4" style="margin: 15px; background-color:rgb(38, 33, 33)" >
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Example
        </div>
        <div class="card-body" style="margin: 15px">
            <table id="datatablesSimple"class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th>Subject ID</th>
                        <th>Subject Name</th>
                        <th>Subject Order</th>
                        <th>Subject Color</th>
                        <th>Show</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Subject ID</th>
                        <th>Subject Name</th>
                        <th>Subject Order</th>
                        <th>Subject Color</th>
                        <th>Show</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($subjects as $subject)
                    <tr>
                        <td>{{$subject->id}}</td>
                        <td>{{$subject->subject_name}}</td>
                        <td>{{$subject->subject_order}}</td>
                        <td>{{$subject->color}}</td>
                        <td><a href="{{ url('subjects', $subject->id) }}" class="btn btn-primary">Show</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$subjects->links()}}
        </div>
    </div>
</x-layout>