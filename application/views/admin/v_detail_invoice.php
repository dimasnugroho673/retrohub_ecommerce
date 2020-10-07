<div id="app">
    <div class="main-wrapper">

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Order Detail</h1>
          </div>
          <div class="row">
            <div class="col-md-12">
                <!-- DataTales Example -->
          <div class="card mt-4">
                <div class="card-header">
                    <h4>Order Detail for Invoice ID <span class="badge badge-pill badge-success"><?php echo $invoice->id; ?></span> </h4>
                </div>
                

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>ID Item</th>
                      <th>Name Item</th>
                      <th>Qty Order</th>
                      <th>Price Unit</th>
                      <th>Sub-Total</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>ID Item</th>
                      <th>Name Item</th>
                      <th>Qty Order</th>
                      <th>Price Unit</th>
                      <th>Sub-Total</th>
                    </tr>
                  </tfoot>
                  <tbody>
                      <?php 
                            $no = 1;
                            $total = 0;
                                                          
                            // periksa array apakah kosong atau tida? (kalo kosong dia bakalan error kalau tidak menggunakan if)
                            if(is_array($pesanan)){
                                foreach($pesanan as $psn){
                                // rumus subtotal
                                $subtotal = $psn->jumlah * $psn->harga; 
                                // rumus total
                                $total += $subtotal;
                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $psn->id_barang; ?></td>
                                    <td><?php echo $psn->nama_brg; ?></td>
                                    <td><?php echo $psn->jumlah; ?></td>
                                    <td><?php echo number_format($psn->harga, 0,',','.'); ?></td>
                                    <td><?php echo number_format($subtotal, 0,',','.'); ?></td>
                                </tr>
                            <?php } 
                            }  
                            ?>

                            <tr>
                                <td colspan="5" align="right">Grand Total</td>
                                <td align="right">Rp. <?php echo number_format($total, 0,',','.'); ?></td>
                            </tr>
                  </tbody>
                </table>

                <a href="<?php echo site_url('Admin/invoice'); ?>">
                    <button class="btn btn-primary">Back</button>
                </a>


              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->


      </div>
      <!-- End of Main Content -->


            </div>
          </div>
          