<?php include ROOT . "/views/layouts/header.php" ?>
            <!-- Основний блок -->
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
                <div class="center not_hover">
                    <h1>Рекомендовані</h1>
                    <div class="wrap_product">
                        <?php foreach ($latestProducts as $product): ?>
                            <div class="block_goods">
                                <div class="one_goods">
                                    <a href="/product/<?php echo $product['id'];?>">
                                         <img src="<?php echo Product::getImage($product['id']); ?>" alt="мяч"/>
                                         <span>
                                            <?php echo $product['name'] ?>
                                         </span>
                                    </a>
                                    <div class="goods_foot">
                                        <p>
                                            <?php echo $product['price']?> грн
                                            <a href="/cart/add/<?php echo $product['id']?>" class="add-to-cart" 
                                            data-id="<?php echo $product['id']?>">
                                                КУПИТИ
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?> 
                    </div>
                </div>
                <?php include ROOT . "/views/layouts/basket.php" ?>
                <div class="clear"></div>  
            </main>
<?php include ROOT . "/views/layouts/footer.php" ?>