<div class="content-wrapper">

<section class="content">
        <div class="row">
        <div class="col-md-12">
              <!-- general form elements -->
              <form role="form" action="<?php echo base_url(); ?>doctor/search_dat" method="post">
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
<?php  
                if(isset($pid))
                {
                  ?>


<section class="content">
        <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Patient Details</h3>
                </div><!-- /.box-header -->
               
                
              <div class="box-body">
                <table class="table table-hover">

                    <thead>
             <?php  
                

                  $limit=1;
                  
                  $query = $this->db->get_where('patient', array('r_number' => $pid), $limit);
                  

                    foreach ($query->result() as $row)
                    {
                      ?>       
    <?php  

    echo "<tr>";
           echo "<th>";
          echo "Reg_no";
          echo "</th>";

          echo "<th>";
          echo $row->r_number;
          echo "</th>";
    echo "</tr>";


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
          echo "Age";
          echo "</th>";

          echo "<th>";
          echo $row->age;
          echo "</th>";
    echo "</tr>";

    echo "<tr>";
           echo "<th>";
          echo "Gender";
          echo "</th>";

          echo "<th>";
          echo $row->psex;
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
          echo "Phone";
          echo "</th>";

          echo "<th>";
          echo $row->p_number;
          echo "</th>";
    echo "</tr>";

     echo "<tr>";
           echo "<th>";
          echo "Email";
          echo "</th>";

          echo "<th>";
          echo $row->mailid;
          echo "</th>";
    echo "</tr>";

     echo "<tr>";
           echo "<th>";
          echo "Marital status";
          echo "</th>";

          echo "<th>";
          echo $row->pms;
          echo "</th>";
    echo "</tr>";

 echo "<tr>";
           echo "<th>";
          echo "Monthly Income";
          echo "</th>";

          echo "<th>";
          echo $row->m_inc;
          echo "</th>";
    echo "</tr>";

     echo "<tr>";
           echo "<th>";
          echo "Blood Group";
          echo "</th>";

          echo "<th>";
          echo $row->pbg;
          echo "</th>";
    echo "</tr>";


    
    

    } ?>
     </thead>
  </table>
                      
              </div><!-- /.box -->

              <!-- Form Element sizes -->

          </div>

<div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Diagnosis Info</h3>
                </div><!-- /.box-header -->
               
                
                
              <div class="box-body">

                  <table class="table table-hover">

                    <thead>
                    <?php  
                

                 // $limit=1;
                  
                  $query = $this->db->get_where('pat_dia', array('pat_id' => $pid));
                  

                    foreach ($query->result() as $row)
                    {
                      ?>

    <?php  

    echo "<tr>";
      echo "<td>";
           echo "<b>Id</b>";
       echo "</td>";
       echo "<td>";    
          echo "<b>Date</b>";
        echo "</td>";
        echo "<td>";
          echo "<b>patient id</b>";  
          echo "</td>";   
    echo "</tr>";
     echo "<tr>";
     echo "<td>";
          echo $row->id;
          echo "</td>";
          echo "<td>";
          echo $row->diag_date;
          echo "</td>";
          echo "<td>";
          echo $row->pat_id;
          echo "</td>";
    echo "</tr>";
    
  
    }?>
</thead>
</table>

                      
              </div><!-- /.box -->

              <!-- Form Element sizes -->

          </div>

<div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Prescription Info</h3>
                </div><!-- /.box-header -->
               
                
              <div class="box-body">

                  <?php  
                

                  
                  
                  $query = $this->db->get_where('pres_data  ', array('pat_id' => $pid));
                  

                    foreach ($query->result() as $row)
                    {
                      ?>

                
              <div class="box-body">

                  <table class="table table-hover">

                    <thead>
    <?php  

    echo "<tr>";
      echo "<td>";
           echo "<b>Id</b>";
      echo "</td>";
      echo "<td>";
          echo "<b>Date</b>";
        echo "</td>";
        echo "<td>";
          echo "<b>patient id</b>";
          echo "</td>";     
    echo "</tr>";
    echo "<tr>";
echo "<td>";
          echo $row->id;
       echo "</td>";   
echo "<td>";
          echo $row->date;
          echo "</td>";
 echo "<td>";         
          echo $row->pat_id;
    echo "</tr>";
    
     
   } ?>
</thead>
</table>

                      
              </div><!-- /.box -->

              <!-- Form Element sizes -->

          </div>
</section>

<?php } ?>


        </div>