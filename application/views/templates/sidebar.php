
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="<?= base_url('assets/') ?>images/profile.png" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name"><?= $this->session->userdata('username') ?></p>
                  <div>
                    <small class="designation text-muted"><?= $this->session->userdata('role') ?></small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?= base_url() ?>">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('stok') ?>">
              <i class="menu-icon mdi mdi-inbox"></i>
              <span class="menu-title">Stok Bahan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('bon') ?>">
              <i class="menu-icon mdi mdi-credit-card"></i>
              <span class="menu-title">BON Bahan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('pesanan') ?>">
              <i class="menu-icon mdi mdi-gift"></i>
              <span class="menu-title">Pesanan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('laporan') ?>">
              <i class="menu-icon mdi mdi-file-document"></i>
              <span class="menu-title">Laporan</span>
            </a>
          </li>
        </ul>
      </nav>

      
      <div class="main-panel">
        <div class="content-wrapper">