<?php

/**
 * Created by PhpStorm.
 * User: Максим
 * Date: 11.04.2016
 * Time: 17:00
 */
class News {

    public static function getNewsItemById($id){
        //запрос к БД
       
        
        $id = intval($id);
        
        if($id){
             
            $db = Db::getConnection();     
              
            $result = $db->query("SELECT * FROM pages WHERE id=". $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);

            $newsItem = $result->fetch();              
                 
            return $newsItem;    
        }
    }


    public static function getNewsList() {
        
        $db = Db::getConnection();
            
        $newsList = array();
        
        $result = $db->query("SELECT id, title, date, shotr_content"
                                . " FROM pages "
                                . "ORDER BY date DESC " 
                                . "LIMIT 10;");
                  
         $i = 0;
         while($row = $result->fetch()) {
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['title'] = $row['title'];
            $newsList[$i]['date'] = $row['date'];
            $newsList[$i]['shotr_content'] = $row['shotr_content'];
            $i++;
         }                      
                 
         return $newsList;                       
                     
    } 




}