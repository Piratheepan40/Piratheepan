<x-layout>
    <body class="sb-nav-fixed">
        <x-nav/>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
               <x-sidebar/>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Grade</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                            <li class="breadcrumb-item active"><a href="{{ url('grades') }}">Grade Tables</a></li>
                        </ol>
                       
                        <div class="card">
                            <div class="card-header">
                                <h3 class="mb-0" > <span style="color: {{$grade->grade_color}};">{{$grade->grade_name}}</span> Details</h3>
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
                                            <td>Grade ID</td>
                                            <td>{{ $grade->id }}</td>
                                        </tr>
                                        <tr>
                                            <td>Grade Name</td>
                                            <td>{{ $grade->grade_name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Grade Group</td>
                                            <td>{{ $grade->grade_group }}</td>
                                        </tr>
                                        <tr>
                                            <td>Grade order</td>
                                            <td>{{ $grade->grade_order }}</td>
                                        </tr>
                                        <tr>
                                            <td>Grade Color</td>
                                            <td>{{ $grade->grade_color }}</td>
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
                                        @foreach ($grade->subjects as $subject)
                                            <tr>
                                                <td>{{ $subject->id }}</td>
                                                <td>{{ $subject->subject_name }}</td>
                                                <td>{{ $subject->subject_order }}</td>
                                                <td>{{ $subject->color }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <br>
                        <br>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="mb-0">Student Details</h3>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table table-striped table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>Student ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                        </tr>
                                        @foreach ($students as $student)
                                            <tr>
                                                <td>{{ $student->id }}</td>
                                                <td> {{ $student->first_name }}</td>
                                                <td>{{ $student->last_name }}</td>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </main>
               <x-footer/>
            </div>
        </div>
    </body>
    </x-layout>