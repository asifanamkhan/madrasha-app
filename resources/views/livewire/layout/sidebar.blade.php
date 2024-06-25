<nav id="sidebar">
    <div class="sidebar-header">
        <div>MADRASHA APP</div>
    </div>
    <ul class="list-unstyled components">
        <li>
            <a href="#"><i class="fa fa-home"></i> Dashboard</a>
        </li>
        <li>
            <a href="#adminSubmenu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle main-list">
                <i class="fa fa-user"></i> Administrator
            </a>
            <ul class="collapse list-unstyled

        " id="adminSubmenu">

                <li class="

                 ">
                    <a class="list" wire:navigate >Role</a>
                </li>
                <li class="">
                    <a class="list" wire:navigate href="">User role access</a>
                </li>
            </ul>
        </li>


        <li>
            <a href="#misReportSubmenu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle main-list">
                <i class="fa fa-list"></i> Mis reports
            </a>
            <ul class="collapse list-unstyled
        {{-- {{ request()->routeIs('counter') ? 'show' : ' ' }} --}}

        " id="salesSubmenu">
                <li class="">
                    <a class="list" wire:navigate href="">Report 1</a>
                </li>
                <li class="">
                    <a class="list" wire:navigate href="">Report 2</a>
                </li>

            </ul>
        </li>


        <li class="">
            <a wire:navigate href=""><i class="fas fa-hdd"></i></i> Data backup</a>
        </li>
        <li class="">
            <a wire:navigate href=""><i class="fa fa-question-circle" aria-hidden="true"></i></i> Help</a>
        </li>

    </ul>
</nav>
