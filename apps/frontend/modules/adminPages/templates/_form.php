
<p>
  <?php echo $form['name']->renderLabel(("Name")); ?>
  <?php echo $form['name']->render(); ?>
</p>
<p>
  <?php echo $form['layout']->renderLabel("Layout"); ?>
  <?php echo $form['layout']->render(); ?>
</p>
<p>
  <?php echo $form['title']->renderLabel("Title"); ?>
  <?php echo $form['title']->render(); ?>
</p>
<p>
  <?php echo $form['body']->renderLabel("Body"); ?>
  <?php echo $form['body']->render(); ?>
</p>
<p>
  <?php echo $form['published']->renderLabel("Published"); ?>
  <?php echo $form['published']->render(); ?>
</p>
<p>
  <?php echo $form['description']->renderLabel("Description"); ?>
  <?php echo $form['description']->render(); ?>
</p>
<p>
  <?php echo $form['keywords']->renderLabel("Keywords"); ?>
  <?php echo $form['keywords']->render(); ?>
</p>
<p>
  <?php echo $form['robots']->renderLabel("Robots"); ?>
  <?php echo $form['robots']->render(); ?>
</p>
<p>
  <?php echo $form['author']->renderLabel("Author"); ?>
  <?php echo $form['author']->render(); ?>
</p>

<p class="submit_margin">
  <label for="submit">&nbsp;</label>
  <input type="submit" name="submit" value="submit" id="submit">
</p>