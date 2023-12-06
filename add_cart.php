<?php include_once("header.php"); 
include("hms/include/config.php");?>

<h1>Shopping Cart</h1>
 
<div class="shopping-cart">
 
  <div class="column-labels">
    <label class="product-image">Image</label>
    <label class="product-details">Product</label>
    <label class="product-price">Price</label>
    <label class="product-quantity">Quantity</label>
    <label class="product-removal">Remove</label>
    <label class="product-line-price">Total</label>
  </div>
 
  <!--porduct 1-->
  <div class="product">
    <div class="product-image">
      <img src="hms/images/bananabread.jpg">
    </div>
    <div class="product-details">
      <div class="product-title">banana bread</div>
      
    </div>
    <div class="product-price">100</div>
    <div class="product-quantity">
      <input type="number" value="2" min="1">
    </div>
    <div class="product-removal">
      <button class="remove-product">
        Remove
      </button>
    </div>
    <div class="product-line-price">100</div>
  </div>
 
  <!--product 2-->
  <div class="product">
    <div class="product-image">
      <img src="hms/images/Brunch.jpg">
    </div>
    <div class="product-details">
      <div class="product-title">Brunch</div>

    </div>
    <div class="product-price">150</div>
    <div class="product-quantity">
      <input type="number" value="1" min="1">
    </div>
    <div class="product-removal">
      <button class="remove-product">
        Remove
      </button>
    </div>
    <div class="product-line-price">150</div>
  </div>

  <!--product 3-->
  <div class="product">
    <div class="product-image">
      <img src="hms/images/burger.jpg">
    </div>
    <div class="product-details">
      <div class="product-title">Burger</div>

    </div>
    <div class="product-price">200</div>
    <div class="product-quantity">
      <input type="number" value="1" min="1">
    </div>
    <div class="product-removal">
      <button class="remove-product">
        Remove
      </button>
    </div>
    <div class="product-line-price">200</div>
  </div>

  <!--product 4-->
  <div class="product">
    <div class="product-image">
      <img src="hms/images/tea.jpg">
    </div>
    <div class="product-details">
      <div class="product-title">Tea</div>

    </div>
    <div class="product-price">80</div>
    <div class="product-quantity">
      <input type="number" value="1" min="1">
    </div>
    <div class="product-removal">
      <button class="remove-product">
        Remove
      </button>
    </div>
    <div class="product-line-price">80</div>
  </div>


 
  <div class="totals">
    <div class="totals-item">
      <label>Subtotal</label>
      <div class="totals-value" id="cart-subtotal">00</div>
    </div>
    
       
      <button class="checkout" onclick="document.location='checkout.php'"></a>Checkout</button>
 
</div>

