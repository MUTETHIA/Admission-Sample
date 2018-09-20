       <?php
          foreach($user as $row){

          }
       ?>
      <!-- =============================================== --><!-- Left side column. contains the sidebar -->


      <!-- =============================================== --><!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
          <h1><img src="../images/new1.png" alt=""/>
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
 <div class="panel panel-primary">
 <div class="panel-heading">PERSONAL INFORMATION</div>
 <div class="panel-body">
                <div style="display: block;" class="box-body">
                       <h4 class="form-section">Personal Info &nbsp;&nbsp;&nbsp;<strong>SECTION A</strong></h4>
                       <hr>
                       <?php
                        echo $this->session->flashdata('success');
                         echo $this->session->flashdata('error');
                       ?>


                       <?php


                       if($check==0){
                           ?>
                              <form id="register" method="post" action="<?php echo site_url('Users/update_personal'); ?>" enctype="multipart/form-data" autocomplete="off">
              <div class="col-md-3 col-lg-4">
              <div class="form-group has-feedback">
              <label>First Name:<span class="required">*</span></label>
                <input required name="fname" value="<?php echo $row['fname']; ?>" type="text" readonly="readonly" class="form-control" placeholder="Product name" >
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
              </div>

               <div class="form-group has-feedback">
              <label>Postal Address: &nbsp;<span class="required">*</span></label>
                <input name="postal" id="postal" type="text" class="form-control" placeholder="P.O BOX 0000 - POSTAL CODE TOWN" value="" >
              </div>

           <div class="form-group">
                <label>Date of Birth:  <span class="required">*</span></label>
                <div class="input-group date" data-provide="datepicker"  data-date-format="yyyy-mm-dd" data-date-end-date="-16y">
                  <div class="input-group-addon"> <i class="fa fa-calendar"></i>  </div>
                  <input style="autoclose:true" type="text" name="dob" id="dob" class="form-control" readonly="readonly" value="" />
                </div>  </div>

               <div class="form-group has-feedback">
              <label>National ID/Passport:</label>
                <input name="idnumber" type="text" class="form-control" maxlength="8" value="" placeholder="ID Number" >
              </div>
                </div>
                <div class="col-md-3 col-lg-4">
              <div class="form-group has-feedback">
              <label>Middle Name:</label>
                <input name="mname" type="text" value="<?php echo $row['mname']; ?>" type="text" readonly="readonly" class="form-control" placeholder="Middle name" >
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
              </div>
              <div class="form-group">
                <label for="gender">Gender&nbsp;<span class="required">*</span></label>
                  <select class="form-control" required="required" id="gender" name="gender">
                    <option value ="">--SELECT Gender--</option>
                           <option value="M">MALE</option>
                         <option value="F">FEMALE</option>
                      </select>
              </div>
                 <div class="form-group has-feedback">
              <label>Email Address:</label>
                <input required name="email" type="text" value="<?php echo $row['email']; ?>" disabled="disabled" class="form-control" placeholder="Phone Number" >
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
              </div>

              </div>
              <div class="col-md-3 col-lg-4">
              <div class="form-group has-feedback">
              <label>Last Name:&nbsp;<span class="required">*</span></label>
                <input required name="lname" type="text" value="<?php echo $row['lname']; ?>" type="text" readonly="readonly" class="form-control" placeholder="Product name" >
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
              </div>
                <div class="form-group has-feedback">
              <label>Phone Number:</label>
                <input required name="phone" type="text" value="<?php echo $row['phone']; ?>" class="form-control" placeholder="PHONE NUMBER" >
                <span class="glyphicon glyphicon-phone form-control-feedback"></span>
              </div>
                <div class="form-group">
                <label for="country">Country: &nbsp;<span class="required">*</span></label>
                  <select class="form-control" required="required" id="country" name="country">
                       <option value ="">--SELECT Country--</option>
                       <?php
                         foreach($country as $state){
                             ?>
                           <option value="<?php echo $state['country_name']; ?>" ><?php echo $state['country_name']; ?></option>
                             <?php
                         }
                       ?>
                      </select>
              </div>

              </div>
                <div class="form-actions">
                <div class="row">
                <div class="col-md-12">
                <div class="row">
                <div class="col-md-offset-1 col-md-11">
                <button type="submit" name="updatedetails" class="btn btn-info">Submit</button>
                <button type="reset" class="btn btn-warning">Cancel</button>
                </div>
                </div>
                </div>
                <div class="col-md-6"> </div>
                </div>
                                                    </div>
              </form>
                           <?php
                       }
                       else{
                           ?>
                             <?php
                 foreach($personal_data as $rowApp){

                }
       ?>

            <form id="register" method="post" enctype="multipart/form-data" autocomplete="off">
              <div class="col-md-3 col-lg-4">
              <div class="form-group has-feedback">
              <label>First Name:<span class="required">*</span></label>
                <input required name="fname" value="<?php echo $row['fname']; ?>" type="text" readonly="readonly" class="form-control" placeholder="Product name" >
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
              </div>

               <div class="form-group has-feedback">
              <label>Postal Address: &nbsp;<span class="required">*</span></label>
                <input name="postal" id="postal" type="text" class="form-control" placeholder="P.O BOX 0000 - POSTAL CODE TOWN" value="<?php echo $rowApp['Postal_Address'];  ?>" >
              </div>

           <div class="form-group">
                <label>Date of Birth:  <span class="required">*</span></label>
                <div class="input-group date" data-provide="datepicker"  data-date-format="yyyy-mm-dd" data-date-end-date="-16y">
                  <div class="input-group-addon"> <i class="fa fa-calendar"></i>  </div>
                  <input style="autoclose:true" type="text" name="dob" id="dob" class="form-control" readonly="readonly" value="<?php echo $rowApp['DoB'];  ?>" />
                </div>  </div>

               <div class="form-group has-feedback">
              <label>National ID/Passport:</label>
                <input name="idnumber" type="text" class="form-control" maxlength="8" value="<?php echo $rowApp['idNumber'];  ?>" placeholder="ID Number" >
              </div>
                </div>
                <div class="col-md-3 col-lg-4">
              <div class="form-group has-feedback">
              <label>Middle Name:</label>
                <input name="mname" type="text" value="<?php echo $row['mname']; ?>" type="text" readonly="readonly" class="form-control" placeholder="Middle name" >
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
              </div>
              <div class="form-group">
                <label for="gender">Gender&nbsp;<span class="required">*</span></label>
                  <select class="form-control" required="required" id="gender" name="gender">
                    <option value ="">--SELECT Gender--</option>
                           <option value="M"<?php if($rowApp['Gender']=="M") echo 'selected="selected"';  ?> >MALE</option>
                         <option value="F" <?php if($rowApp['Gender']=="F") echo 'selected="selected"';  ?> >FEMALE</option>
                      </select>
              </div>
                 <div class="form-group has-feedback">
              <label>Email Address:</label>
                <input required name="email" type="text" value="<?php echo $row['email']; ?>" disabled="disabled" class="form-control" placeholder="Phone Number" >
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
              </div>

              </div>
              <div class="col-md-3 col-lg-4">
              <div class="form-group has-feedback">
              <label>Last Name:&nbsp;<span class="required">*</span></label>
                <input required name="lname" type="text" value="<?php echo $row['lname']; ?>" type="text" readonly="readonly" class="form-control" placeholder="Product name" >
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
              </div>
                <div class="form-group has-feedback">
              <label>Phone Number:</label>
                <input required name="phone" type="text" value="<?php echo $row['phone']; ?>" class="form-control" placeholder="PHONE NUMBER" >
                <span class="glyphicon glyphicon-phone form-control-feedback"></span>
              </div>
                <div class="form-group">
                <label for="country">Country: &nbsp;<span class="required">*</span></label>
                  <select class="form-control" required="required" id="country" name="country">
                       <option value ="">--SELECT Country--</option>
                       <?php
                         foreach($country as $state){
                             ?>
                           <option value="<?php echo $state['country_name']; ?>" <?php if($rowApp['Country']==$state['country_name']) echo 'selected="selected"';  ?> ><?php echo $state['country_name']; ?></option>
                             <?php
                         }
                       ?>
                      </select>
              </div>

              </div>
                <div class="form-actions">
                <div class="row">
                <div class="col-md-12">
                <div class="row">
                <div class="col-md-offset-1 col-md-11">
                <button type="submit" name="updatedetails" class="btn btn-info">Submit</button>
                <button type="reset" class="btn btn-warning">Cancel</button>
                </div>
                </div>
                </div>
                <div class="col-md-6"> </div>
                </div>
                                                    </div>
              </form>

                           <?php
                       }
                       ?>




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
