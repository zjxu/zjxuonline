软件名称：云边开源轻博v0.5 Beta
软件大小：1.99MB
运行环境：php5.2+mysql5
软件语言：简体中文
软件授权：免费开源
软件介绍：
云边开源轻博是国内首个开源的轻博客平台，作者吸取轻博使用方面的优点，争取做最好用的开源轻博客客给每一位朋友使用，为站长搭建更为简单方便的交流平台。
云边开源轻博客v0.5 beta 发布说明
1、可以发布文字、音乐、视频、图片四大类型内容。并且设计合理使用简便。
2、支持QQ、新浪微博登录，云边外部连接模块设计合理，通过云边二次开发，可以很方便的关联其他网站资源。
3、支持发帖同步到新浪微博，支持QQ、微博头像同步到云边。
4、支持关注、喜欢(收藏)、评论等交互性的操作。
5、发布音乐类型可以使用外部地址的方式，比虾米、优酷，等网站。
6、发布图片类型使用flash上传组件，瞬间发布多张图片并且自动缩放+水印。使用异常简单。
7、完善的资源管理机制，未使用的附件将会在发布后被删除。几乎不会出现冗余资源。
8、推荐、发现频道充分调动平台资源，更优化的展示给用户内容
9、完善的标签使用，调用机制，不会错过任何话题。
10、支持二次开发，功能全部模块化处理二次开发更容易。
11、页面使用HTML5+CSS3效果完成，ie9及火狐chrome等拥有最好浏览效果
--------------更多功能由你来发掘---------------
1.0安装说明：	
【特别注意linux主机请选择二进制上传文件】
1、程序安装目录及其子目录可写（权限：777）
2、程序未安装情况下会默认进入程序安装界面，按照安装提示输入安装信息，确定提交便可大功告成。
3、至此你便可开始对云边开源轻博进行一番折腾，祝您使用愉快，如遇使用中出现问题，请及时反馈，云边轻博将做好不断的更新和完善。
PS:如果安装中出现问题请及时反馈到官方网站小组，并且在bug分类提交。
http://www.thinksaas.cn/index.php/group/group/groupid-129
好让我们能够尽快的帮助您解决安装盒使用上的一些问题。

nginx rewrite

location /
{
    try_files $uri $uri/ /index.php?q=$uri&$args;
}