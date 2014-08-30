<!--
Template Name : Messy Business
Descriptions : Basic Business Template for Croogo 2+
Author : Appsbender
Email : regz24@gmail.com
Website : www.appsbender.com
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $title_for_layout; ?> &raquo; <?php echo Configure::read('Site.title'); ?></title>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
        <!-- Bootstrap -->
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <?php
        echo $this->Meta->meta();
        echo $this->Layout->feed();
        echo $this->Html->css(array(
            'apps_styles'
        ));
        echo $this->Layout->js();
        echo $this->Blocks->get('css');
        echo $this->Blocks->get('script');
        ?>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="apps_head_wrapper">
            <div class="container">
                <!-- Navigations -->
                <?php
                echo $this->element('navigations');
                if ($this->request->url == '') {
                    echo $this->element('features');
                }
                ?>
            </div>
            <div class="clearfix"></div>
        </div>
        <?php
        if ($this->request->url == '') {
            echo $this->element('homepage');
        } else {
            echo $this->element('default');
        }
        echo $this->element('footer');
        ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    </body>
</html>
