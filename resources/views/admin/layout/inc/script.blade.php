<script src="{{ asset('assets') }}/js/vendor/jquery-3.5.1.min.js"></script>
<script src="{{ asset('assets') }}/js/vendor/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets') }}/js/vendor/OverlayScrollbars.min.js"></script>



<!-- Template Base Scripts Start -->
<script src="{{ asset('assets') }}/font/CS-Line/csicons.min.js"></script>
<script src="{{ asset('assets') }}/js/base/helpers.js"></script>
<script src="{{ asset('assets') }}/js/base/globals.js"></script>
<script src="{{ asset('assets') }}/js/base/nav.js"></script>
<script src="{{ asset('assets') }}/js/base/search.js"></script>
<script src="{{ asset('assets') }}/js/base/settings.js"></script>
<script src="{{ asset('assets') }}/js/base/init.js"></script>
<!-- Template Base Scripts End -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="{{ asset('assets') }}/plugins/src/table/datatable/datatables.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js" integrity="sha512-bztGAvCE/3+a1Oh0gUro7BHukf6v7zpzrAb3ReWAVrt+bVNNphcl2tDTKCBr5zk7iEDmQ2Bv401fX3jeVXGIcA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(document).ready(function() {
        $('.dataTable').DataTable();
    });
</script>
<script>
    $('.delete-confirm').click(function(event) {
        var form = $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        swal({
                title: `Are you sure you want to delete this?`,
                text: "If you delete this, it will be gone forever.",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    form.submit();
                }
            });
    });
</script>
<script>
    $('.select2').select2();
</script>
<script>
    $(".alert").delay(4000).slideUp(500, function() {
        $(this).alert('close');
    });
</script>


