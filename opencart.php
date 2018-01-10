<?php
    $categories = $this->model_catalog_category->getCategories(); 

    echo "<ul class='first-level'>";
    foreach($categories as $category){
        echo "<li>";
        
        echo "<h3><a href='".$this->url->link('product/category', 'path=' .  $category['category_id'])."'>".$category['name']."</a></h3>";

        $subcategories = $this->model_catalog_category->getCategories($category['category_id']);
        
        echo "<div class='sub-category'><ul class='second-level'>";
        foreach( $subcategories as $subcategory){

            echo "<li><a href='".$this->url->link('product/category', 'path=' .  $subcategory['category_id'])."'>".$subcategory['name']."</a></li>";
            
            echo "</li>";
            
        }
        echo "</ul></div>";
    }
    echo "</ul>";
?>