<div class="container">
    <div class="page-header">
        <h1>Hello, <?php echo $this->session->userdata('name'); ?></h1>
    </div>
    <div class="row">
        <div class="col-md-4">
            <h4>Personal Details</h4>
            <div class="panel-group">
                <div class="panel panel-info">
                  <div class="panel-heading">Your name/Studio name</div>
                  <div class="panel-body"><?php echo $photographer->name; ?></div>
                </div>
            </div>
            <div class="panel-group">
                <div class="panel panel-info">
                  <div class="panel-heading">Your Email</div>
                  <div class="panel-body"><?php echo $photographer->email; ?></div>
                </div>
            </div>
            <div class="panel-group">
                <div class="panel panel-info">
                  <div class="panel-heading">Phone</div>
                  <div class="panel-body"><?php echo $photographer->phone; ?></div>
                </div>
            </div>
            
        </div>
        <div class="col-md-4">
            <h4>Location Details</h4>
            <div class="panel-group">
                <div class="panel panel-info">
                  <div class="panel-heading">City</div>
                  <div class="panel-body"><?php echo $photographer->city; ?></div>
                </div>
            </div>
            <div class="panel-group">
                <div class="panel panel-info">
                  <div class="panel-heading">State</div>
                  <div class="panel-body"><?php echo $photographer->state; ?></div>
                </div>
            </div>
            <div class="panel-group">
                <div class="panel panel-info">
                  <div class="panel-heading">Address</div>
                  <div class="panel-body"><?php echo $photographer->address; ?></div>
                </div>
            </div>
        </div>
    </div>
    
</div>