<script>
    var table = $('#main_table').DataTable({
        'paging':true
    });

    $('#search').on( 'keyup', function () {
        table.search($(this).val()).draw();
    } );


</script>