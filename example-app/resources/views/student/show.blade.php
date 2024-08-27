<x-layout>

    <body class="sb-nav-fixed">
        <x-nav />
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <x-sidebar />
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Student</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                            <li class="breadcrumb-item active">Grade Tables</li>
                        </ol>

                        <div class="card">
                            <div class="card-header">
                                <h3 class="mb-0">{{ $student->last_name }} Details</h3>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Attribute</th>
                                            <th>Value</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Student ID</td>
                                            <td>{{ $student->id }}</td>
                                        </tr>
                                        <tr>
                                            <td>First Name</td>
                                            <td>{{ $student->first_name }}</td>
                                        </tr>
                                        <tr>
                                            <td>LastName</td>
                                            <td>{{ $student->last_name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Grade ID</td>
                                            <td>{{ $student->grade_id }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="mb-0">Subject Details</h3>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table table-striped table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>Subject ID</th>
                                            <th>Subject Name</th>
                                            <th>Subject Order</th>
                                            <th>Subject Color</th>
                                        </tr>
                                        @foreach ($student->subjects as $subject)
                                            <tr>
                                                <td>{{ $subject->id }}</td>
                                                <td>{{ $subject->subject_name }}</td>
                                                <td>{{ $subject->subject_order }}</td>
                                                <td>{{ $subject->subject_color }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <br>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="mb-0">Grade Details</h3>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table table-striped table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>Grade ID</th>
                                            <th>Grade Name</th>
                                            <th>Grade Order</th>
                                            <th>Grade Group</th>
                                            <th>Grade Color</th>
                                        </tr>
                                        @foreach ($student->subjects as $subject)
                                            <tr>

                                                <td>{{ $student->grade_id }}</td>
                                                <td>{{ $student->grade->grade_name }}</td>
                                                <td>{{ $student->grade->grade_order }}</td>
                                                <td>{{ $student->grade->grade_group }}</td>
                                                <td>{{ $student->grade->grade_color }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </main>
                <x-footer />
            </div>
        </div>
    </body>
</x-layout>
