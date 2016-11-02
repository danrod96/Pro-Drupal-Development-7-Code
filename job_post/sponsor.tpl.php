<?php 
/**
 * @file
 *
 * Default theme implementation for rendering job post sponsor information
 *
 * Available variables:
 *
 * - $sponsor_id: the node ID asociated with the job posting
 * - $sponsor: the name of the job post sponsor
 *
 */
?>
<div id="sponsor-<?php print $sponsor_id; ?>" class="sponsor">
 <div class="sponsor-title">
  <h2>Sponsored by</h2>
 </div>
 <div class="sponsored-by-message">
   <p>Job sponsored by: <?php print $sponsor; ?></p>
 </div>
</div>