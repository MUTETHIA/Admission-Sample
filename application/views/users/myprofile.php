         <?php
           foreach($user as $row){

           }

         ?>
      <!-- =============================================== --><!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Account Manager            <small>  My Profile </small>
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">


  <span id="showingit"></span>

  <div class="row">
    <span id="news_scroller" style="visibility:hidden;">   </span>
    </div>
                  <div class="row">

    <div class="col-lg-6">

    <div class="panel panel-primary">
     <div class="panel-heading">Account Update</div>
     <div class="panel-body">
    	<div class="register-box-body">
          <div class="row"></div>
          <?php
            if(isset($_POST['save_account']))
            {
              //move_uploaded_file($_FILES['photo']['tmp_name'],"../uploads/".$_FILES['photo']['name']);
              $fname = $_POST['fname'];
              $mname = $_POST['mname'];
              $lname = $_POST['lname'];
              $email = $_POST['email'];
              $phone = $_POST['phone'];
              $imgFile = $_FILES['photo']['name'];
             $imageTmp = $_FILES['photo']['tmp_name'];
             $imageSize = $_FILES['photo']['size'];
             $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION));
             $valid = array('jpeg','jpg','png','gif');

              if(in_array($imgExt,$valid))
             {
                  move_uploaded_file($imageTmp,"../uploads/".$imgFile);
                 $stmt=$conn->prepare("UPDATE tblusers SET fname='$fname',mname='$mname',lname='$lname',email='$email',phone='$phone',photo='$imgFile' WHERE email='$_SESSION[user_session]'");
                 $stmt->execute();

                  echo "<div class='alert alert-success'>
				  <button class='close' data-dismiss='alert'>&times;</button>
				  <strong> Success!!! </strong>You have updated your Profile successfully.</div>";

             }
             else
             {

             }
            }
          ?>

            <form action="" method="post" enctype="multipart/form-data">
              <div class="form-group has-feedback">
                <input required name="fname" type="text" class="form-control" placeholder="First name" value="<?php echo $row['fname']; ?>">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
              </div>
               <div class="form-group has-feedback">
                <input  name="mname" type="text" class="form-control" placeholder="Middle name" value="<?php echo $row['mname']; ?>">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
              </div>
               <div class="form-group has-feedback">
                <input required name="lname" type="text" class="form-control" placeholder="Last name" value="<?php echo $row['lname']; ?>">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
              </div>
              <div class="form-group has-feedback">
                <input required name="email" readonly="readonly"  type="email" class="form-control" placeholder="Email" value="<?php echo $row['email']; ?>">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
              </div>
              <div class="form-group has-feedback">
                <input required name="phone" type="text" class="form-control" placeholder="Phone Number" value="<?php echo $row['phone']; ?>">
                <span class="glyphicon glyphicon-phone form-control-feedback"></span>
              </div>
              <div class="form-group has-feedback">
              <label> Passport</label>
                <input  name="photo" type="file" class="form-control" accept="image/*"  >
                <span class="glyphicon glyphicon-file form-control-feedback"></span>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <input name="save_account" type="submit" class="btn btn-primary btn-block btn-flat" value="Save Record" />
                </div><!-- /.col -->
              </div>
            </form>

      </div><!-- /.form-box -->

      </div>
      </div>
    </div><!--   end of first half -->

    <div class="col-lg-6">
    <div class="box box-widget widget-user-2">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-blue">
                  <div class="widget-user-image">
                  <?php if($row['photo'] !=""):  ?>
                    <img class="img-circle" src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" alt="User image">
                    <?php else: ?>
                    <img src="<?php echo base_url(); ?>public/uploads/profile.jpg" alt="Profile Picture" />
                    <?php endif; ?>
                  </div><!-- /.widget-user-image -->
                  <h3 class="widget-user-username"><?php echo $row['fname']." ".$row['lname'];   ?></h3>
                  <h5 class="widget-user-desc">Applicant</h5>
                </div>
                <div class="box-footer nso-padding">
                <div class="row" style="width: 98%; margin: auto;"> <div class="col-lg-12s">
                <h3> Password Update Form</h3>
                 <div class="row">

                    </div>
                    <?php
                  echo $this->session->flashdata('success');
                    echo $this->session->flashdata('error');
                    ?>
                 <form action="<?php echo site_url('Users/resetPassword'); ?>" id="register12" method="post" enctype="multipart/form-data">
                    <div class="form-group has-feedback">
                      <input required  name="password" type="password" id="password" class="form-control" placeholder="Enter New Password  ">
                      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                      <input required  name="password2" id="password2" type="password" class="form-control" placeholder="Enter Verify Password  ">
                      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                      <div class="col-xs-12">
                        <input name="change_password" type="submit" class="btn btn-primary btn-block btn-flat" value="Update Password" />
                      </div><!-- /.col -->


                    </div>
                  </form>
                  </div></div>



                </div>
              </div>

    </div>  <!--  end of second half -->
</div>
   
        <!--END PAGE CONTENT -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
