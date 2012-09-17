(function($) {
  $(function() {

    // add class "num" to number only cells
    $("td")
      .filter(function() {
        return parseFloat($(this).html()) ||
          parseInt($(this).html()) === 0;})
      .addClass('num');

    // resize images
    function resizeImages(elem, parent) {
      var parent_width = parent.width()
      elem.each(function() {
        if($(this).width() > parent_width || $(this).hasClass("resized")) {
          $(this)
            .height(parent_width / $(this).width() * $(this).height())
            .width(parent_width)
            .addClass("resized");}});
    }
    resizeImages($("article img"), $("article"));
    $(window).load(function() {
      resizeImages($("article img"), $("article"));
    });
    $(window).resize(function() {
      resizeImages($("article img"), $("article"));
    });
    
  });
})(jQuery);
