<?php

require('functions.php');

// Check if form is submitted successfully
if (isset($_POST["dt"]) && isset($_POST["dn"]) && isset($_POST["dd"]) && isset($_POST["fp"])) {
// Get form data
$document_type = $_POST['dt'];
$document_name = $_POST['dn'];
$document_description = $_POST['dd'];
$file_path = $_POST['fp'];

$data=get_api_data('http://apis.stmorg.in/documents/doc_registration?dt='.$document_type.'&dn='.$document_name.'&dd='.$document_description.'&fp='.$file_path.'');
$data=json_decode($data,true);
// Check for API errors
if ($data['status'] !== "success") {
    echo "API error: " . $data['message'];
    exit;
}else{
    $ref_id=$data['data']['Reference Id'];
}
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Generate Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <!-- <img src="logo_text.png" class="img-fluid" /> -->
                        <h1 class="card-title text-center">Service To Mankind</h1>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title text-center">Generate Document</h3>
                        <form method="POST">
                            <div class="form-group">
                                <label for="document_type">Document Type</label>
                                <select class="form-control" id="document_type" name="dt" required>
                                    <option value="">-- Select Document Type --</option>
                                    <?php
                                    // fetch all document types
                                    $data=get_api_data('http://apis.stmorg.in/documents/doc_types');
                                    $data=json_decode($data,true);
                                    // Check for API errors
                                    if ($data['status'] !== "success") {
                                        echo "API error: " . $data['message'];
                                        exit;
                                    }else{
                                        foreach($data['data'] as $document_type){
                                            echo "<option value='" . $document_type['doc_type_id'] . "'>" . $document_type['description'] . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <!-- document_name  -->
                            <div class="form-group">
                                <label for="document_name">Document Name</label>
                                <input type="text" class="form-control" id="document_name" name="dn" />
                            </div>
                            <!-- file_path  -->
                            <div class="form-group">
                                <label for="file_path">File Path</label>
                                <input type="text" class="form-control" id="file_path" name="fp" />
                            </div>


                            <div class="form-group">
                                <label for="note">Description</label>
                                <textarea class="form-control" id="note" name="dd" placeholder="Enter Description"
                                    rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                Generate Document
                            </button>
                        </form>
                    </div>
                </div>
                <!-- boostrap card for result  -->
                <?php if(isset($ref_id)){ ?>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-center">Result</h3>
                    </div>
                    <div class="card-body">
                        <?php
                            echo "<p>Reference ID: " . $ref_id . "</p>";
                            ?>
                    </div>
                </div>
                <?php } ?>

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>