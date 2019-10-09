@extends('layouts.barralateral')
@section('title', __('Welcome'))
@section('content')


<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- <div class="wrapper wrapper-full-page">
    <div class="page-header header-filter" filter-color="black" style="background-image: url({{ asset('img/estadio.jpg') }}); background-size: cover; background-position: top center;">
     
    <div class="navbar-wrapper">
        <div class="navbar-minimize">
            <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
                <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
                <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
            </button>
        </div>
        <a class="navbar-brand" href="#pablo">Dashboard</a>
    </div>

     </div>
</div> -->

<div class="content">
        <div class="content">
          <div class="container-fluid">
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
            







@endsection
