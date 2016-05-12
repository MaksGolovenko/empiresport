<!DOCTYPE html>
<html>
    <head>
        <title>Empire of Sports. Інтрернет магазин спортивних товарів</title>
        <meta charset="UTF-8" />
        <link  href="/tamplate/css/reset.css" rel="stylesheet"/>
        <link  href="/tamplate/css/mystyle.css" rel="stylesheet"/>
        <!--[if lt IE 9]>
            <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
        <![endif]-->
        <script type ='text/javascript' src="/tamplate/js/jquery-1.11.1.min.js"></script>
        <script type ='text/javascript' src="/tamplate/js/myscript.js"></script>
    </head>
    <body>
        <div class="wrapper">
            <header>
                <nav>
                    <ul>
                        <li><a href="#" class="nav_1">Питання та відповіді</a></li>
                        <li><a href="#" class="nav_2">ДОСТАВКА ТА ОПЛАТА</a></li>
                        <li><a href="#" class="nav_3">Гарантії</a></li>
                        <li><a href="#" class="nav_3">КОНТАКТИ</a></li>
                    </ul>
                </nav>
                <div class="registr">
                    <p>
                        <?php if(User::isGuest()): ?> 
                            Добрий день,&nbsp;&nbsp;&nbsp;
                              
                            <img src="/tamplate/images/registBG.png" alt="reg"/>&nbsp;
                               
                            <a href="/user/login">увійти в особистий кабінет</a>
                        <?php else: ?>
                            <a href="/cabinet" style="text-decoration: none;">
                                Добрий день&nbsp;&nbsp;&nbsp;
                                <img src="/tamplate/images/registBG.png" alt="reg"/>
                            </a>
                            <!--<a href="/cabinet"></*?php echo $user['name'];*/ ?></a>-->
                        <?php endif; ?>
                        
                    </p>
                    
                </div>  
            </header>
           
            <div class="registr_hidden">
                 <?php if(User::isGuest()): ?> 
                    <a href="/user/login">Вхід</a>
                    <a href="/user/register">Реєстрація</a>
                 <?php else: ?>
                    <a href="/user/logout">Вийти</a>
                 <?php endif; ?>
            </div>
            <!-- Логотип і пошук -->
            <div class="logo_block">
                <div class="img_logo">
                    <a href="/"><img src="/tamplate/images/Logo.png" alt="ES - logo" /></a>
                </div>
                <div class="search">
                <!--
                    <div class="search_wr">
                        
                        <input type="text" placeholder="Пошук" name="search" />
                        <div class="search_goods">
                            <a  href="#">Всі категорії</a>
                        </div>

                    </div>
                -->  
                </div>
                <div class="info">
                    <p>Телефон: </p>
                    <h1>(099) 999 99 99</h1>
                    <p>
                        <span>Режим роботи:</span> <br />
                        Будні дні: з 9:00 до 18:00 <br />
                        Субота, неділя - вихідні
                    </p>
                </div>
                <div class="clear"></div>
            </div>