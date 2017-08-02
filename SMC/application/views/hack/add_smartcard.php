<div class="content-wrapper">

<br>
<div class="col-md-3">
         <button type="submit" class="btn btn-danger btn-block">Register Patient</button>
        </div>
        <div class="col-md-3">
          <button type="submit" class="btn btn-danger btn-block">Add Patient</button>
           </div>
           <div class="col-md-3">
           <button type="submit" class="btn btn-danger btn-block">Register Smart Card</button>
           </div>
           <div class="col-md-3">
            <button type="submit" class="btn btn-danger btn-block">Update Smart Card</button>
             </div> 

<hr>

<section class="content">
        <div class="row">
        <div class="col-md-12">
              <!-- general form elements -->
              <form role="form" action="<?php echo base_url(); ?>ait/search_pt" method="post">
              <?php  
                if(isset($mess))
                {
                  echo "<h3>";
                  echo $mess;
                  echo "</h3>";
                }
              ?>
          <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Search Patient</h3>
                </div><!-- /.box-header -->
               
                
              <div class="box-body">

                  <div class="form-group">
                      <label for="exampleInputEmail1">Enter Patient Id: </label>
                      <input type="Number" class="form-control" id="pid" name="pid" placeholder="Enter Your ID..." required>
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


        <!-- Content Header (Page header) -->

        <!-- Main content -->
       <!-- /.content -->

 <!-- /.content -->

<!-- /.content -->

         </div><!-- /.content-wrapper -->
