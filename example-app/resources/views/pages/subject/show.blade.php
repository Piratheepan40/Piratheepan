<x-layout>
    <div class="container-fluid px-4 pt-4">
        <h3 class="mb-0" style="color:aliceblue"><span style="color: {{$subject->color}};">{{$subject->subject_name}}</span>'S Details</h3>
    <div style="margin-left:10px">
        <nav aria-label="breadcrump">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active"><a href="{{ url('subjects') }}">Subject</a></li>
            </ol>
        </nav>
    </div>
    </div>
    <div class="row">
        <div class="col-xl-6">
            <div class="card mb-4" style="margin-left: 10px; box-shadow: 1px 1px 20px #111111; border-radius: 20px; background-color: #374259;">
                <div class="card-header">
                    <i class="bi bi-person-circle"style="color: aliceblue"></i></i>
                    <b style="color: aliceblue"> Students</b>
                </div>
                <div class="card-body">
                    @if(count($subject->students)<=0)
                    <h3 style="text-align: center; color: aliceblue;">No Data!</h3>
                    @endif
                        @foreach ($subject->students as $student)
                        <div class="card mb-4" style="height:60px;margin-right: 10px10px;box-shadow: 1px 1px 20px #111111 ;border-radius: 20px;">
                            <a href="/students/{{$student->id}}" class="student-list" style="text-decoration: none">
                                <div class="card-body" style="padding: 4px 4px 4px 8px;margin: ">
                                    <li class="list-group-item" style="display: flex;align-items: center"><div style="width:50px;height:50px;border-radius: 50%;
                                     background-color: aqua; display: inline-block"><img src="{{ Vite::asset('resources/image/student.png') }}" style="width:100%;height:100%;
                                     object-fit: cover " class="card-img-center" alt="{{$student->first_name}}"></div><div style="display: inline; align-items: center;justify-content: center;
                                     margin-left: 30px" >{{$student->first_name}} {{$student->last_name}}</div></li>
                                </div>
                            </a>
                        </div>
                        @endforeach
                </div>
            </div>
        </div>
        <div class="col-xl-6">
    <div class="card mb-4" style="margin-right: 10px;box-shadow: 1px 1px 20px #111111; border-radius: 20px; background-color: #374259;">
        <div class="card-header">
            <i class="bi bi-star" style="color: aliceblue"></i>
            <b style="color: aliceblue">Grades</b>
        </div>
        <div class="card-body">
            @if(count($subject->grades) <= 0)
            <h3 style="text-align: center; color: white; font-weight: bold;">No Data!</h3>
            @else
                @foreach ($subject->grades as $grade)
                    <div class="card mb-4" style="margin-right: 10px; box-shadow: 1px 1px 20px #111111; border-radius: 20px;">
                        <a href="/grades/{{$grade->id}}" class="student-list" style="text-decoration: none">
                            <div class="card-body">
                                <p class="list-group-item text-truncate" style="max-width: 200px; overflow: hidden; white-space: nowrap;">{{$grade->grade_name}}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
</x-layout>