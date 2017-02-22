<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>

<!-- Full Background -->
<!-- For best results use an image with a resolution of 1280x1280 pixels (prefer a blurred image for smaller file size) -->
<img src="img/placeholders/layout/login2_full_bg.jpg" alt="Full Background" class="full-bg animation-pulseSlow">
<!-- END Full Background -->

<!-- Login Container -->
<div id="login-container" ng-controller="ctrlLab">
    <!-- Login Header -->
    <h1 class="h2 text-light text-center push-top-bottom animation-pullDown">
        <i class="gi gi-crown text-light-op"></i> SYS<strong>REY</strong>
    </h1>
    <!-- END Login Header -->

    <!-- Login Block -->
    <div class="block animation-fadeInQuick">
        <!-- Login Title -->
        <div class="block-title" >
            <h2>Identifiquese </h2>
        </div>
        <!-- END Login Title -->
        <DIV class="block-section danger" ng-show="mensaje">
            <h4 >
                {{mensaje}}
            </h4>
        </DIV>
        <!-- Login Form -->
        <form id="form-login" action="index.php" method="post" class="form-horizontal">
            <div class="form-group">
                <label for="login-email"  class="col-xs-12">Usuario</label>
                <div class="col-xs-12">
                    <input type="text" id="login-email" ng-model="user" name="login-email" class="form-control" placeholder="Escribe tu usuario..">
                </div>
            </div>
            <div class="form-group">
                <label for="login-password" class="col-xs-12">Password</label>
                <div class="col-xs-12">
                    <input type="password" id="login-password" ng-model="passwd" name="login-password" class="form-control" placeholder="Tu password..">
                </div>
            </div>
            <div class="form-group form-actions">
                
                <div class="col-xs-4 text-left">
                    <button type="button"
                            ng-click="validaCredenciales();"
                            class="btn btn-effect-ripple btn-sm btn-success">Log In</button>
                </div>
            </div>
        </form>
        <!-- END Login Form -->

        <!-- Social Login -->
        <hr>
        
        
        <!-- END Social Login -->
    </div>
    <!-- END Login Block -->

    <!-- Footer -->
    <footer class="text-muted text-center animation-pullUp">
        <small><span id="year-copy"></span> </small>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Login Container -->

<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/readyLogin.js"></script>
<script>$(function(){ ReadyLogin.init(); });</script>

<?php include 'inc/template_end.php'; ?>



<script>
    
    
    


inicia.controller('ctrlLab', function ctrlLab($scope, $http){

//Definir objetos
$scope.fichaAntro = {};
$scope.fichaClinica = {};
$scope.fichaBio = {};

function isEmpty( o ) {
    for ( var p in o ) { 
        if ( o.hasOwnProperty( p ) ) { return false; }
    }
    return true;
}

/* guardar ficha de identificacion */
$scope.validaCredenciales = function() {


var token = {};

var params = {user:$scope.user,passwd:$scope.passwd};
$http({
url: 'json/validaCredenciales.php',
method: 'POST',
data:params,
//data: angular.toJson( $scope.fichaBio),
//transformRequest: false,
//headers: {'Content-Type': 'application/json'}
})
.then(function(res,data) {
    
  
     $scope.sessionID = res.data[0].sessionID;
     $scope.us = res.data[0].usuario;
    
  
    
   if ($scope.sessionID>0){
        //$scope.mensaje = 'Usuario Valido!';
        window.location.assign('index.php');
    }else{
        $scope.mensaje = 'Usuario Invalido!';
    }

//$scope.mensajeFichaAntro = 'Ficha Antropométrica agregada!'; // 
});
$scope.fichaBio = {};
};




});
</script>