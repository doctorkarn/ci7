<h2><?php echo $title ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create') ?>

    <input type="hidden" name="id" value="<?php echo $news_item['id']; ?>"/><br />

    <label for="title">Title</label>
    <input type="input" name="title" value="<?php echo $news_item['title']; ?>"/><br />

    <label for="text">Text</label>
    <textarea name="text"><?php echo $news_item['text']; ?></textarea><br />

    <input type="submit" name="submit" value="Update news item" />

</form>