<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/group/new' => [[['_route' => 'group_new', '_controller' => 'App\\Controller\\GroupController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/group/autocomplete' => [[['_route' => 'ajax_autocomplete_groups', '_controller' => 'App\\Controller\\GroupController::autocompleteAction'], null, null, null, false, false, null]],
        '/group' => [[['_route' => 'group_index', '_controller' => 'App\\Controller\\GroupController::index'], null, ['GET' => 0], null, true, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::show'], null, ['GET' => 0], null, false, false, null]],
        '/permission' => [[['_route' => 'permission_index', '_controller' => 'App\\Controller\\PermissionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/permission/create' => [[['_route' => 'permission_create', '_controller' => 'App\\Controller\\PermissionController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/post' => [[['_route' => 'post', '_controller' => 'App\\Controller\\PostController::index'], null, null, null, false, false, null]],
        '/admin/post/all' => [[['_route' => 'postall', '_controller' => 'App\\Controller\\PostController::afficher_tous_les_Post'], null, null, null, false, false, null]],
        '/post/new' => [[['_route' => 'newpost', '_controller' => 'App\\Controller\\PostController::ajouterPost'], null, null, null, false, false, null]],
        '/acceuil/user/post' => [[['_route' => 'acceuil_user_posts', '_controller' => 'App\\Controller\\PostController::afficher_posts'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/service' => [[['_route' => 'service', '_controller' => 'App\\Controller\\ServiceController::index'], null, null, null, true, false, null]],
        '/service/add' => [[['_route' => 'serivceAdd', '_controller' => 'App\\Controller\\ServiceController::addService'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'root', '_controller' => 'App\\Controller\\TestController::index'], null, null, null, false, false, null]],
        '/app/invoice/list' => [[['_route' => 'app-invoice-list', '_controller' => 'App\\Controller\\TestController::invoice_list'], null, null, null, false, false, null]],
        '/app/invoice/preview' => [[['_route' => 'app-invoice-preview', '_controller' => 'App\\Controller\\TestController::invoice_preview'], null, null, null, false, false, null]],
        '/app/invoice/edit' => [[['_route' => 'app-invoice-edit', '_controller' => 'App\\Controller\\TestController::invoice_edit'], null, null, null, false, false, null]],
        '/app/invoice/add' => [[['_route' => 'app-invoice-add', '_controller' => 'App\\Controller\\TestController::invoice_add'], null, null, null, false, false, null]],
        '/app/invoice/print' => [[['_route' => 'app-invoice-print', '_controller' => 'App\\Controller\\TestController::invoice_print'], null, null, null, false, false, null]],
        '/app/user/list' => [[['_route' => 'app-user-list', '_controller' => 'App\\Controller\\TestController::user_list'], null, null, null, false, false, null]],
        '/app/user/view/account' => [[['_route' => 'app-user-view-account', '_controller' => 'App\\Controller\\TestController::user_view_account'], null, null, null, false, false, null]],
        '/app/user/view/security' => [[['_route' => 'app-user-view-security', '_controller' => 'App\\Controller\\TestController::user_view_security'], null, null, null, false, false, null]],
        '/app/user/view/billing' => [[['_route' => 'app-user-view-billing', '_controller' => 'App\\Controller\\TestController::user_view_billing'], null, null, null, false, false, null]],
        '/app/user/view/notifications' => [[['_route' => 'app-user-view-notifications', '_controller' => 'App\\Controller\\TestController::user_view_notifications'], null, null, null, false, false, null]],
        '/app/user/view/connections' => [[['_route' => 'app-user-view-connections', '_controller' => 'App\\Controller\\TestController::user_view_connections'], null, null, null, false, false, null]],
        '/app/chat' => [[['_route' => 'app-chat', '_controller' => 'App\\Controller\\TestController::chatApp'], null, null, null, false, false, null]],
        '/app/calendar' => [[['_route' => 'app-calendar', '_controller' => 'App\\Controller\\TestController::calendarApp'], null, null, null, false, false, null]],
        '/app/email' => [[['_route' => 'app-email', '_controller' => 'App\\Controller\\TestController::emailApp'], null, null, null, false, false, null]],
        '/app/todo' => [[['_route' => 'app-todo', '_controller' => 'App\\Controller\\TestController::todoApp'], null, null, null, false, false, null]],
        '/app/file-manager' => [[['_route' => 'app-file-manage', '_controller' => 'App\\Controller\\TestController::file_manager'], null, null, null, false, false, null]],
        '/app/access-roles' => [[['_route' => 'app-access-roles', '_controller' => 'App\\Controller\\TestController::access_roles'], null, null, null, false, false, null]],
        '/app/access-permission' => [[['_route' => 'app-access-permission', '_controller' => 'App\\Controller\\TestController::access_permission'], null, null, null, false, false, null]],
        '/app/kanban' => [[['_route' => 'app-kanban', '_controller' => 'App\\Controller\\TestController::kanbanApp'], null, null, null, false, false, null]],
        '/app/ecommerce/shop' => [[['_route' => 'app-ecommerce-shop', '_controller' => 'App\\Controller\\TestController::ecommerce_shop'], null, null, null, false, false, null]],
        '/app/ecommerce/details' => [[['_route' => 'app-ecommerce-details', '_controller' => 'App\\Controller\\TestController::ecommerce_details'], null, null, null, false, false, null]],
        '/app/ecommerce/wishlist' => [[['_route' => 'app-ecommerce-wishlist', '_controller' => 'App\\Controller\\TestController::ecommerce_wishlist'], null, null, null, false, false, null]],
        '/app/ecommerce/checkout' => [[['_route' => 'app-ecommerce-checkout', '_controller' => 'App\\Controller\\TestController::ecommerce_checkout'], null, null, null, false, false, null]],
        '/dashboard/analytics' => [[['_route' => 'dashboard-analytics', '_controller' => 'App\\Controller\\TestController::dashboardAnalytics'], null, null, null, false, false, null]],
        '/dashboard/ecommerce' => [[['_route' => 'dashboard-ecommerce', '_controller' => 'App\\Controller\\TestController::dashboardEcommerce'], null, null, null, false, false, null]],
        '/ui/typography' => [[['_route' => 'ui-typography', '_controller' => 'App\\Controller\\TestController::typography'], null, null, null, false, false, null]],
        '/icons/feather' => [[['_route' => 'icons-feather', '_controller' => 'App\\Controller\\TestController::icons_feather'], null, null, null, false, false, null]],
        '/card/basic' => [[['_route' => 'card-basic', '_controller' => 'App\\Controller\\TestController::card_basic'], null, null, null, false, false, null]],
        '/card/advance' => [[['_route' => 'card-advance', '_controller' => 'App\\Controller\\TestController::card_advance'], null, null, null, false, false, null]],
        '/card/statistics' => [[['_route' => 'card-statistics', '_controller' => 'App\\Controller\\TestController::card_statistics'], null, null, null, false, false, null]],
        '/card/analytics' => [[['_route' => 'card-analytics', '_controller' => 'App\\Controller\\TestController::card_analytics'], null, null, null, false, false, null]],
        '/card/actions' => [[['_route' => 'card-actions', '_controller' => 'App\\Controller\\TestController::card_actions'], null, null, null, false, false, null]],
        '/component/accordion' => [[['_route' => 'component-accordion', '_controller' => 'App\\Controller\\TestController::accordion'], null, null, null, false, false, null]],
        '/component/alert' => [[['_route' => 'component-alert', '_controller' => 'App\\Controller\\TestController::alert'], null, null, null, false, false, null]],
        '/component/avatar' => [[['_route' => 'component-avatar', '_controller' => 'App\\Controller\\TestController::avatar'], null, null, null, false, false, null]],
        '/component/badges' => [[['_route' => 'component-badges', '_controller' => 'App\\Controller\\TestController::badges'], null, null, null, false, false, null]],
        '/component/breadcrumbs' => [[['_route' => 'component-breadcrumbs', '_controller' => 'App\\Controller\\TestController::breadcrumbs'], null, null, null, false, false, null]],
        '/component/buttons' => [[['_route' => 'component-buttons', '_controller' => 'App\\Controller\\TestController::buttons'], null, null, null, false, false, null]],
        '/component/carousel' => [[['_route' => 'component-carousel', '_controller' => 'App\\Controller\\TestController::carousel'], null, null, null, false, false, null]],
        '/component/collapse' => [[['_route' => 'component-collapse', '_controller' => 'App\\Controller\\TestController::collapse'], null, null, null, false, false, null]],
        '/component/divider' => [[['_route' => 'component-divider', '_controller' => 'App\\Controller\\TestController::divider'], null, null, null, false, false, null]],
        '/component/dropdowns' => [[['_route' => 'component-dropdowns', '_controller' => 'App\\Controller\\TestController::dropdowns'], null, null, null, false, false, null]],
        '/component/list-group' => [[['_route' => 'component-list-group', '_controller' => 'App\\Controller\\TestController::list_group'], null, null, null, false, false, null]],
        '/component/modals' => [[['_route' => 'component-modals', '_controller' => 'App\\Controller\\TestController::modals'], null, null, null, false, false, null]],
        '/component/navs' => [[['_route' => 'component-navs', '_controller' => 'App\\Controller\\TestController::navs'], null, null, null, false, false, null]],
        '/component/offcanvas' => [[['_route' => 'component-offcanvas', '_controller' => 'App\\Controller\\TestController::offcanvas'], null, null, null, false, false, null]],
        '/component/pagination' => [[['_route' => 'component-pagination', '_controller' => 'App\\Controller\\TestController::pagination'], null, null, null, false, false, null]],
        '/component/pill-badges' => [[['_route' => 'component-pill-badges', '_controller' => 'App\\Controller\\TestController::pill_badges'], null, null, null, false, false, null]],
        '/component/pills' => [[['_route' => 'component-pills', '_controller' => 'App\\Controller\\TestController::pills'], null, null, null, false, false, null]],
        '/component/tabs' => [[['_route' => 'component-tabs', '_controller' => 'App\\Controller\\TestController::tabs'], null, null, null, false, false, null]],
        '/component/tooltips' => [[['_route' => 'component-tooltips', '_controller' => 'App\\Controller\\TestController::tooltips'], null, null, null, false, false, null]],
        '/component/popovers' => [[['_route' => 'component-popovers', '_controller' => 'App\\Controller\\TestController::popovers'], null, null, null, false, false, null]],
        '/component/progress' => [[['_route' => 'component-progress', '_controller' => 'App\\Controller\\TestController::progress'], null, null, null, false, false, null]],
        '/component/spinner' => [[['_route' => 'component-spinner', '_controller' => 'App\\Controller\\TestController::spinner'], null, null, null, false, false, null]],
        '/component/timeline' => [[['_route' => 'component-timeline', '_controller' => 'App\\Controller\\TestController::timeline'], null, null, null, false, false, null]],
        '/component/toast' => [[['_route' => 'component-toast', '_controller' => 'App\\Controller\\TestController::toast'], null, null, null, false, false, null]],
        '/ext-component/sweet-alerts' => [[['_route' => 'ext-component-sweet-alerts', '_controller' => 'App\\Controller\\TestController::sweet_alert'], null, null, null, false, false, null]],
        '/ext-component/block-ui' => [[['_route' => 'ext-component-block-ui', '_controller' => 'App\\Controller\\TestController::block_ui'], null, null, null, false, false, null]],
        '/ext-component/toastr' => [[['_route' => 'ext-component-toastr', '_controller' => 'App\\Controller\\TestController::toastr'], null, null, null, false, false, null]],
        '/ext-component/sliders' => [[['_route' => 'ext-component-sliders', '_controller' => 'App\\Controller\\TestController::sliders'], null, null, null, false, false, null]],
        '/ext-component/drag-drop' => [[['_route' => 'ext-component-drag-drop', '_controller' => 'App\\Controller\\TestController::drag_drop'], null, null, null, false, false, null]],
        '/ext-component/clipboard' => [[['_route' => 'ext-component-tour', '_controller' => 'App\\Controller\\TestController::clipboard'], null, null, null, false, false, null]],
        '/ext-component/plyr' => [[['_route' => 'ext-component-plyr', '_controller' => 'App\\Controller\\TestController::plyr'], null, null, null, false, false, null]],
        '/ext-component/context-menu' => [[['_route' => 'ext-component-context-menu', '_controller' => 'App\\Controller\\TestController::context_menu'], null, null, null, false, false, null]],
        '/ext-component/swiper' => [[['_route' => 'ext-component-swiper', '_controller' => 'App\\Controller\\TestController::swiper'], null, null, null, false, false, null]],
        '/ext-component/tree' => [[['_route' => 'ext-component-tree', '_controller' => 'App\\Controller\\TestController::tree'], null, null, null, false, false, null]],
        '/ext-component/ratings' => [[['_route' => 'ext-component-ratings', '_controller' => 'App\\Controller\\TestController::ratings'], null, null, null, false, false, null]],
        '/ext-component/locale' => [[['_route' => 'ext-component-locale', '_controller' => 'App\\Controller\\TestController::locale'], null, null, null, false, false, null]],
        '/page-layouts/collapsed-menu' => [[['_route' => 'page-layouts-collapsed-menu', '_controller' => 'App\\Controller\\TestController::layout_collapsed_menu'], null, null, null, false, false, null]],
        '/page-layouts/full' => [[['_route' => 'page-layouts-full', '_controller' => 'App\\Controller\\TestController::layout_full'], null, null, null, false, false, null]],
        '/page-layouts/without-menu' => [[['_route' => 'page-layouts-without-menu', '_controller' => 'App\\Controller\\TestController::layout_without_menu'], null, null, null, false, false, null]],
        '/page-layouts/empty' => [[['_route' => 'page-layouts-empty', '_controller' => 'App\\Controller\\TestController::layout_empty'], null, null, null, false, false, null]],
        '/page-layouts/blank' => [[['_route' => 'page-layouts-blank', '_controller' => 'App\\Controller\\TestController::layout_blank'], null, null, null, false, false, null]],
        '/form/input' => [[['_route' => 'form-input', '_controller' => 'App\\Controller\\TestController::input'], null, null, null, false, false, null]],
        '/form/input-groups' => [[['_route' => 'form-input-groups', '_controller' => 'App\\Controller\\TestController::input_groups'], null, null, null, false, false, null]],
        '/form/input-mask' => [[['_route' => 'form-input-mask', '_controller' => 'App\\Controller\\TestController::input_mask'], null, null, null, false, false, null]],
        '/form/textarea' => [[['_route' => 'form-textarea', '_controller' => 'App\\Controller\\TestController::textarea'], null, null, null, false, false, null]],
        '/form/checkbox' => [[['_route' => 'form-checkbox', '_controller' => 'App\\Controller\\TestController::checkbox'], null, null, null, false, false, null]],
        '/form/radio' => [[['_route' => 'form-radio', '_controller' => 'App\\Controller\\TestController::radio'], null, null, null, false, false, null]],
        '/form/custom-options' => [[['_route' => 'form-custom-options', '_controller' => 'App\\Controller\\TestController::custom_options'], null, null, null, false, false, null]],
        '/form/switch' => [[['_route' => 'form-switch', '_controller' => 'App\\Controller\\TestController::switch'], null, null, null, false, false, null]],
        '/form/select' => [[['_route' => 'form-select', '_controller' => 'App\\Controller\\TestController::select'], null, null, null, false, false, null]],
        '/form/number-input' => [[['_route' => 'form-number-input', '_controller' => 'App\\Controller\\TestController::number_input'], null, null, null, false, false, null]],
        '/form/file-uploader' => [[['_route' => 'form-file-uploader', '_controller' => 'App\\Controller\\TestController::file_uploader'], null, null, null, false, false, null]],
        '/form/quill-editor' => [[['_route' => 'form-quill-editor', '_controller' => 'App\\Controller\\TestController::quill_editor'], null, null, null, false, false, null]],
        '/form/date-time-picker' => [[['_route' => 'form-date-time-picker', '_controller' => 'App\\Controller\\TestController::date_time_picker'], null, null, null, false, false, null]],
        '/form/layouts' => [[['_route' => 'form-layouts', '_controller' => 'App\\Controller\\TestController::layouts'], null, null, null, false, false, null]],
        '/form/wizard' => [[['_route' => 'form-wizard', '_controller' => 'App\\Controller\\TestController::wizard'], null, null, null, false, false, null]],
        '/form/validation' => [[['_route' => 'form-validation', '_controller' => 'App\\Controller\\TestController::validation'], null, null, null, false, false, null]],
        '/form/form-repeater' => [[['_route' => 'form-repeater', '_controller' => 'App\\Controller\\TestController::form_repeater'], null, null, null, false, false, null]],
        '/table' => [[['_route' => 'table', '_controller' => 'App\\Controller\\TestController::table'], null, null, null, false, false, null]],
        '/table/datatable/basic' => [[['_route' => 'datatable-basic', '_controller' => 'App\\Controller\\TestController::datatable_basic'], null, null, null, false, false, null]],
        '/table/datatable/advance' => [[['_route' => 'datatable-advance', '_controller' => 'App\\Controller\\TestController::datatable_advance'], null, null, null, false, false, null]],
        '/page/account-settings-account' => [[['_route' => 'page-account-settings-account', '_controller' => 'App\\Controller\\TestController::account_settings_account'], null, null, null, false, false, null]],
        '/page/account-settings-security' => [[['_route' => 'page-account-settings-security', '_controller' => 'App\\Controller\\TestController::account_settings_security'], null, null, null, false, false, null]],
        '/page/account-settings-billing' => [[['_route' => 'page-account-settings-billing', '_controller' => 'App\\Controller\\TestController::account_settings_billing'], null, null, null, false, false, null]],
        '/page/account-settings-notifications' => [[['_route' => 'page-account-settings-notifications', '_controller' => 'App\\Controller\\TestController::account_settings_notifications'], null, null, null, false, false, null]],
        '/page/account-settings-connections' => [[['_route' => 'page-account-settings-connections', '_controller' => 'App\\Controller\\TestController::account_settings_connections'], null, null, null, false, false, null]],
        '/page/profile' => [[['_route' => 'page-profile', '_controller' => 'App\\Controller\\TestController::profile'], null, null, null, false, false, null]],
        '/page/faq' => [[['_route' => 'page-faq', '_controller' => 'App\\Controller\\TestController::faq'], null, null, null, false, false, null]],
        '/page/knowledge-base/category/question' => [[['_route' => 'page-knowledge-base', '_controller' => 'App\\Controller\\TestController::kb_question'], null, null, null, false, false, null]],
        '/page/pricing' => [[['_route' => 'page-pricing', '_controller' => 'App\\Controller\\TestController::pricing'], null, null, null, false, false, null]],
        '/page/api-key' => [[['_route' => 'page-api-key', '_controller' => 'App\\Controller\\TestController::api_key'], null, null, null, false, false, null]],
        '/page/blog-list' => [[['_route' => 'page-blog-list', '_controller' => 'App\\Controller\\TestController::blog_list'], null, null, null, false, false, null]],
        '/page/blog-detail' => [[['_route' => 'page-blog-detail', '_controller' => 'App\\Controller\\TestController::blog_detail'], null, null, null, false, false, null]],
        '/page/blog-edit' => [[['_route' => 'page-blog-edit', '_controller' => 'App\\Controller\\TestController::blog_edit'], null, null, null, false, false, null]],
        '/page/modal-examples' => [[['_route' => 'modal-examples', '_controller' => 'App\\Controller\\TestController::modal_examples'], null, null, null, false, false, null]],
        '/page/license' => [[['_route' => 'license', '_controller' => 'App\\Controller\\TestController::license'], null, null, null, false, false, null]],
        '/page/coming-soon' => [[['_route' => 'coming-soon', '_controller' => 'App\\Controller\\TestController::coming_soon'], null, null, null, false, false, null]],
        '/page/error' => [[['_route' => 'error', '_controller' => 'App\\Controller\\TestController::error'], null, null, null, false, false, null]],
        '/page/not-authorized' => [[['_route' => 'not-authorized', '_controller' => 'App\\Controller\\TestController::not_authorized'], null, null, null, false, false, null]],
        '/page/maintenance' => [[['_route' => 'maintenance', '_controller' => 'App\\Controller\\TestController::maintenance'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/autocomplete' => [[['_route' => 'ajax_autocomplete_users', '_controller' => 'App\\Controller\\UserController::autocompleteAction'], null, null, null, false, false, null]],
        '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/group/([^/]++)(?'
                    .'|(*:187)'
                    .'|/edit(*:200)'
                    .'|(*:208)'
                .')'
                .'|/p(?'
                    .'|ermission/([^/]++)(?'
                        .'|(*:243)'
                        .'|/edit(*:256)'
                        .'|(*:264)'
                    .')'
                    .'|ost/(?'
                        .'|edit/([^/]++)(*:293)'
                        .'|([^/]++)/addcomment(*:320)'
                    .')'
                .')'
                .'|/user/(?'
                    .'|post/changedelete/([^/]++)(*:365)'
                    .'|delete/post/([^/]++)(*:393)'
                    .'|([^/]++)(?'
                        .'|(*:412)'
                        .'|/edit(*:425)'
                        .'|(*:433)'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|post/changevalidite/([^/]++)(*:481)'
                    .'|delete/post/([^/]++)(*:509)'
                .')'
                .'|/comment/(?'
                    .'|neww/([^/]++)(*:543)'
                    .'|edit/([^/]++)(*:564)'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:609)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        187 => [[['_route' => 'group_show', '_controller' => 'App\\Controller\\GroupController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        200 => [[['_route' => 'group_edit', '_controller' => 'App\\Controller\\GroupController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        208 => [[['_route' => 'group_delete', '_controller' => 'App\\Controller\\GroupController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        243 => [[['_route' => 'permission_show', '_controller' => 'App\\Controller\\PermissionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        256 => [[['_route' => 'permission_edit', '_controller' => 'App\\Controller\\PermissionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        264 => [[['_route' => 'permission_delete', '_controller' => 'App\\Controller\\PermissionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        293 => [[['_route' => 'editpost', '_controller' => 'App\\Controller\\PostController::editpublication'], ['id'], null, null, false, true, null]],
        320 => [[['_route' => 'newcomment', '_controller' => 'App\\Controller\\PostController::addcomment'], ['id'], null, null, false, false, null]],
        365 => [[['_route' => 'changedelete_post', '_controller' => 'App\\Controller\\PostController::supprimer_Post_user'], ['id'], null, null, false, true, null]],
        393 => [[['_route' => 'delete_commnt_user', '_controller' => 'App\\Controller\\PostController::supprimerComment'], ['id'], null, null, false, true, null]],
        412 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        425 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        433 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        481 => [[['_route' => 'changevalidite_post', '_controller' => 'App\\Controller\\PostController::approuverPost'], ['id'], null, null, false, true, null]],
        509 => [[['_route' => 'deletepost_admin', '_controller' => 'App\\Controller\\PostController::supprimer_Post_admin'], ['id'], null, null, false, true, null]],
        543 => [[['_route' => 'comment_new', '_controller' => 'App\\Controller\\PostController::ajouterComment'], ['id'], null, null, false, true, null]],
        564 => [[['_route' => 'editcomment', '_controller' => 'App\\Controller\\PostController::editcommentaire'], ['id'], null, null, false, true, null]],
        609 => [
            [['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
