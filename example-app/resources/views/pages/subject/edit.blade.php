<x-layout>
    <form action="/subjects/{{$subject->id}}" method="POST">
        @csrf
        @method ('put')
        <label for="subject_name">Subject Name</label>
        <input type="text" id="subject_name" name="subject_name" class="form-control" required value="{{$subject->subject_name}}"><br>
        <label for="subject_order">Subject Order</label>
        <input type="text" id="subject_order" name="subject_order" class="form-control" required value="{{$subject->subject_order}}"><br>
        <label for="color">Subject Order</label>
        <input type="text" id="color" name="color" class="form-control" required value="{{$subject->color}}"><br>
        <br>
        <br>
        <br>
        <input type="submit">
    </form>
</x-layout>
