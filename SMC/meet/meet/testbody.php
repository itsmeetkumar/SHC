<div class="content-wrapper">
        
        <!-- Content Header (Page header) -->
        
        <!-- Main content -->
        <section class="content">
        <div class="row">
        <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Add Student</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <?php echo form_open('insert_ctrl'); ?>
            <h1>Insert Data Into Database Using CodeIgniter</h1><hr/> 
            <?php if (isset($message)) { ?>
                <CENTER><h3 style="color:green;">Data inserted successfully</h3></CENTER><br>
            <?php } ?>


            <?php echo form_label('En_No :'); ?> <?php echo form_error('den_no'); ?><br />
            <?php echo form_input(array('id' => 'den_no', 'name' => 'den_no','type' => 'number','class' => 'form-control','placeholder' => 'Enter En number')); ?><br />



                  <div class="box-body">
                    <div class="form-group">
                     <?php echo form_label('First Name :'); ?> <?php echo form_error('dfirst_name'); ?><br />
            <?php echo form_input(array('id' => 'dfirst_name', 'name' => 'dfirst_name','type' => 'text','class' => 'form-control','placeholder' => 'Enter First Name')); ?><br />
                      </div>
                    <div class="form-group">
                      <?php echo form_label('Last Name :'); ?> <?php echo form_error('dlast_name'); ?><br />
            <?php echo form_input(array('id' => 'dlast_name', 'name' => 'dlast_name','type' => 'text','class' => 'form-control','placeholder' => 'Enter Last Name')); ?><br />
                    </div>

                    <div class="form-group">
                      <?php echo form_label('En_No :'); ?> <?php echo form_error('den_no'); ?><br />
            <?php echo form_input(array('id' => 'den_no', 'name' => 'den_no','type' => 'number','class' => 'form-control','placeholder' => 'Enter En number')); ?><br />
</div>

                    <div class="form-group">
                     <?php echo form_label('Mobile_No :'); ?> <?php echo form_error('dmobile_no'); ?><br />
            <?php echo form_input(array('id' => 'dmobile_no', 'name' => 'dmobile_no','type' => 'number','class' => 'form-control','placeholder' => 'Enter Mobile Number')); ?><br />
</div>

                    <div class="form-group">
                      <?php echo form_label('Email :'); ?> <?php echo form_error('demail'); ?><br />
            <?php echo form_input(array('id' => 'demail', 'name' => 'demail','type' => 'email','class' => 'form-control','placeholder' => 'Enter Email')); ?><br />
 </div>

                    <div class="form-group">
                      <?php echo form_label('Address :'); ?> <?php echo form_error('daddress'); ?><br />
            <?php echo form_input(array('id' => 'daddress', 'name' => 'daddress','type' => 'number','class' => 'form-control','placeholder' => 'Enter Address')); ?><br />
</div>
<?php                            
                    $options = array(
                                    'CE'         => 'Computer Enginer',
                                    'IT'           => 'Information and Technology',
                                    );
?>
                    <div class="form-group">
                    <?php echo form_label('Branch :'); ?> <?php echo form_error('dbranch'); ?><br />
                    <?php echo form_dropdown('shirts', $options, 'large'); ?>
                      <label for="exampleInputPassword1">Branch</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Year</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Birth of date</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Fb_link</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Linkedin_link</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Website_link</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Blogger_link</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Youtube_link</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>


                    
                    
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->

              <!-- Form Element sizes -->
              
                              </div><!-- /input-group -->
                </div><!-- /.box-body -->
             <!-- /.box -->

            
        
          
        </section><!-- /.content -->

      </div><!-- /.content-wrapper -->