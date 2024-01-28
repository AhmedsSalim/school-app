<!DOCTYPE html>
<html lang="en">

@include('website.layouts.header')
@yield('styles')
<body>
    <div class="bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        @include('website.layouts.navbar')

        @yield('content')

        @include('website.layouts.footer')
        @yield('scripts')
</body>

</html>