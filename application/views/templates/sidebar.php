		<!-- Sidebar -->
		<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= site_url(); ?>">
				<div class="sidebar-brand-icon rotate-n-15">
					<i class="fas fa-id-card-alt"></i>
				</div>
				<div class="sidebar-brand-text mx-3">MyResume Zoelva</div>
			</a>

			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Heading -->
			<div class="sidebar-heading">
				Main Navigation
			</div>

			<!-- Nav Item - Homepages -->
			<li class="nav-item">
				<a class="nav-link pb-0" href="<?= site_url('home'); ?>">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Home</span>
				</a>
				<a class="nav-link pb-0" href="<?= site_url(''); ?>" target="_blank">
					<i class="fas fa-fw fa-file-image"></i>
					<span>Buka MyResume</span>
				</a>
				<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					<i class="fas fa-fw fa-users"></i>
					<span>Biodata</span>
				</a>
				<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<a class="collapse-item" href="<?= site_url('home/add_biodata'); ?>">Tambah Biodata</a>
						<a class="collapse-item" href="<?= site_url('home/view_biodata'); ?>">Table Biodata</a>
					</div>
				</div>
				<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
					<i class="fas fa-fw fa-address-card"></i>
					<span>Portfolio</span>
				</a>
				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<a class="collapse-item" href="<?= site_url('home/add_portfolio'); ?>">Tambah Portfolio</a>
						<a class="collapse-item" href="<?= site_url('home/view_portfolio'); ?>">Table Portfolio</a>
					</div>
				</div>
			</li>

			<!-- Nav Item - Logout -->
			<li class="nav-item">
				<a class="nav-link pb-0" href="<?= site_url('logout'); ?>" data-toggle="modal" data-target="#logoutModal">
					<i class="fas fa-fw fa-sign-out-alt"></i>
					<span>Logout</span>
				</a>
			</li>

			<br>
			<!-- Divider -->
			<hr class="sidebar-divider d-none d-md-block">

			<!-- Sidebar Toggler (Sidebar) -->
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>

		</ul>
		<!-- End of Sidebar -->