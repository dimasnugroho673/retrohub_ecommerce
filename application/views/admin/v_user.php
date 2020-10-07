<div id="app">
  <div class="main-wrapper">

    <!-- Main Content -->
    <div class="main-content">
      <section class="section">
        <div class="section-header">
          <h1>List Users</h1>
        </div>
        <div class="row">

        </div>

        <div class="row">
          <div class="col-md-12">
            <!-- DataTales Example -->
            <div class="card mt-4">
              <div class="card-header">
                <h4>Users</h4>
              </div>


              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Photo</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>No</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Passsword</th>
                        <th>Photo</th>
                        <th>Status</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      <?php
                      $no = 1;
                      foreach ($user as $b) : ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $b->nama; ?></td>
                          <td><?php echo $b->username; ?></td>
                          <td><?php $text_before = $b->password;
                              $text_after = str_replace("$b->password", "*******", $text_before);
                              echo $text_after; ?></td>
                          <td><img src="<?php echo base_url('uploads/' . $b->gambar); ?>" style="height: 50px; width: 50px;"></td>
                          <td><?php $text_before = $b->is_active;
                              $text_after = str_replace("1", "Active", $text_before);

                              echo $text_after; ?></td>

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