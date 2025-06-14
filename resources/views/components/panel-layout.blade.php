<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    @if(auth()->guard('admins')->check())
        <title>پنل مدیریت {{ $title ?? '' }} </title>
    @endif
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/select2/select2.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/dist/css/gallery.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/dist/css/bootstrap-rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/dist/css/custom-style.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/morris/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
    {{-- Removed redundant jQuery import, assuming the one before persian-date is sufficient --}}
    {{-- <script src="{{asset('auth/js/jquery.js')}}"></script> --}}

    <link rel="stylesheet" href="{{ asset('dashboard/dist/css/persian-datepicker.min.css') }}"/>

    {{-- Moved jQuery to the head for better compatibility with other scripts that might rely on it early --}}
    <script src="{{ asset('dashboard/dist/js/jquery.js') }}"></script>

    <script src="{{ asset('dashboard/dist/js/persian-date.min.js') }}"></script>
    <script src="{{ asset('dashboard/dist/js/persian-datepicker.min.js') }}"></script>

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                {{-- Assuming 'home' is a general application home route --}}
                <a href="{{ route('home.index') }}" class="nav-link">خانه</a>
            </li>
        </ul>
        <ul class="navbar-nav mr-auto">
            @if(Auth::guard('admins')->check())
                <li class="nav-item"> {{-- Wrap the form in an li for consistent styling if needed --}}
                    <form action="{{ route('admin.logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger" style="width: 100%">
                            <i class="nav-icon fa fa-power-off"></i>خروج از حساب کاربری
                        </button>
                    </form>
                </li>
            @endif
        </ul>
    </nav>

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        @if(auth()->guard('admins')->check())
            {{-- Link to admin dashboard --}}
            <a href="{{ route('admin.dashboard') }}" class="brand-link">
                <span class="brand-text font-weight-light">پنل مدیریت</span>
            </a>
        @endif

        <div class="sidebar" style="direction: ltr">
            <div style="direction: rtl">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        @if(Auth::guard('admins')->check())
                            <li class="nav-item">
                                <a href="{{ route('admin.dashboard') }}"
                                   class="nav-link {{ \App\Http\Helpers\GenericHelper::isActive('admin.dashboard')}}">
                                    <i class="nav-icon fa fa-dashboard"></i>
                                    <p>
                                        dashboard
                                    </p>
                                </a>
                            </li>

                            {{-- Admins Menu --}}
{{--                            <li class="nav-item has-treeview {{\App\Http\Helpers\GenericHelper::isActive(['admins.index', 'admins.create', 'admins.edit'], 'menu-open')}}">--}}
{{--                                <a href="#"--}}
{{--                                   class="nav-link {{\App\Http\Helpers\GenericHelper::isActive(['admins.index', 'admins.create', 'admins.edit']) }}">--}}
{{--                                    <i class="nav-icon fa fa-user-group"></i>--}}
{{--                                    <p>admins<i class="right fa fa-angle-left"></i></p>--}}
{{--                                </a>--}}
{{--                                <ul class="nav nav-treeview">--}}
{{--                                    <li class="nav-item">--}}
{{--                                        --}}{{-- Corrected route for listing admins --}}
{{--                                        <a href="{{ route('admins.index') }}"--}}
{{--                                           class="nav-link {{\App\Http\Helpers\GenericHelper::isActive('admins.index') }}">--}}
{{--                                            <i class="fa fa-list nav-icon"></i>--}}
{{--                                            <p>list of admins</p>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    @can('admins-store')--}}
{{--                                        <li class="nav-item">--}}
{{--                                            --}}{{-- Corrected route for creating admin --}}
{{--                                            <a href="{{ route('admins.create') }}"--}}
{{--                                               class="nav-link {{\App\Http\Helpers\GenericHelper::isActive('admins.create') }}">--}}
{{--                                                <i class="fa fa-plus nav-icon"></i>--}}
{{--                                                <p>create admin</p>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                    @endcan--}}
{{--                                </ul>--}}
{{--                            </li>--}}

                            {{-- Services Menu --}}
                            <li class="nav-item has-treeview {{\App\Http\Helpers\GenericHelper::isActive(['services.index', 'services.create', 'services.edit'], 'menu-open')}}">
                                <a href="#"
                                   class="nav-link {{\App\Http\Helpers\GenericHelper::isActive(['services.index', 'services.create', 'services.edit'])}}">
                                    <i class="nav-icon fa fa-newspaper"></i>
                                    <p> services <i class="right fa fa-angle-left"></i></p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        {{-- Corrected route for listing services --}}
                                        <a href="{{ route('services.index') }}"
                                           class="nav-link {{\App\Http\Helpers\GenericHelper::isActive('services.index') }}">
                                            <i class="fa fa-list nav-icon"></i>
                                            <p>list of services</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        {{-- Corrected route for creating service --}}
                                        <a href="{{ route('services.create') }}"
                                           class="nav-link {{\App\Http\Helpers\GenericHelper::isActive('services.create') }}">
                                            <i class="fa fa-plus nav-icon"></i>
                                            <p>create service</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
    </aside>
    <div class="content-wrapper">
        {{ $slot }}
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if(\Illuminate\Support\Facades\Session::has('status'))
    <script>
        Swal.fire({
            title: '{{session('status')}}',
            icon: 'success',
            confirmButtonText: 'تایید',
            confirmButtonColor: 'rgb(40,167,69)'
        })
    </script>
@endif

<script src="{{ asset('auth/vendor/bootstrap/js/popper.js') }}"></script>
{{-- This line seems incorrect; $.ui.button is usually part of jQuery UI, not just core jQuery. --}}
{{-- If you're not using jQuery UI, this might cause an error. --}}
{{-- <script>$.widget.bridge('uibutton', $.ui.button)</script> --}}

<script src="{{ asset('dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{{ asset('dashboard/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('dashboard/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('dashboard/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('dashboard/plugins/knob/jquery.knob.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="{{ asset('dashboard/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<script src="{{ asset('dashboard/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('dashboard/plugins/fastclick/fastclick.js') }}"></script>
<script src="{{ asset('dashboard/dist/js/adminlte.js') }}"></script>
<script src="{{ asset('dashboard/dist/js/pages/dashboard.js') }}"></script>
<script src="{{ asset('dashboard/dist/js/demo.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
{{ $scripts ?? '' }}

</body>
</html>
