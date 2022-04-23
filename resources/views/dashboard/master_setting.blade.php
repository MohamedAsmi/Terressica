<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.head')
@stack('css')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">




        @include('layouts.nav_bar')
        @include('layouts.left_bar')


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="row" style="width: 100%;">

                <div class="col-md-12 pt-4 ml-2">
                    <div class="row">
                        <div class="col">
                            @yield('head')
                        </div>
                    </div>
                    <aside class="control-sidebar control-sidebar-dark">
                        <!-- Control sidebar content goes here -->
                    </aside>
                    <!-- /.control-sidebar -->
                </div>

            </div>
            <div class="row pl-4 mr-0">
                <div class="col-md-3 pt-4 text-center second-nav ">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false ">

                        <li class="nav-item ">
                            <p class="text-head">
                                Yleiset
                            </p>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/addnewcategory') }}" class="nav-link ">
                                <p class="text-sub">
                                    Terassin tiedot
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/editnewcategory') }}" class="nav-link ">
                                <p class="text-sub">
                                    Tiimit /osastot
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/chart') }}" class="nav-link ">
                                <p class="text-sub">
                                    Työajanseuranta
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/chat') }}" class="nav-link">
                                <p class="text-sub">
                                    Työntekijäroolit
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/datatable') }}" class="nav-link ">
                                <p class="text-sub">
                                    Kellokortit
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <p class="text-head">
                                Markkinointi
                            </p>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/order_semmary') }}" class="nav-link">
                                <p class="text-sub">
                                    Kuvakirjasto
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/order_semmary_merchain') }}" class="nav-link">
                                <p class="text-sub">
                                    Mallit
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/todo') }}" class="nav-link ">
                                <p class="text-sub">
                                    QR-koodit
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/todo') }}" class="nav-link ">
                                <p class="text-sub">
                                    Sosiaaliset mediat
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/todo') }}" class="nav-link ">
                                <p class="text-sub">
                                    Avainsanat
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <p class="text-head">
                                Integraatiot
                            </p>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/todo') }}" class="nav-link ">
                                <p class="text-sub">
                                    Widgetit
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/todo') }}" class="nav-link ">
                                <p class="text-sub">
                                    Facebook pixels
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/todo') }}" class="nav-link active">
                                <p class="text-sub">
                                    Google
                                </p>
                            </a>
                        </li>
                        {{--  --}}

                    </ul>
                </div>
                <div class="col-md-8 pt-4 container-body ml-2 second-nav pb-3">
                    <div class="row">
                        <div class="col">
                            @yield('body')
                        </div>
                    </div>
                    <aside class="control-sidebar control-sidebar-dark">
                        <!-- Control sidebar content goes here -->
                    </aside>
                    <!-- /.control-sidebar -->
                </div>
                <!-- ./wrapper -->
                @include('layouts.scripts')
                @stack('js')
            </div>
        </div>
    </div>
</body>

</html>
