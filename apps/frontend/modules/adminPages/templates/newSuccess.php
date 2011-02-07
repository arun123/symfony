<table border="0" cellspacing="5" cellpadding="5">
  <form action="<?php echo url_for('admin_pages_new'); ?>" method="post" accept-charset="utf-8">
  <?php include_partial('form', array('form' => $form)); ?>
  <input type="submit" name="submit" value="submit" id="submit">
  </form>
</table>