<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<main class="order_details">
    <section>
            <div class="breadcrumbs">
                <ul class="breadcrumb">
                    <li><a href="/admin">Адмін панель</a></li>
                    <li><a href="/admin/order">Управління замовленнями</a></li>
                    <li class="active">Перегляд замовлення</li>
                </ul>
            </div>


            <h3 class="admin_h3">Перегляд замовлення #<?php echo $order['id']; ?></h3>
            <h5>Інформація про замовлення</h5>
            
            <table>
                <tr>
                    <td>Номер замовлення</td>
                    <td><?php echo $order['id']; ?></td>
                </tr>
                <tr>
                    <td>Ім'я покупця</td>
                    <td><?php echo $order['user_name']; ?></td>
                </tr>
                <tr>
                    <td>Телефон покупця</td>
                    <td><?php echo $order['user_phone']; ?></td>
                </tr>
                <tr>
                    <td>Коментар клієнта</td>
                    <td><?php echo $order['user_comment']; ?></td>
                </tr>
                <?php if ($order['user_id'] != 0): ?>
                    <tr>
                        <td>ID клієнта</td>
                        <td><?php echo $order['user_id']; ?></td>
                    </tr>
                <?php endif; ?>
                <tr>
                    <td><b>Статус замовлення</b></td>
                    <td><?php echo Order::getStatusText($order['status']); ?></td>
                </tr>
                <tr>
                    <td><b>Дата замовлення</b></td>
                    <td><?php echo $order['date']; ?></td>
                </tr>
            </table>
            
            <h5>Товари в замовленні</h5>

            <table class="details_table">
                <tr>
                    <th>ID клієнта</th>
                    <th>Артикул товару</th>
                    <th>Назва</th>
                    <th>Ціна</th>
                    <th>Кількість</th>
                </tr>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?php echo $product['id']; ?></td>
                        <td><?php echo $product['code']; ?></td>
                        <td><?php echo $product['name']; ?></td>
                        <td>$<?php echo $product['price']; ?></td>
                        <td><?php echo $productsQuantity[$product['id']]; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>

            <a href="/admin/order/" class="order_back">Назад</a>
    </section>


</main>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

