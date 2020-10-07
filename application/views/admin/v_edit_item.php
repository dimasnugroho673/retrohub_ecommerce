<div id="app">
    <div class="main-wrapper">

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Edit Item</h1>
          </div>

          <div class="row mt-4">
            <div class="col-md-12">
              <?php echo $this->session->flashdata('message'); ?> <!-- flashdata untuk data berhasil -->
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
            <div class="card">
              <?php foreach($barang as $b) : ?>
              <form class="needs-validation" novalidate="" method="post" action="<?php echo site_url('Admin/Item/updateItem'); ?>" enctype="multipart/form-data">
                <div class="card-header">
                    <h4>Add Your Item to Database</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="hidden" name="id_barang" value="<?php echo $b->id_barang; ?>" class="form-control" required="">
                        <div class="invalid-feedback">
                          Insert Your Item!
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Name Item</label>
                        <input type="text" name="nama_barang" value="<?php echo $b->nama_barang; ?>" class="form-control" required="">
                        <div class="invalid-feedback">
                        Insert Your Item!
                        </div>
                    </div>
                    <div class="form-group">
                      <label>Category</label>
                      <select name="kategori" value="<?php echo $b->kategori; ?>" class="form-control custom-select" id="exampleFormControlSelect1"  required="">
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
                        <input type="text" name="stok" value="<?php echo $b->stok; ?>" class="form-control" required="">
                        <div class="invalid-feedback">
                        Input Item Stock!
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" name="harga" value="<?php echo $b->harga; ?>" class="form-control" required="">
                        <div class="invalid-feedback">
                          How much it Price?
                        </div>
                    </div>

                    <div class="form-group">
                      <label>Image</label>
                      <input type="file" name="gambar" value="<?php echo $b->gambar; ?>" class="form-control" required=""><br>
                    </div>
                    <div class="invalid-feedback">
                        Insert Item Image!
                    </div>

                    <div class="form-group">
                        <label>Information</label>
                        <input type="text" name="keterangan" value="<?php echo $b->keterangan; ?>" class="form-control" required="">
                        <div class="valid-feedback">
                          Give Item Information!
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary">Change</button>
                </div>
            </form>
            <?php endforeach; ?>
        </div>
    </div>
            </div>
          </div>
          
          <footer class="main-footer">
            <div class="footer-left ml-4">
                Copyright &copy; 2019 Retrohub Team
            </div>
        </footer>
    </div>
  </div>
