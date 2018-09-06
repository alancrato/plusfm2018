(function($){
  $(function(){

      $('.sidenav').sidenav();

      $(document).ready(function(){
          $('.carousel-slider').carousel({
              fullWidth: true,
              indicators: true,
              duration: 100
          });
          //autoplay();
      });

      function autoplay() {
          $('.carousel').carousel('next');
          setTimeout(autoplay, 5000);
      }

      $(document).ready(function(){
          $('.carousel-two').carousel({
              dist: -40,
              shift: 150,
              padding: 20,
              indicators: true
          });
      });

      $(document).ready(function(){
          $('.materialboxed').materialbox();
      });

      $(document).ready(function(){
          $('.modal').modal();
      });

  }); // end of document ready
})(jQuery); // end of jQuery name space
