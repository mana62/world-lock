<?php

require_once ('functions/search_city_time.php');
$tokyo = searchCityTime('東京');
$city = htmlspecialchars($_GET['city'], ENT_QUOTES);
$comparison = searchCityTime($city);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Lock</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/result.css">
    <link rel="stylesheet" href="css/common.css">
</head>

<body>
    <header class="header">
        <h2 class="header__inner">
            <a class="header__logo" href="/result.php">World Lock</a>
        </h2>
    </header>

    <main>
        <div class="form__content">
            <div class="form__ttl">
                <h2>日本と世界の時間を比較</h2>
            </div>

            <div class="content">
                <div class="result-cards">
                    <div class="result-card">

                        <div class="result-card-img__wrapper">
                            <img class="result-card__img" src="img/<?php echo $tokyo['img'] ?>" alt="国旗">
                        </div>

                        <div class="result-card__body">
                            <p class="result-card__city"><?php echo $tokyo['name'] ?></p>
                            <p class="result-card__time"><?php echo $tokyo['time'] ?></p>
                        </div>

                    </div>


                    <div class="result-cards">
                        <div class="result-card">

                            <div class="result-card-img__wrapper">
                                <img class="result-card__img" src="img/<?php echo $comparison['img'] ?>" alt="国旗">
                            </div>

                            <div class="result-card__body">
                                <p class="result-card__city"><?php echo $comparison['name'] ?></p>
                                <p class="result-card__time"><?php echo $comparison['time'] ?></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>