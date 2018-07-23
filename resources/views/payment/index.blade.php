@extends('dashboard.layout')

@section('content')
<div class="page-head no-padding">
	<h2 class="page-head-title">Your payment subscription</h2>
	<nav aria-label="breadcrumb" role="navigation">
		<ol class="breadcrumb page-head-nav">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item"><a href="#">UI Elements</a></li>
			<li class="breadcrumb-item active">Tabs &amp; Accordions</li>
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
						<a class="nav-link active show" href="#Invoices" data-toggle="tab" role="tab" aria-selected="false">
							Invoices
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#Transactions" data-toggle="tab" role="tab" aria-selected="true">
							Transactions
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#Details" data-toggle="tab" role="tab">
							Billing Details
						</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active show" id="Invoices" role="tabpanel">
						<h4>Top Tabs</h4>
						<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porta lacus ipsum, tempus consequat turpis auctor sit amet. Pellentesque porta mollis nisi, pulvinar convallis tellus tristique nec.</p>
						<p> Nam aliquet consequat quam sit amet dignissim. Quisque vel massa est. Donec dictum nisl dolor, ac malesuada tellus efficitur non. Pellentesque pellentesque odio neque, eget imperdiet eros vehicula lacinia.</p>
					</div>
					<div class="tab-pane" id="Transactions" role="tabpanel">
						<div class="row">
							<div class="col-md-10">
								<div class="card card-table">
									
									<div class="card-body">
										<table class="table">
											<thead>
												<tr>
													<th>Identifier</th>
													<th>Date</th>
													<th class="number">Amount</th>
													<th class="number">Status</th>
													<th class="actions">Type</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Penelope Thornton</td>
													<td>23/06/2018</td>
													<td class="number">60%</td>
													<td class="number">639</td>
													<td class="actions"><a class="icon" href="#"><i class="mdi mdi-delete"></i></a></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="Details" role="tabpanel">
						<div class="row">
							<div class="col-md-10">
								<p>Add your full business name, VAT number, or billing address here. This information will appear on all your invoices. <br>For your security, do not include any confidential or financial information (like credit card numbers).</p>
								<textarea class="form-control"></textarea>
								<br>
								<input type="submit" value="Update" class="btn btn-success">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
