$(document).ready(function(){
  readSelection(); /* it will load course when document loads */

  $(document).on('click', '#delete_user_course', function(e){

   var courseId = $(this).data('id');
   DeleteCourse(courseId);
   e.preventDefault();
  });

 });

 function DeleteCourse(courseId){

  swal({
   title: 'Are you sure?',
   text: "You won't be able to revert this!",
   type: 'warning',
   showCancelButton: true,
   confirmButtonColor: '#3085d6',
   cancelButtonColor: '#d33',
   confirmButtonText: 'Yes, delete it!',
   showLoaderOnConfirm: true,

   preConfirm: function() {
     return new Promise(function(resolve) {

        $.ajax({
        url: 'delete_selection.php',
        type: 'POST',
           data: 'delete='+courseId,
           dataType: 'json'
        })
        .done(function(response){
         swal('Deleted!', response.message, response.status);
         //window.location.reload(forceGet);
         window.location.reload();
          readSelection();
        })
        .fail(function(){
         swal('Oops...', 'Something went wrong with ajax !', 'error');
        });
     });
      },
   allowOutsideClick: false
  });

 }
 function readSelection(){
  $('#course_details').load('course_selection.php');
 }