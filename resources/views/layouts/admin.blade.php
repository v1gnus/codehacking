<!-- light-blue - v3.3.0 - 2016-03-08 -->

<!DOCTYPE html>
<html>
<head>
    <title>Light Blue - Responsive Admin Dashboard Template</title>

    <link href="{{asset('css/application.min.css')}}" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="utf-8">
    <script>
        /* yeah we need this empty stylesheet here. It's cool chrome & chromium fix
         chrome fix https://code.google.com/p/chromium/issues/detail?id=167083
         https://code.google.com/p/chromium/issues/detail?id=332189
         */
    </script>
</head>
<body>
<div class="logo">
    <h4><a href="index.html">Light <strong>Blue</strong></a></h4>
</div>
<nav id="sidebar" class="sidebar nav-collapse collapse">
    <ul id="side-nav" class="side-nav">
        <li class="active">
            <a href="/admin"><i class="fa fa-home"></i> <span class="name">Dashboard</span></a>
        </li>
        <li class="panel ">
            <a class="accordion-toggle collapsed" data-toggle="collapse"
               data-parent="#side-nav" href="#forms-collapse"><i class="glyphicon glyphicon-user"></i> <span class="name">Users</span></a>
            <ul id="forms-collapse" class="panel-collapse collapse ">
                <li class=""><a href="{{route('admin.users.index')}}">All Users</a></li>
                <li class=""><a href="{{route('admin.users.create')}}">Create Users</a></li>

            </ul>
        </li>
        <li class="panel ">
            <a class="accordion-toggle collapsed" data-toggle="collapse"
               data-parent="#side-nav" href="#stats-collapse"><i class="fa fa-area-chart"></i> <span class="name">Posts</span></a>
            <ul id="stats-collapse" class="panel-collapse collapse ">
                <li class=""><a href="{{route('admin.posts.index')}}">All Posts</a></li>
                <li class=""><a href="{{route('admin.posts.create')}}">Create Posts</a></li>
            </ul>
        </li>
        <li class="panel ">
            <a class="accordion-toggle collapsed" data-toggle="collapse"
               data-parent="#side-nav" href="#ui-collapse"><i class="fa fa-magic"></i> <span class="name">User Interface</span></a>
            <ul id="ui-collapse" class="panel-collapse collapse ">
                <li class=""><a href="ui_buttons.html">Buttons</a></li>
                <li class=""><a href="ui_dialogs.html">Dialogs</a></li>
                <li class=""><a href="ui_notifications.html">Notifications</a></li>
                <li class=""><a href="ui_icons.html">Icons</a></li>
                <li class=""><a href="ui_tabs.html">Tabs</a></li>
                <li class=""><a href="ui_accordion.html">Accordion</a></li>
            </ul>
        </li>
        <li class="panel ">
            <a class="accordion-toggle collapsed" data-toggle="collapse"
               data-parent="#side-nav" href="#components-collapse"><i class="fa fa-tree"></i> <span class="name">Components</span></a>
            <ul id="components-collapse" class="panel-collapse collapse ">
                <li class=""><a href="component_calendar.html">Calendar</a></li>
                <li class=""><a href="component_maps.html" data-no-pjax>Maps</a></li>
                <li class=""><a href="component_gallery.html">Gallery</a></li>
                <li class=""><a href="component_fileupload.html" data-no-pjax>Fileupload</a></li>
                <li class=""><a href="component_bootstrap.html">Bootstrap</a></li>
                <li class=""><a href="component_list_groups.html">List Groups</a></li>
            </ul>
        </li>
        <li class="panel ">
            <a class="accordion-toggle collapsed" data-toggle="collapse"
               data-parent="#side-nav" href="#tables-collapse"><i class="fa fa-cog"></i> <span class="name">Tables</span></a>
            <ul id="tables-collapse" class="panel-collapse collapse ">
                <li class=""><a href="tables_static.html">Static <sup class="text-danger fw-bold">upd</sup></a></li>
                <li class=""><a href="tables_dynamic.html">Dynamic</a></li>
            </ul>
        </li>
        <li class="panel ">
            <a class="accordion-toggle collapsed" data-toggle="collapse"
               data-parent="#side-nav" href="#grid-collapse"><i class="fa fa-th"></i> <span class="name">Widgets</span></a>
            <ul id="grid-collapse" class="panel-collapse collapse ">
                <li class=""><a href="grid_basic.html">Basic</a></li>
                <li class=""><a href="grid_live.html">Live</a></li>
            </ul>
        </li>
        <li class="panel ">
            <a class="accordion-toggle collapsed" data-toggle="collapse"
               data-parent="#side-nav" href="#special-collapse"><i class="fa fa-leaf"></i> <span class="name">Special</span></a>
            <ul id="special-collapse" class="panel-collapse collapse ">
                <li class=""><a href="special_search.html">Search <sup class="text-warning fw-bold">new</sup></a></li>
                <li class=""><a href="special_invoice.html">Invoice</a></li>
                <li class=""><a href="special_inbox.html">Inbox &nbsp; <span class="label label-important">3</span></a></li>
                <li><a target="_blank" href="login.html">Login</a></li>
                <li><a target="_blank" href="error.html">Error Page</a></li>
                <li><a href="landing.html" data-no-pjax>Landing</a></li>
                <li><a href="../light/index.html" data-no-pjax title="Light Blue Transparent Light version">Light <sup class="text-warning fw-bold">new</sup></a></li>
                <li><a href="../white/index.html" data-no-pjax title="Light Blue Transparent White version">White <sup class="text-warning fw-bold">new</sup></a></li>
            </ul>
        </li>
        <li class="panel">
            <a class="accordion-toggle collapsed" data-toggle="collapse"
               data-parent="#side-nav" href="#menu-levels-collapse"><i class="fa fa-folder-open"></i> <span class="name">Menu Levels</span></a>
            <ul id="menu-levels-collapse" class="panel-collapse collapse">
                <li><a href="#">Item 1.1</a></li>
                <li><a href="#">Item 1.2</a></li>
                <li class="panel">
                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                       data-parent="#menu-levels-collapse" href="#sub-menu-1-collapse">Item 1.3</a>
                    <ul id="sub-menu-1-collapse" class="panel-collapse collapse">
                        <li class="panel">
                            <a class="accordion-toggle collapsed" data-toggle="collapse"
                               data-parent="#sub-menu-1-collapse" href="#sub-menu-3-collapse">Item 2.1</a>
                            <ul id="sub-menu-3-collapse" class="panel-collapse collapse">
                                <li><a href="#">Item 3.1</a></li>
                                <li><a href="#">Item 3.2</a></li>
                                <li><a href="#">Item 3.3</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Item 2.2</a></li>
                        <li class="panel">
                            <a class="accordion-toggle collapsed" data-toggle="collapse"
                               data-parent="#sub-menu-1-collapse" href="#sub-menu-2-collapse">Item 2.3</a>
                            <ul id="sub-menu-2-collapse" class="panel-collapse collapse">
                                <li><a href="#">Item 3.4</a></li>
                                <li><a href="#">Item 3.5</a></li>
                                <li><a href="#">Item 3.6</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="visible-xs">
            <a href="login.html"><i class="fa fa-sign-out"></i> <span class="name">Sign Out</span></a>
        </li>
    </ul>

    <h5 class="sidebar-nav-title">Labels <a class="action-link" href="#"><i class="glyphicon glyphicon-plus"></i></a></h5>
    <!-- some styled links in sidebar. ready to use as links to email folders, projects, groups, etc -->
    <ul class="sidebar-labels">
        <li>
            <a href="#">
                <!-- yep, .circle again -->
                <i class="fa fa-circle text-warning"></i>
                <span class="label-name">My Recent</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-circle text-gray"></i>
                <span class="label-name">Starred</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-circle text-danger"></i>
                <span class="label-name">Background</span>
            </a>
        </li>
    </ul>

    <h5 class="sidebar-nav-title">Projects</h5>
    <!-- A place for sidebar notifications & alerts -->
    <div class="sidebar-alerts">
        <div class="alert fade in">
            <a href="#" class="close" data-dismiss="alert" aria-hidden="true">&times;</a>
            <span class="text-white fw-semi-bold">Sales Report</span> <br>
            <div class="progress progress-xs mt-xs mb-0">
                <div class="progress-bar progress-bar-gray-light" style="width: 16%"></div>
            </div>
            <small>Calculating x-axis bias... 65%</small>
        </div>
        <div class="alert fade in">
            <a href="#" class="close" data-dismiss="alert" aria-hidden="true">&times;</a>
            <span class="text-white fw-semi-bold">Personal Responsibility</span> <br>
            <div class="progress progress-xs mt-xs mb-0">
                <div class="progress-bar progress-bar-danger" style="width: 23%"></div>
            </div>
            <small>Provide required notes</small>
        </div>
    </div>
