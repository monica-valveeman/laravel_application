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
            required:''
        },
        lastname:{
            required:''
        },
        email_id:{
            required:'',
            remote:'*already exists'
        },
    },
});
});