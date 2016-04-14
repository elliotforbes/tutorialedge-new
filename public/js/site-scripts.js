$(".button-collapse").sideNav();

if($(window).width() >= 1024){
    $(function(){
        $(".element").typed({
            strings: ["Laravel 5", "OpenGL Programming", "Programming Design Patterns"],
            typeSpeed: 0
        });
    });   
} else {
    $(".element").append("Laravel 5");
}