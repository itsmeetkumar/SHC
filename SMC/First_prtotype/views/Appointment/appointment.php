<div class="content-wrapper">

        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">
        <div class="row">
        <div class="col-md-12">
        <form action="<?php  echo base_url();?>appointment/in_app" method="post">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Appointment Information</h3>
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
                    <label>Doctor ID:</label>
                    <select class="form-control select2" name="did" id="did" style="width: 100%;">
                    <option selected="selected">Select the Doctor Name</option>
                    <?php  
                

                  
                  
                  $query = $this->db->get('doctor');
                  

                    foreach ($query->result() as $row)
                    {
                      ?>
                      
                      <option value="<?php echo $row->dr_code;?>"><?php echo $row->name;?></option>
                      
                      <?php } ?>
                    </select>
                  </div>


        <div class="col-md-6">

                    <div class="form-group">
                      <label for="exampleInputEmail1">Date: </label>
                      <input type="text" value="<?php echo date("Y/m/d"); ?>" class="form-control" id="date" name="date">
                    </div>
                    </div>


        <div class="col-md-6">

                    <div class="form-group">
                      <label for="exampleInputEmail1">Time: </label>
                      <select class="form-control" name="time" id="time">
                        <option value="1">07:00 AM - 08:00 AM</option>
                        <option value="2">08:00 AM - 09:00 AM</option>
                        <option value="3">09:00 AM - 10:00 AM</option>
                        <option value="4">10:00 AM - 11:00 AM</option>
                        <option value="5">11:00 AM - 12:00 PM</option>
                        <option value="6">12:00 PM - 13:00 PM</option>
                        <option value="7">13:00 PM - 14:00 PM</option>
                        <option value="8">14:00 PM - 15:00 PM</option>
                        <option value="9">15:00 PM - 16:00 PM</option>
                        <option value="10">16:00 PM - 17:00 PM</option>
                        <option value="11">17:00 PM - 18:00 PM</option>
                        <option value="12">18:00 PM - 19:00 PM</option>
                        <option value="13">19:00 PM - 20:00 PM</option>
                        <option value="14">20:00 PM - 21:00 PM</option>
                        <option value="15">21:00 PM - 22:00 PM</option>
                        
                      </select>                  
                      </div> 
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

        </section><!-- /.content -->

 <!-- /.content -->
      </div><!-- /.content-wrapper -->
