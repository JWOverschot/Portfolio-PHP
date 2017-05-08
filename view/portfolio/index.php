<div onclick="feedbackClose()" id="feedback-bg"></div>
	<content>
		<div id="h2color">
			<section class="text-box">
			<h2>Projecten:</h2>
			<p>Voor projecten die nog niet af zijn check mijn <a href="https://github.com/JWOverschot?tab=repositories" target="_blank">github</a>.</p>
		<div id="articles">
		<?php foreach ($projects as $project) { ?>
			<a href="<?= $project['project_link']; ?>" target="_blank"><div class="imgs" style="background-image:url(<?= $project['project_img']; ?>)"><h3 id="mouseimg"><?= $project['project_name']; ?></h3><p><?= $project['project_description']; ?></p></div></a>
		<?php } ?>
		</div>
		</section>
	</content>