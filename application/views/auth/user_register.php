<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>User Registration | MMUST Online Course Application</title>
        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>public/images/MMUST LOGO.png" type="image/x-icon">
        <!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>public/plugins/bootstrap.base/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <!-- Bootstrap rtl -->
        <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
         <!-- Pe-icon-7-stroke -->
        <link href="<?php echo base_url(); ?>public/assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css">
        <!-- style css -->
        <link href="<?php echo base_url(); ?>public/assets/css/stylecrm.css" rel="stylesheet" type="text/css">
        <!-- Theme style rtl -->
        <!--<link href="assets/dist/css/stylecrm-rtl.css" rel="stylesheet" type="text/css"/>-->
    </head>
    <style>
    .error,.required{
        color: #CC0000;
    }
      .inst-logo {
    width:120px;
    height:90px;
    margin-top: 2px;
    margin-bottom: 3px;
    margin-left: 90px;
}
.inst-name {
    font-size:32px;
    font-weight:600;
}
    </style>
    <body>
        <!-- Content Wrapper -->
        <div class="login-wrapper">
            <div class="row" style="background-color: #688ACC;">
             <div class="col-md-10 col-md-offset-2" style="font-family: Arial, Helvetica, sans-serif; font-size: 30px; font-weight: 800; color: #FFFFFF;">
                 <img class="inst-logo" src="<?php echo base_url(); ?>public/images/MMUST LOGO.png" alt="">
   MMUST Online Course Application
             </div> </div>

            <div class="container-center lg" style="margin-top:35px;">
             <div class="login-area">
                <div class="panel panel-bd panel-custom">
                    <div class="panel-heading">
                        <div class="view-header">
                            <div class="header-icon">
                                <i class="pe-7s-unlock"></i>
                            </div>
                            <div class="header-title">
                                <h3>Create your account</h3>
                                <small><strong>Please enter your data to register.</strong></small>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                                     <?php
        /*require_once('config/dbconnect.php');

          if(isset($_POST['create_account'])){
          $fname = strtoupper($_POST['fname']);
          $mname = strtoupper($_POST['mname']);
          $lname = strtoupper($_POST['lname']);
          $fullname = $fname.' '.$lname;
          $email = $_POST['email'];
          $phone =$_POST['phone'];
          $response= $_POST['aboutus'];
          $pass1 = $_POST['password'];
          $pass2 = $_POST['password2'];
          $pass = md5($pass1);
          $role = 2;
          $statusN = "N";
          $code = md5(uniqid(rand()));
          $joining_date =date('Y-m-d H:i:s');
          $server= $_SERVER['SERVER_NAME'];

           try{
          $stmt = $conn->prepare("SELECT * FROM tblusers WHERE email=:uemail");
          $stmt->execute(array(":uemail"=>$email));
          $count=$stmt->rowCount();

          if($count==0){
          $register = $conn->prepare("INSERT INTO tblusers (fname,mname,lname,email,phone,password,Role_id,userStatus,token,date_registered)
          VALUES(:first,:middle,:last,:email,:mobile,:password,:role_id,:status,:code_gen,:join)");

          $resFeed=$conn->prepare("INSERT INTO about (email,response) VALUES(:email,:feedback)");
          $register->bindParam(':first',$fname);
          $register->bindParam(':middle',$mname);
          $register->bindParam(':last',$lname);
          $register->bindParam(':email',$email);
          $register->bindParam(':mobile',$phone);
          $register->bindParam(':password',$pass);
          $register->bindParam(':role_id',$role);
          $register->bindParam(':code_gen',$code);
          $register->bindParam(':status',$statusN);
          $register->bindParam(':join',$joining_date);
          $resFeed->bindParam(':email',$email);
          $resFeed->bindParam(':feedback',$response);
          $resFeed->execute();


          if($register->execute()){
               //$lastid = $conn->lastInsertId();
            require 'PHPMailer/PHPMailerAutoload.php';
            $mail = new PHPMailer;
            $logo = '<img src="https://'.$server.'/images/MMUST LOGO.PNG" alt="mmust logo" />';
            $newmail='
  <style type="text/css">
 	body {
		width: 100%;
		margin: 0;
		padding: 0;
		-webkit-font-smoothing: antialiased;
	}
	@media only screen and (max-width: 600px) {
		table[class="table-row"] {
			float: none !important;
			width: 98% !important;
			padding-left: 20px !important;
			padding-right: 20px !important;
		}
		table[class="table-row-fixed"] {
			float: none !important;
			width: 98% !important;
		}
		table[class="table-col"], table[class="table-col-border"] {
			float: none !important;
			width: 100% !important;
			padding-left: 0 !important;
			padding-right: 0 !important;
			table-layout: fixed;
		}
		td[class="table-col-td"] {
			width: 100% !important;
		}
		table[class="table-col-border"] + table[class="table-col-border"] {
			padding-top: 12px;
			margin-top: 12px;
			border-top: 1px solid #E8E8E8;
		}
		table[class="table-col"] + table[class="table-col"] {
			margin-top: 15px;
		}
		td[class="table-row-td"] {
			padding-left: 0 !important;
			padding-right: 0 !important;
		}
		table[class="navbar-row"] , td[class="navbar-row-td"] {
			width: 100% !important;
		}
		img {
			max-width: 100% !important;
			display: inline !important;
		}
		img[class="pull-right"] {
			float: right;
			margin-left: 11px;
            max-width: 125px !important;
			padding-bottom: 0 !important;
		}
		img[class="pull-left"] {
			float: left;
			margin-right: 11px;
			max-width: 125px !important;
			padding-bottom: 0 !important;
		}
		table[class="table-space"], table[class="header-row"] {
			float: none !important;
			width: 98% !important;
		}
		td[class="header-row-td"] {
			width: 100% !important;
		}
	}
	@media only screen and (max-width: 480px) {
		table[class="table-row"] {
			padding-left: 16px !important;
			padding-right: 16px !important;
		}
	}
	@media only screen and (max-width: 320px) {
		table[class="table-row"] {
			padding-left: 12px !important;
			padding-right: 12px !important;
		}
	}
	@media only screen and (max-width: 608px) {
		td[class="table-td-wrap"] {
			width: 100% !important;
		}
	}
  </style>
 <body style="font-family: Arial, sans-serif; font-size:13px; color: #444444; min-height: 200px;" bgcolor="#E4E6E9" leftmargin="0" topmargin="0" marginheight="0" marginwidth="0">
 <table width="100%" height="100%" bgcolor="#E4E6E9" cellspacing="0" cellpadding="0" border="0">
 <tr><td width="100%" align="center" valign="top" bgcolor="#E4E6E9" style="background-color:#E4E6E9; min-height: 200px;">
<table><tr><td class="table-td-wrap" align="center" width="608">
<table class="table-space" height="6" style="height: 6px; font-size: 0px; line-height: 0; width: 600px; background-color: #e4e6e9;" width="600" bgcolor="#E4E6E9" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td class="table-space-td" valign="middle" height="6" style="height: 6px; width: 600px; background-color: #e4e6e9;" width="600" bgcolor="#E4E6E9" align="left">&nbsp;</td></tr></tbody></table>
<table class="table-space" height="16" style="height: 16px; font-size: 0px; line-height: 0; width: 600px; background-color: #ffffff;" width="600" bgcolor="#FFFFFF" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td class="table-space-td" valign="middle" height="16" style="height: 16px; width: 600px; background-color: #ffffff;" width="600" bgcolor="#FFFFFF" align="left">&nbsp;</td></tr></tbody></table>

<table class="table-row" width="600" bgcolor="#FFFFFF" style="table-layout: fixed; background-color: #ffffff;" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td class="table-row-td" style="font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; padding-left: 24px; padding-right: 24px;" valign="top" align="left">
 <table class="table-col" align="left" width="552" cellspacing="0" cellpadding="0" border="0" style="table-layout: fixed;"><tbody><tr><td class="table-col-td" width="552" style="font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal;" valign="top" align="left">
	<div style="font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; text-align: center;">
		'.$logo.'</div>

 </td></tr></tbody></table>
</td></tr></tbody></table>

<table class="table-row" width="600" bgcolor="#FFFFFF" style="table-layout: fixed; background-color: #ffffff;" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td class="table-row-td" style="font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; padding-left: 36px; padding-right: 36px;" valign="top" align="left">
   <table class="table-col" align="left" width="528" cellspacing="0" cellpadding="0" border="0" style="table-layout: fixed;"><tbody><tr><td class="table-col-td" width="528" style="font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal;" valign="top" align="left">
	 <table class="header-row" width="528" cellspacing="0" cellpadding="0" border="0" style="table-layout: fixed;"><tbody><tr><td class="header-row-td" width="528" style="font-size: 28px; margin: 0px; font-family: Arial, sans-serif; font-weight: normal; line-height: 19px; color: #478fca; padding-bottom: 10px; padding-top: 15px;" valign="top" align="left">
     <br><br>
     Hi, '.$fullname.'</td></tr></tbody></table>
	 <table class="header-row" width="528" cellspacing="0" cellpadding="0" border="0" style="table-layout: fixed;">
	     <tbody><tr><td class="header-row-td" width="528" style="font-family: Arial, sans-serif; font-weight: normal; line-height: 19px; color: #444444; margin: 0px; font-size: 18px; padding-bottom: 8px; padding-top: 10px;" valign="top" align="left">
	    Thanks for choosing MMUST as your university of achieving your goals.<br>

        </td></tr></tbody></table>
   </td></tr></tbody></table>
</td></tr></tbody></table>


<table class="table-space" height="12" style="height: 12px; font-size: 0px; line-height: 0; width: 600px; background-color: #ffffff;" width="600" bgcolor="#FFFFFF" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td class="table-space-td" valign="middle" height="12" style="height: 12px; width: 600px; background-color: #ffffff;" width="600" bgcolor="#FFFFFF" align="left">&nbsp;</td></tr></tbody></table>
<table class="table-row" width="600" bgcolor="#FFFFFF" style="table-layout: fixed; background-color: #ffffff;" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td class="table-row-td" style="font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; padding-left: 36px; padding-right: 36px;" valign="top" align="left">
   <table class="table-col" align="left" width="528" cellspacing="0" cellpadding="0" border="0" style="table-layout: fixed;"><tbody><tr><td class="table-col-td" width="528" style="font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal;" valign="top" align="left">
	 <table width="100%" cellspacing="0" cellpadding="0" border="0" style="table-layout: fixed;"><tbody><tr><td width="100%" bgcolor="#d9edf7" style="font-family: Arial, sans-serif; line-height: 19px; color: #240000; font-size: 14px; font-weight: normal; padding: 15px; border: 1px solid #bce8f1; background-color: #d9edf7;" valign="top" align="left">
	   Please click on the below link to activate your account. We respect your data.
	   <br>
	   <a href="http://'.$server.'/verify.php?code='.$code.'" style="color: #428bca; text-decoration: none; background-color: transparent;">My Account Activation Link</a>
	 </td></tr></tbody></table>
   </td></tr></tbody></table>
</td></tr></tbody></table>
<table class="table-space" height="24" style="height: 24px; font-size: 0px; line-height: 0; width: 600px; background-color: #ffffff;" width="600" bgcolor="#FFFFFF" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td class="table-space-td" valign="middle" height="24" style="height: 24px; width: 600px; background-color: #ffffff;" width="600" bgcolor="#FFFFFF" align="left">&nbsp;</td></tr></tbody></table>

<table class="table-row" width="600" bgcolor="#FFFFFF" style="table-layout: fixed; background-color: #ffffff;" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td class="table-row-td" style="font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; padding-left: 36px; padding-right: 36px;" valign="top" align="left">
 <table class="table-col" align="left" width="528" cellspacing="0" cellpadding="0" border="0" style="table-layout: fixed;"><tbody><tr><td class="table-col-td" width="528" style="font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; width: 528px;" valign="top" align="left">
 </td></tr></tbody></table>
</td></tr></tbody></table>

<table class="table-space" height="6" style="height: 6px; font-size: 0px; line-height: 0; width: 600px; background-color: #ffffff;" width="600" bgcolor="#FFFFFF" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td class="table-space-td" valign="middle" height="6" style="height: 6px; width: 600px; background-color: #ffffff;" width="600" bgcolor="#FFFFFF" align="left">&nbsp;</td></tr></tbody></table>

<table class="table-space" height="12" style="height: 12px; font-size: 0px; line-height: 0; width: 600px; background-color: #ffffff;" width="600" bgcolor="#FFFFFF" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td class="table-space-td" valign="middle" height="12" style="height: 12px; width: 600px; padding-left: 18px; padding-right: 18px; background-color: #ffffff;" width="600" bgcolor="#FFFFFF" align="center">&nbsp;<table bgcolor="#E8E8E8" height="0" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td bgcolor="#E8E8E8" height="1" width="100%" style="height: 1px; font-size:0;" valign="top" align="left">&nbsp;</td></tr></tbody></table></td></tr></tbody></table>

<table class="table-space" height="8" style="height: 8px; font-size: 0px; line-height: 0; width: 600px; background-color: #ffffff;" width="600" bgcolor="#FFFFFF" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td class="table-space-td" valign="middle" height="8" style="height: 8px; width: 600px; background-color: #ffffff;" width="600" bgcolor="#FFFFFF" align="left">&nbsp;</td></tr></tbody></table>

<table class="table-row" width="600" bgcolor="#FFFFFF" style="table-layout: fixed; background-color: #ffffff;" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td class="table-row-td" style="font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; padding-left: 36px; padding-right: 36px;" valign="top" align="left">
   <table class="table-col" align="left" width="273" style="padding-right: 18px; table-layout: fixed;" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td class="table-col-td" width="255" style="font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal;" valign="top" align="left">
	<table class="header-row" width="255" cellspacing="0" cellpadding="0" border="0" style="table-layout: fixed;"><tbody><tr><td class="header-row-td" width="255" style="font-family: Arial, sans-serif; font-weight: normal; line-height: 19px; color: #478fca; margin: 0px; font-size: 18px; padding-bottom: 8px; padding-top: 10px;" valign="top" align="left">Our Social Channels</td></tr></tbody></table>

	<div style="font-family: Arial, sans-serif; line-height: 36px; color: #444444; font-size: 13px;">
		<a href="#" style="color: #ffffff; text-decoration: none; margin: 0px; text-align: center; vertical-align: baseline; border: 4px solid #6fb3e0; padding: 4px 9px; font-size: 14px; line-height: 19px; background-color: #6fb3e0;">Twitter</a>
		<a href="https://www.facebook.com/MMUST-Masinde-Muliro-University-of-Science-and-Technology-Official-107094349380653" style="color: #6688a6; text-decoration: none; margin: 0px; text-align: center; vertical-align: baseline; border-width: 1px 1px 2px; border-style: solid; border-color: #8aafce; padding: 6px 12px; font-size: 14px; line-height: 20px; background-color: #ffffff;">Facebook</a>
		<a href="#" style="color: #b7837a; text-decoration: none; margin: 0px; text-align: center; vertical-align: baseline; border-width: 1px 1px 2px; border-style: solid; border-color: #d7a59d; padding: 6px 12px; font-size: 14px; line-height: 20px; background-color: #ffffff;">Google+</a>
	</div>
   </td></tr></tbody></table>

   <table class="table-col" align="left" width="255" cellspacing="0" cellpadding="0" border="0" style="table-layout: fixed;"><tbody><tr><td class="table-col-td" width="255" style="font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal;" valign="top" align="left">
	<table class="header-row" width="255" cellspacing="0" cellpadding="0" border="0" style="table-layout: fixed;"><tbody><tr><td class="header-row-td" width="255" style="font-family: Arial, sans-serif; font-weight: normal; line-height: 19px; color: #478fca; margin: 0px; font-size: 18px; padding-bottom: 8px; padding-top: 10px;" valign="top" align="left">Our Contact Info</td></tr></tbody></table>
	Phone: 056-31375
	<br>
	Email: admissions@mmust.ac.ke
   </td></tr></tbody></table>
</td></tr></tbody></table>
<table class="table-space" height="16" style="height: 16px; font-size: 0px; line-height: 0; width: 600px; background-color: #ffffff;" width="600" bgcolor="#FFFFFF" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td class="table-space-td" valign="middle" height="16" style="height: 16px; width: 600px; background-color: #ffffff;" width="600" bgcolor="#FFFFFF" align="left">&nbsp;</td></tr></tbody></table>


<table class="table-space" height="6" style="height: 6px; font-size: 0px; line-height: 0; width: 600px; background-color: #e4e6e9;" width="600" bgcolor="#E4E6E9" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td class="table-space-td" valign="middle" height="6" style="height: 6px; width: 600px; background-color: #e4e6e9;" width="600" bgcolor="#E4E6E9" align="left">&nbsp;</td></tr></tbody></table>
<table class="table-row" width="600" bgcolor="#FFFFFF" style="table-layout: fixed; background-color: #ffffff;" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td class="table-row-td" style="font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; padding-left: 36px; padding-right: 36px;" valign="top" align="left">
 <table class="table-col" align="left" width="528" cellspacing="0" cellpadding="0" border="0" style="table-layout: fixed;"><tbody><tr><td class="table-col-td" width="528" style="font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal;" valign="top" align="left">
	 <table class="table-space" height="16" style="height: 16px; font-size: 0px; line-height: 0; width: 528px; background-color: #ffffff;" width="528" bgcolor="#FFFFFF" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td class="table-space-td" valign="middle" height="16" style="height: 16px; width: 528px; background-color: #ffffff;" width="528" bgcolor="#FFFFFF" align="left">&nbsp;</td></tr></tbody></table>
	 <div style="font-family: Arial, sans-serif; line-height: 19px; color: #777777; font-size: 14px; text-align: center;">&copy; 2017 by MASINDE MULIRO UNIVERSITY OF SCIENCE & TECHNOLOGY</div>
	 <table class="table-space" height="12" style="height: 12px; font-size: 0px; line-height: 0; width: 528px; background-color: #ffffff;" width="528" bgcolor="#FFFFFF" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td class="table-space-td" valign="middle" height="12" style="height: 12px; width: 528px; background-color: #ffffff;" width="528" bgcolor="#FFFFFF" align="left">&nbsp;</td></tr></tbody></table>
	 <div style="font-family: Arial, sans-serif; line-height: 19px; color: #bbbbbb; font-size: 13px; text-align: center;">
		<a href="#" style="color: #428bca; text-decoration: none; background-color: transparent;">Terms</a>
		&nbsp;|&nbsp;
		<a href="#" style="color: #428bca; text-decoration: none; background-color: transparent;">Privacy</a>
		&nbsp;|&nbsp;
	 </div>
	 <table class="table-space" height="16" style="height: 16px; font-size: 0px; line-height: 0; width: 528px; background-color: #ffffff;" width="528" bgcolor="#FFFFFF" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td class="table-space-td" valign="middle" height="16" style="height: 16px; width: 528px; background-color: #ffffff;" width="528" bgcolor="#FFFFFF" align="left">&nbsp;</td></tr></tbody></table>
 </td></tr></tbody></table>
</td></tr></tbody></table>
<table class="table-space" height="8" style="height: 8px; font-size: 0px; line-height: 0; width: 600px; background-color: #e4e6e9;" width="600" bgcolor="#E4E6E9" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td class="table-space-td" valign="middle" height="8" style="height: 8px; width: 600px; background-color: #e4e6e9;" width="600" bgcolor="#E4E6E9" align="left">&nbsp;</td></tr></tbody></table></td></tr></table>
</td></tr>
 </table>';

//production for  SMTP for GMAIL
        $mail->Mailer = "smtp";
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPSecure = 'ssl';
        $mail->SMTPAuth = true;
        $mail->Username = 'app@mmust.ac.ke';
        $mail->Password = 'application@2018';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->smtpConnect([
    'ssl' => [
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    ]
]);
        $mail->setFrom('app@mmust.ac.ke', 'MMUST Online Course Application');
        $mail->addAddress($email,'');
        $mail->isHTML(true);
          $mail->Subject = 'Account Activation';
          $mail->Body = $newmail;
        //end of SMTP configuration
             if ($mail->send()) {
          echo "<div class='alert alert-success'>
		  <button class='close' data-dismiss='alert'>&times;</button></strong>Success!</strong>  We've sent an email to $email.
                    Please click on the confirmation link in the email to create your account. </div>";

          }
           else{
                   echo "<div class='alert alert-danger'>
				  <button class='close' data-dismiss='alert'>&times;</button><strong>Sorry !</strong> Query could not be executed
			        </div>";
               }
               }
          }
           else  {
              echo "<div class='alert alert-danger'>
				<button class='close' data-dismiss='alert'>&times;</button><strong>Sorry !</strong> email already exists , Please Try another one
			  </div>";
             }
             }
            catch(PDOException $e){
                     echo "Error in connection".$e->getMessage();
            }

           }*/
        ?>
                                    
                        <form id="register12" method="post" >
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label>Surname:  <span class="required">*</span></label>
                                    <input  name="fname" type="text" id="fname" class="form-control" placeholder="Enter Surname">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Middle Name: </label>
                                    <input name="mname" type="text" id="mname" class="form-control" placeholder="Middle name">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>First Name: <span class="required">*</span></label>
                                    <input name="lname" type="text" id="lname" required="required" class="form-control" placeholder="First name">
                                </div>

                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label>Mobile Number:  <span class="required">*</span></label>
                                    <input name="phone" type="text" id="phone" required="required" class="form-control" maxlength="13" placeholder="+countrycodePhone Number">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>How did know about Us:</label>
                                   <select name="aboutus" id="aboutus" required="required" class="form-control">
                                      <option value="">~~Select How you Got Us~~</option>
                                      <option value="Newspaper">Newspaper</option>
                                       <option value="University Website">University Website</option>
                                        <option value="Former/Current Student">Former/Current Student</option>
                                         <option value="Social Media">Social Media</option>
                                         <option value="Career Talks">Career Talks</option>
                                         <option value="A Friend">A Friend</option>
                                         <option value="Radio">Radio</option>
                                         <option value="Television">Television</option>
                                         <option value="Other">Other</option>
                                   </select>

                                </div>
                                <div class="form-group col-md-4">
                                    <label>Email Address: <span class="required">*</span></label>
                                    <input name="email" type="email" id="email" required="required" class="form-control" placeholder="Email Address">
                                </div>

                            </div>

                            <div class="row">
                            <div class="form-group col-md-6">
                                <label>Password: <span class="required">*</span></label>
                                    <input name="password" type="password" id="password" required="required" class="form-control" placeholder="Enter Password">
                            </div>

                            <div class="form-group col-md-6">
                                <label>Confirm Password: <span class="required">*</span></label>
                                    <input name="password2" type="password" id="password2" required="required" class="form-control" placeholder="Retype password">
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-12">
                                <input class="css-checkbox" name="agree_term" id="agree_term" required="required" type="checkbox" />
                                <label class="css-label" for="USER_AGREE">I Agree to the <a href="<?php echo site_url('Site/terms_conditions'); ?>" target="_blank" >Terms and conditions</a></label>        </div>
                        </div>
                        <hr/>
                            <div class="row">
                                <div class="col-md-4">
                                <button class="btn btn-info" type="submit" name="create_account" id="register"><i class="glyphicon glyphicon-ok"></i>  Register</button>
                        <button type="reset" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Reset</button>
                         </div>

                            <div class="col-md-4">
                                  <a class="btn btn-add" href="user_login"><i class="fa fa-lock"></i><i class="glyphicon glyphicon-log-in"></i> Login</a>
                            </div>

                            </div>
                        </form>

                        </div>
                    </div>
                </div>
            </div>
             <footer class="main-footer">
            <strong>Copyright &copy; 2017-  <?php echo date('Y'); ?> <br>
            Incase of any queries please Email to <a href="mailto:admissions@mmust.ac.ke">admissions@mmust.ac.ke</a>.</strong><br> Phone numbers: <strong>+254702597360</strong><br> All rights reserved.
         </footer>
        </div>
        <!-- /.content-wrapper -->
        <!-- jQuery -->
        <script src="<?php echo base_url(); ?>public/assets/plugins/jQuery/jquery.min.js" type="text/javascript"></script>

         <script src="<?php echo base_url(); ?>public/js/validator.js" type="text/javascript"></script>
        <!-- bootstrap js -->
        <script src="<?php echo base_url(); ?>public/assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
         <script  src="<?php echo base_url(); ?>public/js/jquery.validate.js"></script>
  <script  src="<?php echo base_url(); ?>public/js/additional-methods.js"></script>
    </body>
</html>