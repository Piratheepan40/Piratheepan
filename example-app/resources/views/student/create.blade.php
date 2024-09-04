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
                        <button type="submit">Submit</button>
                    </form>
                </main>
                <x-footer/>
            </div>
        </div>
    </body>
</x-layout>