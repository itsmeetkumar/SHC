<div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
      
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
                    <button type="button" class="btn btn-primary">Edit</button>&nbsp;&nbsp;
                    <button type="button" class="btn btn-danger">Delete</button>

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
<section>
 <?php  
                          $query = $this->db->get('medi_data');
                  

                    foreach ($query->result() as $row)
                    {
                      ?>
 <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div> 
<?php } ?>
</section>

         </div><!-- /.content-wrapper -->
