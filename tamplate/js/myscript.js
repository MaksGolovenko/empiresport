$(document).ready(function() {

function list_menu (){
    var list_one = $('.list_catalog>ul>li');
    var list_two = $(".nested_list > ul > li");
   
    $('.list_catalog').bind("mouseover", function(){
       
        list_one.mouseover(function(){
            $attr = $(this).attr("class");
            if($attr != "hover_li"){
                list_one.removeClass("hover_li");
                $('.nested_list').css({"display" : "none"}).removeClass('two_hover');
                
                if($('.free_hover')){
                    $(".free_hover").removeClass('free_hover').css({"display" : "none"})
                }
               
            }   
                
                $(this).addClass("hover_li"); 
                $('.hover_li>div>div').css({"display" : "block"}).addClass("two_hover");
                
        });
        
        list_two.mouseover(function(){
             $attr2 = $(this).attr("class");
                if($attr != "two_hover"){
                    list_two.removeClass("two_hover");
                    $('.nested_list_two').css({"display" : "none"}).removeClass('free_hover');
                }   
                    $(this).addClass("two_hover"); 
                    $('.two_hover div').css({"display" : "block"}).addClass("free_hover");
        });

     });
     
     $(".not_hover").mouseover(function(){
                
                list_one.removeClass("hover_li");
                $('.nested_list').css({"display" : "none"}).removeClass('two_hover');
                
                if($('.free_hover')){
                    $(".free_hover").removeClass('free_hover').css({"display" : "none"})
                }
               
     
     });
 
    var heightList = $(".list_catalog").height();
    $(".wrapper_nested_list").height(heightList);
         
}   

function list_menu_one_product (){
    $(".catalog_product").mousemove(function(){
        $(".catalog_product .list_catalog").css({"display" : "block"});
    });
    
    $(".not_hover").mouseover(function(){
        $(".catalog_product .list_catalog").css({"display" : "none"});
     
     });
    
    
}

function register_hover() {
    $('.form ul li').click(function (){
        $click = $(this).attr("id");
        $non_hover = $("."+$click);
        if($non_hover.attr('class') == $click+ " form_none"){
            $(".form div").removeClass('form_hover').addClass("form_none")
            $("."+$click).removeClass('form_none').addClass("form_hover");
        }
        
    })
}

function entrance_block_hidden () {
    

    $(".registr p a").mouseenter(function(){
       $(".registr_hidden").css({'display' : "block"});
    });
    
    $(".registr p a").mouseleave(function(){

       $(".registr_hidden").css({'display' : "none"});
    });
    
    $(".registr_hidden").mouseenter(function(){
       $(".registr_hidden").css({'display' : "block"});
    });
    
    $('.registr_hidden').mouseleave(function(){
        $(".registr_hidden").css({'display' : "none"});
   
    });
    
    
}

// Добавлення товарів асинхроним запитом
function ajaxBasket () {
    $(".add-to-cart").click(function () {
        var id = $(this).attr("data-id");
        $.post("/cart/addAjax/"+id, {}, function (data) {
            $("#cart-count").html(data + " товарів в кошику");
        });
        
        return false;
    });    
}




//register_hover ();
//list_menu();


ajaxBasket ();

entrance_block_hidden ();

list_menu_one_product ();
    
    
});