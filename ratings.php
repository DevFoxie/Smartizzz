<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CUSTOM CSS-->
    <link rel="stylesheet" href="./css/ratings.css">
    <!-- FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">

    <title>Smartizz | Ratings</title>

</head>

<body>

    <div class="container">
        <img src="./img/star.svg" />
        <h1>How did we do?</h1>

        <p>
            Please let us know how we did with your support request. All feedback is
            appreciated to help us improve our offering!
        </p>

        <ul>
            <li><button class="btn">1</button></li>
            <li><button class="btn">2</button></li>
            <li><button class="btn">3</button></li>
            <li><button class="btn">4</button></li>
            <li><button class="btn">5</button></li>
        </ul>

        <button class="btn-submit" id="submit-rating">Submit</button>
    </div>

    <div class="thank-you hidden">
        <img src="./images/illustration-thank-you.svg" alt="" />
        <p class="gray">
            You selected
            <span id="rating" style="display: inline-block; margin: 0 0.3rem">1</span>
            out of 5
        </p>

        <h2>Thank you!</h2>

        <p>
            We appreciate you taking the time to give a rating. If you ever need
            more support, don’t hesitate to get in touch!
        </p>

        <button class="btn-submit" id="rate-again">Rate Again</button>
    </div>


    <script src="./js/ratings.js"></script>
</body>

</html>