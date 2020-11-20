<?PHP
 session_start();
include "app/views/header.php"; 

?>


  <!-- Product Detail Page Start -->
	<!-- <div class="product-detail">
		<div class="container">
    
         <?php 
             $rows=$data['products'];
            // echo "<br>". $rows['key']->product_id."<br>";
            
           // print_r($rows);
            foreach($rows as $row)
            {
              //echo "<br>". $row->product_id."<br>";
           if ($row->product_id == $_GET['product_id']){
              $id = $row->product_id;
            $mainimageURl = 'http://localhost:81/Ecom-store-project/app/assets/images/'.$row->product_main_image;
          ?>
			<div class="product-detail-left">
				<div class="sp-loading">
          <img src="/Ecom-store-project/app/assets/images/sp-loading.gif">
					تحميل الصورة
				</div>
			 <div class="sp-wrap">
        <a href='<?php  echo  $mainimageURl ?>'><img src='<?php echo $mainimageURl ?>' alt=""></a>
        <?php
            $imges = $row->product_images;
            $clean_url=rtrim($imges,',');
            $clean_url=explode(',',$clean_url);
            foreach($clean_url as $part){
            $product_images='http://localhost:81/Ecom-store-project/app/assets/images/'.$part;
            echo "<a href='$product_images'><img src='  $product_images'></a>"
            ;}?> 
				</div>
			</div>
			<div class="product-detail-right">
      
			<h3><?php  echo $row->product_short_desc ?></h3> 
				<h5><b>السعر : </b> <i class="fas fa-dollar-sign"></i> $ <?php  echo $row->product_price ?></h5>
				<h5><b>العلامة التجارية : </b>  <?php  echo $row->brand_name ?></h5>
				<h5><b>اللون : </b><?php  echo $row->color_name ?></h5>
				<h5><b>متوفر : </b> <?php if($row->is_active==1)  echo "نعم"; else echo "لا"  ?></h5></h5> -->
        <!-- <a  class="Wishlist addtocart" data-tip="Add to Wishlist" data-id='<?= $id; ?>' ><i class="fa fa-heart"></i>  المفضلة</a>
				<a  class="cart buynow" data-id='<?= $id; ?>'><i class="fa fa-shopping-cart"></i>إضافة لسلة</a> -->
        <!-- <?PHP
    //         if(array_key_exists($id, $_SESSION['wish']))
    //         {
    //         echo "<a style='color:blue' data-tip='Add to Wishlist' data-id='$id' id='wishlisticon' class='Wishlist addtocart'><i class='fa fa-heart'></i>  المفضلة</a>";
    //         }
    //         else
    //         {
    //         echo "<a data-tip='Add to Wishlist' data-id='$id' id='wishlisticon' class='Wishlist addtocart'><i class='fa fa-heart'></i>  المفضلة</a>";
    //         }
    //     ?>
    //    <?PHP
    //         if(array_key_exists($id, $_SESSION['cart']))
    //         {
    //         echo "<a style='color:blue' class='cart buynow' data-id='$id' id='shope' ><i class='fa fa-shopping-cart'></i>إضافة لسلة</a>";
    //         }
    //         else
    //         {
    //           echo "<a  class='cart buynow' data-id='$id' id='shope' ><i class='fa fa-shopping-cart'></i>إضافة لسلة</a>";
    //         }
    //     ?>
		// 	</div>
    //   <?php } }?> 
    // </div>
    







	
	<!-- Product Detail Page End -->
  <div class="pd-wrap">
  <div class="container"> 
	        <div class="heading-section">
	            <h2>Product Details</h2>
	        </div>
	        <div class="row">
	        	<div class="col-md-6 ">
	        		<div id="slider" class="owl-carousel product-slider">
						<div class="item">
						  	<img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" />
						</div>
						<div class="item">
						  	<img src="https://i.ytimg.com/vi/PJ_zomNMK_s/maxresdefault.jpg" />
						</div>
						<div class="item">
						  	<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQI6nUmObt62eDkqNSmIvCN_KkQExtbpJmUbVx_eTh_Y3v3r-Jw" />
						</div>
						<div class="item">
						  	<img src="https://i.ytimg.com/vi/PJ_zomNMK_s/maxresdefault.jpg" />
						</div>
						<div class="item">
						  	<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQI6nUmObt62eDkqNSmIvCN_KkQExtbpJmUbVx_eTh_Y3v3r-Jw" />
						</div>
						<div class="item">
						  	<img src="https://i.ytimg.com/vi/PJ_zomNMK_s/maxresdefault.jpg" />
						</div>
						<div class="item">
						  	<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQI6nUmObt62eDkqNSmIvCN_KkQExtbpJmUbVx_eTh_Y3v3r-Jw" />
						</div>
					</div>
					<div id="thumb" class="owl-carousel product-thumb">
						<div class="item">
						  	<img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" />
						</div>
						<div class="item">
						  	<img src="https://i.ytimg.com/vi/PJ_zomNMK_s/maxresdefault.jpg" />
						</div>
						<div class="item">
						  	<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQI6nUmObt62eDkqNSmIvCN_KkQExtbpJmUbVx_eTh_Y3v3r-Jw" />
						</div>
						<div class="item">
						  	<img src="https://i.ytimg.com/vi/PJ_zomNMK_s/maxresdefault.jpg" />
						</div>
						<div class="item">
						  	<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQI6nUmObt62eDkqNSmIvCN_KkQExtbpJmUbVx_eTh_Y3v3r-Jw" />
						</div>
						<div class="item">
						  	<img src="https://i.ytimg.com/vi/PJ_zomNMK_s/maxresdefault.jpg" />
						</div>
						<div class="item">
						  	<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQI6nUmObt62eDkqNSmIvCN_KkQExtbpJmUbVx_eTh_Y3v3r-Jw" />
						</div>
					</div>
	        	</div>
	        	<div class="col-md-6">
	        		<div class="product-dtl">
        				<div class="product-info">
		        			<div class="product-name">Variable Product</div>
		        			<div class="reviews-counter">
								<div class="rate">
								    <input type="radio" id="star5" name="rate" value="5" checked />
								    <label for="star5" title="text">5 stars</label>
								    <input type="radio" id="star4" name="rate" value="4" checked />
								    <label for="star4" title="text">4 stars</label>
								    <input type="radio" id="star3" name="rate" value="3" checked />
								    <label for="star3" title="text">3 stars</label>
								    <input type="radio" id="star2" name="rate" value="2" />
								    <label for="star2" title="text">2 stars</label>
								    <input type="radio" id="star1" name="rate" value="1" />
								    <label for="star1" title="text">1 star</label>
								  </div>
								<span>3 Reviews</span>
							</div>
		        			<div class="product-price-discount"><span>$39.00</span><span class="line-through">$29.00</span></div>
		        		</div>
	        			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	        			<div class="row">
	        				<div class="col-md-6">
	        					<label for="size">Size</label>
								<select id="size" name="size" class="form-control">
									<option>S</option>
									<option>M</option>
									<option>L</option>
									<option>XL</option>
								</select>
	        				</div>
	        				<div class="col-md-6">
	        					<label for="color">Color</label>
								<select id="color" name="color" class="form-control">
									<option>Blue</option>
									<option>Green</option>
									<option>Red</option>
								</select>
	        				</div>
	        			</div>
	        			<div class="product-count">
	        				<label for="size">Quantity</label>
	        				<form action="#" class="display-flex">
							    <div class="qtyminus">-</div>
							    <input type="text" name="quantity" value="1" class="qty">
							    <div class="qtyplus">+</div>
							</form>
							<a href="#" class="round-black-btn">Add to Cart</a>
	        			</div>
	        		</div>
	        	</div>
	        </div>
	        <div class="product-info-tabs">
		        <ul class="nav nav-tabs" id="myTab" role="tablist">
				  	<li class="nav-item">
				    	<a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
				  	</li>
				  	<li class="nav-item">
				    	<a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Reviews (0)</a>
				  	</li>
				</ul>
				<div class="tab-content" id="myTabContent">
				  	<div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
				  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
				  	</div>
				  	<div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
				  		<div class="review-heading">REVIEWS</div>
				  		<p class="mb-20">There are no reviews yet.</p>
				  		<form class="review-form">
		        			<div class="form-group">
			        			<label>Your rating</label>
			        			<div class="reviews-counter">
									<div class="rate">
									    <input type="radio" id="star5" name="rate" value="5" />
									    <label for="star5" title="text">5 stars</label>
									    <input type="radio" id="star4" name="rate" value="4" />
									    <label for="star4" title="text">4 stars</label>
									    <input type="radio" id="star3" name="rate" value="3" />
									    <label for="star3" title="text">3 stars</label>
									    <input type="radio" id="star2" name="rate" value="2" />
									    <label for="star2" title="text">2 stars</label>
									    <input type="radio" id="star1" name="rate" value="1" />
									    <label for="star1" title="text">1 star</label>
									</div>
								</div>
							</div>
		        			<div class="form-group">
			        			<label>Your message</label>
			        			<textarea class="form-control" rows="10"></textarea>
			        		</div>
			        		<div class="row">
				        		<div class="col-md-6">
				        			<div class="form-group">
					        			<input type="text" name="" class="form-control" placeholder="Name*">
					        		</div>
					        	</div>
				        		<div class="col-md-6">
				        			<div class="form-group">
					        			<input type="text" name="" class="form-control" placeholder="Email Id*">
					        		</div>
					        	</div>
					        </div>
					        <button class="round-black-btn">Submit Review</button>
			        	</form>
				  	</div>
				</div>
			</div>
			
			<div style="text-align:center;font-size:14px;padding-bottom:20px;">Get free icon packs for your next project at <a href="http://iiicons.in/" target="_blank" style="color:#ff5e63;font-weight:bold;">www.iiicons.in</a></div>
    </div>
    </div>
    
	
  


  <script>
$(document).ready(function(){
            // add the item to cart
            $('.cart').click(function(){
              var id = $(this).data('id');
            // alert(id);
            $.ajax({
                url: 'main/shopingCart?id='+ id,
                method: 'post',
                cache: false,
                data: {
                  id: id
                },
                success: function(response) {
                  alert(response);
                }
             });
          });
          // add the item to Wishlist
          $('.Wishlist').click(function(){
              var id = $(this).data('id');
            // alert(id);
            $.ajax({
                url: 'main/wishlist?id='+ id,
                method: 'post',
                cache: false,
                data: {
                  id: id
                },
                success: function(response) {
                  alert(response);
                }
             });
          });
})

</script>

  <br><br><br><br><br><br>
  <br><br><br><br><br><br>

  <br><br><br><br><br><br>

<?PHP
include "app/views/footer.php"; 
?>
    <script>
      // $("#sliderShuffle").cycle({
      //   next: '#next',
      //   prev: '#prev'
      // });
      
      // $('.owl-carousel').owlCarousel({
      //   items:4,
      //   loop:true,
      //   margin:15,
      //   autoplay:true,
      //   autoplayTimeout:3000, //3 Second
      //   nav:true,
      //   responsiveClass:true,
      //   responsive:{
      //     0:{
      //       items:1,
      //       nav:true
      //     },
      //     600:{
      //       items:3,
      //       nav:true
      //     },
      //     1000:{
      //       items:4,
      //       nav:true
      //     }
      //   }

      // });

      // $(function(){
      //   $(".topbar ul li").click(function(){
      //     $(".topbar ul li").not(this).find("ul").slideUp();
      //     $(this).find("ul").slideToggle();
      //   });
      //   $(".topbar ul li ul li, productCategories ul li .megamenu").click(function(e){
      //     e.stopPropagation();	
      //   });
      //   $(".productCategories ul li").click(function(){
      //     $(".productCategories ul li").not(this).find(".megamenu").hide();
      //     $(this).find(".megamenu").toggle();
      //   });
      //   $(".otherInfoBody").hide();
      //   $(".otherInfoHandle").click(function(){
      //     $(".otherInfoBody").slideToggle();
      //   });
      //   $(".signBtn").click(function(){
      //     $("body").css("overflow", "hidden");
      //     $(".loginBox").slideDown();
      //   });
      //   $(".closeBtn").click(function(){
      //     $("body").css("overflow", "visible");
      //     $(".loginBox").slideUp();
      //   });
      //   $(".productViewBtn").click(function(e){
      //     e.preventDefault();
      //     $("body").css("overflow", "hidden");
      //     $(".productViewBox").slideDown();
      //   });
      //   $(".productViewBox-closeBtn").click(function(){
      //     $("body").css("overflow", "visible");
      //     $(".productViewBox").slideUp();
      //   });

      //   $(".sp-wrap").smoothproducts();
      // });
    </script>
      
      <script>
$(document).ready(function(){
            // add the item to cart
            $('.cart').click(function(){
              var id = $(this).data('id');
            $.ajax({
                url: 'main/shopingCart?id='+ id,
                method: 'post',
                cache: false,
                data: {
                  id: id
                },
                success: function(response) {
                  if(response == 0){
                   alert("تم اضافة المنتج مسبقاً");
                  }
                  else{
                   alert("تم إضافة المنتج الى السلة  ");
                    document.getElementById("comparison-count").innerHTML=response;
                    document.getElementById("shope").style.color = "blue";
                  }
                }
             });
          });
          // add the item to Wishlist
          $('.Wishlist').click(function(){
              var id = $(this).data('id');
            $.ajax({
                url: 'main/wishlist?id='+ id,
                method: 'post',
                cache: false,
                data: {
                  id: id
                },
                success: function(response) {
                  if(response == 0){
                   alert("تم اضافة المنتج مسبقاً");
                  }
                  else{
                   alert("تم إضافة المنتج الى المضلة  ");
                    document.getElementById("comparison-count").innerHTML=response;
                    document.getElementById("wishlisticon").style.color = "blue";
                  }
                }
             });
          });
})
</script>
  
  </body>
</html>
