<?php
$page = "home";
$stylesheets = array("home");
include 'header.php'; ?>
<div id="block1">
  <div>
  <h1>Every Year <span class="mark-red">3.3 Million</span> Americans fall victims to cold calls from India and Lose <span class="mark-red">$1.5 Billion</span>.</h1>
  <div class="center-flex read-more">
    <a href="https://blogs.microsoft.com/on-the-issues/2014/12/18/microsoft-takes-action-tech-support-scammers" target="_blank">Read More </a>
    <?php echo file_get_contents("img/icon-arrow.svg"); ?>
  </div>
  </div>
</div>
<div id="block2" class="background-primary addpadding">
  <p><a href="https://www.symantec.com/security-center/threat-report" target="_blank" class="text-muted">Symantec Internet Security Threat Report</a> says 100 Million attacks are attempted every year.</p>
  <h2>Lack of Knowledge remains the cause of such exploits.</h2>
</div>
<div id="block3" class="addpadding">
  <?php echo file_get_contents("img/icon-stop.svg"); ?>
  <h3 class="color-primary">Stop Being a Cyber Victim.</h3>
  <p>Learn to Troubleshoot and Maintain your Windows Personal Computer by Yourself.</p>
  <h4>Subscribe To PCPEDIA</h4>
  <div id="subscribe-box" class="center-flex space-around">
    <div class="g-follow" data-annotation="none" data-height="20" data-href="https://plus.google.com/111323468628750151304" data-rel="publisher"></div>
    <div class="fb-follow" data-href="https://www.facebook.com/pcpedia/" data-layout="button" data-size="small" data-show-faces="false"></div>
    <a href="https://twitter.com/PC_PEDIA" class="twitter-follow-button" data-show-count="false">Follow @PC_PEDIA</a>
    <div class="g-ytsubscribe" data-channelid="UCasmDsHCul1r_lpiou1f5Rg" data-layout="default" data-count="hidden"></div>
  </div>
  <div class="addpadding">
    <?php echo file_get_contents("img/logo-large.svg"); ?>
    <div class="color-primary font-primary">Windows Troubleshooting and Maintenance Guide</div>
  </div>
</div>
<div id="block4">
  <h3 id="block4-heading" class="font-primary background-primary">Must Watch Tutorials</h3>
  <div class="center-flex space-around">

    <a href="#">
    <div class="video-holder">
      <div class="video-card">
        <img src="img/default.jpg" alt="" class="video-thumb">
        <div class="video-time">14:20</div>
      </div>
      <div class="color-primary">This is some textThis is some textThis is some textThis is some text</div>
    </div>
    </a>



    <a href="#">
    <div class="video-holder">
      <div class="video-card">
        <img src="img/default.jpg" alt="" class="video-thumb">
        <div class="video-time">14:20</div>
      </div>
      <div class="color-primary">This is some textThis is some textThis is some textThis is some text</div>
    </div>
    </a>



    <a href="#">
    <div class="video-holder">
      <div class="video-card">
        <img src="img/default.jpg" alt="" class="video-thumb">
        <div class="video-time">14:20</div>
      </div>
      <div class="color-primary">This is some textThis is some textThis is some textThis is some text</div>
    </div>
    </a>



    <a href="#">
    <div class="video-holder">
      <div class="video-card">
        <img src="img/default.jpg" alt="" class="video-thumb">
        <div class="video-time">14:20</div>
      </div>
      <div class="color-primary">This is some textThis is some textThis is some textThis is some text</div>
    </div>
    </a>


  </div>
  <div class="flex-left">
    <div class="video-more background-secondary">
      <a href="windows-troubleshooting-tutorials.php">Show More Videos </a>
      <?php echo file_get_contents("img/icon-arrow.svg"); ?>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>
