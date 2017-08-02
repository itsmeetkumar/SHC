<div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- Main content -->

<section class="content">
        <div class="row">
        <div class="col-md-12">
              <!-- general form elements -->
              <form role="form" action="<?php echo base_url(); ?>doctor/search_dat" method="post">
                <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Search Patient</h3>
                </div><!-- /.box-header -->
               
                
              <div class="box-body">

                  <div class="form-group">
                      <label for="exampleInputEmail1">Enter Patient Id: </label>
                      <input type="Number" class="form-control" id="pid" name="pid" placeholder="Enter Your Code..." required>
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
        <div class="col-md-12">

        
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">SMART CARD</h3>
                </div><!-- /.box-header -->

              <div class="box-body">


                <div class="col-md-4">
                <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&amp;data=http://192.168.225.242/hackathon/ait/search_pt3/123" class="img-responsive" alt="Image">
              
                </div>
                <div class="col-md-8">

                <table class="table table-hover">

                         <thead>
    <tr><th>Name</th><th>demo</th></tr><tr><th>Address</th><th>kjafasvs lvns pslh vlv l</th></tr><tr><th>Phone Number</th><th>7778832229</th></tr><tr><th>Sex</th><th></th></tr>        </thead>
    </table>

                </div>
               
                </div>

                </div>

               </div> 

               </div>
               </section>

 <section class="content">   
     <div class="row">
        <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Medicine Information</h3>
                </div><!-- /.box-header -->

                    <div class="form-group">
                      <div class="table-responsive">
                      <table class="table table-condensed">
                            <thead>
                              <tr>
                                <th>Medicines</th>
                                <th>Description</th>
                                <th>Category</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>#</th>
                              </tr>
                            </thead>
                              <tbody>
                              <?php  
                          $query = $this->db->get('medi_data');
                  

                    foreach ($query->result() as $row)
                    {
                      ?>
                              <tr>
                                <td><?php echo $row->name;?></td>
                                <td><?php echo $row->des;?></td>
                                <td><?php echo $row->cat;?></td>
                                <td><?php echo $row->stock;?></td>
                                <td><?php echo $row->cost;?></td>
                                <td><div class="btn">
                    <button type="button" class="btn btn-primary">View</button>
                    </div><div class="btn">
                    
                    </div></td>
                              </tr>
                              <?php } ?>
                            </tbody>
                          </table>
                          </div>
                    </div> 

                    
               
                
              </div><!-- /.box -->

              <!-- Form Element sizes -->

                              </div>
                              





                              <!-- /input-group -->
                </div><!-- /.box-body -->
             <!-- /.box -->
        </section><!-- /.content -->


         </div><!-- /.content-wrapper -->
