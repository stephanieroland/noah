<?php
/*
Part of the code for the article "Use Ajax and PHP to Build Your Mailing List"
by Aarron Walter (aarron@aarronwalter.com)
http://www.sitepoint.com/article/use-ajax-php-build-mailing-list
*/
require_once("inc/storeAddress.php");
?>  
<script type="text/javascript" src="js/prototype.js"></script>
    <script type="text/javascript" src="js/mailingList.js"></script>
<!-- Content should always be inside "article.order-details". Note hidden inputs with "value" equals to product name being ordered and total cost of purchase. -->
<article class="order-details">
  <div class="order-totals">
    <div class="product-image">
      <img src="ajax/img/order02.jpg" alt="Oculus Touch">
    </div>
    <div class="order-totals-detail">
      <h2 class="product-title">Oculus Touch</h2>
      <input type="hidden" name="product_name" value="Oculus Touch">
      <div class="order-quantity">
        <div class="count-input">
          <a class="incr-btn" data-action="decrease" href="#">–</a>
          <input class="quantity" type="text" value="1">
          <a class="incr-btn" data-action="increase" href="#">+</a>
        </div>
        <span>&times;</span>
        <span class="price">$<i>143.00</i></span>
      </div>

      <h4 class="total-cost"><span class="text-thin">Total costs:</span> $<i>143.00</i></h4>
      <input type="hidden" name="total_cost" value="$143.00">
    </div>
  </div>
  <hr>
  <div class="order-form">
      
      <form id="addressForm" action="oculus_touch.php" method="get">
    <div class="row">
      <div class="col-sm-6">
        <div class="form-element">
          <input type="text" class="form-control" name="full_name" placeholder="Full Name" required>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-element">
          <input type="text" class="form-control" name="address" placeholder="Email" required>
        </div>
      </div>
    </div><!-- .row -->
    <div class="row">
      <div class="col-sm-6">
        <div class="form-element form-select">
          <select class="form-control" name="country">
            <option>Country</option>
            <option>Australia</option>
            <option>Germany</option>
            <option>Great Britain</option>
            <option>Switzerland</option>
            <option>USA</option>
          </select>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-element form-select">
          <select class="form-control" name="city">
            <option>City</option>
            <option>Berlin</option>
            <option>Geneva</option>
            <option>London</option>
            <option>New York</option>
            <option>Sydney</option>
          </select>
        </div>
      </div>
    </div><!-- .row -->
    <div class="row">
      <div class="col-sm-6">
        <div class="form-element">
          <input type="text" class="form-control" name="address" placeholder="Address" required>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-element">
          <input type="text" class="form-control" name="zip" placeholder="Zip Code" required>
        </div>
      </div>
    </div><!-- .row -->
    <div class="form-element">
      <textarea rows="8" class="form-control" name="additional_info" placeholder="Additional Info"></textarea>
    </div>
    <button id="place-order" type="submit" class="btn btn-pill btn-primary space-top-none waves-effect waves-light">Place Order</button>
             <p id="response"><?php echo(storeAddress()); ?></p>

      </form>
  </div><!-- .order-form -->
</article><!-- .order-details -->

    <div id="outofstock">
    <h2 class="block-title padding-top-2x space-bottom-1x">
                                         Oh! We seem to be out of stock already.
                                    </h2>
                                     <p class="text-danger"><strong>We apologize for this inconvenience.</strong> <br>
                                         As soon as the new produced kits is available, you'll be informed by email.</p>
    </div>


<script>
     $("#outofstock").hide();
	$("#place-order").on("click", function(e) {
        console.log("coucou");
	   $(".order-form").hide();	
        $("#outofstock").show();	

	}); 
</script>
