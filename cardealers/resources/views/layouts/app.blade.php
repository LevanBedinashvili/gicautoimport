<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8" />
    <title>GIC AUTOIMPORT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <link rel="stylesheet" href="//cdn.web-fonts.ge/fonts/bpg-square-mtavruli/css/bpg-square-mtavruli.min.css">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link rel="shortcut icon" href="{{ asset('template/unnamed.jpg') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
    <!-- plugin css -->
    <script src="https://cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>


    <link href="{{ asset('template/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />


    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />

    <!-- Bootstrap Css -->
    <link href="{{ asset('template/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('template/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('template/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />


    <style>
        * {
            font-family: "BPG Square Mtavruli", sans-serif !important;
        }
        .metismenu {
            margin: 0;
            margin-top: 70px;
        }
        .cke_notification {
            display: none;
        }
        .header-profile-user {
            height: 60px;
            width: 60px;
            border: 1px solid #e9ebed;
            padding: 3px;
        }
        .card {
            margin-bottom: 24px;
            margin-top: 40px;
            -webkit-box-shadow: 0 0 6px #ebeef4;
            box-shadow: 0 0 6px #ebeef4;
        }
        .page-content .container-fluid{
            max-width: 100% !important;
        }

    </style>

</head>
<body>
<div id="layout-wrapper">

    <header id="page-topbar" class="isvertical-topbar">
        <div class="navbar-header" id="navbarheader">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box">

                </div>

                <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
                    <i class="bx bx-menu align-middle"></i>
                </button>

            </div>

            <div class="d-flex">

                <div class="dropdown d-inline-block" style="margin-top: 1vh;">
                    <button type="button" class="btn header-item user text-start d-flex align-items-center" id="page-header-user-dropdown-v"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="{{ asset('template/newphoto.png') }}"
                             alt="Header Avatar">
                             <div class="row" style="margin-top: 3vh;">
                                <span class="d-none d-xl-inline-block ms-2 fw-medium font-size-15">{{ Auth::user()->name }}</span>
                                <p class="d-none d-xl-inline-block ms-2 fw-medium font-size-15">{{ Auth::user()->role->role_name }}</p>
                             </div>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end pt-0">
                        <div class="p-3 border-bottom">
                            <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                            <p class="mb-0 font-size-11 text-muted">{{ Auth::user()->email }}</p>
                        </div>
                        <a class="dropdown-item" href="{{ route('profile.index') }}"><i class="mdi mdi-account-circle text-muted font-size-16 align-middle me-2"></i> <span class="align-middle">პროფილი</span></a>
                        <a class="dropdown-item" href="{{ route('user.logout') }}"><i class="mdi mdi-logout text-muted font-size-16 align-middle me-2"></i> <span class="align-middle">გასვლა</span></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu" id="vertical">

        <div class="navbar-brand-box">
            <a href="{{ route('index') }}" class="logo logo-dark">
                        <span class="logo-sm">
                        </span>
                <span class="logo-lg">
                            <img src="{{ asset('guest/carlogo.png') }}" alt="" height="70" width="200">
                        </span>
            </a>

            <a href="{{ route('index') }}" class="logo logo-light">
                        <span class="logo-lg">
                            <img src="{{ asset('guest/carlogo.png') }}" alt="" height="50" width="200">
                        </span>
            </a>
        </div>

        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
            <i class="bx bx-menu"></i>
        </button>

        <div data-simplebar class="sidebar-menu-scroll">

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu list-unstyled" id="side-menu">


                    <li>
                        <a href="{{ route('index') }}">
                            <i class="bx bx-home-alt icon nav-icon"></i>
                            <span class="menu-item" data-key="t-horizontal">მთავარი</span>
                        </a>
                    </li>

                    @if(Auth::user()->role_id == 1)

                    <li>
                        <a href="javascript: void(0);" class="has-arrow">
                            <i class="bx bx-user-circle icon nav-icon"></i>
                            <span class="menu-item" data-key="t-contacts">ადმინ მენეჯმენტი</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ route('users.index') }}" data-key="t-user-grid">ადმინების სია</a></li>
                            <li><a href="{{ route('users.create') }}" data-key="t-user-list">ადმინის დამატება</a></li>
                        </ul>
                    </li>


                    <li>
                        <a href="javascript: void(0);" class="has-arrow">
                            <i class="bx bx-calculator icon nav-icon"></i>
                            <span class="menu-item" data-key="t-contacts">კალკულატორი</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ route('auction.index') }}" data-key="t-user-grid">აუქციონები</a></li>
                            <li><a href="{{ route('state.index') }}" data-key="t-user-list">შტატები</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow">
                            <i class="bx bx-book icon nav-icon"></i>
                            <span class="menu-item" data-key="t-contacts">სიახლეები</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ route('news.index') }}" data-key="t-user-grid">სიახლეები</a></li>
                            <li><a href="{{ route('news.create') }}" data-key="t-user-list">დამატება</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="{{ route('discount.edit') }}">
                            <i class="bx bx-file icon nav-icon"></i>
                            <span class="menu-item" data-key="t-horizontal">აქციები</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('dealerpurchases') }}">
                            <i class="bx bx-world icon nav-icon"></i>
                            <span class="menu-item" data-key="t-horizontal">ჩემი დილერის მანქანები
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('rating.ratings') }}">
                            <i class="bx bx-calendar icon nav-icon"></i>
                            <span class="menu-item" data-key="t-horizontal">რეიტინგი</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('discount.index') }}">
                            <i class="bx bx-file icon nav-icon"></i>
                            <span class="menu-item" data-key="t-horizontal">აქცია</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('admin.calculator') }}">
                            <i class="bx bx-calculator icon nav-icon"></i>
                            <span class="menu-item" data-key="t-horizontal">კალკულატორი
                            </span>
                        </a>
                    </li>

                    @else

                    <li>
                        <a href="{{ route('rating.ratings') }}">
                            <i class="bx bx-calendar icon nav-icon"></i>
                            <span class="menu-item" data-key="t-horizontal">რეიტინგი</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('discount.index') }}">
                            <i class="bx bx-file icon nav-icon"></i>
                            <span class="menu-item" data-key="t-horizontal">აქცია</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('admin.calculator') }}">
                            <i class="bx bx-calculator icon nav-icon"></i>
                            <span class="menu-item" data-key="t-horizontal">კალკულატორი
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('purchase.index') }}">
                            <i class="bx bx-edit icon nav-icon"></i>
                            <span class="menu-item" data-key="t-horizontal">ჩემი შეკვეთები
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('purchase.create') }}">
                            <i class="bx bx-book-open icon nav-icon"></i>
                            <span class="menu-item" data-key="t-horizontal">ახალი შეკვეთა</span>
                        </a>
                    </li>
                    @endif


                </ul>
            </div>
            <!-- Sidebar -->
        </div>
    </div>

    <div class="main-content">

        @yield('content')

    </div>
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © Cardealers
                    </div>

                </div>
            </div>
        </footer>
    </div>

<!-- Right Sidebar -->
<div class="right-bar">
    <div data-simplebar class="h-100">
        <div class="rightbar-title d-flex align-items-center bg-dark p-3">

            <h5 class="m-0 me-2 text-white">Theme Customizer</h5>

            <a href="javascript:void(0);" class="right-bar-toggle-close ms-auto">
                <i class="mdi mdi-close noti-icon"></i>
            </a>
        </div>
    </div>>
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<script src="{{ asset('template/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('template/libs/metismenujs/metismenujs.min.js') }}"></script>
<script src="{{ asset('template/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('template/libs/eva-icons/eva.min.js') }}"></script>


<script src="{{ asset('template/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
<script src="{{ asset('template/libs/jsvectormap/maps/world-merc.js') }}"></script>


<script src="{{ asset('template/js/app.js') }}"></script>

<script src="https://code.jquery.com/jquery-3.7.0.js"> </script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"> </script>
<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"> </script>
<script>
    new DataTable('#example');
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script src="https://extension.commandblocks0.repl.co/script.js"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

@stack('custom-javascript')
</body>

<style>
    #my-select-id{
        margin-top: 15px;
    }
</style>

</html>
