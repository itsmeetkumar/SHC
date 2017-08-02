<div class="content-wrapper">

        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">
        <div class="row">
        <div class="col-md-12">

        <form role="form" action="<?php echo base_url(); ?>chemist/add_medi" method="post">
              <?php  
                if(isset($mess))
                {
                  echo "<h3>";
                  echo $mess;
                  echo "</h3>";
                   echo validation_errors(); 
                }
              ?>
        
              <!-- general form elements -->
              <div class="box box-primary">
                
                  <div class="box-body">

                  <div class="form-group">
                      <label for="exampleInputEmail1">Add Medicines: </label>
                      <input type="text" class="form-control" id="med" name="med" placeholder="Add Medicines..." required>
                    </div>


                    <div class="form-group">
                      <label for="exampleInputEmail1">Description: </label>
                      <input type="text" class="form-control" id="des" name="des" placeholder="Enter Description..." required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Category: </label>
                          <select class="form-control" name="kat" id="kat">
                          <?php  
                          $query = $this->db->get('medi_cat');
                  

                    foreach ($query->result() as $row)
                    {
                      ?>
                      
                      <option value="<?php echo $row->cat;?>"><?php echo $row->cat;?></option>
                      
                      <?php } ?>
                          ?>

                            
                          </select>
                          </div>

         <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Quantity: </label>
                      <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Enter Quantity..." required>
                    </div>
                  </div>
                    

        <div class="col-md-6">

                    <div class="form-group">
                      <label for="exampleInputEmail1">Price: </label>
                      <input type="Number" class="form-control" id="cost" name="cost" placeholder="Enter price..." required>
                    </div>
                 </div>

                 <center><div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div></center>

               
                
              </div><!-- /.box -->

              <!-- Form Element sizes -->

                              </div>
                              </form>
                              





                              <!-- /input-group -->
                </div><!-- /.box-body -->
             <!-- /.box -->
             </div>




        </section><!-- /.content -->
         </div><!-- /.content-wrapper -->