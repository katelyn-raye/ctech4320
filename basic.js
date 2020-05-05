$(function(){
  $('.checkAccess').change(function () {
     $('#yesAccess').toggle(this.checked);
  }).change();
});


$(function(){

  let toggler = $(".navbar-toggler");

  toggler.on("click", function(){
    console.log("I was clicked");
    let mainNavigation = $("#mainNavigation");
    mainNavigation.toggle(500);
  });
});

//$(document).ready(function(){
//  $("button").click(function(){
    //  $("ul").toggleClass(".menuitems");
  //});
//});
