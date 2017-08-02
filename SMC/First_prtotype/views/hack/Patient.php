<div class="content-wrapper">

<br>
<div class="col-md-3">
         <button type="submit" class="btn btn-danger btn-block">Submit</button>
        </div>
        <div class="col-md-3">
          <button type="submit" class="btn btn-danger btn-block">Submit</button>
           </div>
           <div class="col-md-3">
           <button type="submit" class="btn btn-danger btn-block">Submit</button>
           </div>
           <div class="col-md-3">
            <button type="submit" class="btn btn-danger btn-block">Submit</button>
             </div> 

<hr>
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">
        <div class="row">
        <div class="col-md-12">

        
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Patient Information</h3>
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
                      <label for="exampleInputEmail1">Enter Registration Number: </label>
                      <input type="Number" class="form-control" id="r_number" name="r_number" placeholder="Enter Registration Number..." required>
                    </div>


                    <div class="form-group">
                      <label for="exampleInputEmail1">Enter Full Name: </label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name..." required>
                    </div>


                    <div class="form-group">
                      <label for="exampleInputEmail1">Enter Age: </label>
                      <input type="number" class="form-control" id="age" name="age" placeholder="Enter Age..." required>
                    </div>
                    
                    <div class="form-group">
                     <label for="exampleInputEmail1">Sex: </label>

                      <div class="radio">
                          <label>
                            <input type="radio" name="sex1" id="sex1" value="Male" checked>Male <br/>
                            <input type="radio" name="sex1" id="sex1" value="Female">Female <br/>
                            <input type="radio" name="sex1" id="sex1" value="Other">Other <br/>
                          </label>
                      </div>
                    </div>

        <div class="col-md-6">

                    <div class="form-group">
                      <label for="exampleInputEmail1">Enter Phone Number: </label>
                      <input type="Number" class="form-control" id="p_number" name="p_number" placeholder="Enter Phone Number..." required>
                    </div>
                    </div>

        <div class="col-md-6">

                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address:</label>
                      <input type="email" class="form-control" id="mailid" name="mailid" placeholder="Enter email ID" required>
                    </div>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Enter Address: </label>
                      <input type="text" class="form-control" id="add" name="add" placeholder="Enter Address..." required>
                    </div>  

        <div class="col-md-4">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Marital Status: </label>

                      <select class="form-control" name="pms" id="pms">
                        <option value="Married">Married</option>
                        <option value="Unmarried">Unmarried</option>
                        <option value="Widow">Widow</option>
                        
                      </select>

                      </div>
                    </div>

        <div class="col-md-4">

                    <div class="form-group">
                      <label for="exampleInputEmail1">Enter Monthly Income(If applicable): </label>
                      <input type="Number" class="form-control" id="m_inc" name="m_inc" placeholder="Enter Your Monthly Income...">
                    </div>
                    </div>
        <div class="col-md-4">

                     <div class="form-group">
                      <label for="exampleInputEmail1">Blood Group: </label>
                      <select class="form-control" name="pbg" id="pbg">
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                      </select>
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
                  <h3 class="box-title">Guardian Information</h3>
                </div><!-- /.box-header -->
               
                
                  <div class="box-body">


                    <div class="form-group">
                      <label for="exampleInputEmail1">Enter Full Name: </label>
                      <input type="text" class="form-control" id="gname" name="gname" placeholder="Enter Your Name..." required>
                    </div>
                    
                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">Enter Address: </label>
                      <input type="text" class="form-control" id="gadd" name="gadd" placeholder="Enter Address..." required>
                    </div>  

        <div class="col-md-6">


                    <div class="form-group">
                      <label for="exampleInputEmail1">Enter Phone Number: </label>
                      <input type="Number" class="form-control" id="gp_number" name="gp_number" placeholder="Enter Phone Number..." required>
                    </div>
                    </div>


        <div class="col-md-6">

                    <div class="form-group">
                     <label for="exampleInputEmail1">Sex: </label>

                      <div class="radio">
                          <label>
                            <input type="radio" name="sex" id="sex" value="Male" checked>Male <br/>
                            <input type="radio" name="sex" id="sex" value="Female">Female <br/>
                            <input type="radio" name="sex" id="sex" value="Other">Other <br/>
                          </label>
                      </div>
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
                  <h3 class="box-title">Departmental Information</h3>
                </div><!-- /.box-header -->
               
                
                  <div class="box-body">

        <div class="col-md-6">

                   <div class="form-group">
                      <label for="exampleInputEmail1">Department: </label>
                      <select class="form-control" name="dep" id="dep">
                        <option value="Accident and emergency cases">Accident and emergency cases</option>
                        <option value="Anaesthetics">Anaesthetics</option>
                        <option value="Breast screening">Breast screening</option>
                        <option value="Cancer department">Cancer department</option>
                        <option value="Cardiology">Cardiology</option>
                        <option value="Cardiology">Dentistry</option>
                        <option value="Cardiology">Dermatology</option>
                        <option value="Diagnostic imaging">Diagnostic imaging</option>
                        <option value="ENT">ENT</option>
                        <option value="Elderly Services">Elderly Services</option>
                        <option value="Gastroenterology">Gastroenterology</option>
                        <option value="General Surgery">General</option>
                        <option value="Gynaecology">Gynaecology</option>
                        <option value="Haematology">Haematology</option>
                        <option value="Cardiology">Homeopathy</option>
                        <option value="Maternity Services">Maternity Services</option>
                        <option value="Microbiology">Microbiology</option>
                        <option value="Neonatal Services">Neonatal Services</option>
                        <option value="Nephrology">Nephrology</option>
                        <option value="Neurology">Neurology</option>
                        <option value="Nutrition and dietetics">Nutrition and dietetics</option>
                        <option value="Opthalmology">Opthalmology</option>
                        <option value="Orthopaedics">Orthopaedics</option>
                        <option value="Cardiology">Paediatrics</option>
                        <option value="Pharmacy">Pharmacy</option>
                        <option value="Physiotherapy">Physiotherapy</option>
                        <option value="Sexual Health">Sexual Health</option>
                        <option value="Urology">Urology</option>

                      </select>
                    </div> 
                    </div>
                    
                                

                   
                      
               
                
              </div><!-- /.box -->

              <!-- Form Element sizes -->

                              </div>
                              





                              <!-- /input-group -->
                </div><!-- /.box-body -->
             <!-- /.box -->
             </div>


<center> <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div></center>
     
</form>
        </section><!-- /.content -->

         </div><!-- /.content-wrapper -->