</nav>    <div class="wrap">
    <header class="page-header">
        <div class="navbar">
            <ul class="nav navbar-nav navbar-right pull-right">
                <li class="visible-phone-landscape">
                    <a href="#" id="search-toggle">
                        <i class="fa fa-search"></i>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" title="Messages" id="messages"
                       class="dropdown-toggle"
                       data-toggle="dropdown">
                        <i class="glyphicon glyphicon-comment"></i>
                    </a>
                    <ul id="messages-menu" class="dropdown-menu messages" role="menu">
                        <li role="presentation">
                            <a href="#" class="message">
                                <img src="{{asset('img/1.png')}}" alt="">
                                <div class="details">
                                    <div class="sender">Jane Hew</div>
                                    <div class="text">
                                        Hey, John! How is it going? ...
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#" class="message">
                                <img src="{{asset('img/2.png')}}" alt="">
                                <div class="details">
                                    <div class="sender">Alies Rumiancaŭ</div>
                                    <div class="text">
                                        I'll definitely buy this template
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#" class="message">
                                <img src="{{asset('img/3.png')}}" alt="">
                                <div class="details">
                                    <div class="sender">Michał Rumiancaŭ</div>
                                    <div class="text">
                                        Is it really Lore ipsum? Lore ...
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#" class="text-align-center see-all">
                                See all messages <i class="fa fa-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" title="8 support tickets"
                       class="dropdown-toggle"
                       data-toggle="dropdown">
                        <i class="glyphicon glyphicon-globe"></i>
                        <span class="count">8</span>
                    </a>
                    <ul id="support-menu" class="dropdown-menu support" role="menu">
                        <li role="presentation">
                            <a href="#" class="support-ticket">
                                <div class="picture">
                                    <span class="label label-important"><i class="fa fa-bell-o"></i></span>
                                </div>
                                <div class="details">
                                    Check out this awesome ticket
                                </div>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#" class="support-ticket">
                                <div class="picture">
                                    <span class="label label-warning"><i class="fa fa-question-circle"></i></span>
                                </div>
                                <div class="details">
                                    "What is the best way to get ...
                                </div>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#" class="support-ticket">
                                <div class="picture">
                                    <span class="label label-success"><i class="fa fa-tag"></i></span>
                                </div>
                                <div class="details">
                                    This is just a simple notification
                                </div>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#" class="support-ticket">
                                <div class="picture">
                                    <span class="label label-info"><i class="fa fa-info-circle"></i></span>
                                </div>
                                <div class="details">
                                    12 new orders has arrived today
                                </div>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#" class="support-ticket">
                                <div class="picture">
                                    <span class="label label-important"><i class="fa fa-plus"></i></span>
                                </div>
                                <div class="details">
                                    One more thing that just happened
                                </div>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#" class="text-align-center see-all">
                                See all tickets <i class="fa fa-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="divider"></li>
                <li class="hidden-xs">
                    <a href="#" id="settings"
                       title="Settings"
                       data-toggle="popover"
                       data-placement="bottom">
                        <i class="glyphicon glyphicon-cog"></i>
                    </a>
                </li>
                <li class="hidden-xs dropdown">
                    <a href="#" title="Account" id="account"
                       class="dropdown-toggle"
                       data-toggle="dropdown">
                        <i class="glyphicon glyphicon-user"></i>
                    </a>
                    <ul id="account-menu" class="dropdown-menu account" role="menu">
                        <li role="presentation" class="account-picture">
                            <img src="{{asset('img/2.png')}}" alt="">
                            {{ Auth::user()->name }}
                        </li>
                        <li role="presentation">
                            <a href="form_account.html" class="link">
                                <i class="fa fa-user"></i>
                                Profile
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="component_calendar.html" class="link">
                                <i class="fa fa-calendar"></i>
                                Calendar
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#" class="link">
                                <i class="fa fa-inbox"></i>
                                Inbox
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="visible-xs">
                    <a href="#"
                       class="btn-navbar"
                       data-toggle="collapse"
                       data-target=".sidebar"
                       title="">
                        <i class="fa fa-bars"></i>
                    </a>
                </li>
                <li class="hidden-xs"><a href="{{ url('/logout') }}"><i class="glyphicon glyphicon-off"></i></a></li>
            </ul>
            <form id="search-form" class="navbar-form pull-right" role="search">
                <input type="search" class="form-control search-query" placeholder="Search...">
            </form>

        </div>
    </header>

            @yield('content')

    <div class="loader-wrap hiding hide">
        <i class="fa fa-circle-o-notch fa-spin"></i>
    </div>
</div>
<!-- common libraries. required for every page-->
<script src="{{asset('lib/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('lib/jquery-pjax/jquery.pjax.js')}}"></script>
<script src="{{asset('lib/bootstrap-sass/assets/javascripts/bootstrap.min.js')}}"></script>
<script src="{{asset('lib/widgster/widgster.js')}}"></script>
<script src="{{asset('lib/underscore/underscore.js')}}"></script>

<!-- common application js -->
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/settings.js')}}"></script>

            @yield('page_specific_scripts')

</body>
</html>