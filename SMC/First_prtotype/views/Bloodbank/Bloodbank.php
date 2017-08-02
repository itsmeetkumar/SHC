<div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">
        <div class="row">
        <div class="col-md-12">

        
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Donor Information</h3>
                </div><!-- /.box-header -->
               <form role="form" action="<?php echo base_url(); ?>admin/add_patient" method="post">
              <?php  
                if(isset($mess))
                {
                  echo "<h3>";
                  echo $mess;
                  echo "</h3>";
                }
              ?>
                
                  <div class="box-body">

                  <div class="form-group">
                      <label for="exampleInputEmail1">Enter Donor ID: </label>
                      <input type="Number" class="form-control" id="did" name="did" placeholder="Enter Donor ID..." required>
                    </div>


                    <div class="form-group">
                      <label for="exampleInputEmail1">Enter Full Name: </label>
                      <input type="text" class="form-control" id="d_name" name="d_name" placeholder="Enter Name..." required>
                    </div>


                    <div class="form-group">
                      <label for="exampleInputEmail1">Enter Age: </label>
                      <input type="number" class="form-control" id="d_age" name="d_age" placeholder="Enter Age..." required>
                    </div>
                    
                    <div class="form-group">
                     <label for="exampleInputEmail1">Sex: </label>

                      <div class="radio">
                          <label>
                            <input type="radio" name="d_sex" id="d_sex" value="Male" checked>Male <br/>
                            <input type="radio" name="d_sex" id="d_sex" value="Female">Female <br/>
                            <input type="radio" name="d_sex" id="d_sex" value="Other">Other <br/>
                          </label>
                      </div>
                    </div>

        <div class="col-md-4">

                    <div class="form-group">
                      <label for="exampleInputEmail1">Enter Phone Number: </label>
                      <input type="Number" class="form-control" id="p_number" name="p_number" placeholder="Enter Phone Number..." required>
                    </div>
                    </div>

        <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Enter Address: </label>
                      <input type="text" class="form-control" id="d_add" name="d_add" placeholder="Enter Address..." required>
                    </div>
                    
                    </div>  


        <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Last Donation Date: </label>
                      <input type="date" class="form-control" id="d_date" name="d_date" required>
                    </div>
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
                  <h3 class="box-title">Blood Information</h3>
                </div><!-- /.box-header -->
               
                
                  <div class="box-body">

        <div class="col-md-6">


                    <div class="form-group">
                      <label for="exampleInputEmail1">Enter Code: </label>
                      <input type="Number" class="form-control" id="code" name="code" placeholder="Enter Code..." required>
                    </div>
                    </div>
        

        <div class="col-md-6">


                    <div class="form-group">
                      <label for="exampleInputEmail1">Enter Cost: </label>
                      <input type="Number" class="form-control" id="cost" name="cost" placeholder="Enter Cost..." required>
                    </div>
                    </div>

     <div class="row">
        <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Blood Bank Status</h3>
                </div><!-- /.box-header -->

                    <div class="form-group">
                      <table class="table">
                            <thead>
                              <tr>
                                <th>Blood Group</th>
                                <th>Status</th>
                              </tr>
                            </thead>
                              <tbody>
                              <tr>
                                <td>A+</td>
                                <td>45 bags</td>
                              </tr>
                              <tr>
                                <td>A-</td>
                                <td>20 bags</td>
                              </tr>
                              <tr>
                                <td>B+</td>
                                <td>40 bags</td>
                              </tr>
                              <tr>
                                <td>B-</td>
                                <td>15 bags</td>
                              </tr>
                              <tr>
                                <td>AB+</td>
                                <td>20 bags</td>
                              </tr>
                              <tr>
                                <td>AB-</td>
                                <td>08 bags</td>
                              </tr>
                              <tr>
                                <td>O+</td>
                                <td>70 bags</td>
                              </tr>
                              <tr>
                                <td>O-</td>
                                <td>06 bags</td>
                              </tr>
                            </tbody>
                          </table>
                    </div> 


              </div><!-- /.box -->

              <!-- Form Element sizes -->

                              </div>
                              





                              <!-- /input-group -->
                </div><!-- /.box-body -->
             <!-- /.box -->
             </div>

                      
               
                
              </div><!-- /.box -->

              <!-- Form Element sizes -->

                              </div>
                              





                              <!-- /input-group -->
                </div><!-- /.box-body -->
             <!-- /.box -->



        </section><!-- /.content -->

<section class="content">
        <div class="row">
        <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Blood Bank Information and Status</h3>
                </div><!-- /.box-header -->
               
                
                  <div class="box-body">

        <div class="col-md-12">

                    <div class="form-group">
                      <label for="exampleInputEmail1">Enter Blood Bank Number: </label>
                      <input type="Number" class="form-control" id="bb_no" name="bb_no" placeholder="Enter Bank No..." required>
                    </div>
                    </div>

       

        <div class="col-md-6">                  
             <div class="form-group">
                      <label for="exampleInputEmail1">Orders: </label>
                      <input type="Number" class="form-control" id="orders" name="orders" placeholder="Total Orders..." required>
                    </div>  
                    </div>    


        <div class="col-md-6">
             <div class="form-group">
                      <label for="exampleInputEmail1">Issues: </label>
                      <input type="Number" class="form-control" id="issues" name="issues" placeholder="Total Blood Products Issued..." required>
                    </div>
                    </div>

                   
                      
               
                
              </div><!-- /.box -->

              <!-- Form Element sizes -->

                              </div>
                              
                              <!-- /input-group -->
                </div><!-- /.box-body -->
             <!-- /.box -->
             </div>



     
</form>
        </section><!-- /.content -->

        <center> <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div></center>

         </div><!-- /.content-wrapper -->
