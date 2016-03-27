
<nav class="navbar-default navbar-static-side" role="navigation">
    <!-- sidebar-collapse -->
    <div class="sidebar-collapse">
        <!-- side-menu -->
        <ul class="nav" id="side-menu">
            <li>
                <!-- user image section-->
                <div class="user-section">
                    <div class="user-info">
                        <div>Welcome<strong>&nbsp;&nbsp;&nbsp;</strong></div>
                    </div>
                </div>

            </li>
            <li class="">
                <a href="{{ url('home') }}"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i>Website Management<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ url('user') }}">Users</a>
                    </li>
                    <li>
                        <a href="{{ url('gallery') }}">Gallery</a>
                    </li>
                    <li>
                        <a href="{{ url('offer') }}">Offer</a>
                    </li>
                    <li>
                        <a href="{{ url('slider') }}">Slides</a>
                    </li>
                </ul>
                <!-- second-level-items -->
            </li>

        </ul>
        <!-- end side-menu -->
    </div>
    <!-- end sidebar-collapse -->
</nav>