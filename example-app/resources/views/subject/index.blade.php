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
                            <li class="breadcrumb-item active">Subject</li>
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
                                            <th>Subject ID</th>
                                            <th>Subject Name</th>
                                            <th>Subject Order</th>
                                            <th>Subject Color</th>
                                            <th>Show</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Subject ID</th>
                                            <th>Subject Name</th>
                                            <th>Subject Order</th>
                                            <th>Subject Color</th>
                                            <th>Show</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($subjects as $subject)
                                        <tr>
                                            <td>{{$subject->id}}</td>
                                            <td>{{$subject->subject_name}}</td>
                                            <td>{{$subject->subject_order}}</td>
                                            <td>{{$subject->color}}</td>
                                            <td><a href="{{ url('subjects', $subject->id) }}">Show</a></td>
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
