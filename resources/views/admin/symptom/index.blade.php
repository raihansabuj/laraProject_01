@extends('layouts.master')
@section('content')
 
  
            <div class="content">
                <div class="row"> 
                <div class="col-md-4">
                        <div class="card">
                            <div class="card-body"><h3>Create Symptom Data</h3></div>
                                <form action="{{ route('admin.symptom.insert')}}" method="POST" class="was-validated">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                    <label for="title">Symptom Name</label>
                                    <input type="text" class="form-control" id="uname" placeholder="Enter Symptom Name" name="title" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                    <div class="form-row"> 
                                        <div class="form-group">
                                        <label for="inputState">Symptom Type</label>
                                        
                                        <select class="form-control" name="symptom_type" required id="sample_type">
                                                <option value="option_select" disabled selected>Choose Type</option>
                                                @foreach($symptomTypes as $symptomType)
                                                    <option value="{{ $symptomType->id }}"  > 
                                                        {{ $symptomType->title}}
                                                    </option>

                                                @endforeach
                                            </select>
                                        </div> 
                                    </div> 
                                    <div class="form-group">
                                    <label for="pwd">Note</label>
                                    <input type="text" class="form-control" id="pwd" placeholder="Enter Short Note" name="description">
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                         
                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body"><h3>List of Symptoms</h3></div>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Symptom</th>
                                    <th scope="col">Symptom Type</th>
                                    <th scope="col">Description</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($symptoms as $symptom)
                                    <tr>
                                        <th scope="row">{{ $symptom->id}}</th>
                                        <td>{{ $symptom->title }}</td>
                                        <td>{{ $symptom->symptom_type }}</td>
                                        <td>{{ $symptom->description }}</td>
                                    </tr>
                                @endforeach
                                
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
       
@endsection