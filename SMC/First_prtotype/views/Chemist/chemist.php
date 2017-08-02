<div class="content-wrapper">

        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">
        <div class="row">
        <div class="col-md-12">
              <!-- general form elements -->
              <form role="form" action="<?php echo base_url(); ?>chemist/in_chemist" method="post">
              <?php  
                if(isset($mess))
                {
                  echo "<h3>";
                  echo $mess;
                  echo "</h3>";
                   echo validation_errors(); 
                }
              ?>
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Chemist Information</h3>
                </div><!-- /.box-header -->
               
                
                  <div class="box-body">

                  <div class="form-group">
                      <label for="exampleInputEmail1">Registration number: </label>
                      <input type="Number" class="form-control" id="ch_reg_no" name="ch_reg_no" placeholder="Enter Registration Number..." required>
                    </div>


                    <div class="form-group">
                      <label for="exampleInputEmail1">Enter Full Name: </label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name..." required>
                    </div>

                <div class="col-md-6">
                    <div class="form-group">
                     <label for="exampleInputEmail1">Location 1: </label>
                     <input type="text" class="form-control" id="ch_loc_1" name="ch_loc_1" placeholder="Location 1..." required>                 
                    </div>
                    </div>

                <div class="col-md-6">
                    <div class="form-group">
                     <label for="exampleInputEmail1">Location 2: </label>
                     <input type="text" class="form-control" id="ch_loc_2" name="ch_loc_2" placeholder="Location 2..." required>                 
                    </div>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Enter Address: </label>
                      <input type="text" class="form-control" id="ch_address" name="ch_address" placeholder="Enter Address..." required>
                    </div> 

                  <div class="form-group">
                      <label for="exampleInputEmail1">Phone number: </label>
                      <input type="Number" class="form-control" id="ch_number" name="ch_number" placeholder="Enter Phone Number..." required>
                    </div>


                  


                      
               
                
              </div><!-- /.box -->

              <!-- Form Element sizes -->

                              </div>
                              





                             <!-- /input-group -->
                </div><!-- /.box-body -->
             <!-- /.box -->
             </div>




        </section><!-- /.content -->
        <section class="content">
        <div class="row">
        <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Owner Information</h3>
                </div><!-- /.box-header -->
               
                
                  <div class="box-body">


                    <div class="form-group">
                      <label for="exampleInputEmail1">Enter Owner's Name: </label>
                      <input type="text" class="form-control" id="ch_ow_name" name="ch_ow_name" placeholder="Enter Name..." required>
                    </div>

                     <div class="form-group">
                      <label for="exampleInputEmail1">Enter Age: </label>
                      <input type="number" class="form-control" id="ch_ow_age" name="ch_ow_age" placeholder="Enter Age..." required>
                    </div>

                    <div class="form-group">
                     <label for="exampleInputEmail1">Sex: </label>

                      <div class="radio">
                          <label>
                            <input type="radio" name="ch_ow_sex" id="ch_ow_sex" value="Male" checked>Male <br/>
                            <input type="radio" name="ch_ow_sex" id="ch_ow_sex" value="Female">Female <br/>
                          </label>
                      </div>
                    </div>

<div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address:</label>
                      <input type="email" class="form-control" id="ch_ow_email" name="ch_ow_email" placeholder="Enter email ID" required>
                    </div>
                    </div>

<div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Enter Phone Number: </label>
                      <input type="Number" class="form-control" id="ch_ow_phone" name="ch_ow_phone" placeholder="Enter Phone Number..." required>
                    </div>
                    </div>
                    
                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">Enter Address: </label>
                      <input type="text" class="form-control" id="ch_ow_address" name="ch_ow_address" placeholder="Enter Address..." required>
                    </div>  

        
               
                      
               

                             </div><!-- /.box -->

              <!-- Form Element sizes -->

                              </div>
                              





                              <!-- /input-group -->
                </div><!-- /.box-body -->
             <!-- /.box -->
             </div>




        </section><!-- /.content -->
                 <div class="box-footer" align="center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div><br/>
             

      </div><!-- /.content-wrapper -->
</form> 