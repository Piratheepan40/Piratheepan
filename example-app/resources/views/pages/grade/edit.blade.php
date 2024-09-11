<x-layout>
    <div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
        <div style="margin: 35px auto; padding: 20px; background-color: #374259; border-radius: 8px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5); color: #f8f9fa; width: 90%; max-width: 550px; min-height: 500px;">
            <h2 style="margin-bottom: 20px; color: #f8f9fa;">Edit Grade</h2>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="/grades" class="text-decoration-none">Grades</a></li>
                <li class="breadcrumb-item active">Edit Grade</li>
            </ol>
            <form action="/grades/{{$grade->id}}" method="POST">
                @csrf
                @method('PUT')
                
                <div style="margin-bottom: 15px;">
                    <label for="grade_name" style="display: block; margin-bottom: 5px; font-weight: bold;">Grade Name</label>
                    <input type="text" id="grade_name" name="grade_name" class="form-control" style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #495057; background-color: #495057; color: #f8f9fa;" value="{{$grade->grade_name}}">
                </div>
                
                <div style="margin-bottom: 15px;">
                    <label for="grade_group" style="display: block; margin-bottom: 5px; font-weight: bold;">Grade Group</label>
                    <input type="text" id="grade_group" name="grade_group" class="form-control" style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #495057; background-color: #495057; color: #f8f9fa;" value="{{$grade->grade_group}}">
                </div>

                <div style="margin-bottom: 20px;">
                    <label for="grade_order" style="display: block; margin-bottom: 5px; font-weight: bold;">Grade Order</label>
                    <input type="number" id="grade_order" name="grade_order" class="form-control" style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #495057; background-color: #495057; color: #f8f9fa;" value="{{$grade->grade_order}}">
                </div>

                <div style="margin-top: 20px;">
                    <label for="grade_color" style="display: block; margin-bottom: 5px; font-weight: bold;">Grade Color</label>
                    <input type="text" id="grade_color" name="grade_color" class="form-control" required style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #495057; background-color: #495057; color: #f8f9fa;" value="{{$grade->grade_color}}">
                </div>

                <div style="margin-top: 30px;">
                    <input type="submit" value="Update Grade" style="padding: 10px 20px; border-radius: 4px; border: none; background-color: #007bff; color: white; font-size: 16px; cursor: pointer;">
                </div>
            </form>
        </div>
    </div>
</x-layout>