<x-layout>
    <div class="container-fluid px-4 pt-4">
        <h3 class="mb-0" style="color: aliceblue">{{ $student->last_name }}'S Details</h3>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="{{ url('students') }}">Student Tables</a></li>
            
        </ol>
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4" style="background-color:#374259;border-radius:20px;">
                    <div class="card-header">
                        <i class="bi bi-person-circle" style="color: aliceblue;"></i>
                        <b style="color: aliceblue;">Student's Information</b>
                    </div>
                    <div class="card-body" style="display: flex; justify-content: center; align-items: center; flex-direction: column; padding: 20px;">
                        <div style="width: 120px; height: 120px; border-radius: 50%; background-color: aqua; margin-bottom: 20px">
                            <img src="{{ Vite::asset('resources/image/student.png') }}" 
                                 style="width:100%;height:100%;object-fit:cover"
                                 class="card-img-center" 
                                 alt="{{$student->first_name}}">
                        </div>
                        <div style="text-align: center; margin-top: 20px">
                            <p style="color: aliceblue"><b >ID:</b> {{$student->id}}</p>
                            <p style="color: aliceblue"><b>Name:</b> {{$student->first_name}} {{$student->last_name}}</p>
                            <p style="color: aliceblue"><b>Grade:</b> {{$student->grade->grade_name}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4" style="background-color:#374259;">
                    <div class="card-header">
                        <i class="fas fa-book-open me-1" style="color: aliceblue;"></i>
                        <b style="color: aliceblue;">Subject Information</b>
                    </div>
                    <div class="card-body">
                        @if ($student -> subjects -> isEmpty())
                        <h3 class="text-center" style="color: white;">No Data!</h3>
                        @else
                            @foreach ($student -> subjects as $subject)
                            <div style="margin-right: 10px;margin-bottom:10px; box-shadow:1px 1px 20px #111111; border-radius:20px">
                                <a href="{{url('subjects/' . $subject -> id)}}" class="student-list text-decoration-none list-unstyled">
                                    <div class="card-body">
                                        <li class="list group-item ">{{$subject -> subject_name}}</li>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>