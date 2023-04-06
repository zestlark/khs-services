<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- remix icon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- aos library -->
    <!-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> -->
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <title>Enquiry</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300&display=swap');

    * {
        box-sizing: border-box;
        font-family: 'Nunito Sans', sans-serif;
    }

    body {
        max-width: 100vw;
        padding: 0;
        margin: 0;
        height: 100vh;
        background: #042cc333;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .hidden {
        display: none;
    }

    .button {
        width: 140px;
        cursor: pointer;
        padding: 1em;
        border-radius: 0.2em;
        border: none;
        color: white;
        font-size: 1em;
        transition: all 0.5s ease;
        background-color: #042cc3;
    }

    .button:hover {
        background-color: #ff4f05;
    }

    .button.disabled {
        opacity: 0.5;
    }

    .button.disabled:hover {
        background-color: #042cc3;
    }

    .form {
        width: 360px;
        margin: 0;
        padding: 20px;
        padding-top: 20px;
        background-color: white;
        color: #33312e;
        border-radius: 10px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
    }

    .form .progress-bar {
        width: 100%;
        list-style-type: none;
        display: flex;
        padding: 0;
        justify-content: center;
        align-items: center;
        margin-bottom: 30px;
    }

    .form .progress-bar li.progress-bar__dot {
        display: block;
        width: 30px;
        color: black;
        font-weight: bold;
        border-radius: 50%;
        height: 30px;
        border: 0.2em solid #042cc3;
        background-color: white;
        cursor: pointer;
        transition: all 0.5s ease;
        font-size: 16px;
        display: inline-flex;
        justify-content: center;
        align-items: center;
    }

    .form .progress-bar li.progress-bar__dot.full {
        background-color: #042cc3;
        color: white;
    }

    .form .progress-bar li.progress-bar__connector {
        display: block;
        width: calc(100% / 3);
        border-radius: 1000em;
        height: 2px;
        background-color: #042cc3;
    }

    .form label {
        font-size: 18px;
    }

    .form input,
    select {
        width: 100%;
        padding: 15px;
        margin-bottom: 30px;
        box-sizing: border-box;
        margin-top: 10px;
        border: none;
        border-radius: 10px;
        background-color: #e6e6e6;
        font-size: 1em;
    }

    .form input:focus {
        border: none;
    }

    .form .button-group {
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 10px;
    }

    .form button#validate {
        margin: auto;
        background-color: #1a936f;
        width: 100%;
        margin-top: 20px;
    }

    .form button#validate:hover {
        background-color: #12684e;
    }

    @media only screen and (max-width: 400px) {
        .form {
            width: 95%;
        }
    }

    .review-box.box {
        width: 100%;
        text-align: center;
        padding: 20px 10px;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        align-items: center;
        gap: 15px;
        flex: 1 1 auto;
        border-radius: 5px;
    }

    .review-box.box .stars {
        font-size: 40px;
        background: linear-gradient(to right, gold, rgb(181, 181, 181) 0%);
        width: 100%;
        display: flex;
        transition: all 1s;
        align-items: center;
        justify-content: space-around;
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .review-box.box .stars[data-rating="0"] {
        background: linear-gradient(to right, gold 0%, rgb(181, 181, 181) 0%);
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .review-box.box .stars[data-rating="1"] {
        background: linear-gradient(to right, gold 20%, rgb(181, 181, 181) 0%);
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .review-box.box .stars[data-rating="2"] {
        background: linear-gradient(to right, gold 40%, rgb(181, 181, 181) 0%);
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .review-box.box .stars[data-rating="3"] {
        background: linear-gradient(to right, gold 60%, rgb(181, 181, 181) 0%);
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .review-box.box .stars[data-rating="4"] {
        background: linear-gradient(to right, gold 80%, rgb(181, 181, 181) 0%);
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .review-box.box .stars[data-rating="5"] {
        background: linear-gradient(to right, gold 100%, rgb(181, 181, 181) 0%);
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .show_pass {
        display: flex;
        justify-content: flex-start;
        align-items: center;
    }

    #show_pass {
        width: 15px;
        height: 15px;
        display: inline-block;
        margin: 0;
        margin-right: 10px;
    }
</style>

<body>
    <div id="stepByStepForm" class="form">

        <div class="step step1">
            <div class="input-group">
                <label for="">Name</label>
                <input type="text" placeholder="name" id="formname">
            </div>
            <div class="input-group">
                <label for="">Email (optional)</label>
                <input type="text" placeholder="example@name.com" id="mail">
            </div>
            <div class="input-group">
                <label for="">Mobile number</label>
                <input type="number" placeholder="eg : +91" id="number">
            </div>
            <div class="input-group">
                <label for="">Enquiry on</label><br>
                <select id="service">
                    <option value="">select one</option>
                    <?php
                    include('../php/services.obj.php');
                    foreach ($services as $i => $iV) {
                        echo '
                        <option value="' . $iV->name . '">' . $iV->name . '</option>
                        ';
                    }
                    ?>
                </select>
            </div>
        </div>

        <div class="button-group">
            <button id="validate" class="button">
                send
            </button>
        </div>

    </div>
</body>
<script>
    let pagereload = sessionStorage.getItem('enreload');
    if (pagereload == 'true') {
        sessionStorage.setItem('enreload', 'false');
        window.location.href = "../";
    }

    function gup(name, url) {
        if (!url) url = location.href;
        name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
        var regexS = "[\\?&]" + name + "=([^&#]*)";
        var regex = new RegExp(regexS);
        var results = regex.exec(url);
        return results == null ? null : results[1];
    }
    let selectedservice = gup('type', window.location.href)
    //alert(selectedservice)
    if (selectedservice != null) {
        for (i = 0; i < service.options.length; i++) {
            if(service.options[i].value == selectedservice){
                service.options[i].selected = 'selected'
            }
        }
    }

    validate.onclick = () => {
        if (formname.value != ""
            && number.value != ""
            && service.value != ""
        ) {
            let mmail;
            if (mail.value == "") {
                mmail = "not provided"
            } else {
                mmail = mail.value;
            }
            validatedata(formname.value, mmail, number.value, service.value);
        } else {
            alert("please enter your username and password")
        }
    }

    function validatedata(name, mail, number, service) {
        let form_data = new FormData();
        form_data.append("name", name);
        form_data.append("mail", mail);
        form_data.append("number", number);
        form_data.append("service", service);


        fetch("../php/enquiry.php", {
            body: form_data,
            method: "post",
        }).then(function (response) {
            response.text().then(function (text) {
                if (text == 'true') {
                    alert("enquiry send Successfully!");
                    sessionStorage.setItem('enreload', 'true');

                } else {
                    alert("Error in sending enquiry")
                }
            });
        });
    }
</script>

</html>