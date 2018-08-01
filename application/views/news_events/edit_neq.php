<h2><?php //echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('news_events/edit_neq/'.$new_items['ne_ql_id']); ?>
    <table class="table table-bordered table-striped">
        <tr>
            <td><label for="ne_ql_type">Type</label></td>
            <td><select class="form-control" name="ne_ql_type"><option value="news">News & Events</option>
                <option value="qlinks">Quick Links</option></select>
                
            </td>
        </tr>
        <tr>
            <td><label for="title">Title</label></td>
            <td><input class="form-control" type="input" name="title" size="50" value="<?php echo $new_items['title'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="date">Date</label></td>
            <td><textarea class="form-control" name="date" rows="10" cols="40"><?php echo $new_items['date'] ?></textarea></td>
        </tr>
         <tr>
            <td><label for="link_address">Url</label></td>
            <td><textarea class="form-control" name="link_address" rows="10" cols="40"><?php echo $new_items['link_address'] ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input class="btn btn-success" type="submit" name="submit" value="Update" /></td>
        </tr>
    </table>
</form>