<div class="content-wrapper">

<br>
<div class="col-md-3">
          <form action="<?php  echo base_url();?>/admin/patient" method="post">
            <button type="submit" class="btn btn-danger btn-block">Register</button>
           
          </form>
         </div>

        <div class="col-md-3">
        <form action="<?php  echo base_url();?>/ait/search_pt" method="get">
          <button type="submit" class="btn btn-danger btn-block">Search</button>
          
        </form>
           </div>

           <div class="col-md-3">
           <form action="" method="get">
           <button type="submit" class="btn btn-danger btn-block">Smart Card</button>
           </form>
           </div>

           <div class="col-md-3">
           <form action="" method="get">
          <button type="submit" class="btn btn-danger btn-block">Appoiment</button>  </form>
             </div> 

<hr>

<section class="content">
        <div class="row">
        <div class="col-md-12">
              <!-- general form elements -->
              <form role="form" action="<?php echo base_url(); ?>ait/search_pt" method="post">
              
          <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Search Patient</h3>
                </div><!-- /.box-header -->
               
                
              <div class="box-body">

                  <div class="form-group">
                      <label for="exampleInputEmail1">Enter Patient Id: </label>
                      <input type="Number" class="form-control" id="pid" name="pid" placeholder="Enter Your Code..." required>
                    </div>


                   
                    <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                      
              </div><!-- /.box -->

              <!-- Form Element sizes -->

          </div>
                              





        </form>          <!-- /input-group -->
       </div>
      </div>


  </section>


