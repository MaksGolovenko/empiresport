<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<main class='create'>
    <section>

            <div class="breadcrumbs">
                <ul class="breadcrumb">
                    <li><a href="/admin">Адмін панель</a></li>
                    <li><a href="/admin/category">Управління категоріями</a></li>
                    <li>Додати категорію</li>
                </ul>
            </div>


            <h3 class="admin_h3">Додати нову категорію</h3>

            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>


                <div class="login-form">
                    <form action="#" method="post">

                        <p class="admin_p">Назва</p>
                        <input type="text" name="name" placeholder="" value="">

                        <p class="admin_p">Порядковий номер</p>
                        <input type="text" name="sort_order" placeholder="" value="">

                        <p class="admin_p">Статус</p>
                        <select name="status">
                            <option value="1" selected="selected">Відображається</option>
                            <option value="0">Прихована</option>
                        </select>

                        <input type="submit" name="submit" class="admin_submit" value="Зберегти">
                    </form>
                </div>

    </section>
</main>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

