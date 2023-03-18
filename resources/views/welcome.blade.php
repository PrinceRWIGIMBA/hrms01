@extends('layouts.master')
@section('prince','dashboard')
@section('sign','Home');
@section('contents')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="content">
                        <div class="row">
                            <div class="col-xs-5">
                                <div class="icon-big icon-warning text-center">
                                    <i class="fa fa-users"></i>
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="numbers">
                                    <p>User</p>
                                    {{number_format($user_count)}}
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <hr />
                            <div class="stats">
                                <i class="ti-reload"></i> Updated now
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="content">
                        <div class="row">
                            <div class="col-xs-5">
                                <div class="icon-big icon-success text-center">
                                    <i class="fa fa-building"></i>
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="numbers">
                                    <p>Department</p>
                                    {{number_format($depart)}}
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <hr />
                            <div class="stats">
                                <i class="ti-calendar"></i> Last day
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="content">
                        <div class="row">
                            <div class="col-xs-5">
                                <div class="icon-big icon-danger text-center">
                                    <i class="fa fa-user-tie"></i>
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="numbers">
                                    <p>Employees</p>
                                    {{number_format($employee)}}
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <hr />
                            <div class="stats">
                                <i class="ti-timer"></i> In the last hour
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="content">
                        <div class="row">
                            <div class="col-xs-5">
                                <div class="icon-big icon-info text-center">
                                    <i class="fa fa-list-ul"></i>
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="numbers">
                                    <p>Job Title</p>
                                    {{number_format($job)}}
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <hr />
                            <div class="stats">
                                <i class="ti-reload"></i> Updated now
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

         
        </div>
       
    </div>
</div>
    
@endsection
