<div class="content-wrapper">

        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">
        <div class="row">
        <div class="col-md-12">
        <form action="<?php  echo base_url();?>doctor/in_predata" method="post">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Prescription Information</h3>
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
                      <label for="exampleInputEmail1">Prescription Details: </label>
                      <input type="text" class="form-control" id="d_data" name="d_data" placeholder="Enter Prescription Details" required>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Remarks: </label>
                      <input type="text" class="form-control" id="rem" name="rem" placeholder="Enter Remarks(if any)">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Other: </label>
                      <input type="text" class="form-control" id="other" name="other" placeholder="Other...">
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

 <!-- /.content -->
      </div><!-- /.content-wrapper -->
