<script src="js/jquery-1.9.1.js"></script>
<script src="js/g-alert.js"></script>

<?php if($sc_home==true){ ?>
<script src="js/jquery.carousello.js"></script>
<?php } ?>

<script src="js/jquery.isotope.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/jquery.simpleplaceholder.js"></script>
<script src="js/w-search.js"></script>

<script src="js/plugins.js"></script>
<script src="js/jquery.themepunch.plugins.min.js"></script>

<?php if($sc_home==true){ ?>
<script src="js/jquery.themepunch.revolution.min.js"></script>
<?php } ?>

<script src="js/navToSelect.js"></script>
<script src="js/jquery.tweet.js"></script>
<script src="js/w-tabs.js"></script>
<script src="js/waypoints.min.js"></script>

<?php if($sc_slnota==true){ ?>
<script src="js/jquery.carousello.js"></script>
<script src="js/jquery.flexslider.js"></script>
<?php } ?>

<?php if($sc_slider==true){ ?>
<script src="js/jquery.carousello.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script type="text/javascript">
	jQuery(window).load(function() {
		jQuery('.flexslider').flexslider({
			controlNav: false,
			smoothHeight: true,
			animation: "slide",
			directionNav: false,  
			start: function() {
				slider.removeClass('flex-loading');
			}
		});
	});
</script>
<?php } ?>

<script src="js/w-lang.js"></script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-20229980-17']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>