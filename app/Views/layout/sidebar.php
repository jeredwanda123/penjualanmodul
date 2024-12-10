<div class="sidebar" data-background-color="dark">
  <div class="sidebar-logo">
    <!-- Logo Header -->
    <div class="logo-header" data-background-color="dark">
      <a href="index.html" class="logo">
        <img
          src="<?= base_url(); ?>template/assets/img/kaiadmin/logo_light.svg"
          alt="navbar brand"
          class="navbar-brand"
          height="20" />
      </a>
      <div class="nav-toggle">
        <button class="btn btn-toggle toggle-sidebar">
          <i class="gg-menu-right"></i>
        </button>
        <button class="btn btn-toggle sidenav-toggler">
          <i class="gg-menu-left"></i>
        </button>
      </div>
      <button class="topbar-toggler more">
        <i class="gg-more-vertical-alt"></i>
      </button>
    </div>
    <!-- End Logo Header -->
  </div>
  <div class="sidebar-wrapper scrollbar scrollbar-inner">
    <div class="sidebar-content">
      <ul class="nav nav-secondary">
        <li class="nav-item <?= ($aktive == 'Home') ? 'active' : ''; ?>">
          <a href="/">
            <i class="fas fa-home"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-section">
          <span class="sidebar-mini-icon">
            <i class="fa fa-ellipsis-h"></i>
          </span>
          <h4 class="text-section">Components</h4>
        </li>
        <li class="nav-item <?= ($aktive == 'Mahasiswa') ? 'active' : ''; ?>">
          <a href="/mahasiswa">
            <i class="fas fa-user-graduate"></i>
            <p>Mahasiswa</p>
          </a>
        </li>
        <li class="nav-item <?= ($aktive == 'Kategori') ? 'active' : ''; ?>">
          <a href="/kategori">
            <i class="fas fa-layer-group"></i>
            <p>Kategori</p>
          </a>
        </li>
        <li class="nav-item <?= ($aktive == 'Pembayaran') ? 'active' : ''; ?>">
          <a href="/pembayaran">
            <i class="fas fa-user-graduate"></i>
            <p>Pembayaran</p>
          </a>
        </li>
        <li class="nav-item <?= ($aktive == 'Praktikum') ? 'active' : ''; ?>">
          <a href="/praktikum">
            <i class="fas fa-user-graduate"></i>
            <p>Praktikum</p>
          </a>
        </li>
        <li class="nav-item <?= ($aktive == 'Stok_modul') ? 'active' : ''; ?>">
          <a href="/stok_modul">
            <i class="fas fa-user-graduate"></i>
            <p>Stok_modul</p>
          </a>
        </li>

      </ul>
    </div>
  </div>
</div>