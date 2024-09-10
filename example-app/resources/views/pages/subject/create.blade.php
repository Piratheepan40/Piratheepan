<x-layout>
    <main>
        <div class="container-fluid px-4 pt-4">
            <h3 class="mb-0" style="color: aliceblue;">Create New Subject</h3>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="/subjects" class="text-decoration-none">Subjects</a></li>
                <li class="breadcrumb-item active">Create Subject</li>
            </ol>

            <div class="row p-4">
                <div class="col-xl-6">
                    <div class="card mb-4" style="box-shadow: 1px 1px 20px #374259; border-radius: 20px; background-color: #374259;">
                        <div class="card-header" style="color: aliceblue;">
                            <i class="bi bi-pencil-square"></i>
                            <b>Create Subject</b>
                        </div>
                        <div class="card-body" style="color: aliceblue;">
                            <form action="/subjects" method="POST">
                                @csrf

                                <div class="form-group mb-3">
                                    <label for="subject_name" class="form-label">Subject Name</label>
                                    <input type="text" id="subject_name" name="subject_name" class="form-control" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="subject_order" class="form-label">Subject Order</label>
                                    <input type="text" id="subject_order" name="subject_order" class="form-control" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="color" class="form-label">Color</label>
                                    <input type="text" id="color" name="color" class="form-control" required>
                                </div>

                                <div class="form-group text-center">
                                    <input type="submit" value="Submit" class="btn btn-primary">
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
            background-color: #f1f1f1;
            color: #374259;
            border-radius: 10px;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #4e4e4e;
        }

        .form-label {
            color: aliceblue;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 10px;
            padding: 10px 20px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</x-layout>
