<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<main class="overall_style">
    <section>
                        
            <div class="breadcrumbs">
                <ul class="breadcrumb">
                    <li><a href="/admin">Адмін панель</a></li>
                    <li class="active">Управління замовленнями</li>
                </ul>
            </div>

            <h4>Список замовлень</h4>
            
            <table>
                <tr>
                    <th>ID замовлення</th>
                    <th>Ім'я покупця</th>
                    <th>Телефон покупця</th>
                    <th>Дата оформлення</th>
                    <th>Статус</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($ordersList as $order): ?>
                    <tr>
                        <td>
                            <a href="/admin/order/view/<?php echo $order['id']; ?>">
                                <?php echo $order['id']; ?>
                            </a>
                        </td>
                        <td><?php echo $order['user_name']; ?></td>
                        <td><?php echo $order['user_phone']; ?></td>
                        <td><?php echo $order['date']; ?></td>
                        <td><?php echo Order::getStatusText($order['status']); ?></td>    
                        <td><a href="/admin/order/view/<?php echo $order['id']; ?>" title="Дивитися" class="img_watch"></i></a></td>
                        <td><a href="/admin/order/update/<?php echo $order['id']; ?>" title="Редагувати" class="img_edit"></a></td>
                        <td><a href="/admin/order/delete/<?php echo $order['id']; ?>" title="Видалити" class="img_delete"></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>

    </section>
</main>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

