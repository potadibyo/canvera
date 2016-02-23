<div class="jumbotron" id="jumbohome">
    <style>
        #jumbohome{
            background: url(./assets/img/lens.jpg) no-repeat center fixed;
        }
    </style>
    <div class='container' style="padding:50px;">
        <h2 style="color:white;">Find a Photographer</h2>;
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <?php echo form_input(array(
                        "id" => "location", 
                        "class" => "form-control input-lg",
                        "list" => "city-name",
                        "placeholder" => "Search by location")); ?>
                    <datalist id="city-name" class="input-lg">
                        <?php foreach ($locations as $location) { ?>
                        <option value="<?php echo $location->city; ?>">
                        <?php } ?>
                    </datalist>
                    <datalist id="city-name" class="input-lg">
        
                    </datalist>
                    <div class="help-block"><a href="">All Locations</a></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <?php echo form_input(array(
                        "id" => "category", 
                        "class" => "form-control input-lg",
                        "list" => "category-name",
                        "placeholder" => "Search by category")); ?>
                    <datalist id="category-name" class="input-lg">
                        <?php foreach ($categories as $category) { ?>
                        <option value="<?php echo $category->name; ?>">
                        <?php } ?>
                    </datalist>
                    <div class="help-block"><a href="">All Categories</a></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
            <button type="button" class="btn btn-info btn-lg">Find</button>
            </div>
        </div>
        
    </div>
</div>