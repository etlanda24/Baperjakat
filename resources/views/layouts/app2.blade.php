<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Dashboard</title>

        <!-- Panggil bootstrap nya Data Tables -->
        <link href="/vendor/media/css/bootstrap.min.css" rel="stylesheet">

        <!-- Panggil CSS nya Data Tables -->
        <link href="/vendor/media/css/dataTables.bootstrap.min.css" rel="stylesheet">     



        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="/css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="/css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="/css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
              <font size="2">Sistem Informasi BAPERJAKAT</font> 
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>

                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <span class="label label-success">4</span>
                            </a> -->
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <b><img src="img/avatar3.png" class="img-circle" alt="User Image"/></b>
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li><!-- end message -->
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    AdminLTE Design Team
                                                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <!-- <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                     Developers
                                                    <small><i class="fa fa-clock-o"></i> Today</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a> -->
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Sales Department
                                                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Reviewers
                                                    <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-warning"></i>
                                <span class="label label-warning">10</span>
                            </a> -->
                            <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-people info"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning danger"></i> Very long description here that may not fit into the page and may cause design problems
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users warning"></i> 5 new members joined
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-cart success"></i> 25 sales made
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-person danger"></i> You changed your username
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                            <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-tasks"></i>
                                <span class="label label-danger">9</span>
                            </a> -->
                            <ul class="dropdown-menu">
                                <li class="header">You have 9 tasks</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Design some buttons
                                                    <small class="pull-right">20%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Create a nice theme
                                                    <small class="pull-right">40%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">40% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Some task I need to do
                                                    <small class="pull-right">60%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Make beautiful transitions
                                                    <small class="pull-right">80%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">80% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                    
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="/images/user.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, {{ Auth::user()->name }}</p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                       <!--  <li class="treeview">
                            <a href="#">
                                <i class="fa fa-home"></i>
                                <span>BKPSDM</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/charts/morris.html"><i class="fa fa-angle-double-right"></i>Visi</a></li>
                                <li><a href="pages/charts/flot.html"><i class="fa fa-angle-double-right"></i>Misi</a></li>
                                <li><a href="pages/charts/inline.html"><i class="fa fa-angle-double-right"></i>Struktur Organisasi</a></li>
                                <li><a href="pages/charts/inline.html"><i class="fa fa-angle-double-right"></i>Tupoksi</a></li>
                            </ul>
                        </li> -->
                        <li>
                            <a href={{url('datauser')}}>
                                <i class="glyphicon glyphicon-user"></i> <span>Data User</span> 
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="/dataskpd">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>Data SKPD</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/charts/morris.html"><i class="fa fa-angle-double-right"></i>Badan dan Kantor</a></li>
                                <li><a href="pages/charts/flot.html"><i class="fa fa-angle-double-right"></i>Dinas</a></li>
                                <li><a href="pages/charts/inline.html"><i class="fa fa-angle-double-right"></i>Kecamatan</a></li>
                                <li><a href="pages/charts/morris.html"><i class="fa fa-angle-double-right"></i>Sekretariat Daerah</a></li>
                                <li><a href="pages/charts/flot.html"><i class="fa fa-angle-double-right"></i>Sekretariat DPRD</a></li>
                            </ul>
                        </li>

                         <li>
                            <a href="/pegawai">
                                <i class="fa fa-group"></i> <span>Data Pegawai</span>
                            </a>
                        </li>
                        <li>
                            <a href="/riwayatjabatan">
                                <i class="fa fa-sitemap"></i> <span>Data Riwayat Jabatan</span>
                            </a>
                        </li>
                        <li>
                            <a href="/riwayatdiklat">
                                <i class="fa fa-book"></i> <span>Data Riwayat Diklat</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="/surat">
                                <i class="fa fa-envelope"></i> <span>Surat</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/tables/simple.html"><i class="fa fa-angle-double-right"></i> Surat Keputusan(SK)</a></li>
                                <li><a href="pages/tables/data.html"><i class="fa fa-angle-double-right"></i> Surat Pelantikan</a></li>
                                <li><a href="pages/tables/simple.html"><i class="fa fa-angle-double-right"></i> Surat Melaksanakan Tugas</a></li>
                                <li><a href="pages/tables/data.html"><i class="fa fa-angle-double-right"></i> Surat Menduduki Jabatan</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="/laporan">
                                <i class="fa fa-file"></i> <span>Laporan</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/tables/simple.html"><i class="fa fa-angle-double-right"></i>Daftar Pegawai Mutasi</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="logout">
                                <i class="fa fa-power-off"></i> <span>Logout</span>
                                
                            </a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->

 <script type="text/javascript">
     function klik(){
        tanya = confirm("Anda Yakin Akan Menghapus Data ?");
        if (tanya == true) 
            return true;
        else
             return false;
    }
</script>
        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="/js/plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="/js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- fullCalendar -->
        <script src="/js/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="/js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="/js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="/js/AdminLTE/app.js" type="text/javascript"></script>
        
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="/js/AdminLTE/dashboard.js" type="text/javascript"></script>  


        <!-- Bagian datatables -->
        <script type="text/javascript" src="/vendor/media/js/jquery.js"></script>

        <!-- Panggil JS nya Bootstrap -->
        <script type="text/javascript" src="/vendor/media/js/bootstrap.min.js"></script>

        <!-- Panggil JS nya jQuery Datatables -->
        <script type="text/javascript" src="/vendor/media/js/jquery.dataTables.min.js"></script>      

        <!-- Panggil JS nya Datatables Bootstrap -->
        <script type="text/javascript" src="vendor/media/js/dataTables.bootstrap.min.js"></script>


 <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });

    </script>
    <script type="text/javascript">
    $(document).ready(function(){
        $('.data').DataTable();
    });
</script>
    </body>
</html>

