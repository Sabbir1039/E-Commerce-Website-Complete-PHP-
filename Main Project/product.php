<?php

function fun($productid,$productname,$productprice,$productimg,$notavailable){
    $element="
  <div class='col-lg-3 col-md-6 col-sm-12' style='padding-bottom: 30px;'>
  <div id='message'></div>
          <form class='form-submit' action='product_show.php' method='post'>
            <div class='back-shadow'>
              <div class='text-block'>
                <h4>$notavailable</h4>
              </div>
              <div><img class='pro-img' src='$productimg'></div>

              <h5>$productname</h5>
              <h6>
                <i class='fas fa-star'></i>
                <i class='fas fa-star'></i>
                <i class='fas fa-star'></i>
                <i class='fas fa-star'></i>
                <i class='fas fa-star-half-alt'></i>
              </h6>
              <h6><span class='price'>$$productprice</span></h6>
              <button class='btn btn-info addItemBtn' type='submit' name='add'>Add to Cart <i class='fas fa-shopping-cart'></i></button>
              <input type='hidden' class='p_id' value='$productid'>
              <input type='hidden' class='p_name' value='$productname'>
              <input type='hidden' class='p_price' value='$productprice'>
              <input type='hidden' class='p_image' value='$productimg'>
            </div>
          </form>
        </div>";

  echo $element;
  }

 ?>
