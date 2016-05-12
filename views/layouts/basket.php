<div class="basket">
    <h1>Кошик</h1>

        
        
            <a href="/cart">
                <div class="basket_block">
                 
                    <img src="/tamplate/images/basket.png" alt="Кошик"/>
                    <p id="cart-count">
                        <?php if(Cart::countItems() == '0'):?>
                            <?php echo 'Ваш кошик порожній'?>
                        <?php else:?>
                            <?php echo Cart::countItems() . " товарів у кошику"; ?>
                         <?php endif;?>
                    </p>
                  </div>
               </a>

       
         

</div>
