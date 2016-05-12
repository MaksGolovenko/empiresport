<?php include ROOT . '/views/layouts/header.php'; ?>

<main>
    <aside>
            <div class="but_catalog">
                <p>Каталог товарів</p>
            </div>
            <div class="list_catalog">
                <ul>
                    <?php foreach($categories as $categoryItem): ?>
                        <li>
                            <a href="/category/<?php echo $categoryItem['id']; ?>">
                                <?php echo $categoryItem['name'];?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                                                 
                </ul>
                <div class="bottom_bg"></div>
            </div>
    </aside>

            <div class="center_checkout">

                    <h2>Кошик</h2>


                    <?php if ($result): ?>

                        <p class="order_processed">Замовлення оформлене. Ми Вам передзвонимо.</p>

                    <?php else: ?>
                        <div class="login-form">
                            <div class="login-form_top">
                                <p>Обрано товарів: &nbsp;<span><?php echo $totalQuantity; ?></span>, на суму: &nbsp;<span><?php echo $totalPrice; ?></span>, грн.</p>
                                <p>Для оформлення замовлення заповніть форму. Наш менеджер зв'яжеться з Вами.</p>
                            </div>
                                <form action="#" method="post">

                                    <p>Ваше ім'я</p>
                                    <input type="text" name="userName" placeholder="" value="<?php echo $userName; ?>"/>

                                    <p>Номер телефону</p>
                                    <input type="text" name="userPhone" placeholder="099-999-99-99" value="<?php echo $userPhone; ?>"/>

                                    <p>Комментарій к заказу</p>
                                    <input type="text" name="userComment" placeholder="Повідомлення" value="<?php echo $userComment; ?>"/>

                                    <br/>
                                    <br/>
                                    <input type="submit" name="submit" class="btn-default" value="Оформити" />
                                </form>
                        </div>
                        <div class="errors">
                            <?php if (isset($errors) && is_array($errors)): ?>
                                <ul>
                                    <?php foreach ($errors as $error): ?>
                                        <li> - <?php echo $error; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>


            </div>
            <div class="clear"></div>
</main>

<?php include ROOT . '/views/layouts/footer.php'; ?>