<x-layout>
    <div style="margin: 20px auto; padding: 20px; background-color: #374259; border-radius: 8px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3); color: #f8f9fa; width: 90%; max-width: 600px;">
        <h2 style="margin-bottom: 20px; color: #f8f9fa;">Edit Student</h2>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/students" class="text-decoration-none">Students</a></li>
            <li class="breadcrumb-item active">Edit Student</li>
        </ol>
        <form action="/students/{{$student->id}}" method="POST">
            @csrf
            @method('put')

            <div style="margin-bottom: 15px;">
                <label for="first_name" style="display: block; margin-bottom: 5px; font-weight: bold;">First Name</label>
                <input type="text" id="first_name" name="first_name" class="form-control" required value="{{$student->first_name}}" style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #495057; background-color: #495057; color: #f8f9fa;">
            </div>

            <div style="margin-bottom: 15px;">
                <label for="last_name" style="display: block; margin-bottom: 5px; font-weight: bold;">Last Name</label>
                <input type="text" id="last_name" name="last_name" class="form-control" required value="{{$student->last_name}}" style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #495057; background-color: #495057; color: #f8f9fa;">
            </div>

            <div style="margin-bottom: 20px;">
                <label for="grade_id" style="display: block; margin-bottom: 5px; font-weight: bold;">Grade Name</label>
                <select name="grade_id" id="grade_id" style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #495057; background-color: #495057; color: #f8f9fa;">
                    @foreach ($grades as $key => $value)
                        <option value="{{$key}}" {{$key == $student->grade_id ? 'selected' : ''}}>{{$value}}</option>
                    @endforeach
                </select>
            </div>

            <div style="margin-top: 20px;">
                <input type="submit" value="Update Student" style="padding: 10px 20px; border-radius: 4px; border: none; background-color: #007bff; color: white; font-size: 16px; cursor: pointer;">
            </div>
        </form>
    </div>
</x-layout>
