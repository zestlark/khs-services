<style>
    #review {
        margin-bottom: 50px;
    }

    #review .review-box {
        display: flex;
        justify-content: space-around;
        gap: 20px;
        margin: 0 20px;
        flex-wrap: wrap;
        margin: 0 0;
        margin-bottom: 40px;
    }

    #review .review-box .box {
        width: 100%;
        text-align: center;
        padding: 20px 10px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
        border: 0;
        border: 1px solid black;
        gap: 15px;
        flex: 1 1 auto;
        max-width: 100%;
        border-radius: 5px;
        /* background: #ACDDDE33; */
    }

    #review .review-box .box:nth-child(2n) {
        background: #ACDDDE44;
    }

    #review .review-box .box .stars {
        font-size: 25px;
        background: linear-gradient(to right, gold, rgb(181, 181, 181) 0%);
        width: 160px;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        gap: 7px;
    }

    #review .review-box .box p {
        font-size: 14px;
        text-align: left;
    }

    #review .btn-box button {
        width: calc(100% - 50px);
        height: 50px;
        background: transparent;
        border-radius: 5px;
        font-size: 16px;
        color: #042cc3;
        text-transform: uppercase;
        margin-top: 20px;
        margin: 0;
        border: 1px solid #042cc3;
    }

    .delete_review {
        width: 100%;
        display: flex;
        justify-content: flex-end;
    }

    .delete_review button {
        background: #ff000044;
        padding: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 5px;
        text-transform: capitalize;
        border-radius: 5px;
    }
</style>
<div class="container">
    <?php $reviewdatapah = '../database/review/log/'; ?>
    <?php include('../php/reviews.obj.php'); ?>


    <div id="review">

        <div class="review-box">
            <?php
            foreach ($reviews as $i => $iV) {
                $binary = strigToBinary($iV->reviewfilename);
                echo '<div class="box" id="' . $binary . '">
                        <div class="stars" data-rating="' . $iV->rating . '">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                        </div>
        
                        <h3>' . $iV->title . '</h3>
        
                        <p>' . $iV->description . '</p>
        
                        <p><small>by - </small> <i>' . $iV->by . '</i><br><br><a href="mailto:' . $iV->email . '">' . $iV->email . '</a></p>
                        <div class="delete_review">
                        <button onclick="deletereview(\'' . $iV->reviewfilename . '\')"><i class="ri-delete-bin-line"></i>delete</button>
                    </div>
                    </div>';
            }
            ?>
        </div>


    </div>
</div>