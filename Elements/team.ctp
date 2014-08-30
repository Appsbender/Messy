<?php
/* 
 * Team 
 * you can replace a dynamic content below or regions
 */
?>
<div class="apps_team">
    <div class="container">
        <div class="col-md-3">
            <div class="apps_team_photo_holder">
                <?php
                $dev1 = $this->Html->image('dev1.png');
                echo $this->Html->link($dev1, '#', array('escape' => FALSE));
                ?>
            </div>
            <h4><a href="#">John Woodwest</a></h4>
            <p>
                Co-Founder & Creative Director
            </p>
        </div>
        <div class="col-md-3">
            <div class="apps_team_photo_holder">
                <?php
                $dev2 = $this->Html->image('dev2.png');
                echo $this->Html->link($dev2, '#', array('escape' => FALSE));
                ?>
            </div>
            <h4><a href="#">Claire Northwood</a></h4>
            <p>
                Co-Founder & Creative Director
            </p>
        </div>
        <div class="col-md-3">
            <div class="apps_team_photo_holder">
                <?php
                $dev3 = $this->Html->image('dev3.png');
                echo $this->Html->link($dev3, '#', array('escape' => FALSE));
                ?>
            </div>
            <h4><a href="#">Kim Karolmozz</a></h4>
            <p>
                Development Lead
            </p>
        </div>
        <div class="col-md-3">
            <div class="apps_team_photo_holder">
                <?php
                $dev4 = $this->Html->image('dev4.png');
                echo $this->Html->link($dev4, '#', array('escape' => FALSE));
                ?>
            </div>
            <h4><a href="#">Kyle Spencer</a></h4>
            <p>
                Design & Front-End Development
            </p>
        </div>
    </div>
</div>