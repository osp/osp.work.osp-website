<ul>
  <li id="rss-442037522" class="widget widget_rss">
    <h1 class="widgettitle">
      <a class='rsswidget' href='/works/' title='What we&#39;ve made'>New at
      OSP-works</a>
    </h1>
    <ul>
      <li><a href="/portfolio/balsamine.html"><img src="/portfolio/banner_balsamine.png" style="width:360px;height:180px;"/><br/><h2>Théatre Balsamine</h2></a></li>
      <li><a href="/portfolio/osp.work.panik.html"><img src="/portfolio/banner_osp.work.panik.png" style="width:360px;height:180px;"/><br/><h2>Radio Panik</h2></a></li>
      <li><a href="/portfolio/osp.work.gallait.html"><img src="/portfolio/banner_osp.work.gallait.png" style="width:360px;height:180px;"/><br/><h2>Constant Variable</h2></a></li>
    </ul>
    <p><a href="/portfolio/" title="OSP Works">All our portfolio</a></p>
  </li>
  <li id="rss-442037526" class="widget widget_rss">
    <h1 class="widgettitle">
     <a class='rsswidget' href='/foundry' title=''>New OSP-typefaces</a>
    </h1>
    <ul>
      <li>
        <a href="/foundry/reglo/" rel="bookmark" title="Reglo"><img src="/foundry/wp-content/uploads/reglo-2.png" style="width:360px;height:121px"></a>
      <a href="/foundry/reglo/" rel="bookmark" title="Download Reglo"><h2>Reglo</h2></a>
      
      </li>
      <li>
        <a href="/foundry/crickx/" rel="bookmark" title="Crickx"><img src ="/foundry/wp-content/uploads/crickx_header-600x251.png" style="width:360px;height:144px"></a>
<a href="/foundry/crickx/" rel="bookmark" title="Download Crickx"><h2>Crickx</h2></a>
      </li>
      <li>
        <a href="/foundry/sans-guilt/" rel="bookmark" title="Sans Guilt"><img src ="/foundry/wp-content/uploads/SANS_GUILT-page001SAMPLE1.png" style="width:360px;height:140px"></a>
        <a href="/foundry/sans-guilt/" rel="bookmark" title="Download Sans Guilt"><h2>Sans Guilt</h2></a>
      </li>
    </ul>
    <p><a href="/foundry/" title="OSP-foundry">All our typefaces</a></p>
  </li>

	<li>
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
		<?php endif; ?>
	</li>

  <li class="widget">
    <?php include (TEMPLATEPATH . '/searchform.php'); ?>
  </li>

  <li class="widget"><h2><?php _e('Admin'); ?></h2>
    <ul>
      <?php wp_register(); ?>
      <li><?php wp_loginout(); ?></li>
      <?php wp_meta(); ?>
    </ul>
  </li>
</ul>

