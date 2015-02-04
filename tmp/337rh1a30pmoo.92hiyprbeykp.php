<div class="inner">
    <nav>
        <ul class="post-nav">
            <?php foreach (($data?:array()) as $item): ?>
                <li>
                    <a href="<?php echo $item['path']; ?>" class="<?php echo $page == $item['path'] ? 'active' : ''; ?>"><?php echo $item['text']; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
</div>