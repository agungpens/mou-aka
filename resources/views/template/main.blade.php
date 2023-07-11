<!DOCTYPE html>
<html lang="en">

@include('template.header')

<body>
    <div class="layer"></div>
    <!-- ! Body -->
    <a class="skip-link sr-only" href="#skip-target">Skip to content</a>
    <div class="page-flex">
        <!-- ! Sidebar -->
        @include('template.sidebar')
        <div class="main-wrapper">
            <!-- ! Main nav -->
            @include('template.navbar')
            <!-- ! Main -->
            <main class="main users chart-page" id="skip-target">
                <div class="container">
                    @if (isset($title_content))
                        <h2 class="main-title">{{ $title_content }}</h2>
                    @endif
                    {!! isset($view_file) ? $view_file : '' !!}
                </div>
            </main>
            <!-- ! Footer -->
            @include('template.footer')
        </div>
    </div>
    @include('template.scripts')
</body>

</html>
