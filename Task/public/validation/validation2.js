$(document).ready(function(){
    $('#educationform').validate({

        rules:{
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
        year_of_experience:{
            required:'*required'
        },
        under_graduate:{
            required:'*required'
        },
        post_graduate:{
            required:'*required'
        },
        user_id:{
            required:'*required',
            number:'*only digits'
        },
    },
    });
});