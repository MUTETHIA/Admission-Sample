    $(document).ready(function(){
        //approval of applicants by the dean
        $(document).on('click', '#approve_applicant', function(e){
            var applicantId = $(this).data('id');
            SwalApprove(applicantId);
            e.preventDefault();
        });


          //approval of payments by director
        $(document).on('click', '#approve_payment', function(e){
            var applicantId = $(this).data('id');
            SwalApprovePayment(applicantId);
            e.preventDefault();
        });


     //disapproval of payments by director
        $(document).on('click', '#disapprove_payment', function(e){
            var applicantId = $(this).data('id');
            SwalDisApprovePayment(applicantId);
            e.preventDefault();
        });

          //disapproval of applicants by the dean
        $(document).on('click', '#disapprove_applicant_dean', function(e){
            var app = $(this).data('id');
            SwalDisApproveDean(app);
            e.preventDefault();
        });
    //delete of announcements
        $(document).on('click', '#delete_announcement', function(e){
            var announcementId = $(this).data('id');
            SwalDeleteAnnouncement(announcementId);
            e.preventDefault();
        });



         //delete of campus
        $(document).on('click', '#delete_campus', function(e){
            var campusId = $(this).data('id');
            SwalDeleteCampus(campusId);
            e.preventDefault();
        });

         //close the intake duration
        $(document).on('click', '#close_intake', function(e){
            var intake = $(this).data('id');
            SwalCloseIntake(intake);
            e.preventDefault();
        });


          //delete the applied course
        $(document).on('click', '#delete_user_course', function(e){
            var course = $(this).data('id');
            SwalDeleteUserCourse(course);
            e.preventDefault();
        });
       //approve by department status
         $(document).on('click', '#approve_applicant3', function(e){
            var applicantId3 = $(this).data('id');
            SwalApprove3(applicantId3);
            e.preventDefault();
        });

        //disaaprove by department status
          $(document).on('click', '#disapprove_applicant', function(e){
            var applicantId3 = $(this).data('id');
            SwalDisApprove(applicantId3);
            e.preventDefault();
        });

        //ignore the communication from a user
           $(document).on('click', '#ignore', function(e){
            var inquiry = $(this).data('id');
            SwalIgnoreInquiry(inquiry);
            e.preventDefault();
        });

        //delete programmes in delete functionality
           $(document).on('click', '#delete_programme', function(e){
            var programmeId = $(this).data('id');
            SwalDeleteProgramme(programmeId);
            e.preventDefault();
        });

         //delete uploads by the user in delete functionality
           $(document).on('click', '#delete_uploads', function(e){
            var uploadId = $(this).data('id');
            SwalDeleteUpload(uploadId);
            e.preventDefault();
        });

         //delete department in delete functionality
           $(document).on('click', '#delete_dept', function(e){
            var departmentId = $(this).data('id');
            SwalDeleteDepartment(departmentId);
            e.preventDefault();
        });


        //delete school in delete functionality
           $(document).on('click', '#delete_school', function(e){
            var facultyId = $(this).data('id');
            SwalDeleteFaculty(facultyId);
            e.preventDefault();
        });

        //generation of admission letters by the registrar
           $(document).on('click', '#approve_regi', function(e){
            var applicant = $(this).data('id');
            SwalGenerateLetter(applicant);
            e.preventDefault();
        });

    });




    function SwalDeleteProgramme(programmeId){
        swal({
            title: 'Delete the Programme??',
            text: "It will be deleted permanently!",
            type: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Delete!',
            showLoaderOnConfirm: true,
            preConfirm: function() {
              return new Promise(function(resolve) {
                 $.ajax({
               		url: 'delete_course.php',
                	type: 'POST',
                   	data: 'delete_course='+programmeId,
                   	dataType: 'json'
                 })
                 .done(function(response){
                 	swal('Deleted!', response.message, response.status);
                    //window.location.reload(forceGet);
                     window.location.reload(true);
                 })
                 .fail(function(){
                 	swal('Oops...', 'Something went wrong with ajax !', 'error');
                 });
              });
            },
            allowOutsideClick: false
        });
    }


    function SwalDeleteUserCourse(course){
        swal({
            title: 'Delete the Applied Course?',
            text: "It will be deleted permanently!",
            type: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Delete!',
            showLoaderOnConfirm: true,
            preConfirm: function() {
              return new Promise(function(resolve) {
                 $.ajax({
               		url: 'delete_user_course.php',
                	type: 'POST',
                   	data: 'delete_course='+course,
                   	dataType: 'json'
                 })
                 .done(function(response){
                 	swal('Deleted!', response.message, response.status);
                    //window.location.reload(forceGet);
                     window.location.reload(true);
                 })
                 .fail(function(){
                 	swal('Oops...', 'Something went wrong with ajax !', 'error');
                 });
              });
            },
            allowOutsideClick: false
        });
    }

     function SwalDeleteUpload(uploadId){
        swal({
            title: 'Delete the Uploaded Document??',
            text: "It will be deleted permanently!",
            type: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Delete!',
            showLoaderOnConfirm: true,
            preConfirm: function() {
              return new Promise(function(resolve) {
                 $.ajax({
               		url: 'delete_upload.php',
                	type: 'POST',
                   	data: 'delete_upload='+uploadId,
                   	dataType: 'json'
                 })
                 .done(function(response){
                 	swal('Deleted!', response.message, response.status);
                    //window.location.reload(forceGet);
                     window.location.reload(true);
                 })
                 .fail(function(){
                 	swal('Oops...', 'Something went wrong with ajax !', 'error');
                 });
              });
            },
            allowOutsideClick: false
        });
    }

        function SwalCloseIntake(intake){
        swal({
            title: 'Close the Intake Duration??',
            text: "It will be closed permanently!",
            type: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Close!',
            showLoaderOnConfirm: true,
            preConfirm: function() {
              return new Promise(function(resolve) {
                 $.ajax({
               		url: 'close_intake.php',
                	type: 'POST',
                   	data: 'close='+intake,
                   	dataType: 'json'
                 })
                 .done(function(response){
                 	swal('Closed!', response.message, response.status);
                    //window.location.reload(forceGet);
                     window.location.reload(true);
                 })
                 .fail(function(){
                 	swal('Oops...', 'Something went wrong with ajax !', 'error');
                 });
              });
            },
            allowOutsideClick: false
        });
    }


     function SwalDeleteDepartment(departmentId){
        swal({
            title: 'Delete the Department??',
            text: "It will be deleted permanently!",
            type: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Delete!',
            showLoaderOnConfirm: true,
            preConfirm: function() {
              return new Promise(function(resolve) {
                 $.ajax({
               		url: 'delete_dept.php',
                	type: 'POST',
                   	data: 'delete_department='+departmentId,
                   	dataType: 'json'
                 })
                 .done(function(response){
                 	swal('Deleted!', response.message, response.status);
                    //window.location.reload(forceGet);
                     window.location.reload(true);
                 })
                 .fail(function(){
                 	swal('Oops...', 'Something went wrong with ajax !', 'error');
                 });
              });
            },
            allowOutsideClick: false
        });
    }


    //delete the school/faculty
     function SwalDeleteFaculty(facultyId){
        swal({
            title: 'Delete the Faculty??&nbsp;&nbsp;',
            text: "It will be deleted permanently!",
            type: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Delete!',
            showLoaderOnConfirm: true,
            preConfirm: function() {
              return new Promise(function(resolve) {
                 $.ajax({
               		url: 'delete_school.php',
                	type: 'POST',
                   	data: 'delete_faculty='+facultyId,
                   	dataType: 'json'
                 })
                 .done(function(response){
                 	swal('Deleted!', response.message, response.status);
                    //window.location.reload(forceGet);
                     window.location.reload(true);
                 })
                 .fail(function(){
                 	swal('Oops...', 'Something went wrong with ajax !', 'error');
                 });
              });
            },
            allowOutsideClick: false
        });
    }
    //generate admission letters of the applicants
        function SwalGenerateLetter(applicant){
        swal({
            title: 'Generate Letter?',
            text: "It will be updated permanently!",
            type: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Generate!',
            showLoaderOnConfirm: true,
            preConfirm: function() {
              return new Promise(function(resolve) {
                 $.ajax({
               		url: 'approve_letter.php',
                	type: 'POST',
                   	data: 'approve='+applicant,
                   	dataType: 'json'
                 })
                 .done(function(response){
                 	swal('Generated!', response.message, response.status);
                    //window.location.reload(forceGet);
                    window.location.href='admissionletter?mail_id='+applicant;
                    //window.open('admissionletter');
                 })
                 .fail(function(){
                 	swal('Oops...', 'Something went wrong with ajax !', 'error');
                 });
              });
            },
            allowOutsideClick: false
        });
    }
       //approve the applicant at the faculty
    function SwalApprove(applicantId){
        swal({
            title: 'Sure to Approve?',
            text: "It will be updated permanently!",
            type: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Approve,!',
            showLoaderOnConfirm: true,
            preConfirm: function() {
              return new Promise(function(resolve) {
                 $.ajax({
               		url: 'approve.php',
                	type: 'POST',
                   	data: 'approve='+applicantId,
                   	dataType: 'json'
                 })
                 .done(function(response){
                 	swal('Approved!', response.message, response.status);
                    //window.location.reload(forceGet);
                     window.location.reload(true);
                 })
                 .fail(function(){
                 	swal('Oops...', 'Something went wrong with ajax !', 'error');
                 });
              });
            },
            allowOutsideClick: false
        });
    }







       //approve the applicant at the faculty
    function SwalApprovePayment(applicantId){
        swal({
            title: 'Sure to Approve payment?',
            text: "It will be updated permanently!",
            type: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Approve,!',
            showLoaderOnConfirm: true,
            preConfirm: function() {
              return new Promise(function(resolve) {
                 $.ajax({
               		url: 'approve_payment.php',
                	type: 'POST',
                   	data: 'approve='+applicantId,
                   	dataType: 'json'
                 })
                 .done(function(response){
                 	swal('Approved!', response.message, response.status);
                    //window.location.reload(forceGet);
                     window.location.reload(true);
                 })
                 .fail(function(){
                 	swal('Oops...', 'Something went wrong with ajax !', 'error');
                 });
              });
            },
            allowOutsideClick: false
        });
    }



       //approve the applicant at the faculty
    function SwalDisApprovePayment(applicantId){
        swal({
            title: 'Disapprove payment?',
            text: "It will be updated permanently!",
            type: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Disapprove,!',
            showLoaderOnConfirm: true,
            preConfirm: function() {
              return new Promise(function(resolve) {
                 $.ajax({
               		url: 'disapprove_payment.php',
                	type: 'POST',
                   	data: 'disapprove='+applicantId,
                   	dataType: 'json'
                 })
                 .done(function(response){
                 	swal('Disapproved!', response.message, response.status);
                    //window.location.reload(forceGet);
                     window.location.reload(true);
                 })
                 .fail(function(){
                 	swal('Oops...', 'Something went wrong with ajax !', 'error');
                 });
              });
            },
            allowOutsideClick: false
        });
    }


    //disapprove the applicant at the faculty
    function SwalDisApproveDean(app){
        swal({
            title: 'Sure to Disapprove?',
            text: "It will be updated permanently!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes,Decline!',
            showLoaderOnConfirm: true,
            preConfirm: function() {
              return new Promise(function(resolve) {
                 $.ajax({
               		url: 'disapprove_faculty.php',
                	type: 'POST',
                   	data: 'disapprove='+app,
                   	dataType: 'json'
                 })
                 .done(function(response){
                 	swal('Disapproved!', response.message, response.status);
                    window.location.reload(true);
                 })
                 .fail(function(){
                 	swal('Oops...', 'Something went wrong with ajax !', 'error');
                 });
              });
            },
            allowOutsideClick: false
        });
    }

   //approve the applicant at the department
    function SwalApprove3(applicantId3){
        swal({
            title: 'Sure to Approve?',
            text: "It will be updated permanently!",
            type: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Approve,!',
            showLoaderOnConfirm: true,

            preConfirm: function() {
              return new Promise(function(resolve) {

                 $.ajax({
               		url: 'approve.php',
                	type: 'POST',
                   	data: 'approve='+applicantId3,
                   	dataType: 'json'
                 })
                 .done(function(response){
                 	swal('Approved!', response.message, response.status);
                    window.location.reload(true);
                 })
                 .fail(function(){
                 	swal('Oops...', 'Something went wrong with ajax !', 'error');
                 });
              });
            },
            allowOutsideClick: false
        });

    }
     //disaaprove the applicant at department level
     function SwalDisApprove(applicantId3){
        swal({
            title: 'Disapprove the applicant?',
            text: "It will be updated permanently!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Disapprove,!',
            showLoaderOnConfirm: true,

            preConfirm: function() {
              return new Promise(function(resolve) {
                 $.ajax({
               		url: 'disapprove_dept.php',
                	type: 'POST',
                   	data: 'disapprove='+applicantId3,
                   	dataType: 'json'
                 })
                 .done(function(response){
                 	swal('Disapproved!', response.message, response.status);
                     window.location.reload(true);
                 })
                 .fail(function(){
                 	swal('Oops...', 'Something went wrong with ajax !', 'error');
                 });
              });
            },
            allowOutsideClick: false
        });
    }


     function SwalDeleteAnnouncement(announcementId){
        swal({
            title: 'Sure Delete Announcement?',
            text: "It will be deleted permanently!",
            type: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Delete, Yes!',
            showLoaderOnConfirm: true,
            preConfirm: function() {
              return new Promise(function(resolve) {

                 $.ajax({
               		url: 'delete_announcements.php',
                	type: 'POST',
                   	data: 'delete='+announcementId,
                   	dataType: 'json'
                 })
                 .done(function(response){
                 	swal('Deleted!', response.message, response.status);
                    window.location.reload(true);
                 })
                 .fail(function(){
                 	swal('Oops...', 'Something went wrong with ajax !', 'error');
                 });
              });
            },
            allowOutsideClick: false
        });
    }





