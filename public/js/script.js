$('document').ready(function() {
    $('#country').change(function(){
        var country_id = $(this).val();
        $("#state > option").remove();
        $.ajax({
            type: "POST",
            url: "populate_data.php",
            data: "cid=" + country_id,
            success:function(opt){
                $('#state').html(opt);
               // $('#city').html('<option value="0">Select City</option>');
            }
        });
    });


});