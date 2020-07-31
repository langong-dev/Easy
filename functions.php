<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点 LOGO 地址'), _t('在这里填入一个图片 URL 地址, 以在网站标题前加上一个 LOGO'));
    $form->addInput($logoUrl);
    
    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array('ShowRecentPosts' => _t('显示最新文章'),
    'ShowRecentComments' => _t('显示最近回复'),
    'ShowCategory' => _t('显示分类'),
    'ShowArchive' => _t('显示归档'),
	'ShowOther' => _t('显示其它杂项'),
	'link' => _t('显示链接')),
    array('ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowOther','link'), _t('侧边栏显示'));
    $form->addInput($sidebarBlock->multiMode());
	
    $linkCode = new Typecho_Widget_Helper_Form_Element_Textarea('linkCode', null, null, _t('链接列表'), _t('每行一个，例如<pre>&lt;li&gt;&lt;a href="langong-dev.github.io" title="LanGong 开发团队"&gt;LanGong&lt;/a&gt;&lt;/li&gt;</pre>'));
	$form->addInput($linkCode);	
	$foots = new Typecho_Widget_Helper_Form_Element_Text('foots', NULL, NULL, _t('底部信息'), _t('在这里输入的东西会在每个页面地下显示出来哦'));
    $form->addInput($foots);
    $cssCode = new Typecho_Widget_Helper_Form_Element_Textarea('cssCode', null, null, _t('额外自定义 CSS'), _t('通过自定义 CSS 您可以很方便的设置页面样式，自定义 CSS 不会影响网站源代码。'));
    $form->addInput($cssCode);
    $jsCode = new Typecho_Widget_Helper_Form_Element_Textarea('jsCode', null, null, _t('额外泳自定义 JS'), _t('可以在这里自定义JS代码，它会在所有页面生效。'));
    $form->addInput($jsCode);
    $htmlCode = new Typecho_Widget_Helper_Form_Element_Textarea('htmlCode', null, null, _t('额外泳自定义 HTML'), _t('通过自定义 HTML 您可以很方便的引用其他文件。'));
    $form->addInput($htmlCode);
    $xuanran = new Typecho_Widget_Helper_Form_Element_Checkbox('xuanran',
    array('katex' => _t('渲染KaTeX公式'),
    'prism' => _t('Prism代码高亮'),
    'pjax' => _t('全站PJAX优化，无刷新跳转')),
    NULL,
     _t('额外渲染'),_t('勾选即渲染'));
    $form->addInput($xuanran->multiMode());
    $pjaxCode = new Typecho_Widget_Helper_Form_Element_Textarea('pjaxCode', null, null, _t('PJAX 回调代码'), _t('如果您有什么插件或自定义代码中需要及时渲染页面，您可以在这里添加他们的回调代码。'));
    $form->addInput($pjaxCode);
}



function themeFields($layout) {
    //$logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
	$image = new Typecho_Widget_Helper_Form_Element_Text('image', null, null, _t('文章图片'), _t('文章图片会显示在文章的顶部。'));
	$layout->addItem($image);
}


