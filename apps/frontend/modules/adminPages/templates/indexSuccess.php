<?php if ($pages->count()) { ?>
  <table cellspacing="0" cellpadding="0" border="0" width="100%">
    <thead>
      <tr>
        <th class="capt" colspan="5"><?php echo ("pages"); ?></th>
      </tr>
      <tr>
        <th class="left"><?php echo ("name"); ?></th>       
        <th class="left"><?php echo ("layout"); ?></th>  
        <th class="left"><?php echo ("title"); ?></th>  
        <th class="left"><?php echo ("body"); ?></th>  
        <th class="left"><?php echo ("published"); ?></th>  
        <th class="left"><?php echo ("description"); ?></th>  
        <th class="left"><?php echo ("keywords"); ?></th>  
        <th class="left"><?php echo ("robots"); ?></th>  
        <th class="left"><?php echo ("author"); ?></th>   
        <th class="left"><?php echo ("created"); ?></th>
        <th class="left"><?php echo ("updated"); ?></th>
        <th width="150px"><?php echo ("Actions"); ?></th>
      </tr>
    </thead>
    <tfoot>
      <th colspan="5"></th>
    </tfoot>
    <tbody>
      <?php foreach ($pages as $row) { ?>
        <tr>
          <td class="left"><?php echo $row->name; ?></td>
          <td class="left"><?php echo $row->layout; ?></td>
          <td class="left"><?php echo $row->title; ?></td>
          <td class="left"><?php echo $row->body; ?></td>
          <td class="left"><?php echo $row->published; ?></td>
          <td class="left"><?php echo $row->description; ?></td>
          <td class="left"><?php echo $row->keywords; ?></td>
          <td class="left"><?php echo $row->robots; ?></td>
          <td class="left"><?php echo $row->author; ?></td>
          <td class="left"><?php echo $row->created_at; ?></td>  
          <td class="left"><?php echo $row->updated_at; ?></td>           
          <td><a class="edit" href="<?php echo url_for('admin_pages_edit',array( 'id' => $row->getId())); ?>"><?php echo ("Edit"); ?></a> </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
<?php } else { ?>
  <h3><?php echo ("No page found."); ?></h3>
<?php } ?>


  <div class="settingsblock">
    <a class="button" href="<?php echo url_for('admin_pages_new'); ?>"><img src="/images/admin/small_icons/Add.png" alt="" /><br /><?php echo ('Add a page'); ?></a>
  </div>
