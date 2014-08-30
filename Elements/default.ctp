<div class="container contents">
    <div class="col-md-8">
        <?php
        echo $this->Layout->sessionFlash();
        echo $content_for_layout;
        ?>
    </div>
    <div class="col-md-4 sidebar">
        <?php echo $this->Regions->blocks('right'); ?>
    </div>
</div>