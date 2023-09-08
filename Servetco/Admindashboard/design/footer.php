<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

<!-- axios script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.5/axios.min.js" integrity="sha512-nnNHpffPSgINrsR8ZAIgFUIMexORL5tPwsfktOTxVYSv+AUAILuFYWES8IHl+hhIhpFGlKvWFiz9ZEusrPcSBQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">
		$(document).ready(function() {

			// const swalWithBootstrapButtons = Swal.mixin({
			// 	customClass: {
			// 		confirmButton: "btn btn-success mx-1",
			// 		cancelButton: "btn btn-danger",
			// 	},
			// 	buttonsStyling: false,
			// });

			$(document).on('click', '#btnStatus', function(e) {
				e.preventDefault();
				var id = event.target.value;


				Swal.fire({
					title: 'Do you want to approve the request?',
					showDenyButton: true,
					showCancelButton: true,
					confirmButtonText: 'Approve',
					denyButtonText: `Decline`,
				}).then((result) => {
					/* Read more about isConfirmed, isDenied below */
					if (result.isConfirmed) {
						$('#'+id +'hiddenStatus').val('Approve');
						setTimeout(() => {
							$('#' + id).trigger('click');
						}, 500)


					} else if (result.isDenied) {
						$('#'+id +'hiddenStatus').val('Decline');
						setTimeout(() => {
							$('#' + id).trigger('click');
						}, 500)
					}
				})
			});



		});
	</script>