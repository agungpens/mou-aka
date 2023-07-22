<!DOCTYPE html>
<html lang="en">

@include('template.header')

<body>

    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3"
                    stroke-miterlimit="10" />
            </svg>
        </div>
    </div>


    <div id="main-wrapper">
        @include('template.navbar')
        @include('template.sidebar')

        <div class="content-body">
            @include('template.breadcumb')
            <div class="container-fluid">
                {!! isset($view_file) ? $view_file : '' !!}
            </div>

        </div>
        @include('template.footer')
        @include('template.scripts')
        @yield('scripts')
    </div>

</body>

</html>
