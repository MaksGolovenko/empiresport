<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<main>
    <section>

            <div class="breadcrumbs">
                <ul class="breadcrumb">
                    <li><a href="/admin">Адмін панель</a></li>
                    <li><a href="/admin/product">Управління товарами</a></li>
                    <li class="active">Редагувати товари</li>
                </ul>
            </div>


            <h3 class="admin_h3">Додати новий товар</h3>


            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>


                <div class="login-form">
                    <form action="#" method="post" enctype="multipart/form-data">

                        <p class="admin_p">Назва товару</p>
                        <input type="text" name="name" placeholder="" value="">

                        <p class="admin_p">Артикул</p>
                        <input type="text" name="code" placeholder="" value="">

                        <p class="admin_p">Вартість</p>
                        <input type="text" name="price" placeholder="" value="">

                        <p class="admin_p">Категорія</p>
                        <select name="category_id">
                            <?php if (is_array($categoriesList)): ?>
                                <?php foreach ($categoriesList as $category): ?>
                                    <option value="<?php echo $category['id']; ?>">
                                        <?php echo $category['name']; ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>

                        <p class="admin_p">Виробник</p>
                        <input type="text" name="brand" placeholder="" value="">

                        <p class="admin_p">Зображення товару</p>
                        <input type="file" name="image" placeholder="" value="">

                        <p class="admin_p">Детальний опис</p>
                        <textarea name="description"></textarea>

                        <p class="admin_p">Наявність на складі</p>
                        <select name="availability">
                            <option value="1" selected="selected">Так</option>
                            <option value="0">Ні</option>
                        </select>

                        <p class="admin_p">Новинка</p>
                        <select name="is_new">
                            <option value="1" selected="selected">Так</option>
                            <option value="0">Ні</option>
                        </select>

                        <p class="admin_p">Рекомендовані</p>
                        <select name="is_recommended">
                            <option value="1" selected="selected">Так</option>
                            <option value="0">Ні</option>
                        </select>

                        <p class="admin_p">Статус</p>
                        <select name="status">
                            <option value="1" selected="selected">Відображається</option>
                            <option value="0">Прихований</option>
                        </select>

                        <input type="submit" name="submit" class="admin_submit" value="Зберегти">

                    </form>
                </div>
    </section>
</main>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

