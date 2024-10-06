@extends('layouts.admin')
@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-between">
                <div><h2 class="title">Dashboard</h2></div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-sm-6 col-lg-4">
                        <div class="tile tile-primary">
                            <div class="tile-heading">Total Members</div>
                            <div class="tile-body">
                                <i class="fa-regular fa-file"></i>
                                <h2 class="float-end">100</h2> <!-- Static Value -->
                            </div>
                            <div class="tile-footer"><a href="#">View more...</a></div> <!-- Removed dynamic route -->
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="tile tile-primary">
                            <div class="tile-heading">Total Staffs</div>
                            <div class="tile-body">
                                <i class="fa-regular fa-file"></i>
                                <h2 class="float-end">10</h2> <!-- Static Value -->
                            </div>
                            <div class="tile-footer"><a href="#">View more...</a></div> <!-- Removed dynamic route -->
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="tile tile-primary">
                            <div class="tile-heading">Total Feedbacks</div>
                            <div class="tile-body">
                                <i class="fa-regular fa-file"></i>
                                <h2 class="float-end">500</h2> <!-- Static Value -->
                            </div>
                            <div class="tile-footer"><a href="#">View more...</a></div> <!-- Removed dynamic route -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="box">
                    <div class="row">
                        <div class="col-lg-12">
                            <h5>Latest Ride Histories</h5>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead class="table-light">
                                        <th>ID</th>
                                        <th>Passenger Name</th>
                                        <th>Driver Name</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </thead>
                                    <tbody>
                                        <!-- Static rows -->
                                        <tr>
                                            <td>1</td>
                                            <td>John Doe</td>
                                            <td>Jane Smith</td>
                                            <td>01/01/2024</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="action-button"><a href="#" title="View"><i class="fa-solid fa-eye"></i></a></div> <!-- Removed dynamic route -->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Michael Brown</td>
                                            <td>Lisa White</td>
                                            <td>01/02/2024</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="action-button"><a href="#" title="View"><i class="fa-solid fa-eye"></i></a></div> <!-- Removed dynamic route -->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Emily Clark</td>
                                            <td>David Johnson</td>
                                            <td>01/03/2024</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="action-button"><a href="#" title="View"><i class="fa-solid fa-eye"></i></a></div> <!-- Removed dynamic route -->
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
