<div class="content-wrapper">

        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">
        <div class="row">
        <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Enter Information</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" action="<?= base_url();?>index.php/demo/adddata">
                  <?php if (isset($mess)) { ?>
                  <CENTER><h2 style="color:green;"><?php echo $mess; ?></h2></CENTER><br>
                  <?php } ?>
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Enter Name</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name..." required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Enter Address</label>
                      <textarea class="form-control" rows="4" id="address" name="address" placeholder="Enter Address" required></textarea>

                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Enter City</label>
                      <input type="text" class="form-control" id="city" name="city" placeholder="Enter City..." required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Enter pincode</label>
                      <input type="number" class="form-control" id="pincode" name="pincode" placeholder="Enter Pincode..." required >
                    </div>
                    





                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->

              <!-- Form Element sizes -->

                              </div><!-- /input-group -->
                </div><!-- /.box-body -->
             <!-- /.box -->




        </section><!-- /.content -->

      </div><!-- /.content-wrapper -->
