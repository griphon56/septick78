<?php
  $a_product = getProductHitSales();
?>
<div class="container-fluid bootstrap-slider-product-hit-sales">
  <div
    class="container carousel slide"
    id="product-hit-sales"
    data-ride="carousel"
    data-interval="false"
  >

    <a class="carousel-control-prev slider-product-control-prev" href="#product-hit-sales" data-slide="prev">
      <span class="slider-product-control-prev-icon">
        <img class="icon-arrow" src="<?=VIEW?>img/productView/left-arrow.png" alt="">
      </span>
    </a>
    <a class="carousel-control-next slider-product-control-next" href="#product-hit-sales" data-slide="next">
      <span class="slider-product-control-next-icon">
        <img class="icon-arrow" src="<?=VIEW?>img/productView/right-arrow.png" alt="">
      </span>
    </a>

    <ol class="carousel-indicators">
      <?php
      for($i=0;$i<abs(count($a_product)/4);$i++)
      {
        $i_item = $i+1;
        if($i==0)
          echo('<li data-target="#product-hit-sales" data-slide-to="'.$i.'"class="active slider-product-indicators">');
        else
          echo('<li data-target="#product-hit-sales" data-slide-to="'.$i.'"class="slider-product-indicators">');
        echo('<span class="indicators-text">'.$i_item.'</span>');
        echo('</li>');
      }
      ?>
    </ol>

    <div class="hr-blue"></div>

    <div class="carousel-inner">

      <?php
      $i_count = 0;
      foreach($a_product as $a_item)
      {
        if($i_count==0)
        {
          echo('<div class="carousel-item active">');
            echo('<div class="row product-list-row">');
        }

        $i_count += 1;
        if($i_count == 5)
        {
          $i_count=1;
          echo('<div class="carousel-item">');
            echo('<div class="row product-list-row">');
        }

        echo('<div class="col-md-3 col-sm-6 m-product-list">');
          echo('<div class="product-item">');
            echo('<ul>');
              echo('<li class="product-item-img"><a href="product&k_product='.$a_item['k_product'].'"><img src="'.VIEW.'upload_img/product/'.$a_item['img'].'" alt=""></a></li>');
              echo('<li class="product-item-title">');
                echo('<h4><a href="product&k_product='.$a_item['k_product'].'">'.$a_item['s_name'].'</a></h4>');
              echo('</li>');
              echo('<li class="product-item-box">');
                echo('<div class="container">');
                  echo('<div class="row">');
                    echo('<div class="product-item-cost col-9">');

                      if($a_item['i_discount'])
                      {
                        echo('<p class="price"><span class="js-price-active">'.number_format($a_item['i_price'], 0, '.', ' ').'</span> руб.</p>');
                        echo('<p class="discount">'.number_format($a_item['i_discount'], 0, '.', ' ').' руб.</p>');
                      }
                      else
                      {
                        echo ('<p class="price-active"><span class="js-price-active">'.number_format($a_item['i_price'], 0, '.', ' ').'</span> руб.</p>');
                      }
                    echo('</div>');
                    echo('<div class="col-3 add-cart-box">');
                      echo('<a href="#" onclick="add_to_cart(this); return false;" name="'.$a_item['k_product'].'" class="add-to-cart">
                              <img src="'.VIEW.'img/productView/shopping-cart.png" alt="">
                            </a>');
                    echo('</div>');
                  echo('</div>');
                echo('</div>');
              echo('</li>');
            echo('</ul>');
          echo('</div>');
        echo('</div>');

        if($i_count == 4)
        {
          echo('</div>');
          echo('</div>');
        }
      }
      ?>
    </div>
  </div>
</div>