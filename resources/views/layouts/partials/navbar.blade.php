<aside class="navbar-aside" id="offcanvas_aside">
    <div class="aside-top">
        <a href="index.html" class="brand-wrap">
            <img src="{{ asset('backend/assets/imgs/theme/logo.svg')}}" class="logo" alt="Evara Dashboard">
        </a>
        <div>
            <button class="btn btn-icon btn-aside-minimize"> <i class="text-muted material-icons md-menu_open"></i> </button>
        </div>
    </div>
    <nav>
        <ul class="menu-aside">
            <li class="menu-item active">
                <a class="menu-link" href="{{ URL('/')}}"> <i class="icon material-icons md-home"></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li class="menu-item ">
                <a class="menu-link" href="{{ route('categorices.index') }}"> <i class="icon material-icons md-shopping_bag"></i>
                    <span class="text">Manage Categories</span>                 
                </a>               
            </li>
      
     
            <li class="menu-item has-submenu">
                <a class="menu-link" href="page-form-product-1.html"> <i class="icon material-icons md-add_box"></i>
                    <span class="text">Manage product</span>
                </a>
                <div class="submenu">
                    <a href="page-form-product-1.html">Add product </a>
   
                </div>
            </li>     
       
        </ul>
     
    </nav>
</aside>