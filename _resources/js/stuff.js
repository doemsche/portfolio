$(document).ready(function () {

   function f(a) {
        var b = /^[a-zA-Z0-9_-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,3}$/;
        if (b.exec(a) == null) {
            return false
        } else {
            return true
        }
    }
    var a = $("html, body").innerWidth();
    var b = $("#header nav ul .current");
    var c = b.offset();
    c = c.left;
    c = parseInt(c);
    var d = a / 100;
    var e = c / d;
    if ($("html").hasClass("ie8")) {
        e = e + 2;
        $("#border").css("width", e + "%")
    } else {
        if ($("html").hasClass("ie9") || $("html").hasClass("ie7")) {
            e = e + 3;
            $("#border").css("width", e + "%")
        } else {}
        $("#border").css("width", e + "%")
    }
    $(window).resize(function () {
        var a = $("html, body").innerWidth();
        var b = $("#header nav ul .current");
        var c = b.offset();
        c = c.left;
        c = parseInt(c);
        var d = a / 100;
        var e = c / d;
        if ($("html").hasClass("ie8")) {
            e = e + 2;
            $("#border").css("width", e + "%")
        } else {
            if ($("html").hasClass("ie9") || $("html").hasClass("ie7")) {                e = e + 3;
                $("#border").css("width", e + "%")
            } else {}
            $("#border").css("width", e + "%")
        }
    });
    $("#contact-form").submit(function () {
        var a = $("#contact-form input[type='text']").val();
        var b = $("#contact-form input[type='email']").val();
        var c = $("#contact-form textarea").val();
        valid = true;
        if (a == "") {
            $("#contact-form input[type='text']").animate({
                borderColor: "#C91A1A"
            }, 400);
            valid = false
        } else {
            $("#contact-form input[type='text']").animate({
                borderColor: "#E6E6E6"
            }, 400)
        }
        if (b == "") {
            $("#contact-form input[type='email']").animate({
                borderColor: "#C91A1A"
            }, 400);
            valid = false
        } else if (!b.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,})+$/i)) {
            $("#contact-form input[type='email']").animate({
                borderColor: "#C91A1A"
            }, 400);
            valid = false
        } else {
            $("#contact-form input[type='email']").animate({
                borderColor: "#E6E6E6"
            }, 400)
        }
        if (c == "") {
            $("#contact-form textarea").animate({
                borderColor: "#C91A1A"
            }, 400);
            valid = false
        } else {
            $("#contact-form textarea").animate({
                borderColor: "#E6E6E6"
            }, 400)
        }
        if (valid) {
            return true
        } else {
            return false
        }
    });
    if (window.addEventListener) {
        var g = 0,
            h = [38, 38, 40, 40, 37, 39, 37, 39, 66, 65];
        window.addEventListener("keydown", function (a) {
            if (a.keyCode == h[g]) g++;
            else g = 0;
            if (g == 10) window.location = "http://aleksfaure.com/just4fun"
        }, true)
    }
})