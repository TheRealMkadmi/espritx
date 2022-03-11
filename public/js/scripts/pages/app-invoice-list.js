$((function () {
    "use strict";
    var t = $(".invoice-list-table"), a = "../../../app-assets/", e = "app-invoice-preview.html",
        n = "app-invoice-add.html", s = "app-invoice-edit.html";
    if ("laravel" === $("body").attr("data-framework") && (a = $("body").attr("data-asset-path"), e = a + "app/invoice/preview", n = a + "app/invoice/add", s = a + "app/invoice/edit"), t.length) t.DataTable({
        ajax: a + "data/invoice-list.json",
        autoWidth: !1,
        columns: [{data: "responsive_id"}, {data: "invoice_id"}, {data: "invoice_status"}, {data: "issued_date"}, {data: "client_name"}, {data: "total"}, {data: "balance"}, {data: "invoice_status"}, {data: ""}],
        columnDefs: [{className: "control", responsivePriority: 2, targets: 0}, {
            targets: 1,
            width: "46px",
            render: function (t, a, n, s) {
                var i = n.invoice_id;
                return '<a class="fw-bold" href="' + e + '"> #' + i + "</a>"
            }
        }, {
            targets: 2, width: "42px", render: function (t, a, e, n) {
                var s = e.invoice_status, i = e.due_date, o = {
                    Sent: {class: "bg-light-secondary", icon: "send"},
                    Paid: {class: "bg-light-success", icon: "check-circle"},
                    Draft: {class: "bg-light-primary", icon: "save"},
                    Downloaded: {class: "bg-light-info", icon: "arrow-down-circle"},
                    "Past Due": {class: "bg-light-danger", icon: "info"},
                    "Partial Payment": {class: "bg-light-warning", icon: "pie-chart"}
                };
                return "<span data-bs-toggle='tooltip' data-bs-html='true' title='<span>" + s + '<br> <span class="fw-bold">Balance:</span> ' + e.balance + '<br> <span class="fw-bold">Due Date:</span> ' + i + "</span>'><div class=\"avatar avatar-status " + o[s].class + '"><span class="avatar-content">' + feather.icons[o[s].icon].toSvg({class: "avatar-icon"}) + "</span></div></span>"
            }
        }, {
            targets: 3, responsivePriority: 4, width: "270px", render: function (t, e, n, s) {
                var i = n.client_name, o = n.email, l = n.avatar,
                    d = ["success", "danger", "warning", "info", "primary", "secondary"][Math.floor(6 * Math.random())],
                    r = (i = n.client_name).match(/\b\w/g) || [];
                if (r = ((r.shift() || "") + (r.pop() || "")).toUpperCase(), l) var c = '<img  src="' + a + "images/avatars/" + l + '" alt="Avatar" width="32" height="32">'; else c = '<div class="avatar-content">' + r + "</div>";
                return '<div class="d-flex justify-content-left align-items-center"><div class="avatar-wrapper"><div class="avatar' + ("" === l ? " bg-light-" + d + " " : " ") + 'me-50">' + c + '</div></div><div class="d-flex flex-column"><h6 class="user-name text-truncate mb-0">' + i + '</h6><small class="text-truncate text-muted">' + o + "</small></div></div>"
            }
        }, {
            targets: 4, width: "73px", render: function (t, a, e, n) {
                var s = e.total;
                return '<span class="d-none">' + s + "</span>$" + s
            }
        }, {
            targets: 5, width: "130px", render: function (t, a, e, n) {
                var s = new Date(e.due_date);
                return '<span class="d-none">' + moment(s).format("YYYYMMDD") + "</span>" + moment(s).format("DD MMM YYYY")
            }
        }, {
            targets: 6, width: "98px", render: function (t, a, e, n) {
                var s = e.balance;
                if (0 === s) {
                    return '<span class="badge rounded-pill badge-light-success" text-capitalized> Paid </span>'
                }
                return '<span class="d-none">' + s + "</span>" + s
            }
        }, {targets: 7, visible: !1}, {
            targets: -1, title: "Actions", width: "80px", orderable: !1, render: function (t, a, n, i) {
                return '<div class="d-flex align-items-center col-actions"><a class="me-1" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Mail">' + feather.icons.send.toSvg({class: "font-medium-2 text-body"}) + '</a><a class="me-25" href="' + e + '" data-bs-toggle="tooltip" data-bs-placement="top" title="Preview Invoice">' + feather.icons.eye.toSvg({class: "font-medium-2 text-body"}) + '</a><div class="dropdown"><a class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown">' + feather.icons["more-vertical"].toSvg({class: "font-medium-2 text-body"}) + '</a><div class="dropdown-menu dropdown-menu-end"><a href="#" class="dropdown-item">' + feather.icons.download.toSvg({class: "font-small-4 me-50"}) + 'Download</a><a href="' + s + '" class="dropdown-item">' + feather.icons.edit.toSvg({class: "font-small-4 me-50"}) + 'Edit</a><a href="#" class="dropdown-item">' + feather.icons.trash.toSvg({class: "font-small-4 me-50"}) + 'Delete</a><a href="#" class="dropdown-item">' + feather.icons.copy.toSvg({class: "font-small-4 me-50"}) + "Duplicate</a></div></div></div>"
            }
        }],
        order: [[1, "desc"]],
        dom: '<"row d-flex justify-content-between align-items-center m-1"<"col-lg-6 d-flex align-items-center"l<"dt-action-buttons text-xl-end text-lg-start text-lg-end text-start "B>><"col-lg-6 d-flex align-items-center justify-content-lg-end flex-lg-nowrap flex-wrap pe-lg-1 p-0"f<"invoice_status ms-sm-2">>>t<"d-flex justify-content-between mx-2 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
        language: {
            sLengthMenu: "Show _MENU_",
            search: "Search",
            searchPlaceholder: "Search Invoice",
            paginate: {previous: "&nbsp;", next: "&nbsp;"}
        },
        buttons: [{
            text: "Add Record", className: "btn btn-primary btn-add-record ms-2", action: function (t, a, e, s) {
                window.location = n
            }
        }],
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal({
                    header: function (t) {
                        return "Details of " + t.data().client_name
                    }
                }), type: "column", renderer: function (t, a, e) {
                    var n = $.map(e, (function (t, a) {
                        return 2 !== t.columnIndex ? '<tr data-dt-row="' + t.rowIdx + '" data-dt-column="' + t.columnIndex + '"><td>' + t.title + ":</td> <td>" + t.data + "</td></tr>" : ""
                    })).join("");
                    return !!n && $('<table class="table"/>').append("<tbody>" + n + "</tbody>")
                }
            }
        },
        initComplete: function () {
            $(document).find('[data-bs-toggle="tooltip"]').tooltip(), this.api().columns(7).every((function () {
                var t = this,
                    a = $('<select id="UserRole" class="form-select ms-50 text-capitalize"><option value=""> Select Status </option></select>').appendTo(".invoice_status").on("change", (function () {
                        var a = $.fn.dataTable.util.escapeRegex($(this).val());
                        t.search(a ? "^" + a + "$" : "", !0, !1).draw()
                    }));
                t.data().unique().sort().each((function (t, e) {
                    a.append('<option value="' + t + '" class="text-capitalize">' + t + "</option>")
                }))
            }))
        },
        drawCallback: function () {
            $(document).find('[data-bs-toggle="tooltip"]').tooltip()
        }
    })
}));
