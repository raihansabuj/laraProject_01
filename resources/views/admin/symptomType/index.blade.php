@extends('layouts.master')
@section('content')
 
  
            <div class="content">
                <div class="row"> 
                <div class="col-md-4">
                        <div class="card">
                            <div class="card-body"><h3>Create Symptom Type</h3></div>
                                <form action="{{ route('admin.symptomType.insert')}}" method="POST" class="was-validated">
                                    {{ csrf_field() }}
                                    <div class="form-row">
                                            <label for="title">Sample Type Name</label>
                                            <input type="text" class="form-control" id="title" placeholder="Sample Type Name" name="title" required>
                                    </div> 
                                    <div class="form-row">
                                        <label for="description">Description</label>
                                        <input type="text" class="form-control" id="description" name="description" placeholder="Description">
                                    </div>
                                    <div class="form-row"> 
                                            <div class="form-group">
                                            <label for="inputState">Symptom Type</label>
                                            <select class="form-control" name="sample_type" required id="sample_type">
                                                    <option value="option_select" disabled selected>Choose Type</option>
                                                    @foreach($symptomTypes as $symptomType)
                                                        <option value="{{ $symptomType->id }}"  > 
                                                            {{ $symptomType->title}}
                                                        </option>
    
                                                    @endforeach
                                                </select>
                                            </div> 
                                        </div>
                                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                </form>
                            </div>
                         
                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body"><h3>List of Symptom Type</h3></div>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Symptom Type</th>
                                    <th scope="col">Parent </th>
                                    <th scope="col">Description</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($symptomTypes as $symptomType)
                                    <tr>
                                        <th scope="row">{{ $symptomType->id}}</th>
                                        <td>{{ $symptomType->title }}</td>
                                        <td>{{ $symptomType->parent_id }}</td>
                                        <td>{{ $symptomType->description }}</td>
                                    </tr>
                                @endforeach
                                
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
       
@endsection