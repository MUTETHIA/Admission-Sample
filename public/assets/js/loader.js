$('document').ready(function() {
    $('#level').change(function(){
        var level_id = $(this).val();
        $("#programme > option").remove();
        $.ajax({
            type: "POST",
            url: "",
            data: "cid=" + level_id,
            success:function(opt){
                $('#programme').html(opt);
            }
        });
    });


 $('#programme').change(function(){
        var course_req = $(this).val();
        //$("#reg > textarea").remove();
        $.ajax({
            type: "POST",
            url: "populate_data.php",
            data: "prog=" + course_req,
            success:function(data){
                $('#req').val(data);
            }
        });
    });

//checking the selection of the faculties and departments
$('#faculty').change(function(){
        var country_id = $(this).val();
        $("#department > option").remove();
        $.ajax({
            type: "POST",
            url: "populate_department.php",
            data: "fid=" + country_id,
            success:function(opt){
                $('#department').html(opt);

            }
        });
    });

});