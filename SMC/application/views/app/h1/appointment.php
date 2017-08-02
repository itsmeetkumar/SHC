<div class="content-wrapper">
<?php
$username = ($this->session->userdata['logged_in']['r_number']);


 ?>
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">
        <div class="row">
        <div class="col-md-12">
        <form action="<?php  echo base_url();?>appointment/in_app2" method="post">
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
                    <input type="text" value="<?php  echo $username;?>" class="form-control" id="pid" name="pid">
                    
                  </div>

                 

                    <div class="form-group">
                    <label>Doctor Name:</label>
                    <select class="form-control select2" name="did" id="did" style="width: 100%;">
                    <option selected="selected">Select the Doctor Name</option>
                    <?php  
                

                  
                  
                  $query = $this->db->get('doctor');
                  

                    foreach ($query->result() as $row)
                    {
                      ?>
                      
                      <option value="<?php echo $row->name;?>"><?php echo $row->name;?></option>
                      
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
                      <label for="exampleInputEmail1">Time Slot: </label>
                      <select class="form-control" name="time" id="time">
                        <option value="07:00 AM - 08:00 AM">07:00 AM - 08:00 AM</option>
                        <option value="08:00 AM - 09:00 AM">08:00 AM - 09:00 AM</option>
                        <option value="09:00 AM - 10:00 AM">09:00 AM - 10:00 AM</option>
                        <option value="10:00 AM - 11:00 AM">10:00 AM - 11:00 AM</option>
                        <option value="11:00 AM - 12:00 PM">11:00 AM - 12:00 PM</option>
                        <option value="12:00 PM - 13:00 PM">12:00 PM - 13:00 PM</option>
                        <option value="13:00 PM - 14:00 PM">13:00 PM - 14:00 PM</option>
                        <option value="14:00 PM - 15:00 PM">14:00 PM - 15:00 PM</option>
                        <option value="15:00 PM - 16:00 PM">15:00 PM - 16:00 PM</option>
                        <option value="16:00 PM - 17:00 PM">16:00 PM - 17:00 PM</option>
                        <option value="17:00 PM - 18:00 PM">17:00 PM - 18:00 PM</option>
                        <option value="18:00 PM - 19:00 PM">18:00 PM - 19:00 PM</option>
                        <option value="19:00 PM - 20:00 PM">19:00 PM - 20:00 PM</option>
                        <option value="20:00 PM - 21:00 PM">20:00 PM - 21:00 PM</option>
                        <option value="21:00 PM - 22:00 PM">21:00 PM - 22:00 PM</option>
                        
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


        <section class="content">
             <div class="row">
        <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Appointment History</h3>
                </div><!-- /.box-header -->

                    <div class="form-group">
                      <table class="table">
                            <thead>
                              <tr>
                                <th>Doctor Name</th>
                                <th>Date</th>
                                <th>Time Slot</th>
                              </tr>
                            </thead>
                              <tbody>
                              <?php 
                              $username = ($this->session->userdata['logged_in']['r_number']);

                                $query = $this->db->get_where('appointment', array('pat_id' => $username));
                  

                    foreach ($query->result() as $row)
                    {
                      ?>
                              <tr>
                                <td><?php echo $row->doc_id; ?></td>
                                <td><?php echo $row->date; ?></td>
                                <td><?php echo $row->time; ?></td>
                              </tr>
                              <?php }?>
                            </tbody>
                          </table>
                    </div> 


              </div><!-- /.box -->

              <!-- Form Element sizes -->

                              </div>
                              





                              <!-- /input-group -->
                </div><!-- /.box-body -->


        </section><!-- /.content -->

 <!-- /.content -->
      </div><!-- /.content-wrapper -->
