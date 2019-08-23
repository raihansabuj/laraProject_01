@extends('layouts.master')
@section('content')
 
  
<div class="content">
    <div class="row"> 
        <div class="col-md-4">  
            <div class="card">
                {{--
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif 
                --}}
                <div class="card-body"><h3>Create Patient</h3></div>
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>
                                        {{ $error }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('admin.patient.insert')}}" method="POST" class="was-validated"  enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-row">
                                <label for="patient_name">Patient Name</label>
                                <input type="text" class="form-control" id="patient_name" placeholder="Patient Name" name="patient_name" required>
                        </div> 
                        <div class="form-row">
                                <label for="phone">Phone Number</label>
                                <input type="text" class="form-control" id="phone" placeholder="Patient Phone Number" name="phone" required>
                        </div> 
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="age">Age</label>
                                <input type="text" class="form-control" id="age" placeholder="Patient Age" name="age" required>
                                
                            </div>
                            <div class="col-md-6">
                                <label for="age">Sex</label>
                                <select class="form-control" name="sex"  id="sex" required>
                                     <option value="" disabled selected>Choose a Sex</option> 
                                        <option value="1">Male</option>
                                        <option value="2" >Female</option>
                                        <option value="3" >Third Gender</option>
                                 </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4">
                                <label for="age">State</label>
                                <select class="form-control" name="state"  id="state" required>
                                    <option value="option_select" disabled >Choose a Division</option> 
                                    <option value="1" selected>Dhaka Division</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="age">District</label>
                                <select class="form-control" name="district"  id="district" required>
                                    <option value="option_select" disabled >Choose a District</option> 
                                    <option value="1" selected>Dhaka</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="age">Thana/Upazila</label>
                                <select class="form-control" name="area"  id="area" required>
                                    <option value="option_select" disabled >Upazila</option> 
                                    <option value="1" selected>Savar</option>
                                </select>
                            </div>
                            {{-- Hidden Field--}}
                            <input type="hidden" class="form-control" id="status" value="1" name="status" required>

                        </div>
                        <div class="form-row"> 
                            <label for="sample_type_id">Test Sample Type</label>
                            <select class="form-control" name="sample_type_id" required id="sample_type_id">
                                <option value="option_select" disabled selected>Choose a Test Sample</option>
                                @foreach($sampleTypes as $sample)
                                    <option value="{{ $sample->id }}"  > 
                                        {{ $sample->title}}
                                    </option>

                                @endforeach
                            </select>
                        </div> 
                        <div class="form-row">
                            <label for="remarks">Remarks</label>
                            <input type="text" class="form-control" id="remarks" name="remarks" placeholder="Short Note or Remarks">
                        </div>
                        <div class="form-row" style="margin-bottom:0">
                            <input type="file" class="custom-file-input" id="customFile" name="fingure_print">
                             {{--
                            @if (auth()->user()->image)
                                <code>{{ auth()->user()->image }}</code>
                            @endif
                            --}}
                            <label class="custom-file-label" for="customFile" style="position: relative; width: 100%;">Upload Fingure Print</label>
                        </div> 
                        <script>
                        // Add the following code if you want the name of the file appear on select
                        $(".custom-file-input").on("change", function() {
                            var fileName = $(this).val().split("\\").pop();
                            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                        });
                        </script>
                        {{--
                        <div class="form-row"> 
                            <div class="form-group">
                                <label for="inputState">Symptoms</label>
                                <select class="form-control" name="symptom_id" required id="sample_type">
                                        <option value="option_select" disabled selected>Choose a Symptom</option>
                                        @foreach($symptoms as $symptom)
                                            <option value="{{ $symptom->id }}"  > 
                                                {{ $symptom->title}}
                                            </option>

                                        @endforeach
                                </select>
                            </div> 
                        </div>
                        --}}
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </form>
                </div>
                
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-white">
                    <i class="fa fa-table"> </i> Manage Patient {{-- ID IS {{ $insertedId }} --}}
                </div>
                <div class="card-body">
                    <div class="m-t-35">
                        {{--<button id="del_button" class="btn btn-primary"> Delete Selected Row </button> --}}
                        <div class="m-t-25">
                            <table id="example_demo" class="table table-hover table-bordered " >
                                <thead>
                                <tr>
                                    <th>Patient ID</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th class="hidden-xs">Age</th>
                                    <th class="hidden-xs">Sex</th>
                                    <th class="hidden-xs">Sample Type</th>
                                    <th class="hidden-xs">Assesment</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($patients as $patient)
                                        <tr>
                                            {{-- Year:  and Year is {{ $patient->created_at->format('y') }} --}}
                                            <td>{{ $patient->parent_id_code }}</td> 
                                            <td>{{ $patient->patient_name }}</td> 
                                            <td>{{ $patient->phone }}</td> 
                                            <td>{{ $patient->age }}</td> 
                                            <td>
                                                @if ($patient->sex === 1)
                                                    Male
                                                @elseif  ($patient->sex === 2)
                                                    Female
                                                @else
                                                    Third Gender
                                                @endif
                                            </td> 
                                            <td>{{ $patient->sample_type_id }}</td> 
                                            <td>
                                                
                                                <button type="button" class="btn btn-info">Take Assesment</button>
                                            </td>
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
<div class="row">.</div>



@endsection