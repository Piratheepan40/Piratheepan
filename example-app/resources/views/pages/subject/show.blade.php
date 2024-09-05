<x-layout>
    <h1 class="mt-4" style="color: orange">Subject Details</h1>
    <div style="margin-left:10px">
        <nav aria-label="breadcrump">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active"><a href="{{ url('subjects') }}">Subject</a></li>
                <li class="breadcrumb-item active"><span style="color: {{$subject->color}};">{{$subject->subject_name}}</span></li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-xl-6">
            <div class="card mb-4" style="margin-left: 10px;box-shadow: 1px 1px 20px #111111 ;border-radius: 20px">
                <div class="card-header">
                    <i class="bi bi-person-circle"></i>
                    Students
                </div>
                <div class="card-body">
                    @if(count($subject->students)<=0)
                    <h3 style="text-align: center">No Data!</h3>
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
            <div class="card mb-4" style="margin-right: 10px10px;box-shadow: 1px 1px 20px #111111 ;border-radius: 20px">
                <div class="card-header">
                    <i class="bi bi-star"></i>
                    Grades
                </div>
                <div class="card-body">
                    @if(count($subject->grades)<=0)
                    <h3 style="text-align: center">No Data!</h3>
                    @endif
                        @foreach ($subject->grades as $grade)
                            <div class="card mb-4" style="margin-right: 10px10px;box-shadow: 1px 1px 20px #111111 ;border-radius: 20px">
                                <a href="/grades/{{$grade->id}}" class="student-list" style="text-decoration: none">
                                    <div class="card-body" >
                                        <li class="list-group-item">{{$grade->grade_name}}</li>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                </div>
            </div>
        </div>
</x-layout>