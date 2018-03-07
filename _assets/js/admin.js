$(document).ready(function(){
    // Menu | Sidebar
    $("#menu a").click(function(event){
        if($(this).next('ul').length){
            event.preventDefault();
            $(this).next().toggle('fast');
            $(this).children('i:last-child').toggleClass('fa-angle-down fa-angle-right');
            $(this).parent().toggleClass('active');
        }
    });
});