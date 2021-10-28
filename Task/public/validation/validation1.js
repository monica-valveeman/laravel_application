$(document).ready(function(){


    
$('select[name="state"]').on('change', function() {
    var stateID = $(this).val();
    if(stateID) {
        $.ajax({
            url: '/userdetails/create/'+stateID,
            type: "GET",
            dataType: "json",
            success:function(data) {

                
                $('select[name="city"]').empty();
                $.each(data, function(key, value) {
                    $('select[name="city"]').append('<option value="'+ key +'">'+ value +'</option>');
                });


            }
        });
    }else{
        $('select[name="city"]').empty();
    }
});
    $("#userdetailform").validate({

        rules:{
        profile_upload:{
            required:true
        },
        date_of_birth:{
            required:true
        },
        address:{
            required:true            
        },
        state:{
            required:true
        },
        city:{
            required:true
        },
        user_id:{
            required:true,
            number:true
        },
    },
    messages:{
        profile_upload:{
            required:'*required'
        },
        date_of_birth:{
            required:'*required'
        },
        address:{
            required:'*required'            
        },
        state:{
            required:'*required'
        },
        city:{
            required:'*required'
        },
        user_id:{
            required:'*required',
            number:'only numbers are allowed'
        },
        
    },

    });
});