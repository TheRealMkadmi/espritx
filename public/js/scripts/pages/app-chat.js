"use strict";
var sidebarToggle = $(".sidebar-toggle"), overlay = $(".body-content-overlay"), sidebarContent = $(".sidebar-content");

function sidebarToggleFunction() {
    sidebarToggle.length && sidebarToggle.on("click", (function () {
        sidebarContent.addClass("show"), overlay.addClass("show")
    }))
}

function enterChat(s) {
    var e = $(".message").val();
    if (/\S/.test(e)) {
        var a = '<div class="chat-content"><p>' + e + "</p></div>";
        $(".chat:last-child .chat-body").append(a), $(".message").val(""), $(".user-chats").scrollTop($(".user-chats > .chats").height())
    }
}

$((function () {
    var s = $(".chat-application .chat-user-list-wrapper"), e = $(".chat-application .chat-profile-sidebar"),
        a = $(".chat-application .profile-sidebar-area"), o = $(".chat-application .sidebar-profile-toggle"),
        t = $(".chat-application .user-profile-toggle"), n = $(".user-profile-sidebar"),
        l = $(".chat-application .user-status input:radio[name=userStatus]"), i = $(".user-chats"),
        r = $(".chat-users-list"), c = $(".chat-list"), h = $(".contact-list"), d = $(".chat-application .close-icon"),
        f = $(".chat-application .sidebar-close-icon"), v = $(".chat-application .menu-toggle"),
        u = $(".speech-to-text"), w = $(".chat-application #chat-search");
    if ($.app.menu.is_touch_device()) s.css("overflow", "scroll"), n.find(".user-profile-sidebar-area").css("overflow", "scroll"), i.css("overflow", "scroll"), a.css("overflow", "scroll"), $(r).find("li").on("click", (function () {
        $(sidebarContent).removeClass("show"), $(overlay).removeClass("show")
    })); else {
        if (s.length > 0) new PerfectScrollbar(s[0]);
        if (n.find(".user-profile-sidebar-area").length > 0) new PerfectScrollbar(n.find(".user-profile-sidebar-area")[0]);
        if (i.length > 0) new PerfectScrollbar(i[0], {wheelPropagation: !1});
        if (a.length > 0) new PerfectScrollbar(a[0])
    }
    if (o.length && o.on("click", (function () {
        e.addClass("show"), overlay.addClass("show")
    })), l.length && l.on("change", (function () {
        var s = "avatar-status-" + this.value, e = $(".header-profile-sidebar .avatar span");
        e.removeClass(), o.find(".avatar span").removeClass(), e.addClass(s + " avatar-status-lg"), o.find(".avatar span").addClass(s)
    })), d.length && d.on("click", (function () {
        e.removeClass("show"), n.removeClass("show"), sidebarContent.hasClass("show") || overlay.removeClass("show")
    })), f.length && f.on("click", (function () {
        sidebarContent.removeClass("show"), overlay.removeClass("show")
    })), t.length && t.on("click", (function () {
        n.addClass("show"), overlay.addClass("show")
    })), overlay.length && overlay.on("click", (function () {
        sidebarContent.removeClass("show"), overlay.removeClass("show"), e.removeClass("show"), n.removeClass("show")
    })), s.find("ul li").length && s.find("ul li").on("click", (function () {
        var e = $(this), a = $(".start-chat-area"), o = $(".active-chat");
        s.find("ul li").hasClass("active") && s.find("ul li").removeClass("active"), e.addClass("active"), e.find(".badge").remove(), s.find("ul li").hasClass("active") ? (a.addClass("d-none"), o.removeClass("d-none")) : (a.removeClass("d-none"), o.addClass("d-none"))
    })), r.find("li").on("click", (function () {
        i.animate({scrollTop: i[0].scrollHeight}, 400)
    })), v.length && v.on("click", (function (s) {
        sidebarContent.removeClass("show"), overlay.removeClass("show"), e.removeClass("show"), n.removeClass("show")
    })), $(window).width() < 992 && sidebarToggleFunction(), w.length && w.on("keyup", (function () {
        var e = $(this).val().toLowerCase();
        if ("" !== e) {
            c.find("li:not(.no-results)").filter((function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(e) > -1)
            })), h.find("li:not(.no-results)").filter((function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(e) > -1)
            }));
            var a = c.find("li:not(.no-results):visible").length, o = h.find("li:not(.no-results):visible").length;
            0 == a ? c.find(".no-results").addClass("show") : c.find(".no-results").hasClass("show") && c.find(".no-results").removeClass("show"), 0 == o ? h.find(".no-results").addClass("show") : h.find(".no-results").hasClass("show") && h.find(".no-results").removeClass("show")
        } else r.find("li").show(), s.find(".no-results").hasClass("show") && s.find(".no-results").removeClass("show")
    })), u.length) {
        var p = p || webkitSpeechRecognition;
        if (null != p) {
            var C = new p, g = !1;
            u.on("click", (function () {
                var s = $(this);
                C.onspeechstart = function () {
                    g = !0
                }, !1 === g && C.start(), C.onerror = function (s) {
                    g = !1
                }, C.onresult = function (e) {
                    s.closest(".form-send-message").find(".message").val(e.results[0][0].transcript)
                }, C.onspeechend = function (s) {
                    g = !1, C.stop()
                }
            }))
        }
    }
})), $(window).on("resize", (function () {
    sidebarToggleFunction(), $(window).width() > 992 && $(".chat-application .body-content-overlay").hasClass("show") && ($(".app-content .sidebar-left").removeClass("show"), $(".chat-application .body-content-overlay").removeClass("show")), $(window).width() < 991 && ($(".chat-application .chat-profile-sidebar").hasClass("show") && $(".chat-application .sidebar-content").hasClass("show") || ($(".sidebar-content").removeClass("show"), $(".body-content-overlay").removeClass("show")))
}));
