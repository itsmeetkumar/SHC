<div class="content-wrapper">

        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">
        <div class="row">
        <div class="col-md-12">
              <!-- general form elements -->
              <form role="form" action="<?php echo base_url(); ?>admin/add_patient" method="post">
              <?php  
                if(isset($mess))
                {
                  echo "<h3>";
                  echo $mess;
                  echo "</h3>";
                }
              ?>
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Patient Information</h3>
                </div><!-- /.box-header -->
               
                
                  <div class="box-body">

                  <div class="form-group">
                      <label for="exampleInputEmail1">Enter Patient id: </label>
                      <input type="Number" class="form-control" id="pid" name="pid" placeholder="Enter Patient id..." required>
                    </div>


                    <div class="form-group">
                      <label for="exampleInputEmail1">Enter Full Name: </label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name..." required>
                    </div>


                    
                    <div class="form-group">
                     <label for="exampleInputEmail1">Sex: </label>

                      <div class="radio">
                          <label>
                            <input type="radio" name="sex" id="sex" value="Male" checked="">Male <br/>
                            <input type="radio" name="sex" id="sex" value="Female">Female <br/>
                            <input type="radio" name="sex" id="sex" value="Other">Other <br/>
                          </label>
                      </div>
                    </div>

        

                    <div class="form-group">
                      <label for="exampleInputEmail1">Enter Phone Number: </label>
                      <input type="Number" class="form-control" id="p_number" name="p_number" placeholder="Enter Phone Number..." required>
                    </div>
                    

        

                    <div class="form-group">
                      <label for="exampleInputEmail1">Enter Address: </label>
                      <input type="text" class="form-control" id="add" name="add" placeholder="Enter Address..." required>
                    </div>  

        
        
        
                    <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                      
               
                
              </div><!-- /.box -->

              <!-- Form Element sizes -->

                              </div>
                              





                  </form>            <!-- /input-group -->
                </div><!-- /.box-body -->
             <!-- /.box -->
             </div>




        </section><!-- /.content -->

 <!-- /.content -->
      </div><!-- /.content-wrapper -->
