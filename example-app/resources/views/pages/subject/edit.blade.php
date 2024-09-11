<x-layout>
    <div style="margin: 20px auto; padding: 20px; background-color: #374259; border-radius: 8px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3); color: #f8f9fa; width: 90%; max-width: 600px;">
        <h2 style="margin-bottom: 20px; color: #f8f9fa;">Edit Subject</h2>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/subjects" class="text-decoration-none">Subjects</a></li>
            <li class="breadcrumb-item active">Edit Subject</li>
        </ol>
        <form action="/subjects/{{$subject->id}}" method="POST">
            @csrf
            @method('put')

            <div style="margin-bottom: 15px;">
                <label for="subject_name" style="display: block; margin-bottom: 5px; font-weight: bold;">Subject Name</label>
                <input type="text" id="subject_name" name="subject_name" class="form-control" required value="{{$subject->subject_name}}" style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #495057; background-color: #495057; color: #f8f9fa;">
            </div>

            <div style="margin-bottom: 15px;">
                <label for="subject_order" style="display: block; margin-bottom: 5px; font-weight: bold;">Subject Order</label>
                <input type="number" id="subject_order" name="subject_order" class="form-control" required value="{{$subject->subject_order}}" style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #495057; background-color: #495057; color: #f8f9fa;">
            </div>

            <div style="margin-bottom: 20px;">
                <label for="color" style="display: block; margin-bottom: 5px; font-weight: bold;">Subject Color</label>
                <input type="text" id="color" name="color" class="form-control" required value="{{$subject->color}}" style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #495057; background-color: #495057; color: #f8f9fa;">
            </div>

            <div style="margin-top: 20px;">
                <input type="submit" value="Update Subject" style="padding: 10px 20px; border-radius: 4px; border: none; background-color: #007bff; color: white; font-size: 16px; cursor: pointer;">
            </div>
        </form>
    </div>
</x-layout>