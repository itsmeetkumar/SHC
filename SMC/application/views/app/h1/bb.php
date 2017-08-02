<div class="content-wrapper">

        <!-- Content Header (Page header) -->

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
                              
                              <tr>
                                <th>Height</th>
                                <td>168 cms</td>                             
                              </tr>
                              <tr>
                                <th>Weight</th>
                                <td>55 kg</td>                           
                              </tr>
                              <tr>
                                <th>Date</th>
                                <td>22/7/2016</td>                              
                              </tr>

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
        <form action="<?php  echo base_url();?>doctor/in_predata" method="post">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">History</h3>
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
                            <thead>
                              <tr>
                                <th>Height</th>
                                <th>Weight</th>
                                <th>Date</th>

                              </tr>
                            </thead>
                              <tbody>
                              <tr>
                                <td>168 cms</td>
                                <td>55 kgs</td>
                                <td>22/7/2016</td>

                              </tr>

                            </tbody>
                          </table>
                      
               
                
              </div><!-- /.box body -->
              </div><!-- /.box primary -->

</form>
              <!-- Form Element sizes -->

                              </div><!-- /.box -->

                              





                              <!-- /input-group -->
                </div><!-- /.box-body -->


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
        <form action="<?php  echo base_url();?>doctor/in_predata" method="post">
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
                      <label for="exampleInputEmail1">Height: </label>
                      <input type="text" class="form-control" id="d_data" name="d_data" placeholder="Enter Updated Value" required>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Weight: </label>
                      <input type="text" class="form-control" id="rem" name="rem" placeholder="Enter Updated Value">
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
