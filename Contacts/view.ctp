<script type="text/javascript">
    var RecaptchaOptions = {
        theme : 'clean'
    };
</script>
<h2><?php echo $title_for_layout; ?></h2>
<p><?php echo $contact['Contact']['body']; ?></p>
<hr/>
<div id="contact-<?php echo $contact['Contact']['id']; ?>" class="">
    <?php if ($contact['Contact']['message_status']): ?>
        <div class="contact-form">
            <?php
            echo $this->Form->create('Message', array(
                'url' => array(
                    'plugin' => 'contacts',
                    'controller' => 'contacts',
                    'action' => 'view',
                    $contact['Contact']['alias'],
                ),
                'class' => 'form-horizontal',
                'role' => 'form'
            ));
            echo '<div class="form-group">';
            echo '<label for="inputMessageName" class="col-md-2 control-label">' . __d('croogo', 'Name') . '</label>';
            echo '<div class="col-md-8">';
            echo $this->Form->input('Message.name', array('label' => FALSE, 'placeholder'=>__d('croogo','Add your name here'),'class' => 'form-control', 'div' => FALSE));
            echo '</div>';
            echo '</div>';
            echo '<div class="form-group">';
            echo '<label for="inputMessageEmail" class="col-md-2 control-label">' . __d('croogo', 'Email') . '</label>';
            echo '<div class="col-md-8">';
            echo $this->Form->input('Message.email', array('label' => FALSE, 'placeholder'=>__d('croogo','Add your valid email here'), 'class' => 'form-control', 'div' => FALSE));
            echo '</div>';
            echo '</div>';
            echo '<div class="form-group">';
            echo '<label for="inputMessageTitle" class="col-md-2 control-label">' . __d('croogo', 'Subject') . '</label>';
            echo '<div class="col-md-8">';
            echo $this->Form->input('Message.title', array('label' => FALSE, 'placeholder'=>__d('croogo','Add your subject here'), 'class' => 'form-control', 'div' => FALSE));
            echo '</div>';
            echo '</div>';
            echo '<div class="form-group">';
            echo '<label for="inputMessageBody" class="col-md-2 control-label">' . __d('croogo', 'Message') . '</label>';
            echo '<div class="col-md-9">';
            echo $this->Form->input('Message.body', array('label' => FALSE, 'placeholder'=>__d('croogo','Add your message here'), 'class' => 'form-control', 'div' => FALSE));
            echo '</div>';
            echo '</div>';
            if ($contact['Contact']['message_captcha']):
                echo '<div class="form-group">';
                echo '<div class="col-md-offset-2 col-sm-10">';
                echo '<p>' . __d('croogo', 'To confirm that you are not a robot, please enter the code below :') . '</p>';
                echo $this->Recaptcha->display_form();
                echo '</div>';
                echo '</div>';
            endif;

            echo '<div class="form-group">';
            echo '<div class="col-md-offset-2 col-sm-10">';
            echo $this->Form->button('<i class="fa fa-envelope"></i> ' . __d('croogo', 'Send Message'), array('class' => 'btn btn-info btn-lg'));
            echo '</div>';
            echo '</div>';
            echo $this->Form->end();
            ?>
        </div>
    <?php endif; ?>
    <div class="clearfix"></div>
</div>