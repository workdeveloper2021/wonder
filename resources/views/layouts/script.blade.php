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
<!-- JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>

<script>
  @if(Session::has('success'))
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true
  }
        toastr.success("{{ session('success') }}");
  @endif

  @if(Session::has('error'))
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true
  }
        toastr.error("{{ session('error') }}");
  @endif

</script>
<script type="text/javascript">
    $(document).on('click','#cart-item',function(){
       getcart();
    })
    $(document).on('click','.remove-to-cart',function(e){
        e.preventDefault();
        var id = $(this).attr('id');
         $.ajax({
            url:"{{ route('deletecart') }}",
            type:'get',
            data:{id:id},
            success:function(res){
               getcart();
            }
        })
       
    })

    function getcart(){
         $.ajax({
            url:"{{ route('getcart') }}",
            type:'get',
            success:function(res){
               $('#cartshow').html(res);
            }
        })
    }
</script>
