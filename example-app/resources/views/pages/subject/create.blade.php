<x-layout>
    <form action="/subjects" method="POST">
        @csrf
        <br>
        <label for="subject_name">Subject Name</label>
        <input type="text" id="subject_name" name="subject_name" class="form-control" required><br>
        
        <label for="subject_order">Subject Order</label>
        <input type="text" id="subject_order" name="subject_order" class="form-control" required><br>

        <label for="color">Color</label>
        <input type="text" id="color" name="color" class="form-control" required><br><br><br>
        <input type="submit">
    </form>
</x-layout>