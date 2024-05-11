<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media Ad</title>
    <link rel="stylesheet" href="styles.css">
    <style>
      .container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    text-align: center;
}

.ad {
    background-color: #f4f4f4;
    padding: 20px;
    border-radius: 10px;
    margin-top: 20px;
    text-align: center;
}

.ad img {
    max-width: 100%;
    border-radius: 10px;
}
    </style>
</head>
<body>
    <div class="container">
        <h1>Social Media Ad</h1>
        <div class="ad">
            <?php include 'generate_social_media_ad.php'; ?>
        </div>
    </div>
</body>
</html>