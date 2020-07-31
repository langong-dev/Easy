<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
    </div>
</div><!-- end #body -->

<footer id="footer" role="contentinfo">
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <?php _e($this->options->foots); ?>
    <script>
<?php _e($this->options->jsCode); ?>
    </script>
</footer><!-- end #footer -->

<?php if (!empty($this->options->xuanran) && in_array('pjax', $this->options->xuanran)){ ?>
<script>

$(document).pjax('a[href^="<?php Helper::options()->siteUrl()?>"]:not(a[target="_blank"], a[no-pjax])', {
    container: '#main',
    fragment: '#main',
    timeout: 8000
})

$(document).on('pjax:send', function () {
	$('html').animate({ scrollTop: 0 }, 500);
	NProgress.start();
}).on('pjax:complete', function () {
	NProgress.done();
<?php if (!empty($this->options->xuanran) && in_array('prism', $this->options->xuanran)){ ?>
	self.Prism.highlightAll("#main");
<?php } ?>
<?php if (!empty($this->options->xuanran) && in_array('katex', $this->options->xuanran)){ ?>
	renderMathInElement(document.body,{
		delimiters: [
			{left: "$$", right: "$$", display: true},
			{left: "$", right: "$", display: false}
		]
	})
<?php } ?>
	<?php _e($this->options->pjaxCode); ?>
});

</script>
<?php } ?>
<style>
.gtt{
	position: fixed; 
	bottom:10%; 
	right:15%; 
	width:15%; 
	height:65px; 
	text-align: center;
	filter:alpha(opacity=40);
	-moz-opacity:0.4;
	-khtml-opacity: 0.4;
	opacity: 0.4;
}

.gtt:hover{	
	filter:alpha(opacity=90);
	-moz-opacity: 0.9;
	-khtml-opacity: 0.9;
	opacity: 0.9;
}
</style>
<div id="go-to-top" class="gtt"><!--
<svg xmlns="http://www.w3.org/2000/svg" version="1.1" >
  <polyline points="20,40 40,20 60,40" style="fill:none;stroke:black;stroke-width:8" />
</svg>-->
<img src="<?php $this->options->themeUrl('img/top.png'); ?>" height="80%">
</div>

<script>
$(function () {
	$(function () {
		$(window).scroll(function () {
		  	if ($(window).scrollTop() > 100) {
				$("#go-to-top").fadeIn(1000);
			}
			else {
				$("#go-to-top").fadeOut(1000);
			}
		});
		$("#go-to-top").click(function () {
			if ($('html').scrollTop()) {
				$('html').animate({ scrollTop: 0 }, 1000);
				return false;
			}
			$('body').animate({ scrollTop: 0 }, 1000);
			return false;
		});
	});
});
</script>

<?php $this->footer(); ?>
</body>
</html>
