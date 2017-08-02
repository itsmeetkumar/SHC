<div class="content-wrapper">

        <!-- Content Header (Page header) -->

        <!-- Main content -->
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


  </section><!-- /.content -->




  <section class="content">
        <div class="row">
        <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Search Patient</h3>
                </div><!-- /.box-header -->
               
                
              <div class="box-body">

                  <table class="table table-striped table-bordered"><thead>
<tr><th>#</th><th></th><th>Student ID</th><th>GR No.</th><th>Name</th><th>Academic Year</th><th>Course Name</th><th>Batch</th><th>Section</th><th>Profile Status</th><th class="action-column">&nbsp;</th></tr>
</thead>
<tbody>
<tr data-key="33"><td>1</td><td><img class="img-circle img-sm" src="/user/image?name=default.png" alt="NA"></td><td>37</td><td><span class="not-set">(not set)</span></td><td><a href="/student/stu-master/view?id=37" data-pjax="0">Amelia Pelletier</a></td><td>2016-17</td><td>Preschool</td><td>Kindergarten1</td><td>KG1-Section1</td><td><span class="label label-success">ACTIVE</span></td><td><a class="ajax-delete" href="/student/stu-master/delete?id=37" title="Delete" aria-label="Delete" confirm="Are you sure you want to delete this item?" data-pjax="0"><span class="glyphicon glyphicon-trash"></span></a></td></tr>
<tr data-key="32"><td>2</td><td><img class="img-circle img-sm" src="/user/image?name=default.png" alt="NA"></td><td>36</td><td><span class="not-set">(not set)</span></td><td><a href="/student/stu-master/view?id=36" data-pjax="0">Sentiago Jones</a></td><td>2016-17</td><td>Preschool</td><td>Kindergarten1</td><td>KG1-Section1</td><td><span class="label label-success">ACTIVE</span></td><td><a class="ajax-delete" href="/student/stu-master/delete?id=36" title="Delete" aria-label="Delete" confirm="Are you sure you want to delete this item?" data-pjax="0"><span class="glyphicon glyphicon-trash"></span></a></td></tr>
<tr data-key="31"><td>3</td><td><img class="img-circle img-sm" src="/user/image?name=default.png" alt="NA"></td><td>35</td><td><span class="not-set">(not set)</span></td><td><a href="/student/stu-master/view?id=35" data-pjax="0">Mason White</a></td><td>2016-17</td><td>Preschool</td><td>Kindergarten1</td><td>KG1-Section1</td><td><span class="label label-success">ACTIVE</span></td><td><a class="ajax-delete" href="/student/stu-master/delete?id=35" title="Delete" aria-label="Delete" confirm="Are you sure you want to delete this item?" data-pjax="0"><span class="glyphicon glyphicon-trash"></span></a></td></tr>
<tr data-key="30"><td>4</td><td><img class="img-circle img-sm" src="/user/image?name=default.png" alt="NA"></td><td>34</td><td><span class="not-set">(not set)</span></td><td><a href="/student/stu-master/view?id=34" data-pjax="0">Benjamin Matthews</a></td><td>2016-17</td><td>Preschool</td><td>Kindergarten1</td><td>KG1-Section1</td><td><span class="label label-success">ACTIVE</span></td><td><a class="ajax-delete" href="/student/stu-master/delete?id=34" title="Delete" aria-label="Delete" confirm="Are you sure you want to delete this item?" data-pjax="0"><span class="glyphicon glyphicon-trash"></span></a></td></tr>
<tr data-key="29"><td>5</td><td><img class="img-circle img-sm" src="/user/image?name=default.png" alt="NA"></td><td>32</td><td><span class="not-set">(not set)</span></td><td><a href="/student/stu-master/view?id=32" data-pjax="0">Lisa Henderson</a></td><td>2016-17</td><td>Primary</td><td>Grade1</td><td>Grade1-Sec1</td><td><span class="label label-success">ACTIVE</span></td><td><a class="ajax-delete" href="/student/stu-master/delete?id=32" title="Delete" aria-label="Delete" confirm="Are you sure you want to delete this item?" data-pjax="0"><span class="glyphicon glyphicon-trash"></span></a></td></tr>
<tr data-key="28"><td>6</td><td><img class="img-circle img-sm" src="/user/image?name=default.png" alt="NA"></td><td>29</td><td><span class="not-set">(not set)</span></td><td><a href="/student/stu-master/view?id=29" data-pjax="0">Walter Greene</a></td><td>2016-17</td><td>Secondary</td><td>Year7</td><td>Year7-Sec1</td><td><span class="label label-success">ACTIVE</span></td><td><a class="ajax-delete" href="/student/stu-master/delete?id=29" title="Delete" aria-label="Delete" confirm="Are you sure you want to delete this item?" data-pjax="0"><span class="glyphicon glyphicon-trash"></span></a></td></tr>
<tr data-key="27"><td>7</td><td><img class="img-circle img-sm" src="/user/image?name=default.png" alt="NA"></td><td>26</td><td><span class="not-set">(not set)</span></td><td><a href="/student/stu-master/view?id=26" data-pjax="0">Gary Guerrero</a></td><td>2016-17</td><td>Secondary</td><td>Year7</td><td>Year7-Sec1</td><td><span class="label label-success">ACTIVE</span></td><td><a class="ajax-delete" href="/student/stu-master/delete?id=26" title="Delete" aria-label="Delete" confirm="Are you sure you want to delete this item?" data-pjax="0"><span class="glyphicon glyphicon-trash"></span></a></td></tr>
<tr data-key="26"><td>8</td><td><img class="img-circle img-sm" src="/user/image?name=default.png" alt="NA"></td><td>25</td><td><span class="not-set">(not set)</span></td><td><a href="/student/stu-master/view?id=25" data-pjax="0">Lawrence Thomas</a></td><td>2016-17</td><td>Secondary</td><td>Year7</td><td>Year7-Sec1</td><td><span class="label label-success">ACTIVE</span></td><td><a class="ajax-delete" href="/student/stu-master/delete?id=25" title="Delete" aria-label="Delete" confirm="Are you sure you want to delete this item?" data-pjax="0"><span class="glyphicon glyphicon-trash"></span></a></td></tr>
<tr data-key="25"><td>9</td><td><img class="img-circle img-sm" src="/user/image?name=default.png" alt="NA"></td><td>24</td><td><span class="not-set">(not set)</span></td><td><a href="/student/stu-master/view?id=24" data-pjax="0">Theo Roy</a></td><td>2016-17</td><td>Preschool</td><td>Kindergarten1</td><td>KG1-Section1</td><td><span class="label label-success">ACTIVE</span></td><td><a class="ajax-delete" href="/student/stu-master/delete?id=24" title="Delete" aria-label="Delete" confirm="Are you sure you want to delete this item?" data-pjax="0"><span class="glyphicon glyphicon-trash"></span></a></td></tr>
<tr data-key="24"><td>10</td><td><img class="img-circle img-sm" src="/user/image?name=default.png" alt="NA"></td><td>23</td><td><span class="not-set">(not set)</span></td><td><a href="/student/stu-master/view?id=23" data-pjax="0">Sanna Toivonen</a></td><td>2016-17</td><td>Secondary</td><td>Year7</td><td>Year7-Sec1</td><td><span class="label label-success">ACTIVE</span></td><td><a class="ajax-delete" href="/student/stu-master/delete?id=23" title="Delete" aria-label="Delete" confirm="Are you sure you want to delete this item?" data-pjax="0"><span class="glyphicon glyphicon-trash"></span></a></td></tr>
<tr data-key="23"><td>11</td><td><img class="img-circle img-sm" src="/user/image?name=default.png" alt="NA"></td><td>22</td><td><span class="not-set">(not set)</span></td><td><a href="/student/stu-master/view?id=22" data-pjax="0">Lachlan King</a></td><td>2016-17</td><td>Secondary</td><td>Year7</td><td>Year7-Sec1</td><td><span class="label label-success">ACTIVE</span></td><td><a class="ajax-delete" href="/student/stu-master/delete?id=22" title="Delete" aria-label="Delete" confirm="Are you sure you want to delete this item?" data-pjax="0"><span class="glyphicon glyphicon-trash"></span></a></td></tr>
<tr data-key="22"><td>12</td><td><img class="img-circle img-sm" src="/user/image?name=default.png" alt="NA"></td><td>21</td><td><span class="not-set">(not set)</span></td><td><a href="/student/stu-master/view?id=21" data-pjax="0">Samantha Bouchard</a></td><td>2016-17</td><td>Secondary</td><td>Year7</td><td>Year7-Sec1</td><td><span class="label label-success">ACTIVE</span></td><td><a class="ajax-delete" href="/student/stu-master/delete?id=21" title="Delete" aria-label="Delete" confirm="Are you sure you want to delete this item?" data-pjax="0"><span class="glyphicon glyphicon-trash"></span></a></td></tr>
<tr data-key="21"><td>13</td><td><img class="img-circle img-sm" src="/user/image?name=default.png" alt="NA"></td><td>20</td><td><span class="not-set">(not set)</span></td><td><a href="/student/stu-master/view?id=20" data-pjax="0">Antonio White</a></td><td>2016-17</td><td>Secondary</td><td>Year7</td><td>Year7-Sec1</td><td><span class="label label-success">ACTIVE</span></td><td><a class="ajax-delete" href="/student/stu-master/delete?id=20" title="Delete" aria-label="Delete" confirm="Are you sure you want to delete this item?" data-pjax="0"><span class="glyphicon glyphicon-trash"></span></a></td></tr>
<tr data-key="20"><td>14</td><td><img class="img-circle img-sm" src="/user/image?name=default.png" alt="NA"></td><td>19</td><td><span class="not-set">(not set)</span></td><td><a href="/student/stu-master/view?id=19" data-pjax="0">Cohen Tremblay</a></td><td>2016-17</td><td>Secondary</td><td>Year7</td><td>Year7-Sec1</td><td><span class="label label-success">ACTIVE</span></td><td><a class="ajax-delete" href="/student/stu-master/delete?id=19" title="Delete" aria-label="Delete" confirm="Are you sure you want to delete this item?" data-pjax="0"><span class="glyphicon glyphicon-trash"></span></a></td></tr>
<tr data-key="19"><td>15</td><td><img class="img-circle img-sm" src="/user/image?name=default.png" alt="NA"></td><td>18</td><td><span class="not-set">(not set)</span></td><td><a href="/student/stu-master/view?id=18" data-pjax="0">Alex Ouellet</a></td><td>2016-17</td><td>Secondary</td><td>Year7</td><td>Year7-Sec1</td><td><span class="label label-success">ACTIVE</span></td><td><a class="ajax-delete" href="/student/stu-master/delete?id=18" title="Delete" aria-label="Delete" confirm="Are you sure you want to delete this item?" data-pjax="0"><span class="glyphicon glyphicon-trash"></span></a></td></tr>
<tr data-key="18"><td>16</td><td><img class="img-circle img-sm" src="/user/image?name=default.png" alt="NA"></td><td>17</td><td><span class="not-set">(not set)</span></td><td><a href="/student/stu-master/view?id=17" data-pjax="0">Hayden Brown</a></td><td>2016-17</td><td>Secondary</td><td>Year7</td><td>Year7-Sec1</td><td><span class="label label-success">ACTIVE</span></td><td><a class="ajax-delete" href="/student/stu-master/delete?id=17" title="Delete" aria-label="Delete" confirm="Are you sure you want to delete this item?" data-pjax="0"><span class="glyphicon glyphicon-trash"></span></a></td></tr>
<tr data-key="17"><td>17</td><td><img class="img-circle img-sm" src="/user/image?name=default.png" alt="NA"></td><td>16</td><td><span class="not-set">(not set)</span></td><td><a href="/student/stu-master/view?id=16" data-pjax="0">Callie Fortin</a></td><td>2016-17</td><td>Secondary</td><td>Year7</td><td>Year7-Sec1</td><td><span class="label label-success">ACTIVE</span></td><td><a class="ajax-delete" href="/student/stu-master/delete?id=16" title="Delete" aria-label="Delete" confirm="Are you sure you want to delete this item?" data-pjax="0"><span class="glyphicon glyphicon-trash"></span></a></td></tr>
<tr data-key="15"><td>18</td><td><img class="img-circle img-sm" src="/user/image?name=default.png" alt="NA"></td><td>15</td><td><span class="not-set">(not set)</span></td><td><a href="/student/stu-master/view?id=15" data-pjax="0">Claire Jones</a></td><td>2016-17</td><td>Secondary</td><td>Year7</td><td>Year7-Sec1</td><td><span class="label label-success">ACTIVE</span></td><td><a class="ajax-delete" href="/student/stu-master/delete?id=15" title="Delete" aria-label="Delete" confirm="Are you sure you want to delete this item?" data-pjax="0"><span class="glyphicon glyphicon-trash"></span></a></td></tr>
<tr data-key="14"><td>19</td><td><img class="img-circle img-sm" src="/user/image?name=default.png" alt="NA"></td><td>14</td><td><span class="not-set">(not set)</span></td><td><a href="/student/stu-master/view?id=14" data-pjax="0">Harrison Campbell</a></td><td>2016-17</td><td>Primary</td><td>Grade1</td><td>Grade1-Sec1</td><td><span class="label label-success">ACTIVE</span></td><td><a class="ajax-delete" href="/student/stu-master/delete?id=14" title="Delete" aria-label="Delete" confirm="Are you sure you want to delete this item?" data-pjax="0"><span class="glyphicon glyphicon-trash"></span></a></td></tr>
<tr data-key="13"><td>20</td><td><img class="img-circle img-sm" src="/user/image?name=default.png" alt="NA"></td><td>13</td><td><span class="not-set">(not set)</span></td><td><a href="/student/stu-master/view?id=13" data-pjax="0">Aubree Fortin</a></td><td>2016-17</td><td>Primary</td><td>Grade1</td><td>Grade1-Sec1</td><td><span class="label label-success">ACTIVE</span></td><td><a class="ajax-delete" href="/student/stu-master/delete?id=13" title="Delete" aria-label="Delete" confirm="Are you sure you want to delete this item?" data-pjax="0"><span class="glyphicon glyphicon-trash"></span></a></td></tr>
</tbody></table>

                   
                    
                      
              </div><!-- /.box -->

              <!-- Form Element sizes -->

          </div>
                              





        </form>          <!-- /input-group -->
       </div>
      </div>


  </section>


  </div><!-- /.content-wrapper -->
