<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<main class="overall_delete">
    <section>

            <div class="breadcrumbs">
                <ul class="breadcrumb">
                    <li><a href="/admin">Админпанель</a></li>
                    <li><a href="/admin/category">Управление категориями</a></li>
                    <li class="active">Удалить категорию</li>
                </ul>
            </div>


            <h3 class="admin_h3">Удалить категорию #<?php echo $id; ?></h3>


            <p class="admin_p">Вы действительно хотите удалить эту категорию?</p>
            <form method="post">
                <input type="submit" name="submit" value="Удалить" class="admin_submit"/>
            </form>
    </section>
</main>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

