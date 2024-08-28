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
                            <li class="breadcrumb-item active">Grade</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Grade ID</th>
                                            <th>Grade Name</th>
                                            <th>Grade Group</th>
                                            <th>Grade Order</th>
                                            <th>Grade Color</th>
                                            <th>Show</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Grade ID</th>
                                            <th>Grade Name</th>
                                            <th>Grade Group</th>
                                            <th>Grade Order</th>
                                            <th>Grade Color</th>
                                            <th>Show</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($grades as $grade)
                                        <tr>
                                            <td>{{$grade->id}}</td>
                                           <td>{{ $grade->grade_name }}</td>
                                            <td>{{$grade->grade_group}}</td>
                                            <td>{{$grade->grade_order}}</td>
                                            <td>{{$grade->grade_color}}</td>
                                            <td>
                                                <button type="button" onclick="location.href='{{ url('/grades/' . $grade->id) }}'" class="btn btn-primary">
                                                    Show
                                                </button>
                                            </td>
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
