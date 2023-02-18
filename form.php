<?php
require('connection.php');
require('functions.php');
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
            <form action="regora" method="post">
                <h1>Sign Up</h1>
                <p>This is only for us, for manual registrations.</p>
                <fieldset>
                    <legend><span class="number">1</span> Your Basic Info</legend>

                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" />

                    <label for="email">Email:</label>
                    <input type="email" id="mail" name="email" />

                    <label for="name">mobile:</label>
                    <input type="text" id="name" name="mobile" />

                </fieldset>
                <fieldset>
                    <legend><span class="number">2</span> Volunteer Profile</legend>

                    <label for="job">designation :</label>
                    <select id="job" name="designation">
                        <optgroup label="heros">
                            <?php
                $res=mysqli_query($con,"SELECT * FROM `designation`");
                while($row=mysqli_fetch_assoc($res)){
                ?>
                            <option value="<?php echo $row['id'] ?>"><?php echo $row['designation'] ?></option>
                            <? } ?>
                        </optgroup>
                        <!-- <optgroup label="Mobile">
                            <option value="android_developer">Android Developer</option>
                            <option value="ios_developer">IOS Developer</option>
                            <option value="mobile_designer">Mobile Designer</option>
                        </optgroup>
                        <optgroup label="Business">
                            <option value="business_owner">Business Owner</option>
                            <option value="freelancer">Freelancer</option>
                        </optgroup> -->
                    </select>

                    <label for="name">clg id:</label>
                    <input type="text" id="clgid" name="clgid" />

                    <label for="name">Branch :</label>
                    <input type="text" id="clgid" name="branch" />

                    <label for="name">clg name:</label>
                    <input type="text" id="clgid" name="clgname" />
                </fieldset>

                <button type="submit">Sign Up</button>
            </form>
        </div>
    </div>
</body>

</html>