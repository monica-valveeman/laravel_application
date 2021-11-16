$(document).ready(function(){
    $('.fname').keyup(function(){
        $('span.error').remove();
        var fname=$(this).val();
        var regex=/^[a-z\s]+$/i;
        if(fname==''){
            $(this).after('<span class="error error">*required</span>');
        }
        else if(!(regex.test(fname))){
            $(this).after('<span class="error error">*only alphabets are allowed</span>');
        }
    });
    $('.lname').keyup(function(){
        $('span.error1').remove();
        var lname=$(this).val();
        var regex2=/^[a-z\s]+$/i;
        if(lname==''){
            $(this).after('<span class="error error1">*required</span>');
        }
        else if(!(regex2.test(lname))){
            $(this).after('<span class="error error1">*only alphabets are allowed</span>');
        }
    });
    $('.email').keyup(function() {
        $('span.error2').remove();
        var email_id = $(this).val();
        var emailReg = /^(\w{2,})+@[a-zA-z]+\.[a-z]{2,3}$/;
        if(email_id==""){
            $(this).after('<span class="error error2">*required</span>');
        }
       else if(!emailReg.test(email_id)) {
            $(this).after('<span class="error error2">*invalid Email Format</span>');
        }

    });

    $('select[name="state"]').on('change', function() {
        var stateID = $(this).val();
        if(stateID) {
            $.ajax({
                url: '/user/create/'+stateID,
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
    
    $("#userform").validate({

        rules:{
        firstname:{
            required:true
        },
        lastname:{
            required:true
        },
        email_id:{
            required:true,
            remote:'/email_validate'
            
        },
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
        year_of_experience:{
            required:true
        },
        under_graduate:{
            required:true
        },
        post_graduate:{
            required:true
        },
        user_id:{
            required:true,
            number:true
        },
    },
    messages:{
        firstname:{
            required:'*required'
        },
        lastname:{
            required:'*required'
        },
        email_id:{
            required:'*required',
            remote:'*already exists'
        },
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
        year_of_experience:{
            required:'*required'
        },
        under_graduate:{
            required:'*required'
        },
        post_graduate:{
            required:'*required'
        },
    
    },
});
});