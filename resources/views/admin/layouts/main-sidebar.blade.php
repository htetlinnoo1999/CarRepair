<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR9IeoTm28bv66WcCpQ1_Jpj2Gff2tLAgExBg&usqp=CAU"
                    class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{\Illuminate\Support\Facades\Auth::user()->username??'Guest'}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-server"></i> <span>Car Management</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{route('cars.create')}}"><i class="fa fa-circle-o"></i> Create
                            New Car</a></li>
                    <li><a href="{{route('cars.index')}}"><i class="fa fa-circle-o"></i> All Cars</a></li>
                </ul>
            </li>
            {{-- <li class="treeview">
                <a href="#">
                    <i class="fa fa-file-text"></i> <span>Content Management</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{route('admin.content.create')}}"><i class="fa fa-circle-o"></i> Create
                            New Content</a></li>
                    <li><a href="{{route('admin.content.index')}}"><i class="fa fa-circle-o"></i> All Contents</a></li>
                </ul>
            </li> --}}


            <li>
                <a href="{{route('allUsers')}}">
                    <i class="fa fa-user"></i> <span>Users</span>
                </a>
            </li>


        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
