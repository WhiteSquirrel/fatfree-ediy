<section class="posts">

    <?php echo $this->render('navigation.htm',$this->mime,array('data'=>$content['navigation'])+get_defined_vars()); ?>

    <?php foreach (($content['data']?:array()) as $post): ?>
    <div class="post">
        <div class="inner">
            <article>
                <header>
                    <h3><a href="/post<?php echo $post['post_name']; ?>"><?php echo $post['post_title']; ?></a></h3>
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

<?php echo $this->render('pagination.htm',$this->mime,array('pagination'=>$content['pagination'])+get_defined_vars()); ?>
