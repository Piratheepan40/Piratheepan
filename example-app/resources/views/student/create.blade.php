<x-layout>
    <body class="sb-nav-fixed">
        <x-nav/>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
               <x-sidebar/>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container mt-5">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="card shadow-lg border-left-primary">
                                    <div class="card-header">
                                        <h3 class="mb-0">Create Student</h3>
                                    </div>
                                    <div class="card-body">
                                        <form action="/students" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label for="first_name">First Name</label>
                                                <input type="text" id="first_name" name="first_name" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="last_name">Last Name</label>
                                                <input type="text" id="last_name" name="last_name" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="grade_id">Grade Name</label>
                                                {{-- <select id="grade_id" name="grade_id" class="form-select" required>
                                                    <option value="">Select Grade</option>
                                                </select> --}}
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-block mt-3">Create Student</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <x-footer/>
            </div>
        </div>
    </body>
</x-layout>