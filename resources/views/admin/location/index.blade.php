@extends('layouts.master')
@section('content')
 
  
            <div class="content">
                <div class="row"> 
                <div class="col-md-4">
                        <div class="card">
                            <div class="card-body"><h3>Create Location for Symptom</h3></div>
                                <form action="{{ route('admin.location.insert')}}" method="POST" class="was-validated">
                                    {{ csrf_field() }}
                                    <div class="form-row">
                                            <label for="title">Location Title</label>
                                            <input type="text" class="form-control" id="title" placeholder="Severity Title" name="title" required>
                                    </div> 
                                    <div class="form-row">
                                        <label for="note">Note</label>
                                        <input type="text" class="form-control" id="description" name="note" placeholder="Short Note">
                                    </div>
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
                                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                </form>
                            </div>
                         
                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body"><h3>List of Location</h3></div>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">Symptom </th>
                                    <th scope="col">Note</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($location as $data)
                                    <tr>
                                        <th scope="row">{{ $data->id}}</th>
                                        <td>{{ $data->title }}</td>
                                        <td>{{ App\Symptom::getSymptomTitle($data->symptom_id) }}</td>
                                        <td>{{ $data->note }}</td>
                                    </tr>
                                @endforeach
                                
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
       
@endsection