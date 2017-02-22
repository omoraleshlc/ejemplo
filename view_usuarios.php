<?php include 'inc/config_check.php';include 'inc/config.php'; $template['header_link'] = 'Modulo de Usuarios'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; 


?>

<!-- Page content -->
<div id="page-content" ng-controller="ctrlLab" ng-init="cargarListaUsuarios();">
    <!-- Search Results Header -->
    
    <!-- END Search Results Header -->

    
    
    
    
    
    <!-- Search Results Block -->
    <div class="block">
        <!-- Search Styles Title -->
        <div class="block-title">
            <ul class="nav nav-tabs" data-toggle="tabs">
                
                <li><a  href="#search-tab-users">Usuarios</a></li>
                <li class="pull-right"><a  href="#agregarUsuario" 
                                           data-toggle="modal"
                                           style="cursor: pointer;"><i class="fa fa-plus "></i>Agregar</a></li>
                
            </ul>
        </div>
        <!-- END Search Styles Title -->

        <!-- Search Results Content -->
        <div class="tab-content">
            <!-- Images Results -->
            
            <!-- END Images Results -->

            <!-- Users Results -->
<div class="tab-pane active" id="search-tab-users">
<div class="row">
<div class="col-sm-12">
    
   
    
<table class="table table-striped table-borderless table-hover table-vcenter animation-fadeInQuickInv">
<tbody>
<tr class="animation-fadeInQuickInv" ng-repeat="arrUsers in listaUsuarios">
<td class="text-center" style="width: 100px;"><img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="avatar" 
                                                   class="img-circle img-thumbnail img-thumbnail-avatar">
</td>
<td class="hidden-xs"><i style="color: red;" ng-show="arrUsers.status=='I' " data-toggle="tooltip" title="Cuenta Bloqueada!" class="fa fa-lock"></i> {{arrUsers.usuario}}</td>
<td class="hidden-xs">{{arrUsers.nombreCompleto}}</td>
<td class="text-center" style="width: 100px;">
<a   title="Edit" 
   data-toggle="modal"
   href="#editarUsuario"
   class="btn btn-effect-ripple btn-xs btn-success"><i class="fa fa-pencil"></i></a>
<a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-effect-ripple btn-xs btn-danger"><i class="fa fa-times"></i></a>
</td>
</tr>

</tbody>
</table>
</div>

</div>

</div>
            <!-- END Users Results -->

            <!-- END Projects Results -->
        </div>
        <!-- END Search Results Content -->
    </div>
    <!-- END Search Results Block -->
    
    
       
    
    
















<div id="agregarUsuario" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg ">
                        <div class="modal-content">
                            
                            
                            
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h3 class="modal-title"><strong>Nuevo Usuario</strong></h3>
                            </div>
                            <div class="modal-body">
                                
                                
                                
                                <div class="block">
                <!-- General Elements Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-effect-ripple btn-default toggle-bordered enable-tooltip" data-toggle="button" title="Toggles .form-bordered class">Borderless</a>
                    </div>
                    <h2>Datos Generales</h2>
                    
                   
                </div>
                <!-- END General Elements Title -->

                <!-- General Elements Content -->
