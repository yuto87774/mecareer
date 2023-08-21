!function() {
    var n = document.getElementsByClassName("js-cd-top")[0];
    function o() {
        var o = window.scrollY || document.documentElement.scrollTop;
        o > 300 ? s(n, "cd-top--show") : t(n, "cd-top--show"),
        o > 1200 && s(n, "cd-top--fade-out"),
        scrolling = !1
    }
    function e(n, o) {
        return n.classList ? n.classList.contains(o) : !!n.className.match(new RegExp("(\\s|^)" + o + "(\\s|$)"))
    }
    function s(n, o) {
        var t = o.split(" ");
        n.classList ? n.classList.add(t[0]) : e(n, t[0]) || (n.className += " " + t[0]),
        t.length > 1 && s(n, t.slice(1).join(" "))
    }
    function t(n, o) {
        var s = o.split(" ");
        if (n.classList)
            n.classList.remove(s[0]);
        else if (e(n, s[0])) {
            var i = new RegExp("(\\s|^)" + s[0] + "(\\s|$)");
            n.className = n.className.replace(i, " ")
        }
        s.length > 1 && t(n, s.slice(1).join(" "))
    }
    scrolling = !1,
    n && (window.addEventListener("scroll", (function(n) {
        scrolling || (scrolling = !0,
        window.requestAnimationFrame ? window.requestAnimationFrame(o) : setTimeout(o, 250))
    }
    )),
    n.addEventListener("click", (function(n) {
        var o, e, s, t;
        n.preventDefault(),
        window.requestAnimationFrame ? (o = 700,
        e = window.scrollY || document.documentElement.scrollTop,
        s = null,
        t = function(n) {
            s || (s = n);
            var i = n - s
              , l = Math.max(Math.easeInOutQuad(i, e, -e, o), 0);
            window.scrollTo(0, l),
            i < o && window.requestAnimationFrame(t)
        }
        ,
        window.requestAnimationFrame(t)) : window.scrollTo(0, 0)
    }
    ))),
    Math.easeInOutQuad = function(n, o, e, s) {
        return (n /= s / 2) < 1 ? e / 2 * n * n + o : -e / 2 * (--n * (n - 2) - 1) + o
    }
}(),
$(document).ready((function() {
    $(".navbar").length > 0 && $(window).on("scroll load resize", (function() {
        $(window).scrollTop() > 150 ? $(".navbar.navbar-fixed-top").addClass("navchange") : $(".navbar.navbar-fixed-top").removeClass("navchange")
    }
    )),
    $(".dropdown").on("show.bs.dropdown", (function() {
        $(this).find(".dropdown-menu").first().stop(!0, !0).slideDown(300)
    }
    )),
    $(".dropdown").on("hide.bs.dropdown", (function() {
        $(this).find(".dropdown-menu").first().stop(!0, !0).slideUp(300)
    }
    ))
}
));
const columns = ["smcol1", "smcol2", "smcol3"];
let index = 0;
setInterval((()=>{
    const n = document.getElementById(columns[index]);
    n.classList.contains("d-none") && n.classList.remove("d-none");
    for (let n = 0; n < columns.length; n++)
        if (n !== index) {
            document.getElementById(columns[n]).classList.add("d-none")
        }
    index = (index + 1) % columns.length
}
), 3e3);
