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
        <link href="layout/default/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="layout/default/css/heroic-features.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->        
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
        <!-- jQuery -->
        <script src="layout/default/js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="layout/default/js/bootstrap.min.js"></script>
    </body>
</html> 