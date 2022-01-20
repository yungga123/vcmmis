@extends('templates/master')

@section('content')
    <div class="card">
        <div class="card-header fw-bold">Inventory Menu</div>
        <div class="card-body">
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="images/inventory-small.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Add Items</h5>
                            <p class="card-text">A simple way to manage inventory.</p>
                        </div>
                        <div class="card-footer d-grid">
                            <button class="btn btn-success">Proceed <i class="fas fa-arrow-alt-circle-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="images/dispatch-small.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Items Inventory</h5>
                            <p class="card-text">Manage dispatch forms of employees.</p>
                        </div>
                        <div class="card-footer d-grid">
                            <button class="btn btn-success">Proceed <i class="fas fa-arrow-alt-circle-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="images/scanner-small.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Inventory Stock-outs</h5>
                            <p class="card-text">Manage inventory stock outs.</p>
                        </div>
                        <div class="card-footer d-grid">
                            <button class="btn btn-success">Proceed <i class="fas fa-arrow-alt-circle-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="images/menu-small.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Go back to menu</h5>
                            <p class="card-text">Redirect to the main page.</p>
                        </div>
                        <div class="card-footer d-grid">
                            <a class="btn btn-success" href="/">Proceed <i class="fas fa-arrow-alt-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection