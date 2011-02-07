<fieldset>
  <h1><?php echo ("page edition"); ?></h1>
  
  <form action="<?php echo url_for('admin_pages_edit', array('id' => $sf_params->get('id'))); ?>" method="post" >
      <?php include_partial('form', array('form' => $form)); ?>

  </form>
</fieldset>

<?php include_partial('actions_bar', array('form' => $form)); ?>