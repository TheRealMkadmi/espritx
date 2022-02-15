<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class TestController extends AbstractController
{
    // invoice list App
    /**
     * @Route("app/invoice/list","app-invoice-list")
     */
    public function invoice_list()
    {
        $pageConfigs = ['pageHeader' => false];

        return $this->render('views/content/apps/invoice/app-invoice-list.html.twig', ['pageConfigs' => $pageConfigs]);
    }

    // invoice preview App
    /**
     * @Route("app/invoice/preview","app-invoice-preview")
     */
    public function invoice_preview()
    {
        $pageConfigs = ['pageHeader' => false];

        return $this->render('/content/apps/invoice/app-invoice-preview', ['pageConfigs' => $pageConfigs]);
    }

    // invoice edit App
    /**
     * @Route("app/invoice/edit","app-invoice-edit")
     */
    public function invoice_edit()
    {
        $pageConfigs = ['pageHeader' => false];

        return $this->render('/content/apps/invoice/app-invoice-edit', ['pageConfigs' => $pageConfigs]);
    }

    // invoice edit App
    /**
     * @Route("app/invoice/add","app-invoice-add")
     */
    public function invoice_add()
    {
        $pageConfigs = ['pageHeader' => false];

        return $this->render('/content/apps/invoice/app-invoice-add', ['pageConfigs' => $pageConfigs]);
    }

    // invoice print App
    /**
     * @Route("app/invoice/print","app-invoice-print")
     */
    public function invoice_print()
    {
        $pageConfigs = ['pageHeader' => false];

        return $this->render('/content/apps/invoice/app-invoice-print', ['pageConfigs' => $pageConfigs]);
    }

    // User List Page
    /**
     * @Route("app/user/list","app-user-list")
     */
    public function user_list()
    {
        $pageConfigs = ['pageHeader' => false];
        return $this->render('/content/apps/user/app-user-list', ['pageConfigs' => $pageConfigs]);
    }

    // User Account Page
    /**
     * @Route("app/user/view/account","app-user-view-account")
     */
    public function user_view_account()
    {
        $pageConfigs = ['pageHeader' => false];
        return $this->render('/content/apps/user/app-user-view-account', ['pageConfigs' => $pageConfigs]);
    }

    // User Security Page
    /**
     * @Route("app/user/view/security","app-user-view-security")
     */
    public function user_view_security()
    {
        $pageConfigs = ['pageHeader' => false];
        return $this->render('/content/apps/user/app-user-view-security', ['pageConfigs' => $pageConfigs]);
    }

    // User Billing and Plans Page
    /**
     * @Route("app/user/view/billing","app-user-view-billing")
     */
    public function user_view_billing()
    {
        $pageConfigs = ['pageHeader' => false];
        return $this->render('/content/apps/user/app-user-view-billing', ['pageConfigs' => $pageConfigs]);
    }

    // User Notification Page
    /**
     * @Route("app/user/view/notifications","app-user-view-notifications")
     */
    public function user_view_notifications()
    {
        $pageConfigs = ['pageHeader' => false];
        return $this->render('/content/apps/user/app-user-view-notifications', ['pageConfigs' => $pageConfigs]);
    }

    // User Connections Page

    /**
     * @Route("app/user/view/connections","app-user-view-connections")
     */
    public function user_view_connections()
    {
        $pageConfigs = ['pageHeader' => false];
        return $this->render('/content/apps/user/app-user-view-connections', ['pageConfigs' => $pageConfigs]);
    }


    // Chat App
    /**
     * @Route("app/chat","app-chat")
     */
    public function chatApp()
    {
        $pageConfigs = [
            'pageHeader' => false,
            'contentLayout' => "content-left-sidebar",
            'pageClass' => 'chat-application',
        ];

        return $this->render('/content/apps/chat/app-chat', [
            'pageConfigs' => $pageConfigs
        ]);
    }

    // Calender App
    /**
     * @Route("app/calendar","app-calendar")
     */
    public function calendarApp()
    {
        $pageConfigs = [
            'pageHeader' => false
        ];

        return $this->render('/content/apps/calendar/app-calendar', [
            'pageConfigs' => $pageConfigs
        ]);
    }

    // Email App
    /**
     * @Route("app/email","app-email")
     */
    public function emailApp()
    {
        $pageConfigs = [
            'pageHeader' => false,
            'contentLayout' => "content-left-sidebar",
            'pageClass' => 'email-application',
        ];

        return $this->render('/content/apps/email/app-email', ['pageConfigs' => $pageConfigs]);
    }
    /**
     * @Route("app/todo","app-todo")
     */
    public function todoApp()
    {
        $pageConfigs = [
            'pageHeader' => false,
            'contentLayout' => "content-left-sidebar",
            'pageClass' => 'todo-application',
        ];

        return $this->render('/content/apps/todo/app-todo', [
            'pageConfigs' => $pageConfigs
        ]);
    }
    // File manager App
    /**
     * @Route("app/file-manager","app-file-manage")
     */
    public function file_manager()
    {
        $pageConfigs = [
            'pageHeader' => false,
            'contentLayout' => "content-left-sidebar",
            'pageClass' => 'file-manager-application',
        ];

        return $this->render('/content/apps/fileManager/app-file-manager', ['pageConfigs' => $pageConfigs]);
    }

    // Access Roles App
    /**
     * @Route("app/access-roles","app-access-roles")
     */
    public function access_roles()
    {
        $pageConfigs = ['pageHeader' => false,];

        return $this->render('/content/apps/rolesPermission/app-access-roles', ['pageConfigs' => $pageConfigs]);
    }

    // Access permission App
    /**
     * @Route("app/access-permission","app-access-permission")
     */
    public function access_permission()
    {
        $pageConfigs = ['pageHeader' => false,];

        return $this->render('/content/apps/rolesPermission/app-access-permission', ['pageConfigs' => $pageConfigs]);
    }

    // Kanban App
    /**
     * @Route("app/kanban","app-kanban")
     */
    public function kanbanApp()
    {
        $pageConfigs = [
            'pageHeader' => false,
            'pageClass' => 'kanban-application',
        ];

        return $this->render('/content/apps/kanban/app-kanban', ['pageConfigs' => $pageConfigs]);
    }

    // Ecommerce Shop
    /**
     * @Route("app/ecommerce/shop","app-ecommerce-shop")
     */
    public function ecommerce_shop()
    {
        $pageConfigs = [
            'contentLayout' => "content-detached-left-sidebar",
            'pageClass' => 'ecommerce-application',
        ];

        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "eCommerce"], ['name' => "Shop"]
        ];

        return $this->render('/content/apps/ecommerce/app-ecommerce-shop', [
            'pageConfigs' => $pageConfigs,
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Ecommerce Details
    /**
     * @Route("app/ecommerce/details","app-ecommerce-details")
     */
    public function ecommerce_details()
    {
        $pageConfigs = [
            'pageClass' => 'ecommerce-application',
        ];

        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "eCommerce"], ['link' => "/app/ecommerce/shop", 'name' => "Shop"], ['name' => "Details"]
        ];

        return $this->render('/content/apps/ecommerce/app-ecommerce-details', [
            'pageConfigs' => $pageConfigs,
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Ecommerce Wish List
    /**
     * @Route("app/ecommerce/wishlist","app-ecommerce-wishlist")
     */
    public function ecommerce_wishlist()
    {
        $pageConfigs = [
            'pageClass' => 'ecommerce-application',
        ];

        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "eCommerce"], ['name' => "Wish List"]
        ];

        return $this->render('/content/apps/ecommerce/app-ecommerce-wishlist', [
            'pageConfigs' => $pageConfigs,
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Ecommerce Checkout
    /**
     * @Route("app/ecommerce/checkout","app-ecommerce-checkout")
     */
    public function ecommerce_checkout()
    {
        $pageConfigs = [
            'pageClass' => 'ecommerce-application',
        ];

        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "eCommerce"], ['name' => "Checkout"]
        ];

        return $this->render('/content/apps/ecommerce/app-ecommerce-checkout', [
            'pageConfigs' => $pageConfigs,
            'breadcrumbs' => $breadcrumbs
        ]);
    }
    // Dashboard - Analytics
    /**
     * @Route("dashboard/analytics","dashboard-analytics")
     */
    public function dashboardAnalytics()
    {
        $pageConfigs = ['pageHeader' => false];

        return view('/content/dashboard/dashboard-analytics', ['pageConfigs' => $pageConfigs]);
    }

    // Dashboard - Ecommerce
    /**
     * @Route("dashboard/ecommerce","dashboard-ecommerce")
     */
    public function dashboardEcommerce()
    {
        $pageConfigs = ['pageHeader' => false];

        return view('/content/dashboard/dashboard-ecommerce', ['pageConfigs' => $pageConfigs]);
    }
    // Content Typography
    /**
     * @Route("ui/typography","ui-typography")
     */
    public function typography()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "UI"], ['name' => "Typography"]
        ];
        return view('/content/ui-pages/ui-typography', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Icons Feather
    /**
     * @Route("icons/feather","icons-feather")
     */
    public function icons_feather()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "UI"], ['name' => "Feather Icons"]
        ];
        return view('/content/ui-pages/icons-feather', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }


    /**
     * @Route("card/basic","card-basic")
     */
    public function card_basic()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Card"], ['name' => "Basic Card"]
        ];
        return view('/content/cards/card-basic', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Card Advance
    /**
     * @Route("card/advance","card-advance")
     */
    public function card_advance()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Card"], ['name' => "Advance Card"]
        ];
        return view('/content/cards/card-advance', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Card Statistics
    /**
     * @Route("card/statistics","card-statistics")
     */
    public function card_statistics()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Card"], ['name' => "Statistics Cards"]
        ];
        return view('/content/cards/card-statistics', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Card Analytics
    /**
     * @Route("card/analytics","card-analytics")
     */
    public function card_analytics()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Card"], ['name' => "Analytics Cards"]
        ];
        return view('/content/cards/card-analytics', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Card Actions
    /**
     * @Route("card/actions","card-actions")
     */
    public function card_actions()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Card"], ['name' => "Card Actions"]
        ];
        return view('/content/cards/card-actions', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }
    // Component accordion
    /**
     * @Route("component/accordion","component-accordion")
     */
    public function accordion()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Components"], ['name' => "Accordion"]
        ];
        return view('/content/components/component-accordion', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Component Alert
    /**
     * @Route("component/alert","component-alert")
     */
    public function alert()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Components"], ['name' => "Alerts"]
        ];
        return view('/content/components/component-alerts', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Component - Avatar
    /**
     * @Route("component/avatar","component-avatar")
     */
    public function avatar()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Components"], ['name' => "Avatar"]
        ];
        return view('/content/components/component-avatar', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Component Badges
    /**
     * @Route("component/badges","component-badges")
     */
    public function badges()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Components"], ['name' => "Badges"]
        ];
        return view('/content/components/component-badges', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Component Breadcrumbs
    /**
     * @Route("component/breadcrumbs","component-breadcrumbs")
     */
    public function breadcrumbs()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Components"], ['name' => "Breadcrumbs"]
        ];
        return view('/content/components/component-breadcrumbs', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Component Buttons

    /**
     * @Route("component/buttons","component-buttons")
     */
    public function buttons()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Components"], ['name' => "Buttons"]
        ];
        return view('/content/components/component-buttons', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Component Carousel
    /**
     * @Route("component/carousel","component-carousel")
     */
    public function carousel()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Components"], ['name' => "Carousel"]
        ];
        return view('/content/components/component-carousel', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Component Collapse
    /**
     * @Route("component/collapse","component-collapse")
     */
    public function collapse()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Components"], ['name' => "Collapse"]
        ];
        return view('/content/components/component-collapse', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Component - Divider
    /**
     * @Route("component/divider","component-divider")
     */
    public function divider()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Components"], ['name' => "Divider"]
        ];
        return view('/content/components/component-divider', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Component Dropdowns
    /**
     * @Route("component/dropdowns","component-dropdowns")
     */
    public function dropdowns()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Components"], ['name' => "Dropdowns"]
        ];
        return view('/content/components/component-dropdowns', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Component List Group
    /**
     * @Route("component/list-group","component-list-group")
     */
    public function list_group()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Components"], ['name' => "List Group"]
        ];
        return view('/content/components/component-list-group', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Component Modals
    /**
     * @Route("component/modals","component-modals")
     */
    public function modals()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Components"], ['name' => "Modals"]
        ];
        return view('/content/components/component-modals', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Component Navs
    /**
     * @Route("component/navs","component-navs")
     */
    public function navs()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Components"], ['name' => "Navs"]
        ];
        return view('/content/components/component-navs', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Component offcanvas
    /**
     * @Route("component/offcanvas","component-offcanvas")
     */
    public function offcanvas()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Components"], ['name' => "OffCanvas"]
        ];
        return view('/content/components/component-offcanvas', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Component Pagination
    /**
     * @Route("component/pagination","component-pagination")
     */
    public function pagination()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Components"], ['name' => "Pagination"]
        ];
        return view('/content/components/component-pagination', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Component Pill Badges
    /**
     * @Route("component/pill-badges","component-pill-badges")
     */
    public function pill_badges()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Components"], ['name' => "Pill Badges"]
        ];
        return view('/content/components/component-pill-badges', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Component Pills
    /**
     * @Route("component/pills","component-pills")
     */
    public function pills()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Components"], ['name' => "Pills"]
        ];
        return view('/content/components/component-pills', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Component Tabs
    /**
     * @Route("component/tabs","component-tabs")
     */
    public function tabs()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Components"], ['name' => "Tabs"]
        ];
        return view('/content/components/component-tabs', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }


    // Component Tooltips
    /**
     * @Route("component/tooltips","component-tooltips")
     */
    public function tooltips()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Components"], ['name' => "Tooltips"]
        ];
        return view('/content/components/component-tooltips', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Component Popovers
    /**
     * @Route("component/popovers","component-popovers")
     */
    public function popovers()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Components"], ['name' => "Popovers"]
        ];
        return view('/content/components/component-popovers', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Component Progress
    /**
     * @Route("component/progress","component-progress")
     */
    public function progress()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Components"], ['name' => "Progress"]
        ];
        return view('/content/components/component-progress', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Component Spinner
    /**
     * @Route("component/spinner","component-spinner")
     */
    public function spinner()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Components"], ['name' => "Spinner"]
        ];
        return view('/content/components/component-spinner', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Component Timeline
    /**
     * @Route("component/timeline","component-timeline")
     */
    public function timeline()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Components"], ['name' => "Timeline"]
        ];
        return view('/content/components/component-timeline', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Component Toast
    /**
     * @Route("component/toast","component-toast")
     */
    public function toast()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Components"], ['name' => "Toasts"]
        ];
        return view('/content/components/component-bs-toast', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Sweet Alert
    /**
     * @Route("ext-component/sweet-alerts","ext-component-sweet-alerts")
     */
    public function sweet_alert()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Extensions"], ['name' => "Sweet Alerts"]
        ];
        return view('/content/extensions/ext-component-sweet-alerts', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // block ui
    /**
     * @Route("ext-component/block-ui","ext-component-block-ui")
     */
    public function block_ui()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Extensions"], ['name' => "BlockUI"]
        ];
        return view('/content/extensions/ext-component-block-ui', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Toastr
    /**
     * @Route("ext-component/toastr","ext-component-toastr")
     */
    public function toastr()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Extensions"], ['name' => "Toastr"]
        ];
        return view('/content/extensions/ext-component-toastr', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // NoUi Slider
    /**
     * @Route("ext-component/sliders","ext-component-sliders")
     */
    public function sliders()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Extensions"], ['name' => "Sliders"]
        ];
        return view('/content/extensions/ext-component-sliders', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Drag Drop
    /**
     * @Route("ext-component/drag-drop","ext-component-drag-drop")
     */
    public function drag_drop()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Extensions"], ['name' => "Drag & Drop"]
        ];
        return view('/content/extensions/ext-component-drag-drop', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Tour
    /**
     * @Route("ext-component/tour","ext-component-tour")
     */
    public function tour()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Extensions"], ['name' => "Tour"]
        ];
        return view('/content/extensions/ext-component-tour', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Clipboard
    /**
     * @Route("ext-component/clipboard","ext-component-tour")
     */
    public function clipboard()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Extensions"], ['name' => "Clipboard"]
        ];
        return view('/content/extensions/ext-component-clipboard', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Media Player
    /**
     * @Route("ext-component/plyr","ext-component-plyr")
     */
    public function plyr()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Extensions"], ['name' => "Media Player"]
        ];
        return view('/content/extensions/ext-component-media-player', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Context Menu
    /**
     * @Route("ext-component/context-menu","ext-component-context-menu")
     */
    public function context_menu()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Extensions"], ['name' => "Context Menu"]
        ];
        return view('/content/extensions/ext-component-context-menu', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // swiper
    /**
     * @Route("ext-component/swiper","ext-component-swiper")
     */
    public function swiper()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Extensions"], ['name' => "Swiper"]
        ];
        return view('/content/extensions/ext-component-swiper', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // tree
    /**
     * @Route("ext-component/tree","ext-component-tree")
     */
    public function tree()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Extensions"], ['name' => "Tree"]
        ];
        return view('/content/extensions/ext-component-tree', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // ratings
    /**
     * @Route("ext-component/ratings","ext-component-ratings")
     */
    public function ratings()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Extensions"], ['name' => "Ratings"]
        ];
        return view('/content/extensions/ext-component-ratings', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // I18n
    /**
     * @Route("ext-component/locale","ext-component-locale")
     */
    public function locale()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Extensions"], ['name' => "Locale"]
        ];
        return view('/content/locale/locale', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Collapsed Menu Layout
    /**
     * @Route("page-layouts/collapsed-menu","page-layouts-collapsed-menu")
     */
    public function layout_collapsed_menu()
    {
        $pageConfigs = ['sidebarCollapsed' => true];
        $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Layouts"], ['name' => "Collapsed menu"]];
        return view('/content/page-layouts/layout-collapsed-menu', ['pageConfigs' => $pageConfigs, 'breadcrumbs' => $breadcrumbs]);
    }

    // Boxed Layout
    /**
     * @Route("page-layouts/full","page-layouts-full")
     */
    public function layout_full()
    {
        $pageConfigs = ['layoutWidth' => 'full'];
        $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Layouts"], ['name' => "Layout Full"]];
        return view('/content/page-layouts/layout-full', ['pageConfigs' => $pageConfigs, 'breadcrumbs' => $breadcrumbs]);
    }
    // Layout Without Menu
    /**
     * @Route("page-layouts/without-menu","page-layouts-without-menu")
     */
    public function layout_without_menu()
    {
        $pageConfigs = ['showMenu' => false];
        $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Layouts"], ['name' => "Layout without menu"]];
        return view('/content/page-layouts/layout-without-menu', ['pageConfigs' => $pageConfigs, 'breadcrumbs' => $breadcrumbs]);
    }
    // Empty Layout
    /**
     * @Route("page-layouts/empty","page-layouts-empty")
     */
    public function layout_empty()
    {
        $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Layouts"], ['name' => "Layout Empty"]];
        return view('/content/page-layouts/layout-empty', ['breadcrumbs' => $breadcrumbs]);
    }
    // Blank Layout
    /**
     * @Route("page-layouts/blank","page-layouts-blank")
     */
    public function layout_blank()
    {
        $pageConfigs = ['blankPage' => true];
        $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Layouts"], ['name' => "Layout Blank"]];
        return view('/content/page-layouts/layout-blank', ['pageConfigs' => $pageConfigs, 'breadcrumbs' => $breadcrumbs]);
    }
    // Form Elements - Input
    /**
     * @Route("form/input","form-input")
     */
    public function input()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Form Elements"], ['name' => "Input"]
        ];
        return view('/content/forms/form-elements/form-input', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Form Elements - Input-groups
    /**
     * @Route("form/input-groups","form-input-groups")
     */
    public function input_groups()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Form Elements"], ['name' => "Input Groups"]
        ];
        return view('/content/forms/form-elements/form-input-groups', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Form Elements - Input-mask
    /**
     * @Route("form/input-mask","form-input-mask")
     */
    public function input_mask()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Form Elements"], ['name' => "Input Mask"]
        ];
        return view('/content/forms/form-elements/form-input-mask', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Form Elements - Textarea
    /**
     * @Route("form/textarea","form-textarea")
     */
    public function textarea()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Form Elements"], ['name' => "Textarea"]
        ];
        return view('/content/forms/form-elements/form-textarea', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Form Elements - Checkbox
    /**
     * @Route("form/checkbox","form-checkbox")
     */
    public function checkbox()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Form Elements"], ['name' => "Checkbox"]
        ];
        return view('/content/forms/form-elements/form-checkbox', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Form Elements - Radio
    /**
     * @Route("form/radio","form-radio")
     */
    public function radio()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Form Elements"], ['name' => "Radio"]
        ];
        return view('/content/forms/form-elements/form-radio', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Form Elements - custom_options
    /**
     * @Route("form/custom-options","form-custom-options")
     */
    public function custom_options()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Form Elements"], ['name' => "Custom Options"]
        ];
        return view('/content/forms/form-elements/form-custom-options', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Form Elements - Switch
    /**
     * @Route("form/switch","form-switch")
     */
    public function switch()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Form Elements"], ['name' => "Switch"]
        ];
        return view('/content/forms/form-elements/form-switch', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Form Elements - Select
    /**
     * @Route("form/select","form-select")
     */
    public function select()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Form Elements"], ['name' => "Select"]
        ];
        return view('/content/forms/form-elements/form-select', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Form Elements - Number Input
    /**
     * @Route("form/number-input","form-number-input")
     */
    public function number_input()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Form Elements"], ['name' => "Number Input"]
        ];
        return view('/content/forms/form-elements/form-number-input', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // File Uploader
    /**
     * @Route("form/file-uploader","form-file-uploader")
     */
    public function file_uploader()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Form Elements"], ['name' => "File Uploader"]
        ];
        return view('/content/forms/form-elements/form-file-uploader', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Quill Editor
    /**
     * @Route("form/quill-editor","form-quill-editor")
     */
    public function quill_editor()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Form Elements"], ['name' => "Quill Editor"]
        ];
        return view('/content/forms/form-elements/form-quill-editor', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Form Elements - Date & time Picker
    /**
     * @Route("form/date-time-picker","form-date-time-picker")
     */
    public function date_time_picker()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Form Elements"], ['name' => "Date & Time Picker"]
        ];
        return view('/content/forms/form-elements/form-date-time-picker', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Form Layouts
    /**
     * @Route("form/layouts","form-layouts")
     */
    public function layouts()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Forms"], ['name' => "Form Layouts"]
        ];
        return view('/content/forms/form-layout', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Form Wizard
    /**
     * @Route("form/wizard","form-wizard")
     */
    public function wizard()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Forms"], ['name' => "Form Wizard"]
        ];
        return view('/content/forms/form-wizard', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Form Validation
    /**
     * @Route("form/validation","form-validation")
     */
    public function validation()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Forms"], ['name' => "Form Validation"]
        ];
        return view('/content/forms/form-validation', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }
    // Form repeater
    /**
     * @Route("form/form-repeater","form-repeater")
     */
    public function form_repeater()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Forms"], ['name' => "Form Repeater"]
        ];
        return view('/content/forms/form-repeater', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }
    // Bootstrap Table
    /**
     * @Route("table","table")
     */
    public function table()
    {
        $breadcrumbs = [['link' => "/", 'name' => "Home"], ['name' => "Table Bootstrap"]];
        return view('/content/table/table-bootstrap/table-bootstrap', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Datatable Basic
    /**
     * @Route("table/datatable/basic","datatable-basic'")
     */
    public function datatable_basic()
    {
        $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Datatable"], ['name' => "Basic"]];
        return view('/content/table/table-datatable/table-datatable-basic', ['breadcrumbs' => $breadcrumbs]);
    }

    // Datatable Basic
    /**
     * @Route("table/datatable/advance","datatable-advance'")
     */
    public function datatable_advance()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Datatable"], ['name' => "Advanced"]
        ];
        return view('/content/table/table-datatable/table-datatable-advance', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }
    // Account Settings account
    /**
     * @Route("page/account-settings-account","page-account-settings-account")
     */
    public function account_settings_account()
    {
        $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Account Settings"], ['name' => "Account"]];
        return view('/content/pages/page-account-settings-account', ['breadcrumbs' => $breadcrumbs]);
    }

    // Account Settings security
    /**
     * @Route("page/account-settings-security","page-account-settings-security")
     */
    public function account_settings_security()
    {
        $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Account Settings"], ['name' => "Security"]];
        return view('/content/pages/page-account-settings-security', ['breadcrumbs' => $breadcrumbs]);
    }

    // Account Settings billing
    /**
     * @Route("page/account-settings-billing","page-account-settings-billing")
     */
    public function account_settings_billing()
    {
        $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Account Settings"], ['name' => "Billing & Plans"]];
        return view('/content/pages/page-account-settings-billing', ['breadcrumbs' => $breadcrumbs]);
    }

    // Account Settings notifications
    /**
     * @Route("page/account-settings-notifications","page-account-settings-notifications")
     */
    public function account_settings_notifications()
    {
        $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Account Settings"], ['name' => "Notifications"]];
        return view('/content/pages/page-account-settings-notifications', ['breadcrumbs' => $breadcrumbs]);
    }

    // Account Settings connections
    /**
     * @Route("page/account-settings-connections","page-account-settings-connections")
     */
    public function account_settings_connections()
    {
        $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Account Settings"], ['name' => "Connections"]];
        return view('/content/pages/page-account-settings-connections', ['breadcrumbs' => $breadcrumbs]);
    }

    // Profile
    /**
     * @Route("page/profile","page-profile")
     */
    public function profile()
    {
        $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Pages"], ['name' => "Profile"]];

        return view('/content/pages/page-profile', ['breadcrumbs' => $breadcrumbs]);
    }

    // FAQ
    /**
     * @Route("page/faq","page-faq")
     */
    public function faq()
    {
        $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Pages"], ['name' => "FAQ"]];
        return view('/content/pages/page-faq', ['breadcrumbs' => $breadcrumbs]);
    }

    // Knowledge Base
    /**
     * @Route("page/knowledge-base","page-knowledge-base")
     */
    public function knowledge_base()
    {
        $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Pages"], ['name' => "Knowledge Base"]];
        return view('/content/pages/page-knowledge-base', ['breadcrumbs' => $breadcrumbs]);
    }

    // Knowledge Base Category
    /**
     * @Route("page/knowledge-base/category","page-knowledge-base")
     */
    public function kb_category()
    {
        $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Pages"], ['link' => "/page/knowledge-base", 'name' => "Knowledge Base"], ['name' => "Category"]];
        return view('/content/pages/page-kb-category', ['breadcrumbs' => $breadcrumbs]);
    }

    // Knowledge Base Question
    /**
     * @Route("page/knowledge-base/category/question","page-knowledge-base")
     */
    public function kb_question()
    {
        $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Pages"], ['link' => "/page/knowledge-base", 'name' => "Knowledge Base"], ['link' => "/page/knowledge-base/category", 'name' => "Category"], ['name' => "Question"]];
        return view('/content/pages/page-kb-question', ['breadcrumbs' => $breadcrumbs]);
    }

    // pricing
    /**
     * @Route("page/pricing","page-pricing")
     */
    public function pricing()
    {
        $pageConfigs = ['pageHeader' => false];
        return view('/content/pages/page-pricing', ['pageConfigs' => $pageConfigs]);
    }

    // api key
    /**
     * @Route("page/api-key","page-api-key")
     */
    public function api_key()
    {
        $pageConfigs = ['pageHeader' => false];
        return view('/content/pages/page-api-key', ['pageConfigs' => $pageConfigs]);
    }

    // blog list
    /**
     * @Route("page/blog-list","page-blog-list")
     */
    public function blog_list()
    {
        $pageConfigs = ['contentLayout' => 'content-detached-right-sidebar', 'bodyClass' => 'content-detached-right-sidebar'];

        $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Pages"], ['link' => "javascript:void(0)", 'name' => "Blog"], ['name' => "List"]];

        return view('/content/pages/page-blog-list', ['breadcrumbs' => $breadcrumbs, 'pageConfigs' => $pageConfigs]);
    }

    // blog detail
    /**
     * @Route("page/blog-detail","page-blog-detail")
     */
    public function blog_detail()
    {
        $pageConfigs = ['contentLayout' => 'content-detached-right-sidebar', 'bodyClass' => 'content-detached-right-sidebar'];

        $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Pages"], ['link' => "javascript:void(0)", 'name' => "Blog"], ['name' => "Detail"]];

        return view('/content/pages/page-blog-detail', ['breadcrumbs' => $breadcrumbs, 'pageConfigs' => $pageConfigs]);
    }

    // blog edit
    /**
     * @Route("page/blog-edit","page-blog-edit")
     */
    public function blog_edit()
    {

        $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Pages"], ['link' => "javascript:void(0)", 'name' => "Blog"], ['name' => "Edit"]];

        return view('/content/pages/page-blog-edit', ['breadcrumbs' => $breadcrumbs]);
    }

    // modal examples
    /**
     * @Route("page/modal-examples","modal-examples")
     */
    public function modal_examples()
    {

        $breadcrumbs = [['link' => "/", 'name' => "Home"], ['name' => "Modal Examples"]];

        return view('/content/pages/modal-examples', ['breadcrumbs' => $breadcrumbs]);
    }

    // license
    /**
     * @Route("page/license","license")
     */
    public function license()
    {

        $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Pages"], ['name' => "License"]];

        return view('/content/pages/page-license', ['breadcrumbs' => $breadcrumbs]);
    }
    // Coming Soon
    public function coming_soon()
    {
        $pageConfigs = ['blankPage' => true];

        return view('/content/miscellaneous/page-coming-soon', ['pageConfigs' => $pageConfigs]);
    }

    // Error
    public function error()
    {
        $pageConfigs = ['blankPage' => true];

        return view('/content/miscellaneous/error', ['pageConfigs' => $pageConfigs]);
    }

    // Not-authorized
    public function not_authorized()
    {
        $pageConfigs = ['blankPage' => true];

        return view('/content/miscellaneous/page-not-authorized', ['pageConfigs' => $pageConfigs]);
    }

    // Maintenance
    public function maintenance()
    {
        $pageConfigs = ['blankPage' => true];

        return view('/content/miscellaneous/page-maintenance', [
            'pageConfigs' => $pageConfigs
        ]);
    }


}


?>