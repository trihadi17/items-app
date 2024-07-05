<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistem Informasi Pencatatan Barang</title>

    {{-- CSS --}}
    @include('style.css')

</head>
<body>

    {{-- Navbar --}}
    @include('templates.header')

    {{-- Content --}}
    <div class="wrapper">
        <div class="container-fluid">
            {{-- Page Title --}}
            <div class="row">
                <div class="col-12">
                    <h4 class="page-title">@yield('title')</h4>
                </div>
            </div>
            {{-- End --}}

            {{-- Content --}}
            @yield('content')

        </div>
    </div>

    {{-- Footer --}}
    @include('templates.footer')

    {{-- Script --}}
    @include('style.script')
</body>
</html>