<?php
if(isset($pid))
                {
?>

<section class="content">

          <div class="row">
           <!-- /.col -->
            <div class="col-md-12">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  
                  <li class=""><a href="#timeline" data-toggle="tab" aria-expanded="false">Basic Information</a></li>
                  <li class=""><a href="#settings" data-toggle="tab" aria-expanded="false">Guardian Information</a></li>
                  <li class=""><a href="#smarcard" data-toggle="tab" aria-expanded="false">Smart Card</a></li>
                  <li class=""><a href="#updateinfo" data-toggle="tab" aria-expanded="false">Update Information</a></li>
                </ul>
                <div class="tab-content">
                  <!-- /.tab-pane -->


                  
                  <div class="tab-pane active" id="timeline">
                    <!-- The timeline -->
                    
                    
                   <table class="table table-hover">

   <?php  
                

                  $limit=1;
                  
                  $query = $this->db->get_where('patient', array('r_number' => $pid), $limit);
                  

                    foreach ($query->result() as $row)
                    {
                      ?>
                            
                    
                               
    <thead>
    <?php  

    echo "<tr>";
           echo "<th>";
          echo "Reg_no";
          echo "</th>";

          echo "<th>";
          echo $row->r_number;
          echo "</th>";
    echo "</tr>";


    echo "<tr>";
           echo "<th>";
          echo "Name";
          echo "</th>";

          echo "<th>";
          echo $row->name;
          echo "</th>";
    echo "</tr>";

    echo "<tr>";
           echo "<th>";
          echo "Age";
          echo "</th>";

          echo "<th>";
          echo $row->age;
          echo "</th>";
    echo "</tr>";

    echo "<tr>";
           echo "<th>";
          echo "Gender";
          echo "</th>";

          echo "<th>";
          echo $row->psex;
          echo "</th>";
    echo "</tr>";

    echo "<tr>";
           echo "<th>";
          echo "Address";
          echo "</th>";

          echo "<th>";
          echo $row->add;
          echo "</th>";
    echo "</tr>";

    echo "<tr>";
           echo "<th>";
          echo "Phone";
          echo "</th>";

          echo "<th>";
          echo $row->p_number;
          echo "</th>";
    echo "</tr>";

     echo "<tr>";
           echo "<th>";
          echo "Email";
          echo "</th>";

          echo "<th>";
          echo $row->mailid;
          echo "</th>";
    echo "</tr>";

     echo "<tr>";
           echo "<th>";
          echo "Marital status";
          echo "</th>";

          echo "<th>";
          echo $row->pms;
          echo "</th>";
    echo "</tr>";

 echo "<tr>";
           echo "<th>";
          echo "Monthly Income";
          echo "</th>";

          echo "<th>";
          echo $row->m_inc;
          echo "</th>";
    echo "</tr>";

     echo "<tr>";
           echo "<th>";
          echo "Blood Group";
          echo "</th>";

          echo "<th>";
          echo $row->pbg;
          echo "</th>";
    echo "</tr>";


    
    

     ?>
     </thead>
  </table>
  
  
       
           </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                   
                    <table class="table table-hover">

                         <thead>
    <?php  

    echo "<tr>";
           echo "<th>";
          echo "Name";
          echo "</th>";

          echo "<th>";
          echo $row->gname;
          echo "</th>";
    echo "</tr>";


    echo "<tr>";
           echo "<th>";
          echo "Address";
          echo "</th>";

          echo "<th>";
          echo $row->gadd;
          echo "</th>";
    echo "</tr>";

    echo "<tr>";
           echo "<th>";
          echo "Phone Number";
          echo "</th>";

          echo "<th>";
          echo $row->gp_number;
          echo "</th>";
    echo "</tr>";

    echo "<tr>";
           echo "<th>";
          echo "Sex";
          echo "</th>";

          echo "<th>";
          echo $row->sex;
          echo "</th>";
    echo "</tr>";

  
  


    
    
$pid=$row->r_number;
     ?>
     

     </thead>



                    </table>
                  </div>

     <div class="tab-pane" id="smarcard">
<section class="content">
        <div class="row">
        <div class="col-md-12">

        
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">SMART CARD</h3>
                </div><!-- /.box-header -->


                <div class="col-md-4">
                <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=<?php echo base_url();?>ait/search_pt3/<?php echo $row->r_number; ?>" class="img-responsive" alt="Image">
              
                </div>
                <div class="col-md-8">

                <table class="table table-hover">

                         <thead>
    <?php  

    echo "<tr>";
           echo "<th>";
          echo "Name";
          echo "</th>";

          echo "<th>";
          echo $row->name;
          echo "</th>";
    echo "</tr>";


    echo "<tr>";
           echo "<th>";
          echo "Address";
          echo "</th>";

          echo "<th>";
          echo $row->add;
          echo "</th>";
    echo "</tr>";

    echo "<tr>";
           echo "<th>";
          echo "Phone Number";
          echo "</th>";

          echo "<th>";
          echo $row->p_number;
          echo "</th>";
    echo "</tr>";

    echo "<tr>";
           echo "<th>";
          echo "Sex";
          echo "</th>";

          echo "<th>";
          echo $row->sex;
          echo "</th>";
    echo "</tr>";
    ?>
    <?php }} ?>
    </thead>
    </table>

                </div>
               
                </div>

               </div> 

               </div>
               </section>



                    
      </div>
                  <div class="tab-pane" id="updateinfo">
                  <?php 
              if(isset($pid))
                {
                 $limit=1;
                  
                  $query = $this->db->get_where('patient', array('r_number' =>$pid), $limit);
                  

                    foreach ($query->result() as $row)
                    {
                      ?>

                      <section class="content">
        <div class="row">
        <div class="col-md-12">

        
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Patient Information</h3>
                </div><!-- /.box-header -->
               <form role="form" action="<?php echo base_url(); ?>admin/update_patient1" method="post">
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
                      <input type="Number" class="form-control" id="r_number" name="r_number" value="<?php echo $row->r_number; ?>" placeholder="Enter Registration Number..." required>
                    </div>


                    <div class="form-group">
                      <label for="exampleInputEmail1">Enter Full Name: </label>
                      <input type="text" class="form-control" id="name" name="name" value="<?php echo $row->name; ?>"  placeholder="Enter Your Name..." required>
                    </div>


                    <div class="form-group">
                      <label for="exampleInputEmail1">Enter Age: </label>
                      <input type="number" class="form-control" id="age" name="age" value="<?php echo $row->age; ?>" placeholder="Enter Age..." required>
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
                      <input type="Number" class="form-control" id="p_number" name="p_number" value="<?php echo $row->p_number; ?>" placeholder="Enter Phone Number..." required>
                    </div>
                    </div>

        <div class="col-md-6">

                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="mailid" name="mailid" value="<?php echo $row->mailid; ?>" placeholder="Enter email ID" required>
                    </div>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Enter Address: </label>
                      <input type="text" class="form-control" id="add" name="add" value="<?php echo $row->add; ?>"  placeholder="Enter Address..." required>
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
                      <input type="Number" class="form-control" id="m_inc" name="m_inc" value="<?php echo $row->m_inc; ?>" placeholder="Enter Your Monthly Income...">
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
                      <input type="text" class="form-control" id="gname" name="gname" value="<?php echo $row->gname; ?>" placeholder="Enter Your Name..." required>
                    </div>
                    
                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">Enter Address: </label>
                      <input type="text" class="form-control" id="gadd" name="gadd" value="<?php echo $row->gadd; ?>" placeholder="Enter Address..." required>
                    </div>  

        <div class="col-md-6">


                    <div class="form-group">
                      <label for="exampleInputEmail1">Enter Phone Number: </label>
                      <input type="Number" class="form-control" id="gp_number" name="gp_number" value="<?php echo $row->gp_number; ?>"  placeholder="Enter Phone Number..." required>
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
        </section>






                  </div>
                  <!-- Update info end -->
                  <!-- /.tab-pane -->
                </div><!-- /.tab-content -->
              </div><!-- /.nav-tabs-custom -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section>
    <?php
     }}
       ?>
          

        <!-- Content Header (Page header) -->

        <!-- Main content -->
       <!-- /.content -->

 <!-- /.content -->

<!-- /.content -->

         </div><!-- /.content-wrapper -->
