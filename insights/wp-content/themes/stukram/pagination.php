<?php
function stukram_pagination($pages = '', $range = 2)
{ 
 $showitems = ($range * 2)+1;  

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   

     if(1 != $pages)
     {
        echo "<div class='blogPost-pagination'><div class='blogPost-pagination__wrap'>";
         
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo esc_attr(($paged == $i))? "<a href='#' class='is-active'>".$i."</a>":"<a href='".get_pagenum_link($i)."'>".$i."</a>";
             }
         }
          
        echo "</div></div>\n";
     }
}
?>