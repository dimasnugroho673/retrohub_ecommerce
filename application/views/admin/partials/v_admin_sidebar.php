<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?php echo site_url('Admin/dashboard'); ?>">Retrohub</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?php echo site_url('Admin/dashboard'); ?>">St</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Administrator</li>
              <li class="nav-item dropdown <?php if($this->uri->segment(2) == "dashboard"){echo "active";}?>">
                <a href="<?php echo site_url('Admin/dashboard'); ?>" class="nav-item"><i class="fas fa-fire"></i><span>Dashboard</span></a>
              </li>
              <li class="menu-header">Items</li>
              <li class="<?php if($this->uri->segment(3) == "listItem"){echo "active";}?>"><a class="nav-link" href="<?php echo site_url('Admin/Item/listItem'); ?>"><i class="fas fa-shopping-bag"></i> <span>List Items</span></a></li>
              <li class="<?php if($this->uri->segment(2) == "invoice"){echo "active";}?>"><a class="nav-link" href="<?php echo site_url('Admin/invoice'); ?>"><i class="fas fa-file-invoice-dollar"></i> <span>Invoice</span></a></li>
              <li class="menu-header">Other</li>
              <li class="<?php if($this->uri->segment(2) == "user"){echo "active";}?>"><a class="nav-link" href="<?php echo site_url('Admin/user'); ?>"><i class="far fa-user"></i> <span>Users</span></a></li>
              <li class="<?php if($this->uri->segment(2) == "credits"){echo "active";}?>"><a class="nav-link" href="<?php echo site_url('Admin/credits'); ?>"><i class="fas fa-pencil-ruler"></i> <span>Credits</span></a></li>
              <li class="menu-header">Escape</li>
              <li><a class="nav-link text-danger" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a></li>
            </ul>
        </aside>
      </div>

      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><strong>Ready to Leave?</strong></h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select <strong class="text-danger">Logout</strong> below if you are ready to end your current session.</div>
                
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger" href="<?php echo site_url('auth/logout'); ?>"><strong>Logout</strong></a>
                </div>
            </div>
        </div>
    </div>