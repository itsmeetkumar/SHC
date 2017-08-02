<div class="content-wrapper">
<section class="content">
        <div class="row">
        <div class="col-md-12">

        
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">SMART CARD</h3>
                </div><!-- /.box-header -->


                <div class="col-md-4">
                <?php  
                

                  $limit=1;
                  $pid = ($this->session->userdata['logged_in']['r_number']);
                  $query = $this->db->get_where('patient', array('r_number' => $pid), $limit);
                  

                    foreach ($query->result() as $row)
                    {
                      ?>
                <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=<?php echo base_url();?>ait/search_pt3/<?php echo $row->r_number; ?>" class="img-responsive" alt="Image">
              
                </div>
                <div class="col-md-8">

                <table class="table table-hover">

                         <thead>
                         
    <?php  

    echo "<tr>";
           echo "<th>";
          echo "Name";
          echo "</th>";

          echo "<th>";
          echo $row->name;
          echo "</th>";
    echo "</tr>";


    echo "<tr>";
           echo "<th>";
          echo "Address";
          echo "</th>";

          echo "<th>";
          echo $row->add;
          echo "</th>";
    echo "</tr>";

    echo "<tr>";
           echo "<th>";
          echo "Phone Number";
          echo "</th>";

          echo "<th>";
          echo $row->p_number;
          echo "</th>";
    echo "</tr>";

    echo "<tr>";
           echo "<th>";
          echo "Sex";
          echo "</th>";

          echo "<th>";
          echo $row->sex;
          echo "</th>";
    echo "</tr>";
    ?>
    <?php } ?>
    </thead>
    </table>

                </div>
               
                </div>

               </div> 

               </div>
               </section>
               </div>