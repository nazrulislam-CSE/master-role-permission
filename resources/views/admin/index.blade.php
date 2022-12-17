@extends('admin.admin_master')
@section('admin')
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xl-3 col-6">
            <div class="box overflow-hidden pull-up">
                <div class="box-body">							
                    <div class="icon bg-primary-light rounded w-60 h-60">
                        <i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
                    </div>
                    <div>
                        <p class="text-mute mt-20 mb-0 font-size-16">New Customers</p>
                        <h3 class="text-white mb-0 font-weight-500"><small class="text-success">10<i class="fa fa-caret-up"></i></small></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-6">
            <div class="box overflow-hidden pull-up">
                <div class="box-body">							
                    <div class="icon bg-warning-light rounded w-60 h-60">
                        <i class="text-warning mr-0 font-size-24 mdi mdi-car"></i>
                    </div>
                    <div>
                        <p class="text-mute mt-20 mb-0 font-size-16">Today's Sale</p>
                        <h3 class="text-white mb-0 font-weight-500">৳40000 <small class="text-success"><i class="fa fa-caret-up"></i> BDT</small></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-6">
            <div class="box overflow-hidden pull-up">
                <div class="box-body">							
                    <div class="icon bg-info-light rounded w-60 h-60">
                        <i class="text-info mr-0 font-size-24 mdi mdi-sale"></i>
                    </div>
                    <div>
                        <p class="text-mute mt-20 mb-0 font-size-16">Monthly Sale</p>
                        <h3 class="text-white mb-0 font-weight-500">৳700000 <small class="text-danger"><i class="fa fa-caret-down"></i> BDT</small></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-6">
            <div class="box overflow-hidden pull-up">
                <div class="box-body">							
                    <div class="icon bg-danger-light rounded w-60 h-60">
                        <i class="text-danger mr-0 font-size-24 mdi mdi-phone-incoming"></i>
                    </div>
                    <div>
                        <p class="text-mute mt-20 mb-0 font-size-16">Yearly Sale </p>
                        <h3 class="text-white mb-0 font-weight-500">৳8700000 <small class="text-danger"><i class="fa fa-caret-up"></i> BDT</small></h3>
                    </div>
                </div>
            </div>
        </div>
        
       <div class="col-12">
            <div class="box">
                <div class="box-header">
                    <h4 class="box-title align-items-start flex-column">
                        Recent All Orders 
                    </h4>
                </div>
                
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table no-border">
                            <thead>
                                <tr class="text-uppercase bg-lightest">
                                    <th style="min-width: 250px"><span class="text-white">Date</span></th>
                                    <th style="min-width: 100px"><span class="text-fade">Invoice</span></th>
                                    <th style="min-width: 100px"><span class="text-fade">Amount</span></th>
                                    <th style="min-width: 150px"><span class="text-fade">Payment</span></th>
                                    <th style="min-width: 130px"><span class="text-fade">Status</span></th>
                                    <th style="min-width: 120px"><span class="text-fade">Process</span> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>										
                                    <td class="pl-0 py-8">
                                        <span class="text-white font-weight-600 d-block font-size-16">
                                           22-10-222
                                        </span>
                                    </td>
                                    <td>
                                        <span class="text-white font-weight-600 d-block font-size-16">
                                           147155
                                        </span>
                                    </td>
                                    <td>
                                        <span class="text-fade font-weight-600 d-block font-size-16">
                                            ৳70000
                                        </span>
                                    </td>
                                    <td>
                                        <span class="text-white font-weight-600 d-block font-size-16">
                                            BKASH
                                        </span>
                                    </td>
                                    <td>
                                        <span class="badge badge-primary-light badge-lg">Active</span>
                                    </td>
                                    <td class="text-right">
                                        <a href="" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
                                        <a href="" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>  
        </div>
  
       


    </div>
</section>
<!-- /.content -->
@endsection