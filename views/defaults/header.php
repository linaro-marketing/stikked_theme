<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
$page_title = '';
if(isset($title))
{
    $page_title .= $title . ' - ';
}
$page_title .= $this->config->item('site_name');
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <title><?php echo $page_title; ?></title>
        <meta name="viewport" content="width=device-width,initial-scale=1"/>
<?php

//Carabiner
$this->carabiner->config(array(
    'script_dir' => 'themes/linaro/js/',
    'style_dir'  => 'themes/linaro/css/',
    'cache_dir'  => 'static/asset/',
    'base_uri'	 => base_url(),
    'combine'	 => true,
    'dev'		 => !$this->config->item('combine_assets'),
));

// CSS
$this->carabiner->css('bootstrap.css');
$this->carabiner->css('style.css');
$this->carabiner->css('codemirror.css');
$this->carabiner->css('init.css');
$this->carabiner->css('styles.css');
$this->carabiner->display('css');

?>
	<script type="text/javascript">
	//<![CDATA[
	var base_url = '<?php echo base_url(); ?>';
	//]]>
	</script>
	</head>

<body id="wrapper">

<nav class="navbar navbar-fixed-top">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    <a class="navbar-left" href="https://www.linaro.org">
        <img src="https://www.linaro.org/assets/images/content/Linaro-Logo.svg">
    </a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <?php $l = $this->uri->segment(1)?>
            <li><a <?php if($l == ""){ echo 'class="active"'; }?> href="<?php echo base_url()?>" title="Create A New Paste">Create</a></li>
            <?php if(!$this->config->item('private_only')){ ?>
            <li><a <?php if($l == "lists" || $l == "view" and $this->uri->segment(2) != "options"){ echo 'class="active"'; }?> href="<?php echo site_url('lists'); ?>" title="Recent Pastes">Recent</a></li>
            <!--<li><a <?php if($l == "trends"){ echo 'class="active"'; }?> href="<?php echo site_url('trends'); ?>" title="Trending Pastes">Trending</a></li>-->
            <?php } ?>
            <li><a  <?php if($l == "api"){ echo 'class="active"'; }?> href="<?php echo site_url('api'); ?>" title="API">API</a></li>
        </ul>
    </div>
</nav>
<div class="container-fluid" id="main">
    <?php if(isset($status_message)){?>
    <div class="message success change">
        <div class="container">
            <?php echo $status_message; ?>
        </div>
    </div>
    <?php }?>
