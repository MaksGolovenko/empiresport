<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<main class="overall_delete">
    <section>

            <div class="breadcrumbs">
                <ul class="breadcrumb">
                    <li><a href="/admin">Адмін панель</a></li>
                    <li><a href="/admin/order">Управління замовленнями</a></li>
                    <li class="active">Видалити замовлення</li>
                </ul>
            </div>


            <h3 class="admin_h3">Видалити замовлення #<?php echo $id; ?></h3>


            <p class="admin_p">Ви дійсно хочете видалити це замовлення?</p>

            <form method="post">
                <input type="submit" name="submit" value="Видалити" class="admin_submit"/>
            </form>
    </section>
</main>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

