<div class="sidebar-wrapper">
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text">
            H.R.M.S 
        </a>
    </div>

    <ul class="nav">
        <li class="{{Request::is ('/')?'active':''}}">
            <a href="/">
                <i class="ti-panel"></i>
                <p>Dashboard</p>
            </a>
        </li>
           <li class="{{Request::is ('job_insert')?'active':''}}">
            <a href="/job_insert">
                <i class="fas fa-list"></i>
                <p>Job Titles</p>
            </a>
        </li>
            {{-- <li class="{{Request::is ('user')?'active':''}}">
            <a href="user">
                <i class="ti-user"></i>
                <p>User Profile</p>
            </a>
        </li> --}}
        {{-- <li class="{{Request::is ('table')?'active':''}}">
            <a href="table">
                <i class="ti-view-list-alt"></i>
                <p>Table List</p>
            </a>
        </li> --}}
        {{-- <li class="{{Request::is ('job_title')?'active':''}}">
            <a href="job_title">
                <i class="ti-view-list-alt"></i>
                <p>Job Title</p>
            </a>
        </li> --}}
        {{-- <li class="{{Request::is ('typograph')?'active':''}}">
            <a href="typograph">
                <i class="ti-text"></i>
                <p>Typography</p>
            </a>
        </li> --}}

        {{-- <li class="{{Request::is ('icons')?'active':''}}">
            <a href="icons">
                <i class="ti-pencil-alt2"></i>
                <p>Icons</p>
            </a>
        </li> --}}
        {{-- <li class="{{Request::is ('maps')?'active':''}}">
            <a href="maps">
                <i class="ti-map"></i>
                <p>Maps</p>
            </a>
        </li> --}}
        <li class="{{ Request::is('depart_insert')?'active':'' }}">
            <a href="/depart_insert">
                <i class="fa fa-building"></i>
                <p>Department</p>
            </a>
        </li>
        <li class="{{ Request::is('employees')?'active':'' }}">
            <a href="/employees">
                <i class="fa fa-users"></i>
                <p>Employees</p>
            </a>
        </li>
        {{-- <li class="{{Request::is ('notifications')?'active':''}}">
            <a href="notifications">
                <i class="ti-bell"></i>
                <p>Notifications</p>
            </a>
        </li> --}}
        
        {{-- <li class="active-pro">
            <a href="upgrade">
                <i class="ti-export"></i>
                <p>Upgrade to PRO</p>
            </a>
        </li> --}}
      
        {{-- <li class="active-pro">
            <a href="upgrade">
                <i class="ti-export"></i>
                <p>Attendance</p>
            </a>
        </li> --}}
    </ul>
</div>