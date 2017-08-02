<div class="content-wrapper">

        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">
        <div class="row">
        <div class="col-md-12">
        <form action="<?php  echo base_url();?>doctor/in_dig" method="post">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Diagnostic Information</h3>
                </div><!-- /.box-header -->
               
                
                
                   <?php  
                if(isset($mess))
                {
                  echo "<h3>";
                  echo $mess;
                  echo validation_errors();
                  echo "</h3>";
                }
              ?>

                  <div class="box-body">

                    <div class="form-group">
                    <label>Patient ID:</label>
                    <select class="form-control select2" name="pid" id="pid" style="width: 100%;">
                    <option selected="selected">Select the Patient ID</option>
                    <?php  
                

                  
                  
                  $query = $this->db->get('patient');
                  

                    foreach ($query->result() as $row)
                    {
                      ?>
                      
                      <option value="<?php echo $row->r_number;?>"><?php echo $row->r_number;?></option>
                      
                      <?php } ?>
                    </select>
                  </div>



                    <div class="form-group">
                      <label for="exampleInputEmail1">Date: </label>
                      <input type="text" value="<?php echo date("Y/m/d"); ?>" class="form-control" id="date" name="date">
                    </div>


                    <div class="form-group">
                      <label for="exampleInputEmail1">Diagnostic Details: </label>
                      <input type="text" class="form-control" id="d_data" name="d_data" placeholder="Enter Diagnostic Details" required>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Remarks: </label>
                      <input type="text" class="form-control" id="rem" name="rem" placeholder="Enter Remarks(if any)">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Report Type: </label>
                      <select class="form-control" name="pbg" id="pbg">
                        <option value="X-ray">X-ray</option>
                        <option value="MRI">MRI</option>
                        <option value="Sonography">Sonography</option>
                        <option value="Pathology">Pathology</option>

                      </select>
                    </div>
                    
                           
                    <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                      
               
                
              </div><!-- /.box -->
</form>
              <!-- Form Element sizes -->

                              </div>
                              





                              <!-- /input-group -->
                </div><!-- /.box-body -->
             <!-- /.box -->
             </div>




        </section><!-- /.content -->

        <section class="content">

          <div class="row">
           <!-- /.col -->
            <div class="col-md-12">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  
                  <li class=""><a href="#timeline" data-toggle="tab" aria-expanded="false">Diagnostic Information</a></li>
                  <li class=""><a href="#settings" data-toggle="tab" aria-expanded="false">Lab Reports</a></li>
                  <li class=""><a href="#smarcard" data-toggle="tab" aria-expanded="false">History</a></li>
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
          echo "d_data";
          echo "</th>";

          echo "<th>";
          echo $row->d_data;
          echo "</th>";
    echo "</tr>";


    echo "<tr>";
           echo "<th>";
          echo "date(Y/m/d)";
          echo "</th>";

          echo "<th>";
          echo $row->date;
          echo "</th>";
    echo "</tr>";

    echo "<tr>";
           echo "<th>";
          echo "rem";
          echo "</th>";

          echo "<th>";
          echo $row->rem;
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
                      <label for="exampleInputEmail1">Diagnostic Details: </label>
                      <input type="Number" class="form-control" id="r_number" name="r_number" value="<?php echo $row->r_number; ?>" placeholder="Enter Registration Number..." required>
                    </div>


                    <div class="form-group">
                      <label for="exampleInputEmail1">Date: </label>
                      <input type="text" value="<?php echo date("Y/m/d"); ?>" class="form-control" id="date" name="date">
                    </div>


                    <div class="form-group">
                      <label for="exampleInputEmail1">Remarks: </label>
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

 <!-- /.content -->
      </div><!-- /.content-wrapper -->
