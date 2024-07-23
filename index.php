<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Lock</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/index.css">
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

            <form class="form__select" action="result.php" method="get">
                <div class="select__item">
                    <select class="select__item-option" name="city" id="">
                        <option value="シドニー">シドニー</option>
                        <option value="上海">上海 </option>
                        <option value="モスクワ">モスクワ</option>
                        <option value="ロンドン">ロンドン</option>
                        <option value="ヨハネスブルク">ヨハネスブルク</option>
                        <option value="ニューヨーク">ニューヨーク</option>
                    </select>
                </div>
                <div class="option__button">
                    <button class="option__button-submit" type="submit">検索</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>