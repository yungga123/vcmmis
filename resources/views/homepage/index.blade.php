@extends('templates/master')

@section('content')
    <div class="card">
        <div class="card-header fw-bold">Choose Transaction</div>
        <div class="card-body">

            <div class="row row-cols-1 row-cols-md-4 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="images/inventory-small.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Manage Inventory</h5>
                            <p class="card-text">A simple way to manage inventory.</p>
                        </div>
                        <div class="card-footer d-grid">
                            <a class="btn btn-success" href="/inventory">Proceed <i class="fas fa-arrow-alt-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="images/dispatch-small.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Manage Dispatch</h5>
                            <p class="card-text">Manage dispatch forms of employees.</p>
                        </div>
                        <div class="card-footer d-grid">
                            <button class="btn btn-success">Proceed <i class="fas fa-arrow-alt-circle-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="images/payroll-small.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Payroll System</h5>
                            <p class="card-text">Manage Payroll system here. Only HR and authorized persons can access.</p>
                        </div>
                        <div class="card-footer d-grid">
                            <button class="btn btn-success">Proceed <i class="fas fa-arrow-alt-circle-right"></i></button>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <img src="images/calendar-small.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Manage Schedules</h5>
                            <p class="card-text">Manage schedules such as dispatching, bills and alike.</p>
                        </div>
                        <div class="card-footer d-grid">
                            <button class="btn btn-success">Proceed <i class="fas fa-arrow-alt-circle-right"></i></button>
                        </div>
                    </div>
                </div>

               
            </div>
        </div>
    </div>     
@endsection
