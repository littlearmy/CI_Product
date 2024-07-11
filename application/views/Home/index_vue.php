<!DOCTYPE html>
<!-- =========================================================
* Vuexy - Bootstrap Admin Template | v2.0.0
==============================================================

* Product Page: https://1.envato.market/vuexy_admin
* Created by: Pixinvent
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright Pixinvent (https://pixinvent.com)

=========================================================
 -->
<!-- beautify ignore:start -->


<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-bordered" data-assets-path="<?= base_url('vue_assets/'); ?>" data-template="vertical-menu-template-bordered" data-style="light">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title><?= $judul ?></title>

    
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://1.envato.market/vuexy_admin">
    
    
    <!-- ? PROD Only: Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
    
    <!-- End Google Tag Manager -->
    
    <!-- Favicon -->
    <!-- <link rel="icon" type="image/x-icon" href="<?= base_url('vue_assets/'); ?>img/favicon/favicon.ico" /> -->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="<?= base_url('vue_assets/'); ?>vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="<?= base_url('vue_assets/'); ?>vendor/fonts/tabler-icons.css"/>
    <link rel="stylesheet" href="<?= base_url('vue_assets/'); ?>vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    
    <link rel="stylesheet" href="<?= base_url('vue_assets/'); ?>vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?= base_url('vue_assets/'); ?>vendor/css/rtl/theme-bordered.css" class="template-customizer-theme-css" />
    
    <link rel="stylesheet" href="<?= base_url('vue_assets/'); ?>css/demo.css" />
    
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?= base_url('vue_assets/'); ?>vendor/libs/node-waves/node-waves.css" />
    
    <link rel="stylesheet" href="<?= base_url('vue_assets/'); ?>vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="<?= base_url('vue_assets/'); ?>vendor/libs/typeahead-js/typeahead.css" /> 
    <link rel="stylesheet" href="<?= base_url('vue_assets/'); ?>vendor/libs/apex-charts/apex-charts.css" />
<link rel="stylesheet" href="<?= base_url('vue_assets/'); ?>vendor/libs/swiper/swiper.css" />
<link rel="stylesheet" href="<?= base_url('vue_assets/'); ?>vendor/libs/datatables-bs5/datatables.bootstrap5.css">
<link rel="stylesheet" href="<?= base_url('vue_assets/'); ?>vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
<link rel="stylesheet" href="<?= base_url('vue_assets/'); ?>vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css">

    <!-- Page CSS -->
    <link rel="stylesheet" href="<?= base_url('vue_assets/'); ?>vendor/css/pages/cards-advance.css" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Helpers -->
    <script src="<?= base_url('vue_assets/'); ?>vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <!-- <script src="<?= base_url('vue_assets/'); ?>vendor/js/template-customizer.js"></script> -->
    
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?= base_url('vue_assets/'); ?>js/config.js"></script>
    
  </head>

  <body>

    
    <!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5J3LMKC" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
    <!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar  ">
  <div class="layout-container">

    
    




<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

  
  <div class="app-brand demo ">
    <a href="<?= base_url('home'); ?>" class="app-brand-link">
      <span class="app-brand-logo demo">
<svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z" fill="#7367F0" />
  <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z" fill="#161616" />
  <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z" fill="#161616" />
  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z" fill="#7367F0" />
</svg>
</span>
      <span class="app-brand-text demo menu-text fw-bold">CI-Product</span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
      <i class="ti menu-toggle-icon d-none d-xl-block align-middle"></i>
      <i class="ti ti-x d-block d-xl-none ti-md align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  
  
  <ul class="menu-inner py-1">
    <!-- Dashboards -->
    <div class="menu-item">
      <a href="javascript:void(0);" class="menu-link">
        <i class="menu-icon tf-icons ti ti-smart-home"></i>
        <div data-i18n="Dashboards">Dashboards</div>
      </a>
    </div>

    <!-- Layouts -->
    <!-- <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons ti ti-layout-sidebar"></i>
        <div data-i18n="Layouts">Layouts</div>
      </a>

      <ul class="menu-sub">

        <li class="menu-item">
          <a href="layouts-collapsed-menu.html" class="menu-link">
            <div data-i18n="Collapsed menu">Collapsed menu</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="layouts-content-navbar.html" class="menu-link">
            <div data-i18n="Content navbar">Content navbar</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="layouts-content-navbar-with-sidebar.html" class="menu-link">
            <div data-i18n="Content nav + Sidebar">Content nav + Sidebar</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="../horizontal-menu-template" class="menu-link" target="_blank">
            <div data-i18n="Horizontal">Horizontal</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="layouts-without-menu.html" class="menu-link">
            <div data-i18n="Without menu">Without menu</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="layouts-without-navbar.html" class="menu-link">
            <div data-i18n="Without navbar">Without navbar</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="layouts-fluid.html" class="menu-link">
            <div data-i18n="Fluid">Fluid</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="layouts-container.html" class="menu-link">
            <div data-i18n="Container">Container</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="layouts-blank.html" class="menu-link">
            <div data-i18n="Blank">Blank</div>
          </a>
        </li>
      </ul>
    </li> -->

    <!-- Front Pages -->
    <!-- <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class='menu-icon tf-icons ti ti-files'></i>
        <div data-i18n="Front Pages">Front Pages</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="../front-pages/landing-page.html" class="menu-link" target="_blank">
            <div data-i18n="Landing">Landing</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="../front-pages/pricing-page.html" class="menu-link" target="_blank">
            <div data-i18n="Pricing">Pricing</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="../front-pages/payment-page.html" class="menu-link" target="_blank">
            <div data-i18n="Payment">Payment</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="../front-pages/checkout-page.html" class="menu-link" target="_blank">
            <div data-i18n="Checkout">Checkout</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="../front-pages/help-center-landing.html" class="menu-link" target="_blank">
            <div data-i18n="Help Center">Help Center</div>
          </a>
        </li>
      </ul>
    </li> -->


    
  </ul>
  
  

</aside>
<!-- / Menu -->

    

    <!-- Layout container -->
    <div class="layout-page">
      
      



<!-- Navbar -->

<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">

      
      <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
          <i class="ti ti-menu-2 ti-md"></i>
        </a>
      </div>
      

      <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

        
        <!-- Search -->
        <div class="navbar-nav align-items-center">
          <div class="nav-item navbar-search-wrapper mb-0">
            <a class="nav-item nav-link search-toggler d-flex align-items-center px-0" href="javascript:void(0);">
              <i class="ti ti-search ti-md me-2 me-lg-4 ti-lg"></i>
              <span class="d-none d-md-inline-block text-muted fw-normal">Search (Ctrl+/)</span>
            </a>
          </div>
        </div>
        <!-- /Search -->
        
        

        

        <ul class="navbar-nav flex-row align-items-center ms-auto">
          
          
          <!-- Language -->
          <li class="nav-item dropdown-language dropdown">
            <a class="nav-link btn btn-text-secondary btn-icon rounded-pill dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
              <i class='ti ti-language rounded-circle ti-md'></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-language="en" data-text-direction="ltr">
                  <span>English</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-language="fr" data-text-direction="ltr">
                  <span>French</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-language="ar" data-text-direction="rtl">
                  <span>Arabic</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-language="de" data-text-direction="ltr">
                  <span>German</span>
                </a>
              </li>
            </ul>
          </li>
          <!--/ Language -->
          
          <!-- Style Switcher -->
          <li class="nav-item dropdown-style-switcher dropdown">
            <a class="nav-link btn btn-text-secondary btn-icon rounded-pill dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
              <i class='ti ti-md'></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                  <span class="align-middle"><i class='ti ti-sun ti-md me-3'></i>Light</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                  <span class="align-middle"><i class="ti ti-moon-stars ti-md me-3"></i>Dark</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                  <span class="align-middle"><i class="ti ti-device-desktop-analytics ti-md me-3"></i>System</span>
                </a>
              </li>
            </ul>
          </li>
          <!-- / Style Switcher-->
          
          <!-- Quick links  -->
          <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown">
            <a class="nav-link btn btn-text-secondary btn-icon rounded-pill btn-icon dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
              <i class='ti ti-layout-grid-add ti-md'></i>
            </a>
            <div class="dropdown-menu dropdown-menu-end p-0">
              <div class="dropdown-menu-header border-bottom">
                <div class="dropdown-header d-flex align-items-center py-3">
                  <h6 class="mb-0 me-auto">Shortcuts</h6>
                  <a href="javascript:void(0)" class="btn btn-text-secondary rounded-pill btn-icon dropdown-shortcuts-add" data-bs-toggle="tooltip" data-bs-placement="top" title="Add shortcuts"><i class="ti ti-plus text-heading"></i></a>
                </div>
              </div>
              <div class="dropdown-shortcuts-list scrollable-container">
                <div class="row row-bordered overflow-visible g-0">
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                      <i class="ti ti-calendar ti-26px text-heading"></i>
                    </span>
                    <a href="app-calendar.html" class="stretched-link">Calendar</a>
                    <small>Appointments</small>
                  </div>
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                      <i class="ti ti-file-dollar ti-26px text-heading"></i>
                    </span>
                    <a href="app-invoice-list.html" class="stretched-link">Invoice App</a>
                    <small>Manage Accounts</small>
                  </div>
                </div>
                <div class="row row-bordered overflow-visible g-0">
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                      <i class="ti ti-user ti-26px text-heading"></i>
                    </span>
                    <a href="app-user-list.html" class="stretched-link">User App</a>
                    <small>Manage Users</small>
                  </div>
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                      <i class="ti ti-users ti-26px text-heading"></i>
                    </span>
                    <a href="app-access-roles.html" class="stretched-link">Role Management</a>
                    <small>Permission</small>
                  </div>
                </div>
                <div class="row row-bordered overflow-visible g-0">
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                      <i class="ti ti-device-desktop-analytics ti-26px text-heading"></i>
                    </span>
                    <a href="<?= base_url('home'); ?>" class="stretched-link">Dashboard</a>
                    <small>User Dashboard</small>
                  </div>
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                      <i class="ti ti-settings ti-26px text-heading"></i>
                    </span>
                    <a href="pages-account-settings-account.html" class="stretched-link">Setting</a>
                    <small>Account Settings</small>
                  </div>
                </div>
                <div class="row row-bordered overflow-visible g-0">
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                      <i class="ti ti-help ti-26px text-heading"></i>
                    </span>
                    <a href="pages-faq.html" class="stretched-link">FAQs</a>
                    <small>FAQs & Articles</small>
                  </div>
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                      <i class="ti ti-square ti-26px text-heading"></i>
                    </span>
                    <a href="modal-examples.html" class="stretched-link">Modals</a>
                    <small>Useful Popups</small>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <!-- Quick links -->

          <!-- Notification -->
          <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-2">
            <a class="nav-link btn btn-text-secondary btn-icon rounded-pill dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
              <span class="position-relative">
                <i class="ti ti-bell ti-md"></i>
                <span class="badge rounded-pill bg-danger badge-dot badge-notifications border"></span>
              </span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end p-0">
              <li class="dropdown-menu-header border-bottom">
                <div class="dropdown-header d-flex align-items-center py-3">
                  <h6 class="mb-0 me-auto">Notification</h6>
                  <div class="d-flex align-items-center h6 mb-0">
                    <span class="badge bg-label-primary me-2">8 New</span>
                    <a href="javascript:void(0)" class="btn btn-text-secondary rounded-pill btn-icon dropdown-notifications-all" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark all as read"><i class="ti ti-mail-opened text-heading"></i></a>
                  </div>
                </div>
              </li>
              <li class="dropdown-notifications-list scrollable-container">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item list-group-item-action dropdown-notifications-item">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar">
                          <img src="<?= base_url('vue_assets/'); ?>img/avatars/1.png" alt class="rounded-circle">
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="small mb-1">Congratulation Lettie 🎉</h6>
                        <small class="mb-1 d-block text-body">Won the monthly best seller gold badge</small>
                        <small class="text-muted">1h ago</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar">
                          <span class="avatar-initial rounded-circle bg-label-danger">CF</span>
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1 small">Charles Franklin</h6>
                        <small class="mb-1 d-block text-body">Accepted your connection</small>
                        <small class="text-muted">12hr ago</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar">
                          <img src="<?= base_url('vue_assets/'); ?>img/avatars/2.png" alt class="rounded-circle">
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1 small">New Message ✉️</h6>
                        <small class="mb-1 d-block text-body">You have new message from Natalie</small>
                        <small class="text-muted">1h ago</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar">
                          <span class="avatar-initial rounded-circle bg-label-success"><i class="ti ti-shopping-cart"></i></span>
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1 small">Whoo! You have new order 🛒 </h6>
                        <small class="mb-1 d-block text-body">ACME Inc. made new order $1,154</small>
                        <small class="text-muted">1 day ago</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar">
                          <img src="<?= base_url('vue_assets/'); ?>img/avatars/9.png" alt class="rounded-circle">
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1 small">Application has been approved 🚀 </h6>
                        <small class="mb-1 d-block text-body">Your ABC project application has been approved.</small>
                        <small class="text-muted">2 days ago</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar">
                          <span class="avatar-initial rounded-circle bg-label-success"><i class="ti ti-chart-pie"></i></span>
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1 small">Monthly report is generated</h6>
                        <small class="mb-1 d-block text-body">July monthly financial report is generated </small>
                        <small class="text-muted">3 days ago</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar">
                          <img src="<?= base_url('vue_assets/'); ?>img/avatars/5.png" alt class="rounded-circle">
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1 small">Send connection request</h6>
                        <small class="mb-1 d-block text-body">Peter sent you connection request</small>
                        <small class="text-muted">4 days ago</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar">
                          <img src="<?= base_url('vue_assets/'); ?>img/avatars/6.png" alt class="rounded-circle">
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1 small">New message from Jane</h6>
                        <small class="mb-1 d-block text-body">Your have new message from Jane</small>
                        <small class="text-muted">5 days ago</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar">
                          <span class="avatar-initial rounded-circle bg-label-warning"><i class="ti ti-alert-triangle"></i></span>
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1 small">CPU is running high</h6>
                        <small class="mb-1 d-block text-body">CPU Utilization Percent is currently at 88.63%,</small>
                        <small class="text-muted">5 days ago</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="border-top">
                <div class="d-grid p-4">
                  <a class="btn btn-primary btn-sm d-flex" href="javascript:void(0);">
                    <small class="align-middle">View all notifications</small>
                  </a>
                </div>
              </li>
            </ul>
          </li>
          <!--/ Notification -->

          <!-- User -->
          <li class="nav-item navbar-dropdown dropdown-user dropdown">
            <a class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);" data-bs-toggle="dropdown">
              <div class="avatar avatar-online">
                <img src="<?= base_url('vue_assets/'); ?>img/avatars/1.png" alt class="rounded-circle">
              </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li>
                <a class="dropdown-item mt-0" href="pages-account-settings-account.html">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 me-2">
                      <div class="avatar avatar-online">
                        <img src="<?= base_url('vue_assets/'); ?>img/avatars/1.png" alt class="rounded-circle">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-0">John Doe</h6>
                      <small class="text-muted">Admin</small>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <div class="dropdown-divider my-1 mx-n2"></div>
              </li>
              <li>
                <a class="dropdown-item" href="pages-profile-user.html">
                  <i class="ti ti-user me-3 ti-md"></i><span class="align-middle">My Profile</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="pages-account-settings-account.html">
                  <i class="ti ti-settings me-3 ti-md"></i><span class="align-middle">Settings</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="pages-account-settings-billing.html">
                  <span class="d-flex align-items-center align-middle">
                    <i class="flex-shrink-0 ti ti-file-dollar me-3 ti-md"></i><span class="flex-grow-1 align-middle">Billing</span>
                    <span class="flex-shrink-0 badge bg-danger d-flex align-items-center justify-content-center">4</span>
                  </span>
                </a>
              </li>
              <li>
                <div class="dropdown-divider my-1 mx-n2"></div>
              </li>
              <li>
                <a class="dropdown-item" href="pages-pricing.html">
                  <i class="ti ti-currency-dollar me-3 ti-md"></i><span class="align-middle">Pricing</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="pages-faq.html">
                  <i class="ti ti-question-mark me-3 ti-md"></i><span class="align-middle">FAQ</span>
                </a>
              </li>
              <li>
                <div class="d-grid px-2 pt-2 pb-1">
                  <a class="btn btn-sm btn-danger d-flex" href="auth-login-cover.html" target="_blank">
                    <small class="align-middle">Logout</small>
                    <i class="ti ti-logout ms-2 ti-14px"></i>
                  </a>
                </div>
              </li>
            </ul>
          </li>
          <!--/ User -->
          


        </ul>
      </div>

      
      <!-- Search Small Screens -->
      <div class="navbar-search-wrapper search-input-wrapper  d-none">
        <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..." aria-label="Search...">
        <i class="ti ti-x search-toggler cursor-pointer"></i>
      </div>
      
      
  
