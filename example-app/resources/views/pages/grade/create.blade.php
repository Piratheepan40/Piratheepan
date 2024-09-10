<x-layout>
    <main>
        <div class="container-fluid px-4 pt-4">
            <h3 class="mb-0" style="color: aliceblue">Add New Grade</h3>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="/grades" class="text-decoration-none">Grades</a></li>
                <li class="breadcrumb-item active">Add New</li>
            </ol>

            <div class="row p-4">
                <div class="col-xl-6">
                    <div class="card mb-4" style="box-shadow: 1px 1px 20px #374259; border-radius: 20px; background-color: #374259;">
                        <div class="card-header" style="color: aliceblue;">
                            <i class="bi bi-plus-circle"></i> <b>Add Grade Details</b>
                        </div>
                        <div class="card-body">
                            <form action="/grades" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="grade_name" style="color: aliceblue;">Grade Name</label>
                                    <input type="text" id="grade_name" name="grade_name" class="form-control" style="border-radius: 10px;" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="grade_group" style="color: aliceblue;">Grade Group</label>
                                    <input type="text" id="grade_group" name="grade_group" class="form-control" style="border-radius: 10px;" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="grade_id" style="color: aliceblue;">Select Grade</label>
                                    <select name="grade_id" id="grade_id" class="form-control" style="border-radius: 10px;">
                                        @foreach ($grades as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" style="background-color: #1E90FF; border-color: #1E90FF; border-radius: 10px;">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <style>
        .form-control {
            background-color: #f8f9fa;
            border: none;
            box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.1);
        }
        .form-control:focus {
            border-color: #1E90FF;
            box-shadow: 1px 1px 10px rgba(30, 144, 255, 0.5);
        }
        .btn-primary {
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #4682B4;
            box-shadow: 1px 1px 10px rgba(30, 144, 255, 0.5);
        }
    </style>
</x-layout>
