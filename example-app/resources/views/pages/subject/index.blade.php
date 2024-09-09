<x-layout>
    <h1 class="mt-4" style="color: rgb(239, 239, 236); margin:20px">Subject</h1>
    <button>
        <a href="/subjects/create">Student ADD</a>
    </button>
    <div class="card mb-4" style="margin: 15px; background-color: #222533">
        <div class="card-header" style="color: #fff">
            <i class="bi bi-book"></i>
         Subject Details
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
                        <th>Edit</th>
                        <th>REMOVE</th>
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
                        <th>REMOVE</th>
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
                                    <i class="fa-solid fa-eye"></i> Show
                                </a>
                            </td>
                            <td>
                                <a href="{{ url("subjects/".$subject->id.'/edit') }}" class="btn btn-sm btn-primary">
                                    <i class="fa-solid fa-eye"></i> Edit
                                </a>
                            </td>
                            <td>
                                <form action="/subjects/{{$subject->id}}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <input type="submit" value="DELETE" onclick="return confirm('Do You Want Delete?')">
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
