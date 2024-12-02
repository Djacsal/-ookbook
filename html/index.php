<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Кулинарная книга сайта 'Рецепты с фото' представляет собой сборник рецептов с пошаговыми 
    фотографиями и описанием приготовления различных блюд, которые условно делятся на салаты, закуски, супы, блюда из мяса, блюда 
    из птицы, а также, блюда из рыбы и морепродуктов.">
    <title>Главная</title>
    <link rel="stylesheet" href="/css/stule.css?<?echo time();?>">
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
                    <form action="/html/search/index.php" method="GET">
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
            <div class="blok_info">
                <p class="info">Кулинарная книга сайта "Рецепты с фото" представляет собой сборник рецептов с пошаговыми фотографиями
                    и описанием приготовления различных блюд, которые условно делятся на салаты, закуски, супы, блюда из
                    мяса, блюда из птицы, а также, блюда из рыбы и морепродуктов. В процессе развития нашего проекта, разделы
                    в кулинарной книге будут добавляться. Все рецепты с фото, размещенные на нашем сайте, приготовлены
                    нашими авторами, которые любят и ценят свое увлечение кулинарией. В кулинарной книге публикуются только
                    проверенные рецепты, которые возможно повторить. Именно поэтому, любое блюдо, которое Вы решите
                    приготовить по нашим рецептам, во-первых, должно у Вас получиться, а во-вторых, оно должно получиться у
                    Вас хорошо.</p>
            </div>

            <div class="dishes">
                <div class="dishes_title">
                    <a class="title_text" href="/html/Salads/Salads.php" title="Перейти на страницу с салатами">САЛАТЫ</a>
                </div>
                <div class="dishes_img">
                    <a href="/html/Salads/Salads.php" title="Перейти на страницу с салатами">
                        <img class="img_width" src="/img/Salads.jpg" alt="Салаты" width="450px">
                    </a>
                </div>
                <div class="dishes_info">
                    <p>Одним из самых востребованных и разнообразных блюд, без которых не обходится не одно праздничное застолье 
                        являются салаты. Салаты бывают овощными, мясными, рыбными и т.д. и т.п. На нашем сайте вы найдете рецепты 
                        салатов с фото на все случаи жизни: простые в приготовлении и не очень, повседневные и праздничные салаты, 
                        классические (такие как «Цезарь», «Оливье» и т.д.) и новые, а еще, мы постараемся публиковать в нашей кулинарной 
                        книге только вкусные салаты.</p>
                </div>
            </div>

            <div class="dishes">
                <div class="dishes_title">
                    <a class="title_text" href="/html/Soups/Soups.php" title="Перейти на страницу с супами">СУПЫ</a>
                </div>
                <div class="dishes_img">
                    <a href="/html/Soups/Soups.php" title="Перейти на страницу с супами">
                        <img class="img_width" src="/img/Soups.jpg" alt="Супы" width="450px">
                    </a>
                </div>
                <div class="dishes_info">
                    <p>Существует огромное количество всевозможных рецептов супов, от самых известных и распространенных 
                        (гороховый суп, борщ, щи, куриный и грибной суп, сырный суп, супы пюре) до менее известных супов, 
                        таких как гаспачо. Супы обычно готовят для повседневного стола, поэтому в рационе человека это блюдо 
                        играет важную роль. В данном разделе кулинарной книги будут размещаться рецепты с фото супов, щей, 
                        борщей и бульонов. Мы постараемся охватить все многообразие повседневных горячих и холодных супов.</p>
                </div>
            </div>

            <div class="dishes">
                <div class="dishes_title">
                    <a class="title_text" href="/html/Mushrooms_vegetables/Mushrooms_vegetables.php" title="Перейти на страницу с грибами и овощами">ГРИБЫ И ОВОЩИ</a>
                </div>
                <div class="dishes_img">
                    <a href="/html/Mushrooms_vegetables/Mushrooms_vegetables.php" title="Перейти на страницу с грибами и овощами">
                        <img class="img_width" src="/img/Mushrooms and vegetables.png" alt="Грибы и овощи" width="450px">
                    </a>
                </div>
                <div class="dishes_info">
                    <p>Как оказалось, приготовленные отдельно овощи и грибы являются довольно самостоятельными и 
                        самодостаточными блюдами. Именно поэтому, было решено завести под такие блюда отдельный 
                        подраздел на сайте и размещать в нем фото рецепты приготовления исключительно овощей и грибов. 
                        Жареная и вареная картошка, тешеная капуста, грибы жареные со сметаной – это лишь немногие блюда, 
                        которые будут представлены в данном разделе.</p>
                </div>
            </div>

            <div class="dishes">
                <div class="dishes_title">
                    <a class="title_text" href="/html/Fish_seafood/Fish_seafood.php" title="Перейти на страницу с рыбой и морепродуктами">РЫБА, МОРЕПРОДУКТЫ</a>
                </div>
                <div class="dishes_img">
                    <a href="/html/Fish_seafood/Fish_seafood.php" title="Перейти на страницу с рыбой и морепродуктами">
                        <img class="img_width" src="/img/Fish.png" alt="Рыба, морепродукты" width="450px">
                    </a>
                </div>
                <div class="dishes_info">
                    <p>Блюда из рыбы и морепродуктов – это очень вкусно, а самое главное полезно. Рыбу можно жарить, 
                        варить, тушить и запекать. Рыба бывает морская, речная и озерная. Морепродукты – это вообще 
                        отдельная история. Кальмары, гребешки, мидии, креветки и т.д. - это настоящий деликатес! 
                        В данном кулинарном разделе будут размещаться различные пошаговые рецепты с фото из рыбы, 
                        а также, блюда, приготовленные из морепродуктов.</p>
                </div>
            </div>

            <div class="dishes">
                <div class="dishes_title">
                    <a class="title_text" href="/html/Meat/Meat.php" title="Перейти на страницу с с рецептами из мяса">РЕЦЕПТЫ ИЗ МЯСА</a>
                </div>
                <div class="dishes_img">
                    <a href="/html/Meat/Meat.php" title="Перейти на страницу с с рецептами из мяса">
                        <img class="img_width" src="/img/Meat.png" alt="Рецепты из мяса"  width="450px">
                    </a>
                </div>
                <div class="dishes_info">
                    <p>Рецептов приготовления мяса существует великое множество, как и способов его 
                        тепловой обработки. Мясо запекают в духовке и над углями, варят из него супы, 
                        бульоны и похлебки, жарят целыми кусками на сковороде и запекают на мангале и 
                        на гриле, тушат с овощами, и готовят в горшочках. В данном разделе будут размещаться 
                        рецепты с пошаговыми фотографиями блюд, приготовленных из баранины, свинины, говядины, 
                        конины и т.д. и т.п.</p>
                </div>
            </div>

            <div class="dishes">
                <div class="dishes_title">
                    <a class="title_text" href="/html/Bakery/Bakery.php" title="Перейти на страницу с выпечкой">ВЫПЕЧКА</a>
                </div>
                <div class="dishes_img">
                    <a href="/html/Bakery/Bakery.php" title="Перейти на страницу с выпечкой">
                        <img class="img_width" src="/img/Baking.png" alt="Выпечка" width="450px">
                    </a>
                </div>
                <div class="dishes_info">
                    <p>Нет, пожалуй, более интересного и душевного блюда, как выпечка, которая приготовлена дома. 
                        Перечень блюд относящихся к выпечке огромен – сюда входят рецепты пирогов и пирожков, 
                        беляшей, блинов, оладий. В связи с появлением в последние время хлебопечек, рецепты выпечки 
                        дополнились хлебом. Отдельный пласт в данном разделе представлен многочисленными вариантами 
                        пиццы и быстрой выпечки из слоеного теста.</p>
                </div>
            </div>
            
            <div class="dishes">
                <div class="dishes_title">
                    <a class="title_text" href="/html/Desserts/Desserts.php" title="Перейти на страницу с десертами">ДЕСЕРТЫ</a>
                </div>
                <div class="dishes_img">
                    <a href="/html/Desserts/Desserts.php" title="Перейти на страницу с десертами">
                        <img class="img_width"src="/img/Desserts.png" alt="Десерты"width="450px">
                    </a>
                </div>
                <div class="dishes_info">
                    <p>Представляем Вам раздел десертов, из которых Вы можете выбрать блюдо, которым 
                        Вы можете завершить прием пищи. У нас Вы найдете всевозможные десерты с фото и 
                        пошаговым описанием их приготовления. Помимо национальных десертных блюд, таких 
                        как чак-чак, тирамису, чизкейк, шарлотка, штрудель и т.п., мы постараемся наполнить 
                        раздел десертами из мороженного и десертными кондитерскими изделиями.</p>
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
<script type="text/javascript">
    var message = "<?php echo isset($_GET['message']) ? urldecode($_GET['message']) : ''; ?>";
    if (message != "") {
    alert(message);
    }
</script>
</html>
