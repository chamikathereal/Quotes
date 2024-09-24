<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Quotes</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
</head>

<body>

    <div class="container">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <!-- Left side: Home link -->
                <div class="col-4 pt-1">
                    <a class="text-muted" href="/">Home</a>
                </div>

                <!-- Center: Title -->
                <div class="col-4 text-center">
                    <a class="blog-header-logo text-dark text-decoration-none" href="#">Quotes</a>
                </div>

                <!-- Right side: Buttons / Dropdown -->
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <div class="d-block d-md-none">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bi bi-menu-button-wide"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <li>
                                    <a class="dropdown-item btn btn-sm btn-outline-secondary me-2"
                                        href="{{ route('register') }}">Sign up</a>
                                </li>
                                <li>
                                    <a class="dropdown-item btn btn-sm btn-outline-secondary"
                                        href="{{ route('login') }}">Sign In</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="d-none d-md-block">
                        <a class="btn btn-sm btn-outline-secondary me-2" href="{{ route('register') }}">Sign up</a>
                        <a class="btn btn-sm btn-outline-secondary" href="{{ route('login') }}">Sign In</a>
                    </div>
                </div>
            </div>
        </header>

        @yield('content')

    </div>


    <footer class="blog-footer text-center">
        <p>&copy;
            <script>
                document.write(new Date().getFullYear());
            </script> Quotes. All rights reserved.
        </p>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>




    <script>
        window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <script src="../../../../assets/js/vendor/holder.min.js"></script>

    <script src="{{ asset('themes/bootstrap-css/js/app.js') }}"></script>


    <script>
        Holder.addTheme('thumb', {
            bg: '#55595c',
            fg: '#eceeef',
            text: 'Thumbnail'
        });
    </script>
</body>

</html>
