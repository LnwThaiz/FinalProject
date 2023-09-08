<script type="text/javascript">
    // testdate
    $('#startdate').change(function() {
        var id_startdate = $(this).val();
        $.ajax({
            type: "post",
            url: "ajaxTest.php",
            data: {
                startdate_id: id_startdate,
                function: 'startdate'
            },
            success: function(data) {
                $('#testdiv').html(data)
            }
        });
    });
</script>