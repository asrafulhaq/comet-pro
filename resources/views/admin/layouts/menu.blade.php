<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu"> 
            <ul>

                <li class="active"> 
                    <a href="{{ route('admin.dashboard') }}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
                </li>
                <li>  
                    <a href="appointment-list.html"><i class="fe fe-layout"></i> <span>Slider</span></a>
                </li>

                
                <li class="submenu">
                    <a href="#"><i class="fe fe-users"></i> <span> Admin User </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('admin.all') }}"> User </a></li>
                        <li><a href="{{ route('admin.role') }}"> Role </a></li>
                        <li><a href="{{ route('admin.permission') }}"> Permission </a></li>
                    </ul>
                </li>

                <li>  
                    <a href="{{ route('admin.logout.system') }}"><i class="fe fe-logout"></i> <span>Logout</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->