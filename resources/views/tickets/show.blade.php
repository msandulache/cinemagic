<!DOCTYPE html>
<html>
<head>
    <title>Bilet - CineMagic</title>
    <style>
        body {
            font-size: 16px;
            font-family: 'Helvetica', Arial, sans-serif;
            margin: 0;
        }

        .container {
            margin: 0 auto;
            border-radius: 4px;
            box-shadow: 0 8px 16px rgba(35, 51, 64, 0.25);
            color: rgb(37, 46, 74);
            line-height: 1.2;
        }

        img {
            display: block;
        }

        .text-center {
            text-align: center;
        }

        .text-orange-500 {
            color: rgb(251, 86, 34);
        }

        .text-purple-500 {
            color: rgb(117, 115, 249);
        }

        .pt-1 {
            padding-top: 1rem;
        }

        .pt-2 {
            padding-top: 2rem;
        }

        .bg-purple-100 {
            background-color: rgb(241, 241, 254);
        }

        .rounded {
            border-radius: 0.5rem;
        }

        img {
            width: 150px;
        }
    </style>
</head>
<body>
<div class="container text-center bg-purple-100 rounded">
    <div class="pt-1">
        <img src="vendor/tickets/ticket-logo.png"/>
        <p>Bilet - <?php echo config('app.name'); ?></p>
    </div>
    <div class="pt-1">
        <img src="data:image/png;base64,{{ base64_encode($qrcode) }}"/>
    </div>

    <div class="pt-1    ">
        <h3 class="text-purple-500">
            <?php echo $movie_title; ?>
        </h3>

        <h5>
            <span>Data si ora:</span> <?php echo $hour; ?>
        </h5>

        <h5>
            <span>Loc:</span> <?php echo $seat; ?>
        </h5>

        <h4 class="text-orange-500">
            Vizionare placuta!
        </h4>
    </div>

</div>
</body>
</html>
