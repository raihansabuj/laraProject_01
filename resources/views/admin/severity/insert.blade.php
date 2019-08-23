@extends('layouts.master')
@section('content')
 
  
            <div class="content">
                <div class="title m-b-md">
                    Insert Symptom Data
                </div>

                <div class="card">
                    <div class="card-body">Create Symptom Data</div>
                    <form action="{{ route('admin.symptom.store')}}" class="was-validated">
                        {{ csrf_field() }}
                        <div class="form-group">
                          <label for="title">Symptom Name</label>
                          <input type="text" class="form-control" id="uname" placeholder="Enter Symptom Name" name="uname" required>
                          <div class="valid-feedback">Valid.</div>
                          <div class="invalid-feedback">Please fill out this field.</div>
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
                <!--
                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            -->
            <div class="card">
                <div class="card-body">Create Symptom Data</div>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Symptom</th>
                        <th scope="col">Tymptom Type</th>
                        <th scope="col">Description</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($collection as $item)
                        <tr>
                            <th scope="row">{{ $item->id}}</th>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->symptom_type }}</td>
                            <td>{{ $item->description }}</td>
                        </tr>
                    @endforeach
                     
                    </tbody>
                </table>
            </div>
        </div>
       
@endsection