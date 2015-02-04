<section class="posts">

    <div class="inner">
        <nav>
            <ul class="post-nav">
                <li><a href="#" class="active">Все материалы</a></li>
                <li><a href="#">Новости</a></li>
                <li><a href="#">Статьи</a></li>
                <li><a href="#">Аналитика</a></li>
            </ul>
        </nav>
    </div>

    <?php foreach (($data?:array()) as $post): ?>
        <div class="post">
            <div class="inner">
                <article>
                    <header>
                        <h3><a href="<?php echo sprintf('post/%s', $post['post_name']); ?>"><?php echo $post['post_title']; ?></a></h3>
                    </header>
                    <div class="info">
                        <ul class="stats">
                            <li class="date">
                                <span class="day"><?php echo strftime('%d', strtotime($post['post_date'])); ?></span>
                                <span class="month"><?php echo strftime('%B', strtotime($post['post_date'])); ?></span>
                                <span class="year"><?php echo strftime('%G', strtotime($post['post_date'])); ?></span>
                            </li>
                            <li><a href="#" class="icon fa-comment">16</a></li>
                            <li><a href="#" class="icon fa-heart">32</a></li>
                            <li><a href="#" class="icon fa-twitter">64</a></li>
                            <li><a href="#" class="icon fa-facebook">128</a></li>
                        </ul>
                    </div>
                    <p>
                        <?php echo $this->raw($getPreview($post['post_content'])); ?>
                    </p>
                </article>
            </div>
        </div>
    <?php endforeach; ?>

    <div class="clear"></div>

</section>

<div class="clear"></div>

<?php $buttonsCount='5'; ?>


