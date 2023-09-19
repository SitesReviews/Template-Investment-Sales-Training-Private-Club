 $(".show-menu").click(function(){
         $(".aside-menu").toggleClass("aside-menu--hide");
       });
       
       $( document ).ready(function() {      
    var isMobile = window.matchMedia("only screen and (max-width: 760px)");

    if (isMobile.matches) {
         $(".show-menu").click(function(){
         $(".container-fluid").toggleClass("page-slide");
       });
    }
 });

$(document).ready(function() {
  $("#success-alert").hide();
  $("#copyAlert1").click(function showAlert() {
    $("#success-alert").fadeTo(2000, 500).slideUp(500, function() {
      $("#success-alert").slideUp(500);
    });
  });
});

$(document).ready(function() {
  $("#success-alert").hide();
  $("#copyAlert2").click(function showAlert() {
    $("#success-alert").fadeTo(2000, 500).slideUp(500, function() {
      $("#success-alert").slideUp(500);
    });
  });
});

$(document).ready(function() {
  $("#success-alert").hide();
  $("#copyAlert3").click(function showAlert() {
    $("#success-alert").fadeTo(2000, 500).slideUp(500, function() {
      $("#success-alert").slideUp(500);
    });
  });
});

$(document).ready(function() {
  $("#success-alert").hide();
  $("#copyAlert4").click(function showAlert() {
    $("#success-alert").fadeTo(2000, 500).slideUp(500, function() {
      $("#success-alert").slideUp(500);
    });
  });
});


function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
}
