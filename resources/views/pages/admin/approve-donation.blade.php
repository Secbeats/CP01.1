@extends('layouts.app')
@section('content')
    <div>
        <i class="icon fa fa-connectdevelop inner-icon" aria-hidden="true"></i>
        <div id="tab2" class="tab-grid">
            <div class="login-form">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Serial No</th>
                        <th>Donee Name</th>
                        <th>Amount Needed</th>
                        <th>Location</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Mr. X</td>
                        <td>50000</td>
                        <td>Bashundhara R/A,Dhaka.</td>
                        <td>
                            <button class="alert alert-success">Details</button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Mr. Y</td>
                        <td>10000</td>
                        <td>Mirpur Rupnagar R/A,Dhaka.</td>
                        <td>
                            <button class="alert alert-success">Donate</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection