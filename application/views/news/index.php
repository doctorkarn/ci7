<h2><?php echo $title ?></h2>

<?php $this->load->helper('url'); ?>
<a href="<?php echo site_url("news/create"); ?>">[+] create news</a>

<?php foreach ($news as $news_item): ?>

    <h3><?php echo $news_item['id'] ?>) <?php echo $news_item['title'] ?></h3>
    <div class="main">
        <?php echo $news_item['text'] ?>
    </div>
    <p><a href="<?php echo $news_item['slug'] ?>">View article</a></p>

<?php endforeach ?>