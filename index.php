<?php include 'inc/config_check.php';
include 'inc/config.php'; $template['header_link'] = 'Bienvenido: '.$_SESSION['usuario']; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>







<!-- Page content -->
<div id="page-content" ng-controller="ctrlLab">
    <!-- First Row -->
    <div class="row">
        <!-- Simple Stats Widgets -->
        <div class="col-sm-6 col-lg-3">
            <a href="javascript:void(0)" class="widget">
                <div class="widget-content widget-content-mini text-right clearfix">
                    <div class="widget-icon pull-left themed-background">
                        <i class="gi gi-cardio text-light-op"></i>
                    </div>
                    <h2 class="widget-heading h3">
                        <strong><span data-toggle="counter" data-to="2835"></span></strong>
                    </h2>
                    <span class="text-muted">VENTAS</span>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="javascript:void(0)" class="widget">
                <div class="widget-content widget-content-mini text-right clearfix">
                    <div class="widget-icon pull-left themed-background-success">
                        <i class="gi gi-user text-light-op"></i>
                    </div>
                    <h2 class="widget-heading h3 text-success">
                        <strong>+ <span data-toggle="counter" data-to="2862"></span></strong>
                    </h2>
                    <span class="text-muted">CLIENTES</span>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="javascript:void(0)" class="widget">
                <div class="widget-content widget-content-mini text-right clearfix">
                    <div class="widget-icon pull-left themed-background-warning">
                        <i class="gi gi-briefcase text-light-op"></i>
                    </div>
                    <h2 class="widget-heading h3 text-warning">
                        <strong>+ <span data-toggle="counter" data-to="75"></span></strong>
                    </h2>
                    <span class="text-muted">SOLICITUDES</span>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="javascript:void(0)" class="widget">
                <div class="widget-content widget-content-mini text-right clearfix">
                    <div class="widget-icon pull-left themed-background-danger">
                        <i class="gi gi-wallet text-light-op"></i>
                    </div>
                    <h2 class="widget-heading h3 text-danger">
                        <strong>$ <span data-toggle="counter" data-to="5820"></span></strong>
                    </h2>
                    <span class="text-muted">INGRESOS</span>
                </div>
            </a>
        </div>
        <!-- END Simple Stats Widgets -->
    </div>
    <!-- END First Row -->

    <!-- Second Row -->
    <div class="row">
        <div class="col-sm-12 col-lg-12">
            <!-- Chart Widget -->
            <div class="widget">
                <div class="widget-content border-bottom">
                    <span class="pull-right text-muted">2017</span>
                   Ingresos
                </div>
                <div class="widget-content border-bottom themed-background-muted">
                    <!-- Flot Charts (initialized in js/pages/readyDashboard.js), for more examples you can check out http://www.flotcharts.org/ -->
                    <div id="chart-classic-dash" style="height: 393px;"></div>
                </div>
                <div class="widget-content widget-content-full">
                    <div class="row text-center">
                        <div class="col-xs-4 push-inner-top-bottom border-right">
                            <h3 class="widget-heading"><i class="gi gi-wallet text-dark push-bit"></i> <br><small>$ 41k</small></h3>
                        </div>
                        <div class="col-xs-4 push-inner-top-bottom">
                            <h3 class="widget-heading"><i class="gi gi-cardio text-dark push-bit"></i> <br><small>17k Sales</small></h3>
                        </div>
                        <div class="col-xs-4 push-inner-top-bottom border-left">
                            <h3 class="widget-heading"><i class="gi gi-life_preserver text-dark push-bit"></i> <br><small>3k+ Tickets</small></h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Chart Widget -->
        </div>
        <div class="col-sm-6 col-lg-4">
            <!-- Stats User Widget -->
            <a href="page_ready_profile.php" class="widget">
                <div class="widget-content border-bottom text-dark">
                    <span class="pull-right text-muted">This week</span>
                    Featured Author
                </div>
                <div class="widget-content border-bottom text-center themed-background-muted">
                    <img src="img/placeholders/avatars/avatar13@2x.jpg" alt="avatar" class="img-circle img-thumbnail img-thumbnail-avatar-2x">
                    <h2 class="widget-heading h3 text-dark">Anna Wigren</h2>
                    <span class="text-muted">
                        <strong>Logo Designer</strong>, Sweden
                    </span>
                </div>
                <div class="widget-content widget-content-full-top-bottom">
                    <div class="row text-center">
                        <div class="col-xs-6 push-inner-top-bottom border-right">
                            <h3 class="widget-heading"><i class="gi gi-briefcase text-dark push-bit"></i> <br><small>35 Projects</small></h3>
                        </div>
                        <div class="col-xs-6 push-inner-top-bottom">
                            <h3 class="widget-heading"><i class="gi gi-heart_empty text-dark push-bit"></i> <br><small>5.3k Likes</small></h3>
                        </div>
                    </div>
                </div>
            </a>
            <!-- END Stats User Widget -->

            <!-- Mini Widgets Row -->
            <div class="row">
                <div class="col-xs-6">
                    <a href="javascript:void(0)" class="widget">
                        <div class="widget-content themed-background-info text-light-op text-center">
                            <div class="widget-icon">
                                <i class="fa fa-facebook"></i>
                            </div>
                        </div>
                        <div class="widget-content text-dark text-center">
                            <strong>98k</strong><br>Followers
                        </div>
                    </a>
                </div>
                <div class="col-xs-6">
                    <a href="javascript:void(0)" class="widget">
                        <div class="widget-content themed-background-danger text-light-op text-center">
                            <div class="widget-icon">
                                <i class="fa fa-database"></i>
                            </div>
                        </div>
                        <div class="widget-content text-dark text-center">
                            <strong>15</strong><br>
                            Active Servers
                        </div>
                    </a>
                </div>
            </div>
            <!-- END Mini Widgets Row -->
        </div>
    </div>
    <!-- END Second Row -->

    <!-- Third Row -->
    <div class="row">
        <div class="col-sm-4">
            <!-- Project Widget -->
            <div class="widget">
                <div class="widget-content border-bottom">
                    <span class="pull-right text-muted">60%</span>
                    Project
                </div>
                <a href="javascript:void(0)" class="widget-content themed-background-muted text-right clearfix">
                    <img src="img/placeholders/avatars/avatar6.jpg" alt="avatar" class="img-circle img-thumbnail img-thumbnail-avatar pull-left">
                    <h2 class="widget-heading h3 text-muted">Logo</h2>
                    <div class="progress progress-striped progress-mini active">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%"></div>
                    </div>
                </a>
                <a href="javascript:void(0)" class="widget-content themed-background-muted border-top text-right clearfix">
                    <img src="img/placeholders/avatars/avatar2.jpg" alt="avatar" class="img-circle img-thumbnail img-thumbnail-avatar pull-left">
                    <h2 class="widget-heading h3 text-muted">Icon Pack</h2>
                    <div class="progress progress-striped progress-mini active">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
                    </div>
                </a>
                <a href="javascript:void(0)" class="widget-content themed-background-muted border-top text-right clearfix">
                    <img src="img/placeholders/avatars/avatar11.jpg" alt="avatar" class="img-circle img-thumbnail img-thumbnail-avatar pull-left">
                    <h2 class="widget-heading h3 text-muted">Design</h2>
                    <div class="progress progress-striped progress-mini active">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%"></div>
                    </div>
                </a>
                <div class="widget-content widget-content-full border-top">
                    <div class="row text-center">
                        <div class="col-xs-6 push-inner-top-bottom border-right">
                            <i class="fa fa-check-circle-o"></i> On Time
                        </div>
                        <div class="col-xs-6 push-inner-top-bottom">
                            <i class="fa fa-clock-o"></i> 17 Days
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Project Widget -->
        </div>
        <div class="col-sm-4">
            <!-- Statistics Widget -->
            <div class="widget">
                <div class="widget-content border-bottom">
                    <span class="pull-right text-muted"><i class="fa fa-check"></i></span>
                    Weekly Sales
                </div>
                <div class="widget-content border-bottom themed-background-muted text-center">
                    <span id="widget-dashchart-sales">12,15,14,18,16,15,16,17</span>
                </div>
                <div class="widget-content widget-content-full-top-bottom border-bottom">
                    <div class="row text-center">
                        <div class="col-xs-6 push-inner-top-bottom border-right">
                            <h3 class="widget-heading"><i class="gi gi-book_open text-dark push"></i> <br><small>123 Total Sales</small></h3>
                        </div>
                        <div class="col-xs-6 push-inner-top-bottom">
                            <h3 class="widget-heading"><i class="gi gi-user_add text-dark push"></i> <br><small>+10% Clients</small></h3>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-full">
                    <div class="row text-center">
                        <div class="col-xs-6 push-inner-top-bottom border-right">
                            <h3 class="widget-heading"><i class="gi gi-briefcase text-dark push"></i> <br><small>5 Products</small></h3>
                        </div>
                        <div class="col-xs-6 push-inner-top-bottom">
                            <h3 class="widget-heading"><i class="gi gi-truck text-dark push"></i> <br><small>10 Deliveries</small></h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Statistics Widget -->
        </div>
        <div class="col-sm-4">
            <!-- Story Widget -->
            <div class="widget">
                <div class="widget-content">
                    <span class="pull-right text-muted">Featured</span>
                    Story
                </div>
                <div class="widget-image">
                    <img src="img/placeholders/photos/photo9.jpg" alt="image">
                    <div class="widget-image-content">
                        <h2 class="widget-heading"><a href="page_ready_article.php" class="text-light"><strong>The trip that changed my life</strong></a></h2>
                        <h3 class="widget-heading text-light-op h4">It changed the way I think</h3>
                    </div>
                    <i class="gi gi-airplane"></i>
                </div>
                <div class="widget-content widget-content-full text-dark">
                    <div class="row text-center">
                        <div class="col-xs-4 push-inner-top-bottom border-right">
                            <i class="fa fa-heart-o"></i> 9.5k
                        </div>
                        <div class="col-xs-4 push-inner-top-bottom border-right">
                            <i class="fa fa-eye"></i> 76k
                        </div>
                        <div class="col-xs-4 push-inner-top-bottom">
                            <i class="fa fa-share-alt"></i> 7.2k
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Story Widget -->
        </div>
    </div>
    <!-- END Third Row -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/readyDashboard.js"></script>
<script>$(function(){ ReadyDashboard.init(); });</script>

<?php include 'inc/template_end.php'; ?>



<script>
    


inicia.controller('ctrlLab', function ctrlLab($scope, $http){

//Definir objetos
$scope.fichaAntro = {};
$scope.fichaClinica = {};
$scope.fichaBio = {};




/* guardar ficha de identificacion */
$scope.guardarFichaBio = function() {

var params = {user:$scope.user,passwd:$scope.passwd};
$http({
url: 'json/validaCredenciales.php',
method: 'POST',
data: params,
//data: angular.toJson( $scope.fichaBio),
//transformRequest: false,
//headers: {'Content-Type': 'application/json'}
})
.then(function(data,res) {

$scope.sessionID = res.data;

if($scope.sessionID.length>0){
    //$scope.mensaje = 'Usuario Valido!';
    
}else{
    //$scope.mensaje = 'Usuario Invalido!';
}

//$scope.mensajeFichaAntro = 'Ficha Antropométrica agregada!'; // 
});
$scope.fichaBio = {};
};

});
    
    </script>