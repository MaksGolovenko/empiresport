<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<main class="overall_style">
    <section>
           <div class="breadcrumbs">
                <ul class="breadcrumb">
                    <li><a href="/admin">Адмін панель</a></li>
                    <li class="active">Управління категоріями</li>
                </ul>
            </div>

            <a href="/admin/category/create" class="fa-plus">Додати категорію</a>
            
            <h4>Список категорій</h4>

            <table>
                <tr>
                    <th>ID категорії</th>
                    <th>Назва категорії</th>
                    <th>Порядковий номер</th>
                    <th>Статус</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($categoriesList as $category): ?>
                    <tr>
                        <td><?php echo $category['id']; ?></td>
                        <td><?php echo $category['name']; ?></td>
                        <td><?php echo $category['sort_order']; ?></td>
                        <td><?php echo Category::getStatusText($category['status']); ?></td>  
                        <td><a href="/admin/category/update/<?php echo $category['id']; ?>" title="Редагувати" class="img_edit"></a></td>
                        <td><a href="/admin/category/delete/<?php echo $category['id']; ?>" title="Видалити" class="img_delete"></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
    </section>
</main>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

