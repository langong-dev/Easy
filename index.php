<?php
/**
 * 一个简洁的Typecho主题，自带KaTeX、Prismjs，支持PJAX无刷新跳转
 * 
 * @package Easy
 * @author LanGong Development Team
 * @version 1.1.2
 * @link github.com/langong-dev/Easy
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<div class="col-mb-12 col-8" id="main" role="main">
<center>
	<?php while($this->next()): ?>
        <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
			<h2 class="post-title" itemprop="name headline"><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
			<ul class="post-meta">
				<li itemprop="author" itemscope itemtype="http://schema.org/Person"><?php _e('作者  '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li>
				<li><?php _e('创建日期  '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></li>
				<li><?php _e('分类  '); ?><?php $this->category(','); ?></li>
			</ul>
            <div class="post-content" itemprop="articleBody">
			<?php //$this->content('- 阅读剩余部分 -'); ?>
			<?php if ($this->fields->image){  _e('<img width="80%" src="'.$this->fields->image.'">');} ?>
            </div>
        </article>
	<?php endwhile; ?>
    <?php $this->pageNav('&laquo; 上一页', '下一页 &raquo;'); ?>
</center>
</div><!-- end #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
