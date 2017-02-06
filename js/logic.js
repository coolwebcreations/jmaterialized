jQuery(document).ready(function($) {

	// YOUR SCRIPT HERE
  
  // Mobile Side-Menu
   $(".button-collapse").sideNav();
  
  // Parallax
   $('.parallax').parallax();
  
  // ScrollFire
   var options = [
    {selector: '.class', offset: 200, callback: customCallbackFunc } },
    {selector: '.other-class', offset: 200, callback: function() {
      customCallbackFunc();
    } },
   ];
   Materialize.scrollFire(options);
	
});
