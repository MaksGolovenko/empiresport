<?php include ROOT . '/views/layouts/header.php'; ?>
<main>
    <aside>
        <div class="but_catalog">
            <p>Каталог товарів</p>
        </div>
        <div class="list_catalog">
            <ul>
                <?php foreach($categories as $categoryItem): ?>
                    <li>
                        <a href="/category/<?php echo $categoryItem['id']; ?>">
                            <?php echo $categoryItem['name'];?>
                        </a>
                    </li>
                <?php endforeach; ?>
                                             
            </ul>
            <div class="bottom_bg"></div>
        </div>
    </aside>

    <div class="basket_detail">
        <div class="row">        
            <div class="features_items">
                    <h2>КОШИК</h2>
                    
                    <?php if ($productsInCart): ?>
                        <p>Ви вибрали такі товари:</p>
                        <table class="table">
                            <tr>
                                <th>Код товару</th>
                                <th>Назва</th>
                                <th>Вартість, грн</th>
                                <th>Кількість, шт</th>
                                <th>Видалити</th>
                            </tr>
                            <?php foreach ($products as $product): ?>
                                <tr>
                                    <td><?php echo $product['code'];?></td>
                                    <td class="not_center">
                                        <a href="/product/<?php echo $product['id'];?>">
                                            <?php echo $product['name'];?>
                                        </a>
                                    </td>
                                    <td><?php echo $product['price'];?></td>
                                    <td><?php echo $productsInCart[$product['id']];?></td>  
                                    <td>
                                        <a class="goods_delete" href="/cart/delete/<?php echo $product['id'];?>">
                                            
                                        </a>
                                    </td>                        
                                </tr>
                            <?php endforeach; ?>
                                <tr>
                                    <td colspan="3" class="not_center">Загальна вартість</td>
                                    <td><?php echo $totalPrice;?></td>
                                </tr>
                            
                        </table>
                        
                        <a class="checkout" href="/cart/checkout">Оформити заказ</a>
                    <?php else: ?>
                        <p>Кошик порожній</p>
                        <a class="back_catalog" href="/">Повернутися до товарів</a>
                    <?php endif; ?>

            </div>


        </div>
    </div>
    <div class="clear"></div>  
</main>

<?php include ROOT . '/views/layouts/footer.php'; ?>