    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br>
                <br>
                <br>
                <br>
                <div class="card mb-4 mt-4" style="box-shadow: none;">
                    <div class="card-header text-muted" style="border-bottom: none; background: none;"><strong>Detail Item</strong>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-info" role="alert">
                        <?php
                            $grand_total = 0;
                            if ($carts = $this->cart->contents()){
                                foreach ($carts as $item){
                                    $grand_total = $grand_total + $item['subtotal'];
                                }

                                echo "Total Payment : Rp. " .number_format($grand_total, 0,',','.');
                            
                        ?>
                        </div>

                        <h5 class="mt-4 text-muted"><strong>Input Your Address</strong></h5>
                        <form class="needs-validation mt-4 form-modern" novalidate="" action="<?php echo site_url('home/orderProcess'); ?>" method="post">
                            <div class="form-group">
                                <label class="text-muted">Full Name</label>
                                <input class="form-control" type="text" name="nama" required="">
                                <div class="invalid-feedback">
                                    Input Your Name!
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="text-muted">Address</label>
                                <input class="form-control" type="text" name="alamat" required="">
                                <div class="invalid-feedback">
                                    Insert Your Valid Address!
                                </div>
                            </div>

                            <div class="form-group">                            
                                <label class="text-muted">No Telp</label>
                                <input class="form-control" type="text" name="no_telp" required="">
                                <div class="invalid-feedback">
                                    Insert Your Phone!
                                </div>
                            </div>

                            <div class="form-group">                            
                                <label class="text-muted">Expedition</label>
                                <select class="form-control custom-select" required="">
                                    <option disable>Select Expedition</option>
                                    <option>TIKI</option>
                                    <option>JNE</option>
                                    <option>POS Indonesia</option>
                                    <option>GOJEK</option>
                                    <option>GRAB</option>
                                </select>
                                <div class="invalid-feedback">
                                    Select Expedition!
                                </div>
                            </div>

                            <div class="form-group">                            
                                <label class="text-muted">Select Bank</label>
                                <select class="form-control custom-select" required="">
                                    <option disable>Select Bank</option>
                                    <option>BRI</option>
                                    <option>BNI</option>
                                    <option>BCA</option>
                                    <option>Mandiri</option>
                                </select>
                                <div class="invalid-feedback">
                                    Select Bank Transfer1
                                </div>
                            </div>

                            <button class="btn btn-success mt-4" type="submit">Pay</button>
                        </form>

                        <?php 
                            } else {
                                echo "Oops, Cart was empty!";
                            }   
                        ?>
                    </div>
                </div>
            </div>

    
                    </div>
                </div>
</div>
    