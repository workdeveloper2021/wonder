<script type="text/javascript">
(function(){
 $(document).click(function() {
    var $item = $(".shopping-cart");
    if ($item.hasClass("active")) {
      $item.removeClass("active");
    }
  });
  
  $('.shopping-cart').each(function() {
    var delay = $(this).index() * 50 + 'ms';
    $(this).css({
        '-webkit-transition-delay': delay,
        '-moz-transition-delay': delay,
        '-o-transition-delay': delay,
        'transition-delay': delay
    });
  });
  $('#cart').click(function(e) {
    e.stopPropagation();
    $(".shopping-cart").toggleClass("active");
  });
  
  $('#addtocart').click(function(e) {
    e.stopPropagation();
    $(".shopping-cart").toggleClass("active");
  });


  
})();
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
