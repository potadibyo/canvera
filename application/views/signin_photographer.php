<script src="<?php echo base_url(); ?>assets/js/angular.min.js"></script>
<script>
    angular.module("canvera",[]);
</script>
<div class="container" ng-app="canvera">
    <div class="page-header"><h2>Signin</h2></div>
    <div class="row">
        <div class="col-md-4">
            <?php echo form_open(base_url()."photographers/signin"); ?>
            <div class="form-group">
                <?php echo form_label("Email", "email"); ?>
                <?php echo form_input(array(
                    "name" => "email",
                    "id" => "email",
                    "class" => "form-control",
                    "placeholder" => "example@mail.com",
                    "value" => set_value("email")
                )); ?>
                <div class="help-block" style="color: red;"><?php echo form_error("email"); ?></div>
            </div>
            <div class="form-group">
                <?php echo form_label("Password", "password"); ?>
                <?php echo form_password(array(
                    "name" => "password",
                    "id" => "password",
                    "class" => "form-control",
                    "placeholder" => "******"
                )); ?>
                <div class="help-block" style="color: red;"><?php echo form_error("password"); ?></div>
            </div>
            <?php echo form_submit("signin", "Signin", "class='btn btn-primary btn-block'"); ?>
        </div>
    </div>
    <input type="text" class="form-control" ng-model="test-input" value="">
    <p class="well">{{test-input}}</p>
</div>

