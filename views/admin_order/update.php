<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<main class="order_update">
    <section>

            <div class="breadcrumbs">
                <ul class="breadcrumb">
                    <li><a href="/admin">Адмін панель</a></li>
                    <li><a href="/admin/order">Управління замовленнями</a></li>
                    <li class="active">Редагувати замовлення</li>
                </ul>
            </div>


            <h3 class="admin_h3">Редагувати замовлення #<?php echo $id; ?></h3>

                <div class="login-form">
                    <form action="#" method="post">

                        <p class="admin_p">Ім'я клієнта</p>
                        <input type="text" name="userName" placeholder="" value="<?php echo $order['user_name']; ?>">

                        <p class="admin_p">Телефон клієнта</p>
                        <input type="text" name="userPhone" placeholder="" value="<?php echo $order['user_phone']; ?>">

                        <p class="admin_p">Коментар клієнта</p>
                        <input type="text" name="userComment" placeholder="" value="<?php echo $order['user_comment']; ?>">

                        <p class="admin_p">Дата оформлення замовлення</p>
                        <input type="text" name="date" placeholder="" value="<?php echo $order['date']; ?>">

                        <p class="admin_p">Статус</p>
                        <select name="status">
                            <option value="1" <?php if ($order['status'] == 1) echo ' selected="selected"'; ?>>Нове замовлення</option>
                            <option value="2" <?php if ($order['status'] == 2) echo ' selected="selected"'; ?>>В обробці</option>
                            <option value="3" <?php if ($order['status'] == 3) echo ' selected="selected"'; ?>>Доставляється</option>
                            <option value="4" <?php if ($order['status'] == 4) echo ' selected="selected"'; ?>>Закрито</option>
                        </select>
                        <input type="submit" name="submit" class="admin_submit" value="Зберегти">
                    </form>
                </div>

    </section>
</main>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

