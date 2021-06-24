<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-CRM</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('head')
</head>
<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="las la-leaf"></span><a href="/">e-CRM</a></h2>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="/" class="{{ Request::path() === '/' ? 'active' : '' }}"><span class="las la-igloo"></span>
                        <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="/clients" class="{{ Request::is('clients*') ? 'active' : '' }}"><span class="las la-building"></span>
                        <span>Clienti</span></a>
                </li>
                <li>
                    <a href="/contacte" class="{{ Request::is('contacte*') ? 'active' : '' }}"><span class="las la-users"></span>
                        <span>Contacte</span></a>
                </li>
                <li>
                    <a href="/costs" class="{{ Request::is('costs*') ? 'active' : '' }}"><span class="las la-shopping-bag"></span>
                        <span>Cheltuieli</span></a>
                </li>
                <li>
                    <a href="/tasks" class="{{ Request::is('tasks*') ? 'active' : '' }}"><span class="las la-clipboard-list"></span>
                        <span>Sarcini</span></a>
                </li>
                <li>
                    <a href="/leads" class="{{ Request::is('leads*') ? 'active' : '' }}"><span class="las la-money-bill-wave"></span>
                        <span>Leaduri</span></a>
                </li>
                <li>
                    <a href="/orders" class="{{ Request::is('orders*') ? 'active' : '' }}"><span class="las la-shopping-bag"></span>
                        <span>Comenzi</span></a>
                </li>

                <li>
                    <a href="/reports" class="{{ Request::is('reports*') ? 'active' : '' }}"><span class="las la-chart-bar"></span>
                        <span>Rapoarte</span></a>
                </li>

                {{-- <li>
                    <a href="/settings" class="{{ Request::is('settings*') ? 'active' : '' }}"><span class="las la-cog"></span>
                        <span>Setari</span></a>
                </li> --}}

            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h2>
                {{-- <label for="">
                    <span class="las la-bars"></span>
                </label> --}}
                @yield('page-title')
            </h2>

            <!-- <div class="search-wrapper">
                <span class="las la-search">
                    <input type="search" placeholder="Search here" />
                </span>
            </div> -->

            <div class="user-wrapper">
                @auth
                <img src="https://i.pravatar.cc/150?img={{Auth::user()->photo }}" width="40px" height="40px" alt="">
                @endauth
                {{-- <img src="{{asset('img/6.jpg')}}" width="40px" height="40px" alt=""> --}}

                {{-- <img src="img/6.jpg" width="40px" height="40px" alt=""> --}}
                <div>
                    @auth
                    <h4>{{Auth::user()->name }}</h4>    
                    <small>{{Auth::user()->position}}</small>
                    @endauth
                </div>
            </div>
        </header>

        <main>
            @yield('content')
        </main>
    </div>
    @yield('footer-scripts')
    @yield('charts')
</body>
</html>