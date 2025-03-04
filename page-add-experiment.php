<?php
 get_header();
 pageBanner();
?>
<form method="POST" class="flex flex-col gap-3" enctype="multipart/form-data"
  action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
  <?php wp_nonce_field('experiment_nonce', 'experiment_nonce'); ?>
  <input type="hidden" name="action" value="submit_experiment">

  <label>Title:</label>
  <input type="text" name="title" required>

  <label>Category:</label>
  <input type="text" name="experiment_category">

  <label>Purpose:</label>
  <textarea name="experiment_purpose"></textarea>

  <label>Tools:</label>
  <textarea name="experiment_tool"></textarea>

  <label>Steps:</label>
  <textarea name="experiment_steps"></textarea>

  <label>Reports:</label>
  <textarea name="experiment_reports"></textarea>

  <label>Experiment Image:</label>
  <input type="file" name="experiment_image" accept="image/*">

  <label>Experiment Video:</label>
  <input type="file" name="experiment_video" accept="video/*">

  <button type="submit" name="submit_experiment">Submit Experiment</button>
</form>





<?php get_footer(); ?>