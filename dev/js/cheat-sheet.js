$(document).ready(function(){
    $(this).scrollTop(0);
    if ($("body").hasClass("cheat-sheet")) {
        $(".menus").click(function(e){
            e.preventDefault();
            $('.modal-content').show();
            $(".contentRow").css("display", "none");
            $("#"+ $(this).attr("data-div")).css("display", "flex");
        });
    }
});