<?php  require_once('../inc/header1.php');  ?>
    <?php
      $senderid=$_GET['chat_id'];
     if(!empty($senderid)){
      $messages=$conn->prepare("SELECT * FROM inquiries WHERE id='$senderid'");
      $messages->execute();
      $row=$messages->fetch(PDO::FETCH_ASSOC);
      $emailid = $row['Sender'];
         }
         else
         {
             header("Location: unreplied_messages");
         }

    ?>
      <!-- =============================================== --><!-- Left side column. contains the sidebar -->
       <?php include_once('include/sidebar.php');  ?>

      <!-- =============================================== --><!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Messages  <small>  Compose new message </small>
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">


  <span id="showingit"></span>

  <div class="row">
    <span id="news_scroller" style="visibility:hidden;">   </span>
    </div>

<div class="panel panel-primary">
  <div class="panel-heading">Our Chatting Platform</div>
  <div class="panel-body">
 <!-- Direct Chat -->
          <div class="row">
            <div class="col-md-6">
              <!-- DIRECT CHAT SUCCESS -->
              <div class="box box-success direct-chat direct-chat-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Direct Chat</h3>
                  <?php
                  //$row
                   $messagesall=$conn->prepare("SELECT * FROM inquiries WHERE id='$senderid'");
                   $messagesall->execute();
                    //$countmessages=$messages->rowCount();
                    while($rowchat = $messagesall->fetch(PDO::FETCH_ASSOC))
                    {
                  ?>
                  <div class="box-tools pull-right">
                    <span data-toggle="tooltip" title="0 Message" class="badge bg-green">0</span>
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <!-- Conversations are loaded here -->
                  <div class="direct-chat-messages">
                    <!-- Message. Default to the left -->
                    <div class="direct-chat-msg">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-left"><?php echo $emailid;  ?></span>
                        <span class="direct-chat-timestamp pull-right"><?php echo $rowchat['Sent_Date'];  ?></span>
                      </div><!-- /.direct-chat-info -->
                      <img class="direct-chat-img" src="../uploads/profile.jpg" alt="message user image"><!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                      <?php echo $row['Message'];  ?>
                      </div><!-- /.direct-chat-text -->
                    </div><!-- /.direct-chat-msg -->
                         <?php
                         $stmt = $conn->prepare("SELECT * FROM tblusers WHERE email=:uemail");
                        $stmt->execute(array(":uemail"=>$session_id));
                        $row = $stmt->fetch(PDO::FETCH_ASSOC);
                         ?>
                    <!-- Message to the right -->
                    <div class="direct-chat-msg right">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-right"><?php echo $row['fname']." ".$row['lname']; ?></span>
                        <span class="direct-chat-timestamp pull-left"><?php echo $rowchat['Reply_Date']; ?></span>
                      </div><!-- /.direct-chat-info -->
                      <img class="direct-chat-img" src="../uploads/<?php echo $row['photo'];  ?>" alt="message user image"><!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                       <?php echo $rowchat['Reply'];  ?>
                      </div><!-- /.direct-chat-text -->
                    </div><!-- /.direct-chat-msg -->
                    <?php
                       }
                    ?>
                  </div><!--/.direct-chat-messages-->

                </div><!-- /.box-body -->
                <div class="box-footer">
                    <?php
                       if(isset($_POST['reply_meso']))
                       {
                       $reply=$_POST['message'];
                       $stmt=$conn->prepare("UPDATE inquiries SET Reply='$reply',Reply_Date=NOW() WHERE id='$senderid'");
                       $stmt->execute();
                       echo "<div class='alert alert-success'>Successfully Replied</div>";
                       }

                    ?>
                  <form action="#" method="post" autocomplete="off">
                    <div class="input-group">
                      <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                      <span class="input-group-btn">
                        <button type="submit" name="reply_meso" class="btn btn-success btn-flat">Send</button>
                      </span>
                    </div>
                  </form>
                </div><!-- /.box-footer-->
              </div><!--/.direct-chat -->
            </div><!-- /.col -->
                <div class="col-md-6">

                </div>
          </div><!-- /.row -->

  </div>
</div>

        <!--END PAGE CONTENT -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
<?php require_once('../inc/footer.php'); ?>