$(function () {
  $('.checkAccess').change(function () {
     $('#yesAccess').toggle(this.checked);
  }).change();
});

$( function() {
  $( "#datepicker" ).datepicker();
} );
