<!-- added by thuypx -->
<script src="<?=STATIC_URL;?>/<?=$CurrentSkin;?>/js/jquery.matchHeight-min.js" type="text/javascript"></script>
<script type="text/javascript">
    /**
     custom js
     **/
    (function($){
        $(function() {
            $('#pl-slidez1 .item').matchHeight({
                byRow: true,
                property: 'height',
                target: null,
                remove: false
            });
            if($(window).width()>=992){
                $('.toggle-size').trigger('click');
            }
        });
    })(jQuery)
</script>

<?=showAds('footer_balloon_right');?>
 <?=showAds('footer_balloon_left');?>
<script src="<?=STATIC_URL;?>/<?=$CurrentSkin;?>/js/bootstrap.js"></script>
<div id="footer">
    <div class="container">
        
       
		<div class="links"> <div class="powered">© 2017 VuiHD.com • Email liên hệ: vuihd.contact@gmail.com <div style="display:block"></div></div> <!--<div class="link"><a href="pages/donate.html">Ủng hộ</a> <a href="pages/lien-he.html">Liên hệ</a> <a href="pages/gioi-thieu.html">Giới thiệu</a> <a href="sitemap.xml">Sitemap</a> <a href="rss">Rss</a> </div> <div class="external"> <?=un_htmlchars($cf_textlink);?> </div>--> </div>
    </div>
</div>
<div class="ad_location desktop hidden-sm hidden-xs"> </div>
<div class="ad_location mobile hidden-lg hidden-md">
</div>
<div data-type="left" class="ad_location floating desktop hidden-sm hidden-xs hidden"> </div>
<div data-type="right" class="ad_location floating desktop hidden-sm hidden-xs hidden"></div>
<div id="fxloading" style="display: none;"></div>
<div class="overlay" style="display: none;"></div>
<input type="hidden" value="<?=getCurrentPageURL();?>" name="currentUrl" id="currentUrl">
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/587713ab1855346ccc7457d5/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<!-- Start Alexa Certify Javascript -->
<script type="text/javascript">
_atrk_opts = { atrk_acct:"LM/Rm1aMp4Z36C", domain:"vuihd.com",dynamic: true};
(function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://d31qbv1cthcecs.cloudfront.net/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
</script>
<noscript><img src="https://d5nxst8fruw4z.cloudfront.net/atrk.gif?account=LM/Rm1aMp4Z36C" style="display:none" height="1" width="1" alt="" /></noscript>
<!-- End Alexa Certify Javascript -->

<!--BS TRACKING RICH . DO NOT MODIFY -->
	   <script>
			(function () {
				if (document.getElementById('bscelid') == null) {
					var bss = document.createElement('script');
					bss.type = 'text/javascript';
					bss.id = "bscelid";
					bss.src = 'http://lab.blueserving.com/libs/bsc.js';
					(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(bss);
				}
			})();
			document.write("<script type='text/javascript' class='bscelc'><\/script>");
		</script>
	<!--END BS TRACKING RICH -->
	<script type="text/javascript" src="http://lab.blueserving.com/libs/bsca.js"></script>

<style>
    .white-popup {
        position: relative;
        background: #FFF;
        padding: 20px;
        width: auto;
        max-width: 500px;
        margin: 20px auto;
    }
</style>

<script type="text/javascript">

   /* $(document).ready(function(){
        if($.cookie('enable_popup')!='1'){
            var date = new Date();
            var minutes = 24*60;
            date.setTime(date.getTime() + (minutes * 60 * 1000));
            $.cookie('enable_popup','1',{ expires: date });
            $.magnificPopup.open({
                items: {
                    src: 'https://s29.postimg.org/fmi5xmw53/pop_up.jpg'
                },
                type: 'image'
            });
        }
    })*/
</script>



<style type="text/css">
    .content-wrapper> .container{
        position: relative;
    }
    .ads-left{
        position: absolute;
        top: 0px;
        left: -164px;
    }
</style>
<script type="text/javascript">
    //jQuery used for simplicity
    (function($){
        $(window).scroll(function(){
            if($('.ads-left').length>0){
                var top=$(window).scrollTop()-$('.content-wrapper> .container').offset().top;
                if(top>1){
                    $('.ads-left').css('top',top+'px');
                }
            }

        });


    })(jQuery)
</script>

<script src="<?=STATIC_URL;?>/<?=$CurrentSkin;?>/js/jquery.mmenu.all.min.js" type="text/javascript"></script>
<script type="text/javascript">
    (function($){
        $(function() {
            $('div#menu-mobile').mmenu({
                extensions				: [ 'effect-slide-menu', 'shadow-page', 'shadow-panels' ],
                keyboardNavigation 		: true,
                screenReader 			: true,
                counters				: true,
                navbar 	: {
                    title	: 'Advanced menu'
                },
                navbars	: [
                    {
                        position	: 'top',
                        content		: [ 'searchfield' ]
                    }, {
                        position	: 'top',
                        content		: [
                            'prev',
                            'title',
                            'close'
                        ]
                    }, {
                        position	: 'bottom',
                        content		: [
                            '<a href="http://mmenu.frebsite.nl/wordpress-plugin.html" target="_blank">WordPress plugin</a>'
                        ]
                    }
                ]
            });
        });
    })(jQuery)
</script>