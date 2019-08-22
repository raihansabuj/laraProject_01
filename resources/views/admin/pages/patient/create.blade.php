@extends('admin.layouts.master')
@section('content')

<header class="head">
    <div class="main-bar">
       <div class="row no-gutters">
           <div class="col-sm-5 col-lg-6 skin_txt">
               <h4 class="nav_top_align">
                   <i class="fa fa-pencil"></i>
                   Patient
               </h4>
           </div>
           <div class="col-sm-7 col-lg-6">
               <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                   <li class="breadcrumb-item">
                       <a href="{{ route('admin.index') }}">
                           <i class="fa fa-home" data-pack="default" data-tags=""></i>
                           Dashboard
                       </a>
                   </li>
                   <li class="breadcrumb-item">
                       <a href="{{ route('admin.patient.manage') }}">Patient</a>
                   </li>
                   <li class="active breadcrumb-item">Create</li>
               </ol>
           </div>
       </div>
    </div>
</header>
<div class="outer">
    <div class="inner bg-container forms">
        <div class="row">
            <div class="col">
                <div class="card">  {{--m-t-35--}}
                    <div class="card-header bg-white">
                        <i class="fa fa-file-text-o"></i>
                        Patient Create
                    </div>
                    <div class="card-body m-t-20">
                        <!--main content-->
                        <div class="row">
                            <div class="col">
                                <!-- BEGIN FORM WIZARD WITH VALIDATION -->
                                <form id="commentForm" method="post" action="#" class="validate">
                                    <div id="rootwizard">
                                        <ul class="nav nav-pills">
                                            <li class="nav-item m-t-15">
                                                <a class="nav-link" href="#tab1" data-toggle="tab">
                                                    <span class="userprofile_tab1">1</span>Patient Information</a>
                                            </li>
                                            <li class="nav-item m-t-15">
                                                <a class="nav-link" href="#tab2" data-toggle="tab">
                                                    <span class="userprofile_tab2">2</span>Symptom Checker</a>
                                            </li>
                                            <li class="nav-item m-t-15">
                                                <a class="nav-link" href="#tab3"
                                                    data-toggle="tab"><span>3</span>Dengue Test</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content m-t-20">
                                            <div class="tab-pane" id="tab1">
                                            <form class="form-horizontal" method="POST" action="{{ route('admin.patient.store')}}">
                                                    
                                                    {{ csrf_field() }}
                                                
                                                    <div class="form-group">
                                                        <label for="patientName" class="control-label">Patient Name *</label>
                                                        <input id="patientName" name="patient_name" type="text"
                                                                placeholder="Enter Patient name"
                                                                class="form-control required">
                                                    </div> 
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-4 col-sm-6 col-12 m-t-35">
                                                                <label for="phone" class="control-label">phone
                                                                        *</label>
                                                                <input id="phone" name="phone"
                                                                    placeholder="Enter Phone Number"
                                                                    type="text"
                                                                    class="form-control required">
                                                            </div>
                                                            <div class="col-lg-4 col-sm-6 col-12 m-t-35">
                                                                    <label for="age" class="control-label">Age
                                                                            *</label>
                                                                    <input id="age" name="age" placeholder="How older he/she is?"
                                                                                type="text"
                                                                                class="form-control required">
                                                                </div>
                                                                <div class="col-lg-4 col-sm-6 col-12 m-t-35">
                                                                    <label for="age" class="control-label">Sex*</label>
                                                                    <select class="form-control chzn-select" name="sex" tabindex="2">
                                                                        <option disabled selected>Choose Sex</option>
                                                                        <option value="1">Male</option>
                                                                        <option value="2">Female</option>
                                                                        <option value="3">Trasgender</option>
                                                                    </select> 
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            {{--
                                                            <div class="col-lg-3 col-sm-6 col-12 m-t-35">
                                                                <label for="age" class="control-label">Country</label>
                                                                <select class="form-control chzn-select" tabindex="2">
                                                                    <option disabled selected>Choose Country</option>
                                                                    <option value="1">Bangladesh</option>
                                                                </select> 
                                                            </div>
                                                            --}}
                                                            <div class="col-lg-4 col-sm-6 col-12 m-t-35">
                                                                <label for="age" class="control-label">Division*</label>
                                                                <select class="form-control chzn-select" name="state" tabindex="2">
                                                                    <option disabled>Choose State</option>
                                                                    <option value="1" selected>Dhaka Division</option> 
                                                                </select> 
                                                            </div>
                                                            <div class="col-lg-4 col-sm-6 col-12 m-t-35">
                                                                <label for="age" class="control-label">District*</label>
                                                                <select class="form-control chzn-select" name="district" tabindex="2">
                                                                    <option disabled >Choose District</option>
                                                                    <option value="1" selected>Dhaka</option> 
                                                                </select> 
                                                            </div>
                                                            {{--
                                                            <div class="col-lg-3 col-sm-6 col-12 m-t-35">
                                                                <label for="age" class="control-label">City*</label>
                                                                <select class="form-control chzn-select" name="city" tabindex="2">
                                                                    <option disabled>Choose City</option>
                                                                    <option value="1" selected>Dhaka</option>
                                                                </select> 
                                                            </div>
                                                            --}}
                                                            <div class="col-lg-4 col-sm-6 col-12 m-t-35">
                                                                <label for="age" class="control-label">Thana/Upazila*</label>
                                                                <select class="form-control chzn-select" name="area" tabindex="2">
                                                                    <option disabled>Choose Thana/Upazila</option>
                                                                    <option value="1" selected>Savar</option> 
                                                                </select> 
                                                            </div>
                                                        </div>
                                                        {{--
                                                        <div class="form-group">
                                                            <label for="remarks" class="control-label">Address</label>
                                                            <input id="remarks" name="address" type="text"
                                                                    placeholder="Detail Address"
                                                                    class="form-control">
                                                        </div> 
                                                        --}}
                                                        <div class="form-group">
                                                            <label for="sample_type_id" class="control-label">Choose Sample Type*</label>
                                                            <select class="form-control chzn-select" name="sample_type_id" tabindex="2">
                                                                <option disabled>Sample Type</option>
                                                                <option value="1" selected>Infectious Disease</option> 
                                                            </select> 
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="remarks" class="control-label">Remarks</label>
                                                            <input id="remarks" name="remarks" type="text"
                                                                    placeholder="Do you have any remarks?"
                                                                    class="form-control">
                                                        </div> 

                                                        <div class="form-group row margin-top-20">
                                                            <div class="col-lg-11">
                                                                <button class="btn btn-primary layout_btn_prevent" type="submit">Submit</button>
                                                            </div>
                                                        </div>

                                                   
                                                    </div> 

                                                    <ul class="pager wizard pager_a_cursor_pointer margin-top-20">
                                                        <li class="previous">
                                                            <a><i class="fa fa-long-arrow-left"></i>
                                                                Previous</a>
                                                        </li>
                                                        <li class="next">
                                                            <a>Next <i class="fa fa-long-arrow-right"></i>
                                                            </a>
                                                        </li>
                                                        <li class="next finish" style="display:none;">
                                                            <a>Finish</a>
                                                        </li>
                                                    </ul>
                                                </form>
                                            </div>
                                            <div class="tab-pane" id="tab2">
                                                <div class="form-group">
                                                    <label for="name1" class="control-label">First name
                                                        *</label>
                                                    <input id="name1" name="val_first_name"
                                                            placeholder="Enter your First name"
                                                            type="text"
                                                            class="form-control required">
                                                </div>
                                                <div class="form-group">
                                                    <label for="surname1" class="control-label">Last
                                                        name *</label>
                                                    <input id="surname1" name="lname" type="text"
                                                            placeholder=" Enter your Last name"
                                                            class="form-control required">
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Gender</label>
                                                    <select class="custom-select form-control"
                                                            id="gender"
                                                            title="Select an account type...">
                                                        <option>Select</option>
                                                        <option>MALE</option>
                                                        <option>FEMALE</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="address">Address *</label>
                                                    <input id="address" name="val_address" type="text"
                                                            class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="age" class="control-label">Age *</label>
                                                    <input id="age" name="val_age" type="text"
                                                            maxlength="3"
                                                            class="form-control required number">
                                                </div>
                                                <ul class="pager wizard pager_a_cursor_pointer">
                                                    <li class="previous">
                                                        <a><i class="fa fa-long-arrow-left"></i>
                                                            Previous</a>
                                                    </li>
                                                    <li class="next">
                                                        <a>Next <i class="fa fa-long-arrow-right"></i>
                                                        </a>
                                                    </li>
                                                    <li class="next finish" style="display:none;">
                                                        <a>Finish</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane" id="tab3">
                                                <div class="form-group">
                                                    <label>Home number *</label>
                                                    <input type="text" class="form-control" id="phone1"
                                                            name="phone1"
                                                            placeholder="(999)999-9999">
                                                </div>
                                                <div class="form-group">
                                                    <label>Personal number *</label>
                                                    <input type="text" class="form-control" id="phone2"
                                                            name="phone2"
                                                            placeholder="(999)999-9999">
                                                </div>
                                                <div class="form-group">
                                                    <label>Alternate number *</label>
                                                    <input type="text" class="form-control" id="phone3"
                                                            name="phone3"
                                                            placeholder="(999)999-9999">
                                                </div>
                                                <div class="form-group">
                                                    <span>Terms and Conditions *</span>
                                                    <br>
                                                    <label class="custom-control custom-checkbox wizard_label_block">
                                                        <input type="checkbox" id="acceptTerms"
                                                                name="acceptTerms"
                                                                class="custom-control-input">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-description custom_control_description_color">I agree with the Terms and Conditions.</span>
                                                    </label>

                                                </div>
                                                <ul class="pager wizard pager_a_cursor_pointer">
                                                    <li class="previous">
                                                        <a><i class="fa fa-long-arrow-left"></i>
                                                            Previous</a>
                                                    </li>
                                                    <li class="next">
                                                        <a>Next <i class="fa fa-long-arrow-right"></i>
                                                        </a>
                                                    </li>
                                                    <li class="next finish" style="display:none;">
                                                        <a>Finish</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="myModal" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <h4 class="modal-title">Wizard</h4>
                                                    <button type="button" class="close"
                                                            data-dismiss="modal">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>You Submitted Successfully.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default"
                                                            data-dismiss="modal">
                                                        OK
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Table datashow start -->
                        {{--
                        <div class="row">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-header bg-white">
                                            <i class="fa fa-table"> </i> Manage Patient
                                        </div>
                                        <div class="card-body">
                                            <div class="m-t-35">
                                                {{--<button id="del_button" class="btn btn-primary"> Delete Selected Row </button>-- }}
                                                <div class="m-t-25">
                                                    <table id="example_demo" class="table table-hover table-bordered " >
                                                        <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Phone</th>
                                                            <th class="hidden-xs">Age</th>
                                                            <th class="hidden-xs">Sex</th>
                                                            <th class="hidden-xs">Sample Type</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($patients as $patient)
                                                                <tr>
                                                                    <td>{{ $patient->patient_name }}</td> 
                                                                    <td>{{ $patient->phone }}</td> 
                                                                    <td>{{ $patient->age }}</td> 
                                                                    <td>{{ $patient->sex }}</td> 
                                                                    <td>{{ $patient->sample_type_id }}</td> 
                                                                </tr>
                                                            @endforeach
                                                            
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            --}}
                            <!-- Table DataShow End -->
                    </div>
                    <!--main content end-->
                </div>
            </div>
        </div>    
             
        <!-- /.inner -->

    </div>
    <!-- /.outer -->
    <div class="modal fade" id="search_modal" tabindex="-1" role="dialog"
         aria-hidden="true">
        <form>
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="float-right" aria-hidden="true">&times;</span>
                    </button>
                    <div class="input-group search_bar_small">
                        <input type="text" class="form-control" placeholder="Search..." name="search">
                        <span class="input-group-btn">
<button class="btn btn-light" type="submit"><i class="fa fa-search"></i></button>
</span>
                    </div>
                </div>
            </div>
        </form>
    </div>

</div>

@endsection
