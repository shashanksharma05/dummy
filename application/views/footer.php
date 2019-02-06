	<div class="footer text-grey-footer" id="footer">
		<div class="container">
			<div class="section_mgn">
				<div class="row">
					<div class="col-md-5 col-xs-12">
						<div class="col-md-12 col-xs-12">
							<h4 class="upper m-b-10 text-white">services in list</h4>
						</div>
						<div class="col-md-6 col-xs-6">
							<p><a href="<?php echo base_url('private-limited-company'); ?>">Private Limited Company</a></p>
							<p><a href="<?php echo base_url('limited-liability-partnership'); ?>">Limited Liability Partnership</a></p>
							<p><a href="<?php echo base_url('one-person-company'); ?>">One Person Company</a></p>
							<p><a href="<?php echo base_url('GST-registration'); ?>">GST Registration</a></p>
							<p><a href="<?php echo base_url('MSME-registration'); ?>">MSME Registration</a></p>
							<p><a href="<?php echo base_url('trademark-registration'); ?>">Trademark Registration</a></p>
							<p><a href="<?php echo base_url('trademark-renewal-and-assignment'); ?>">Trademark Renewal and Assignment</a></p>
						</div>
						<div class="col-md-6 col-xs-6">
							<p><a href="<?php echo base_url('trademark-objection'); ?>">Trademark Objection</a></p>
							<p><a href="<?php echo base_url('copyright-registration'); ?>">Copyright Registration</a></p>
							<p><a href="<?php echo base_url('terms-of-service'); ?>">Terms of services</a></p>
							<p><a href="<?php echo base_url('founder-agreement'); ?>">Founders Agreement </a></p>
							<p><a href="<?php echo base_url('employment-contract'); ?>">Employment Contract</a></p>
							<p><a href="<?php echo base_url('import-export-code'); ?>">Import Export Code</a></p>
							<p><a href="<?php echo base_url('patent-registration'); ?>">Patent Registration</a></p>
						</div>
					</div>
					<div class="col-md-7 col-xs-12">
						<div class="col-md-5">
							<div class="m-b-10">
								<h4 class="upper m-b-10 text-white">address</h4>
								<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
								<span itemprop="name">Company Vakil</span><br>
								    <span itemprop="streetAddress">
								      13/28 Ground Floor, East Patel Nagar,
								    </span>
								    <span itemprop="addressLocality">New Delhi</span>,
								    <span itemprop="addressRegion">110008</span>
								    <span itemprop="postalCode">India</span>
								  </div>
							</div>
							<h4 class="upper m-b-10 text-white">get in touch</h4>
							<div>Monday to Saturday</div>
							<div>Time: 10am to 6pm</div>
							<div><i class="fa fa-phone"></i> : +91 7683070210, +91 9899393169</div>
							<div><i class="fa fa-envelope"></i> : info@companyvakil.com</div>
						</div>
						<div class="col-md-7">
							<div class="m-b-10">
								<h4 class="upper m-b-10 text-white">contact ceo for redressal</h4>
								<div>Email - ceo@companyvakil.com</div>
								<div>Schedule a call through Customer Support</div>
								<div>Happy to help!</div>
							</div>
							<div class="row col-md-12 text-white">
								<p><a href="<?php echo base_url('privacy_policy');?>" style="margin-right: 15px;" target="_blank">Privacy Policy</a></p>
								<p><a href="<?php echo base_url('terms_and_conditions');?>" style="margin-right: 15px;" target="_blank">Terms & Conditions</a></p>
								<p><a href="<?php echo base_url('refund_policy');?>" target="_blank">Refund Policy</a></p>
							</div>
							<h4 class="upper m-b-10 text-white">find us online at</h4>
							<div><a href="https://www.facebook.com/CompanyVakil-764656367061431/" style="margin-right: 15px;"><img src="<?php echo base_url();?>assets/images/facebook.png" alt="Facebook"></a><a href="https://twitter.com/CompanyVakil" style="margin-right: 15px;"><img src="<?php echo base_url();?>assets/images/twitter.png" alt="Twitter"></a><a href="https://www.instagram.com/companyvakil/"><img src="<?php echo base_url();?>assets/images/instagram.png" alt="Follow on Instagram"></a></div>
						</div>
					</div>
				</div>

	<?php if(!empty($pagelist)){ ?>
			</div>
		</div>
	</div>

	<div class="pagelist">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3>OUR SERVICES ACROSS INDIA</h3>
					<p>
						<?php if(!empty($pagelist)) foreach ($pagelist as $key => $value) { ?>
							<div class="col-md-4"><a href="<?php echo base_url().$value->name; ?>"><?php echo $value->short_title; ?></a><?php if($key+1!=count($pagelist)){ echo ","; } ?></div>
						<?php } ?>
					</p>

				</div>
			</div>
		</div>
	</div>

	<div class="footer text-grey-footer" id="copyright">
		<div class="container">
			<div class="">
	<?php } ?>

				<div class="row col-md-12 m-t-10 text-white text-center">
					<p>@ 2018 Alphabet Solutions</p>
				</div>
			</div>
		</div>
	</div>
