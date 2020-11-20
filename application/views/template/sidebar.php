<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= site_url('assets/dist/img/user2-160x160.jpg') ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header main">MAIN NAVIGATION</li>
            <li class="">
                <a href="<?= base_url('/dashboard'); ?>">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-book"></i> <span>Buku</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= base_url('/buku'); ?>"><i class="fa fa-circle-o"></i> Daftar Buku</a></li>
                    <li><a href="<?= base_url('/kategori'); ?>"><i class="fa fa-circle-o"></i> Daftar Kategori </a></li>
                </ul>
            </li>
            <li class="">
                <a href="<?= base_url('/anggota'); ?>">
                    <i class="fa fa-user"></i> <span>Anggota</span>
                </a>
            </li>
        </ul>
    </section>
</aside>