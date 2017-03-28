$("#login_button").click(function(){
    $("#logowanie_box").fadeIn("slow");

});

$(".close").click(function(){
    $("#logowanie_box").fadeOut();

  });
  

$(document).mouseup(function (e)
{
    var container = $("#logowanie_box");

    if (!container.is(e.target) 
        && container.has(e.target).length === 0)
    {
        container.fadeOut();
    }
});
