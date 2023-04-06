<style>
    #enquiry {}

    #enquiry .box {
        margin-bottom: 10px;
        background-color: #f5f5f5;
        padding: 10px;
        border: 1px solid black;
        border-radius: 5px;
    }

    #enquiry .box:nth-child(2n) {
        background-color: #0000ff11;
    }
</style>
<div class="container">
    <div id="enquiry">
        <?php include('../php/enquiry.obj.php'); ?>
        <?php
        $binary = 0;
        foreach ($enquirys as $i => $iV) {
            echo '<div class="box" id="enquiry' . $binary . '">
                        <h3>service : ' . $iV->service . '</h3>
                        <br>
                        <p>name : ' . $iV->name . '</p>
                        <p>mobile number : ' . $iV->number . ' <a href="tel:' . $iV->number . '"><i class="ri-phone-line"></i></a></p>
        
                        <p>email : <u><i><a href="mailto:' . $iV->email . '">' . $iV->email . '</a></i></u><br><br><a href="mailto:' . $iV->email . '">' . $iV->date . '</a></p>
                    </div>';
            $binary++;
        }
        ?>
    </div>
</div>