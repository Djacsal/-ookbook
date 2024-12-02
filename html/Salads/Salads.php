<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Одним из самых востребованных и разнообразных блюд, без которых не обходится не одно праздничное 
    застолье являются салаты. Салаты бывают овощными, мясными, рыбными и т.д. и т.п.">
    <link rel="stylesheet" href="/css/Dishes.css?<?echo time();?>">
    <link rel="stylesheet" href="/css/Normalize.css">
    <title>Салаты</title>
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
        <div class="main_container">
            <div class="dish">
                <div class="dish_title">
                    <div class="dish_num">
                        1
                    </div>
                    <div>
                        <a class="title" title="Рецепт блюда: Салат с рукколой и пармезаном" href="/html/Salads/Salads_1.php">Салат с рукколой и пармезаном</a>
                    </div>
                </div>
                <div class="dish_img">
                    <img class="img_width" src="/img/Salads_img/1.png" alt="Первый салат" width="750px">
                </div>
                <div class="dish_info">
                    Что может быть проще, чем смешать полностью готовые ингредиенты в салатнике, заправить их 
                    салатной заправкой на основе оливкового масла и сразу подать к столу?
                </div>
                <div class="dish_button">
                    <a class="dutton_text" title="Рецепт блюда: Салат с рукколой и пармезаном" href="/html/Salads/Salads_1.php">Подробнее</a>
                </div>
            </div>

            <div class="dish">
                <div class="dish_title">
                    <div class="dish_num">
                        2
                    </div>
                    <div>
                        <a class="title" title="Рецепт блюда: Салат мимоза" href="/html/Salads/Salads_2.php">Салат мимоза</a>
                    </div>
                </div>
                <div class="dish_img">
                    <img class="img_width" src="/img/Salads_img/2.png" alt="Салат мимоза" width="750px">
                </div>
                <div class="dish_info">
                    Моя версия знаменитого праздничного салата «Мимоза». Готовить мы его сегодня будем из рыбных консервов –
                    сайры. Это будет почти классический вариант, почему «почти»?
                </div>
                <div class="dish_button">
                    <a class="dutton_text" title="Рецепт блюда: Салат мимоза" href="/html/Salads/Salads_2.php">Подробнее</a>
                </div>
            </div>

            <div class="dish">
                <div class="dish_title">
                    <div class="dish_num">
                        3
                    </div>
                    <div>
                        <a class="title" title="Рецепт блюда: Селёдка под шубой" href="/html/Salads/Salads_3.php">Селёдка под шубой</a>
                    </div>
                </div>
                <div class="dish_img">
                    <img class="img_width" src="/img/Salads_img/3.png" alt="Селёдка под шубой" width="750px">
                </div>
                <div class="dish_info">
                    Предлагаю пошаговый фото рецепт селедки под шубой, практически, в классическом ее исполнении. Любимый всеми
                    праздничный новогодний салат по традиции будет готовиться из селедки.
                </div>
                <div class="dish_button">
                    <a class="dutton_text" title="Рецепт блюда: Селёдка под шубой" href="/html/Salads/Salads_3.php">Подробнее</a>
                </div>
            </div>

            <div class="dish">
                <div class="dish_title">
                    <div class="dish_num">
                        4
                    </div>
                    <div>
                        <a class="title" title="Рецепт блюда: Салат из соевой спаржи" href="/html/Salads/Salads_4.php">Салат из соевой спаржи</a>
                    </div>
                </div>
                <div class="dish_img">
                    <img class="img_width" src="/img/Salads_img/4.png" alt="Салат из соевой спаржи" width="750px">
                </div>
                <div class="dish_info">
                    Будем сегодня с Вами готовить интересный салатик из морковки и соевой спаржи. Рецепт приготовления очень
                    простой, единственный момент влияющий на продолжительность готовки...
                </div>
                <div class="dish_button">
                    <a class="dutton_text" title="Рецепт блюда: Салат из соевой спаржи" href="/html/Salads/Salads_4.php">Подробнее</a>
                </div>
            </div>

            <div class="dish">
                <div class="dish_title">
                    <div class="dish_num">
                        5
                    </div>
                    <div>
                        <a class="title" title="Рецепт блюда: Салат с зелёным луком и яйцом" href="/html/Salads/Salads_5.php">Салат с зелёным луком и яйцом</a>
                    </div>
                </div>
                <div class="dish_img">
                    <img class="img_width" src="/img/Salads_img/5.png" alt="Салат с зелёным луком и яйцом" width="750px">
                </div>
                <div class="dish_info">
                    Есть очень много рецептов простых в приготовлении салатиков. Одним из таких и поделюсь с Вами в этой статье.
                    Речь пойдет о сезонном салате с зеленым луком и яйцом.
                </div>
                <div class="dish_button">
                    <a class="dutton_text" title="Рецепт блюда: Салат с зелёным луком и яйцом" href="/html/Salads/Salads_5.php">Подробнее</a>
                </div>
            </div>
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
</html>