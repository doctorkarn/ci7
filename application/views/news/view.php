<?php
$this->load->helper('url');
echo '<h2>'.$news_item['title'].'</h2>';
echo '<p>'.$news_item['text'].'</p>';
echo '<a href="'.site_url("news/update/".$news_item['slug']).'">[*] update</a> ';
echo '<a href="'.site_url("news/delete/".$news_item['slug']).'">[-] delete</a> ';