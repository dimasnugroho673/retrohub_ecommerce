<div id="app">
    <div class="main-wrapper">

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Invoice</h1>
          </div>
          <div class="row">
            <div class="col-md-12">
                <!-- DataTales Example -->
          <div class="card mt-4">
                <div class="card-header">
                    <h4>See Member Invoices</h4>
                </div>
                

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>ID Invoice</th>
                      <th>Name Item</th>
                      <th>Address</th>
                      <th>Order Date</th>
                      <th>Payment Limit</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>ID Invoice</th>
                      <th>Name Item</th>
                      <th>Address</th>
                      <th>Order Date</th>
                      <th>Payment Limit</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                      <?php 
                            $no = 1;
                            foreach($invoice as $inv) : ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $inv->id; ?></td>
                        <td><?php echo $inv->nama; ?></td>
                        <td><?php echo $inv->alamat; ?></td>
                        <td><?php echo $inv->tgl_pesan; ?></td>
                        <td><?php echo $inv->batas_bayar; ?></td>
                        <td>
                            <a class="btn btn-info" href="<?php echo site_url('Admin/invoice/detail/' .$inv->id, ''); ?>">Detail</a>
                        </td>
                        <!-- onclick="return confirm('Anda yakin ingin menghapus?')" -->
                    </tr>

                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->


      </div>
      <!-- End of Main Content -->


            </div>
          </div>
