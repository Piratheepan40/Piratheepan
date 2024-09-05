<x-layout>
    <h1 class="mt-4" style="color:orange">Student Detail  </h1>
    <div class="row">
                 <div class="col-xl-6">
                     <div class="card mb-4" style="margin:10px">
                         <div class="card-header">
                         <i class="bi bi-person-circle"></i>
                           Student's Information
                         </div>
                         <div class="card-body">
                            <div><img src="" alt=""></div>
                            <table>
                                <tr>
                                    <td colspan="4">
                                        <div style="width: 120px;height:120px;border-radius: 600px;background-color:aqua">
                                            <img src="{{ Vite::asset('resources/image/student.png') }}"  style="width:100%;height:100%;object-fit:cover" class="card-img-center" alt="{{$student->first_name}}">
                                        </div>
                                    </td>
                                    <td style="padding-left:100px ">
                                        <p>ID&emsp;&emsp;&emsp;<b>{{$student->id}}</b></p>
                                        <p>Name &emsp; <b>{{$student->first_name}}{{$student->last_name}}</b></p>
                                        <p>Grade  &emsp;<b>{{$student->grade->grade_name}}</p>
                                    </td>
                                </tr>
                            </table>
                        
                         </div>
                     </div>
                 </div>
                 <div class="col-xl-6">
                     <div class="card mb-4" style="margin: 10px">
                         <div class="card-header">
                         <i class="bi bi-book"></i>
                             Student's Subjects
                         </div>
                         <div class="card-body">
                            @if(count($student->subjects)<=0)
                            <h3 style="text-align:center">No Data!</h3>
                            @endif
                            @foreach ($student->subjects as $subject)
                                <div class="card mb-4" style="margin-right:10px 10px;box-shadow:1px 1px 20px #111111;border-radius:20px">
                                <a href="/subject/{{$subject->id}}" class="student-list" style="text-decoration: none">
                                <div class="card-body">
                                    <li class="list-group-item"><b>{{$subject->subject_name}}</b></li>
                                </div>
                                </a>
                                </div>
                            @endforeach
                         </div>
                     </div>
                 </div>
             </div>
</x-layout>