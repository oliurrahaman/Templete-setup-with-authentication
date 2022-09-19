@extends('admin.layout.master')
@section('title')
Dashboard
@endsection

@section('admin_content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Cards</h1>
    </div>

    <div class="row">

        <!-- wareHouse Card Example -->
        <div class="col-xl-3 col-md-6 mb-4" >
            <div class="card border-left-primary shadow h-100 py-2" style="background-color: #E1F0FF">
                <div class="card-body" >
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                              <a href="#">Warehouses</a> </div>

                            <div class="h5 mb-0 font-weight-bold text-gray-800 text-center" >20</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-home fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Users Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2" style="background-color: #FFE2E5">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1 text-center">
                                <a href="#">Users</a></div>

                            <div class="h5 mb-0 font-weight-bold text-gray-800 text-center">200
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-friends fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tasks Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2" style="background-color: #FFE2E5">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1 text-center">
                                <a href="#">Pack Size</a></div>

                            <div class="h5 mb-0 font-weight-bold text-gray-800 text-center">200
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-friends fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2" style="background-color: #CBE9BF">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1 text-center">
                                <a href="#">Category</a></div>

                            <div class="h5 mb-0 font-weight-bold text-gray-800 text-center">200</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-map fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <!-- wareHouse Card Example -->
        <div class="col-xl-3 col-md-6 mb-4" >
            <div class="card border-left-primary shadow h-100 py-2" style="background-color: #CCE8FF">
                <div class="card-body" >
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                              <a href="#">Products</a> </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800 text-center">20</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-arrows-to-dot fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Users Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2" style="background-color: #C9F7F5">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1 text-center">
                                <a href="#">Unit</a></div>

                            <div class="h5 mb-0 font-weight-bold text-gray-800 text-center">20</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-scale-balanced fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tasks Card Example -->

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2" style="background-color: #C9F7F5">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1 text-center">
                                <a href="#">Buyers</a></div>

                            <div class="h5 mb-0 font-weight-bold text-gray-800 text-center">200</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-scale-balanced fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2" style="background-color: #FFF4DE">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1 text-center">
                                <a href="#">Active Order</a></div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800 text-center">20</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-bucket fa-2x text-success-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <!-- wareHouse Card Example -->
        <div class="col-xl-3 col-md-6 mb-4" >
            <div class="card border-left-primary shadow h-100 py-2" style="background-color: #E1F0FF">
                <div class="card-body" >
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                              <a href="#">Pending Order</a> </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800 text-center">200</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-rocket fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Users Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2" style="background-color: #FFE2E5">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1 text-center">
                                <a href="#">Packaging Company</a></div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800 text-center">100</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-house-circle-check fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tasks Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2" style="background-color: #FFE2E5">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1 text-center">
                                <a href="#">Pack Order</a></div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800 text-center">10</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-house-circle-check fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2" style="background-color: #CBE9BF">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1 text-center">
                                <a href="#">Assign Order</a></div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800 text-center text-center">400</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

</div>
@endsection
