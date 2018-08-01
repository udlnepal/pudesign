<h2><?php echo $title_mblock; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('index.php/admin/edit/'.$mblock_item['id']); ?>
    <table class="table table-bordered table-striped">
        <tr>
            <td><label for="icon_class_value">Icon Class</label></td>
            <td><input class="form-control" type="text" name="icon_class_value" value="<?php echo $mblock_item['icon_class_value'] ?>"></td>
        </tr>
        <tr>
            <td><label for="title_mblock">Title</label></td>
            <td><input class="form-control" type="input" name="title_mblock" size="50" value="<?php echo $mblock_item['title_mblock'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="content_mblock">Content</label></td>
            <td><textarea class="form-control" name="content_mblock" rows="10" cols="40"><?php echo $mblock_item['content_mblock'] ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input class="btn btn-success" type="submit" name="submit" value="Update" /></td>
        </tr>
    </table>
</form>