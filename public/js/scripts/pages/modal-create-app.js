$((function () {
    var e = document.querySelector(".create-app-wizard"), t = document.getElementById("createAppModal"),
        n = "../../../app-assets/", a = $(".create-app-card-mask"), i = $(".create-app-expiry-date-mask"),
        c = $(".create-app-cvv-code-mask");
    if ("laravel" === $("body").attr("data-framework") && (n = $("body").attr("data-asset-path")), void 0 !== typeof e && null !== e) {
        var r = new Stepper(e, {linear: !1});
        $(e).find(".btn-next").on("click", (function () {
            r.next()
        })), $(e).find(".btn-prev").on("click", (function () {
            r.previous()
        })), $(e).find(".btn-submit").on("click", (function () {
            alert("Submitted..!!")
        })), t.addEventListener("hide.bs.modal", (function (e) {
            r.to(1)
        }))
    }
    a.length && a.each((function () {
        new Cleave($(this), {
            creditCard: !0, onCreditCardTypeChanged: function (e) {
                document.querySelector(".credit-app-card-type").innerHTML = "" != e && "unknown" != e ? '<img src="' + n + "images/icons/payments/" + e + '-cc.png" height="24"/>' : ""
            }
        })
    })), i.length && i.each((function () {
        new Cleave($(this), {date: !0, delimiter: "/", datePattern: ["m", "y"]})
    })), c.length && c.each((function () {
        new Cleave($(this), {numeral: !0, numeralPositiveOnly: !0})
    }))
}));
