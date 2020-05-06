$(function(){
  $('.checkAccess').change(function () {
     $('#yesAccess').toggle(this.checked);
  }).change();
});


$(function(){

  let toggler = $(".navbar-toggler");

  toggler.on("click", function(){
    console.log("I was clicked");
    let mainNavigation = $(".nav-bottom");
    mainNavigation.toggle(500);
  });

  let dropdown = $(".dropdown > .nav-link");

  dropdown.on("click", function(e){
    e.preventDefault();
    console.log("I was clicked dropdown");

    $(this).toggleClass("closed");
    let dropdownMenu = $(this).parent().find(".small-nav-dropdown");
    dropdownMenu.toggle(400);
  });

  if ($(".nav-link").hasClass("closed")){
      $('.small-nav-dropdown').hide();

    } else {
      $('.small-nav-dropdown').show();
    }

});

//Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

if (localStorage.getItem(‘cookieSeen’) != ‘shown’) {
  $(‘.cookie-banner’).delay(2000).fadeIn();
  localStorage.setItem(‘cookieSeen’,’shown’)
};
$(‘.close’).click(function() {
  $(‘.cookie-banner’).fadeOut();
})
