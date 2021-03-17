<footer>
  <div class="container">
    
    <div class="row">
      <div class="col-lg-4 col-sm-6 col-md-3">
        <div class="footers-ons abt-ft w-100 float-left">

          <div class="footer-head w-100 float-left">
            <img src="./Assest/img/logo.jpeg" alt="logo">
          </div><!--footer-head-->

        </div><!--footers-ons-->
      </div><!--col-4-->

      <div class="col-lg-3 col-sm-6 col-md-3">
        <div class="footers-ons w-100 float-left usfull-foot">

          <div class="footer-head w-100 float-left">
            <h2>Helpfull<!--Usefull--> Links</h2>
          </div><!--footer-head-->

          <div class="aboutfooter mnus w-100 float-left">
            <ul>
            <li><a href="http://localhost/hi-cart/">Home</a> </li>
            <li><a href="http://localhost/hi-cart/books-us.php">Book Us</a></li>
            <li><a href="http://localhost/hi-cart/diy.php">DIY &amp; More</a></li>
            <li><a href="http://localhost/hi-cart/about-us.php">About Us</a></li>
            <li><a href="http://localhost/hi-cart/gallary.php">Gallery</a></li>
            <li><a href="http://localhost/hi-cart/contact-us.php">Contact</a></li>
            </ul>
          </div>

        </div><!--footers-ons-->
      </div><!--col-4-->

      <div class="col-lg-3 col-sm-6 col-md-3">
        <div class="footers-ons w-100 float-left">

          <div class="footer-head w-100 float-left">
            <h2>Contact Us</h2>
          </div><!--footer-head-->

          <div class="info-ft w-100 float-left">

            <ul>

              <li>
                <i class="fa fa-map-marker"></i>
                <p>WEST COAST  <br> Lomita CA </p>
              </li>
			  

              <li>
                <i class="fa fa-phone"></i>
                <p><a href="#">+1 (310) 714-7482</a></p>
              </li>

              <li>
                <i class="fa fa-envelope"></i>
                <p><a href="#">summara@lachaicart.com</a></p>
              </li>
			  
			   <li>
                <i class="fa fa-map-marker"></i>
                <p>EAST COAST <br>
                  Woodbridge, NJ </p>
              </li>
			  

              <li>
                <i class="fa fa-phone"></i>
                <p><a href="#">(+1 732) 824-9991</a></p>
              </li>

              <li>
                <i class="fa fa-envelope"></i>
                <p><a href="#">sania@lachaicart.com</a></p>
              </li>
               
            </ul>
          </div>

        </div><!--footers-ons-->
      </div><!--col-4-->

      <div class="col-lg-2 col-sm-6 col-md-3">

        <div class="footers-ons w-100 float-left">
          <div class="footer-head w-100 float-left">
            <h2>Follow Us</h2>
          </div><!--footer-head-->

          <div class="scl-footer w-100 float-left">
            <ul>
              <li><a href="https://www.facebook.com/LA-Chai-Cart-111701857207182" target="_blank"><i class="fa fa-facebook"></i></a></li>
           
              <li><a href="https://www.instagram.com/lachaicart/" target="_blank"><i class="fa fa-instagram"></i></a></li>
             
            </ul>
          </div>

        </div><!--footers-ons-->
      </div><!--col-4-->

    </div><!--row-->
  </div>

</footer>

<div id="secondfooter">
    <div class="container">

     <div class="row">

        <div class="col-lg-12">
          <div class="secondfooter-hd">
           
            <p>© 2021 Hi Tea Cart All rights reserved</p>
          </div>
       </div><!--col-lg-12-->

     </div><!--row-->
   </div><!--container-->

</div>

<script src="./Assest/js/jquery.min.js"></script>
<script src="./Assest/js/bootstrap.min.js"></script>
<script src="./Assest/js/jquery.validate.min.js"></script>
<script src="./Assest/js/jquery.mask.min.js"></script>

<script>
  (function($){
    var ico = $('<i class="fa fa-angle-down"></i>');
    $('nav#menu li:has(ul) > a').append(ico);
    $('nav#menu li:has(ul)').on('click',function(){
      $(this).toggleClass('open');
    });
    $('a#toggle').on('click',function(e){
      $('html').toggleClass('open-menu');
      return false;
    });
    $('div#overlay').on('click',function(){
      $('html').removeClass('open-menu');
    })
  })(jQuery)
  </script>

<!--flexslider-->
<script src=./Assest/js/jquery.flexslider-min.js"></script>
<script type="text/javascript">
$(document).ready(function(e) {
$('.flexslider').flexslider();
});
</script>

<!--owl-carousel-->
<script src="./Assest/js/owl.carousel.js"></script>
<script>
  $(document).ready(function() {
   var owl = $('.owl-carousel3');
   owl.owlCarousel({
     margin:30,
     nav: true,
     loop: true,
     responsive: {
       0: {
         items: 1
       },
       600: {
         items: 2
       },
       1000: {
         items: 3
       }
     }
   })
 })
</script>

<script>

  $(document).ready(function(){
   $(".txt_spacial_chai").val(0);
    $(".altera").click(function(){
        var input = $(this).closest('div').find('input');
        if ($(this).hasClass('acrescimo'))
            input.val(parseInt(input.val())+1)
            //$input.val(parseInt($input.val())+1);
        else if (input.val()>1)
            input.val(parseInt(input.val())-1)
            //$input.val(parseInt($input.val())-1);
    });

    $(".check_chai").click(function(){
      var input = $(this).parent().parent().parent().parent().find('input[type=text]');
      if($(this).prop('checked'))  {   input.val(1);   }else {  input.val(0);  }
    });

  })

 </script>

 

<script>
$(document).ready(function(){
  $('.phoneUK').mask('000-000-0000');
  $('.phoneUK').blur(function(){
    $('.phoneUK').mask('000-000-0000');
  });

  $.validator.addMethod('phoneUK', function(phone_number, element) {
      return this.optional(element) || phone_number.length > 9 &&
      phone_number.match(/^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/);
      }, 'Please specify a valid phone number(000-000-0000)'
    );
});


</script>

</body>
</html>