<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New App</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />

    @livewireStyles

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">


        <x-topnav />

        <div class="content-wrapper">
            <div class="content">
                <div class="container-fluid" {{--style="transform: translateY(-550px);"--}}>
                    @yield("contenu")
                </div>
            </div>
        </div>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <a href="index3.html" class="brand-link">

                <span class="brand-text font-weight-bold">YBLTD 2</span>
            </a>

            <div class="sidebar">

                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('images/user1-128x128.jpg') }} " class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ userfulName() }}</a>
                    </div>
                </div>


                <x-menu />

            </div>

        </aside>

        <div class="content-wrapper">

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">

                    </div>
                </div>
            </div>


        </div>
        
        <x-sidebar />

        

        <footer class="main-footer">

            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>

            <strong>Copyright &copy; 2022 <a href="#">Espoir.Gnh</a>.</strong>.
        </footer>
    </div>

    <script src="{{ mix('js/app.js') }}"></script>

</body>

</html>
