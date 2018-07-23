<div class="be-left-sidebar">
	<div class="left-sidebar-wrapper">
		<a class="left-sidebar-toggle" href="#">UI Cards</a>
		<div class="left-sidebar-spacer">
			<div class="left-sidebar-scroll" id="left-sidebar-scroll">
				<div class="left-sidebar-content">
					<ul class="sidebar-elements">
						<li class="divider">Menu</li>
						<li class="active">
							<a href="{{ route('dashboard.index') }}">
								<i class="icon mdi mdi-apps"></i>
								<span>Applications</span>
							</a>
						</li>
						<li>
							<a href="{{ route('app.new') }}">
								<i class="icon mdi mdi-playlist-plus"></i>
								<span>New App</span>
							</a>
						</li>
						@if(true)
							<li class="divider">Application Management</li>
							<li>
								<a href="#">
									<i class="icon mdi mdi-chart-donut"></i>
									<span>Access Details</span>
								</a>
							</li>
							<li>
								<a href="{{ route('app.manage.domain') }}">
									<i class="icon mdi mdi-chart-donut"></i>
									<span>Domain Management</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="icon mdi mdi-chart-donut"></i>
									<span>Cron Job Management</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="icon mdi mdi-chart-donut"></i>
									<span>SSL Certificate</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="icon mdi mdi-chart-donut"></i>
									<span>Deploy Via Github</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="icon mdi mdi-chart-donut"></i>
									<span>Backup</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="icon mdi mdi-chart-donut"></i>
									<span>Application Settings</span>
								</a>
							</li>
						@endif
						<li class="divider">Account</li>
						<li>
							<a href="#">
								<i class="icon mdi mdi-settings"></i>
								<span>Settings</span>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="icon mdi mdi-lock"></i>
								<span>Password</span>
							</a>
						</li>
						<li>
							<a href="{{ route('dashboard.billing') }}">
								<i class="icon mdi mdi-money-box"></i>
								<span>Billing</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="progress-widget">
			<div class="progress-data"><span class="progress-value">0/10</span><span class="name">Current Project</span></div>
			<div class="progress">
				<div class="progress-bar progress-bar-primary" style="width: 0%;"></div>
			</div>
		</div>
		<hr>
		<div class="card-footer card-footer-contrast text-muted text-center">
			© {{ date('Y') }} Laravel Space Ltd, <br/>All rights reserved
		</div>
		<br>
	</div>
</div>