			<!-- Footer -->
			<footer class="sticky-footer bg-white">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<span>Copyright &copy; Simple Login 2019</span>
					</div>
				</div>
			</footer>
			<!-- End of Footer -->

			</div>
			<!-- End of Content Wrapper -->

			</div>
			<!-- End of Page Wrapper -->

			<!-- Scroll to Top Button-->
			<a class="scroll-to-top rounded" href="#page-top">
				<i class="fas fa-angle-up"></i>
			</a>

			<!-- Logout Modal-->
			<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Apakah anda ingin keluar?</h5>
							<button class="close" type="button" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">Klik Logout jika anda ingin keluar dan kembali ke Halaman Resume.</div>
						<div class="modal-footer">
							<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
							<a class="btn btn-primary" href="<?= site_url('logout'); ?>">Logout</a>
						</div>
					</div>
				</div>
			</div>

			<script src="<?= base_url(); ?>assets/js/sweetalert2.all.min.js"></script>
			<script src="<?= base_url(); ?>assets/js/myscript.js"></script>

			<!-- Bootstrap core JavaScript-->
			<script src="<?= site_url('public/vendor/jquery/jquery.min.js'); ?>"></script>
			<script src="<?= site_url('public/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

			<!-- Core plugin JavaScript-->
			<script src="<?= site_url('public/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

			<!-- Custom scripts for all pages-->
			<script src="<?= site_url('public/js/sb-admin-2.min.js'); ?>"></script>

			<!-- Page level plugins -->
			<script src="<?= site_url('public/vendor/datatables/jquery.dataTables.min.js'); ?>"></script>
			<script src="<?= site_url('public/vendor/datatables/dataTables.bootstrap4.min.js'); ?>"></script>

			<!-- Page level custom scripts -->
			<script src="<?= site_url('public/js/demo/datatables-demo.js'); ?>"></script>

			</body>

			</html>