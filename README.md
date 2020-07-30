# Easy

一个简洁的Typecho主题，自带KaTeX、Prismjs

## 部署方案1 极速部署

请确保您已经安装了`git`

```sh
# 进入目录
cd PATH-TO-TYPECHO/usr/themes

# 克隆
git clone https://github.com/langong-dev/Easy
```

## 部署方案2 手动部署

到 Releases 页面里下载最新版的源代码压缩包

上传到typecho根目录的`/usr/themes`，并把文件夹命名为`Easy`

## 启用主题

确保您的主题目录结构与下面的结构吻合

```
/usr/themes
       | Easy
           | index.php
           | ...
       | 其他主题文件夹
           | index.php
           | ...
       | ...
```

到`控制台-外观`里找到Easy主题并启用

## 设置

到`控制台-外观-设置当前外观`里面设置

注： 本主题自带Prism代码高亮、KaTeX公式渲染，尽量不要再启用其他相关的插件
