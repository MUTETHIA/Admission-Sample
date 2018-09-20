
      <!-- =============================================== --><!-- Left side column. contains the sidebar -->


      <!-- =============================================== --><!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
          <h1><img src="<?php echo base_url(); ?>public/images/new1.png" alt=""/>
            MMUST Course Application System
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
  <span id="showingit"></span>

  <div class="row">
    <span id="news_scroller" style="visibility:hidden;">   </span>
    </div>
 <div class="row">
 <div class="col-md-12">
     <div class="portlet box purple">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-user"></i>&nbsp;&nbsp;Education Information</div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse"> </a>
                                        <a href="javascript:;" class="remove"> </a>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                              <h3 class="form-section">Education Info:&nbsp;&nbsp;&nbsp;<strong>SECTION B</strong></h3>
                               <hr>
                               <?php
                                if($check_personal==0){
                                 echo "<div class='alert alert-danger'><strong>Sorry!!!!! </strong>Your Personal Data not Filled. First <strong>SECTION A </strong> MUST BE FILLED FIRST.</div>";

                                         }


                                         //else if($checkeducation==0){
                                         else{
                                             echo $this->session->flashdata('success');
                                                echo $this->session->flashdata('error');
                                                 if($checkeducation==0){
                                                     //load the insert for here
                                                     ?>
                                                                        <form  class="horizontal-form" method="post" action="<?php echo site_url('Users/userEducation');  ?>" id="education">
                                                    <div class="form-body">
                                                        <div class="row">
                                                              <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">Highest Level of Qualification &nbsp;<span class="required">*</span></label>
                                                                    <select class="form-control" name="qualification" required="required" id="qualification">
                                                                        <option value="">~~Selection Qualification~~</option>
                                                                        <option value="KCSE Certificate">KCSE Certificate</option>
                                                                        <option value="Diploma">Diploma</option>
                                                                        <option value="Certificate">Certificate</option>
                                                                    </select>
                                                                 </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">Institution Attended (Latest): &nbsp;<span class="required">*</span></label>
                                                                    <input type="text" id="school_name" name="school_name" required="required" class="form-control" placeholder="Enter Institution Name">

                                                                </div>
                                                            </div>

                                                            <!--/span-->
                                                        </div>
                                                        <div class="row">
                                                             <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">Start Year: &nbsp;<span class="required">*</span></label>
                                                                    <input type="text" id="startYear" name="startYear" required="required" class="form-control" placeholder="Start Year" maxlength="4">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">Completion Year: &nbsp;<span class="required">*</span></label>
                                                                    <input type="text" id="endYear" name="endYear" required="required" class="form-control" placeholder="Completion Year" maxlength="4">

                                                                </div>
                                                            </div>

                                                        </div>
                                                        <!--/row-->
                                                        <div class="row">
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">Grade/Award: &nbsp;<span class="required">*</span></label>
                                                                    <input type="text" name="areaOfStudy" id="areaOfStudy" required="required" class="form-control" placeholder="Provide your Grade incase KCSE level/Award incase tertiary level">
                                                                </div>
                                                            </div>
                                                            <!--/span-->


                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">Exam Body: &nbsp;<span class="required">*</span></label>
                                                                    <input type="text" name="exam" id="exam" class="form-control" required="required" placeholder="Examination Body">
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                        <!--/row-->
                                                  <div class="form-actions">
                <div class="row">
                <div class="col-md-12">
                <div class="row">
                <div class="col-md-offset-1 col-md-11">
                <button type="submit" name="edu" class="btn btn-info">Submit</button>
                <button type="reset" class="btn btn-warning">Cancel</button>
                </div>
                </div>
                </div>
                </div>
                                                    </div>

                                                    </div>
                                                </form>

                                                     <?php
                                                  }
                                                  else{
                                                      //load the display form here.
                                                      foreach($usereducation as $row){

                                                      }
                                                      ?>
                                                             <form  class="horizontal-form" method="post" id="education">
                                                    <div class="form-body">
                                                        <div class="row">
                                                              <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">Highest Level of Qualification</label>
                                                                    <select class="form-control" name="qualification" required="required" id="qualification">

                                                                        <option value="<?php echo $row['qualification_attained']; ?>"><?php echo $row['qualification_attained']; ?></option>

                                                                    </select>
                                                                 </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">Institution Attended:</label>
                                                                    <input type="text" id="school_name" name="school_name" required="required" class="form-control" value="<?php echo $row['school_name']; ?>" >

                                                                </div>
                                                            </div>

                                                            <!--/span-->
                                                        </div>
                                                        <div class="row">
                                                             <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">Start Year</label>
                                                                    <input type="text" id="startYear" name="startYear" required="required" class="form-control" value="<?php echo $row['start_Year']; ?>"  maxlength="4">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">Completion Year</label>
                                                                    <input type="text" id="endYear" name="endYear" required="required" class="form-control" value="<?php echo $row['end_Year']; ?>" maxlength="4">

                                                                </div>
                                                            </div>

                                                        </div>
                                                        <!--/row-->
                                                        <div class="row">
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">Grade/Award</label>
                                                                    <input type="text" name="areaOfStudy" id="areaOfStudy" required="required" class="form-control" value="<?php echo $row['study_Area']; ?>" >
                                                                </div>
                                                            </div>
                                                            <!--/span-->


                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">Exam Body</label>
                                                                    <input type="text" name="exam" id="exam" class="form-control" required="required" value="<?php echo $row['exam_name']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                        <!--/row-->
                                                  <div class="form-actions">
                <div class="row">
                <div class="col-md-12">
                <div class="row">
                <div class="col-md-offset-1 col-md-11">
                <button type="submit" name="edu" class="btn btn-info">Update Record</button>

                </div>
                </div>
                </div>
                </div>
                                                    </div>

                                                    </div>
                                                </form>
                                                      <?php
                                                  }
                                                  }
                                             ?>



                       </div>
     </div>
 </div>
 </div>




 <!---
      <div class="row">
 <div class="col-md-12">
     <div class="portlet box purple">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-user"></i>&nbsp;&nbsp;Personal Information</div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse"> </a>
                                        <a href="javascript:;" class="remove"> </a>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                              <h3 class="form-section">Education Info:&nbsp;&nbsp;&nbsp;<strong>SECTION B</strong></h3>
                               <hr>
                               <?php
                       if($personalData==0){
                           echo "<div class='alert alert-danger'><strong>Sorry!!!!! </strong>Your Personal Data not Filled. First <strong>SECTION A </strong> MUST BE FILLED FIRST.</div>";

                       }
                       else{
                       if(isset($_POST['edu'])){
                           $name=$_POST['school_name'];
                           $start = $_POST['startYear'];
                           $endYear = $_POST['endYear'];
                           $areaOfStudy = $_POST['areaOfStudy'];
                           $level= $_POST['qualification'];
                           $exam = $_POST['exam'];
                           $email = $_SESSION['user_session'];
                           try{
                            $education=$conn->prepare("INSERT INTO education_background (Email_Address,school_name,start_Year,end_Year,study_Area,qualification_attained,exam_name)
                           VALUES(:uemail,:school,:stat,:end,:study,:qualification,:ex)");
                            $education->bindParam(':uemail',$email);
                            $education->bindParam(':school',$name);
                            $education->bindParam(':stat',$start);
                            $education->bindParam(':end',$endYear);
                            $education->bindParam(':study',$areaOfStudy);
                            $education->bindParam(':qualification',$level);
                            $education->bindParam(':ex',$exam);
                           $education->execute();
                            echo "<div class='alert alert-success'><strong>Success!!! </strong>Your data has been saved Successfully.</div>";
                            echo "<script>window.location='testimonial_details'</script>";
                           }
                           catch(PDOException $e){
                               echo "Error in Execution".$e->getMessage();
                           }

                       }
                    }
                       ?>

                                                <form  class="horizontal-form" method="post" id="education">
                                                    <div class="form-body">
                                                        <div class="row">
                                                              <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">Highest Level of Qualification</label>
                                                                    <select class="form-control" name="qualification" required="required" id="qualification">
                                                                        <option value="">~~Selection Qualification~~</option>
                                                                        <option value="KCSE Certificate">KCSE Certificate</option>
                                                                        <option value="Diploma">Diploma</option>
                                                                        <option value="Certificate">Certificate</option>
                                                                    </select>
                                                                 </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">Institution Name</label>
                                                                    <input type="text" id="school_name" name="school_name" required="required" class="form-control" placeholder="Enter Institution Name">

                                                                </div>
                                                            </div>


                                                        </div>
                                                        <div class="row">

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">Start Year</label>
                                                                    <input type="text" id="startYear" name="startYear" required="required" class="form-control" placeholder="Start Year" maxlength="4">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">Completion Year</label>
                                                                    <input type="text" id="endYear" name="endYear" required="required" class="form-control" placeholder="Completion Year" maxlength="4">

                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="row">

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">Grade/Award</label>
                                                                    <input type="text" name="areaOfStudy" id="areaOfStudy" required="required" class="form-control" placeholder="Provide your Grade incase KCSE level/Award incase tertiary level">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">Exam Body</label>
                                                                    <input type="text" name="exam" id="exam" class="form-control" required="required" placeholder="Examination Body">
                                                                </div>
                                                            </div>

                                                        </div>

                                                  <div class="form-actions">
                <div class="row">
                <div class="col-md-12">
                <div class="row">
                <div class="col-md-offset-1 col-md-11">
                <button type="submit" name="edu" class="btn btn-info">Submit</button>
                <button type="reset" class="btn btn-warning">Cancel</button>
                </div>
                </div>
                </div>
                </div>
                                                    </div>

                                                    </div>
                                                </form>

                       </div>
     </div>
 </div>
 </div>



end of edditing form -->



          <!-- END PAGE HEADER-->

        <!--END PAGE CONTENT -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
