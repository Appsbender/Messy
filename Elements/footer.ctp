<?php
/* footer */
?>
<footer class="apps_footer">
    <div class="container">
        <div class="col-md-3">
            <h4><?php echo __d('croogo', 'Company Information'); ?></h4>
            <ul>
                <li>Tel. No. : (000) 876-5432</li>
                <li>Address : 123 Whatever Avenue, 521th floor. New York, NY 10118-1234 USA</li>
            </ul>
        </div>
        <div class="col-md-3">
            <h4><?php echo __d('croogo', 'Related Links'); ?></h4>
            <ul>
                <li><a href="http://www.croogo.org/">Croogo</a></li>
                <li><a href="http://www.cakephp.org/">Cakephp</a></li>
                <li><a href="http://www.appsbender.org/">Appsbender</a></li>
            </ul>
        </div>
        <div class="col-md-3">
            <h4><?php echo __d('croogo', 'Follow Us on the ff.'); ?></h4>
            <ul>
                <li><a href="http://www.facebook.com/pages/Appsbender/456125824446901"><i class="fa fa-facebook"></i> Facebook</a></li>
                <li><a href="https://twitter.com/Apps_bender"><i class="fa fa-twitter"></i> Twitter</a></li>
            </ul>
        </div>
        <div class="col-md-3">
            <h4><?php echo __d('croogo', 'Quick Preview On Who We Are'); ?></h4>
            <ul>
                <li><?php echo __d('croogo', 'Form and function through high fidelity interfaces and human experiences.'); ?></li>
            </ul>
        </div>
        <div class="clearfix"></div>
        <section class="copyright">
            <small>
                &COPY; 
                <?php
                echo __d('croogo', 'Copyright') . ' ' . $this->Html->link(Configure::read('Site.title'), '/') . ' . ' . __d('croogo', 'All Rights Reserved') . ' ' . date('Y');
                echo __d('croogo','. Designed By :') . ' ' . $this->Html->link('Appsbender', 'http://appsbender.com', array('target' => '_blank'));
                ?>
            </small>
        </section>
    </div>
</footer>