<?php include ROOT . "/views/layouts/header.php" ?>
            <main>
                
                <div class="center_one_product">
                    <div class="catalog_product">
                        <p><a href="/">Каталог товарів</a></p>
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
                        
                    </div>

                    <h1><?php echo $product['name']; ?></h1>
                    <div class="wrap_product">
                        <div class="one_product">
                            <img src="<?php echo Product::getImage($product['id']); ?>" alt="мяч"/>
                            <div class="one_product_info  not_hover">
                                <h2><?php echo $product['name']; ?></h2>
                                <p>Код товару:&nbsp;  <span><?php echo $product['code'] ?></span></p>
                                <strong><?php echo $product['price'];?> грн</strong>
                                <?php if($product['price'] == '0') echo "<p>Товар закінкчився</p>";
                                       else echo "<p>Товар є на складі</p>";
                                ?> 
                                
                                <?php if($product['is_new'] == '1')echo "<p>Стан: <span>новий товар</span></p>";?>
                                <p>Виробник:&nbsp; <span><?php echo $product['brand'] ?></span></p>
                                <a href="/cart/add/<?php echo $product['id']?>" class="add-to-cart" 
                                            data-id="<?php echo $product['id']?>">
                                                КУПИТИ
                                </a>
                            </div>
                            <div class="clear"></div>
                            <div class="product_info  not_hover">
                                <h1>Опис товару: </h1>
                                <p>
                                    <?php echo $product['description'] ?>
                                    

                                
                                </p>
                            </div>

                                <!--
                                <div class="goods_foot">
                                    <p>
                                        130 грн
                                        <a href="#">КУПИТИ</a>
                                    </p>
                                </div>-->

                        </div>
                          
                    </div>
                </div>
                <?php include ROOT . "/views/layouts/basket.php" ?>
                <div class="clear"></div>  
            </main>
<?php include ROOT . "/views/layouts/footer.php" ?>