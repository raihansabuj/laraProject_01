
<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
			  <a class="navbar-brand brand" href="#">Digi<span class="red">Doc</span></a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto">
			      <li class="nav-item active">
			        <a class="nav-link" href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Registration</a>
			      </li>
			      <li class="nav-item">
 			        <a class="nav-link" href="{{ route('login') }}">Login</a>
			      </li>
			      <li class="nav-item">
 			        <a class="nav-link" href="{{ route('admin.patient.index') }}">Patient Management</a>
			      </li>
			      
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Administration
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="nav-link" href="{{ route('admin.symptom.index') }}">Add Symptoms</a>
							<a class="nav-link" href="{{ route('admin.symptomType.index') }}">Add Symptom Type</a>
							<a class="nav-link" href="{{ route('admin.severity.index') }}">Add Symptom Severity</a>
							<a class="nav-link" href="{{ route('admin.frequency.index') }}">Add Symptom Frequency</a>
							<a class="nav-link" href="{{ route('admin.duration.index') }}">Add Symptom Duration</a>
							<a class="nav-link" href="{{ route('admin.location.index') }}">Add Symptom Location</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</li>
				  <!--
					 <li class="nav-item">
 			        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
			      </li>
			      <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          Dropdown
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="#">Action</a>
			          <a class="dropdown-item" href="#">Another action</a>
			          <div class="dropdown-divider"></div>
			          <a class="dropdown-item" href="#">Something else here</a>
			        </div>
			      </li>

			      <li class="nav-item">
			        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
			      </li>
			 	 	-->
			    </ul>
			    <form class="form-inline my-2 my-lg-0">
			      {{--
			      	<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      			    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  			      --}}
  			      	<div class="input-group mb-3">
					  	<input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
					  	<div class="input-group-append">
					    	<button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
					  	</div>
					</div>
			    </form>
			  </div>
		  	</div>	
		</nav>