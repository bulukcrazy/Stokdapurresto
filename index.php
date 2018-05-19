
<!DOCTYPE html>
<html lang="en" ng-app="app">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,AngularJS,Angular,Angular2,Angular 2,Angular4,Angular 4,jQuery,CSS,HTML,RWD,Dashboard,React,React.js,Vue,Vue.js">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Kedai Woeloeng Dapoer</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic">

    <!-- Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">

    <!-- Main styles for this application -->
    <link href="vendor/css/style.css" rel="stylesheet">
    <link href="vendor/css/bootstrap-chosen.css" rel="stylesheet">
    <link href="vendor/css/chosen-sprite.png" rel="image_src">

    <link href="vendor/plugin/ngToast/dist/ngToast.min.css" rel="stylesheet">
    <link href="vendor/plugin/ngToast/dist/ngToast-animations.min.css" rel="stylesheet">
    <link href="vendor/plugin/angularjs-datepicker/dist/angular-datepicker.css" rel="stylesheet">
    
    <style>
        .chart-legend {
            list-style-type: none;
            margin-top: 5px;
            text-align: center;
            /* NOTE: Browsers automatically add 40px of padding-left to all lists, so we should offset that, otherwise the legend is off-center */
            -webkit-padding-start: 0;
            /* Webkit */
            -moz-padding-start: 0;
            /* Mozilla */
            padding-left: 0;
            /* IE (handles all cases, really, but we should also include the vendor-specific properties just to be safe) */
        }
        
        .chart-legend li {
            display: inline-block;
            white-space: nowrap;
            position: relative;
            margin-bottom: 4px;
            border-radius: 5px;
            padding: 2px 8px 2px 28px;
            font-size: smaller;
            cursor: default;
        }
        
        .chart-legend li span {
            display: block;
            position: absolute;
            left: 0;
            top: 0;
            width: 20px;
            height: 20px;
            border-radius: 5px;
        }
    </style>
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">

    <div class="app flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-group mb-0">
                    <div class="card p-4">
                        <div class="card-block">
                            <h1>Login</h1>
                            <p class="text-muted">Sign In to your account</p>
                            <br>
                            <form name="login" action="cek_login.php" method="POST" onSubmit="return validasi(this)">
                                <div class="input-group mb-3">
                                    <span class="input-group-addon"><i class="icon-user"></i>
                                </span>
                                    <input type="text" placeholder="Username" name="username"  class="form-control" id="username" />
                                   
                                </div>
                                <div class="input-group mb-4">
                                    <span class="input-group-addon"><i class="icon-lock"></i>
                                </span>
                                    <input type="password" placeholder="password" class="form-control" name="password" id="password" />
                                    
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                       
                                        <input name="submit"  class="btn btn-primary px-4" class="submit" type="submit" value="LOGIN" />
                                    </div>
                                    <div class="col-6 text-right">

                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                    <div class="card card-inverse card-primary py-5 d-md-down-none" style="width:44%">
                        <div class="card-block">
                            <div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="callout callout-success">
                                            
                                            <strong class="h5">Kedai Woeloeng Dapoer</strong><br>
                                            <small class="text-muted">Sistem Informasi Dapoer Kedai Woeloeng</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="callout">
                                            <p class="h6">Username&nbsp;: admin</p>
                                            <p class="h6">Password &nbsp;: admin</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="callout callout-warning">
                                            <p class="h6 font-italic">Note</p>
                                            <small class="font-italic">Other features will be added, still in the development. :)</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- User Interface -->
    <ui-view></ui-view>
    <toast></toast>

    <!-- Bootstrap and necessary plugins -->
    <script src="vendor/plugin/jquery/dist/jquery.min.js"></script>
    <script src="vendor/plugin/tether/dist/js/tether.min.js"></script>
    <script src="vendor/plugin/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.7.0/chosen.jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/es5-shim/2.2.0/es5-shim.js"></script>
    
    <!-- AngularJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.4/angular.min.js"></script>
    <script src="vendor/plugin/satellizer/satellizer.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-router/1.0.3/angular-ui-router.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.4/angular-animate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.4/angular-sanitize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-local-storage/0.6.0/angular-local-storage.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.4/lodash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/restangular/1.6.1/restangular.min.js"></script>
    <script src="vendor/plugin/angular-jwt/dist/angular-jwt.min.js"></script>
   
    <!-- AngularJS plugins -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/angular.chartjs/1.1.1/angular-chart.js"></script>
    <script src="vendor/plugin/angular-chosen/angular-chosen.js"></script>
    <script src="vendor/plugin/angular-timeago/dist/angular-timeago.min.js"></script>
    <script src="vendor/plugin/oclazyload/dist/ocLazyLoad.min.js"></script>
    <script src="vendor/plugin/angular-breadcrumb/dist/angular-breadcrumb.min.js"></script>
    <script src="vendor/plugin/angular-loading-bar/build/loading-bar.min.js"></script>
    <script src="vendor/plugin/angularjs-datepicker/dist/angular-datepicker.js"></script>
    <script src="vendor/plugin/moment/moment.js"></script>
    <script src="vendor/plugin/ngToast/dist/ngToast.min.js"></script>

    <!-- AngularJS CoreUI App scripts -->
    <script src="vendor/js/app.js"></script>
    <script src="vendor/js/routes.js"></script>
    <script src="vendor/js/services.js"></script>
    <script src="vendor/js/factory/product.js"></script>
    <script src="vendor/js/factory/categorie.js"></script>
    <script src="vendor/js/factory/location.js"></script>
    <script src="vendor/js/factory/source.js"></script>
    <script src="vendor/js/factory/stock.js"></script>
    <script src="vendor/js/factory/purchase.js"></script>
    <script src="vendor/js/factory/purchaseApi.js"></script>
    <script src="vendor/js/factory/purchaseTemp.js"></script>
    <script src="vendor/js/factory/supplier.js"></script>
    <script src="vendor/js/factory/return.js"></script>
    <script src="vendor/js/factory/returnTemp.js"></script>
    <script src="vendor/js/factory/sale.js"></script>
    <script src="vendor/js/factory/saleTemp.js"></script>
    <script src="vendor/js/factory/marketChart.js"></script>
    <script src="vendor/js/factory/saleChart.js"></script>
    <script src="vendor/js/directives.js"></script>
    <script src="vendor/js/dirPagination.js"></script>
    <script src="vendor/js/controllers/authCtrl.js"></script>

</body>

</html>