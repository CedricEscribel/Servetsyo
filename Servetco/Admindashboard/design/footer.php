<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<!-- Datatable script -->
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

<script>
	$(document).on('click', '#btnStatus', function(e) {
		e.preventDefault();
		var id = event.target.value;

		Swal.fire({
			title: 'Do you want to approve the request?',
			showDenyButton: true,
			showCancelButton: true,
			allowOutsideClick: false,
			confirmButtonText: 'adoption',
			denyButtonText: `pound`,
		}).then((result) => {
			/* Read more about isConfirmed, isDenied below */
			if (result.isConfirmed) {

				$('#' + id + 'hiddenStatus').val('adoption');
				setTimeout(() => {
					$('#' + id).trigger('click');
				}, 1200)
					Swal.fire('Approved!', '', 'success')
			} else if (result.isDenied) {
				$('#' + id + 'hiddenStatus').val('pound');
				setTimeout(() => {
					$('#' + id).trigger('click');
				}, 1200)
				Swal.fire('pound', '', 'success')
			}
		})
	});
</script>