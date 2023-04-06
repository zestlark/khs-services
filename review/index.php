<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- remix icon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- aos library -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <title>Review</title>
</head>
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
        border-bottom: 1px solid grey;
        gap: 15px;
        flex: 1 1 auto;
        max-width: 100%;
        border-radius: 5px;
        background: #00ccff11;
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
</style>

<body>
    <?php $reviewdatapah = '../database/review/log/'; ?>
    <?php include('../php/reviews.obj.php'); ?>


    <div id="review">
        <div class="container">
            <div class="heading">review</div>

            <a href="./new.html">
                <div class="btn-box">
                    <button>give a review</button>
                </div>
            </a>

            <br>

            <div class="review-box">
                <?php
                $review_count = 0;
                foreach ($reviews as $i => $iV) {

                    // if ($review_count > 2) {
                    //     break;
                    // } else {
                    //     $review_count++;
                    // }
                
                    echo '<div class="box">
                        <div class="stars" data-rating="' . $iV->rating . '">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                        </div>
        
                        <h3>' . $iV->title . '</h3>
        
                        <p>' . $iV->description . '</p>
        
                        <p><small>by - </small> <i>' . $iV->by . '</i></p>
                    </div>';
                }
                ?>
            </div>

        </div>
    </div>
</body>

</html>