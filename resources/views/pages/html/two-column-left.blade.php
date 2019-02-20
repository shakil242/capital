<!DOCTYPE html>
<html lang="en">
<head>
    @include('pages.html.head')
</head>
<body>
<div id="wrapper">
    @include('pages.html.header')
    @yield('hero')
    <main role="main" id="main">
        <section class="content-section">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 alignright-holder">
                        @yield('content')
                    </div>
                    <div class="col-xs-12 col-sm-4 alignleft-holder">
                        @yield('aside')
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('pages.html.news')
    @include('pages.html.footer')
    @include('pages.html.scripts')
</div>
</body>
</html>