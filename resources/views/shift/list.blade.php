@extends('layouts.app')

@section('page_title')
    Shifts |
@endsection


@section('content')

    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Shift Listing</h3>
                </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12">@include('flash::message')</div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_content">

                            <table class="table table-striped table-bordered"  id="shift_table">
                                <thead>
                                <tr  role="row">
                                    <td colspan="5" align="right"><a href="{{route('shifts.create')}}" class="btn btn-default"><i class="fa fa-plus-square"></i>  Add Shift</a></td>
                                </tr>
                                <tr  role="row">
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                    <td>Action</td>
                                </tr>
                                </thead>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('custom_js')

    <script type="text/javascript" src="{{asset('js/custom/shift.js')}}"></script>
    <script>
        var ajaxListRoute = '{!! route('ajax_shifts') !!}';
        $(document).ready(function(){
            Shift.list(ajaxListRoute);
        });
    </script>

@endsection
