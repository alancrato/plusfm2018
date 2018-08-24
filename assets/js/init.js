(function($){
  $(function(){

      $('.sidenav').sidenav();

      $('.carousel-slider').carousel({
          fullWidth: true,
          indicators: true,
          duration: 100
      });

      $(document).ready(function(){
          $('.carousel').carousel({
              dist: -20,
              shift: 40,
              padding: 10,
              indicators: true
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
