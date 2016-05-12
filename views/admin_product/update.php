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


            <h3 class="admin_h3">Редагувати товари #<?php echo $id; ?></h3>


                <div class="login-form">
                    <form action="#" method="post" enctype="multipart/form-data">

                        <p class="admin_p">Назва товару</p>
                        <input type="text" name="name" placeholder="" value="<?php echo $product['name']; ?>">

                        <p class="admin_p">Артикул</p>
                        <input type="text" name="code" placeholder="" value="<?php echo $product['code']; ?>">

                        <p class="admin_p">Вартість</p>
                        <input type="text" name="price" placeholder="" value="<?php echo $product['price']; ?>">

                        <p class="admin_p">Категорія</p>
                        <select name="category_id">
                            <?php if (is_array($categoriesList)): ?>
                                <?php foreach ($categoriesList as $category): ?>
                                    <option value="<?php echo $category['id']; ?>" 
                                        <?php if ($product['category_id'] == $category['id']) echo ' selected="selected"'; ?>>
                                        <?php echo $category['name']; ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                        

                        <p class="admin_p">Виробник</p>
                        <input type="text" name="brand" placeholder="" value="<?php echo $product['brand']; ?>">

                        <p class="admin_p">Зображення товару</p>
                        <img src="<?php echo Product::getImage($product['id']); ?>" width="200" height="250" alt="" />
                        <input type="file" class="input_file" name="image" placeholder="" value="<?php echo $product['image']; ?>">

                        <p class="admin_p">Детальний опис</p>
                        <textarea name="description"><?php echo $product['description']; ?></textarea>
                        

                        <p class="admin_p">Наявність на складі</p>
                        <select name="availability">
                            <option value="1" <?php if ($product['availability'] == 1) echo ' selected="selected"'; ?>>Так</option>
                            <option value="0" <?php if ($product['availability'] == 0) echo ' selected="selected"'; ?>>Ні</option>
                        </select>
                        

                        <p class="admin_p">Новинка</p>
                        <select name="is_new">
                            <option value="1" <?php if ($product['is_new'] == 1) echo ' selected="selected"'; ?>>Так</option>
                            <option value="0" <?php if ($product['is_new'] == 0) echo ' selected="selected"'; ?>>Ні</option>
                        </select>

                        <p class="admin_p">Рекомендовані</p>
                        <select name="is_recommended">
                            <option value="1" <?php if ($product['is_recommended'] == 1) echo ' selected="selected"'; ?>>Так</option>
                            <option value="0" <?php if ($product['is_recommended'] == 0) echo ' selected="selected"'; ?>>Ні</option>
                        </select>


                        <p class="admin_p">Статус</p>
                        <select name="status">
                            <option value="1" <?php if ($product['status'] == 1) echo ' selected="selected"'; ?>>Відображається</option>
                            <option value="0" <?php if ($product['status'] == 0) echo ' selected="selected"'; ?>>Прихований</option>
                        </select>

                        
                        <input type="submit" name="submit" class="admin_submit" value="Зберегти">

                    </form>
                </div>


    </section>
</main>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

