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
            //NProgress.start();
}).on('pjax:complete', function () {
	//NProgress.done();
	
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


<?php $this->footer(); ?>
</body>
</html>
