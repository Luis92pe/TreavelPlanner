@extends('layouts.app')

@section('content')
<div  class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" >
            
            <toaster-container toaster-options="{'animation-class': 'toast-top-center'}"></toaster-container>



            <input type="text" class="form-control" ng-model="filter" name="" placeholder="Buscar Ruta">
            <br>
            <div class="col-md-4" ng-repeat="trip in mytrips | filter:filter">
                <div class="panel panel-default" >
                    <div class="panel-heading">@{{trip.name}}</div>
                    <div class="panel-body">
                        <div>
                            <strong>Destino</strong>: @{{trip.destination}}
                            <br>
                            <strong>Dias Inicio:</strong>: @{{trip.days}}
                            <hr>
                            <button class="btn btn-default" data-toggle="modal" data-target="#myModal" ng-click="editTrip(trip.id)">Editar</button>

                            <button class="btn btn-danger" data-toggle="modal" data-target="#myModalDelete" ng-click="editTrip(trip.id)">Eliminar</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- New trip --}}
            <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Nueva Ruta</h4>
                      </div>
                      <div class="modal-body">
                        <form novalidate>
                            {{ csrf_field() }}
                            <div class="form-group">
                              <label for="usr">Name:</label>
                              <input type="text" class="form-control" ng-model="form.trip.name" name="name">
                            </div>
                            <div class="form-group">
                              <label for="usr">Destination:</label>
                              <input type="text" class="form-control" ng-model="form.trip.destination" name="destination">
                            </div>
                            <div class="form-group">
                              <label for="usr">Comentarios:</label>
                              <input type="text" class="form-control" ng-model="form.trip.comments" name="comments">
                            </div>
                            <div class="form-group">
                              <label for="usr">Fecha Inicio:</label>
                              <input type="date" class="form-control" ng-model="form.trip.startdate" name="startdate">
                              <label for="usr">Fecha Fin:</label>
                              <input type="date" class="form-control" ng-model="form.trip.enddate" name="enddate">
                            </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" ng-if="!edit" ng-click="saveTrip(form.trip)">Crear</button>

                        <button type="button" class="btn btn-primary" ng-if="edit" ng-click="updateTrip(form.trip.id)">Actualizar</button>
                      </div>
                    </div>
                  </div>
                </div>
            {{-- End New trip --}}

            <!-- Modal -->
                <div class="modal fade" id="myModalDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Eliminar</h4>
                      </div>
                      <div class="modal-body">
                        La ruta se eliminara permanentemente, ¿Desea eliminar la ruta?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-danger"  ng-click="deleteTrip(form.trip.id)">Si</button>
                      </div>
                    </div>
                  </div>
                </div>
        </div>
    </div>
</div>









@endsection