<form id="formUsuarios" enctype="multipart/form-data" class="form-horizontal form-bordered" >                               
                                
                 <div ng-class="!usuarios.nombre?'form-group has-error':'form-group'">
                        <label class="col-md-3 control-label" for="example-text-input">Nombre</label>
                        <div class="col-md-6">
                            <input type="text" 
                                   ng-model="usuarios.nombre"
                                   i name="example-text-input" class="form-control" placeholder="Obligatorio">
                            <span class="help-block">Escriba el nombre</span>
                        </div>
                    </div>
                    
                    <div ng-class="!usuarios.usuario?'form-group has-error':'form-group'">
                        <label class="col-md-3 control-label" for="example-text-input">Usuario</label>
                        <div class="col-md-6">
                            <input type="text" 
                                   ng-model="usuarios.usuario"
                                   i name="example-text-input" class="form-control" placeholder="Obligatorio">
                            <span class="help-block">Escriba el usuario</span>
                        </div>
                    </div>
    
    
    
                    <div ng-class="!usuarios.passwd1?'form-group has-error':'form-group'">
                        <label class="col-md-3 control-label" for="example-text-input">Password</label>
                        <div class="col-md-6">
                            <input type="password" 
                                   ng-model="usuarios.passwd1"
                                    name="example-text-input" class="form-control" placeholder="Obligatorio">
                            <span class="help-block">Escriba el Password</span>
                        </div>
                    </div>
                    
                    
                    <div ng-class="!usuarios.passwd2?'form-group has-error':'form-group'">
                        <label class="col-md-3 control-label" for="example-text-input">Confirmar Password</label>
                        <div class="col-md-6">
                            <input type="password" 
                                   ng-model="usuarios.passwd2"
                                    name="example-text-input" class="form-control" placeholder="Obligatorio">
                            <span class="help-block">Confirma el password</span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-select">Rol (Tipo de Usuario)</label>
                        <div class="col-md-6">
                            <select  ng-model="usuarios.role"  class="form-control" size="1">
                                <option value="">Escoja</option>
                                <option value="1">Capturista</option>
                                <option value="2">Facturacion</option>
                                <option value="5">Administrador</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-email">Email</label>
                        <div class="col-md-6">
                            <input type="email" 
                                   ng-model="usuarios.email"
                                   
                                    class="form-control" placeholder="Opcional">
                            
                            <input type="text" 
                                   ng-model="usuarios.usuario"
                                   ng-init="usuarios.usuarioCarga='<?php echo $_SESSION['usuario'];?>';"
                                    class="form-control hidden" placeholder="usuario">
                            
                            <input type="ttxt" ng-init="usuarios.entidad='<?php echo $_SESSION['entidad'];?>';"
                                   ng-model="usuarios.entidad"
                                   
                                    class="form-control hidden" placeholder="entidad">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-select">Status</label>
                        <div class="col-md-6">
                            <select ng-init="usuarios.status='A'"
                                    
                                    ng-model="usuarios.status"  class="form-control" size="1">
                               
                                <option value="A" >Activo</option>
                                <option value="I">Suspendido</option>
                                
                            </select>
                        </div>
                    </div>
                    
                    
                    
                    
                    
               
                <!-- END General Elements Content -->
                
                 </form>
            </div>
                            </div>
                            <div class="modal-footer" 
                                 ng-show="
                                     usuarios.nombre &&
                                     usuarios.status 
                                             &&
                                 usuarios.role && usuarios.usuario 
                                 
                                 && usuarios.passwd1 == usuarios.passwd2
                                 ">
                                <button type="button" class="btn btn-effect-ripple btn-primary"
                                        ng-click="CrudUsuarios();"
                                        >Guardar</button>
                                <button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Cerrar</button>
                            
                            
                            </div>
                            
                            
                        </div>
                    </div>
                </div>    





    
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>
<?php include 'inc/template_end.php'; ?>



<script>
    


inicia.controller('ctrlLab', function ctrlLab($scope, $http){







$scope.CrudUsuarios = function() {




var params = {entidad:'1'};
$http({
url: 'json/crudUsuarios.php',
method: 'POST',
//data: params,
data: angular.toJson( $scope.usuarios),
transformRequest: false,
headers: {'Content-Type': 'application/json'}
})
.then(function(response) {
console.log(response)
//$scope.listaUsuarios = res.data;


//$scope.mensajeFichaAntro = 'Ficha Antropométrica agregada!'; // 
});

};



/* guardar ficha de identificacion */
$scope.cargarListaUsuarios = function() {

var params = {entidad:'1'};
$http({
url: 'json/listaUsuarios.php',
method: 'POST',
data: params,
//data: angular.toJson( $scope.fichaBio),
//transformRequest: false,
//headers: {'Content-Type': 'application/json'}
})
.then(function(res,data) {

$scope.listaUsuarios = res.data;


//$scope.mensajeFichaAntro = 'Ficha Antropométrica agregada!'; // 
});

};

});
    
    </script>