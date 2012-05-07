<?php defined("SYSPATH") or die("No direct script access.") ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <? $theme->start_combining("script,css") ?>
    <title>
      <? if ($page_title): ?>
        <?= $page_title ?>
      <? else: ?>
        <? if ($theme->item()): ?>
          <?= $theme->item()->title ?>
        <? elseif ($theme->tag()): ?>
          <?= t("Photos tagged with %tag_title", array("tag_title" => $theme->tag()->name)) ?>
        <? else: /* Not an item, not a tag, no page_title specified.  Help! */ ?>
          <?= item::root()->title ?>
        <? endif ?>
      <? endif ?>
    </title>
    <link rel="shortcut icon"
          href="<?= url::file(module::get_var("gallery", "favicon_url")) ?>"
          type="image/x-icon" />
    <link rel="apple-touch-icon-precomposed"
          href="<?= url::file(module::get_var("gallery", "apple_touch_icon_url")) ?>" />
    <? if ($theme->page_type == "collection"): ?>
      <? if ($thumb_proportion != 1): ?>
        <? $new_width = round($thumb_proportion * 213) ?>
        <? $new_height = round($thumb_proportion * 240) ?>
        <style type="text/css">
        .g-view #g-content #g-album-grid .g-item {
          width: <?= $new_width ?>px;
          height: <?= $new_height ?>px;
          /* <?= $thumb_proportion ?> */
        }
        </style>
      <? endif ?>
    <? endif ?>

    <?= $theme->script("json2-min.js") ?>
    <?= $theme->script("jquery-1.7.1.min.js") ?>
    <?= $theme->script("jquery.form.js") ?>
    <?= $theme->script("jquery-ui.js") ?>
    <?= $theme->script("gallery.common.js") ?>
    <? /* MSG_CANCEL is required by gallery.dialog.js */ ?>
    <script type="text/javascript">
    var MSG_CANCEL = <?= t('Cancel')->for_js() ?>;
    </script>
    <?= $theme->script("gallery.ajax.js") ?>
    <?= $theme->script("gallery.dialog.js") ?>
    <?= $theme->script("superfish/js/superfish.js") ?>
    <?= $theme->script("jquery.localscroll.js") ?>

    <? /* These are page specific but they get combined */ ?>
    <? if ($theme->page_subtype == "photo"): ?>
    <?= $theme->script("jquery.scrollTo.js") ?>
    <?= $theme->script("gallery.show_full_size.js") ?>
    <? elseif ($theme->page_subtype == "movie"): ?>
    <?= $theme->script("flowplayer.js") ?>
    <? endif ?>

    <?= $theme->head() ?>

    <? /* Theme specific CSS/JS goes last so that it can override module CSS/JS */ ?>
    <?= $theme->script("bootstrap-dropdown.js") ?>

    <!-- LOOKING FOR YOUR CSS? It's all been combined into the link below -->
    <?= $theme->get_combined("css") ?>

    <link rel="stylesheet" href="/css/type/atfont-face.css" type="text/css" />
    <link rel="stylesheet" href="/css/osp.bootstrap.css" type="text/css" />

    <!-- LOOKING FOR YOUR JAVASCRIPT? It's all been combined into the link below -->
    <?= $theme->get_combined("script") ?>
    <style>
    li {
      list-style: none;
    }
    </style>
  </head>

  <body <?= $theme->body_attributes() ?>>
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container">
                    <ul class="nav">
                        <li>
                            <a href="/" class="brand">OSP</a>
                        </li>
                        <li>
                            <a href="/portfolio/">Portfolio</a>
                        </li>
                        <li>
                            <a href="http://git.constantvzw.org/">Source Files</a>
                        </li>
                        <li class="active">
                            <a href="/images/">Snapshots</a>
                        </li>
                        <li>
                            <a href="/foundry/">Foundry</a>
                        </li>
                    </ul>
                    <ul class="nav pull-right">
                        <li>
                            <a href="/about">About</a>
                        </li>
                        <li>
                            <a href="/contact">Contact</a>
                        </li>
                    </ul>
               </div>
        </div>
    </div>
    <?= $theme->page_top() ?>
      <?= $theme->site_status() ?>
      <div class="container">
        <div class="row">
        </div>
          <!-- hide the menu until after the page has loaded, to minimize menu flicker -->
        <div class="row">
          <div class="subnav">
            <?= $theme->site_menu($theme->item() ? "#g-item-id-{$theme->item()->id}" : "") ?>
          </div>

          <?= $theme->header_bottom() ?>
        </div>
        <div class="row">

        <? if ($theme->item() && !empty($parents)): ?>
        <ul class="breadcrumb">
          <? $i = 0 ?>
          <? foreach ($parents as $parent): ?>
          <li<? if ($i == 0) print " class=\"first\"" ?>>
            <? // Adding ?show=<id> causes Gallery3 to display the page
               // containing that photo.  For now, we just do it for
               // the immediate parent so that when you go back up a
               // level you're on the right page. ?>
            <a href="<?= $parent->url($parent->id == $theme->item()->parent_id ?
                     "show={$theme->item()->id}" : null) ?>">
              <? // limit the title length to something reasonable (defaults to 15) ?>
              <?= html::purify(text::limit_chars($parent->title,
                    module::get_var("gallery", "visible_title_length"))) ?>
            </a> <span class="divider">/</span>
          </li>
          <? $i++ ?>
          <? endforeach ?>
          <li class="active<? if ($i == 0) print " first" ?>">
            <?= html::purify(text::limit_chars($theme->item()->title,
                  module::get_var("gallery", "visible_title_length"))) ?>
          </li>
        </ul>
        </div>
        <? endif ?>
        <div class="row">
          <div class="span9">
                <?= $theme->messages() ?>
                <?= $content ?>
          </div>
          <div class="span3">
            <? if ($theme->page_subtype != "login"): ?>
            <?= new View("sidebar.html") ?>
            <? endif ?>
            <?= $theme->user_menu() ?>
            <?= $theme->header_top() ?>
          </div>
        </div>      
        <div class="row">
          <?= $theme->footer() ?>
          <? if ($footer_text = module::get_var("gallery", "footer_text")): ?>
          <?= $footer_text ?>
          <? endif ?>

          <? if (module::get_var("gallery", "show_credits")): ?>
          <ul id="g-credits" class="g-inline">
            <?= $theme->credits() ?>
          </ul>
          <? endif ?>
        </div>
        <div class="row">
        <?= $theme->page_bottom() ?>
        </div>
      </div>
  </body>
</html>
