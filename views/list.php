<?php $this->load->view('defaults/header');?>
<div class="row">
    <div class="container">
        <div class="page-header">
            <h1>Recent Pastes </h1>
        </div>
		<?php
		if(!empty($pastes)){ ?>
			<table class="recent table table-striped table-bordered">
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
		<?php	foreach($pastes as $paste) {

		?>

		<tr>
			<td class="first"><a href="<?php echo site_url("view/".$paste['pid']); ?>"><?php echo $paste['title']; ?></a></td>
			<td><?php echo $paste['name']; ?></td>
			<td><?php echo $paste['lang']; ?></td>
			<td class="hidden"><?php echo $paste['created']; ?></td>
			<td><?php $p = explode(",", timespan($paste['created'], time())); echo $p[0]; ?> ago.</td>
		</tr>

		<?php }?>
				</tbody>
			</table>
		<?php } else { ?>
			<p>There have been no pastes :(</p>
        <?php
        }
        echo $pages;
        ?>
        <div class="spacer"></div>
    </div>
</div>
<?php $this->load->view('defaults/footer');?>
