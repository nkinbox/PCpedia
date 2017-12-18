</main>
<footer>
  <div class="f-content">
  <div class="footer-menu">
    <h3 class="color-primary font-primary">Social Media</h3>
    <p>Get Notified for every new Tutorial upload. Follow on Social Media.</p>
    <div class="social-icon-container">
      <div class="social-icon">
        <?php echo file_get_contents("img/googleplus.svg"); ?>
        <div class="social-icon-content"><a href="https://plus.google.com/111323468628750151304" target="_blank">Google +</a></div>
      </div>
      <div class="social-icon">
        <?php echo file_get_contents("img/youtube.svg"); ?>
        <div class="social-icon-content"><a href="https://www.youtube.com/channel/UCasmDsHCul1r_lpiou1f5Rg?sub_confirmation=1" target="_blank">Youtube</a></div>
      </div>
      </div>
      <div class="social-icon-container">
      <div class="social-icon">
        <?php echo file_get_contents("img/twitter.svg"); ?>
        <div class="social-icon-content"><a href="https://twitter.com/PC_PEDIA" target="_blank">Twitter</a></div>
      </div>
      <div class="social-icon">
        <?php echo file_get_contents("img/facebook.svg"); ?>
        <div class="social-icon-content"><a href="https://www.facebook.com/pcpedia/" target="_blank">Facebook</a></div>
      </div>
    </div>
    <p>or, Subscribe to NewsLetter.</p>
    <form id="subscribe-newsletter" name="subscribe-newsletter" class="center-flex">
      <input class="footer-input" type="email" name="email" placeholder="Your EmailID">
      <button id="subscribe-button" class="color-primary font-primary">
        <span class="center-flex"><?php echo file_get_contents("img/icon-notification.svg"); ?><span>Subscribe</span></span></button>
    </form>
  </div>
  <div class="footer-menu">
    <h3 class="color-primary font-primary">Contact Me</h3>
    <form id="quick-contact" name="quick-contact">
      <input class="footer-input" type="text" name="name" placeholder="Your Name">
      <input class="footer-input" type="text" name="email" placeholder="Your EmailID">
      <input class="footer-input" type="text" name="phone" placeholder="Your Contact Number">
      <textarea class="footer-input" rows="6" placeholder="Type Your Message Here ..."></textarea>
      <button id="quick-contact-button" class="color-primary font-primary">
        <span class="center-flex"><?php echo file_get_contents("img/icon-send.svg"); ?><span>Send</span></span></button>
    </form>
  </div>
  <div class="footer-menu">
    <h3 class="color-primary font-primary">Make A Donation</h3>
    <p>Are you finding this website useful?</p>
    <p>Would you like to support PCPEDIA by making a small Donation?</p>
    <p><a id="f-donate" href="make-a-donation.php?amount=5">Yes! Donate $5 Now</a></p>
    <p><a id="f-help" href="make-a-donation.php">No! But i would like to help</a></p>
  </div>
  </div>
  <div class="f-copyright background-primary">
    Copyright &copy; <?php echo date('Y');?> by N.Kumar | All Rights Reserved
  </div>
</footer>
<?php if(!empty($scripts)){foreach($scripts as $script) {?>
<script src="js/<?php echo $script; ?>.js"></script>
<?php }}?>
<script src="https://apis.google.com/js/platform.js"></script>
<script src="//platform.twitter.com/widgets.js"></script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php
if(!empty($customscript))
echo "<script>" .$customscript. "</script>";
?>
</body>
</html>
