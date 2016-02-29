<div class="container">
    <div class="page-header">
        <h1>Hello, <?php echo $this->session->userdata('name'); ?></h1>
    </div>
	<?php if (is_array($photographersearchbycitycategory)) {?>
	<?php foreach($photographersearchbycitycategory as $row) {?>
    <div class="row">
        <div class="col-md-4">
            <h4>Personal Details</h4>
            <div class="panel-group">
                <div class="panel panel-info">
                  <div class="panel-heading">Your name/Studio name</div>
                  <div class="panel-body"><?php echo $row->name; ?></div>
                </div>
            </div>
            <div class="panel-group">
                <div class="panel panel-info">
                  <div class="panel-heading">Your Email</div>
                  <div class="panel-body"><?php echo $row->email; ?></div>
                </div>
            </div>
            <div class="panel-group">
                <div class="panel panel-info">
                  <div class="panel-heading">Phone</div>
                  <div class="panel-body"><?php echo $row->phone; ?></div>
                </div>
            </div>
            
        </div>
        <div class="col-md-4">
            <h4>Location Details</h4>
            <div class="panel-group">
                <div class="panel panel-info">
                  <div class="panel-heading">City</div>
                  <div class="panel-body"><?php echo $row->city; ?></div>
                </div>
            </div>
            <div class="panel-group">
                <div class="panel panel-info">
                  <div class="panel-heading">State</div>
                  <div class="panel-body"><?php echo $row->state; ?></div>
                </div>
            </div>
            <div class="panel-group">
                <div class="panel panel-info">
                  <div class="panel-heading">Address</div>
                  <div class="panel-body"><?php echo $row->address; ?></div>
                </div>
            </div>
        </div>
    </div>
	<?php } ?>
	<?php } ?>
    
</div>