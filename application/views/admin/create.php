<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('index.php/admin/create'); ?>    
    <table class="table table-bordered table-striped">
          <tr>
            <td><label for="icon_class_value">Icon Class</label></td>
            <td><input type="text" name="icon_class_value" class="form-control"></td>
          </tr>
          
        <tr>
            <td><label for="title_mblock">Title</label></td>
            <td><input type="input" name="title_mblock" size="50" class="form-control" /></td>

        </tr>


        <tr>
            <td><label for="content_mblock">Content</label></td>
            <td><textarea name="content_mblock" rows="10" cols="40" class="form-control"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Submit" class="btn btn-success" /></td>
        </tr>
    </table>    
</form>

