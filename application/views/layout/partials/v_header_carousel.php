<!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade pt-4 mt-4" data-ride="carousel">

<!--Indicators-->
<ol class="carousel-indicators">
  <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
  <li data-target="#carousel-example-1z" data-slide-to="1"></li>
  <li data-target="#carousel-example-1z" data-slide-to="2"></li>
</ol>
<!--/.Indicators-->

<!--Slides-->
<div class="carousel-inner" role="listbox">

  <!--First slide-->
  <div class="carousel-item active">
    
    <div class="view kaset mb-4" style="background-image: url('<?php echo base_url('assets/'); ?>img/product/caset.jpg'); background-repeat: no-repeat; background-size: cover;">
      

      <!-- Mask & flexbox options-->
      <div class="mask pattern-7 d-flex justify-content-center align-items-center">

        <!-- Content -->
        <div class="text-center white-text mx-5 wow fadeIn">
          <h1 class="mb-4" style="font-weight: 700;">
            <strong>Find Your Dream Item</strong>
          </h1>

          <p>
            <strong>Bring Back Your Beautiful Memories</strong>
          </p>

          <p class="mb-4 d-none d-md-block">
            <!-- <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. Video and
              written versions
              available. Create your own, stunning website.</strong> -->
          </p>

          <a target="_blank" href="<?php echo site_url('home'); ?>" class="btn btn-outline-white btn-lg">Lets Check 
          </a>
        </div>
        <!-- Content -->

      </div>
      <!-- Mask & flexbox options-->

    </div>
  </div>
  <!--/First slide-->

  <!--Second slide-->
  <div class="carousel-item">
    <div class="view" style="background-image: url('<?php echo base_url('assets/'); ?>img/product/FilmLawas.jpg'); background-repeat: no-repeat; background-size: cover;">

      <!-- Mask & flexbox options-->
      <div class="mask pattern-7 d-flex justify-content-center align-items-center">

        <!-- Content -->
        <div class="text-center white-text mx-5 wow fadeIn">
          <h1 class="mb-4" style="font-weight: 700;">
            <strong>Your Memories Are Your Happiness</strong>
          </h1>

          <p>
            <strong>Return Past Memories</strong>
          </p>

          <p class="mb-4 d-none d-md-block">
            <!-- <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. Video and
              written versions
              available. Create your own, stunning website.</strong> -->
          </p>

          <a target="_blank" href="<?php echo site_url('home'); ?>" class="btn btn-outline-white btn-lg">Try to find it
            
          </a>
        </div>
        <!-- Content -->

      </div>
      <!-- Mask & flexbox options-->

    </div>
  </div>
  <!--/Second slide-->

  <!--Third slide-->
  <div class="carousel-item">
    <div class="view" style="background-image: url('<?php echo base_url('assets/') ?>img/product/PiringHitam.jpg'); background-repeat: no-repeat; background-size: cover;">

      <!-- Mask & flexbox options-->
      <div class="mask pattern-7 d-flex justify-content-center align-items-center">

        <!-- Content -->
        <div class="text-center white-text mx-5 wow fadeIn">
          <h1 class="mb-4" style="font-weight: 700;">
            <strong>Realize Your Little Desire</strong>
          </h1>

          <p>
            <strong>Find the Best Items Here</strong>
          </p>

          <a target="_blank" href="<?php echo site_url('home'); ?>" class="btn btn-outline-white btn-lg">Choose at Will
            
          </a>
        </div>
        <!-- Content -->

      </div>
      <!-- Mask & flexbox options-->

    </div>
  </div>
  <!--/Third slide-->

</div>
<!--/.Slides-->

<!--Controls-->
<a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
<!--/.Controls-->

</div>
<!--/.Carousel Wrapper-->

<!--Main layout-->
  <main>
    <div class="container">

      <!--Navbar-->
      <nav class="navbar navbar-expand-lg lighten-3 mt-3 mb-5 categories-nav" style="box-shadow: none;">

        <!-- Navbar brand -->
        <span class="navbar-brand text-muted" style="font-weight: 600;">Categories :</span>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
          aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">

          <!-- Links -->
          <ul class="navbar-nav mr-auto categories">
            <li class="nav-item">
              <a class="nav-link <?php if($this->uri->segment(1) == "home"){echo "actived-categories";}?>" href="<?php echo site_url('home'); ?>">All</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if($this->uri->segment(2) == "electronic"){echo "actived-categories";}?>" href="<?php echo site_url('category/electronic'); ?>">Electronic</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if($this->uri->segment(2) == "otomotif"){echo "actived-categories";}?>" href="<?php echo site_url('category/otomotif'); ?>">Otomotif</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if($this->uri->segment(2) == "design"){echo "actived-categories";}?>" href="<?php echo site_url('category/design'); ?>">Design</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if($this->uri->segment(2) == "classicItems"){echo "actived-categories";}?>" href="<?php echo site_url('category/classicItems'); ?>">Classic Items</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if($this->uri->segment(2) == "other"){echo "actived-categories";}?>" href="<?php echo site_url('category/other'); ?>">Other</a>
            </li>


          </ul>
          <!-- Links -->
        </div>
        <!-- Collapsible content -->

      </nav>
      <!--/.Navbar-->