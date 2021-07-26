<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Star Private School</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">

    <link href="{{asset('backend/main.css')}}" rel="stylesheet">
</head>
<body>
    <style type="text/css">

    </style>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo" >

                <!-- <div class="logo-src" >
                    <h1></h1>
                </div> -->
                <h5 style="color: green; font-style: italic;">Star Private School</h5>
                <div class="header__pane ml-auto">

                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>   
            <div class="app-header__content">

                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content-left  ml-3 header-user-info">
                                <div class="widget-heading">
                                    Alina Mclourd
                                </div>
                                <div class="widget-subheading">
                                    VP People Manager
                                </div>
                            </div>
                            <div class="widget-content-right header-user-info ml-3">
                                <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                    <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>        
            </div>
        </div>
    </div>       
    <div class="app-main">
        <div class="app-sidebar sidebar-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div> 
            <div class="scrollbar-sidebar">
                <div class="app-sidebar__inner">
                    <ul class="vertical-nav-menu">
                        @role('Staff')
                        <li class="app-sidebar__heading">Academic Year </li>
                        <li>
                            <a href="{{route('backside.academic.index')}}" class="mm-active">
                                <i class="metismenu-icon pe-7s-date"></i>
                                Academic Year
                            </a>
                        </li>
                        <li class="app-sidebar__heading">Class and Standards</li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon pe-7s-notebook"></i>
                                Classroom Management
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="{{route('backside.classroom.index')}}">
                                        <i class="metismenu-icon">
                                        </i>Classroom List
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('backside.classroom.create')}}">
                                        <i class="metismenu-icon">
                                        </i>Add Classess
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon pe-7s-map"></i>
                                Standard Management
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="{{route('backside.grade.index')}}">
                                        <i class="metismenu-icon">
                                        </i>Standard List
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('backside.grade.create')}}">
                                        <i class="metismenu-icon">
                                        </i>Add Standard
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="app-sidebar__heading">Subjects </li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon pe-7s-science  "></i>
                                Subjects Management
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="{{route('backside.subject.index')}}">
                                        <i class="metismenu-icon"></i>
                                        Subject List
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('backside.subject.create')}}">
                                        <i class="metismenu-icon">
                                        </i>Add New Subject
                                    </a>
                                </li>


                            </ul>
                        </li>

                        <li class="app-sidebar__heading">Teachers</li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon pe-7s-users"></i>
                                Teacher Management
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="{{route('backside.teacher.index')}}">
                                        <i class="metismenu-icon">
                                        </i>Teachers List
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('backside.teacher.create')}}">
                                        <i class="metismenu-icon">
                                        </i>Add Teachers
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="app-sidebar__heading">Students</li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon pe-7s-study"></i>
                                Students Management
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="{{route('backside.student.index')}}">
                                        <i class="metismenu-icon">
                                        </i>Students List
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('backside.student.create')}}">
                                        <i class="metismenu-icon">
                                        </i>Add Student
                                    </a>
                                </li>

                            </ul>
                        </li>


                        <li class="app-sidebar__heading">Timetable</li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon pe-7s-study"></i>
                                Timetable Management
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>

                            <ul>
                                <li>
                                    <a href="{{route('backside.timetable.index')}}">
                                        <i class="metismenu-icon">
                                        </i>Timetable List
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('backside.timetable.create')}}">
                                        <i class="metismenu-icon">
                                        </i>New Timetable
                                    </a>
                                </li>


                            </ul>
                        </li>

                        <li class="app-sidebar__heading">Record</li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon pe-7s-graph2"></i>
                                Record Management
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="{{route('backside.record.index')}}">
                                        <i class="metismenu-icon">
                                        </i>Record List
                                    </a>
                                </li>

                                <li>
                                    <a href="{{route('backside.record.create')}}">
                                        <i class="metismenu-icon">
                                        </i>New Record
                                    </a>
                                </li>


                            </ul>
                        </li>
                        @endrole

                        @hasanyrole('Teacher|Staff')
                        <li class="app-sidebar__heading">Attendance</li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon pe-7s-graph2"></i>
                                Attendance Management
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                               <li>
                                <a href="{{route('backside.attendance.index')}}">
                                    <i class="metismenu-icon">
                                    </i>Attendance List
                                </a>
                            </li>
                            <li>
                                <a href="{{route('backside.attendance.create')}}">
                                    <i class="metismenu-icon">
                                    </i>Add Attendance
                                </a>
                            </li>
                            @endhasanyrole

                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </div>  
    <div class="app-main__outer">
        <div class="app-main__inner">
            {{$slot}}
        </div>

    </div>
</div>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
</div>
</div>
<script type="text/javascript" src="{{asset('backend/assets/scripts/main.js')}}"></script></body>
</html>
