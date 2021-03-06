@php
    $prefix = Request::route()->getPrefix();
    $route = Route::current()->getName();
@endphp

<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        @if(Auth::user()->user_type=='Admin')

            <li class="nav-item has-treeview {{ ($prefix=='/users')?'menu-open':'' }}">
                <a href="" class="nav-link">
                    <i class="nav-icon fa fa-user"></i>
                    <p>
                        Manage User
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('users.view') }}" class="nav-link {{ ($route=='users.view')?'active':'' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>View User</p>
                        </a>
                    </li>
                    
                </ul>
            </li>

        @endif

        <li class="nav-item has-treeview {{ ($prefix=='/profiles')?'menu-open':'' }}">
            <a href="" class="nav-link">
                <i class="nav-icon fa fa-user-md"></i>
                <p>
                    Manage Profile
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('profiles.view') }}" class="nav-link {{ ($route=='profiles.view')?'active':'' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Your Profile</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('profiles.password.view') }}" class="nav-link {{ ($route=='profiles.password.view')?'active':'' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Change Password</p>
                    </a>
                </li>
                
            </ul>
        </li>
        
        <li class="nav-item has-treeview {{ ($prefix=='/logos')?'menu-open':'' }}">
            <a href="" class="nav-link">
                <i class="nav-icon fa fa-image"></i>
                <p>
                    Manage Logo
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('logos.view') }}" class="nav-link {{ ($route=='logos.view')?'active':'' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View Logo</p>
                    </a>
                </li>
                
            </ul>
        </li>

        <li class="nav-item has-treeview {{ ($prefix=='/menues')?'menu-open':'' }}">
            <a href="" class="nav-link">
                <i class="nav-icon fa fa-image"></i>
                <p>
                    Manage Menu
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('menues.view') }}" class="nav-link {{ ($route=='menues.view')?'active':'' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View Menu</p>
                    </a>
                </li>
                
            </ul>
        </li>

        <li class="nav-item has-treeview {{ ($prefix=='/categories')?'menu-open':'' }}">
            <a href="" class="nav-link">
                <i class="nav-icon fa fa-file"></i>
                <p>
                    Manage Category
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('categories.view') }}" class="nav-link {{ ($route=='categories.view')?'active':'' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View Category</p>
                    </a>
                </li>
                
            </ul>
        </li>
        
        <li class="nav-item has-treeview {{ ($prefix=='/districts')?'menu-open':'' }}">
            <a href="" class="nav-link">
                <i class="nav-icon fa fa-globe"></i>
                <p>
                    Manage District
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('districts.view') }}" class="nav-link {{ ($route=='districts.view')?'active':'' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View Districts</p>
                    </a>
                </li>
                
            </ul>
        </li>
        
        <li class="nav-item has-treeview {{ ($prefix=='/posts')?'menu-open':'' }}">
            <a href="" class="nav-link">
                <i class="nav-icon fa fa-globe"></i>
                <p>
                    Manage Post
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('posts.view') }}" class="nav-link {{ ($route=='posts.view')?'active':'' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View Post</p>
                    </a>
                </li>
                
            </ul>
        </li>
        
        <li class="nav-item has-treeview {{ ($prefix=='/contacts')?'menu-open':'' }}">
            <a href="" class="nav-link">
                <i class="nav-icon fa fa-globe"></i>
                <p>
                    Manage Contact
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('contacts.view') }}" class="nav-link {{ ($route=='contacts.view')?'active':'' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View Contact</p>
                    </a>
                </li>
                
            </ul>
        </li>

    </ul>
</nav>
<!-- /.sidebar-menu -->