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
							Application settings
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-uppercase" href="#config" data-toggle="tab" role="tab" aria-selected="true">
							environments
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-uppercase" href="#upgrade" data-toggle="tab" role="tab" aria-selected="true">
							upgrade
						</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active show" id="primary" role="tabpanel">
						<h4>Configure several application specific settings for your web app.</h4>

						<div class="row">
							<div class="col-md-4">
								<div class="form-group pt-2">
									<label for="Webroot">Webroot</label>
									<input class="form-control" id="Webroot" type="email" placeholder="/public">
								</div>
								<div class="form-group pt-2">
									<label for="php">PHP Version</label>
									<select name="php_version" class="form-control">
										<option value="6.5">6.5</option>
										<option value="7.0">7.0</option>
										<option value="7.2">7.2</option>
									</select>
								</div>


								<input type="submit" class="btn btn-primary" value="Save change">
							</div>
						</div>
					</div>

					<div class="tab-pane" id="config" role="tabpanel">
						<h4>Config app environments</h4>
						<br><br>
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<input class="form-control form-control-sm" type="text" name="key" placeholder="KEY">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<input class="form-control form-control-sm" type="text" name="key" placeholder="VALUE">
								</div>
							</div>
							<div class="col-md-1">
								<input type="submit" value="ADD" class="btn btn-primary">
							</div>
						</div>
					</div>

					<div class="tab-pane" id="upgrade" role="tabpanel">
						<h4>Select a plan</h4>
						<p>Select a plan to upgrade your application.</p>
						<div class="row pricing-tables">
							<div class="col-lg-3">
								<div class="pricing-table pricing-table-primary">
									
									<div class="pricing-table-title">Free</div>
									<div class="card-divider card-divider-xl"></div>
									<div class="pricing-table-price">
										<span class="currency">$</span>
										<span class="value">0</span>
										<span class="frecuency">/mo</span>
									</div>
									<ul class="pricing-table-features">
										<li>100 MB Space</li>
										<li>10,000 MySql row</li>
									</ul>
									<button class="btn btn-info">Select</button>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="pricing-table pricing-table-warning">
									
									<div class="pricing-table-title">Starter</div>
									<div class="card-divider card-divider-xl"></div>
									<div class="pricing-table-price">
										<span class="currency">$</span>
										<span class="value">1.<small>00</small></span>
										<span class="frecuency">/mo</span>
									</div>
									<ul class="pricing-table-features">
										<li>1 GB Space</li>
										<li>200,000 MySql row</li>
										<li>Custom domain</li>
										<li>Custom SSL</li>
									</ul>
									<button class="btn btn-info">Select</button>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="pricing-table pricing-table-success">
									
									<div class="pricing-table-title">Developer</div>
									<div class="card-divider card-divider-xl"></div>
									<div class="pricing-table-price">
										<span class="currency">$</span>
										<span class="value">3.<small>99</small></span>
										<span class="frecuency">/mo</span>
									</div>
									<ul class="pricing-table-features">
										<li>5 GB space</li>
										<li>Unlimited MySql</li>
										<li>Custom domain</li>
										<li>Custom SSL</li>
									</ul>
									<button class="btn btn-info">Select</button>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="pricing-table pricing-table-danger">
									
									<div class="pricing-table-title">Business</div>
									<div class="card-divider card-divider-xl"></div>
									<div class="pricing-table-price">
										<span class="currency">$</span>
										<span class="value">7.<small>99</small></span>
										<span class="frecuency">/mo</span>
									</div>
									<ul class="pricing-table-features">
										<li>10 GB space</li>
										<li>Unlimited MySql</li>
										<li>Custom domain</li>
										<li>Custom SSL</li>
									</ul>
									<button class="btn btn-info">Select</button>
								</div>
							</div>
						</div>
						
						<input type="submit" value="Upgrade" class="btn btn-success btn-lg">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
