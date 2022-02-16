$((function () {
    "use strict";
    var t, e = $(".datatables-permissions"), a = "../../../app-assets/", s = "app-user-list.html";
    "laravel" === $("body").attr("data-framework") && (a = $("body").attr("data-asset-path"), s = a + "app/user/list"), e.length && (t = e.DataTable({
        ajax: a + "data/permissions-list.json",
        columns: [{data: ""}, {data: "id"}, {data: "name"}, {data: "assigned_to"}, {data: "created_date"}, {data: ""}],
        columnDefs: [{
            className: "control",
            orderable: !1,
            responsivePriority: 2,
            targets: 0,
            render: function (t, e, a, s) {
                return ""
            }
        }, {targets: 1, visible: !1}, {targets: 2, orderable: !1}, {
            targets: 3,
            orderable: !1,
            render: function (t, e, a, n) {
                for (var o = a.assigned_to, r = "", l = {
                    Admin: '<a href="' + s + '" class="me-50"><span class="badge rounded-pill badge-light-primary">Administrator</span></a>',
                    Manager: '<a href="' + s + '" class="me-50"><span class="badge rounded-pill badge-light-warning">Manager</span></a>',
                    Users: '<a href="' + s + '" class="me-50"><span class="badge rounded-pill badge-light-success">Users</span></a>',
                    Support: '<a href="' + s + '" class="me-50"><span class="badge rounded-pill badge-light-info">Support</span></a>',
                    Restricted: '<a href="' + s + '" class="me-50"><span class="badge rounded-pill badge-light-danger">Restricted User</span></a>'
                }, i = 0; i < o.length; i++) {
                    r += l[o[i]]
                }
                return r
            }
        }, {
            targets: -1, title: "Actions", orderable: !1, render: function (t, e, a, s) {
                return '<button class="btn btn-sm btn-icon" data-bs-toggle="modal" data-bs-target="#editPermissionModal">' + feather.icons.edit.toSvg({class: "font-medium-2 text-body"}) + '</i></button><button class="btn btn-sm btn-icon delete-record">' + feather.icons.trash.toSvg({class: "font-medium-2 text-body"}) + "</button>"
            }
        }],
        order: [[1, "asc"]],
        dom: '<"d-flex justify-content-between align-items-center header-actions text-nowrap mx-1 row mt-75"<"col-sm-12 col-lg-4 d-flex justify-content-center justify-content-lg-start" l><"col-sm-12 col-lg-8"<"dt-action-buttons d-flex align-items-center justify-content-lg-end justify-content-center flex-md-nowrap flex-wrap"<"me-1"f><"user_role mt-50 width-200 me-1">B>>><"text-nowrap" t><"d-flex justify-content-between mx-2 row mb-1"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
        language: {sLengthMenu: "Show _MENU_", search: "Search", searchPlaceholder: "Search.."},
        buttons: [{
            text: "Add Permission",
            className: "add-new btn btn-primary mt-50",
            attr: {"data-bs-toggle": "modal", "data-bs-target": "#addPermissionModal"},
            init: function (t, e, a) {
                $(e).removeClass("btn-secondary")
            }
        }],
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal({
                    header: function (t) {
                        t.data();
                        return "Details of Permission"
                    }
                }), type: "column", renderer: function (t, e, a) {
                    var s = $.map(a, (function (t, e) {
                        return "" !== t.title ? '<tr data-dt-row="' + t.rowIndex + '" data-dt-column="' + t.columnIndex + '"><td>' + t.title + ":</td> <td>" + t.data + "</td></tr>" : ""
                    })).join("");
                    return !!s && $('<table class="table"/><tbody />').append(s)
                }
            }
        },
        language: {paginate: {previous: "&nbsp;", next: "&nbsp;"}},
        initComplete: function () {
            this.api().columns(3).every((function () {
                var t = this;
                $('<select id="UserRole" class="form-select text-capitalize"><option value=""> Select Role </option><option value="Administrator" class="text-capitalize">Administrator</option><option value="Manager" class="text-capitalize">Manager</option><option value="Users" class="text-capitalize">users</option><option value="Support" class="text-capitalize">Support</option><option value="Restricted" class="text-capitalize">Restricted User</option></select>').appendTo(".user_role").on("change", (function () {
                    var e = $.fn.dataTable.util.escapeRegex($(this).val());
                    t.search(e || "", !0, !1).draw()
                }))
            }))
        }
    })), $(".datatables-permissions tbody").on("click", ".delete-record", (function () {
        t.row($(this).parents("tr")).remove().draw()
    })), setTimeout((() => {
        $(".dataTables_filter .form-control").removeClass("form-control-sm"), $(".dataTables_length .form-select").removeClass("form-select-sm")
    }), 300)
}));
