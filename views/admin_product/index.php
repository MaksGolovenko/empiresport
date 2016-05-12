<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<main class="overall_style">
    <section>

            <div class="breadcrumbs">
                <ul class="breadcrumb">
                    <li><a href="/admin">Адмін панель</a></li>
                    <li class="active">Управління товарами</li>
                </ul>
            </div>

            <a href="/admin/product/create" class="fa-plus">Додати товар</a>
            <h4>Список товарів</h4>


            <table>
                <tr>
                    <th class="table_width">ID товару</th>
                    <th class="table_width">Артикул</th>
                    <th>Назва товару</th>
                    <th class="table_width">Ціна</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($productsList as $product): ?>
                    <tr>
                        <td class="table_width"><?php echo $product['id']; ?></td>
                        <td class="table_width"><?php echo $product['code']; ?></td>
                        <td><?php echo $product['name']; ?></td>
                        <td class="table_width"> <?php echo $product['price']; ?></td>  
                        <td><a href="/admin/product/update/<?php echo $product['id']; ?>" title="Редагувати" class="img_edit"></a></td>
                        <td><a href="/admin/product/delete/<?php echo $product['id']; ?>" title="Видалити" class="img_delete"></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        
    </section>
</main>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

