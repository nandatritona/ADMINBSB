<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Wellcome</title>
    <!-- Favicon-->
    <link rel="icon" href="<?= base_url(); ?>./resources/AdminBSB/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

       <!-- Bootstrap Core Css -->
    <link href="<?= base_url(); ?>./resources/AdminBSB/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?= base_url(); ?>./resources/AdminBSB/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?= base_url(); ?>./resources/AdminBSB/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Sweetalert Css -->
    <link href="<?= base_url(); ?>./resources/AdminBSB/plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?= base_url(); ?>./resources/AdminBSB/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?= base_url(); ?>./resources/AdminBSB/css/themes/all-themes.css" rel="stylesheet" />

    <style type="text/css">

	/* ::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; } */

	/* body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	} */

	/* a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
		text-decoration: none;
	}

	a:hover {
		color: #97310e;
	} */

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	/* code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	} */

	#body {
		margin: 0 15px 0 15px;
		min-height: 96px;
	}

	/* p {
		margin: 0 0 10px;
		padding:0;
	} */

	/* p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	} */

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>

</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->

    <section class="container">   
    <!-- <section class="content">    -->
        <h1>Welcome !</h1>
            <div class="block-header">
                <!-- <h2>WELCOME !!</h2> -->
            </div>
            <!-- Example -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Panduan App !!
                                <small>Selamat datang di System yang telah saya buat, Aplikasi ini di buat hanya untuk pembelajaran saja. Saya mengunakan Framework <code>Codeigniter3</code> dan saya mengunakan database berbasis, <code>Mysql</code>.<br> Silahkan buat database untuk anda, (database kosong saja). lalu silahkan Click Button <code>GenerateDB</code> Terimakasih !!.</small>
                            </h2>
                        </div>
                        <div class="body">
                            <a href="<?= base_url('Welcome/created')?>" onclick="migrations()" class="btn btn-primary waves-effect"> GenerateDB</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Example -->
        </div>
    </section>

    <script type="text/javascript">
    function migrations() {
        swal({
            title: "Sweet!",
            text: "Here's a custom image.",
            imageUrl: "<?= base_url(); ?>./resources/AdminBSB/images/thumbs-up.png"
        });
    }
    </script>

    <!-- Jquery Core Js -->
    <script src="<?= base_url(); ?>./resources/AdminBSB/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?= base_url(); ?>./resources/AdminBSB/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="<?= base_url(); ?>./resources/AdminBSB/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?= base_url(); ?>./resources/AdminBSB/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Bootstrap Notify Plugin Js -->
    <script src="<?= base_url(); ?>./resources/AdminBSB/plugins/bootstrap-notify/bootstrap-notify.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?= base_url(); ?>./resources/AdminBSB/plugins/node-waves/waves.js"></script>

    <!-- SweetAlert Plugin Js -->
    <script src="<?= base_url(); ?>./resources/AdminBSB/plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Custom Js -->
    <script src="<?= base_url(); ?>./resources/AdminBSB/js/admin.js"></script>
    <script src="<?= base_url(); ?>./resources/AdminBSB/js/pages/ui/dialogs.js"></script>

    <!-- Demo Js -->
    <script src="<?= base_url(); ?>./resources/AdminBSB/js/demo.js"></script>
</body>

</html>
