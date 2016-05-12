<?php include ROOT . "/views/layouts/header.php" ?>
    <main>
             <div class="form">
                <ul>
                    <li><a href="/user/login">Вхід</a></li>
                    <li>Реєстрація</li>
                </ul>
                <div class="registration">
                   <form action="#" method="post">
                        <table>
                            <?php if($result): ?>
                                <tr class="reg_end">
                                    <td>Дякуємо за реєстрацію!</td>
                                </tr>
                            <?php else: ?>
                                <tr>
                                    <td>
                                        <input type="text" name="name" placeholder="Ім'я" value="<?php echo $name;?>"/>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                        <input type="email" name="email" placeholder="Email" value="<?php echo $email;?>"/>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                        <input type="password" name="password" placeholder="Пароль"/>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                        <input type="password" name="two_password" placeholder="Повторіть пароль"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="button" type="submit" name="submit" value="Реєстрація"/>
                                    </td>
                                </tr>
                                <?php if(isset($errors) && is_array($errors)): ?>
                                    <?php foreach($errors as $error):?>
                                        <tr class="errors">
                                            <td>- <?php echo $error;?></td>
                                        </tr>
                                     <?php endforeach;?>
                                <?php endif; ?>
                            <?php endif; ?>
                        </table>    
                    
                    </form>
                </div>
             </div>  
     </main>


<?php include ROOT . "/views/layouts/footer.php" ?>