<?php
/* Navigations */
?>
<nav class="navbar navbar-transparent" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="btn-default btn">
                    <i class="fa fa-bars fa-lg"></i>
                </span>
            </button>
            <?php echo $this->Html->link('Messy','/', array('class'=>'navbar-brand')); ?>
        </div>
        <div class="navbar-collapse collapse">
            <?php echo $this->Custom->menu('main', array('dropdown' => true)); ?>
            <section class="navbar-nav navbar-right">
                <?php
                echo $this->Form->create('Node', array('url' => array('admin' => false, 'plugin' => 'nodes', 'controller' => 'nodes', 'action' => 'search'),'class' => 'form-inline search-form'));
                $this->Form->unlockField('q');
                echo '<div class="form-group form-group-custom">';
                echo $this->Form->input('q', array(
                    'label' => false,
                    'placeholder' => __d('croogo', 'Keywords'),
                    'class' => 'form-control',
                    'id'=>'search',
                    'div' => FALSE
                ));
                echo $this->Form->button(' <i class="fa fa-search"></i>', array('class' => 'btn btn-info hidden-sm hidden-xs', 'escape' => FALSE));
                echo '</div>';
                echo $this->Form->end();
                ?>
            </section>
        </div>
    </div>
</nav>