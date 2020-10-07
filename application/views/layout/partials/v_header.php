<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Retrohub &mdash; <?php echo $this->uri->segment(1); ?></title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&display=swap" rel="stylesheet">

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('assets/'); ?>css/bootstrap.min.css" rel="stylesheet">

  <!-- Material Design Bootstrap -->
  <link href="<?php echo base_url('assets/'); ?>css/mdb.min.css" rel="stylesheet">

  <!-- Your custom styles (optional) -->
  <link href="<?php echo base_url('assets/'); ?>css/style.min.css" rel="stylesheet">

  <!-- FAVICON -->
  <link rel="shortcut icon" href="<?php echo base_url('assets/'); ?>img/favicon/favicon.ico" type="image/x-icon">

  <style type="text/css">
    html,
    body,
    header,
    .carousel {
      height: 60vh;
    }

    @media (max-width: 740px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    .kaset {
      margin-bottom: 60px;
    }

    .top-left {
      position: absolute;
      top: 8px;
      left: 16px;
    }

    .badge {
      width: 100px;
      height: 30px;
      font-size: 20px;


    }

    .badge-pill {
      color: #ffffff;
      background-color: #33b2a9;
    }

    .badge-pill2 {
      color: #ffffff;
      background-color: #fd7357;
    }

    .sampah {
      margin-left: 400px;
      margin-bottom: 0px;
      margin-top: -100px;
    }
  </style>

  <link href="<?php echo base_url('assets/'); ?>css/template.css" rel="stylesheet">
</head>

<body>

  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand mt-1" href="<?php echo site_url('home'); ?>">
        <img src="<?php echo base_url('assets/'); ?>img/logo/logo.png" height="23" class="d-inline-block align-top" alt="">
      </a>
      <li class="nav-item ml-auto cart-icon" style="list-style: none;">
        <a href="<?php echo site_url('cart'); ?>" class="nav-link text-muted mt-2">
          <span class="text-muted cart-home" style="color: black;">
            <?php echo '<span class="badge" style="width: 80px; background-color: #ff7e69ff; box-shadow: none;"><i class="fas fa-shopping-cart md-6 float-left" style="color: white;"></i>' . '<span class="float-left">' . $this->cart->total_items() . '</span>' . '</span>'; ?>
          </span>
        </a>
      </li>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto mb-2">
          <li class="nav-item mt-2">
            <a class="nav-link nav-link-nav text-muted <?php if ($this->uri->segment(1) == "home") {
                                                          echo "actived";
                                                        } ?>" href="<?php echo site_url('home'); ?>">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item mt-2">
            <a class="nav-link nav-link-nav text-muted" href="#">About Us</a>
          </li>
          <li class="nav-item dropdown mt-2">
            <a class="nav-link nav-link-nav dropdown-toggle text-muted" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Category
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item nav-link-nav text-muted <?php if ($this->uri->segment(2) == "electronic") {
                                                                echo "actived";
                                                              } ?>" href="<?php echo site_url('category/electronic'); ?>">Electronic</a>
              <a class="dropdown-item nav-link-nav text-muted <?php if ($this->uri->segment(2) == "otomotif") {
                                                                echo "actived";
                                                              } ?>" href="<?php echo site_url('category/otomotif'); ?>">Otomotif</a>
              <a class="dropdown-item nav-link-nav text-muted <?php if ($this->uri->segment(2) == "design") {
                                                                echo "actived";
                                                              } ?>" href="<?php echo site_url('category/design'); ?>">Design</a>
              <a class="dropdown-item nav-link-nav text-muted <?php if ($this->uri->segment(2) == "classicItems") {
                                                                echo "actived";
                                                              } ?>" href="<?php echo site_url('category/classicItems'); ?>">Classic Item</a>
              <a class="dropdown-item nav-link-nav text-muted <?php if ($this->uri->segment(2) == "other") {
                                                                echo "actived";
                                                              } ?>" href="<?php echo site_url('category/other'); ?>">Other</a>
            </div>
          </li>
          <!-- cek SESSION USER APAKAH ADA ATAU TIDAK -->
          <?php if ($this->session->userdata('username')) { ?>
            <li class="nav-item mt-2">
              <a class="nav-link text-capitalize text-muted"><span style="color: #ff7e69ff; font-weight: 700;"><?php echo "<strong>" . $this->session->userdata('username') . "</strong>"; ?></span></a>
            </li>
            <li class="nav-item mt-2">
              <a data-toggle="modal" data-target="#logoutModal" href="<?php echo site_url('auth/logout'); ?>" class="nav-link" style="font-weight: 700; color: #2bb2acff;"><strong>Logout</strong></a>
            </li>
          <?php } else { ?>
            <li class="nav-item">
              <a href="<?php echo site_url('auth/login'); ?>" class="nav-link text-white text-uppercase " target="_blank"><button class="btn btn-sm mt-2 login-home" style="background-color: #2bb2acff; border-radius: 40px;">Login Now</button></a>
            </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </nav>