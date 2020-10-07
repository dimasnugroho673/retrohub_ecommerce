  <!--Main layout-->
  <main class="mt-5 pt-4">
    <div class="container dark-grey-text mt-5 mb-5">
        <div class="card">
            <div class="card-header" style="border-bottom: none; background: none;"><strong>Detail Item</strong></div>
                <div class="card-body">
                <?php foreach($barang as $brg): ?>
                    <div class="row wow fadeIn">

                        <!--Grid column-->
                        <div class="col-md-6 mb-4">

                        <img src="<?php echo base_url('uploads/' .$brg->gambar); ?>" class="img-fluid" alt="">

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6 mb-4">

                        <!--Content-->
                        <div class="p-4">

                            <table class="table text-muted">
                                <tr>
                                    <th><strong>Name Item   : </strong></th>
                                    <th style="text-transform: capitalize;"><?php echo $brg->nama_barang; ?></th>
                                </tr>
                                <tr>
                                    <th><strong>Information : </strong></th>
                                    <td style="text-transform: capitalize;"><?php echo $brg->keterangan; ?></td>
                                </tr>
                                <tr>
                                    <th><strong>Category    : </strong></th>
                                    <td style="text-transform: capitalize;"><?php echo $brg->kategori; ?></td>
                                </tr>
                                <tr>
                                    <th><strong>Stock Available  : </strong></th>
                                    <td style="text-transform: capitalize;"><?php echo $brg->stok ?> Pcs</td>
                                </tr>
                            </table>

                            <div class="d-flex justify-content-left">
                                <a href="<?php echo site_url('home/addCart/' . $brg->id_barang); ?>" class="btn btn-primary btn-md my-0 p">Add to cart
                                    <i class="fas fa-shopping-cart ml-1"></i>
                                </a>
                                <a href="<?php echo site_url('/'); ?>" class="btn btn-success btn-md my-0 p">Back
                                </a>
                            </div>

                        </div>
                        <!--Content-->
                        <?php endforeach; ?>

                        </div>
                        <!--Grid column-->

                        </div>
                        <!--Grid row-->


                </div>
            </div>
        </div>

      <!--Grid row-->
      

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body> 
</html>