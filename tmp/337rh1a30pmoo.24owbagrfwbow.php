<div id="sidebar" class="sidebar">


    <!--&lt;!&ndash; Search &ndash;&gt;-->
    <!--<section class="box search">-->
        <!--<form method="post" action="#">-->
            <!--<input type="text" class="text" name="search"-->
                   <!--placeholder="Найти&hellip;"/>-->
        <!--</form>-->
    <!--</section>-->

    <!-- Nav -->
    <nav id="nav">
        <ul>
            <li><a href="#" class="icon fa-search">Найти&hellip;</a></li>
            <?php foreach (($data['menu']?:array()) as $item): ?>
                <li class="<?php echo $page == $item['path'] ? 'active' : ''; ?>">
                    <?php switch ($item['path']): ?><?php case '/category/news': ?>
                            <?php $cssClass='fa-newspaper-o'; ?>
                        <?php if (true) break; ?><?php case '/category/analytics': ?>
                            <?php $cssClass='fa-bar-chart'; ?>
                        <?php if (true) break; ?><?php case '/category/articles': ?>
                            <?php $cssClass='fa-quote-right'; ?>
                        <?php if (true) break; ?><?php case '/contacts': ?>
                            <?php $cssClass='fa-envelope'; ?>
                        <?php if (true) break; ?><?php case '/about': ?>
                            <?php $cssClass='fa-group'; ?>
                        <?php if (true) break; ?><?php default: ?>
                            <?php $cssClass=' '; ?>
                        <?php break; ?><?php endswitch; ?>
                    <a href="<?php echo $item['path']; ?>"
                       class="icon <?php echo $cssClass; ?>"><?php echo $item['text']; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
</div>
