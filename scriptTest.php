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

    $('#enddate').change(function() {
        var id_startdate = $('#startdate').val();
        var id_enddate = $(this).val();
        console.log(id_startdate)
        console.log(id_enddate)
        $.ajax({
            type: "post",
            url: "ajaxTest.php",
            data: {
                startdate_id: id_startdate, // แก้ชื่อตัวแปรให้เป็น startdate_id
                enddate_id: id_enddate,
                function: 'enddate'
            },
            success: function(data) {
                $('#testdiv').html(data)
            }
        });
    });
</script>