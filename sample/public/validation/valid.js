$(document).ready(function(){
    $('.keyup-email').keyup(function() {
        $('span.error').remove();
        var inputVal = $(this).val();
        var emailReg = /^[a-zA-Z0-9+_.-][a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$/;
        if(inputVal==""){
            $(this).after('<span class="error error"></span>');
            }
       else if(!emailReg.test(inputVal)) {
            $(this).after('<span class="error error"><b>*invalid Email Format</b>.</span>');
        }

    });
        
    $("#queryform").validate({

        rules:{
        name:{
            required:true,
        },
        email:{
            required:true,
            remote:'/email_validate'
            
        },
    },
    messages:{
        name:{
            required:'*required'
        },
        email:{
            required:'*required',
            remote:'*already exists'
        },
    },

    });
   

        var people = "asset('storage/people.json')";
        

        $.getJSON(people, function (data) {
            $.each(people,function(iIndex, sElement) {
      $('#dd').append('<option>' + sElement + '</option>');
});
});

});
