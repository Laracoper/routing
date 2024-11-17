<!DOCTYPE html>
<html lang="en">

@include('layout.head')

<body>
    @include('layout.header')
    <main class="container-fluid">

        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>

</html>