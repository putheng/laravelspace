@extends('dashboard.layout')

@section('content')
<div class="page-head no-padding">
	<h2 class="page-head-title">Your application name</h2>
	<nav aria-label="breadcrumb" role="navigation">
		<ol class="breadcrumb page-head-nav">
			<li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
			<li class="breadcrumb-item"><a href="{{ route('app.lists') }}">Applications</a></li>
		</ol>
	</nav>
</div>
<br>
<div class="row">
	<div class="col-12 col-lg-12">
		<div class="card">
			<div class="tab-container">
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active show text-uppercase" href="#primary" data-toggle="tab" role="tab" aria-selected="false">
							password management
						</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active show" id="primary" role="tabpanel">
						<h4>Update your password</h4>
						<br>
						<div class="row">
							<div class="col-md-4">

								<div class="form-group pt-2">
									<label for="inputCPassword">Current password</label>
									<input class="form-control form-control-sm" id="inputCPassword" type="password">
								</div>

								<div class="form-group">
									<label for="inputNPassword">New password</label>
									<input class="form-control form-control-sm" id="inputNPassword" type="password">
								</div>

								<div class="form-group">
									<label for="inputNPasswordA">New password again</label>
									<input class="form-control form-control-sm is-invalid" id="inputNPasswordA" type="password">
									
									<p class="text-danger">Error here</p>
									
								</div>

								<input type="submit" class="btn btn-primary" value="Update">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
