<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gardu Express</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="<?= BASEURL;?>/assets_user/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?= BASEURL;?>/assets_user/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?= BASEURL;?>/assets_user/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= BASEURL;?>/pelanggan/index">Gardu Express</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">&nbsp; <a href="<?= BASEURL;?>/admin/index" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="<?= BASEURL;?>/assets_user/img/find_user.png" class="user-image img-responsive"/>
				</li>	
                    <li>
                        <a  href="<?= BASEURL;?>/pelanggan/index"><i class="fa fa-dashboard fa-3x"></i> Beranda</a>
                    </li>                     
                    <li>
                        <a  href="<?= BASEURL;?>/pelanggan/kategori"><i class="fa fa-qrcode fa-3x"></i> Kategori</a>
                    </li>				
                    <li  >
                        <a  href="<?= BASEURL;?>/pelanggan/barang"><i class="fa fa-table fa-3x"></i> Barang</a>
                    </li>
                    <li  >
                        <a class="active-menu"  href="<?= BASEURL;?>/pelanggan/pengiriman"><i class="fa fa-edit fa-3x"></i> Pengiriman </a>
                    </li>				   
            </div>           
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Pengiriman Saya</h2>   
                        <h5>Welcome Jhon Deo , Love to see you back. </h5> 
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                        <div class="panel-heading">
                             Pengiriman Saya
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID Pengiriman</th>
                                            <th>Status</th>
                                            <th>Tanggal</th>
                                            <th>Pengirim</th>
                                            <th>Penerima</th>
                                            <th>Keterangan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td>ID0100000195</td>
                                            <td>DIKIRIM</td>
                                            <td>22 Des 2020</td>
                                            <td>Safitri larasati</td>
                                            <td>tajudin ahmad</td>
                                            <td>barang pecah belah mug 1 lusin</td>
                                            <td>
                                            <a class="btn btn-info btn-xs">detail</a>
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                            <a class="btn btn-info btn-xs">detail</a>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                            <a class="btn btn-info btn-xs">detail</a>
                                            </td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                            <a class="btn btn-info btn-xs">detail</a>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                            <a class="btn btn-info btn-xs">detail</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                 
                <div class="row">
                    <div class="col-md-12">
                        <h3>More Customization</h3>
                         <p>
                        For more customization for this template or its components please visit official bootstrap website i.e getbootstrap.com or <a href="http://getbootstrap.com/components/" target="_blank">click here</a> . We hope you will enjoy our template. This template is easy to use, light weight and made with love by binarycart.com 
                        </p>
                    </div>
                </div>
                <!-- /. ROW  -->
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
