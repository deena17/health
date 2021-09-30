<footer id="footer" class="footer bg-overlay">
    <div class="footer-main">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-4 col-md-6 footer-widget footer-about">
            <h3 class="widget-title">Directorate of Medical Education</h3>
            <p> Government of Tamil Nadu is totally committed in building healthy people, not only by making available 
              quality Medicare facilities at the doorstep of every citizen in the remotest corner of the State,
            </p>
            <div class="footer-social">
              <ul>
                <li class="bg-warning"><a href="#" aria-label="Facebook" title="Facebook">
                    <i class="fab fa-facebook-f text-dark"></i></a></li>
                <li class="bg-warning"><a href="#" aria-label="Twitter" title="Twitter">
                    <i class="fab fa-twitter text-dark"></i></a>
                </li>
                <li class="bg-warning"><a href="#" aria-label="Instagram" title="Instagram">
                    <i class="fab fa-instagram text-dark"></i></a></li>
                <li class="bg-warning"><a href="#" aria-label="Github" title="Youtube">
                    <i class="fab fa-youtube text-dark"></i></a></li>
              </ul>
            </div><!-- Footer social end -->
          </div><!-- Col end -->

          <div class="col-lg-5 col-md-5 footer-widget mt-5 mt-md-0">
            <h3 class="widget-title">Important Links</h3>
            <ul class="list-arrow">
              <li><a href="https://tnhealth.tn.gov.in/tngovin/dme/dme.php" target="_blank">Directorate of Medical Education</a></li>
              <li><a href="https://tnhealth.tn.gov.in/tngovin/dms/dms.php" target="_blank">Directorate Medical and Rural Health Services</a></li>
              <li><a href="https://tnhealth.tn.gov.in/tngovin/dph/dphpm.php" target="_blank">Directorate of Public Health and Preventive Medicine</a></li>
              <li><a href="https://tnhealth.tn.gov.in/tngovin/dimh/dimh.php" target="_blank">Directorate of Indian Medicine and Homeopathy</a></li>
            </ul>
          </div><!-- Col end -->

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
            <h3 class="widget-title">Quick Access</h3>
            <ul class="list-arrow">
              <li><a href="help.php">Help</a></li>
              <li><a href="useful_links.php">Useful Links</a></li>
              <li><a href="faqs.php">FAQ's</a></li>
              <li><a href="who_is_who.php">Who's Who</a></li>
            </ul>
          </div><!-- Col end -->
        </div><!-- Row end -->
      </div><!-- Container end -->
    </div><!-- Footer main end -->

    <div class="copyright">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-md-4">
            <div class="copyright-info text-center text-md-left">
              <span>&copy 2021, All right Reversed<br>
                  Developed and Maintainer by Tamil Nadu e-Governance Agency</span>
            </div>
          </div>
          <div class="col-md-4 text-center">
            This website works well with latest versions of browsers like Internet Explorer, Chrome, Safari and Mozilla FireFox & Comfortable Screen Resolution 1366x768 
            <p>Site last updated: 28/09/2021 3.00 P.M
            <a target="_blank" href="https://www.w3.org/" class="ml-3">
				<img src="static/images/w3c_home.png" alt="W3C Logo" height="20" width="30" >
			</a>
            </p>
             
        </div>  
          <div class="col-md-4">
            <div class="footer-menu text-center text-md-right">
              <p><strong>Visitor Count: <?php include_once('counter.php'); ?></strong></p>  
              <ul class="list-unstyled">
                <li><a href="disclaimer.php">Disclaimer</a></li>
                <li><a href="privacy_policy.php">Privacy and Copyright Policy</a></li>
                <li><a href="terms_of_use.php">Terms of Use</a></li>
                <li><a href="feedback.php">Feedback</a></li>
                <li><a href="sitemap.php">Sitemap</a></li>
              </ul>
              <br>
            </div>
          </div>
        </div><!-- Row end -->

        <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
          <button class="btn btn-primary" title="Back to Top">
            <i class="fa fa-angle-double-up"></i>
          </button>
        </div>

      </div><!-- Container end -->
    </div><!-- Copyright end -->
  </footer><!-- Footer end -->


  <!-- Javascript Files
  ================================================== -->

  <!-- initialize jQuery Library -->
  <script src="static/plugins/jQuery/jquery.min.js"></script>
  <!-- Bootstrap jQuery -->
  <script src="static/plugins/bootstrap/bootstrap.min.js" defer></script>
  <!-- Slick Carousel -->
  <script src="static/plugins/slick/slick.min.js"></script>
  <script src="static/plugins/slick/slick-animation.min.js"></script>
  <!-- Color box -->
  <script src="static/plugins/colorbox/jquery.colorbox.js"></script>
  <!-- shuffle -->
  <script src="static/plugins/shuffle/shuffle.min.js" defer></script>


  <!-- Google Map API Key-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
  <!-- Google Map Plugin-->
  <script src="static/plugins/google-map/map.js" defer></script>

  <!-- Template custom -->
  <script src="static/js/script.js"></script>
  <script src="static/js/accessibility.js"></script>
  <script>
  function display_ct7() {
    var x = new Date()
    var ampm = x.getHours( ) >= 12 ? ' PM' : ' AM';
    hours = x.getHours( ) % 12;
    hours = hours ? hours : 12;
    hours=hours.toString().length==1? 0+hours.toString() : hours;

    var minutes=x.getMinutes().toString()
    minutes=minutes.length==1 ? 0+minutes : minutes;

    var seconds=x.getSeconds().toString()
    seconds=seconds.length==1 ? 0+seconds : seconds;

    var month=(x.getMonth() +1).toString();
    month=month.length==1 ? 0+month : month;

    var dt=x.getDate().toString();
    dt=dt.length==1 ? 0+dt : dt;

    var x1=dt + "/" + month + "/" + x.getFullYear();
    x1 = x1 + " - " +  hours + ":" +  minutes + ":" +  seconds + " " + ampm;
    document.getElementById('date').innerHTML = x1;
    display_c7();
     }
     function display_c7(){
    var refresh=1000; // Refresh rate in milli seconds
    mytime=setTimeout('display_ct7()',refresh)
    }
    display_c7()
</script>
  </div><!-- Body inner end -->
  </body>

  </html>