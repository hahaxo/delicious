<?php require('header.php');require('nav.php');?>
<div class="container">
<div class="card">



<div data-note-content="" class="show-content">
  <h2>介绍</h2>
  <p>从2009年1月开始，我在<a href="https://del.icio.us" target="_blank">https://del.icio.us</a> 上面收藏了超过800+ 的网址 URL。虽然这个服务被转售了4次，但依然可以提供稳定切高速的服务。直到今年7月被 <a href="http://pinbord.in" target="_blank">pinbord.in</a> 收购后，通知会被下线终止服务。</p>
  <p>在接下来的时间通过各种比较试用，最后比较满意的是 pocket.com 和 pinboard.in。可是这2个服务也有不符合我自身需求的点：pocket.com 在我常用的网络下访问速度始终很慢；pinboard.in取消了终身付费制，改成了年付费的形式。并且我使用网址收藏的诉求比较聚焦，就是只收藏站点。对于文章的 read later ，我日常使用 instapaper。</p>
  <p>最后，只好根据自己的需求，以我个人使用习惯写了这个网站收藏夹（网址收藏）服务，用来代替被下线的<a href="https://del.icio.us" target="_blank">https://del.icio.us</a> 。在稳定性和持久性方面，我会持续完善。</p>
  <h2>数据是属于你的</h2>
  <p>所有没有导出功能的网络收藏夹都不建议使用。由于想开放给周围的小伙伴使用，特意增加了数据的导入导出功能。可以随时导出收藏的网址，方便备份和导入到其他服务。</p>
  <h2 id="usage">如何使用</h2>
  <h3>收藏</h3>
  <h4>PC 浏览器</h4>
  <ul>
    <li>将收藏按钮拖到您的浏览器书签工具条中。<a class="bookmarklets" href="javascript:q=location.href;if(document.getSelection){d=document.getSelection();}else{d='';};p=document.title;void(open('http://hahaxo.com/delicious/add.php?url='+encodeURIComponent(q)+'&description='+encodeURIComponent(d)+'&title='+encodeURIComponent(p),'Delicious','toolbar=no,width=640,height=400'));">+ Add Delicious</a></li>
    <li>浏览网页时，看到感兴趣的页面，点击书签工具条中的“收藏按钮”，帐户登录后即可添加成功。</li>
    <li>在网页中把喜欢的文字选中后再点击“收藏按钮”，可以把选中的文字自动填入到备注中。</li>
  </ul>
  <h4>移动端</h4>
  <ul>
    <li>不会 APP 开发，为了提升收藏效率，建议使用 workflow 来实现一键收藏。<a href="https://workflow.is/workflows/e437b477c38c4533a432fa6cc3f45352">一键分享到 Delicious的 workflow 规则</a></li>
  </ul>
  <h3>导入导出</h3>
  <p>登录后，可将在本站收藏的书签数据导出标准的HTML文件。<a href="export.php">一键导出</a></p>
  <h3>配合第三方使用</h3>
  <p>为了配合使用 ifttt.com 的服务，扩展更多的使用场景。支持RSS输出。</p>

</div>

<!-- 评论框 -->
<div class="livere">
  <!-- 来必力City版安装代码 -->
<div id="lv-container" data-id="city" data-uid="MTAyMC8zMDg2OS83NDE4">
	<script type="text/javascript">
   (function(d, s) {
       var j, e = d.getElementsByTagName(s)[0];

       if (typeof LivereTower === 'function') { return; }

       j = d.createElement(s);
       j.src = 'https://cdn-city.livere.com/js/embed.dist.js';
       j.async = true;

       e.parentNode.insertBefore(j, e);
   })(document, 'script');
	</script>
<noscript> 为正常使用来必力评论功能请激活JavaScript</noscript>
</div>
<!-- City版安装代码已完成 -->
</div>
</div>
</div>
<?php require('index-copyright.php');require('footer.php') ?>
