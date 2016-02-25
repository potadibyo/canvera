<div class="container">
    <div class="page-header">
        <h1></h1>
    </div>    
    <div class="row">
        <div class="col-md-3">
            <div class="well">
                <div class="list-group">
                    <div class="list-group-item">
                        <h4>Album name</h4>
                        <?php echo $photobook->name; ?>
                    </div>
                    <div class="list-group-item">
                        <h4>Album Description</h4>
                        <?php echo $photobook->description; ?>
                    </div>
                    <div class="list-group-item">
                        <h4>Date created</h4>
                        <?php echo $photobook->create_date; ?>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-9">
            
            <?php foreach($images as $image) { ?>
            <div class="well">
            <div class="row">                
                
                <div class="col-md-5">                    
                    <div class="thumbnail">
                        <img src="<?php echo base_url(); ?>album_images/<?php echo $image->name_on_server; ?>" alt="" style="width:350px;height:250px">
                    </div>
                </div>
                <div class="col-md-3">
                    <?php if($image->title != null) { ?>
                    <div><span class="label label-default">Title</span> <?php echo $image->title; ?></div>
                    <?php } else { ?>
                    <div style="float:left; display: inline; width: 300px;"><input type="text" class="input-sm" id="title" placeholder="add a title"> <button class="btn btn-default btn-sm">Add</button></div>
                    <?php } ?>
                </div>
                
            </div>
            </div>
            <?php } ?>
        </div>
    </div>
    
</div>