<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<main class='category_update'>
    <section>
            <div class="breadcrumbs">
                <ul class="breadcrumb">
                    <li><a href="/admin">Адмін панель</a></li>
                    <li><a href="/admin/category">Управління категоріями</a></li>
                    <li>Редагувати категорію</li>
                </ul>
            </div>

            <h3 class="admin_h3">Редагувати категорію "<?php echo $category['name']; ?>"</h3>

                <div class="login-form">
                    <form action="#" method="post">

                        <p class="admin_p">Назва</p>
                        <input type="text" name="name" placeholder="" value="<?php echo $category['name']; ?>">

                        <p class="admin_p">Порядковий номер</p>
                        <input type="text" name="sort_order" placeholder="" value="<?php echo $category['sort_order']; ?>">
                        
                        <p class="admin_p">Статус</p>
                        <select name="status">
                            <option value="1" <?php if ($category['status'] == 1) echo ' selected="selected"'; ?>>Відображається</option>
                            <option value="0" <?php if ($category['status'] == 0) echo ' selected="selected"'; ?>>Прихована</option>
                        </select>
                        <input type="submit" name="submit" class="admin_submit" value="Зберегти">
                    </form>
                </div>

    </section>
</main>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