//deleting the cmapus in question and checking the prompt
     function SwalDeleteCampus(campusId){
        swal({
            title: 'Sure Delete Campus?',
            text: "It will be deleted permanently!",
            type: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Delete, Yes!',
            showLoaderOnConfirm: true,
            preConfirm: function() {
              return new Promise(function(resolve) {

                 $.ajax({
               		url: 'delete_campus.php',
                	type: 'POST',
                   	data: 'delete='+campusId,
                   	dataType: 'json'
                 })
                 .done(function(response){
                 	swal('Deleted!', response.message, response.status);
                    window.location.reload(true);
                 })
                 .fail(function(){
                 	swal('Oops...', 'Something went wrong with ajax !', 'error');
                 });
              });
            },
            allowOutsideClick: false
        });
    }

    //operate the ignoring of communication from the user
    function SwalIgnoreInquiry(inquiry){
        swal({
            title: 'Ignore the inquiry?',
            text: "It will be updated permanently!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ignore, Yes!',
            showLoaderOnConfirm: true,
            preConfirm: function() {
              return new Promise(function(resolve) {

                 $.ajax({
               		url: 'ignore_inquiry.php',
                	type: 'POST',
                   	data: 'ignore_response='+inquiry,
                   	dataType: 'json'
                 })
                 .done(function(response){
                 	swal('Ignored!', response.message, response.status);
                    window.location.reload(true);
                 })
                 .fail(function(){
                 	swal('Oops...', 'Something went wrong with ajax !', 'error');
                 });
              });
            },
            allowOutsideClick: false
        });
    }