</div>
<?php if($this->session->vakil_user_id){ ?>
<script>
	function runtime(){
		$.ajax({
			type: 'POST',
			url: '<?php echo base_url(); ?>user/check/runtime',
			success: function(result){ }
		});
	}
	setInterval(function(){
		runtime();
	},20000);
</script>
<?php } ?>
<script type="text/javascript">
	function loading(){
		$('#introLoader').show().css('background-color','transparent');
		$('.theme-light.gifLoader .gifLoaderInner').css('background-color','transparent');
	}
	$(document).ready(function() {
		$('form').submit(function(){
			var value = $('[name="value"]').val();
			if(value){ loading(); }
		});
		$("#myBtn").hide();
		$(function toTop() {
			$(window).scroll(function () {
				if ($(this).scrollTop() > 40) {
					$('#myBtn').fadeIn();
				} else {
					$('#myBtn').fadeOut();
				}
			});

			$('#myBtn').click(function () {
				$('body,html').animate({
					scrollTop: 0
				}, 800);
				return false;
			});
		});
		$("nav").find("#contact a").click(function(e) {
			e.preventDefault();
			var section = $(this).attr("href");
			$("html, body").animate({
				scrollTop: $(section).offset().top
			}, 2000);
		});
	});
</script>
<?php if(empty($account)){ ?>
<script type="text/javascript">
	window.fbAsyncInit = function() {
	FB.init({
	appId:'170385823615301',
	version    : 'v2.0',
	cookie:true,
	status:true,
	xfbml:true,
	oauth : true
	});
	};
	(function(d){
	var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
	if (d.getElementById(id)) {return;}
	js = d.createElement('script'); js.id = id; js.async = true;
	js.src = "//connect.facebook.net/en_US/sdk.js";
	ref.parentNode.insertBefore(js, ref);
	}(document));
	//Onclick for fb login
	jQuery('.btn-facebook').click(function(e) {
		FB.login(function(response) {
		if(response.authResponse) {
			FB.api('/me',{ locale: 'en_US', fields: 'id,email,first_name,last_name,gender,hometown,link,location,middle_name,name' }, function(data) {
				console.log(data);
				$('.loader').removeClass('hide');
				$('.form-section').addClass('event');
				 $.ajax({
					type: 'POST',
					url: '<?php echo base_url(); ?>user/fbauth',
					data: data,
					dataType: 'json',
					success: function(result){
						$('.form-section').removeClass('event');$('.loader').addClass('hide');
						if(result.url){window.location = result.url};
					},
					error : function(request, status, error) {
						alert("Error occurs while redirecting the page. please refresh the current page.");
					}
				});
			});
			}
		},{scope: 'public_profile,email'}); //permissions for facebook
	});
</script>
<?php } ?>

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '375787436256674');
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1"
src="https://www.facebook.com/tr?id=375787436256674&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
<!-- Start of Async Drift Code -->
<!-- <script>
"use strict";

!function() {
  var t = window.driftt = window.drift = window.driftt || [];
  if (!t.init) {
    if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
    t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ],
    t.factory = function(e) {
      return function() {
        var n = Array.prototype.slice.call(arguments);
        return n.unshift(e), t.push(n), t;
      };
    }, t.methods.forEach(function(e) {
      t[e] = t.factory(e);
    }), t.load = function(t) {
      var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
      o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
      var i = document.getElementsByTagName("script")[0];
      i.parentNode.insertBefore(o, i);
    };
  }
}();
drift.SNIPPET_VERSION = '0.3.1';
drift.load('z85tcd4tfadm');
</script> -->
<!-- End of Async Drift Code -->

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5b07f5278859f57bdc7b8b1a/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>
</html>
