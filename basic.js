$(function(){
  $('.checkAccess').change(function () {
     $('#yesAccess').toggle(this.checked);
  }).change();
});


$(function(){

  let toggler = $(".navbar-toggler");

  toggler.on("click", function(){
    console.log("I was clicked");
    let navBar = $("ul.nav-bar");
    navBar.toggleClass("display");
    //navBar.toggleClass(500);
  });
});


//$(document).ready(function(){
  //$toggler.click(function(){
    //  $("ul").toggleClass(".menuitems");
  //});
//});
