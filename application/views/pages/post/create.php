
<?php echo validation_errors(); ?>

<?php echo form_open('posts/create'); ?>

<label for="title">Title</label>
<input type="text" name="title" /><br />

<label for="text">Text</label>
<textarea name="content"></textarea><br />

<input type="submit" name="submit" value="Create news item" />

</form>