
    <div class="container">
        <br>
        <br>
        <br>
        <br>
        <br>

        <div class="card mb-4">
            <div class="card-header text-muted" style="border-bottom: none; background: none;"><strong>Detail Item</strong></div>
                <div class="card-body">
            <table class="table table-responsive-sm">
            <thead class="text-white" style="background-color: #2bb2acff;">
                <tr align="center">
                    <th width="20">No</th>
                    <th>Name Item</th>
                    <th width="20">Qty</th>
                    <th>Price</th>
                    <th>Sub Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($this->cart->contents() as $items) : ?>

                <tr align="center">
                    <th><?php echo $no++; ?></th>
                    <th><?php echo $items['name']; ?></th>
                    <th><?php echo $items['qty']; ?></th>
                    <th>Rp. <?php echo number_format($items['price'], 0,',','.') ; ?></th>
                    <th>Rp. <?php echo number_format($items['subtotal'], 0,',','.') ; ?></th>
                </tr>
                <?php endforeach; ?>
                <tr>
                    <td align="right" colspan="5"><b>Grand Total : Rp. <?php echo number_format($this->cart->total(), 0,',','.') ; ?></b></td>
                </tr>
            </tbody>
            </table>

            <a data-toggle="modal" data-target="#deleteCartModal" href="<?php echo site_url('cart/deleteItem'); ?>" >
                <button class="btn btn-danger float-right ml-2">Delete Cart</button>
            </a>
            <a href="<?php echo site_url('/'); ?>">
                <button class="btn btn-primary float-right ml-2">Explore</button>
            </a>
            <a href="<?php echo site_url('cart/payItem'); ?>">
                <button class="btn btn-success float-right ml-2">Payment</button>
            </a>
                </div>
        </div>

    </div>        

    <div class="modal fade" id="deleteCartModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="border: none;">
                    <h5 class="modal-title" id="exampleModalLabel"><strong>Are you sure to Delete Cart?</strong></h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select <strong class="text-danger">Delete</strong> to clear Cart</div>
                
                <div class="modal-footer" style="border: none;">
                    <button class="btn text-white" type="button" data-dismiss="modal" style="background-color: rgb(204, 204, 204);">Cancel</button>
                    <a class="btn btn-danger" href="<?php echo site_url('cart/deleteItem'); ?>"><strong>Delete</strong></a>
                </div>
            </div>
        </div>
    </div>