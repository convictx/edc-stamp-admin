<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="http://localhost:8000/adminLTE/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Admin</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="{{ (preg_match('/dashboard/', Route::currentRouteName())) ? 'active' : '' }}">
                <a href="/admin/dashboards">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="{{ (preg_match('/merchant/', Route::currentRouteName())) ? 'active' : '' }}">
                <a href="/admin/merchants">
                    <i class="fa fa-building-o"></i> <span>Merchant</span>
                </a>
            </li>
            <li class="{{ (preg_match('/branch/', Route::currentRouteName())) ? 'active' : '' }}">
                <a href="/admin/branchs">
                    <i class="fa fa-share-alt"></i> <span>Branch</span>
                </a>
            </li>
            <li class="{{ (preg_match('/campaign/', Route::currentRouteName())) ? 'active' : '' }}">
                <a href="/admin/campaigns">
                    <i class="fa fa-star"></i> <span>Campaign</span>
                </a>
            </li>
            <li class="{{ (preg_match('/banner/', Route::currentRouteName())) ? 'active' : '' }}">
                <a href="/admin/banners">
                    <i class="fa fa-list-ul"></i> <span>Banner</span>
                </a>
            </li>
            <li class="{{ (preg_match('/stamp/', Route::currentRouteName())) ? 'active' : '' }}">
                <a href="/admin/stamps">
                    <i class="fa fa-certificate"></i> <span>Stamps</span>
                </a>
            </li>
            <li class="{{ (preg_match('/history/', Route::currentRouteName())) ? 'active' : '' }}">
                <a href="/admin/historys">
                    <i class="fa fa-reply"></i> <span>Redeem history</span>
                </a>
            </li>
            <li class="treeview {{ (preg_match('/user/', Route::currentRouteName())) ? 'active' : '' }}">
                <a href="">
                    <i class="fa fa-group"></i> <span>Users</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        <span class="label label-primary pull-right">4</span>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/admin/users"><i class="fa fa-circle-o"></i> User list</a></li>
                    <li><a href="/admin/users_group"><i class="fa fa-circle-o"></i> User group</a></li>
                </ul>
            </li>
            <li class="{{ (preg_match('/report/', Route::currentRouteName())) ? 'active' : '' }}">
                <a href="/admin/reports">
                    <i class="fa fa-file-text"></i> <span>Report</span>
                </a>
            </li>
            <li class="{{ (preg_match('/log/', Route::currentRouteName())) ? 'active' : '' }}">
                <a href="/admin/logs">
                    <i class="fa fa-history"></i> <span>Log</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>