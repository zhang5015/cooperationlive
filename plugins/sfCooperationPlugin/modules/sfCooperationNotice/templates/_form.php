<!-- apps/frontend/modules/notice/templates/_form.php -->
<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>
 
<?php echo form_tag_for($form, '@notice') ?>
  <table id="notice_form">
    <tfoot>
      <tr>
        <td colspan="2">
          <input type="submit" value="Preview your notice" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form ?>
    </tbody>
  </table>
</form>
