<?php

session_start();
$role=  $_SESSION['role_session'];
if(!isset($_SESSION['user_session'])  && $role!=2)
{
        header("Location:../index");
}
else{
     require_once('../config/dbconnect.php');
    $session_id= $_SESSION['user_session'];
    $stmt = $conn->prepare("SELECT * FROM tblusers WHERE email=:uemail");
    $stmt->execute(array(":uemail"=>$session_id));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

}
    ?>
    <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                            <div class="panel-heading"><i class="glyphicon glyphicon-education"></i>&nbsp;&nbsp;COURSE APPLIED</div>
                            <div class="panel-body">
 <div class="table-responsive">
                                                     <table class="table table-striped table-condensed  table-hover dataTables" id="dataTables-catalogueList">
                                                    <thead>
                                                        <tr>
                                                            <th>Course Level</th>
                                                            <th>Course Name </th>
                                                            <th>Mode of Study</th>
                                                            <th>Campus</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php

                                                              $courseApplied = $conn ->prepare("SELECT course_levels.Level_Name, programmes.programme, applicants_course_details.*, campuses.Campus_Name
FROM course_levels INNER JOIN applicants_course_details ON (course_levels.Level_id = applicants_course_details.Level_id)
        INNER JOIN campuses ON (applicants_course_details.Campus = campuses.Campus_id)
        INNER JOIN programmes ON (programmes.qualification = course_levels.Level_id) AND (programmes.code = applicants_course_details.Course_id)WHERE (applicants_course_details.Email_Address=:uemail)");
$courseApplied ->execute(array(":uemail"=>$session_id));
  if($courseApplied->rowCount() > 0) {
                                                      for($i=1;$row=$courseApplied->fetch(PDO::FETCH_ASSOC);$i++){
                                                          $id=$row['Email_Address'];
                                                          ?>
                                                           <tr>
                                                           <td><?php echo $row['Level_Name'];  ?></td>
                                                            <td><?php echo $row['programme'];  ?></td>
                                                            <td><?php echo $row['Mode_Of_Study'];  ?></td>
                                                            <td><?php echo $row['Campus_Name'];  ?></td>
                                                            <td><a id="delete_user_course" data-id="<?php echo $id; ?>" href="javascript:void(0)" class="btn btn-danger">Delete</a>    </td>
                                                           </tr>
                                                          <?php
                                                      }
                                                     }
                                                      else {
 ?>
        <tr>
        <td colspan="5">No Courses applied so far.</td>
        </tr>
        <?php
   }
?>


                                                     </tbody>
                                                </table>
                                            </div>
                                             </div>
                            </div>
            </div>
       </div>
