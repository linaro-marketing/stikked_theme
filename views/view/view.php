<?php $this->load->view('defaults/header'); ?>

<?php if(isset($insert)){
	echo $insert;
}?>

<section>
	<div class="row">
        <div class="container">
		<div class="span12">
			<div class="page-header">
				<h1 class="pagetitle right"><?php echo $title; ?></h1>
			</div>
				<div class="span12">
					<div class="detail by">By <?php echo $name; ?>, <?php $p = explode(',', timespan($created, time())); echo $p[0]?> ago, written in <?php echo $lang; ?>.</div>
					<?php if(isset($inreply)){?><div class="detail by">This paste is a reply to <a href="<?php echo $inreply['url']?>"><?php echo $inreply['title']; ?></a> by <?php echo $inreply['name']; ?></div><?php }?>
					<div class="detail"><span class="item">URL </span><a href="<?php echo $url; ?>"><?php echo $url; ?></a></div>
					<?php if(!empty($snipurl)){?>
						<div class="detail"><div class="item">Shorturl </div><a href="<?php echo $snipurl; ?>"><?php echo htmlspecialchars($snipurl) ?></a></div>
					<?php }?>
					<div class="detail"><span class="item">Embed </span><input id="embed_field" type="text" value="<?php echo htmlspecialchars('<iframe src="' . site_url('view/embed/' . $pid) . '" style="border:none;width:100%"></iframe>'); ?>" /></div>
					<div class="detail"><a class="control" href="<?php echo site_url("view/download/".$pid); ?>">Download Paste</a> or <a class="control" href="<?php echo site_url("view/raw/".$pid); ?>">View Raw</a> <!--&mdash; <a href="#" class="expand control">Expand paste</a> to full width of browser</div> z-->
                </div>
        </div>
    </div>
	</div>
</section>

<section class="outputCodeSection">
	<div class="row">
        <div class="container">
		<div class="span12">
            <textarea class="CodeMirror" id="outputCode"><?php echo $raw; ?></textarea>
        </div>
        </div>
	</div>
</section>
<section class="inputCodeSection">
<?php

function checkNum($num){
	return ($num%2) ? TRUE : FALSE;
}

if(isset($replies) and !empty($replies)){
	$n = 1;
?>
	<h1>Replies to <?php echo $title; ?> </h1>

	<table cellpadding="0" cellspacing="0" border="0" class="recent table table-striped table-bordered">
		<thead>
			<tr>
				<th class="title">Title</th>
				<th class="name">Name</th>
				<th class="lang">Language</th>
				<th class="hidden">UNIX</th>
				<th class="time">When</th>
			</tr>
		</thead>
		<tbody>
	<?php foreach($replies as $reply){
			if(checkNum($n)){
				$eo = "even";
			} else {
				$eo = "odd";
			}
			$n++;
	?>

		<tr class="<?php echo $eo; ?>">
			<td class="first"><a href="<?php echo site_url("view/".$reply['pid']); ?>"><?php echo $reply['title']; ?></a></td>
			<td><?php echo $reply['name']; ?></td>
			<td><?php echo $reply['lang']; ?></td>
			<td class="hidden"><?php echo $reply['created']; ?></td>
			<td><?php $p = explode(",", timespan($reply['created'], time())); echo $p[0];?> ago.</td>
		</tr>

	<?php }?>
	</tbody>
	</table>
</section>
<?php echo $pages;
}

	$reply_form['page']['title'] = "Reply to \"$title\"";
	$reply_form['page']['instructions'] = 'Here you can reply to the paste above';
	$this->load->view('defaults/paste_form', $reply_form); ?>


<?php $this->load->view('defaults/footer');?>
