$(function () {
  $('.checkAccess').change(function () {
     $('#yesAccess').toggle(this.checked);
  }).change();
});

$( function() {
  $( "#datepicker" ).datepicker();
} );


$(function(){

  let toggler = $(".navbar-toggler");

  toggler.on("click", function(){
    console.log("I was clicked");
    let mainNavigation = $("#mainNavigation");
    mainNavigation.toggle(500);
  });
});
