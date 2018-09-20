
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

  <div class="row">
    <span id="news_scroller" style="visibility:visible;">

    
    </span>
    </div>

    	<br/>

<div class="row">
 <div class="col-md-12">
              <div class="panel panel-primary">
                 <div class="panel-heading"><span class="fa fa-user"></span>&nbsp;SCHOOL ACCOUNTS MANAGEMENT</div>
     <div class="panel-body">
                <div style="display: block;" class="box-body">
                       <h4 class="form-section">Accounts Administration</h4>
                       <hr>
                       <?php
                         if(isset($_POST['department-add']))
                         {
                         $salu = $_POST['salutation'];
                         $email = $_POST['email'];
                          $name = $_POST['fullname'];
                          $phone = $_POST['phone'];
                          $faculty = $_POST['faculty_id'];
                          //$dept = $_POST['department_id'];
                           $status = "Y";
                           $level = $_POST['Role_id'];
                          $password = $_POST['password'];
                          $cnpassword = $_POST['conpassword'];
                          $code = md5(uniqid(rand()));
                          $pass=md5($password);

                         }
                       ?>
              <form class="form-vertical" method="post" enctype="multipart/form-data">
                  <div class="col-md-3 col-lg-4">
                      <div class="form-group has-feedback">
              <label>First Name: <span class="required">*</span></label>
                <input required name="salutation" type="text" class="form-control" placeholder="First Name">

              </div>

                  <div class="form-group has-feedback">
              <label>Last Name: <span class="required"> *</span></label>
                <input required name="fullname" type="text" class="form-control" placeholder="Last Name" >
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
              </div>
              <div class="form-group has-feedback">
              <label>Email Address: <span class="required"> *</span></label>
               <input required name="email" type="text" class="form-control" placeholder="Email Address" >
                 <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
              </div>
              </div>

              <div class="col-md-3 col-lg-4">
                  <div class="form-group has-feedback">
              <label>Phone Number: </label>
               <input required name="phone" type="text" class="form-control" placeholder="Phone Number" >
                 <span class="glyphicon glyphicon-phone form-control-feedback"></span>
              </div>
                   <div class="form-group">
                <label for="course Level">School Name: &nbsp;<span class="required">*</span></label>
                <select class="form-control" required="required" id="faculty" name="faculty_id">
                <option value ="">--Select School Name--</option>
                    <?php

                     foreach($faculty as $row) { ?>
                    <option value="<?php echo $row['faculty_id']; ?>"><?php echo $row['faculty_name']; ?></option>
                    <?php
                    } ?>
                </select>
              </div>

                </div>
                <div class="ccol-md-3 col-lg-4">
                     <div class="form-group">
                <label for="course Level">Administrative Level: &nbsp;<span class="required">*</span></label>
                  <select class="form-control" required="required" id="Level_id" name="Role_id">

                    <option value ="">--Select Administrative Level--</option>
                           <?php
                           foreach($adm as $rowlevel){
                               ?>
                           <option value="<?php echo $rowlevel['Role_id'];?>"><?php echo $rowlevel['Role_Name']; ?></option>
                              <?php
                           }
                            ?>
              </select>
              </div>
                  <div class="form-group has-feedback">
              <label>Password: <span class="required">*</span></label>
                <input required name="password" type="password" class="form-control" placeholder="Password" >
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              </div>
              <div class="form-group has-feedback">
              <label>Confirm Password: <span class="required">*</span> </label>
               <input required name="conpassword" type="password" class="form-control" placeholder="Password" >
                 <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              </div>
              </div>

               <div class="form-actions">
                <div class="row">
                <div class="col-md-6">
                <div class="row">
                <div class="col-md-offset-3 col-md-9">
                <button type="submit" name="department-add" class="btn btn-info">Submit</button>
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