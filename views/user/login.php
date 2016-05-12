<?php include ROOT . "/views/layouts/header.php" ?>
    <main>
             <div class="form">
                <ul>
                    <li>Вхід</li>
                    <li><a href="/user/register">Реєстрація</a></li>
                </ul>

                <div class="entrance">
                    <form action="#" method="post"> 
                        <table>
                            <tr>
                                <td>
                                    <input type="text" name="email" placeholder="Логін"/>
                                </td>
                             </tr>
                             <tr>
                                <td>
                                    <input type="password" name="password" placeholder="Пароль"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="button" type="submit" name="submit" value="Вхід"/>
                                </td>
                            </tr>
                            <?php if(isset($errors) && is_array($errors)): ?>
                                    <?php foreach($errors as $error):?>
                                        <tr class="errors">
                                            <td>- <?php echo $error;?></td>
                                        </tr>
                                     <?php endforeach;?>
                            <?php endif; ?>
                        </table>    
                    
                    </form>
                </div> 
             </div>      
     </main>


<?php include ROOT . "/views/layouts/footer.php" ?>