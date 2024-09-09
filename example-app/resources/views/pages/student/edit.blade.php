<x-layout>
    <form action="/students/{{$student->id}}" method="POST">
        @csrf
        @method ('put')
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name" class="form-control" required value="{{$student->first_name}}"><br>
        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name" class="form-control" required value="{{$student->last_name}}"><br>
        <label for="grade_id">Grade  Name</label>
        <select name="grade_id" id="grade_id">
            @foreach ( $grades as $key=> $value)
                <option value="{{$key}} " {{$key==$student->grade_id?"selected":""}}>{{$value}}</option>
            @endforeach
        </select>
        <br>
        <br>
        <br>
        <input type="submit">
    </form>
</x-layout>
