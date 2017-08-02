<div class="content-wrapper">
 <section class="content">
<?php $username = ($this->session->userdata['logged_in']['r_number']); ?>
<div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#activity" data-toggle="tab">Diagnostic Report</a></li>
                  <li><a href="#timeline" data-toggle="tab">History</a></li>
                </ul>
                <div class="tab-content">
                  <!-- /.tab-pane -->
                  <!-- /.tab-pane -->

                  <div class="tab-pane active" id="activity">
                      <div class="form-group">
                            <table class="table">
                      <?php
                              $limit=1;
                  
                  $query = $this->db->get_where('pat_dia', array('pat_id' => $username), $limit);
                  

                    foreach ($query->result() as $row)
                    {
                     
                     

 ?>
                            <thead>
                              <tr>
                                <td>Diagnostic Details: </td>
                                <td><?php echo $row->diag_data; ?></td>

                              </tr>
                            </thead>
                             
                              <tbody>
                                <tr>
                                <td>Date: </td>
                                <td><?php echo $row->diag_date; ?></td>

                              </tr>
                              <tr>
                                <td>Remarks: </td>
                                <td><?php echo $row->remarks; ?></td>

                              </tr>
                              <tr>
                                <td>Type: </td>
                                <td><?php echo $row->other; ?></td>

                              </tr>
<?php } ?>

                            </tbody>
                            
                          </table>



                              
                            </div> 
                  </div>

                  <div class="tab-pane" id="timeline">
                        <div class="form-group">
                      <table class="table">
                            <thead>
                              <tr>
                                <th>Report ID</th>
                                <th>Report Type</th>
                                <th>Date</th>
                              </tr>
                            </thead>
                              <tbody>
                              <?php
                              $limit=1;
                  
                  $query = $this->db->get_where('pat_dia', array('pat_id' => $username), $limit);
                  

                    foreach ($query->result() as $row)
                    {
                     
                     

 ?>
                              <tr>
                                <th><?php echo $row->id; ?></th>
                                <td><?php echo $row->other; ?></td>
                                <td><?php echo $row->diag_date; ?></td>
                              </tr>
                             <?php }?> 
                               </tbody>
                          </table>
                    </div> 
                  </div>


                  
                </div><!-- /.tab-content -->
              </div>
              </section>
              </div>