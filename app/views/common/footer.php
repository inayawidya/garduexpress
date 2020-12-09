<!--Footer-->
    <body>
<div id="footer">
    <div class="container footer-row">
        <hr>
        <div class="footer-left-col">
            <div class="footer-links">
                <div class="link-title">
                    <h4>Product</h4>
                    <small>Our Plan</small><br>
                    <small>Free Trial</small>
                </div>
                <div class="link-title">
                    <h4>About Us</h4>
                    <small>Request Demo</small><br>
                    <small>FAQS</small>
                </div>
                <div class="link-title">
                    <h4>Support</h4>
                    <small>features</small><br>
                    <small>Contact Us</small>
                </div>
                <div class="link-title">
                    <h4>Explore</h4>
                    <small>Find a nonprofit</small><br>
                    <small>Coporate Solution</small>
                </div>
            </div>
        </div>
        <div class="footer-right-col">
            <div class="footer-info">
                <div class="copyright-text">
                    <small>support@garduexpress.com</small><br>
                    <small>copyright 2020 Garduexpress</small>
                </div>
                <div class="copyright-logo">
                    <img src="<?= BASEURL;?>/images/logo.png">
                </div>
            </div>
        </div>
    </div>
</div>

<!--social-icons-->

<div class="social-icons">
    <img src="<?= BASEURL;?>/images/facebook.png">
    <img src="<?= BASEURL;?>/images/instagram.png">
    <img src="<?= BASEURL;?>/images/twitter.png">
    <img src="<?= BASEURL;?>/images/linkedin.png">
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
      <script>
          var menuBtn = document.getElementById("menuBtn");
          var sideNav = document.getElementById("sideNav");

          sideNav.style.right = "-250px";
          menuBtn.onclick = function(){
              if(sideNav.style.right == "-250px"){
                  sideNav.style.right = "0";
              }
              else{
                sideNav.style.right = "-250px";
              }
          }

          var scroll = new SmoothScroll('a[href*="#"]');
      </script>


  </body>
</html>
