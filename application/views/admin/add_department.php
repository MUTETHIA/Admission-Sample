
      <!-- =============================================== --><!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1><img src="<?php echo base_url();?>public/images/new1.png" alt=""/>
            MMUST Course Application System
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">

  <div class="row">
    <span id="news_scroller" style="visibility:visible;"><marquee>  bdfugsuvfuhufhusdhfiuhi </marquee> </span>
    </div>
<div class="row">
 <div class="col-md-12">
              <div class="panel panel-primary">
                 <div class="panel-heading"><span class="glyphicon glyphicon-education"></span>&nbsp;&nbsp;&nbsp;ADD DEPARTMENT</div>
     <div class="panel-body">
                <div style="display: block;" class="box-body">
                       <h4 class="form-section">Department Information</h4>
                       <hr>
                       <?php
            /*             if(isset($_POST['dept-add']))
                         {
                           $level = $_POST['faculty_id'];
                           $dept = $_POST['Department_Name'];

                           $stmt1=$conn->prepare("SELECT * FROM department WHERE department_name='$dept'");
                           $stmt1->execute();
                           $count=$stmt1->rowCount();
                           if($count==0){
                         $stmt=$conn->prepare("INSERT INTO department (faculty_id,department_name) VALUES('$level','$dept')");
                          if($stmt->execute()){
                            echo "<div class='alert alert-success fade in'>
                                        <a href='#' class='close' data-dismiss='alert' aria-label='close'>x</a>
                                         Department Details Successfully Saved</div>";
                                 }
                                 else
                                 {
                                   echo "<div class='alert alert-danger'> <button class='close' data-dismiss='alert'>&times;</button>
					<strong>Sorry !</strong> Query could not be executed.</div>";
                                 }

                          }
                          else
                          {
                             echo "<div class='alert alert-danger'>
				<button class='close' data-dismiss='alert'>&times;</button>
					<strong>Sorry !</strong> Department Name already exists , Please Try another one.</div>";
                          }

                         }*/
                       ?>
              <form class="form-vertical" method="post" enctype="multipart/form-data">
              <div class="col-lg-8">
               <div class="form-group">
                <label for="course Level">Faculty/School: &nbsp;<span class="required">*</span></label>
                  <select class="form-control" required="required" id="faculty_id" name="faculty_id">
                    <option value ="">--Select Faculty--</option>
                           <?php
                            foreach($faculty as $rowfaculty){
                            ?>
                           <option value="<?php echo $rowfaculty['faculty_id'];?>"><?php echo $rowfaculty['faculty_name']; ?></option>
                           <?php
                              }
                           ?>
                      </select>
              </div>
               <div class="form-group has-feedback">
              <label>Department Name: <span class="required">*</span></label>
                <input required name="Department_Name" type="text" class="form-control" placeholder="Department name" >
                <span class="glyphicon glyphicon-education form-control-feedback"></span>
              </div>


                </div>

               <div class="form-actions">
                <div class="row">
                <div class="col-md-12">
                <div class="row">
                <div class="col-md-offset-3 col-md-9">
                <button type="submit" name="dept-add" class="btn btn-info">Submit</button>
                <button type="reset" class="btn btn-warning">Cancel</button>
                </div>
                </div>
                </div>
                </div>
                </div>

              </form>

                    </div><!-- ./col -->

                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->

</div>


        <!--END PAGE CONTENT -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->