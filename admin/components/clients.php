<div class="container">
    <label for="client_file" id="labelforclientfile"><i class="ri-upload-cloud-2-line"></i>upload images in
        clients</label>
    <input type="file" accept="image/*" id="client_file" multiple />

    <div id="client_preview"></div>

    <div class="client-box">
        <button id="client_cancelfile">cancel</button>
        <button id="client_uploadfile" value="Upload">submit</button>
    </div>
    <br>

    <div id="client_uploaded_image"></div>

    <div class="gap"></div>
    <p>clients</p>
    <div class="gap"></div>
    <div id="clientsimg">
        <?php
        $clientdatapah = "../public/clients/";
        include('../php/clients.obj.php');
        foreach ($clientrawarray as $filename) {
            $binary = strigToBinary($filename);
            echo '<div class="box" id="' . $binary . '"><img src="../public/clients/' . $filename . '" alt=""><button onclick="clientdelete(\'' . $filename . '\')">Delete</button></div>';
        }
        ?>
    </div>
</div>
<style>
    #admin_clients #client_file {
        display: none;
    }

    #admin_clients label {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 15px 0;
        gap: 5px;
        border-radius: 5px;
        border: 1px solid black;
        max-width: 400px;
        background: rgba(102, 768, 234, 0.356);
    }

    .client-box {
        display: flex;
        justify-content: center;
        gap: 10px;
    }

    .client-box button {
        width: 100%;
        height: 50px;
        border: 1px solid #042cc3;
        border-radius: 5px;
        background: #76a4f7;
        margin-top: 20px;
        text-transform: uppercase;
        font-weight: bold;
        max-width: 400px;
    }

    .client-box button:nth-child(1) {
        border: 1px solid rgb(255, 56, 56);
        color: rgb(255, 56, 56);
        background: rgba(255, 56, 56, 0.313);
    }

    #clientsimg {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
    }

    #clientsimg .box {
        max-width: 360px;
        width: 100%;
        border: 1px solid black;
        padding: 10px;
    }

    #clientsimg .box button {
        padding: 10px 20px;
        background: #ff000022;
        margin-top: 10px;
        color: #ff0000;
    }
</style>