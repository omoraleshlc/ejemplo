<?php include 'inc/config_check.php';
include 'inc/config.php'; $template['header_link'] = 'Modulo de Usuarios'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

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
                <li class="pull-right"><a  href="#search-tab-users"><i class="fa fa-plus "></i>Agregar</a></li>
                
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
    
    
    
<!-- modal para editar usuarios -->    
<div id="editarUsuario" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h3 class="modal-title"><strong>Editar Usuario</strong></h3>
                            </div>
                            <div class="modal-body">
                                <div class="block">
                <!-- General Elements Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-effect-ripple btn-default toggle-bordered enable-tooltip" data-toggle="button" title="Toggles .form-bordered class">Borderless</a>
                    </div>
                    <h2>General Elements</h2>
                </div>
                <!-- END General Elements Title -->

                <!-- General Elements Content -->
                <form action="page_forms_components.php" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return false;">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Static</label>
                        <div class="col-md-9">
                            <p class="form-control-static">This is static text</p>
                        </div>
                    </div>
                    <div ng-class="!usuario?'form-group has-error':'form-group'">
                        <label class="col-md-3 control-label" for="example-text-input">Usuario</label>
                        <div class="col-md-6">
                            <input type="text" 
                                   ng-model="usuario"
                                   id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                            <span class="help-block">Escriba el usuario</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-email">Email</label>
                        <div class="col-md-6">
                            <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-password">Password</label>
                        <div class="col-md-6">
                            <input type="password" id="example-password" name="example-password" class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-disabled">Disabled</label>
                        <div class="col-md-6">
                            <input type="text" id="example-disabled" name="example-disabled" class="form-control" placeholder="Disabled" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-textarea-input">Textarea</label>
                        <div class="col-md-9">
                            <textarea id="example-textarea-input" name="example-textarea-input" rows="7" class="form-control" placeholder="Description.."></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-select">Select</label>
                        <div class="col-md-6">
                            <select id="example-select" name="example-select" class="form-control" size="1">
                                <option value="0">Please select</option>
                                <option value="1">HTML</option>
                                <option value="2">CSS</option>
                                <option value="3">Javascript</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-multiple-select">Multiple</label>
                        <div class="col-md-6">
                            <select id="example-multiple-select" name="example-multiple-select" class="form-control" size="5" multiple>
                                <option value="1">Option #1</option>
                                <option value="2">Option #2</option>
                                <option value="3">Option #3</option>
                                <option value="4">Option #4</option>
                                <option value="5">Option #5</option>
                                <option value="6">Option #6</option>
                                <option value="7">Option #7</option>
                                <option value="8">Option #8</option>
                                <option value="9">Option #9</option>
                                <option value="10">Option #10</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Radios</label>
                        <div class="col-md-9">
                            <div class="radio">
                                <label for="example-radio1">
                                    <input type="radio" id="example-radio1" name="example-radios" value="option1"> HTML
                                </label>
                            </div>
                            <div class="radio">
                                <label for="example-radio2">
                                    <input type="radio" id="example-radio2" name="example-radios" value="option2"> CSS
                                </label>
                            </div>
                            <div class="radio">
                                <label for="example-radio3">
                                    <input type="radio" id="example-radio3" name="example-radios" value="option3"> Javascript
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Inline Radios</label>
                        <div class="col-md-9">
                            <label class="radio-inline" for="example-inline-radio1">
                                <input type="radio" id="example-inline-radio1" name="example-inline-radios" value="option1"> HTML
                            </label>
                            <label class="radio-inline" for="example-inline-radio2">
                                <input type="radio" id="example-inline-radio2" name="example-inline-radios" value="option2"> CSS
                            </label>
                            <label class="radio-inline" for="example-inline-radio3">
                                <input type="radio" id="example-inline-radio3" name="example-inline-radios" value="option3"> Javascript
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Checkboxes</label>
                        <div class="col-md-9">
                            <div class="checkbox">
                                <label for="example-checkbox1">
                                    <input type="checkbox" id="example-checkbox1" name="example-checkbox1" value="option1"> HTML
                                </label>
                            </div>
                            <div class="checkbox">
                                <label for="example-checkbox2">
                                    <input type="checkbox" id="example-checkbox2" name="example-checkbox2" value="option2"> CSS
                                </label>
                            </div>
                            <div class="checkbox">
                                <label for="example-checkbox3">
                                    <input type="checkbox" id="example-checkbox3" name="example-checkbox3" value="option3"> Javascript
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Inline Checkboxes</label>
                        <div class="col-md-9">
                            <label class="checkbox-inline" for="example-inline-checkbox1">
                                <input type="checkbox" id="example-inline-checkbox1" name="example-inline-checkbox1" value="option1"> HTML
                            </label>
                            <label class="checkbox-inline" for="example-inline-checkbox2">
                                <input type="checkbox" id="example-inline-checkbox2" name="example-inline-checkbox2" value="option2"> CSS
                            </label>
                            <label class="checkbox-inline" for="example-inline-checkbox3">
                                <input type="checkbox" id="example-inline-checkbox3" name="example-inline-checkbox3" value="option3"> Javascript
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-file-input">File</label>
                        <div class="col-md-9">
                            <input type="file" id="example-file-input" name="example-file-input">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-file-multiple-input">Multiple File</label>
                        <div class="col-md-9">
                            <input type="file" id="example-file-multiple-input" name="example-file-multiple-input" multiple>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-md-9 col-md-offset-3">
                            <button type="submit" class="btn btn-effect-ripple btn-primary">Submit</button>
                            <button type="reset" class="btn btn-effect-ripple btn-danger">Reset</button>
                        </div>
                    </div>
                </form>
                <!-- END General Elements Content -->
            </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-effect-ripple btn-primary">Guardar</button>
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