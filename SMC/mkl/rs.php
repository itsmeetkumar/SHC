<div class="content-wrapper">

        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">
        <div class="row">
        <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Search Information</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" action="<?= base_url();?>index.php/demo/adddata">
                  <?php if (isset($mess)) { ?>
                  <CENTER><h2 style="color:green;"><?php echo $mess; ?></h2></CENTER><br>
                  <?php } ?>


                  <?php  
          $condition = "pincode =" . "'" . $pincode . "' AND " . "city =" . "'" . $city . "'";
                $this->db->select('*');
                $this->db->from('cdata');
                $this->db->where($condition);
                $query = $this->db->get();
                


                  ?>
                  <?php $x=0; ?>
                  <div class="box-body">
                    <?php foreach ($query->result() as $row) {

                      # code...

                        $x++;
                     ?>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Pincode:<?php echo $row->pincode; ?></label>
                      <br>
                      <label for="exampleInputPassword1">Name:<?php echo $row->name; ?></label><br>
                      <label for="exampleInputPassword1">Address:<?php echo $row->address; ?></label><br>
                      
                      <label for="exampleInputPassword1">City:<?php echo $row->city; ?></label><br><br>


                    </div>
                    <?php 
                     } ?>
                    
                   

                     <h3>Repeated :<b><?php echo $x; ?></b></h3>


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
        <section>
      
<div style="width: 100%"><iframe width="100%" 

height="600" 

src="http://www.mapsdirections.info/en/custom-google-

maps/map.php?width=100%&height=600&hl=ru&q=Ahmedabad

+(AIT%20HACKATHON%20)

&ie=UTF8&t=&z=15&iwloc=A&output=embed" frameborder="0" 

scrolling="no" marginheight="0" marginwidth="0"></iframe></div>

        </section>

      </div><!-- /.content-wrapper -->
