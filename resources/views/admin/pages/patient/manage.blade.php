@extends('admin.layouts.master')
@section('content')

<header class="head">
    <div class="main-bar">
       <div class="row no-gutters">
           <div class="col-sm-5 col-lg-6 skin_txt">
               <h4 class="nav_top_align">
                   <i class="fa fa-pencil"></i>
                   Patient Management
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
                   <li class="active breadcrumb-item">Manage</li>
               </ol>
           </div>
       </div>
    </div>
</header>
<div class="outer">
    <div class="inner bg-container forms">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-white">
                        <i class="fa fa-table"> </i> Manage Patient
                    </div>
                    <div class="card-body">
                        <div class="m-t-35">
                            <button id="del_button" class="btn btn-primary"> Delete Selected Row </button>
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
 

    </div>
    <!-- /.outer -->
    

</div>

@endsection
