<?php
$page = "donate";
$title = "Donate - PC PEDIA | Windows Troubleshooting and Maintainence Guide";
$stylesheets = array("donate");
$scripts = array("script");
include 'header.php'; ?>
<h2 class="color-primary font-primary">Support PCPEDIA. Make  A Donation</h2>
<div class="flex">
<div class="grow">
<h3>Select an Amount</h3>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="THX7PHZ7VQPDC">
<input type="hidden" name="on0" value="Amount">
<div>
<select name="os0" id="select-amount">
	<option value="One Hundred">$100.00 USD</option>
	<option value="Fifty">$50.00 USD</option>
	<option value="Ten">$10.00 USD</option>
	<option value="Five"<?php if(!empty($_GET['amount']) && $_GET['amount'] == "5") echo " selected";?>>$5.00 USD</option>
</select>
</div>
<input type="hidden" name="currency_code" value="USD">
<input type="image" src="img/donate.png" id="donate-button" name="submit" alt="PayPal – The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>
<div id="secured">
<a href="https://www.paypal.com/webapps/mpp/paypal-popup" title="How PayPal Works" target="_blank">
  <img src="img/paypal.png" border="0" alt="Secured by PayPal">
</a>
</div>
</div>
<div class="fixed">
  <div class="center-flex"><?php echo file_get_contents("img/icon-question.svg"); ?><h3> Questions</h3></div>
    <h4 id="q1" class="question color-primary font-primary">- Is my donation secure?</h4>
    <p id="q1a" class="answer" style="display:none">Yes. The donation that you are making is secured by PayPal.<br>
		PayPal uses SSL technology to keep your information safe. In addition, when you send a payment using PayPal,
		the recipient won't receive sensitive financial information like your credit card or bank account number.
		This way, you don't have to worry about paying people you don't know. <a href="https://www.paypal.com/us/selfhelp/article/Is-PayPal-secure-FAQ1328" class="text-muted" target="_blank">click here</a> to know more.</p>
    <h4 id="q2" class="question color-primary font-primary">- Do I need PayPal Account to donate?</h4>
    <p id="q2a" class="answer" style="display:none">No. If you don’t have a PayPal account, you can donate using a credit or debit card.</p>
    <h4 id="q3" class="question color-primary font-primary">- How are my donation used?</h4>
    <p id="q3a" class="answer" style="display:none">Currently I am using donation money to buy recording devices and paying web hosting and internet bills. I will update this section if money is used otherwise. </p>
</div>
</div>
<div class="flex addpadding">
<div class="grow">
<h2 class="color-primary font-primary">You can also support by</h2>
<ol>
	<li>Sharing this website on your favourite social media.
	<div class="share center-flex space-around">
	<a href="https://twitter.com/share" class="twitter-share-button" data-text="Don&#39;t be a Cyber Victim. Learn from PCPEDIA" data-url="http://pcpedia.info" data-via="PC_PEDIA" data-show-count="false">Tweet</a>
	<div class="fb-share-button" data-href="http://pcpedia.info" data-layout="button" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fpcpedia.info%2F&amp;src=sdkpreparse">Share</a></div>
	<div class="g-plus" data-action="share" data-annotation="none" data-href="http://pcpedia.com"></div>
	</div>
	</li>
	<li>Subscribing to PCPEDIA youtube channel and recommending it to your friends and relatives.
	<div class="share">
	<div class="g-ytsubscribe" data-channelid="UCasmDsHCul1r_lpiou1f5Rg" data-layout="default" data-count="hidden"></div>
	</div>
	</li>
	<li>Encourage young children to watch windows troubleshooting video tutorials while they are learning to use PC and surfing Internet.</li>
	<li>Create an awareness about fraud cold call business among your relatives and friends.</li>
</ol>
</div>
<div class="fixed">
<h2 class="color-primary font-primary">Thank You Supporters</h2>
<p>Michel Philip <span class="text-muted">[27-08-2017]</span></p>
</div>
</div>
<?php
$customscript = "var e = document.getElementsByClassName('question');
for(var i = 0; i < e.length; i++) {
	var q = e[i];
  q.onclick = function() { toggledisplaybyID(this.id+'a'); }
}";
include 'footer.php';?>
