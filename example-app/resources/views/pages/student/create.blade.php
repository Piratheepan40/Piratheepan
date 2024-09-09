<x-layout>
    <form action="/students" method="POST">
        @csrf
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name" class="form-control" required><br>
        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name" class="form-control" required><br>
        <label for="grade_id">Grade  Name</label>
        <select name="grade_id" id="grade_id">
            @foreach ( $grades as $key=> $value)
                <option value="{{$key}}">{{$value}}</option>
            @endforeach
        </select> 
        <br>
        <br>
        <br>
        <input type="submit">
    </form>
</x-layout>
