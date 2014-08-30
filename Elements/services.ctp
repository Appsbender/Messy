<?php
/* 
 * Services
 * you can replace a dynamic content below
 */
?>
<div class="apps_services">
    <div class="container">
        <div class="col-md-4">
            <i class="fa fa-desktop fa-4x"></i>
            <h3><?php echo __d('croogo','Websites'); ?></h3>
            <p>
                <?php echo __d('croogo','Award winning websites, bringing brands to life and campaigns to fruition.'); ?>
            </p>
        </div>
        <div class="col-md-4">
            <i class="fa fa-tags fa-4x"></i>
            <h3><?php echo __d('croogo','eCommerce'); ?></h3>
            <p>
                <?php echo __d('croogo','Online retail through integrated platforms and highly engaging experiences.'); ?>
            </p>
        </div>
        <div class="col-md-4">
            <i class="fa fa-code-fork fa-4x"></i>
            <h3><?php echo __d('croogo','Design & User Experience'); ?></h3>
            <p>
                <?php echo __d('croogo','Form and function through high fidelity interfaces and human experiences.'); ?>
            </p>
        </div>
        <div class="clearfix"></div>
        <?php echo $this->Html->link('<i class="fa fa-magic"></i>' . __d('croogo', 'Know More About Us'), '/about', array('escape' => FALSE, 'class' => 'btn btn-default btn-lg top-spacer')); ?>
    </div>
</div>
<hr/>