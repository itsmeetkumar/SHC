<div class="content-wrapper">

<section class="content">
        <div class="row">
        <div class="col-md-12">
              <!-- general form elements -->
              <form role="form" action="<?php echo base_url(); ?>admin/add_doc" method="post">
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
                      <input type="Number" class="form-control" id="d_code" name="d_code" placeholder="Enter Your Code..." required>
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




<section class="content">

          <div class="row">
           <!-- /.col -->
            <div class="col-md-12">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#activity" data-toggle="tab" aria-expanded="true">Activity</a></li>
                  <li class=""><a href="#timeline" data-toggle="tab" aria-expanded="false">Timeline</a></li>
                  <li class=""><a href="#settings" data-toggle="tab" aria-expanded="false">Settings</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="activity">
                    <!-- Post -->

                      <table class="table table-hover">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        
      </tr>
    </tbody>
  </table>


                    <!-- /.post -->
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                   <h3>This is demo2</h3>
                  </div><!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                   <h3>This is Demo3</h3>
                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
              </div><!-- /.nav-tabs-custom -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section>
        </div>