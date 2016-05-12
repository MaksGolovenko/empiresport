<?php

/**
 * Класс Cart
 * Компонент для роботи кошиком
 */
class Cart
{

    /**
     * Додавання товару в кошик (сесію)
     * @param int $id <p>id товара</p>
     * @return integer <p> Кількість товарів в кошику </ п>
     */
    public static function addProduct($id)
    {
        //Наводимо $ id до типу integer
        $id = intval($id);

        // Порожній масив для товарів в кошику
        $productsInCart = array();

        //Якщо в кошику вже є товари (вони зберігаються в сесії)
        if (isset($_SESSION['products'])) {
            //Те заповнимо наш масив товарами
            $productsInCart = $_SESSION['products'];
        }

        //Перевіряємо чи є вже такий товар в кошику 
        if (array_key_exists($id, $productsInCart)) {
            // Якщо такий товар є в кошику, але був доданий ще раз, збільшимо кількість на 1
            $productsInCart[$id] ++;
        } else {
            //Якщо немає, додаємо id нового товару в корзину з кількістю 1
            $productsInCart[$id] = 1;
        }

        // Записуємо масив з товарами в сесію
        $_SESSION['products'] = $productsInCart;

        // Повертаємо кількість товарів в кошику
        return self::countItems();
    }

    /**
     * Підрахунок кількість товарів в кошику (в сесії)
     * @return int <p> Кількість товарів в кошику </ п>
     */
    public static function countItems()
    {
        // Перевірка наявності товарів в кошику
        if (isset($_SESSION['products'])) {
            //Якщо масив з товарами є 
            // Порахуємо і повернемо їх кількість
            $count = 0;
            foreach ($_SESSION['products'] as $id => $quantity) {
                $count = $count + $quantity;
            }
            return $count;
        } else {
            //Якщо товарів немає, повернемо 0
            return 0;
        }
    }

    /**
     * Повертає масив з ідентифікаторами і кількістю товарів в кошику <br/>
     * Якщо товарів немає, повертає false;
     * @return mixed: boolean or array
     */
    public static function getProducts()
    {
        if (isset($_SESSION['products'])) {
            return $_SESSION['products'];
        }
        return false;
    }

    /**
     * Отримати загальну вартість переданих товарів
     * @param array $ products <p> Масив з інформацією про товари </ p>
     * @return integer <p> Загальна вартість </ п>
     */
    public static function getTotalPrice($products)
    {
        // Отримуємо масив з ідентифікаторами і кількістю товарів в кошику
        $productsInCart = self::getProducts();

        // Розраховуємо загальну вартість
        $total = 0;
        if ($productsInCart) {
            // Якщо в кошику не порожньо
            // Проходимо по переданому в метод масиву товарів
            foreach ($products as $item) {
                // Знаходимо загальну вартість: ціна товару * кількість товару
                $total += $item['price'] * $productsInCart[$item['id']];
            }
        }

        return $total;
    }

    /**
     * Очищает корзину
     */
    public static function clear()
    {
        if (isset($_SESSION['products'])) {
            unset($_SESSION['products']);
        }
    }

    /**
     * Видаляє товар із зазначеним id з кошика
     * @param integer $id <p>id товару</p>
     */
    public static function deleteProduct($id)
    {
        // Отримуємо масив з ідентифікаторами і кількістю товарів в кошику
        $productsInCart = self::getProducts();

        // Видаляємо з масиву елемент із зазначеним id
        unset($productsInCart[$id]);

        // Записуємо масив товарів з віддаленим елементом в сесію
        $_SESSION['products'] = $productsInCart;
    }

}
