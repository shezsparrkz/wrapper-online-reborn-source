(function(a) {
  a(document).on("click", '[data-action="upsell-freetrial"]', function(f) {
    var d = a(this),
      c = a(this).data("hook"),
      b = false;
    f.preventDefault();
    switch (c) {
      case "unlock":
        b = "#trial-unlock-overlay";
        break;
      case "expired":
        b = "#trial-expired-overlay";
        break;
      case "biz-content":
        b = "#trial-biz-content-overlay";
        break
    }
    if (b && a(b).length > 0) {
      a(b).modal()
    }
  })
})(jQuery);