<div class="content-wrapper">

        <!-- Content Header (Page header) -->
<?php 
$username = ($this->session->userdata['logged_in']['r_number']);

 ?>
        <!-- Main content -->
 <section class="content">
        <div class="row">
        <div class="col-md-12">
        
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Previous Record</h3>
                  <div class="box-tools pull-right">
                
                <button class="btn btn-box-tool" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i></button>
              </div>
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

                    





                    
                           
                    <table class="table">
                            
                              <tbody>
                              <?php
                              $limit=1;
                  
                  $query = $this->db->get_where('temp', array('r_number' => $username), $limit);
                  

                    foreach ($query->result() as $row)
                    {
                     
                     

 ?>
                              <tr>
                                <th>Temperature</th>
                                <td><?php echo $row->temp; ?> F</td>
                                

                              </tr>
                             
                              <tr>
                                <th>Date</th>
                                <td><?php echo $row->date; ?></td>
                                

                              </tr>
                              <?php } ?>

                            </tbody>
                          </table>
                      
               
                
              </div><!-- /.box -->

              <!-- Form Element sizes -->

                              </div>
                              





                              <!-- /input-group -->
                </div><!-- /.box-body -->
             <!-- /.box -->
             </div>




        </section>
            
        <section class="content">
        <div class="row">
        <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">History</h3>
                </div><!-- /.box-header -->
               
                
                
                  

                  <div class="box-body">   
                           
                    <table class="table">
                     
                            <thead>
                              <tr>
                                <th>Temperature</th>
                                <th>Date</th>

                              </tr>
                            </thead>
                             <?php 
                              $query = $this->db->get_where('temp', array('r_number' => $username));
                  
                       foreach ($query->result() as $row)
                    {
                     
                      
                       
                       ?>
                              <tbody>
                              <tr>
                                <td><?php echo $row->temp;?> F</td>
                                <td><?php echo $row->date;?></td>

                              </tr>

                            </tbody>
                            <?php } ?>
                          </table>
                      
               
                
              </div><!-- /.box -->

              <!-- Form Element sizes -->

                              </div>
                              





                              <!-- /input-group -->
                </div><!-- /.box-body -->
             <!-- /.box -->
             </div>




        </section>
       
        <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">X</button>
        <h4 class="modal-title">Basic Information</h4>
      </div>
      <div class="modal-body">
       <section class="content">
        <div class="row">
        <div class="col-md-12">
        <form action="<?php  echo base_url();?>app/in_temp" method="post">
              <!-- general form elements -->
              <div class="box box-primary">
                <!-- /.box-header -->
               
                
                
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
                      <label for="exampleInputEmail1">Temperature: </label>
                      <input type="text" class="form-control" id="temp" name="temp" placeholder="Enter Updated Value" required>
                    </div>


                    <div class="form-group">
                      <label for="exampleInputEmail1">Date: </label>
                      <input type="text" value="<?php echo date("Y/m/d"); ?>" class="form-control" id="date" name="date">
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




        </section>
      </div>
      
    </div>

  </div>
</div>
        <!-- /.content -->

 <!-- /.content -->
      </div><!-- /.content-wrapper -->
