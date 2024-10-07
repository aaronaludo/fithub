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
                            <div class="tile-heading">Total Gym Members</div>
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
                            <h5>Latest Gym Members</h5>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead class="table-light">
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th>Contact Number</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>John Doe</td>
                                            <td>Admin</td>
                                            <td>+123456789</td>
                                            <td>Active</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="action-button"><a href="#" title="View"><i class="fa-solid fa-eye"></i></a></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jane Smith</td>
                                            <td>Manager</td>
                                            <td>+987654321</td>
                                            <td>Inactive</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="action-button"><a href="#" title="View"><i class="fa-solid fa-eye"></i></a></div>
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
