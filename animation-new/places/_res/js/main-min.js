$(".notification.noJs").remove(); $(document).ready(function () { function e() { var e = $("#page"); if (nextSlide == "starter") { var t = $(".btn:last-of-type", e).attr("href"); $.get(t, function (e) { $(e).insertBefore("#car"); nextSlide = $(".btn", e).attr("href"); navPosition = $(".btn", e).attr("data-destination"); navMarker = $(".btn", e).attr("data-marker"); if ($(".slide").length >= 3) { $(".slide:first-of-type").remove(); $(".slide").each(function (e) { if (e == 0) { firstSlideHeight = $(this).outerHeight() } }); var t = $(window).height(); $(window).scrollTop(firstSlideHeight - t); $("#page").removeClass("start") } $("#car").removeClass("moving gone"); $(e).find("a.twitter-share-button").each(function () { var e = new twttr.TweetButton($(this).get(0)); e.render() }) }); navPosition = parseInt(navPosition, 10); $("nav ul li").removeClass("active"); $("nav ul li").each(function (e) { if (e == navPosition) { $(this).addClass("active"); return false } }); $(".mapMarkers li").removeClass("active"); $(".mapMarkers li").each(function () { var e = $(this).attr("data-destination"); if (e == navMarker) { $(this).addClass("active") } }); return false } else { if (nextSlide == "" || nextSlide == undefined) { return false } else { var t = nextSlide; $("h2.location").fadeOut(); if (nextSlide == "highway-one-roadtrip/24LongBeach.html") { $("#car .hair").fadeIn() } if (nextSlide == "highway-one-roadtrip/25SanDiego.html") { $("#car img").fadeOut(function () { $(this).attr("src", "http://www.exsus.com/highway-one-roadtrip/_res/images/asset_safariTruck.png").attr("width", "226").attr("height", "357"); $(this).fadeIn() }); $("#car .exhaust").fadeOut(); $("#car .hair").fadeOut() } else if (nextSlide == "highway-one-roadtrip/26CoronadoBridge.html") { $("#car img").fadeOut(function () { $(this).attr("src", "http://www.exsus.com/highway-one-roadtrip/_res/images/asset_car.png").attr("width", "160").attr("height", "301"); $(this).fadeIn() }); $("#car .exhaust").fadeIn() } $.get(t, function (e) { $(e).insertBefore("#car"); nextSlide = $(".btn", e).attr("href"); navPosition = $(".btn", e).attr("data-destination"); navMarker = $(".btn", e).attr("data-marker"); if ($(".slide").length >= 3) { $(".slide:first-of-type").remove(); $(".slide").each(function (e) { if (e == 0) { firstSlideHeight = $(this).outerHeight() } }); var t = $(window).height(); $(window).scrollTop(firstSlideHeight - t); $("#page").removeClass("start") } $("#car").removeClass("moving gone") }); navPosition = parseInt(navPosition, 10); $("nav ul li").removeClass("active"); $("nav ul li").each(function (e) { if (e == navPosition) { $(this).addClass("active"); return false } }); $(".mapMarkers li").removeClass("active"); $(".mapMarkers li").each(function () { var e = $(this).attr("data-destination"); if (e == navMarker) { $(this).addClass("active"); return false } }); return false } } } nextSlide = "starter"; navPosition = "1"; navMarker = "1"; $("#page nav").fadeIn(); if ($("html").hasClass("ie9") || $("html").hasClass("ie8") || $("html").hasClass("ie7") || $("html").hasClass("ie6")) { $("body").prepend("<div class='notification browsers'><div class='content'><h2>We're sorry!</h2><p>Afraid you'll need a newer browser to view this site at its best.</p><p>Please upgrade to the latest <a href='https://www.google.com/intl/en/chrome/browser/'>Chrome</a>, <a href='http://support.apple.com/kb/dl1531'>Safari</a> or <a href='http://www.mozilla.org/en-US/firefox/new/'>Firefox</a> browsers and we'll be back in business.</p></div></div>") } var t = $(this).scrollTop(); if (t >= 2200) { $(".title").addClass("noStar"); $("p.helper").remove(); if (t >= 3550) { $(".title").addClass("static") } } if ($("body").height() <= $(window).height() + t) { e() } $("#car").show(); if ($("#page").hasClass("start") && t <= 4799) { $("#car").addClass("hidden") } if ($("html").hasClass("ie9") || $("html").hasClass("ie8") || $("html").hasClass("ie7") || $("html").hasClass("ie6")) { } else { function n() { $("body").addClass("appleTracker"); $("p.helper").remove() } function r() { if ($("body").hasClass("appleTracker")) { } else { var t = $(window).scrollTop(); $("p.helper").remove(); if ($("#page").hasClass("start") && t >= 2200) { $(".title").addClass("noStar"); if ($("#page").hasClass("start") && t >= 3550) { $(".title").addClass("static") } else { $(".title").removeClass("static") } } else { $(".title").removeClass("noStar") } if ($("#page").hasClass("start") && t >= 4800) { $("#car").removeClass("hidden"); $("#car").addClass("moving pastFold") } if ($("#car").hasClass("pastFold")) { if ($("#page").hasClass("start") && t <= 4799) { $("#car").addClass("gone") } } if ($(".slide.coronado").length != 0 && $(".slide.sanDiegoZoo").length != 0) { if (t <= 1900) { var n = $("#car img").attr("src"); if (n != "http://www.exsus.com/highway-one-roadtrip/_res/images/asset_safariTruck.png") { $("#car img").fadeOut(function () { $(this).attr("src", "http://www.exsus.com/highway-one-roadtrip/_res/images/asset_safariTruck.png").attr("width", "226").attr("height", "357"); $(this).fadeIn() }); $("#car .exhaust").fadeOut() } } else { var n = $("#car img").attr("src"); if (n != "http://www.exsus.com/highway-one-roadtrip/_res/images/asset_car.png") { $("#car img").fadeOut(function () { $(this).attr("src", "http://www.exsus.com/highway-one-roadtrip/_res/images/asset_car.png").attr("width", "160").attr("height", "301"); $(this).fadeIn() }); $("#car .exhaust").fadeIn() } } } if ($(".slide.longBeach").length != 0 && $(".slide.sanDiegoZoo").length != 0) { if (t <= 3900) { var n = $("#car img").attr("src"); if (n != "http://www.exsus.com/highway-one-roadtrip/_res/images/asset_car.png") { $("#car img").fadeOut(function () { $(this).attr("src", "http://www.exsus.com/highway-one-roadtrip/_res/images/asset_car.png").attr("width", "160").attr("height", "301"); $(this).fadeIn(); $("#car .hair").fadeIn() }); $("#car .exhaust").fadeIn() } } else { $("#car .hair").fadeOut(function () { var e = $("#car img").attr("src"); if (e != "http://www.exsus.com/highway-one-roadtrip/_res/images/asset_safariTruck.png") { $("#car img").fadeOut(function () { $(this).attr("src", "http://www.exsus.com/highway-one-roadtrip/_res/images/asset_safariTruck.png").attr("width", "226").attr("height", "357"); $(this).fadeIn() }); $("#car .exhaust").fadeOut() } }) } } if ($(".slide.veniceBeach").length != 0 && $(".slide.longBeach").length != 0) { if (t <= 1900) { $("#car .hair").fadeOut() } else { $("#car .hair").fadeIn() } } if ($("#page").hasClass("navigating")) { } else { var r = $(window).height(); r = parseInt(r, 10); t = parseInt(t, 10); if ($("body").height() <= $(window).height() + t - 0) { e(); return false } } if ($(".slide:first-of-type").hasClass("home")) { if (t >= 6500 && t <= 7e3) { $("#car .radioBubbles li.alpha").fadeIn().addClass("shown") } else { $("#car .radioBubbles li").fadeOut().removeClass("shown") } } if ($(".slide:first-of-type").hasClass("eureka")) { if (t >= 500 && t <= 1e3) { $("#car .radioBubbles li.alpha").fadeIn().addClass("shown") } else if (t >= 3500 && t <= 4e3) { $("#car .radioBubbles li.beta").fadeIn().addClass("shown") } else { $("#car .radioBubbles li").fadeOut().removeClass("shown") } } if ($(".slide:first-of-type").hasClass("hyperion")) { if (t >= 300 && t <= 800) { $("#car .radioBubbles li.beta").fadeIn().addClass("shown") } else if (t >= 4400 && t <= 4900) { $("#car .radioBubbles li.gamma").fadeIn().addClass("shown") } else { $("#car .radioBubbles li").fadeOut().removeClass("shown") } } if ($(".slide:first-of-type").hasClass("chandelierTree")) { if (t >= 1 && t <= 500) { $("#car .radioBubbles li.gamma").fadeIn().addClass("shown") } else if (t >= 4900 && t <= 5400) { $("#car .radioBubbles li.delta").fadeIn().addClass("shown") } else { $("#car .radioBubbles li").fadeOut().removeClass("shown") } } if ($(".slide:first-of-type").hasClass("fortBraggTown")) { if (t >= 1300 && t <= 1800) { $("#car .radioBubbles li.delta").fadeIn().addClass("shown") } else if (t >= 3300 && t <= 3800) { } else if (t >= 4600 && t <= 5100) { } else { $("#car .radioBubbles li").fadeOut().removeClass("shown") } } if ($(".slide:first-of-type").hasClass("fortBraggTrain")) { if (t >= 500 && t <= 1e3) { } else if (t >= 1800 && t <= 2300) { } else { $("#car .radioBubbles li").fadeOut().removeClass("shown") } } if ($(".slide:first-of-type").hasClass("santaRosa")) { if (t >= 4100 && t <= 4600) { } else { $("#car .radioBubbles li").fadeOut().removeClass("shown") } } if ($(".slide:first-of-type").hasClass("part1")) { if (t >= 1300 && t <= 1800) { } else if (t >= 3500 && t <= 4e3) { $("#car .radioBubbles li.eta").fadeIn().addClass("shown") } else if (t >= 5500 && t <= 6e3) { $("#car .radioBubbles li.iota").fadeIn().addClass("shown") } else { $("#car .radioBubbles li").fadeOut().removeClass("shown") } } if ($(".slide:first-of-type").hasClass("part2")) { if (t >= 100 && t <= 600) { $("#car .radioBubbles li.eta").fadeIn().addClass("shown") } else if (t >= 2100 && t <= 2600) { $("#car .radioBubbles li.iota").fadeIn().addClass("shown") } else if (t >= 4600 && t <= 5100) { } else { $("#car .radioBubbles li").fadeOut().removeClass("shown") } } if ($(".slide:first-of-type").hasClass("chinaTown")) { if (t >= 1200 && t <= 1700) { } else if (t >= 2700 && t <= 3200) { $("#car .radioBubbles li.lambda").fadeIn().addClass("shown") } else { $("#car .radioBubbles li").fadeOut().removeClass("shown") } } if ($(".slide:first-of-type").hasClass("santaCruz")) { if (t >= 300 && t <= 800) { $("#car .radioBubbles li.lambda").fadeIn().addClass("shown") } else if (t >= 3100 && t <= 3600) { $("#car .radioBubbles li.mua").fadeIn().addClass("shown") } else if (t >= 4700 && t <= 5200) { } else { $("#car .radioBubbles li").fadeOut().removeClass("shown") } } if ($(".slide:first-of-type").hasClass("monterey")) { if (t >= 300 && t <= 800) { $("#car .radioBubbles li.mua").fadeIn().addClass("shown") } else if (t >= 1900 && t <= 2400) { } else if (t >= 3800 && t <= 4300) { $("#car .radioBubbles li.xia").fadeIn().addClass("shown") } else { $("#car .radioBubbles li").fadeOut().removeClass("shown") } } if ($(".slide:first-of-type").hasClass("bixby")) { if (t >= 800 && t <= 1300) { $("#car .radioBubbles li.xia").fadeIn().addClass("shown") } else if (t >= 5200 && t <= 5700) { } else { $("#car .radioBubbles li").fadeOut().removeClass("shown") } } if ($(".slide:first-of-type").hasClass("bigSur")) { if (t >= 1200 && t <= 1700) { } else { $("#car .radioBubbles li").fadeOut().removeClass("shown") } } if ($(".slide:first-of-type").hasClass("hearst")) { if (t >= 2600 && t <= 3100) { $("#car .radioBubbles li.pia").fadeIn().addClass("shown") } else { $("#car .radioBubbles li").fadeOut().removeClass("shown") } } if ($(".slide:first-of-type").hasClass("morroRock")) { if (t >= 200 && t <= 700) { $("#car .radioBubbles li.pia").fadeIn().addClass("shown") } else { $("#car .radioBubbles li").fadeOut().removeClass("shown") } } if ($(".slide:first-of-type").hasClass("morroRock")) { if (t >= 200 && t <= 700) { $("#car .radioBubbles li.pia").fadeIn().addClass("shown") } else { $("#car .radioBubbles li").fadeOut().removeClass("shown") } } if ($(".slide:first-of-type").hasClass("chineseTheatre")) { if (t >= 2100 && t <= 2600) { } else { $("#car .radioBubbles li").fadeOut().removeClass("shown") } } if ($(".slide:first-of-type").hasClass("disney")) { if (t >= 5e3 && t <= 5500) { } else { $("#car .radioBubbles li").fadeOut().removeClass("shown") } } if ($(".slide:first-of-type").hasClass("santaMonica")) { if (t >= 1600 && t <= 2100) { } else if (t >= 3300 && t <= 3800) { } else if (t >= 4700 && t <= 5200) { $("#car .radioBubbles li.upsilon").fadeIn().addClass("shown") } else { $("#car .radioBubbles li").fadeOut().removeClass("shown") } } if ($(".slide:first-of-type").hasClass("veniceBeach")) { if (t >= 300 && t <= 800) { $("#car .radioBubbles li.tau").fadeIn().addClass("shown") } else if (t >= 1700 && t <= 2200) { $("#car .radioBubbles li.upsilon").fadeIn().addClass("shown") } else if (t >= 5900 && t <= 6400) { $("#car .radioBubbles li.phi").fadeIn().addClass("shown") } else { $("#car .radioBubbles li").fadeOut().removeClass("shown") } } if ($(".slide:first-of-type").hasClass("longBeach")) { if (t >= 2800 && t <= 3300) { $("#car .radioBubbles li.phi").fadeIn().addClass("shown") } else if (t >= 5200 && t <= 5700) { $("#car .radioBubbles li.chi").fadeIn().addClass("shown") } else { $("#car .radioBubbles li").fadeOut().removeClass("shown") } } if ($(".slide:first-of-type").hasClass("sanDiegoZoo")) { if (t >= 400 && t <= 900) { $("#car .radioBubbles li.chi").fadeIn().addClass("shown") } else if (t >= 3500 && t <= 4e3) { } else { $("#car .radioBubbles li").fadeOut().removeClass("shown") } } if ($("#page").hasClass("start")) { if (t >= 4100) { if ($("#page .assistance").hasClass("autoLoaded")) { } else { $("#page .assistance").fadeIn(1500, function () { $(this).addClass("autoLoaded"); $("body").addClass("capped") }) } } } } } document.addEventListener("touchmove", n, false); document.addEventListener("scroll", r, false) } $("#page .slide.home .homeScene").click(function () { $("#page .assistance").fadeIn(1500, function () { $(this).addClass("autoLoaded"); $("body").addClass("capped") }) }); $("#page .assistance").click(function (e) { e.preventDefault(); $(this).fadeOut(1500, function () { $("body").removeClass("capped") }) }); $("a.btn").click(function (t) { t.preventDefault(); var n = $(window).scrollTop(); $("h2.location").fadeOut(); $(".title").hide(); $("#car .radioBubbles li").hide(); $(this).fadeOut(); if ($("#page").hasClass("start") && n >= 4800) { $("#car").removeClass("hidden"); $("#car").addClass("moving pastFold") } if ($("#car").hasClass("pastFold")) { if ($("#page").hasClass("start") && n <= 4799) { $("#car").addClass("gone") } } if ($(".slide.coronado").length != 0 && $(".slide.sanDiegoZoo").length != 0) { if (n <= 1900) { var r = $("#car img").attr("src"); if (r != "http://www.exsus.com/highway-one-roadtrip/_res/images/asset_safariTruck.png") { $("#car img").fadeOut(function () { $(this).attr("src", "http://www.exsus.com/highway-one-roadtrip/_res/images/asset_safariTruck.png").attr("width", "226").attr("height", "357"); $(this).fadeIn() }); $("#car .exhaust").fadeOut() } } else { var r = $("#car img").attr("src"); if (r != "http://www.exsus.com/highway-one-roadtrip/_res/images/asset_car.png") { $("#car img").fadeOut(function () { $(this).attr("src", "http://www.exsus.com/highway-one-roadtrip/_res/images/asset_car.png").attr("width", "160").attr("height", "301"); $(this).fadeIn() }); $("#car .exhaust").fadeIn() } } } if ($(".slide.longBeach").length != 0 && $(".slide.sanDiegoZoo").length != 0) { if (n <= 3900) { var r = $("#car img").attr("src"); if (r != "http://www.exsus.com/highway-one-roadtrip/_res/images/asset_car.png") { $("#car img").fadeOut(function () { $(this).attr("src", "http://www.exsus.com/highway-one-roadtrip/_res/images/asset_car.png").attr("width", "160").attr("height", "301"); $(this).fadeIn(); $("#car .hair").fadeIn() }); $("#car .exhaust").fadeIn() } } else { $("#car .hair").fadeOut(function () { var e = $("#car img").attr("src"); if (e != "http://www.exsus.com/highway-one-roadtrip/_res/images/asset_safariTruck.png") { $("#car img").fadeOut(function () { $(this).attr("src", "http://www.exsus.com/highway-one-roadtrip/_res/images/asset_safariTruck.png").attr("width", "226").attr("height", "357"); $(this).fadeIn() }); $("#car .exhaust").fadeOut() } }) } } if ($(".slide.veniceBeach").length != 0 && $(".slide.longBeach").length != 0) { if (n <= 1900) { $("#car .hair").fadeOut() } else { $("#car .hair").fadeIn() } } e(); return false }); $(".overlay .camera").click(function (e) { e.preventDefault(); $(".flash").addClass("active"); setTimeout(function () { $(".step1").hide(); $(".character, .caption, .camera").removeClass("show"); $(".flash").removeClass("active"); $(".step2").fadeIn("500") }, 1e3); setTimeout(function () { $(".socialDrop").addClass("active") }, 2e3) }); $(".overlay .cover, .overlay .close").click(function (e) { e.preventDefault(); $(".character, .caption, .camera").removeClass("show"); $(".step1, .step2, .overlay").fadeOut("500"); $("body").removeClass("capped") }); $("nav ul li a").click(function (e) { e.preventDefault(); var t = $(this).closest("nav"); var n = $(this).closest("li"); var r = $(this).attr("href"); var i = $(this).closest("li").attr("data-marker"); $("#car .radioBubbles li").hide(); if ($(n).hasClass("active")) { } else { $("#page").addClass("navigating"); $("nav ul li").removeClass("active"); $(this).closest("li").addClass("active"); $(".slide").remove(); $.get(r, function (e) { if (r == "highway-one-roadtrip/index.html") { window.location.reload() } else { $(e).insertBefore("#car"); $("#page").removeClass("start"); $(".title, p.helper").hide(); $("#car").removeClass("moving gone hidden"); nextSlide = $(".btn", e).attr("href"); navPosition = $(".btn", e).attr("data-destination"); navMarker = $(".btn", e).attr("data-marker"); $(e).find("a.twitter-share-button").each(function () { var e = new twttr.TweetButton($(this).get(0)); e.render() }); $(window).scrollTop("0"); $("#page").removeClass("navigating") } }); if (r == "highway-one-roadtrip/25SanDiego.html") { $("#car img").fadeOut(function () { $(this).attr("src", "http://www.exsus.com/highway-one-roadtrip/_res/images/asset_safariTruck.png").attr("width", "226").attr("height", "357"); $(this).fadeIn() }); $("#car .exhaust").fadeOut() } var s = $("#car img").attr("src"); if (s != "http://www.exsus.com/highway-one-roadtrip/_res/images/asset_car.png") { $("#car img").fadeOut(function () { $(this).attr("src", "http://www.exsus.com/highway-one-roadtrip/_res/images/asset_car.png").attr("width", "160").attr("height", "301"); $(this).fadeIn() }); $("#car .exhaust").fadeIn() } if (r == "highway-one-roadtrip/24LongBeach.html") { $("#car .hair").fadeIn() } else { $("#car .hair").fadeOut() } $(".mapMarkers li", t).removeClass("active"); $(".mapMarkers li", t).each(function () { var e = $(this).attr("data-destination"); if (e == i) { $(this).addClass("active"); return false } }) } return false }); $("#page .slide.home ul.introClouds .intro").hover(function () { $(this).addClass("seen") }) })