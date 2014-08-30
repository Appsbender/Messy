<?php $this->Nodes->set($node); ?>
<section id="node-<?php echo $this->Nodes->field('id'); ?>" class="node node-type-<?php echo $this->Nodes->field('type'); ?>">
    <h2><?php echo $title_for_layout; ?></h2>
    <hr/>
    <?php
    echo $this->Nodes->body();
    echo $this->Nodes->moreInfo();
    ?>
</section>
<?php if (CakePlugin::loaded('Comments')): ?>
    <div id="comments" class="node-comments">
        <?php
        $type = $types_for_layout[$this->Nodes->field('type')];

        if ($type['Type']['comment_status'] > 0 && $this->Nodes->field('comment_status') > 0) {
            echo $this->element('comments', array('model' => 'Node', 'data' => $node));
        }

        if ($type['Type']['comment_status'] == 2 && $this->Nodes->field('comment_status') == 2) {
            echo $this->element('comments_form', array('model' => 'Node', 'data' => $node));
        }
        ?>
    </div>
<?php endif; ?>