</nav>

<!-- / Navbar -->

      

      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
            
          <form method="POST" class="mb-4">
        <div class="btn-group">

            <button class="btn btn-secondary dropdown-toggle me-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Select Area
            </button>
            
            <ul class="dropdown-menu">
                <?php foreach ($AreaProduct as $Area) : ?>
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            <input class="form-check-input mt-0" type="checkbox" name="AreaId[]" value="<?= $Area['area_id'] ?>" checked><?= $Area['area_name'] ?></input>
                        </div>
                    </div>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="btn-group">
            <button class="btn btn-secondary dropdown-toggle me-2" type="button" data-bs-toggle="dropdown" >Select DateFrom</button>
            <ul class="dropdown-menu">
                <input type="date" name="dateFrom" value="2021-01-01">
            </ul>

        </div>
        <div class="btn-group">
            <button class="btn btn-secondary dropdown-toggle me-2" type="button" data-bs-toggle="dropdown" >Select DateTo</button>
            <ul class="dropdown-menu">
                <input type="date" name="dateTo" value="2021-01-05">
            </ul>

        </div>

        
        <button class="btn btn-primary" type="submit" value="Submit" name='View'>View</button>
    </form>


    <?php $i = 0;
    foreach ($AllBrand as $Brand) {
        if ($i = 0) {
            echo ($i . "</br>");
        }
        $i++;
    } ?>
    <?php
    if (isset($_POST['View'])) {
        if (empty($_POST['AreaId'])) {
            echo "Area belum terpilih !!!";
        } else if (empty($_POST['dateFrom'])) {
            $dateF = '1900-01-01';
        } else if (empty($_POST['dateTo'])) {
            $dateT = '2050-12-05';
        } else {
            $dateF = $_POST['dateFrom'];
            $dateT = $_POST['dateTo'];
    ?>
            <?php
            foreach ($_POST['AreaId'] as $id) {
                $this->db->select('area_name,compliance');
                $this->db->from('report_product as rp');
                $this->db->join('store as str', 'rp.store_id = str.store_id');
                $this->db->join('store_account as sac', 'str.account_id = sac.account_id');
                $this->db->join('store_area as sar', 'str.area_id = sar.area_id');
                $this->db->join('product as pr', 'rp.product_id = pr.product_id');
                $this->db->join('product_brand as br', 'pr.brand_id = br.brand_id');
                $this->db->where(['sar.area_id' => $id]);
                $this->db->where('rp.tanggal BETWEEN "' . date('Y-m-d', strtotime($dateF)) . '" and "' . date('Y-m-d', strtotime($dateT)) . '"');
                $query = $this->db->get();
                $results = $query->result_array();
                $AreaName = $this->db->get_where('store_area', ['area_id' => $id])->result_array();
                $AreaSelect[] = $id;

                $row = 0;
                $sumComp[] = 0;
                $comp = [];
                foreach ($results as $dataArea) {
                    $AreaData = $results;
                    $row++;
                    $comp[] = (int)$dataArea['compliance'];
                }
                $sumComp[$id] =  array_sum($comp);

                $total[$id] = ceil($sumComp[$id] / $row * 100);
            } ?>



            <div class="row cols-ls-3 mb-2">
                <div class="ol-xl-8 col-lg-4 mx-auto">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Monthly Earning</h6>
                        </div>
                        <div class="container mt-4 mb-3">
                            <div class="row">
                                <div class="col-sm text-uppercase">
                                    MTD
                                    <div class="container mt-2">
                                        <div class="row">
                                            <div class="col-sm m-0 font-weight-bold">
                                                60%
                                                <div class="vr"></div>
                                            </div>
                                            <div class="col-sm m-0 font-weight-bold">
                                                4783
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                                    Last Month
                                    <div class=" container mt-2">
                                        <div class="row">
                                            <div class="col-sm m-0 font-weight-bold">
                                                45%
                                                <div class="vr"></div>
                                            </div>

                                            <div class="col-sm m-0 font-weight-bold">
                                                2374
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card Body -->
                        <div id="earning1"></div>

                    </div>
                </div>

                <div class="ol-xl-8 col-lg-4 mx-auto">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Brand Focus</h6>
                            <div class="dropdown no-arrow">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                    <div class="dropdown-header">Dropdown Header:</div>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <div class="container mt-4 mb-3">
                            <div class="row">
                                <div class="col-sm text-uppercase">
                                    MTD
                                    <div class="container mt-2">
                                        <div class="row">
                                            <div class="col-sm m-0 font-weight-bold">
                                                60%
                                                <div class="vr"></div>
                                            </div>
                                            <div class="col-sm m-0 font-weight-bold">
                                                4783
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                                    Last Month
                                    <div class=" container mt-2">
                                        <div class="row">
                                            <div class="col-sm m-0 font-weight-bold">
                                                45%
                                                <div class="vr"></div>
                                            </div>
                                            <div class="col-sm m-0 font-weight-bold">
                                                2374
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card Body -->
                        <div id="earning2"></div>

                    </div>
                </div>

                <div class="ol-xl-8 col-lg-4 mx-auto">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">SOS</h6>
                            <div class="dropdown no-arrow">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                    <div class="dropdown-header">Dropdown Header:</div>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <div class="container mt-4 mb-3">
                            <div class="row">
                                <div class="col-sm text-uppercase">
                                    MTD
                                    <div class="container mt-2">
                                        <div class="row">
                                            <div class="col-sm m-0 font-weight-bold">
                                                60%
                                                <div class="vr"></div>
                                            </div>
                                            <div class="col-sm m-0 font-weight-bold">
                                                4783
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                                    Last Month
                                    <div class=" container mt-2">
                                        <div class="row">
                                            <div class="col-sm m-0 font-weight-bold">
                                                45%
                                                <div class="vr"></div>
                                            </div>
                                            <div class="col-sm m-0 font-weight-bold">
                                                2374
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card Body -->
                        <div id="earning3"></div>
                    </div>
                </div>

            </div>

            <div class="card ms-2 mb-2">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">BRAND</th>

                            <?php
                            foreach ($AreaSelect as $AreaS) {
                                foreach ($AreaProduct as $Area) {
                                    $AreaId = $Area['area_id'];
                                    if ($AreaS == $Area['area_id']) {
                            ?>
                                        <th scope="col"><?php echo $Area['area_name'] ?></th>
                                        <script>
                                            var area[] = <?php echo ($Area['area_name']); ?>;
                                            console.log(area);
                                        </script>
                            <?php
                                    }
                                }
                            }
                            ?>




                        </tr>
                    </thead>

                    <tbody>
                        <?php $no = 1;
                        foreach ($AllBrand as $Brand) { ?>
                            <tr>
                                <th scope="row"><?php echo $no ?></th>

                                <td><?php echo $Brand['brand_name'] ?></td>
                                <?php foreach ($AreaSelect as $Area) { ?>
                                    <td><?php echo $total[$Area] . ' %' ?></td>
                                <?php
                                }
                                ?>
                            </tr>
                        <?php $no++;
                        } ?>
                    </tbody>

                </table>
            </div>





            <div class="row cols-ls-3">
                <div class="col-xl-3 col-lg-5">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Report</h6>
                            <div class="dropdown no-arrow">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                    <div class="dropdown-header">Dropdown Header:</div>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body " style="height: 400px;">
                            <ul class="nav nav-pills mb-3" id="brandper" role="tablist">
                                <?php foreach ($AllBrand as $Brand) { ?>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link <?php if ($Brand === reset($AllBrand)) {
                                                                    echo ('active');
                                                                }; ?>" id="<?= $Brand['brand_id'], '-tab' ?>" data-bs-toggle="pill" data-bs-target="#<?= $Brand['brand_id'] ?>" type="button" role="tab" aria-controls="<?= $Brand['brand_name'] ?>" aria-selected="true"><?= $Brand['brand_name'] ?></button>
                                    </li>
                                <?php } ?>
                            </ul>
                            <div class="tab-content" id="brandperContent">
                                <?php
                                foreach ($AllBrand as $Brand) { ?>
                                    <div class="tab-pane fade <?php if ($Brand === reset($AllBrand)) {
                                                                    echo ('show active');
                                                                }; ?>" id="<?= $Brand['brand_id'] ?>" role="tabpanel" aria-labelledby="<?= $Brand['brand_id'], '-tab' ?>">

                                        <table class="table">
                                            <!-- <thead>
                                        <tr class='d-flex'>
                                        <th scope="col" class="col-3">City</th>
                                        <th scope="col">Progress</th>
                                        </tr>
                                    </thead> -->

                                            <tbody>

                                                <?php foreach ($AreaSelect as $AreaS) {
                                                    foreach ($AreaProduct as $Area) {
                                                        $AreaId = $Area['area_id'];
                                                        if ($AreaS == $Area['area_id']) {

                                                ?>
                                                            <tr class='d-flex'>
                                                                <th scope="row" class="col-10"><?php echo ($Area['area_name']);
                                                                                            }
                                                                                        } ?></th>
                                                                <td class="col-2">
                                                                    <div class="progress-circle" style="font-size: 10px; --value:<?= $total[$AreaS] ?>">
                                                                        <progress value=" <?= $total[$AreaS] ?>" min="0" max="100" style="visibility:hidden;height:0;width:0; "><?= $total[$AreaS] ?>%</progress>
                                                                    </div>
                                                                    <!-- <div class="progress mx-auto" style="width: 1px, height:1px ;" data-value='<?= $total[$AreaS] ?>'>
                                                                        <span class="progress-left">
                                                                            <span class="progress-bar border-primary"></span>
                                                                        </span>
                                                                        <span class="progress-right">
                                                                            <span class="progress-bar border-primary"></span>
                                                                        </span>
                                                                        <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                                                            <div><?= $total[$AreaS] ?><sup class="small">%</sup></div>
                                                                        </div>
                                                                    </div> -->

                                                                </td>
                                                            </tr>
                                                        <?php

                                                    } ?>

                                            </tbody>
                                        </table>

                                    </div>
                                <?php
                                } ?>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xl-6 col-lg-3">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Overview</h6>
                            <div class="dropdown no-arrow">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                    <div class="dropdown-header">Dropdown Header:</div>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body " style="height: 400px;">
                            <div class="chart-area-center" style="height: 370px;">
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-5" style="height: 100px;">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Pie</h6>
                            <div class="dropdown no-arrow">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                    <div class="dropdown-header">Dropdown Header:</div>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body" style="height: 400px;">
                            <div class="chart-pie" style="height: 400px;">
                                <canvas id="myPieChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

            </div>








            <script>
                const ctx = document.getElementById('myChart');
                new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: [<?php foreach ($AreaSelect as $AreaS) {
                                        foreach ($AreaProduct as $Area) {
                                            $AreaId = $Area['area_id'];
                                            if ($AreaS == $Area['area_id']) {
                                                echo "'" . $Area['area_name'] . "'" . ',';
                                            }
                                        }
                                    } ?>],
                        datasets: [{
                            label: 'Nilai',
                            data: [<?php foreach ($AreaSelect as $Area) {
                                        echo $total[$Area] . ',';
                                    } ?>],
                            lineTension: 0.3,
                            backgroundColor: "rgba(78, 115, 223, 0.05)",
                            borderColor: "rgba(78, 115, 223, 1)",
                            pointRadius: 3,
                            pointBackgroundColor: "rgba(78, 115, 223, 1)",
                            pointBorderColor: "rgba(78, 115, 223, 1)",
                            pointHoverRadius: 3,
                            pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                            pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                            pointHitRadius: 10,
                            pointBorderWidth: 2,

                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        },
                    }
                });
            </script>

            <script>
                const vtx = document.getElementById('myPieChart');
                new Chart(vtx, {
                    type: 'doughnut',
                    data: {
                        labels: [<?php foreach ($AreaSelect as $AreaS) {
                                        foreach ($AreaProduct as $Area) {
                                            $AreaId = $Area['area_id'];
                                            if ($AreaS == $Area['area_id']) {
                                                echo "'" . $Area['area_name'] . "'" . ',';
                                            }
                                        }
                                    } ?>],
                        datasets: [{
                            label: 'Nilai',
                            data: [<?php foreach ($AreaSelect as $Area) {
                                        echo $total[$Area] . ',';
                                    } ?>],
                            borderWidth: 2,


                        }],

                    },
                    options: {
                        rotation: (0.5 * Math.PI) - (95 / 180 * Math.PI),
                        legend: {
                            position: 'left'
                        },
                        layout: {
                            padding: {
                                left: 30,
                                right: 0,
                                top: 0,
                                bottom: 0
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        },
                    }
                });
                <?php }
        } ?>
            </script>
            <div class="card shadow mt-4 ms-2 me-2 mb-5" id="map" style="width: device-width; height: 600px;"></div>


            <script>
                var map = L.map('map').setView([-2.600029, 118.015776], 5);

                const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19,
                    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                }).addTo(map);

                <?php foreach ($AreaSelect as $AreaS) {
                    foreach ($AreaProduct as $Area) {
                        $AreaId = $Area['area_id'];
                        if ($AreaS == $Area['area_id']) { ?>
                            var marker = L.marker([<?= $Area['coordinate'] ?>]).addTo(map)
                                .bindPopup('<b><?= $Area['area_name'] ?></b>').openPopup();
                <?php  }
                    }
                } ?>

                // const circle = L.circle([51.508, -0.11], {
                //     color: 'red',
                //     fillColor: '#f03',
                //     fillOpacity: 0.5,
                //     radius: 500
                // }).addTo(map).bindPopup('I am a circle.');

                // const polygon = L.polygon([
                //     [51.509, -0.08],
                //     [51.503, -0.06],
                //     [51.51, -0.047]
                // ]).addTo(map).bindPopup('I am a polygon.');


                // const popup = L.popup()
                //     .setLatLng([-2.600029, 118.015776])
                //     .setContent('I am a standalone popup.')
                //     .openOn(map);

                function onMapClick(e) {
                    popup
                        .setLatLng(e.latlng)
                        .setContent(`You clicked the map at ${e.latlng.toString()}`)
                        .openOn(map);
                }

                map.on('click', onMapClick);
            </script>
            <!-- <div>
    <?= $map['html']; ?>
            </div> -->

            <div class="card">
  
    <div id="lineChart2"></div>
  
