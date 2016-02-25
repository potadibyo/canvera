<div class="container">
    <div class="page-header"><h1>Create a Photo Album</h1></div>
    <div class="row">
        <div class="col-md-4">
            <div class="well">
                <?php echo form_open_multipart(base_url()."photobooks/create"); ?>
                    <div class="form-group">
                        <?php echo form_label("Enter album name", "name"); ?>
                        <?php echo form_input(array(
                            "name" => "name",
                            "class" => "form-control",
                            "id" => "name"));
                        ?>
                    </div>
                    <div class="form-group">
                        <?php echo form_label("Add files", "images"); ?>
                        <?php echo form_upload([
                            "name" => "images[]",
                            "multiple" => "",
                            "id" => "images"]);
                        ?>
                        <!--<input type='file' name='images[]' multiple>-->
                    </div>
                    <div class="form-group">
                        <?php echo form_label("Description", "desc"); ?>
                        <?php echo form_textarea(["name" => "desc",
                            "class" => "form-control",
                            "rows" => "5",
                            "id" => "desc"]);
                        ?>
                        <!--<textarea name="desc" class="form-control" rows="5"></textarea>-->
                    </div>
                    <?php echo form_submit("", "Create Album"); ?>
                    <!--<button onclick="savePhotobook()">Submit</button>-->
                <?php echo form_close(); ?>
            </div>
        </div>
        <div class="col-md-8">
            <?php if(isset($images) && $images != null) { $image_array = explode("|", $images); ?>
            <div class="well">
                <?php foreach($image_array as $image) { ?>
                    <div class="item"><?php echo $image; ?></div>
                <?php } ?>               
            </div>        
            <?php } ?>
        </div>
    </div>    
</div>