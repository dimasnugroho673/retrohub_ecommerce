<!--Main layout-->
  <main>
    <div class="container">

      <!--Section: Products v.3-->
      <h3 class="mt-4 text-muted heading-category text-capitalize"><?php echo $this->uri->segment('2'); ?></h3>
      
      <section class="text-center mb-4" style="margin-top: 40px;">
         
        <!--Grid row-->
        
        <div class="row wow fadeIn">


          <!--Grid column-->
          <?php 
                foreach($design as $b){
          ?>
          <div class="col-lg-6 col-md-6 mb-4" >

            <!--Card-->
            <div class="card card-product-home">

              <!--Card image-->

              <div class="top-left"><span class="badge badge-pill badge-product">NEW</span></div>
              <div class="view overlay">

                <img src="<?php echo base_url('uploads/' .$b->gambar); ?>" class="card-img-top" alt="">
                <a href="<?php echo site_url('home/detail/' . $b->id_barang); ?>">
                  <div class="mask pattern-2"></div>
                </a>
              </div>
              <!--Card image-->

              <!--Card content-->
              <div class="card-body text-left">
                <!--Category & Title-->
                <a href="<?php echo site_url('home/detail/' . $b->id_barang); ?>" class="grey-text">
                  <h5 class="link-product text-capitalize"><?php echo $b->nama_barang; ?></h5>
                </a>
               
                
                <p class="font-weight-bold blue-text grey-text price-product">Rp. <?php echo number_format($b->harga, 0,',','.'); ?></p>
                
              </div>
              <!--Card content-->
             
            </div>
            <!--Card-->

          </div>
          <!--Grid column-->
          <?php  } ?> 

          

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Products v.3-->

    </div>
  </div>
</main>
<!--Main layout-->
