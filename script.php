<script type="text/javascript">
    $('#provinces').change(function() {
        var id_province = $(this).val();
        $.ajax({
            type: "post",
            url: "ajax.php",
            data: {provinces_id:id_province,function:'provinces'},
            success: function(data) {
                $('#districts').html(data)
                $('#subdistricts').html('')
                $('#zipcode').val('')
            }
        });
    });
    $('#districts').change(function() {
        var id_district = $(this).val();
        $.ajax({
            type: "post",
            url: "ajax.php",
            data: {district_id:id_district,function:'districts'},
            success: function(data) {
                $('#subdistricts').html(data)
                $('#zipcode').val('')
            }
        });
    });
    $('#subdistricts').change(function() {
        var id_subdistrict = $(this).val();
        $.ajax({
            type: "post",
            url: "ajax.php",
            data: {subdistrict_id:id_subdistrict,function:'subdistricts'},
            success: function(data) {
                $('#zipcode').val(data)
            }
        });
    });

</script>