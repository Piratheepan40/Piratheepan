<x-layout>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Grade</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active"><a href="url('/')">Dashbord</a></li>
            <li class="breadcrumb-item active"> <a href="/grades"> Grade</a></li>
        </ol>
        <form action="/grades/{{$grade->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label" for="grade_name" >Grade Name</label>
                <input class="form-control" type="text" id="grade_name" name="grade_name" value="{{$grade->grade_name}}">
            </div>
            <div class="mb-3">
                <label class="form-label" for="grade_group">Grade Group</label>
                <input class="form-control" type="text"id="grade_group" name="grade_group" value="{{$grade->grade_group}}">
            </div>
            <div class="mb-3">
                <label class="form-label" for="grade_order">Grade Order</label>
                <input class="form-control" type="text" id="grade_order" name="grade_order" value="{{$grade->grade_order}}">
            </div>
            <div class="mb-3">
                <label class="form-label" for="grade_color">Grade Color</label>
                <input class="form-control" type="text" id="grade_color" name="grade_color" value="{{$grade->grade_color}}">
            </div>
            <button class="btn btn-primary" type="submit" value="update">Update</button>
        </form>
    </div>
    </x-layout>









