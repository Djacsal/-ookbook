
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Поиск</title>
    <link rel="stylesheet" href="/css/Dishes.css?<?echo time();?>">
    <link rel="stylesheet" href="/css/Normalize.css">
    <link rel="shortcut icon" href="/img/123.png" type="image/x-icon">
    <link rel="icon" href="/img/123.png" type="image/x-icon">
</head>
<body>
    <header>
        <div class="head">
            <div class="logo">
                <img src="/img/logo.png" alt="Логотип">
            </div>
            <div class="header_social_network"> 
                <div class="search_form">
                    <form action="/html/search/index.php" method="get">
                        <input type="text" id="dish_name" name="q" required placeholder="Искать здесь...">
                        <button type="submit"></button>
                    </form>
                </div>
                <div class="social_network">
                    <div class="vk, network">
                        <a href="https://vk.com/djacsal228" title="Перейти на стринуцу во Вконтакте" target="_blank"><img src="/img/VK blak.png" alt="Вконтакте"></a>
                    </div>
                    <div class="facebook, network">
                        <a href="https://www.facebook.com" title="Перейти на стринуцу в Фейсбук" target="_blank"><img src="/img/Facebook.png" alt="Фейсбук"></a>
                    </div>
                    <div class="instagram, network">
                        <a href="https://www.instagram.com/viniadukhovskii" title="Перейти на стринуцу в Инстаграмм" target="_blank"><img src="/img/instagram.png" alt="Инстаграмм"></a>
                    </div>
                </div>
            </div>
        </div>
        <nav>
        <ul class="navigation">
            <li><a class="nav_title" title="Перейти на главную страницу" href="/html/index.php">Главная</a></li>
            <li><a class="nav_title" title="Перейти на страницу с салатами" href="/html/Salads/Salads.php">Салаты</a></li>
            <li><a class="nav_title" title="Перейти на страницу с супами" href="/html/Soups/Soups.php">Супы</a></li>
            <li><a class="nav_title" title="Перейти на страницу с грибами и овощами" href="/html/Mushrooms_vegetables/Mushrooms_vegetables.php">Грибы и овощи</a></li>
            <li><a class="nav_title" title="Перейти на страницу с рыбой и морепродуктами" href="/html/Fish_seafood/Fish_seafood.php">Рыба и морепродукты</a></li>
            <li><a class="nav_title" title="Перейти на страницу с с рецептами из мяса" href="/html/Meat/Meat.php">Рецепты из мяса</a></li>
            <li><a class="nav_title" title="Перейти на страницу с выпечкой" href="/html/Bakery/Bakery.php">Выпечка</a></li>
            <li><a class="nav_title" title="Перейти на страницу с десертами" href="/html/Desserts/Desserts.php">Десерты</a></li>
        </ul>
        </nav>
      </header>
      <main>
        <div class="сategories_dishes">
<?php
$dsn = "mysql:host=127.0.0.1;dbname=dishes";
$query = $_GET['q'] ?? '';
$query = htmlspecialchars($query, ENT_QUOTES, 'UTF-8');
try {
    $pdo = new PDO($dsn, 'root', 'W4&KhpizoBbnnp4N');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM `dish` WHERE (`name` LIKE ? OR `ingredients` LIKE ?)";
    $stmt = $pdo->prepare($sql);

    $stmt->execute(['%'.$query.'%', '%'.$query.'%']);
    $found_items = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (!empty($found_items)) {
        foreach ($found_items as $item) {
            echo '<div class="main_container">';
            echo '<div class="dish">';
            echo '<div class="dish_title">';
            echo '<div class="dish_num">' . $item['recipe_number'] . '</div>';
            echo '<a class="title" href="' . $item['link_recipe'] . '">' . $item['name'] . '</a>';
            echo '</div>';
            echo '<div class="dish_img"><img class="img_width" src="' . $item['link_img'] . '" alt="' . $item['name'] . '"></div>';
            echo '<div class="dish_info">' . $item['description'] . '</div>';
            echo '<div class="dish_button"><a class="dutton_text" href="' . $item['link_recipe'] . '">Подробнее</a></div>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo '<div class="main_container">';
        echo '<p class="no_recipe_found">По запросу "' . $query . '" ничего не найдено.</p>';
        echo '</div>';
    }

} catch (PDOException $e) {
    header('Location: 404.php');
    exit();
}
?>
</div>
</main>
<footer>
        <div class="footer_container">
            <div class="about_project, blok">
                <div class="footer_title">
                    О проекте
                </div>
                <div class="footer_info">
                    Photorecipes - кулинарный сайт с пошаговыми и поэтапными фотографиями блюд. У нас Вы найдете:
                </div>
                <ul class="footer_li">
                    <li class="footer_li_info"><a class="footer_li_info_link" href="/html/Salads/Salads.php">Рецепты различных салатов</a></li>
                    <li class="footer_li_info"><a class="footer_li_info_link" href="/html/Soups/Soups.php">Рецепты cупов</a></li>
                    <li class="footer_li_info"><a class="footer_li_info_link" href="/html/Mushrooms_vegetables/Mushrooms_vegetables.php">Различные блюда из грибов и овощей</a></li>
                    <li class="footer_li_info"><a class="footer_li_info_link" href="/html/Fish_seafood/Fish_seafood.php">Всевозможные блюда из рыбы и морепродуктов</a></li>
                    <li class="footer_li_info"><a class="footer_li_info_link" href="/html/Meat/Meat.php">Рецепты из мяса (из свинины, говядины, баранины и т.д.)</a></li>
                    <li class="footer_li_info"><a class="footer_li_info_link" href="/html/Bakery/Bakery.php">Выпечка</a></li>
                    <li class="footer_li_info"><a class="footer_li_info_link" href="/html/Desserts/Desserts.php">Закуски</a></li>
                </ul>
            </div>
            <div class="what_we_offer, blok">
                <div class="footer_title">
                    Что мы предлагаем?
                </div>
                <div class="footer_info">
                    Все блюда, размещенные на нашем
                    сайте публикуются с пошаговыми
                    фото, и представляют собой
                    наглядное пособие, которое может
                    позволить любому желающему
                    легко приготовить понравившейся
                    рецепт. Все рецепты сайта
                    возможно повторить!
                </div>
            </div>
            <div class="footer_social_network, blok">
                <div class="footer_title">
                    Мы в соцсетях
                </div>
                <div class="footer_info">
                    <div class="vk, footer_network">
                        <a href="https://vk.com/djacsal228" title="Перейти на стринуцу во Вконтакте" target="_blank"><img src="/img/VK white.png" alt="Вконтакте"></a>
                    </div>
                    <div class="facebook, footer_network">
                        <a href="https://www.facebook.com" title="Перейти на стринуцу в Фейсбуке" target="_blank"><img src="/img/Facebook white.png" alt="Фейсбук"></a>
                    </div>
                    <div class="instagram, footer_network">
                        <a href="https://www.instagram.com/viniadukhovskii" title="Перейти на стринуцу в Инстаграмм" target="_blank"><img src="/img/Instagram white.png" alt="Инстаграмм"></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>