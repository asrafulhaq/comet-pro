@php 
    $permissions = json_decode(Auth::guard('admin') -> user() -> humayon -> permission);
@endphp 

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu"> 
            <ul>
                
                <li class="active"> 
                    <a href="{{ route('admin.dashboard') }}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
                </li>
                @if(in_array('Sliders', $permissions))
                <li>  
                    <a href="appointment-list.html"><i class="fe fe-layout"></i> <span>Slider</span></a>
                </li>
                @endif
                @if(in_array('Clients', $permissions))
                <li>  
                    <a href="appointment-list.html"><i class="fe fe-layout"></i> <span>Clients</span></a>
                </li>
                @endif 
                @if(in_array('Testimonials', $permissions))
                <li>  
                    <a href="appointment-list.html"><i class="fe fe-layout"></i> <span>Testimonials</span></a>
                </li>
                @endif
                @if(in_array('Our Team', $permissions))
                <li>  
                    <a href="appointment-list.html"><i class="fe fe-layout"></i> <span>Our Team</span></a>
                </li>
                @endif 

                @if(in_array('Posts', $permissions))
                <li class="submenu">
                    <a href="#"><i class="fe fe-users"></i> <span> Posts </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('admin.all') }}"> Posts </a></li>
                        <li><a href="{{ route('post.category.index') }}"> Category </a></li>
                        <li><a href="{{ route('post.tag.index') }}"> Tag </a></li>
                    </ul>
                </li>
                @endif 

                @if(in_array('Products', $permissions))
                <li class="submenu">
                    <a href="#"><i class="fe fe-users"></i> <span> Products </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('admin.all') }}"> Posts </a></li>
                        <li><a href="{{ route('admin.role') }}"> Category </a></li>
                        <li><a href="{{ route('admin.permission') }}"> Tag </a></li>
                    </ul>
                </li>
                @endif 
                @if(in_array('Orders', $permissions))
                <li class="submenu">
                    <a href="#"><i class="fe fe-users"></i> <span> Orders </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('admin.all') }}"> Posts </a></li>
                        <li><a href="{{ route('admin.role') }}"> Category </a></li>
                        <li><a href="{{ route('admin.permission') }}"> Tag </a></li>
                    </ul>
                </li>
                @endif
                @if(in_array('Users', $permissions))
                <li class="submenu">
                    <a href="#"><i class="fe fe-users"></i> <span> Admin User </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('admin.all') }}"> User </a></li>
                        <li><a href="{{ route('admin.role') }}"> Role </a></li>
                        <li><a href="{{ route('admin.permission') }}"> Permission </a></li>
                    </ul>
                </li>
                @endif
                @if(in_array('Settings', $permissions))
                <li>  
                    <a href="appointment-list.html"><i class="fe fe-layout"></i> <span>Settings</span></a>
                </li>
                @endif 

                <li>  
                    <a href="{{ route('admin.logout.system') }}"><i class="fe fe-logout"></i> <span>Logout</span></a>
                </li>
                <li>
                    
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->

