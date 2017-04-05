
$(document).mouseup(function (e)
{
    var container = $("#logowanie_box");
    var container1 = $(".modal-content");

    if ((!container.is(e.target)&&(!container1.is(e.target))
        && container.has(e.target).length === 0 && container1.has(e.target).length === 0))
    {
        container.fadeOut();
        container1.fadeOut();
    }
});


$(".btn-primary").click(function(){
   
    $(".modal-content").fadeIn("slow");
    $("#logowanie_box").hide();
     

});

$(".close").click(function(){
     $("#logowanie_box").hide();
     $(".modal-content").fadeOut("slow");

  });
  
  $( function() {
    var availableTags = [
      "Diablo",
      "Fifa17",
      
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  } );
  
  $( function() {
    $( "#accordion" ).accordion();
  } );