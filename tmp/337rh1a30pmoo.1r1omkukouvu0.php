<?php foreach (($content['data']?:array()) as $item): ?>
    <div><?php echo $item->post_title; ?></div>
<?php endforeach; ?>