<!DOCTYPE html >
<html lang="es" ng-app="supplierApp">
<head>
    <title>Proveedores CRUD</title>
    @include('partials.header')
</head>
<body>
    <nav class="navbar navbar-default">
        @include('layouts.main.includes.nav')
    </nav>

    <div class="storage" ng-controller="SupplierController">
        @yield('table1')

        <table class="table table-striped task-table" >
            <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>
                <button id="btn-add" class="btn btn-success btn-xs" ng-click="toggle('add',0)">Agregar</button>
            </th>
            </thead>
            <tr ng-repeat="supplier in suppliers" ng-show="supplier.is_active == true">

                <td>@{{ supplier.id }}</td>
                <td>@{{ supplier.supplierName }}</td>
                <td>@{{ supplier.supplierEmail }}</td>
                <td>@{{ supplier.supplierPhone }}</td>
                <td>
                    <button class="btn btn-warning btn-xs btn-detail" ng-click="toggle('edit',supplier.id)">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </button>
                    <button class="btn btn-danger btn-xs btn-delete" ng-click="confirmDelete(supplier.id)">
                        <span class="glyphicon glyphicon-trash"></span>
                    </button>
                </td>
            </tr>
        </table>

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledBy="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">x</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel" >@{{ form_tittle }}</h4>
                    </div>
                    <div class="modal-body">
                        <form name="frmSupplier" class="form-horizontal" novalidate="">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Supplier Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="supplierName" name="supplierName"
                                           placeholder="Supplier Name" value="@{{ supplierName }}" data-ng-model="supplier.supplierName"
                                           ng-required="true">
                                    <span ng-show="frmSupplier.supplierName.$invalid && frmSupplier.supplierName.$touched">Supplier Name field is required</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Supplier Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="supplierEmail" name="supplierEmail"
                                           placeholder="Supplier Email" value="@{{  supplierEmail }}" ng-model="supplier.supplierEmail"
                                           ng-required="true">
                                    <span ng-show="frmSupplier.supplierEmail.$invalid && frmSupplier.supplierEmail.$touched">Supplier Email field is required</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Supplier Phone</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="supplierPhone" name="supplierPhone"
                                           placeholder="Supplier Phone" value="@{{ supplierPhone }}" ng-model="supplier.supplierPhone"
                                           ng-required="true">
                                    <span ng-show="frmSupplier.supplierPhone.$invalid && frmSupplier.supplierPhone.$touched">Supplier Contact field is required</span>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="btn-save" ng-click="save(modalstate, id)" ng-disabled="frmSupplier.$invalid">Save Changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        @include('layouts.main.includes.footer')
    </footer>
</body>
</html>