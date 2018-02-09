<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Log in</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="/css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bg-black" style="background-image:url(/images/bkd.jpg);background-repeat: no-repeat;background-position: center;
    background-repeat: no-repeat;
    background-size: cover; min-width:100%; min-height:609px ">
    
        <div class="form-box" id="login-box">

            <div class="header">Sistem Informasi Pengelolaan Data Mutasi Pegawai<br><img src="/images/logo.png" width="100px"></div>
            <form action="{{ url('/login') }}" method="post">
                {{ csrf_field() }}
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="User ID"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password"/>
                    </div>          
                    
                </div>
                <div class="footer">                                                               
                    <button type="submit" class="btn bg-olive btn-block">Login</button>  
                    
                    
                    
                    <a href="/register" class="text-center">Register</a>
                </div>
            </form>

            <!-- <div class="margin text-center">
                <span>Sign in using social networks</span>
                <br/>
                <li><a class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></a></li>
                <li><a class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></a></li>
                <li><a class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></a></li>

            </div> -->
        </div>


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../../js/bootstrap.min.js" type="text/javascript"></script>        

    </body>
</html>