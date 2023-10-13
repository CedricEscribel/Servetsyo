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
                }, 1200)
                Swal.fire('Approved!', '', 'success')
            } else if (result.isDenied) {
                $('#' + id + 'hiddenStatus').val('Decline');
                setTimeout(() => {
                    $('#' + id).trigger('click');
                }, 1200)
                Swal.fire('Decline', '', 'success')
            }
        })
    });
</script>


<script>
    $(document).on('click', '#dog_status', function(e) {
        e.preventDefault();
        var id = event.target.value;

        Swal.fire({
            title: 'Do you want to approve the request?',
            showDenyButton: true,
            showCancelButton: true,
            allowOutsideClick: false,
            confirmButtonText: 'adoption',
            denyButtonText: `claimed`,
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {

                $('#' + id + 'hiddenStatus').val('adoption');
                setTimeout(() => {
                    $('#' + id).trigger('click');
                }, 1200)
                Swal.fire('Approved!', '', 'success')
            } else if (result.isDenied) {
                $('#' + id + 'hiddenStatus').val('claimed');
                setTimeout(() => {
                    $('#' + id).trigger('click');
                }, 1200)
                Swal.fire('Claimed', '', 'success')
            }
        })
    });
</script>

<script>
    $(document).on('click', '#Adopted', function(e) {
        e.preventDefault();
        var id = event.target.value;

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Update Status!'
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                $('#' + id + 'UpdateStatus').val('adopted');
                setTimeout(() => {
                    $('#' + id).trigger('click');
                }, 1200)
                Swal.fire('Approved!', '', 'success')
            } else if (result.isDenied) {

            }
        })
    });
</script>

<script>
    $(document).on('click', '#Adopted', function(e) {
        e.preventDefault();
        var id = event.target.value;

        Swal.fire({
            title: 'Update status to adopted',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Update Status!'
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                $('#' + id + 'UpdateStatus').val('adopted');
                setTimeout(() => {
                    $('#' + id).trigger('click');
                }, 1200)
                Swal.fire('Successfully!', '', 'success')
            } else if (result.isDenied) {

            }
        })
    });

    $(document).on('click', '#Euthanized', function(e) {
        e.preventDefault();
        var id = event.target.value;

        Swal.fire({
            title: 'Update status to euthanized',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Update Status!'
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                $('#' + id + 'UpdateStatus').val('Euthanized');
                setTimeout(() => {
                    $('#' + id).trigger('click');
                }, 1200)
                Swal.fire('Successfully!', '', 'success')
            } else if (result.isDenied) {

            }
        })
    });
</script>