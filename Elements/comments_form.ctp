<div class="comment-form">
    <h3><?php echo __d('croogo', 'Add new comment'); ?></h3>
    <?php
    $type = $types_for_layout[$data[$model]['type']];

    if ($this->request->params['controller'] == 'comments') {
        $backLink = $this->Html->link(__d('croogo', 'Go back to original post') . ': ' . $data[$model]['title'], $data[$model]['url']);
        echo $this->Html->tag('p', $backLink, array('class' => 'back'));
    }

    $formUrl = array(
        'plugin' => 'comments',
        'controller' => 'comments',
        'action' => 'add',
        'Node',
        $data[$model]['id'],
    );
    if (isset($parentId) && $parentId != null) {
        $formUrl[] = $parentId;
    }

    echo $this->Form->create('Comment', array('url' => $formUrl,'class'=>'comment_form'));
    if ($this->Session->check('Auth.User.id')) {
        echo $this->Form->input('Comment.name', array(
            'label' => __d('croogo', 'Name'),
            'value' => $this->Session->read('Auth.User.name'),
            'readonly' => 'readonly',
            'class' => 'form-control'
        ));
        echo $this->Form->input('Comment.email', array(
            'label' => __d('croogo', 'Email'),
            'value' => $this->Session->read('Auth.User.email'),
            'readonly' => 'readonly',
            'class' => 'form-control'
        ));
        echo $this->Form->input('Comment.website', array(
            'label' => __d('croogo', 'Website'),
            'value' => $this->Session->read('Auth.User.website'),
            'readonly' => 'readonly',
            'class' => 'form-control'
        ));
        echo $this->Form->input('Comment.body', array('class' => 'form-control'));
    } else {
        echo $this->Form->input('Comment.name', array('label' => __d('croogo', 'Name'), 'class' => 'form-control'));
        echo $this->Form->input('Comment.email', array('label' => __d('croogo', 'Email'), 'class' => 'form-control'));
        echo $this->Form->input('Comment.website', array('label' => __d('croogo', 'Website'), 'class' => 'form-control'));
        echo $this->Form->input('Comment.body', array('class' => 'form-control'));
    }

    if ($type['Type']['comment_captcha']) {
        echo $this->Recaptcha->display_form();
    }
    echo '<br/>';
    echo $this->Form->button(__d('croogo', 'Post comment'), array('class'=>'btn btn-info btn-lg'));
    echo $this->Form->end();
    ?>
</div>