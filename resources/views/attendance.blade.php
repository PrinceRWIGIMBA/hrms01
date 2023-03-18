@extends('layouts.master')

@section('prince',' Employees Register')

@section('contents')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-6">
                <div class="card">
                    <div class="header">
                        <h4 class="title">List of Employees </h4>
                    </div>
                    <div class="content">
                        <table class="table">
                            <tr>
                                <th>#</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Date of Birth</th>
                                <th>Job Title</th>
                                <th>Department</th>
                                <th>Action</th>
                            </tr>
                            <tbody>
                                @foreach ($employee as $key=> $emp_row )
                                @if (!is_null($emp_row->department_id))
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$emp_row->firstname}}</td>
                                    <td>{{$emp_row->laststname}}</td>
                                    <td>{{$emp_row->date_of_birth}}</td>
                                    <td>@if (!is_null($emp_row->job_title_id))
                                        {{$emp_row->getJobTitle->job_title_name}}
                                    @endif</td>
                                    <td>
                                        @if (!is_null($emp_row->department_id))
                                        {{$emp_row->getDepartmentName->department_name}}
                                        @endif
                                    </td>
                                    <td>
                                        <div style="display: inline-flex;">
                                            <a href="{{url('/attendance/prasent/'.$emp_row->id)}}" class="btn btn-sm btn-primary " style="margin-right: .3rem">Present</a>
                                            <a href="{{url('/attendance/absent/'.$emp_row->id)}}" class="btn btn-sm btn-danger">Absent</a>
                                        </div>
                                    </td>
                                    </tr>
                                @endif

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h4 class="title">ATTENDANCE RECORD </h4>
                    </div>
                    <div class="content">
                        <table class="table">
                            <tr>
                                <th>#</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Days</th>
                                <th>Amount</th>
                                <th>Paid</th>
                            </tr>
                            <tbody>
                                @foreach ($employee_attendance as  $key=> $emp_attendance )
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$emp_attendance->getEmployeeNames->firstname}}</td>
                                    <td>{{$emp_attendance->getEmployeeNames->laststname}}</td>
                                    <td>{{$emp_attendance->attendance_date}}</td>
                                    <td>{{$emp_attendance->amount}}</td>
                                    <td><div style="display: inline-flex;">
                                        <a href="{{url('/attendances/payment/'.$emp_attendance->id)}}" class="btn btn-sm btn-primary " style="margin-right: .3rem">payed</a>
                                           </div></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card">
                    <div class="header">
                        <h4 class="title">PAYMENT MADE</h4>
                        <input type="date"  name="period_paid_for" style="margin-left:55em">
                    </div>
                    <div class="content">
                        <table class="table">
                            <tr>
                                <th>#</th>
                                <th>Firstname</th>
                                <th>Lastname</th>

                                <th>Totla paid on selected date</th>
                                <th>Total Paid for all attendance</th>
                               
                            </tr>
                            <tbody>
                                @foreach ($employee_payment as  $key=> $emp_pay )
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$emp_pay->firstname}}</td>
                                    <td>{{$emp_pay->laststname}}</td>
                                    <td>{{$emp_pay->amount_paid}}</td>
                                    <td>{{$emp_pay->total}}</td>
                                

                                    
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@endsection