</div>

    


            

<div class="row g-6">
  <!-- Website Analytics -->
  <div class="col-lg-6">
    <div class="swiper-container swiper-container-horizontal swiper swiper-card-advance-bg" id="swiper-with-pagination-cards">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="row">
            <div class="col-12">
              <h5 class="text-white mb-0">Website Analytics</h5>
              <small>Total 28.5% Conversion Rate</small>
            </div>
            <div class="row">
              <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1 pt-md-9">
                <h6 class="text-white mt-0 mt-md-3 mb-4">Traffic</h6>
                <div class="row">
                  <div class="col-6">
                    <ul class="list-unstyled mb-0">
                      <li class="d-flex mb-4 align-items-center">
                        <p class="mb-0 fw-medium me-2 website-analytics-text-bg">28%</p>
                        <p class="mb-0">Sessions</p>
                      </li>
                      <li class="d-flex align-items-center">
                        <p class="mb-0 fw-medium me-2 website-analytics-text-bg">1.2k</p>
                        <p class="mb-0">Leads</p>
                      </li>
                    </ul>
                  </div>
                  <div class="col-6">
                    <ul class="list-unstyled mb-0">
                      <li class="d-flex mb-4 align-items-center">
                        <p class="mb-0 fw-medium me-2 website-analytics-text-bg">3.1k</p>
                        <p class="mb-0">Page Views</p>
                      </li>
                      <li class="d-flex align-items-center">
                        <p class="mb-0 fw-medium me-2 website-analytics-text-bg">12%</p>
                        <p class="mb-0">Conversions</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-5 col-md-3 col-12 order-1 order-md-2 my-4 my-md-0 text-center">
                <img src="<?= base_url('vue_assets/'); ?>img/illustrations/card-website-analytics-1.png" alt="Website Analytics" height="150" class="card-website-analytics-img">
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="row">
            <div class="col-12">
              <h5 class="text-white mb-0">Website Analytics</h5>
              <small>Total 28.5% Conversion Rate</small>
            </div>
            <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1 pt-md-9">
              <h6 class="text-white mt-0 mt-md-3 mb-4">Spending</h6>
              <div class="row">
                <div class="col-6">
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex mb-4 align-items-center">
                      <p class="mb-0 fw-medium me-2 website-analytics-text-bg">12h</p>
                      <p class="mb-0">Spend</p>
                    </li>
                    <li class="d-flex align-items-center">
                      <p class="mb-0 fw-medium me-2 website-analytics-text-bg">127</p>
                      <p class="mb-0">Order</p>
                    </li>
                  </ul>
                </div>
                <div class="col-6">
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex mb-4 align-items-center">
                      <p class="mb-0 fw-medium me-2 website-analytics-text-bg">18</p>
                      <p class="mb-0">Order Size</p>
                    </li>
                    <li class="d-flex align-items-center">
                      <p class="mb-0 fw-medium me-2 website-analytics-text-bg">2.3k</p>
                      <p class="mb-0">Items</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-md-3 col-12 order-1 order-md-2 my-4 my-md-0 text-center">
              <img src="<?= base_url('vue_assets/'); ?>img/illustrations/card-website-analytics-2.png" alt="Website Analytics" height="150" class="card-website-analytics-img">
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="row">
            <div class="col-12">
              <h5 class="text-white mb-0">Website Analytics</h5>
              <small>Total 28.5% Conversion Rate</small>
            </div>
            <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1 pt-md-9">
              <h6 class="text-white mt-0 mt-md-3 mb-4">Revenue Sources</h6>
              <div class="row">
                <div class="col-6">
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex mb-4 align-items-center">
                      <p class="mb-0 fw-medium me-2 website-analytics-text-bg">268</p>
                      <p class="mb-0">Direct</p>
                    </li>
                    <li class="d-flex align-items-center">
                      <p class="mb-0 fw-medium me-2 website-analytics-text-bg">62</p>
                      <p class="mb-0">Referral</p>
                    </li>
                  </ul>
                </div>
                <div class="col-6">
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex mb-4 align-items-center">
                      <p class="mb-0 fw-medium me-2 website-analytics-text-bg">890</p>
                      <p class="mb-0">Organic</p>
                    </li>
                    <li class="d-flex align-items-center">
                      <p class="mb-0 fw-medium me-2 website-analytics-text-bg">1.2k</p>
                      <p class="mb-0">Campaign</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-md-3 col-12 order-1 order-md-2 my-4 my-md-0 text-center">
              <img src="<?= base_url('vue_assets/'); ?>img/illustrations/card-website-analytics-3.png" alt="Website Analytics" height="150" class="card-website-analytics-img">
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
  <!--/ Website Analytics -->

  <!-- Average Daily Sales -->
  <div class="col-xl-3 col-sm-6">
    <div class="card h-100">
      <div class="card-header pb-0">
        <h5 class="mb-3 card-title">Average Daily Sales</h5>
        <p class="mb-0 text-body">Total Sales This Month</p>
        <h4 class="mb-0">$28,450</h4>
      </div>
      <div class="card-body px-0">
        <div id="averageDailySales"></div>
      </div>
    </div>
  </div>
  <!--/ Average Daily Sales -->

  <!-- Sales Overview -->
  <div class="col-xl-3 col-sm-6">
    <div class="card h-100">
      <div class="card-header">
        <div class="d-flex justify-content-between">
          <p class="mb-0 text-body">Sales Overview</p>
          <p class="card-text fw-medium text-success">+18.2%</p>
        </div>
        <h4 class="card-title mb-1">$42.5k</h4>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-4">
            <div class="d-flex gap-2 align-items-center mb-2">
              <span class="badge bg-label-info p-1 rounded"><i class="ti ti-shopping-cart ti-sm"></i></span>
              <p class="mb-0">Order</p>
            </div>
            <h5 class="mb-0 pt-1">62.2%</h5>
            <small class="text-muted">6,440</small>
          </div>
          <div class="col-4">
            <div class="divider divider-vertical">
              <div class="divider-text">
                <span class="badge-divider-bg bg-label-secondary">VS</span>
              </div>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="d-flex gap-2 justify-content-end align-items-center mb-2">
              <p class="mb-0">Visits</p>
              <span class="badge bg-label-primary p-1 rounded"><i class="ti ti-link ti-sm"></i></span>
            </div>
            <h5 class="mb-0 pt-1">25.5%</h5>
            <small class="text-muted">12,749</small>
          </div>
        </div>
        <div class="d-flex align-items-center mt-6">
          <div class="progress w-100" style="height: 10px;">
            <div class="progress-bar bg-info" style="width: 70%" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
            <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Sales Overview -->

  <!-- Earning Reports -->
  <div class="col-lg-6">
    <div class="card h-100">
      <div class="card-header pb-0 d-flex justify-content-between">
        <div class="card-title mb-0">
          <h5 class="mb-1">Earning Reports</h5>
          <p class="card-subtitle">Weekly Earnings Overview</p>
        </div>
        <div class="dropdown">
          <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1" type="button" id="earningReportsId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ti ti-dots-vertical ti-md text-muted"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earningReportsId">
            <a class="dropdown-item" href="javascript:void(0);">View More</a>
            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="row align-items-center g-md-8">
          <div class="col-12 col-md-5 d-flex flex-column">
            <div class="d-flex gap-2 align-items-center mb-3 flex-wrap">
              <h2 class="mb-0">$468</h2>
              <div class="badge rounded bg-label-success">+4.2%</div>
            </div>
            <small class="text-body">You informed of this week compared to last week</small>
          </div>
          <div class="col-12 col-md-7 ps-xl-8">
            <div id="weeklyEarningReports"></div>
          </div>
        </div>
        <div class="border rounded p-5 mt-5">
          <div class="row gap-4 gap-sm-0">
            <div class="col-12 col-sm-4">
              <div class="d-flex gap-2 align-items-center">
                <div class="badge rounded bg-label-primary p-1"><i class="ti ti-currency-dollar ti-sm"></i></div>
                <h6 class="mb-0 fw-normal">Earnings</h6>
              </div>
              <h4 class="my-2">$545.69</h4>
              <div class="progress w-75" style="height:4px">
                <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="col-12 col-sm-4">
              <div class="d-flex gap-2 align-items-center">
                <div class="badge rounded bg-label-info p-1"><i class="ti ti-chart-pie-2 ti-sm"></i></div>
                <h6 class="mb-0 fw-normal">Profit</h6>
              </div>
              <h4 class="my-2">$256.34</h4>
              <div class="progress w-75" style="height:4px">
                <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="col-12 col-sm-4">
              <div class="d-flex gap-2 align-items-center">
                <div class="badge rounded bg-label-danger p-1"><i class="ti ti-brand-paypal ti-sm"></i></div>
                <h6 class="mb-0 fw-normal">Expense</h6>
              </div>
              <h4 class="my-2">$74.19</h4>
              <div class="progress w-75" style="height:4px">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Earning Reports -->

  <!-- Support Tracker -->
  <div class="col-md-6">
    <div class="card h-100">
      <div class="card-header d-flex justify-content-between">
        <div class="card-title mb-0">
          <h5 class="mb-1">Support Tracker</h5>
          <p class="card-subtitle">Last 7 Days</p>
        </div>
        <div class="dropdown">
          <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1" type="button" id="supportTrackerMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ti ti-dots-vertical ti-md text-muted"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="supportTrackerMenu">
            <a class="dropdown-item" href="javascript:void(0);">View More</a>
            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
          </div>
        </div>
      </div>
      <div class="card-body row">
        <div class="col-12 col-sm-4 col-md-12 col-lg-4">
          <div class="mt-lg-4 mt-lg-2 mb-lg-6 mb-2">
            <h2 class="mb-0">164</h2>
            <p class="mb-0">Total Tickets</p>
          </div>
          <ul class="p-0 m-0">
            <li class="d-flex gap-4 align-items-center mb-lg-3 pb-1">
              <div class="badge rounded bg-label-primary p-1_5"><i class="ti ti-ticket ti-md"></i></div>
              <div>
                <h6 class="mb-0 text-nowrap">New Tickets</h6>
                <small class="text-muted">142</small>
              </div>
            </li>
            <li class="d-flex gap-4 align-items-center mb-lg-3 pb-1">
              <div class="badge rounded bg-label-info p-1_5"><i class="ti ti-circle-check ti-md"></i></div>
              <div>
                <h6 class="mb-0 text-nowrap">Open Tickets</h6>
                <small class="text-muted">28</small>
              </div>
            </li>
            <li class="d-flex gap-4 align-items-center pb-1">
              <div class="badge rounded bg-label-warning p-1_5"><i class="ti ti-clock ti-md"></i></div>
              <div>
                <h6 class="mb-0 text-nowrap">Response Time</h6>
                <small class="text-muted">1 Day</small>
              </div>
            </li>
          </ul>
        </div>
        <div class="col-12 col-sm-8 col-md-12 col-lg-8">
          <div id="supportTracker"></div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Support Tracker -->

  <!-- Sales By Country -->
  <div class="col-xxl-4 col-md-6">
    <div class="card h-100">
      <div class="card-header d-flex justify-content-between">
        <div class="card-title mb-0">
          <h5 class="mb-1">Sales by Countries</h5>
          <p class="card-subtitle">Monthly Sales Overview</p>
        </div>
        <div class="dropdown">
          <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1" type="button" id="salesByCountry" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ti ti-dots-vertical ti-md text-muted"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesByCountry">
            <a class="dropdown-item" href="javascript:void(0);">Download</a>
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <ul class="p-0 m-0">
          <li class="d-flex align-items-center mb-4">
            <div class="avatar flex-shrink-0 me-4">
              <i class="fis fi fi-us rounded-circle fs-2"></i>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <div class="d-flex align-items-center">
                  <h6 class="mb-0 me-1">$8,567k</h6>

                </div>
                <small class="text-body">United states</small>
              </div>
              <div class="user-progress">
                <p class="text-success fw-medium mb-0 d-flex align-items-center gap-1">
                  <i class='ti ti-chevron-up'></i>
                  25.8%
                </p>
              </div>
            </div>
          </li>
          <li class="d-flex align-items-center mb-4">
            <div class="avatar flex-shrink-0 me-4">
              <i class="fis fi fi-br rounded-circle fs-2"></i>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <div class="d-flex align-items-center">
                  <h6 class="mb-0 me-1">$2,415k</h6>
                </div>
                <small class="text-body">Brazil</small>
              </div>
              <div class="user-progress">
                <p class="text-danger fw-medium mb-0 d-flex align-items-center gap-1">
                  <i class='ti ti-chevron-down'></i>
                  6.2%
                </p>
              </div>
            </div>
          </li>
          <li class="d-flex align-items-center mb-4">
            <div class="avatar flex-shrink-0 me-4">
              <i class="fis fi fi-in rounded-circle fs-2"></i>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <div class="d-flex align-items-center">
                  <h6 class="mb-0 me-1">$865k</h6>
                </div>
                <small class="text-body">India</small>
              </div>
              <div class="user-progress">
                <p class="text-success fw-medium mb-0 d-flex align-items-center gap-1">
                  <i class='ti ti-chevron-up'></i>
                  12.4%
                </p>
              </div>
            </div>
          </li>
          <li class="d-flex align-items-center mb-4">
            <div class="avatar flex-shrink-0 me-4">
              <i class="fis fi fi-au rounded-circle fs-2"></i>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <div class="d-flex align-items-center">
                  <h6 class="mb-0 me-1">$745k</h6>
                </div>
                <small class="text-body">Australia</small>
              </div>
              <div class="user-progress">
                <p class="text-danger fw-medium mb-0 d-flex align-items-center gap-1">
                  <i class='ti ti-chevron-down'></i>
                  11.9%
                </p>
              </div>
            </div>
          </li>
          <li class="d-flex align-items-center mb-4">
            <div class="avatar flex-shrink-0 me-4">
              <i class="fis fi fi-fr rounded-circle fs-2"></i>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <div class="d-flex align-items-center">
                  <h6 class="mb-0 me-1">$45</h6>
                </div>
                <small class="text-body">France</small>
              </div>
              <div class="user-progress">
                <p class="text-success fw-medium mb-0 d-flex align-items-center gap-1">
                  <i class='ti ti-chevron-up'></i>
                  16.2%
                </p>
              </div>
            </div>
          </li>
          <li class="d-flex align-items-center">
            <div class="avatar flex-shrink-0 me-4">
              <i class="fis fi fi-cn rounded-circle fs-2"></i>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <div class="d-flex align-items-center">
                  <h6 class="mb-0 me-1">$12k</h6>
                </div>
                <small class="text-body">China</small>
              </div>
              <div class="user-progress">
                <p class="text-success fw-medium mb-0 d-flex align-items-center gap-1">
                  <i class='ti ti-chevron-up'></i>
                  14.8%
                </p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Sales By Country -->

  <!-- Total Earning -->
  <div class="col-xxl-4 col-md-6">
    <div class="card h-100">
      <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
          <h5 class="mb-0 card-title">Total Earning</h5>
          <div class="dropdown">
            <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1" type="button" id="totalEarning" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="ti ti-dots-vertical ti-md text-muted"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalEarning">
              <a class="dropdown-item" href="javascript:void(0);">View More</a>
              <a class="dropdown-item" href="javascript:void(0);">Delete</a>
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center">
          <h2 class="mb-0 me-2">87%</h2>
          <i class="ti ti-chevron-up text-success me-1"></i>
          <h6 class="text-success mb-0">25.8%</h6>
        </div>
      </div>
      <div class="card-body">
        <div id="totalEarningChart"></div>
        <div class="d-flex align-items-start my-4">
          <div class="badge rounded bg-label-primary p-2 me-4 rounded"><i class="ti ti-brand-paypal ti-md"></i></div>
          <div class="d-flex justify-content-between w-100 gap-2 align-items-center">
            <div class="me-2">
              <h6 class="mb-0">Total Revenue</h6>
              <small class="text-body">Client Payment</small>
            </div>
            <h6 class="mb-0 text-success">+$126</h6>
          </div>
        </div>
        <div class="d-flex align-items-start">
          <div class="badge rounded bg-label-secondary p-2 me-4 rounded"><i class="ti ti-currency-dollar ti-md"></i></div>
          <div class="d-flex justify-content-between w-100 gap-2 align-items-center">
            <div class="me-2">
              <h6 class="mb-0">Total Sales</h6>
              <small class="text-body">Refund</small>
            </div>
            <h6 class="mb-0 text-success">+$98</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Total Earning -->

  <!-- Monthly Campaign State -->
  <div class="col-xxl-4 col-md-6">
    <div class="card h-100">
      <div class="card-header d-flex justify-content-between">
        <div class="card-title mb-0">
          <h5 class="mb-1">Monthly Campaign State</h5>
          <p class="card-subtitle">8.52k Social Visiters</p>
        </div>
        <div class="dropdown">
          <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1" type="button" id="MonthlyCampaign" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ti ti-dots-vertical ti-md text-muted"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="MonthlyCampaign">
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Download</a>
            <a class="dropdown-item" href="javascript:void(0);">View All</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <ul class="p-0 m-0">
          <li class="mb-6 d-flex justify-content-between align-items-center">
            <div class="badge bg-label-success rounded p-1_5"><i class="ti ti-mail ti-md"></i></div>
            <div class="d-flex justify-content-between w-100 flex-wrap">
              <h6 class="mb-0 ms-4">Emails</h6>
              <div class="d-flex">
                <p class="mb-0">12,346</p>
                <p class="ms-4 text-success mb-0">0.3%</p>
              </div>
            </div>
          </li>
          <li class="mb-6 d-flex justify-content-between align-items-center">
            <div class="badge bg-label-info rounded p-1_5"><i class="ti ti-link ti-md"></i></div>
            <div class="d-flex justify-content-between w-100 flex-wrap">
              <h6 class="mb-0 ms-4">Opened</h6>
              <div class="d-flex">
                <p class="mb-0">8,734</p>
                <p class="ms-4 text-success mb-0">2.1%</p>
              </div>
            </div>
          </li>
          <li class="mb-6 d-flex justify-content-between align-items-center">
            <div class="badge bg-label-warning rounded p-1_5"><i class="ti ti-mouse ti-md"></i></div>
            <div class="d-flex justify-content-between w-100 flex-wrap">
              <h6 class="mb-0 ms-4">Clicked</h6>
              <div class="d-flex">
                <p class="mb-0">967</p>
                <p class="ms-4 text-danger mb-0">1.4%</p>
              </div>
            </div>
          </li>
          <li class="mb-6 d-flex justify-content-between align-items-center">
            <div class="badge bg-label-primary rounded p-1_5"><i class="ti ti-users ti-md"></i></div>
            <div class="d-flex justify-content-between w-100 flex-wrap">
              <h6 class="mb-0 ms-4">Subscribe</h6>
              <div class="d-flex">
                <p class="mb-0">345</p>
                <p class="ms-4 text-success mb-0">8.5%</p>
              </div>
            </div>
          </li>
          <li class="mb-6 d-flex justify-content-between align-items-center">
            <div class="badge bg-label-secondary rounded p-1_5"><i class="ti ti-alert-triangle ti-md"></i></div>
            <div class="d-flex justify-content-between w-100 flex-wrap">
              <h6 class="mb-0 ms-4">Complaints</h6>
              <div class="d-flex">
                <p class="mb-0">10</p>
                <p class="ms-4 text-danger mb-0">1.5%</p>
              </div>
            </div>
          </li>
          <li class="d-flex justify-content-between align-items-center">
            <div class="badge bg-label-danger rounded p-1_5"><i class="ti ti-ban ti-md"></i></div>
            <div class="d-flex justify-content-between w-100 flex-wrap">
              <h6 class="mb-0 ms-4">Unsubscribe</h6>
              <div class="d-flex">
                <p class="mb-0">86</p>
                <p class="ms-4 text-success mb-0">0.8%</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Monthly Campaign State -->

  <!-- Source Visit -->
  <div class="col-xxl-4 col-xl-6 col-lg-12">
    <div class="card h-100">
      <div class="card-header d-flex justify-content-between">
        <div class="card-title mb-0">
          <h5 class="mb-1">Source Visits</h5>
          <p class="card-subtitle">38.4k Visitors</p>
        </div>
        <div class="dropdown">
          <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1" type="button" id="sourceVisits" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ti ti-dots-vertical ti-md text-muted"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sourceVisits">
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Download</a>
            <a class="dropdown-item" href="javascript:void(0);">View All</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <ul class="list-unstyled mb-0">
          <li class="mb-6">
            <div class="d-flex align-items-center">
              <div class="badge bg-label-secondary text-body p-2 me-4 rounded"><i class="ti ti-shadow ti-md"></i></div>
              <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                <div class="me-2">
                  <h6 class="mb-0">Direct Source</h6>
                  <small class="text-body">Direct link click</small>
                </div>
                <div class="d-flex align-items-center">
                  <p class="mb-0">1.2k</p>
                  <div class="ms-4 badge bg-label-success">+4.2%</div>
                </div>
              </div>
            </div>
          </li>
          <li class="mb-6">
            <div class="d-flex align-items-center">
              <div class="badge bg-label-secondary text-body p-2 me-4 rounded"><i class="ti ti-globe ti-md"></i></div>
              <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                <div class="me-2">
                  <h6 class="mb-0">Social Network</h6>
                  <small class="text-body">Social Channels</small>
                </div>
                <div class="d-flex align-items-center">
                  <p class="mb-0">31.5k</p>
                  <div class="ms-4 badge bg-label-success">+8.2%</div>
                </div>
              </div>
            </div>
          </li>
          <li class="mb-6">
            <div class="d-flex align-items-center">
              <div class="badge bg-label-secondary text-body p-2 me-4 rounded"><i class="ti ti-mail ti-md"></i></div>
              <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                <div class="me-2">
                  <h6 class="mb-0">Email Newsletter</h6>
                  <small class="text-body">Mail Campaigns</small>
                </div>
                <div class="d-flex align-items-center">
                  <p class="mb-0">893</p>
                  <div class="ms-4 badge bg-label-success">+2.4%</div>
                </div>
              </div>
            </div>
          </li>
          <li class="mb-6">
            <div class="d-flex align-items-center">
              <div class="badge bg-label-secondary text-body p-2 me-4 rounded"><i class="ti ti-external-link ti-md"></i></div>
              <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                <div class="me-2">
                  <h6 class="mb-0">Referrals</h6>
                  <small class="text-body">Impact Radius Visits</small>
                </div>
                <div class="d-flex align-items-center">
                  <p class="mb-0">342</p>
                  <div class="ms-4 badge bg-label-danger">-0.4%</div>
                </div>
              </div>
            </div>
          </li>
          <li class="mb-6">
            <div class="d-flex align-items-center">
              <div class="badge bg-label-secondary text-body p-2 me-4 rounded"><i class="ti ti-ad ti-md"></i></div>
              <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                <div class="me-2">
                  <h6 class="mb-0">ADVT</h6>
                  <small class="text-body">Google ADVT</small>
                </div>
                <div class="d-flex align-items-center">
                  <p class="mb-0">2.15k</p>
                  <div class="ms-4 badge bg-label-success">+9.1%</div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="d-flex align-items-center">
              <div class="badge bg-label-secondary text-body p-2 me-4 rounded"><i class="ti ti-star ti-md"></i></div>
              <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                <div class="me-2">
                  <h6 class="mb-0">Other</h6>
                  <small class="text-body">Many Sources</small>
                </div>
                <div class="d-flex align-items-center">
                  <p class="mb-0">12.5k</p>
                  <div class="ms-4 badge bg-label-success">+6.2%</div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Source Visit -->

  <!-- Projects table -->
  <div class="col-xxl-8">
    <div class="card">
      <div class="card-datatable table-responsive">
        <table class="datatables-projects table table-sm">
          <thead>
            <tr>
              <th></th>
              <th></th>
              <th>Project</th>
              <th>Leader</th>
              <th>Team</th>
              <th class="w-px-200">Progress</th>
              <th>Action</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>
  <!--/ Projects table -->
