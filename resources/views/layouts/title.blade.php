<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            
            <a class="navbar-brand" href="#">@yield('prince')</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
               
                <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="ti-home"></i>
                            <p>HOME</p>
                            <b class="caret"></b>
                      </a>
                      <ul class="dropdown-menu">
                        @if (Route::has('login'))
                        @auth
                 
                      <li><a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                      </li>
                       
                        @else
                        <li> <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                        </li>
                        @if (Route::has('register'))
                        <li><a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        </li>
                        @endif
                        @endauth
                        @endif
                        <li> <a class="dropdown-item" href="#"
                            onclick="document.getElementById('logout-form').submit()">logout
                         </a></li>
                         <form id="logout-form" action="/logout" method="POST" >
                            @csrf
                        </form>
                      </ul>
                </li>
            
            </ul>

        </div>
    </div>
</nav>