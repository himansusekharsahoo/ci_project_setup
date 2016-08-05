<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta charset="utf-8">
        <base id='app_base_url' href="<?= APP_BASE ?>">
        <title><?php echo $this->layout->title; ?></title>
        <script type="text/javascript">
            var app_ver = '<?= APP_VER ?>';
        </script>
        <!-- Bootstrap Core CSS -->
        <link href="layout/respond/css/bootstrap.css" rel="stylesheet">
        <link href="layout/respond/css/bootstrap-responsive.css" rel="stylesheet">
        <!-- Custom CSS -->
        <!--[if lt IE 9]><script src="layout/respond/js/html5.js"></script><![endif]-->
        <link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
              
    </head>
    <body>
        <!-- Navigation -->
        <?php
        if ($this->layout->headerFlag) {
            $this->load->view($this->layout->layoutsFolder . '/header');
        } else {
            $this->load->view($this->layout->layoutsFolder . '/no_header');
        }
        ?>
        <!-- Page Content -->
        <div class="container">            
            <!-- Jumbotron Header -->
            <?php $this->load->view($this->layout->layoutsFolder . '/banner'); ?>
            <hr>
            <!-- Title -->
            <div class="row">
                <div class="col-lg-12">
                    <h3>
                        <?php
                        if ($this->layout->navTitleFlag) {
                            echo $this->layout->navTitle;
                        }
                        ?>
                    </h3>
                </div>
            </div>
            <!-- /.row -->
            <!-- Page Features -->
            <?php echo $content; ?>            
            <!-- /.row -->
            <hr>
            <!-- Footer -->
            <?php
            if ($this->layout->footerFlag) {
                $this->load->view($this->layout->layoutsFolder . '/footer');
            } else {
                $this->load->view($this->layout->layoutsFolder . '/no_footer');
            }
            ?>
        </div>
        <!-- /.container -->
        <script src="layout/respond/js/jquery-1.7.1.min.js"></script>
        <script src="layout/respond/js/bootstrap-transition.js"></script>
        <script src="layout/respond/js/bootstrap-carousel.js"></script>
        <script src="layout/respond/js/bootstrap-alert.js"></script>
        <script src="layout/respond/js/bootstrap-modal.js"></script>
        <script src="layout/respond/js/bootstrap-dropdown.js"></script>
        <script src="layout/respond/js/bootstrap-scrollspy.js"></script>
        <script src="layout/respond/js/bootstrap-tab.js"></script>
        <script src="layout/respond/js/bootstrap-tooltip.js"></script>
        <script src="layout/respond/js/bootstrap-popover.js"></script>
        <script src="layout/respond/js/bootstrap-button.js"></script>
        <script src="layout/respond/js/bootstrap-collapse.js"></script>
        <script src="layout/respond/js/bootstrap-typeahead.js"></script>
        <script src="layout/respond/js/jquery-ui-1.8.18.custom.min.js"></script>
        <script src="layout/respond/js/jquery.smooth-scroll.min.js"></script>
        <script src="layout/respond/js/lightbox.js"></script>
        <script>
        $('.carousel').carousel({
          interval: 5000
        })
        </script>

    </body>
</html> 