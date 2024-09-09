<x-layout>
    <body class="sb-nav-fixed">
        <x-nav/>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
               <x-sidebar/>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <form action="/students" method="POST">
                        @csrf
                        <label for="grade_id">Grade Name</label>
                        <input type="text" id="grade_id" name="grade_id">
                        <label for="grade_group">Grade Group</label>
                        <input type="text" id="grade_group" name="grade_group">
                        <label for="grade_order">Grade Order</label>
                        <input type="text" id="grade_id" name="grade_id">
                        <label for="grade_color">Grade Color</label>
                        <input type="text" id="grade_color" name="grade_color">
                        <input type="submit">
                    </form>
                </main>
                <x-footer/>
            </div>
        </div>
    </body>
</x-layout>