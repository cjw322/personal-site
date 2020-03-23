<button onclick="topFunction()" id="top-btn">&#8593;</button>
<!-- <input onclick="topFunction()" type="image" src="../media/icons/up-arrow.png" id="top-btn" /> -->

<!-- Source: https://html-online.com/articles/dynamic-scroll-back-top-page-button-javascript/ -->
<script>
  $(window).scroll(function() {
    var height = $(window).scrollTop();
    if (height > 100) {
      $('#top-btn').fadeIn();
    } else {
      $('#top-btn').fadeOut();
    }
  });
  $(document).ready(function() {
    $('#top-btn').click(function(event) {
      event.preventDefault();
      $("html, body").animate({
        scrollTop: 0
      }, "slow");
      return false;
    });

  });
</script>