</div>


          </div>
          <!-- / Content -->

          
          

<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
  <div class="container-xxl">
    <div class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
      <div class="text-body">
        © <script>
        document.write(new Date().getFullYear())

        </script>, made with ❤️ by <a href="https://pixinvent.com" target="_blank" class="footer-link">Pixinvent</a>
      </div>
      <div class="d-none d-lg-inline-block">
        
        <a href="https://themeforest.net/licenses/standard" class="footer-link me-4" target="_blank">License</a>
        <a href="https://1.envato.market/pixinvent_portfolio" target="_blank" class="footer-link me-4">More Themes</a>
        
        <a href="https://demos.pixinvent.com/vuexy-html-admin-template/documentation/" target="_blank" class="footer-link me-4">Documentation</a>
        
        
        <a href="https://pixinvent.ticksy.com/" target="_blank" class="footer-link d-none d-sm-inline-block">Support</a>
        
      </div>
    </div>
  </div>
</footer>
<!-- / Footer -->

          
          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    
    
    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    
    
    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
    
  </div>
  <!-- / Layout wrapper -->


    

    

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    
    <script src="<?= base_url('vue_assets/'); ?>vendor/libs/jquery/jquery.js"></script>
    <script src="<?= base_url('vue_assets/'); ?>vendor/libs/popper/popper.js"></script>
    <script src="<?= base_url('vue_assets/'); ?>vendor/js/bootstrap.js"></script>
    <script src="<?= base_url('vue_assets/'); ?>vendor/libs/node-waves/node-waves.js"></script>
    <script src="<?= base_url('vue_assets/'); ?>vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?= base_url('vue_assets/'); ?>vendor/libs/hammer/hammer.js"></script>
    <script src="<?= base_url('vue_assets/'); ?>vendor/libs/i18n/i18n.js"></script>
    <script src="<?= base_url('vue_assets/'); ?>vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="<?= base_url('vue_assets/'); ?>vendor/js/menu.js"></script>
    <script src="<?= base_url('assets/'); ?>/js/dashboard.js"></script>
    
    
    <!-- endbuild -->

    <!-- Vendors JS -->
     
    <script src="<?= base_url('vue_assets/'); ?>vendor/libs/chartjs/chartjs.js"></script>
    <script src="<?= base_url('vue_assets/'); ?>vendor/libs/apex-charts/apexcharts.js"></script>
<script src="<?= base_url('vue_assets/'); ?>vendor/libs/swiper/swiper.js"></script>
<script src="<?= base_url('vue_assets/'); ?>vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>

    <!-- Main JS -->
    <script src="<?= base_url('vue_assets/'); ?>js/main.js"></script>
    
    
    <!-- Page JS -->
    <script src="<?= base_url('vue_assets/'); ?>js/dashboards-analytics.js"></script>
    
  </body>

</html>

<!-- beautify ignore:end -->