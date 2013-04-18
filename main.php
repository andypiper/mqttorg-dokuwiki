<?php
/**
 * DokuWiki Default Template
 *
 * This is the template you need to change for the overall look
 * of DokuWiki.
 *
 * You should leave the doctype at the very top - It should
 * always be the very first line of a document.
 *
 * @link   http://dokuwiki.org/templates
 * @author Andreas Gohr <andi@splitbrain.org>
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $conf['lang']?>"
 lang="<?php echo $conf['lang']?>" dir="<?php echo $lang['direction']?>">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>
    MQ Telemetry Transport &raquo; wiki &raquo; <?php tpl_pagetitle()?>
  </title>

  <?php tpl_metaheaders()?>

  <link rel="shortcut icon" href="<?php echo DOKU_TPL?>images/favicon.ico" />

  <?php /*old includehook*/ @include(dirname(__FILE__).'/meta.html')?>
  <link rel="stylesheet" href="http://mqtt.org/new/wp-content/themes/mqtt/style.css" type="text/css" media="screen" />
</head>

<body>
<?php /*old includehook*/ @include(dirname(__FILE__).'/topheader.html')?>
<div id="container">
   <div id="nav">
      <a href="http://mqtt.org/">
      <img id="logo" src="http://mqtt.org/new/wp-content/uploads/2011/08/mqttorg-glow.png" alt="MQTT logo" width="260" height="68" /></a>
      <span class="navlinks">
      <a class="nav" href="http://mqtt.org/news">News</a>
      <a class="nav" href="http://mqtt.org/documentation">Docs</a>
      <a class="nav" href="http://mqtt.org/wiki">Wiki</a>
      <a class="nav" href="http://mqtt.org/software">Software</a>
      <a class="nav" href="http://mqtt.org/get-involved">Community</a>
      <a class="nav" href="http://mqtt.org/faq">FAQ</a>
      </span>
   </div>
 <div id="content" class="dokuwiki">

  <?php html_msgarea()?>

    <div class="bar searchbar">
        <?php tpl_searchform()?>&nbsp;
    </div>
  <div class="clearer">&nbsp;</div>
  <h2 class="wikititle <?php echo $page_type; ?>"><?php tpl_link(wl($ID,''),tpl_pagetitle($ID,true),'') ?></h2>

    <?php /*old includehook*/ @include(dirname(__FILE__).'/header.html')?>

    <?php if($conf['breadcrumbs']){?>
    <div class="breadcrumbs">
      <?php tpl_breadcrumbs()?>
      <?php //tpl_youarehere() //(some people prefer this)?>
    </div>
    <?php }?>

    <?php if($conf['youarehere']){?>
    <div class="breadcrumbs">
      <?php tpl_youarehere() ?>
    </div>
    <?php }?>

  <?php tpl_flush()?>

  <?php /*old includehook*/ @include(dirname(__FILE__).'/pageheader.html')?>

  <div class="page">
    <!-- wikipage start -->
    <?php tpl_content()?>
    <!-- wikipage stop -->
  </div>

  <div class="clearer">&nbsp;</div>

  <?php tpl_flush()?>
  <div class="stylefoot">

    <div class="meta">
      <div class="user">
        <?php tpl_userinfo()?>
      </div>
      <div class="doc">
        <?php tpl_pageinfo()?>
      </div>
    </div>

    <div class="bar" id="bar__bottom">
      <div class="bar-left" id="bar__bottomleft">
        <?php tpl_button('edit')?>
        <?php tpl_button('history')?>
        <?php tpl_button('revert')?>
      </div>
      <div class="bar-right" id="bar__bottomright">
        <?php tpl_button('subscribe')?>
        <?php tpl_button('media')?>
        <?php tpl_button('admin')?>
        <?php tpl_button('profile')?>
        <?php tpl_button('login')?>
        <?php tpl_button('index')?>
        <?php tpl_button('top')?>&nbsp;
      </div>
      <div class="clearer"></div>
    </div>

   </div>

</div>
</div>
<?php /*old includehook*/ @include(dirname(__FILE__).'/footer.html')?>

<div class="no"><?php /* provide DokuWiki housekeeping, required in all templates */ tpl_indexerWebBug()?></div>
</body>
</html>
