<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?= $title ?></title>
  <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/css/vendor.bundle.addons.css">
  
  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/style.css">
  <link rel="shortcut icon" href="<?= base_url('assets/') ?>images/favicon.png" />

  <script src="<?= base_url('assets/') ?>vendors/js/vendor.bundle.base.js"></script>
  <script src="<?= base_url('assets/') ?>vendors/js/vendor.bundle.addons.js"></script>
  <script src="<?= base_url('assets/') ?>js/off-canvas.js"></script>
  <script src="<?= base_url('assets/') ?>js/misc.js"></script>
</head>
<body>
<div class="container-scroller">
    <!-- partial:<?= base_url('assets/') ?>partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo text-dark" href="index.html">
          <!--<img src="images/logo.svg" alt="logo" /> -->
          Desain APP
          
        </a>
        <a class="navbar-brand brand-logo-mini text-dark" href="index.html">
          <!--<img src="images/logo-mini.svg" alt="logo" /> -->
          SAD
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            
          </li>
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <!-- <span class="profile-text">Hello, Richard V.Welsh !</span> -->
              <img class="img-xs rounded-circle" src="<?= base_url('assets/') ?>images/profile.png" alt="Profile image">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item mt-3" href="<?= base_url('auth/logout') ?>">
                <i class="mdi mdi-arrow-right-circle-outline"></i> Sign Out
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-bell"></span>
        </button>
      </div>
    </nav>