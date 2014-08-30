<section class="nodes promoted">
    <?php
    if (count($nodes) == 0) {
        echo __d('croogo', 'No items found.');
    }
    foreach ($nodes as $node):
        $this->Nodes->set($node);
        ?>
        <div id="node-<?php echo $this->Nodes->field('id'); ?>" class="node node-type-<?php echo $this->Nodes->field('type'); ?>">
            <h2><?php echo $this->Html->link($this->Nodes->field('title'), $this->Nodes->field('url')); ?></h2>
            <p><?php echo $this->Nodes->info(); ?></p>
            <hr class="special_separator">
            <?php
            echo $this->Nodes->body();
            ?>
        </div>
        <div class="clearfix"></div>
        <hr class="special_separator">
        <?php
    endforeach;
    ?>
    <div class="paging">
        <?php
        echo $this->Paginator->prev(
                ' << ', array('escape' => false), null, array('class' => 'prev disabled')
        );
        echo $this->Paginator->numbers(array('separator' => FALSE));
        echo $this->Paginator->next(
                ' >> ', array('escape' => false), null, array('class' => 'prev disabled')
        );
        ?>
        <div class="clearfix"></div>
    </div>
</section>