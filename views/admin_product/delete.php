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


            <h3 class="admin_h3">Видалити товар #<?php echo $id; ?></h3>


            <p class="admin_p">Ви дійсно хочете видалити цей товар?</p>

            <form method="post">
                <input type="submit" name="submit" value="Видалити" class="admin_submit"/>
            </form>

    </section>
</main>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

