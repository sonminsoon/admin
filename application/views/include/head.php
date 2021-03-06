<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>ADMIN</title>

	<link rel="stylesheet" type="text/css" href="/static/lib/flatadmin/assets/css/vendor.css">
	<link rel="stylesheet" type="text/css" href="/static/lib/flatadmin/assets/css/flat-admin.css">

	<!-- Theme -->
	<link rel="stylesheet" type="text/css" href="/static/lib/flatadmin/assets/css/theme/blue-sky.css">
	<link rel="stylesheet" type="text/css" href="/static/lib/flatadmin/assets/css/theme/blue.css">
	<link rel="stylesheet" type="text/css" href="/static/lib/flatadmin/assets/css/theme/red.css">
	<link rel="stylesheet" type="text/css" href="/static/lib/flatadmin/assets/css/theme/yellow.css">

    <!-- Modal -->
    <link rel="stylesheet" type="text/css" href="/static/lib/modal/css/iziModal.css">

    <!-- Panel -->

</head>

<body>
<div class="app app-default">

    <aside class="app-sidebar" id="sidebar">
        <div class="sidebar-header">
            <a class="sidebar-brand" href="#"><span class="highlight">CrossM</span> Admin</a>
            <button type="button" class="sidebar-toggle">
                <i class="fa fa-times"></i>
            </button>
        </div>
        <div class="sidebar-menu">
            <ul class="sidebar-nav">
                <li class="active">
                    <a href="./index.html">
                        <div class="icon">
                            <i class="fa fa-bar-chart" aria-hidden="true"></i>
                        </div>
                        <div class="title">통계관리</div>
                    </a>
                </li>
                <li class="">
                    <a href="./index.html">
                        <div class="icon">
                            <i class="fa fa-tasks" aria-hidden="true"></i>
                        </div>
                        <div class="title">병원관리</div>
                    </a>
                </li>
                <li class="dropdown ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <div class="icon">
                            <i class="fa fa-comments" aria-hidden="true"></i>
                        </div>
                        <div class="title">프로모션</div>
                    </a>
                    <div class="dropdown-menu">
                        <ul>
                            <li class="section"><i class="fa fa-comments" aria-hidden="true"></i> 상담</li>
                            <li><a href="./uikits/customize.html">카카오톡상담</a></li>
                            <li><a href="./uikits/components.html">빠른상담</a></li>
                            <li><a href="./uikits/card.html">온라인상담</a></li>
                            <li class="line"></li>
<!--                            <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Advanced Components</li>-->
<!--                            <li><a href="./uikits/pricing-table.html">Pricing Table</a></li>-->
<!--                            <!-- <li><a href="./uikits/timeline.html">Timeline</a></li> -->
<!--                            <li><a href="./uikits/chart.html">Chart</a></li>-->
                        </ul>
                    </div>
                </li>
                <li class="">
                    <a href="./messaging.html">
                        <div class="icon">
                            <i class="fa fa-users" aria-hidden="true"></i>
                        </div>
                        <div class="title">회원관리</div>
                    </a>
                </li>
                <li class="">
                    <a href="./messaging.html">
                        <div class="icon">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                        </div>
                        <div class="title">예약관리</div>
                    </a>
                </li>
                <li class="">
                    <a href="./messaging.html">
                        <div class="icon">
                            <i class="fa fa-edit (alias)" aria-hidden="true"></i>
                        </div>
                        <div class="title">커뮤니티</div>
                    </a>
                </li>
                <li class="dropdown ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <div class="icon">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        </div>
                        <div class="title">메일관리</div>
                    </a>
                    <div class="dropdown-menu">
                        <ul>
                            <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> UI Kits</li>
                            <li><a href="./uikits/customize.html">Customize</a></li>
                            <li><a href="./uikits/components.html">Components</a></li>
                            <li><a href="./uikits/card.html">Card</a></li>
                            <li><a href="./uikits/form.html">Form</a></li>
                            <li><a href="./uikits/table.html">Table</a></li>
                            <li><a href="./uikits/icons.html">Icons</a></li>
                            <li class="line"></li>
                            <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Advanced Components</li>
                            <li><a href="./uikits/pricing-table.html">Pricing Table</a></li>
                            <!-- <li><a href="./uikits/timeline.html">Timeline</a></li> -->
                            <li><a href="./uikits/chart.html">Chart</a></li>
                        </ul>
                    </div>
                </li>
               
            </ul>
        </div>
        <div class="sidebar-footer">
            <ul class="menu">
                <li>
                    <a href="/" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-cogs" aria-hidden="true"></i>
                    </a>
                </li>
                <li><a href="#"><span class="flag-icon flag-icon-th flag-icon-squared"></span></a></li>
            </ul>
        </div>
    </aside>

    <script type="text/ng-template" id="sidebar-dropdown.tpl.html">
        <div class="dropdown-background">
            <div class="bg"></div>
        </div>
        <div class="dropdown-container">
            {{list}}
        </div>
    </script>