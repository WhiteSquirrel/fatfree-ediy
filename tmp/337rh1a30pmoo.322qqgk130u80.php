<section>

    <ul id="slider" class="slider ">

        <?php foreach (($mainposts?:array()) as $p): ?>
        <li style="background-image: url(<?php echo $p['tn']; ?>);">
            <div>
            <article>
                <div class="mask">
                    <div>
                        <header>
                            <h2><a href="/post/<?php echo $p['ID']; ?>"><?php echo $p['post_title']; ?></a></h2>
                        </header>
                        <p>
                            <?php echo $p['post_content']; ?>
                        </p>
                    </div>
                </div>
            </article>

            </div>
        </li>
        <?php endforeach; ?>
    </ul>
    <div class="clear"></div>
    <ul class="slider-nav">
        <li><a href="#" class="active"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
    </ul>
</section>