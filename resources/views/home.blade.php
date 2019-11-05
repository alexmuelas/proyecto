@extends('layouts.barralateral')
@section('title', __('Welcome'))
@section('content')

<div class="container-fluid">
        <div class="container">
            <div class="row">
            <div class="col-md-12">
                <div class="card ">
         
                        <div class="row">
                          <div class="col-md-4">
                            <div class="card card-chart">
                              <div class="card-header card-header-rose">
                              </div>
                              <div class="card-body">
                                <h4 class="card-title">Website Views</h4>
                                <p class="card-category">Last Campaign Performance</p>
                              </div>
                              <div class="card-footer">
                                <div class="stats">
                                  <i class="material-icons">access_time</i> campaign sent 2 days ago
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                          <div class="card card-chart">
                              <div class="card-header card-header-rose">
                              </div>
                              <div class="card-body">
                                <h2 class="card-title">{{ __('money')}}</h2>
                                <h4 class="card-category">  {{ Auth::user()->money }} €</h4>
                              </div>
                              <div class="card-footer">
                                <div class="stats">
                                  <h5><a class="nav-link" href="{{ url('/addmoney') }}"> Add money</a></h5>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                          <div class="card card-chart">
                              <div class="card-header card-header-rose">
                              </div>
                              <div class="card-body">
                                <h4 class="card-title">Website Views</h4>
                                <p class="card-category">Last Campaign Performance</p>
                              </div>
                              <div class="card-footer">
                                <div class="stats">
                                  <i class="material-icons">access_time</i> campaign sent 2 days ago
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
                <!-- <div class="col-md-8 col-sm-6">
                        <div class="card ">
                            <div class="card-header ">
                                <div class="card-header">
                                    <h4 class="card-title">Mi perfil</h4>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-md-12 pr-1">
                                        <div class="form-group">
                                            <label>Nombre y apellidos</label>
                                            <input type="text" name="name" class="form-control"
                                                   value="#">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6 pr-1">
                                        <div class="form-group">
                                            <label>Nombre de usuario</label>
                                            <input type="text" name="username" class="form-control"
                                            value="#">
                                        </div>
                                    </div>
                                    <div class="col-md-6 pl-1">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" name="email" class="form-control"
                                            value="#">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 pr-1">
                                        <div class="form-group">
                                            <label>Dirección:</label>
                                            <input type="text" name="address" class="form-control"
                                            value="#">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Fecha de nacimiento</label>
                                            <input type="date" name="fecha_nacimiento" class="form-control"
                                            value="#">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Sexo</label>
                                            <select name="sexo" class="form-control">
                                                <option value="Hombre">Hombre</option>
                                                <option value="Mujer">Mujer</option>
                                                <option value="No">Otro</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Telefono</label>
                                            <input type="text" name="phone" class="form-control"
                                            value="#">
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-info btn-fill pull-right">Editar Perfil</button>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                    <div class="card">
                        <div class="card-body">
                            <a href="#" style="width: 100%" class="btn btn-success btn-fill pull-right">Cambiar Contraseña</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-user">
                        <div class="card-header no-padding">
                            <div class="card-image">
                                <img src="#" alt="...">
                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="author">
                                <img class="avatar border-gray" src="#" alt="...">
                            </div>
                            <form action="#" method="post" class="form" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div>
                                                    <span class="btn btn-raised btn-round btn-default btn-file">
                                                        <input type="file" style="width:60%" name="image">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info ">Editar foto de usuario</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
</div>

@endsection
