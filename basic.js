$(function(){
  $('.checkAccess').change(function () {
     $('#yesAccess').toggle(this.checked);
  }).change();
});


$(function(){

  let toggler = $(".navbar-toggler");

  toggler.on("click", function(){
    console.log("I was clicked");
    let mainNavigation = $(".nav-bar");
    mainNavigation.toggle(500);
  });
});
