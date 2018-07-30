(function($){
  $(function(){

    $('.sidenav').sidenav();

  }); // end of document ready
})(jQuery); // end of jQuery name space
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.datepicker').datepicker();
  });
  
//END OF JQUERY//

//ADDING EFFECTS AND JS CODE OF HEALTHINSURANCE.HTML PAGE//

     function mouseOver(x){
      console.log("yooo");
      // var d = document.getElementById(""+id);
      x.className += " z-depth-5";
     }
     function mouseOut(x){
      
      x.classList.remove('z-depth-5');
     }