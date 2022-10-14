<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="{{ asset('assets') }}" data-template="vertical-menu-template-free">

@include('auth.layouts.header')

<body>
    <!-- Content -->
    <div class="container-xxl">
        @yield('content')
    </div>
    <!-- / Content -->

    @include('auth.layouts.script')
</body>

</html>
