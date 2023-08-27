<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="<?php echo base_url('dashboard'); ?>">OlSeller</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">OS</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="<?php echo base_url('dashboard'); ?>">General Dashboard</a></li>
                </ul>
            </li>
            <li class="menu-header">Main</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fa fa-shopping-cart"></i>
                    <span>Produk</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="<?php echo base_url('list_produk'); ?>">List Produk</a></li>
                    <li><a class="nav-link" href="<?php echo base_url('add_product'); ?>">Tambah Produk</a></li>
                </ul>
            </li>
            <li><a class="nav-link" href="<?php echo base_url('transaksi'); ?>"><i class="fa fa-exchange"></i>
                    <span>Transaksi</span></a></li>
            <li><a class="nav-link" href="<?php echo base_url('customer'); ?>"><i class="far fa-user"></i>
                    <span>Customer</span></a></li>
    </aside>
</div>