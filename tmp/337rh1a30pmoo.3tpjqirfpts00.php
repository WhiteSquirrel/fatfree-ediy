<?php echo $this->render('navigation.htm',$this->mime,array('data'=>$content['navigation'])+get_defined_vars()); ?>

<?php foreach (($content['data']?:array()) as $post): ?>
<article class="box post post-excerpt">
    <div class="inner">
        <header>
            <h3><a href="post/<?php echo $post['post_name']; ?>"><?php echo $post['post_title']; ?></a></h3>
        </header>
        <p>
            <?php echo $this->raw($post['post_content']); ?>
        </p>

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
    </div>
</article>
<?php endforeach; ?>