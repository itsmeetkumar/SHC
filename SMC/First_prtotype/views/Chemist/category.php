<div class="content-wrapper">

        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">
        <div class="row">
        <div class="col-md-12">

        <form role="form" action="<?php echo base_url(); ?>chemist/add_kat" method="post">
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
              <div class="box-header with-border">
                  <h3 class="box-title">Category</h3>
                </div>
                <div class="box-body">
              <div class="form-group">
                      <label for="exampleInputEmail1">Add Category: </label>
                      <input type="text" class="form-control" id="kat" name="kat" placeholder="Add Category..." required>
                    </div>
                   
               <div class="box-footer" align="center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                    
                </div>
              </div><!-- /.box -->
</form>
              <!-- Form Element sizes -->

                              </div>
                              





                              <!-- /input-group -->
                </div><!-- /.box-body -->
             <!-- /.box -->



        </section><!-- /.content -->

         </div><!-- /.content-wrapper -->