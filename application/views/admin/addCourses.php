
      <!-- =============================================== --><!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
       <section class="content-header">
          <h1><img src="<?php echo base_url();?>public/images/new1.png" alt="logo"/>
            MMUST Course Application System
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">

  <div class="row">
    <span id="news_scroller" style="visibility:visible;"></span>
    </div>

    	<br/>

<div class="row">
 <div class="col-md-12">
              <div class="panel panel-primary">
                 <div class="panel-heading"><span class="glyphicon glyphicon-education"></span>&nbsp;ADD COURSES</div>
     <div class="panel-body">
                <div style="display: block;" class="box-body">
                       <h4 class="form-section">Course Information</h4>
                       <hr>
                       <?php
                 /*        if(isset($_POST['course-add']))
                         {
                             $code = $_POST['code'];
                          $faculty = $_POST['faculty_id'];
                          $dept = $_POST['department_id'];
                           $level = $_POST['Level_id'];
                          $courseName = $_POST['Course_Name'];
                          $creq = $_POST['course_req'];
                          $stmt1=$conn->prepare("SELECT * FROM programmes WHERE programme='$courseName'");
                          $stmt1->execute();
                          $count=$stmt1->rowCount();
                           if($count==0){
                          $stmt=$conn->prepare("INSERT INTO programmes (code,faculty,department,qualification,programme,programme_req,date_modified) VALUES('$code','$faculty','$dept','$level','$courseName','$creq',NOW())");
                          if($stmt->execute()){
                            echo "<div class='alert alert-success fade in'>
                                        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                         Course Details Successfully Saved</div>";
                                 }
                                 else
                                 {
                                   echo "<div class='alert alert-danger'>
				  <button class='close' data-dismiss='alert'>&times;</button><strong>Sorry !</strong> Query could not be executed </div>";
                                 }

                          }
                          else
                          {
                             echo "<div class='alert alert-danger'>
				<button class='close' data-dismiss='alert'>&times;</button>	<strong>Sorry !</strong>  Course Name already exists , Please Try another one
			  </div>";
                          }

                         }*/
                       ?>
              <form class="form-vertical" method="post" enctype="multipart/form-data">

              <div class="col-md-6">
                   <div class="form-group">
                <label for="course Level">School Name: &nbsp;<span class="required">*</span></label>
                <select class="form-control" required="required" id="faculty" name="faculty_id">
                <option value ="">--Select School Name--</option>
                    <?php
                     foreach($faculty as $row) { ?>
                    <option value="<?php echo $row['faculty_id']; ?>"><?php echo $row['faculty_name']; ?></option>
                    <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <label for="course Level">Department Name: &nbsp;<span class="required">*</span></label>

                  <select id="department" class="form-control" required="required"  name="department_id">
                    <option value ="">--Select Department Name--</option>

                      </select>
              </div>
               <div class="form-group">
                <label for="course Level">Course Level: &nbsp;<span class="required">*</span></label>
                  <select class="form-control" required="required" id="Level_id" name="Level_id">
                    <option value ="">--Select Course Level--</option>
                           <?php
                           foreach($courrselevels as $rowlevel){
                               ?>
                           <option value="<?php echo $rowlevel['Level_id'];?>"><?php echo $rowlevel['Level_Name']; ?></option>
                              <?php
                           }
                            ?>
                      </select>
              </div>
                </div>


                   <div class="col-md-6">
                         <div class="form-group has-feedback">
              <label>Course code: <span class="required">*</span></label>
                <input required name="code" type="text" class="form-control" placeholder="Course Code" >
                <span class="glyphicon glyphicon-education form-control-feedback"></span>
              </div>
                  <div class="form-group has-feedback">
              <label>Course Name: <span class="required">*</span></label>
                <input required name="Course_Name" type="text" class="form-control" placeholder="Course name" >
                <span class="glyphicon glyphicon-education form-control-feedback"></span>
              </div>
              <div class="form-group has-feedback">
              <label>Course Minimum Requirement: </label>
                 <textarea name="course_req" class="form-control" id="course_req" cols="45" rows="3"></textarea>
              </div>
              </div>


               <div class="form-actions">
                <div class="row">
                <div class="col-md-6">
                <div class="row">
                <div class="col-md-offset-3 col-md-9">
                <button type="submit" name="course-add" class="btn btn-info">Submit</button>
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