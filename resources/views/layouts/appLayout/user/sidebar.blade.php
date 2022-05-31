<div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
    <a href="#" class="header-logo">
        <img src=" {{ asset('widgets/assets/img/logo.png') }}" class="img-fluid rounded-normal light-logo" alt="logo">
        <img src="{{ asset('widgets/assets/img/logo-light.png') }}" class="img-fluid rounded-normal darkmode-logo"
            alt="logo">
    </a>
    <div class="iq-menu-bt-sidebar">
        <i class="las la-bars wrapper-menu"></i>
    </div>
</div>
<div class="data-scrollbar" data-scroll="1">
    <nav class="iq-sidebar-menu">
        <ul id="iq-sidebar-toggle" class="iq-menu">
            <li class="">
                <a href="{{route('user.dashboard')}}">
                    <i class="la la-home"></i><span>Dashboard</span>
                </a>
            </li>
            {{-- <li class="">
                <a href="{{route('student.view')}}">
                    <i class="las la-mobile iq-arrow-left"></i><span>Students</span>
                </a>
            </li> --}}
            <li class=" ">
                <a href="{{route('facultyView')}}">
                    <i class="las la-mobile iq-arrow-left"></i><span>Faculty</span>
                </a>
            </li>
            <li class=" ">
                <a href="{{route('departmentView')}}">
                    <i class="las la-mobile iq-arrow-left"></i><span>Department</span>
                </a>
            </li>

            <li class=" ">
                <a href="{{route('courseView')}}">
                    <i class="las la-mobile iq-arrow-left"></i><span>Course</span>
                </a>
            </li>


            {{-- <li class=" ">
                <a href="">
                    <i class="las la-mobile iq-arrow-left"></i><span>Payments</span>
                </a>
            </li> --}}

            <li class="">
                <a href="" onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                    <i class="lab la-uikit iq-arrow-left"></i><span>Logout</span>
                </a>
                <form id="logout-form" action="" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </nav>
</div>