<div id="app">
  <div class="main-wrapper">

    <!-- Main Content -->
    <div class="main-content">
      <section class="section">
        <div class="section-header">
          <h1>List Items</h1>
        </div>
        <div class="row">
          <div class="col-md-12">
            <!-- Button add item with modal -->
            <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#addItem">
              <i class="fas fa-fw fa-plus-square"></i> Add Item
            </button>
          </div>
        </div>

        <div class="row mt-4">
          <div class="col-md-12">
            <?php echo $this->session->flashdata('message'); ?>
            <!-- flashdata untuk data berhasil -->
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <!-- DataTales Example -->
            <div class="card mt-4">
              <div class="card-header">
                <h4>Action Your Items</h4>
              </div>


              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Name Item</th>
                        <th>Category</th>
                        <th>Stock</th>
                        <th>Price</th>
                        <th>Images</th>
                        <th>Information</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>No</th>
                        <th>Name Item</th>
                        <th>Category</th>
                        <th>Stock</th>
                        <th>Price</th>
                        <th>Images</th>
                        <th>Information</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      <?php
                      $no = 1;
                      foreach ($barang as $b) : ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $b->nama_barang; ?></td>
                          <td><?php echo $b->kategori; ?></td>
                          <td><?php echo $b->stok; ?></td>
                          <td>Rp. <?php echo number_format($b->harga, 0, ',', '.'); ?></td>
                          <td><img src="<?php echo base_url('uploads/' . $b->gambar); ?>" style="height: 50px; width: 50px;"></td>
                          <td><?php echo $b->keterangan; ?></td>
                          <td>
                            <a class="btn btn-success" href="<?php echo site_url('Admin/Item/editItem/' . $b->id_barang); ?>">Edit</a>
                            <a class="btn btn-danger" href="<?php echo site_url('Admin/Item/deleteItem/' . $b->id_barang); ?>" class="btn btn-success float-right" data-toggle="modal" data-target="#deleteItemModal">Delete</a>
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

  <!-- delete item modal -->
  <div class="modal fade" id="deleteItemModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="border: none;">
          <h5 class="modal-title" id="exampleModalLabel"><strong>Are you sure to Delete this Item?</strong></h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select <strong class="text-danger">Delete</strong> to remove Item</div>

        <div class="modal-footer" style="border: none;">
          <button class="btn text-white" type="button" data-dismiss="modal" style="background-color: rgb(204, 204, 204);">Cancel</button>
          <a class="btn btn-danger" href="<?php echo site_url('Admin/Item/deleteItem/' . $b->id_barang); ?>"><strong>Delete</strong></a>
        </div>
      </div>
    </div>
  </div>



  <!-- Modal -->
  <div class="modal fade" id="addItem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Your Item</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="needs-validation" action="<?php echo site_url('Admin/item/addItem'); ?>" novalidate="" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label>Name Item</label>
              <input type="text" name="nama_barang" class="form-control" required="">
              <div class="invalid-feedback">
                Insert Name Item!
              </div>
            </div>

            <div class="form-group">
              <label>Category</label>
              <select name="kategori" class="form-control custom-select" id="exampleFormControlSelect1" required="">
                <option disabled>Choose Category</option>
                <option>Electronic</option>
                <option>Otomotif</option>
                <option>Design</option>
                <option>Classic Items</option>
                <option>Other</option>
              </select>
              <div class="invalid-feedback">
                Choose Your Category!
              </div>
            </div>

            <div class="form-group">
              <label>Stock</label>
              <input type="text" name="stok" class="form-control" required="">
              <div class="invalid-feedback">
                Input Item Stock!
              </div>
            </div>

            <div class="form-group">
              <label>Price</label>
              <input type="text" name="harga" class="form-control" required="">
              <div class="invalid-feedback">
                How it much Price?
              </div>
            </div>

            <div class="form-group">
              <label>Image</label>
              <input type="file" name="gambar" class="form-control" required=""><br>
              <div class="invalid-feedback">
                Insert Item Image!
              </div>
            </div>

            <div class="form-group"></div>
            <label>Information</label>
            <input type="text" name="keterangan" class="form-control" required="">
            <div class="invalid-feedback">
              Give Item Information!
            </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </form>
      </div>



    </div>
  </div>
</div>


<script>
  $(document).ready(function() {
    $('#dataTable').DataTable();
  });
</script>