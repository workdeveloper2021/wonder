<ul class="shopping-cart-items">
    <p style="font-weight: bold;" class="pb-4">Shopping Cart</p>
 <?php 
 $carttotal = 0;
 if(count($cart) > 0) {
    foreach ($cart as $key => $product) {
     $carttotal += $product['price'];
 ?>     
  <li class="clearfix">
    <div class="row">
        <div class="col-4">
            <?php if($product['product_type'] =='print'){ ?>
            <img src="{{ URL::to('/') }}/image/printtext.jpg" alt="item1" class="img-fluid" />
            <?php }else{ ?>
            <img src="{{ URL::to('/') }}/{{ $product['products']['image']}}" alt="item1" class="img-fluid" />
            <?php } ?>
        </div>
        <div class="col-8" style="position: relative;">
            <span class="item-name">{{ substr($product['products']['title'], 0,20) }}...</span>
            <span class="item-price">${{ $product['price']}}</span>
            <a href="javascript:void(0);" class="remove-to-cart" id="{{$product['id']}}"><i class="fas fa-times" style="position: absolute; top: 0; right: 0; font-size: 12px; background: #4d6b7c; border-radius: 50%; padding: 5px ; color: #fff;" ></i></a>
        </div>
    </div>
  </li>
<?php } }else{ ?>  
<li class="clearfix">
    <div class="row">
         <span class="item-name"style="color: red;margin-left: 17px">Cart Empty</span>
    </div>
</li> 

<?php } ?>
    
  <li class="clearfix">
    <div class="row">
        <div class="col-4">
            <p style="text-align: center;font-weight: bold;" class="pb-2">Subtotal</p>
        </div>
        <div class="col-8 text-right">
            <span class="item-price">${{$carttotal }}</span>
        </div>
    </div>
  </li>
</ul>