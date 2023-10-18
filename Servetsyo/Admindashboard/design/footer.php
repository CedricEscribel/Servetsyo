<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<!-- Datatable script -->
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>


<script>
    $(document).on('click', '#btnStatus', function(e) {
        e.preventDefault();
        var id = event.target.value;

        Swal.fire({
            title: 'Do you want to approve the request?',
            showDenyButton: true,
            showCancelButton: true,
            allowOutsideClick: false,
            confirmButtonText: 'Approve',
            denyButtonText: `Decline`,
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {

                $('#' + id + 'hiddenStatus').val('Approve');
                setTimeout(() => {
                    $('#' + id).trigger('click');
                }, 1500)
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'The request is approved!',
                    showConfirmButton: false,
                    timer: 1500
                })
            } else if (result.isDenied) {
                $('#' + id + 'hiddenStatus').val('Decline');
                setTimeout(() => {
                    $('#' + id).trigger('click');
                }, 1500)
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'The request is declined!',
                    showConfirmButton: false,
                    timer: 1500
                })
            }
        })
    });
</script>


<script>
    $(document).on('click', '#dog_status', function(e) {
        e.preventDefault();
        var id = event.target.value;

        Swal.fire({
            title: 'Do you want to update the status?',
            showDenyButton: true,
            showCancelButton: true,
            allowOutsideClick: false,
            confirmButtonText: 'Adoption',
            denyButtonText: `Claimed`,
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {

                $('#' + id + 'hiddenStatus').val('Adoption');
                setTimeout(() => {
                    $('#' + id).trigger('click');
                }, 1500)
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'The animal is already posted for adoption.',
                    showConfirmButton: false,
                    timer: 1500
                })
            } else if (result.isDenied) {
                $('#' + id + 'hiddenStatus').val('Claimed');
                setTimeout(() => {
                    $('#' + id).trigger('click');
                }, 1500)
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'The animal is already claimed',
                    showConfirmButton: false,
                    timer: 1500
                })
            }
        })
    });
</script>

<script>
    $(document).on('click', '#Adopted', function(e) {
        e.preventDefault();
        var id = event.target.value;

        Swal.fire({
            title: 'Update status to adopted?',
            text: "You won't be able to revert this.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Update Status'
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                $('#' + id + 'UpdateStatus').val('Adopted');
                setTimeout(() => {
                    $('#' + id).trigger('click');
                }, 1500)
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully updated!',
                    showConfirmButton: false,
                    timer: 1500
                })
            } else if (result.isDenied) {

            }
        })
    });

    $(document).on('click', '#Euthanized', function(e) {
        e.preventDefault();
        var id = event.target.value;

        Swal.fire({
            title: 'Update status to euthanized?',
            text: "You won't be able to revert this.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Update Status'
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                $('#' + id + 'UpdateStatus').val('Euthanized');
                setTimeout(() => {
                    $('#' + id).trigger('click');
                }, 1500)
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully updated!',
                    showConfirmButton: false,
                    timer: 1500
                })
            } else if (result.isDenied) {

            }
        })
    });
</script>