<?php include ROOT . "/views/layouts/header.php" ?>
            <!-- Основний блок -->
            <main>
                <div class="cabinet">
                    <h1>Кабінет користувача</h1>
                    <ul>
                        <?php if($user['role'] == 'admin'):?>
                        <li><a href="cabinet/edit">Редагувати данні</a></li>
                        <li><a href="/admin">Панель адміністрації</a></li>
                        <?php else: ?>
                        <li><a href="cabinet/edit">Редагувати данні</a></li>
                        <!--<li><a href="#">Список покупок</a></li>-->
                        <?php endif;?>
                    </ul>
                
                </div>
                <?php include ROOT . "/views/layouts/basket.php" ?>
                <div class="clear"></div>  
            </main>
<?php include ROOT . "/views/layouts/footer.php" ?>