<?php
if(!empty($_POST))
print_r($_POST);
$page = "help";
$title = "Get Help - PC PEDIA | Free Windows Help and Support";
$stylesheets = array("help");
$scripts = array("script");
include 'database/library.php';
include 'database/timezones.php';
include 'database/reminder-variables.php';
include 'header.php'; ?>
<form id="set-reminder" name="set-reminder" action="" method="post">
<h2 class="color-primary font-primary">Are you having trouble with your computer? Tell me about your problem.</h2>
<select id="options" name="problem">
  <option>-- Choose best option that describes your problem --</option>
  <option value="1">I think someone is monitoring my activities.</option>
  <option value="2">My computer is responding very slowly.</option>
  <option value="3">I am having trouble logging into my Computer.</option>
  <option value="4">I am not able to Install a software.</option>
  <option value="5">I am having problem with my printer.</option>
  <option value="6">Help me update my computer.</option>
  <option value="7">Some other problem</option>
</select>
<div>
<h3>I have checked suggested tutorials but I am still in trouble.</h3>
Okey! Set a Reminder for me to call you back.
This is my weekly schedule in
<select id="TZ" name="tz">
  <?php foreach ($timezones as $key => $value) { ?>
  <option value="<?php echo $key; ?>"<?php if($value['name'] == "Indian Standard Time") echo " selected";?>><?php echo $value['name']; ?></option>
  <?php } ?>
</select>
with
<span class="inline-block">
Daylight Saving
<select id="DST" name="dst">
  <option value="Off" selected>Off</option>
  <option value="On">On</option>
</select></span>
</div>
<div id="display-time-interval" class="addpadding">
</div>
<div id="reminder" class="overlay" style="display:none">
  <div class="close"><div class="icon-close"><?php echo file_get_contents("img/icon-close.svg"); ?></div></div>
  <div class="overlay-padding">
    <p>You have selected <span class="text-muted" id="selectedTZ"></span> with DayLight Saving <span class="text-muted" id="selectedDST">Off</span></p>
    <div class="ddt day color-primary">
      <div class="datetime">
        <div><div class="date">
          <span class="date_"></span>
          <span class="date_dst" style="display:none"></span>
        </div></div>
        <div class="center-flex"><?php echo file_get_contents("img/icon-clock.svg"); ?>
          <div class="time">
            <span class="time_"></span>
            <span class="time_dst" style="display:none"></span>
          </div>
        </div>
      </div>
      <div class="hor-line"></div>
      <div class="datetime">
        <div><div class="date">
          <span class="date_"></span>
          <span class="date_dst" style="display:none"></span>
        </div></div>
        <div class="center-flex"><?php echo file_get_contents("img/icon-clock.svg"); ?>
          <div class="time">
            <span class="time_"></span>
            <span class="time_dst" style="display:none"></span>
          </div>
        </div>
      </div>
    </div>
    <div class="rp">Your Prefered Time for call is
      <span class="inline-block"><select name="hour">
        <?php $i = 0; while($i<12) { $i++; echo "<option>" .$i. "</option>"; } ?>
      </select>
      <select name="min">
        <option>00</option>
        <?php $i = 10; while($i<60) { echo "<option>" .$i. "</option>"; $i+=10; } ?>
      </select>
      <select  name="meridiem">
        <option>AM</option>
        <option>PM</option>
      </select>.</span>
    </div>
    <div class="rp">
      <span class="inline-block">Your Name is <input type="text" name="name" placeholder="Enter Name"></span>
      <span class="inline-block">and Contact Number is <input type="text" name="phone" placeholder="Enter Phone Number">.</span>
    </div>
    <div class="rp">
      Give a PassCode so that you can verify me.
      <span class="inline-block">The PassCode is <input type="text" name="passcode" placeholder="Enter PassCode">.</span>
    </div>
    <button type="submit" class="help-button background-secondary">Set Reminder</button>
  </div>
</div>
<button type="submit" class="help-button background-secondary">Set Reminder</button>
</form>
<div id="template" class="ddt" style="display:none">
  <input type="radio" style="display:none" name="selected">
  <label class="day color-primary">
    <div class="datetime">
      <div><div class="date">
        <span class="date_"></span>
        <span class="date_dst" style="display:none"></span>
      </div></div>
      <div class="center-flex"><?php echo file_get_contents("img/icon-clock.svg"); ?>
        <div class="time">
          <span class="time_"></span>
          <span class="time_dst" style="display:none"></span>
        </div>
      </div>
    </div>
    <div class="hor-line"></div>
    <div class="datetime">
      <div><div class="date">
        <span class="date_"></span>
        <span class="date_dst" style="display:none"></span>
      </div></div>
      <div class="center-flex"><?php echo file_get_contents("img/icon-clock.svg"); ?>
        <div class="time">
          <span class="time_"></span>
          <span class="time_dst" style="display:none"></span>
        </div>
      </div>
    </div>
  </label>
</div>
<div id="error-interval" class="overlay error" style="display:none">
  <div class="close"><div class="icon-close"><?php echo file_get_contents("img/icon-close.svg"); ?></div></div>
  <p>You have to click on Time interval at which you want to set a reminder.</p>
  <button class="close help-button background-secondary">Ok! Got it.</button>
</div>
<?php
$customscript = "var data = JSON.parse('". timezonemanager($timezones, $intervals). "');
timezonemanager();
document.getElementById('TZ').onchange = function() { timezonemanager(); }
document.getElementById('DST').onchange = function() { daylightsaving(); }
document.forms['set-reminder'].onsubmit = function() { return setreminder(); }
close_event();";
include 'footer.php'; ?>
