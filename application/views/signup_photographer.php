<style>
    .error{
        color: red;
    }
</style>
<div class="container">
    <div class="page-header"><h1>Get Listed as a Photographer</h1></div>
    <div class="row">
        <div class="col-md-5">
            <!--<div><?php //echo validation_errors(); ?></div>-->
            <?php echo form_open(base_url()."photographers/signup"); ?>
            <div class="form-group">
                <?php echo form_label("Enter name", "name") ?>
                <?php echo form_input(array(
                    'name' => 'name',
                    'id' => 'name',
                    'class' => 'form-control',
                    'placeholder' => 'Your name/Studio name',
                    'value' => set_value('name')
                )); ?>
                <?php echo form_error('name', '<div class="help-block error">', '</div>'); ?>
            </div>
            <div class="form-group">
                <?php echo form_label("Enter Email", "email") ?>
                <?php echo form_input(array(
                    'name' => 'email',
                    'id' => 'email',
                    'class' => 'form-control',
                    'placeholder' => 'example@mail.com',
                    'value' => set_value('email')
                )); ?>
                <?php echo form_error('email', '<div class="help-block error">', '</div>'); ?>
            </div>
            <div class="form-group">
                <?php echo form_label("Enter Password") ?>
                <div class="row">
                    <div class="col-md-6">                    
                    <?php echo form_password(array(
                        'name' => 'password1',
                        'id' => 'password1',
                        'class' => 'form-control',
                        'placeholder' => 'Password'                        
                    )); ?>
                    </div>
                    <div class="col-md-6">                    
                    <?php echo form_password(array(
                        'name' => 'password2',
                        'id' => 'password2',
                        'class' => 'form-control',
                        'placeholder' => 'Confirm Password',
                    )); ?>
                    </div>
                </div>
                <?php echo form_error('password1', '<div class="help-block error">', '</div>'); ?>
                <?php echo form_error('password2', '<div class="help-block error">', '</div>'); ?>
            </div>
            <div class="form-group">
                <?php echo form_label("Enter Location") ?>
                <div class="row">
                    <div class="col-md-6">                    
                    <?php echo form_input(array(
                        'name' => 'city',
                        'type' => 'text',
                        'id' => 'city',
                        'class' => 'form-control',
                        'placeholder' => 'City',
                        'value' => set_value('city')
                    )); ?>
                    </div>
                    <div class="col-md-6">                    
                    <?php echo form_input(array(
                        'name' => 'state',
                        'type' => 'text',
                        'id' => 'state',
                        'class' => 'form-control',
                        'placeholder' => 'State',
                        'value' => set_value('state')
                    )); ?>
                    </div>
                </div>
                <?php echo form_error('city', '<div class="help-block error">', '</div>'); ?>
                <?php echo form_error('state', '<div class="help-block error">', '</div>'); ?>
            </div>
            <div class="form-group">
                <?php echo form_label('Select some categories');?>
                <div class="row">
                    <div class="col-md-4">
                        <div class="checkbox">
                            <?php $attr = array(
                                'name' => 'category[]', 
                                'value' => '1', 
                                'checked' => set_checkbox('category', '1'));?>
                            <?php echo form_label(form_checkbox($attr).' Wedding'); ?>
                        </div>
                        <div class="checkbox">
                            <?php $attr = array(
                                'name' => 'category[]', 
                                'value' => '2', 
                                'checked' => set_checkbox('category', '2'));?>
                            <?php echo form_label(form_checkbox($attr).' Occassions'); ?>
                        </div>
                        <div class="checkbox">
                            <?php $attr = array(
                                'name' => 'category[]', 
                                'value' => '4', 
                                'checked' => set_checkbox('category', '4'));?>
                            <?php echo form_label(form_checkbox($attr).' Nature & Wildlife'); ?>
                        </div>                        
                    </div>
                    <div class="col-md-4">
                        <div class="checkbox">
                             <?php $attr = array(
                                'name' => 'category[]', 
                                'value' => '5', 
                                'checked' => set_checkbox('category', '5'));?>
                            <?php echo form_label(form_checkbox($attr).' Fashion'); ?>
                        </div>
                        <div class="checkbox">
                            <?php $attr = array(
                                'name' => 'category[]', 
                                'value' => '6', 
                                'checked' => set_checkbox('category', '6'));?>
                            <?php echo form_label(form_checkbox($attr).' Commercial'); ?>
                        </div>
                        <div class="checkbox">
                            <?php $attr = array(
                                'name' => 'category[]', 
                                'value' => '7', 
                                'checked' => set_checkbox('category', '7'));?>
                            <?php echo form_label(form_checkbox($attr).' Corporate Events'); ?>
                        </div>                        
                    </div>
                    <div class="col-md-4">
                        <div class="checkbox">
                            <?php $attr = array(
                                'name' => 'category[]', 
                                'value' => '3', 
                                'checked' => set_checkbox('category', '3'));?>
                            <?php echo form_label(form_checkbox($attr).' Baby & Kids'); ?>
                        </div>
                        <div class="checkbox">
                            <?php $attr = array(
                                'name' => 'category[]', 
                                'value' => '8', 
                                'checked' => set_checkbox('category', '8'));?>
                            <?php echo form_label(form_checkbox($attr).' Travel'); ?>
                        </div>
                    </div>
                </div>
                <?php echo form_error('category', '<div class="help-block error">', '</div>'); ?>
            </div>
            <?php echo form_submit('signup', 'Submit', 'class="btn btn-info"'); ?>
            <?php echo form_close(); ?>
        </div>
        <div class="col-md-7">
            
        </div>
    </div>
</div>
