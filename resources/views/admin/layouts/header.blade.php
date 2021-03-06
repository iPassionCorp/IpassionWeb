<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/administrator/dashboard')}}">
                IPassion
            </a>
        </div>
        <!-- /.navbar-header -->
        <ul class="nav navbar-top-links navbar-right">
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <strong>{{ Auth::user()->name }}</strong>
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    @if(Auth::user()->email != 'admin@ipassion.co.th')
                        <li><a href="{{url('/administrator/user/edit/'.Auth::user()->id)}}"><i class="fa fa-gear fa-fw"></i> Account Settings</a>
                        </li>
                        <li class="divider"></li>
                    @else
                        
                    @endif
                    <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="{{url('/administrator/dashboard')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-files-o fa-fw"></i> Pages Management<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('/administrator/pages')}}">Pages Content</a>
                                </li>
                                <li>
                                        <a href="{{url('/administrator/clients')}}">Our Client & Partnership</a>
                                    </li>
                                <li>
                                    <a href="{{url('/administrator/careers')}}">Careers Openings</a>
                                </li>
                            </ul>
                    </li>
                    <li>
                            <a href="#"><i class="fa fa-tasks fa-fw"></i> Application Form<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{url('/administrator/contact-form')}}">Contact Form</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/administrator/careers-form')}}">Careers Form</a>
                                    </li>
                                </ul>
                        </li>
                    <li>
                        <a href="#"><i class="fa fa-cogs fa-fw"></i> Settings Management<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('/administrator/user')}}">User Management</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>