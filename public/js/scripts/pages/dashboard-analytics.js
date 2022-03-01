$(window).on("load", (function () {
    "use strict";
    var e, o, t, r, a, s = "#ebf0f7", i = "#5e5873", n = "#ebe9f1", d = document.querySelector("#gained-chart"),
        l = document.querySelector("#order-chart"), h = document.querySelector("#avg-sessions-chart"),
        p = document.querySelector("#support-trackers-chart"), c = document.querySelector("#sales-visit-chart"),
        w = "rtl" === $("html").attr("data-textdirection");
    setTimeout((function () {
        toastr.success("You have successfully logged in to Vuexy. Now you can start to explore!", "👋 Welcome John Doe!", {
            closeButton: !0,
            tapToDismiss: !1,
            rtl: w
        })
    }), 2e3), e = {
        chart: {
            height: 100,
            type: "area",
            toolbar: {show: !1},
            sparkline: {enabled: !0},
            grid: {show: !1, padding: {left: 0, right: 0}}
        },
        colors: [window.colors.solid.primary],
        dataLabels: {enabled: !1},
        stroke: {curve: "smooth", width: 2.5},
        fill: {type: "gradient", gradient: {shadeIntensity: .9, opacityFrom: .7, opacityTo: .5, stops: [0, 80, 100]}},
        series: [{name: "Subscribers", data: [28, 40, 36, 52, 38, 60, 55]}],
        xaxis: {labels: {show: !1}, axisBorder: {show: !1}},
        yaxis: [{y: 0, offsetX: 0, offsetY: 0, padding: {left: 0, right: 0}}],
        tooltip: {x: {show: !1}}
    }, new ApexCharts(d, e).render(), o = {
        chart: {
            height: 100,
            type: "area",
            toolbar: {show: !1},
            sparkline: {enabled: !0},
            grid: {show: !1, padding: {left: 0, right: 0}}
        },
        colors: [window.colors.solid.warning],
        dataLabels: {enabled: !1},
        stroke: {curve: "smooth", width: 2.5},
        fill: {type: "gradient", gradient: {shadeIntensity: .9, opacityFrom: .7, opacityTo: .5, stops: [0, 80, 100]}},
        series: [{name: "Orders", data: [10, 15, 8, 15, 7, 12, 8]}],
        xaxis: {labels: {show: !1}, axisBorder: {show: !1}},
        yaxis: [{y: 0, offsetX: 0, offsetY: 0, padding: {left: 0, right: 0}}],
        tooltip: {x: {show: !1}}
    }, new ApexCharts(l, o).render(), t = {
        chart: {
            type: "bar",
            height: 200,
            sparkline: {enabled: !0},
            toolbar: {show: !1}
        },
        states: {hover: {filter: "none"}},
        colors: [s, s, window.colors.solid.primary, s, s, s],
        series: [{name: "Sessions", data: [75, 125, 225, 175, 125, 75, 25]}],
        grid: {show: !1, padding: {left: 0, right: 0}},
        plotOptions: {bar: {columnWidth: "45%", distributed: !0, endingShape: "rounded"}},
        tooltip: {x: {show: !1}},
        xaxis: {type: "numeric"}
    }, new ApexCharts(h, t).render(), r = {
        chart: {height: 270, type: "radialBar"},
        plotOptions: {
            radialBar: {
                size: 150,
                offsetY: 20,
                startAngle: -150,
                endAngle: 150,
                hollow: {size: "65%"},
                track: {background: "#fff", strokeWidth: "100%"},
                dataLabels: {
                    name: {offsetY: -5, color: i, fontSize: "1rem"},
                    value: {offsetY: 15, color: i, fontSize: "1.714rem"}
                }
            }
        },
        colors: [window.colors.solid.danger],
        fill: {
            type: "gradient",
            gradient: {
                shade: "dark",
                type: "horizontal",
                shadeIntensity: .5,
                gradientToColors: [window.colors.solid.primary],
                inverseColors: !0,
                opacityFrom: 1,
                opacityTo: 1,
                stops: [0, 100]
            }
        },
        stroke: {dashArray: 8},
        series: [83],
        labels: ["Completed Tickets"]
    }, new ApexCharts(p, r).render(), a = {
        chart: {
            height: 300,
            type: "radar",
            dropShadow: {enabled: !0, blur: 8, left: 1, top: 1, opacity: .2},
            toolbar: {show: !1},
            offsetY: 5
        },
        series: [{name: "Sales", data: [90, 50, 86, 40, 100, 20]}, {name: "Visit", data: [70, 75, 70, 76, 20, 85]}],
        stroke: {width: 0},
        colors: [window.colors.solid.primary, window.colors.solid.info],
        plotOptions: {
            radar: {
                polygons: {
                    strokeColors: [n, "transparent", "transparent", "transparent", "transparent", "transparent"],
                    connectorColors: "transparent"
                }
            }
        },
        fill: {
            type: "gradient",
            gradient: {
                shade: "dark",
                gradientToColors: [window.colors.solid.primary, window.colors.solid.info],
                shadeIntensity: 1,
                type: "horizontal",
                opacityFrom: 1,
                opacityTo: 1,
                stops: [0, 100, 100, 100]
            }
        },
        markers: {size: 0},
        legend: {show: !1},
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
        dataLabels: {background: {foreColor: [n, n, n, n, n, n]}},
        yaxis: {show: !1},
        grid: {show: !1, padding: {bottom: -27}}
    }, new ApexCharts(c, a).render()
}));
