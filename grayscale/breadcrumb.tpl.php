<?php if (!empty($breadcrumb)): ?>
	<p><?php print $testi; ?>Quiero chele para <?php print $breadcrumb_delimiter; ?></p>
	<span class="breadcrumb"><?php print implode(' ' . $breadcrumb_delimiter . ' ', $breadcrumb); ?></span>
<?php endif; ?>