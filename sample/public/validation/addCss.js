var stylesheet = $("<link>", {
    rel: "stylesheet",
    type: "text/css",
    href: "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
});
stylesheet.appendTo("head");

$.ajax({
    url:"/public/design.css",
    success:function(data){
         $("<style></style>").appendTo("head").html(data);
    }
});

/*if (window.XMLHttpRequest) {

    alert("supports");

   } else {

    alert("not supports");
}*/