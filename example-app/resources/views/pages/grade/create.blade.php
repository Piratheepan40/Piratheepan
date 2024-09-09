<x-layout>
    <form action="/grades" method="POST">
        @csrf
        <label for="grade_name">Grade Name</label>
        <input type="text" id="grade_name" name="grade_name" class="form-control" required><br>
        <label for="grade_group">Grade Group</label>
        <input type="text" id="grade_group" name="grade_group" class="form-control" required><br>
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
