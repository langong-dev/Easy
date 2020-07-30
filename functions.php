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
    'ShowOther' => _t('显示其它杂项')),
    array('ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowOther'), _t('侧边栏显示'));
    
    $form->addInput($sidebarBlock->multiMode());
    $foots = new Typecho_Widget_Helper_Form_Element_Text('foots', NULL, NULL, _t('底部信息'), _t('在这里输入的东西会在每个页面地下显示出来哦'));
    $form->addInput($foots);
    $cssCode = new Typecho_Widget_Helper_Form_Element_Textarea('cssCode', null, null, _t('额外自定义 CSS'), _t('通过自定义 CSS 您可以很方便的设置页面样式，自定义 CSS 不会影响网站源代码。'));
    $form->addInput($cssCode);
    $jsCode = new Typecho_Widget_Helper_Form_Element_Textarea('jsCode', null, null, _t('额外泳自定义 JS'), _t('通过自定义 JS 您可以很方便的设置页面JS回调。'));
    $form->addInput($jsCode);
    $htmlCode = new Typecho_Widget_Helper_Form_Element_Textarea('htmlCode', null, null, _t('额外泳自定义 HTML'), _t('通过自定义 HTML 您可以很方便的引用其他文件。'));
    $form->addInput($htmlCode);
    $xuanran = new Typecho_Widget_Helper_Form_Element_Checkbox('xuanran',
    array('katex' => _t('渲染KaTeX公式'),
    'prism' => _t('Prism代码高亮')),
    NULL,
     _t('额外渲染'),_t('勾选即渲染'));
    $form->addInput($xuanran->multiMode());
}



function themeFields($layout) {
    //$logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
	$image = new Typecho_Widget_Helper_Form_Element_Text('image', null, null, _t('文章图片'), _t('文章图片会显示在文章的顶部。'));
	$layout->addItem($image);
}


