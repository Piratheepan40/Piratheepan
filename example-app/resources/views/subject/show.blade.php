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
                        <h1 class="mt-4">Subject</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                            <li class="breadcrumb-item active"><a href="{{ url('subjects') }}">Subject Tables</a></li>
                        </ol>
                       
                        <div class="card">
                            <div class="card-header">
                                <h3 class="mb-0"><span style="color: {{$subject->color}};">{{$subject->subject_name}}</span> Details</h3>
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
                                            <td>Subject ID</td>
                                            <td>{{ $subject->id }}</td>
                                        </tr>
                                        <tr>
                                            <td>Subject Name</td>
                                            <td>{{ $subject->subject_name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Subject Order</td>
                                            <td>{{ $subject->subject_order }}</td>
                                        </tr>
                                        <tr>
                                            <td>Subject Color</td>
                                            <td>{{ $subject->color }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

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
                                        @foreach ($students as $student)
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
               <x-footer/>
            </div>
        </div>
    </body>
    </x-layout>