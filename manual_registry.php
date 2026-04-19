<?php
require('includes/functions.php');

$msg = '';
if(isset($_POST['mail']) && $_POST['mail']!=''){
    $mail = sanitize_input($_POST['mail']);
    $gender = isset($_POST['gender']) ? sanitize_input($_POST['gender']) : '';
    $name = isset($_POST['name']) ? sanitize_input($_POST['name']) : '';
    $mobile = isset($_POST['mobile']) ? sanitize_input($_POST['mobile']) : '';
    $role = isset($_POST['role']) ? sanitize_input($_POST['role']) : '';
    $dob = isset($_POST['dob']) ? sanitize_input($_POST['dob']) : '';

    $residence = isset($_POST['residence']) ? sanitize_input($_POST['residence']) : '';
    $blood = isset($_POST['blood']) ? sanitize_input($_POST['blood']) : '';
    $emname1 = isset($_POST['emname1']) ? sanitize_input($_POST['emname1']) : '';
    $emname2 = isset($_POST['emname2']) ? sanitize_input($_POST['emname2']) : '';
    $emmobile1 = isset($_POST['emmobile1']) ? sanitize_input($_POST['emmobile1']) : '';
    $emmobile2 = isset($_POST['emmobile2']) ? sanitize_input($_POST['emmobile2']) : '';
    $emrelation1 = isset($_POST['emrelation1']) ? sanitize_input($_POST['emrelation1']) : '';
    $emrelation2 = isset($_POST['emrelation2']) ? sanitize_input($_POST['emrelation2']) : '';

    $post_data = [
        'uid' => '', 
        'name' => $name,
        'mail' => $mail,
        'mobile' => $mobile,
        'role' => $role,
        'gender' => $gender,
        'dob' => $dob,
        'residence' => $residence,
        'blood' => $blood,
        'emname1' => $emname1,
        'emmobile1' => $emmobile1,
        'emrelation1' => $emrelation1,
        'emname2' => $emname2,
        'emmobile2' => $emmobile2,
        'emrelation2' => $emrelation2
    ];

    $data = get_api_data_post($api_url . '/global/manage_users', $post_data);
    $resp = json_decode($data, true);

    if($resp && $resp['status'] == 'success'){
        $msg = "User has been registered.";
        $msgcolor="green";
    }else{
        $msg = "API failed to register user.";
        $msgcolor="red";
    }
}
?>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="https://codepen.io/gymratpacks/pen/VKzBEp#0" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,300" rel="stylesheet" type="text/css" />
    <style>
    *,
    *:before,
    *:after {
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    body {
        font-family: "Nunito", sans-serif;
        color: #384047;
    }

    form {
        max-width: 300px;
        margin: 10px auto;
        padding: 10px 20px;
        background: #f4f7f8;
        border-radius: 8px;
    }

    h1 {
        margin: 0 0 30px 0;
        text-align: center;
    }

    input[type="text"],
    input[type="password"],
    input[type="date"],
    input[type="datetime"],
    input[type="email"],
    input[type="number"],
    input[type="search"],
    input[type="tel"],
    input[type="time"],
    input[type="url"],
    textarea,
    select {
        background: rgba(255, 255, 255, 0.1);
        border: none;
        font-size: 16px;
        height: auto;
        margin: 0;
        outline: 0;
        padding: 15px;
        width: 100%;
        background-color: #e8eeef;
        color: #8a97a0;
        box-shadow: 0 1px 0 rgba(0, 0, 0, 0.03) inset;
        margin-bottom: 30px;
    }

    input[type="radio"],
    input[type="checkbox"] {
        margin: 0 4px 8px 0;
    }

    select {
        padding: 6px;
        height: 32px;
        border-radius: 2px;
    }

    button {
        padding: 19px 39px 18px 39px;
        color: #fff;
        background-color: #4bc970;
        font-size: 18px;
        text-align: center;
        font-style: normal;
        border-radius: 5px;
        width: 100%;
        border: 1px solid #3ac162;
        border-width: 1px 1px 3px;
        box-shadow: 0 -1px 0 rgba(255, 255, 255, 0.1) inset;
        margin-bottom: 10px;
    }

    fieldset {
        margin-bottom: 30px;
        border: none;
    }

    legend {
        font-size: 1.4em;
        margin-bottom: 10px;
    }

    label {
        display: block;
        margin-bottom: 8px;
    }

    label.light {
        font-weight: 300;
        display: inline;
    }

    .number {
        background-color: #5fcf80;
        color: #fff;
        height: 30px;
        width: 30px;
        display: inline-block;
        font-size: 0.8em;
        margin-right: 4px;
        line-height: 30px;
        text-align: center;
        text-shadow: 0 1px 0 rgba(255, 255, 255, 0.2);
        border-radius: 100%;
    }

    .data-rem {
        display: none;
    }

    @media screen and (min-width: 480px) {
        form {
            max-width: 480px;
        }
    }
    </style>
</head>

<body>
    <div class="row">
        <div class="col-md-12">
            <form method="post">
                <h1>Manual Registry</h1>
                <p>This is only for management purpose, for manual user registrations.</p>
                <p style="color:<?php echo $msgcolor; ?>"><?php echo $msg; ?></p>
                <fieldset id="email check">

                    <label>Enter Mail:</label>
                    <input type="text" name="mail" id="mail" placeholder="Enter Mail" required>

                </fieldset>
                <button type="button" onclick="checkmail()" id="mailcheckbtn">CheckUp</button>
                <fieldset class="data-rem">
                    <legend><span class="number">1</span>Basic Info</legend>

                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" />

                    <label for="gender">Gender:</label>
                    <select name="gender">
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                    </select>

                    <label for="name">Mobile:</label>
                    <input type="text" id="name" name="mobile" />

                    <label for="name">Role:</label>
                    <!-- <input type="date" id="name" name="date" /> -->
                    <select name="role">
                        <option value="14">Coordinator</option>
                        <option value="15">Volunteer</option>
                    </select>

                </fieldset>
                <fieldset class="data-rem">
                    <legend><span class="number">2</span>Additional Info</legend>

                    <!-- date of birth -->
                    <label for="name">Date of Birth :</label>
                    <input type="date" id="dob" name="dob" />


                    <label for="name">Residence :</label>
                    <input type="text" id="clgid" name="residence" />

                    <label for="blood">Blood :</label>
                    <select name="blood">
                        <option value="9">None</option>
                        <option value="1">A+</option>
                        <option value="2">A-</option>
                        <option value="3">B+</option>
                        <option value="4">B-</option>
                        <option value="5">O+</option>
                        <option value="6">O-</option>
                        <option value="7">AB+</option>
                        <option value="8">AB-</option>
                    </select>
                </fieldset>
                <fieldset class="data-rem">
                    <legend><span class="number">3</span>Emergency Info</legend>

                    <!-- emergency contact 1 heading-->
                    <label for="name">Emergency Contact 1 :</label>
                    <label for="name">Name :</label>
                    <input type="text" id="clgid" name="emname1" />
                    <label for="name">Contact :</label>
                    <input type="text" id="clgid" name="emmobile1" />
                    <label for="name">Relation :</label>
                    <input type="text" id="clgid" name="emrelation1" />

                    <!-- emergency contact 2 heading-->
                    <label for="name">Emergency Contact 2 :</label>
                    <label for="name">Name :</label>
                    <input type="text" id="clgid" name="emname2" />
                    <label for="name">Contact :</label>
                    <input type="text" id="clgid" name="emmobile2" />
                    <label for="name">Relation :</label>
                    <input type="text" id="clgid" name="emrelation2" />
                </fieldset>

                <button class="data-rem" type="submit">Add Record</button>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
    function checkmail() {
        var mail = jQuery("#mail").val();
        jQuery("#mailcheckbtn").html("Please Wait..");
        jQuery("#mailcheckbtn").attr("disabled", true);
        jQuery("#mailcheckbtn");
        jQuery.ajax({
            url: "mailcheck",
            type: "POST",
            data: "mail=" + mail,
            success: function(data) {
                if (data == 1) {
                    $(".data-rem").show();
                    $("#mailcheckbtn").hide();
                } else {
                    alert("Mail Already Registered");
                    $("#mailcheckbtn").html("CheckUp");
                    $("#mailcheckbtn").attr("disabled", false);
                }
            }
        });
    };
    </script>
</body>

</html>