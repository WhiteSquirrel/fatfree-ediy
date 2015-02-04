<div class="pagination">
    <?php if ($pagination['pageIndex'] > 1): ?>
        <a href="<?php echo $page; ?>/<?php echo $pagination['pageIndex'] - 1; ?>" class="button previous">Previous Page</a>
    <?php endif; ?>
    <div class="pages">
        <?php $buttonsCount='6'; $startIndex='1'; ?>
        <?php for ($i=$startIndex;$i <= $buttonsCount;$i++): ?>
            <a href="<?php echo $page; ?>/<?php echo $i; ?>" class="<?php echo $pagination['pageIndex'] == $i ? 'active' : ''; ?>"><?php echo $i; ?></a>
        <?php endfor; ?>
        <span>&hellip;</span>
        <a href="<?php echo $page; ?>/<?php echo $pagination['pageCount']; ?>" class="<?php echo $pagination['pageIndex'] == $pagination['pageCount'] ? 'active' : ''; ?>">
            <?php echo $pagination['pageCount']; ?>
        </a>
    </div>
    <?php if ($pagination['pageIndex'] < $pagination['pageCount']): ?>
        <a href="<?php echo $page; ?>/<?php echo $pagination['pageIndex'] + 1; ?>" class="button next">Next Page</a>
    <?php endif; ?>
</div>