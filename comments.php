<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="comments">
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
	<h3><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></h3>
    
    <?php $comments->listComments(); ?>

    <?php $comments->pageNav('&laquo; 上一页', '下一页 &raquo;'); ?>

    <?php endif; ?>

    <?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="respond">
        <div class="cancel-comment-reply">
        <?php $comments->cancelReply(); ?>
        </div>
    
    	<h3 id="response"><?php _e('我也来评论'); ?></h3>
    	<form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
            <?php if($this->user->hasLogin()): ?>
    		<p><?php _e('登录身份  '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
            <?php else: ?>
	
		<p>
                <label for="author" class="required"><?php _e('昵称'); ?></label>
    			<input type="text" name="author" id="author" class="text" value="<?php $this->remember('author'); ?>" required />
    		</p>
    		<p>
                <label for="mail"<?php if ($this->options->commentsRequireMail): ?> class="required"<?php endif; ?>><?php _e('Email'); ?></label>
    			<input type="email" name="mail" id="mail" class="text" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
    		</p>
    		<p>
                <label for="url"<?php if ($this->options->commentsRequireURL): ?> class="required"<?php endif; ?>><?php _e('网站'); ?></label>
    			<input type="url" name="url" id="url" class="text" placeholder="<?php _e('http://'); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
    		</p>
            <?php endif; ?>
    		<p>
                <label for="textarea" class="required"><?php _e('内容'); ?></label>
                <textarea rows="8" cols="50" name="text" id="textarea" class="textarea" required ><?php $this->remember('text'); ?></textarea>
            </p>
    		<p>
                <button type="submit" class="submit"><?php _e('走你'); ?></button>
            </p>
	</form>
<!--
<script>
//#comment-form是提交评论的form
$('#comment-form').submit(function(event){
    var commentdata=$(this).serializeArray('author', 'mail', 'url', 'text');
    //serializeArray()可以获取到表单数据
    $.ajax({
    url:$(this).attr('<?php $this->commentUrl(); ?>'), //表单的提交链接
        type:$(this).attr('post'), //表单的提交方式(post)
        data:commentdata, //需要提交的数据
        beforeSend:function(){}, //AJAX提交前
        error:function(){alert('失败');}, //AJAX提交失败
        success:function(data){alert('成功');} //AJAX提交成功
    });
    return false; //阻止原先提交
});
</script>

-->
    </div>
    <?php else: ?>
    <h3><?php _e('你来晚了，评论已经关闭'); ?></h3>
    <?php endif; ?>
</div>
