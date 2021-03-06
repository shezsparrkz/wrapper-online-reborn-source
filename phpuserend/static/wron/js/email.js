window.emailUtil = (function() {
  function a(d) {
    if (!d.match(/^[^@]{1,64}@[^@]{1,255}$/)) {
      return false
    }
    var f = d.split("@");
    var b = f[0].split(".");
    for (var e = 0; e < b.length; e++) {
      if (!b[e].match(/^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&'*+/=?^_`{|}~\\.-]{0,63})|("[^(\\|")]{0,62}"))$/)) {
        return false
      }
    }
    if (!f[1].match(/^[?[0-9.]+]?$/)) {
      var c = f[1].split(".");
      if (c.length < 2) {
        return false
      }
      for (var e = 0; e < c.length; e++) {
        if (!c[e].match(/^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$/)) {
          return false
        }
      }
    }
    return true
  }
  return {
    isValidFormat: a
  }
}());