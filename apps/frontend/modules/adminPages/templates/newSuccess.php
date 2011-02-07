<fieldset class="form_css">
  <form action="<?php echo url_for('admin_pages_new'); ?>" method="post" >
    <ul class="form_css">

      <?php include_partial('form', array('form' => $form)); ?>

    </ul>
  </form>
</fieldset>

<?php include_partial('actions_bar', array('form' => $form)); ?>
