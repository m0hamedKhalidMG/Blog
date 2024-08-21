<!DOCTYPE html>
<html lang="en">

@include('theme.partials.header')


<body>
    @include('theme.partials.head')
    @yield('content')

    @include('theme.partials.footer')
    @include('theme.partials.script')
</body>

</html>
