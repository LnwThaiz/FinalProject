<script type="text/javascript">
    // testdate
    $('#startdate').change(function() {
        var id_startdate = $(this).val();

        var studentData = {
            "STD_ID": <?php echo json_encode($_SESSION["STD_ID"]); ?>,
            "STD_Name": <?php echo json_encode($_SESSION["STD_Name"]); ?>,
            "STD_Lastname": <?php echo json_encode($_SESSION["STD_Lastname"]); ?>,
            "STD_Birth": <?php echo json_encode($_SESSION["STD_Birth"]); ?>,
            "STD_Phone": <?php echo json_encode($_SESSION["STD_Phone"]); ?>,
            "Classlev_ID": <?php echo json_encode($_SESSION["Classlev_ID"]); ?>,
            "Major_ID": <?php echo json_encode($_SESSION["Major_ID"]); ?>,
            "Parent_Name": <?php echo json_encode($_SESSION["Parent_Name"]); ?>,
            "STD_Address": <?php echo json_encode($_SESSION["STD_Address"]); ?>,
            "Group_ID": <?php echo json_encode($_SESSION["Group_ID"]); ?>,
            "Provinces_ID": <?php echo json_encode($_SESSION["provinces_id"]); ?>,
            "District_ID": <?php echo json_encode($_SESSION["district_id"]); ?>,
            "SubDistrict_ID": <?php echo json_encode($_SESSION["subdistrict_id"]); ?>,

        };

        var studentDataJSON = JSON.stringify(studentData);

        $.ajax({
            type: "post",
            url: "ajaxTest.php",
            data: {
                startdate_id: id_startdate,
                studentData: studentDataJSON,
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

        var studentData = {
            "STD_ID": <?php echo json_encode($_SESSION["STD_ID"]); ?>,
            "STD_Name": <?php echo json_encode($_SESSION["STD_Name"]); ?>,
            "STD_Lastname": <?php echo json_encode($_SESSION["STD_Lastname"]); ?>,
            "STD_Birth": <?php echo json_encode($_SESSION["STD_Birth"]); ?>,
            "STD_Phone": <?php echo json_encode($_SESSION["STD_Phone"]); ?>,
            "Classlev_ID": <?php echo json_encode($_SESSION["Classlev_ID"]); ?>,
            "Major_ID": <?php echo json_encode($_SESSION["Major_ID"]); ?>,
            "Parent_Name": <?php echo json_encode($_SESSION["Parent_Name"]); ?>,
            "STD_Address": <?php echo json_encode($_SESSION["STD_Address"]); ?>,
            "Group_ID": <?php echo json_encode($_SESSION["Group_ID"]); ?>,
            "Provinces_ID": <?php echo json_encode($_SESSION["provinces_id"]); ?>,
            "District_ID": <?php echo json_encode($_SESSION["district_id"]); ?>,
            "SubDistrict_ID": <?php echo json_encode($_SESSION["subdistrict_id"]); ?>,

        };

        var studentDataJSON = JSON.stringify(studentData);

        $.ajax({
            type: "post",
            url: "ajaxTest.php",
            data: {
                startdate_id: id_startdate, // แก้ชื่อตัวแปรให้เป็น startdate_id
                enddate_id: id_enddate,
                studentData: studentDataJSON,
                function: 'enddate'
            },
            success: function(data) {
                $('#testdiv').html(data)
            }
        });
    });
</script>