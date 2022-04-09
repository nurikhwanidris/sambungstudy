<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon">
            <img src="https://www.jupem.gov.my/jupem18a/assets/uploads/images/contents/20190514053335-NRE-Logo-Jabatan-Ukur-dan-Pemetaan-Malaysia-JUPEM2-1-300x287-300x287.png"
                alt="" srcset="" style="height:40px; width:40px;">
        </div>
        <div class="sidebar-brand-text mx-3">SSP | JUPEM</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>



    <!-- Nav Item - Pages Collapse Menu -->
    @if (Auth::user()->role == 0)
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Permohonan
        </div>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-file-alt"></i>
                <span>Permohonan</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Permohonan</h6>
                    <a class="collapse-item" href="/permohonan/create">Cipta Permohonan</a>
                    <a class="collapse-item text-wrap" href="/permohonan">Status Permohonan</a>
                </div>
            </div>
        </li>
    @endif

    @if (Auth::user()->role == 2 || Auth::user()->isAdmin == 1)
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Tapisan
        </div>
        {{-- Unit Tatatertib --}}
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsedUTT"
                aria-expanded="true" aria-controls="collapsedUTT">
                <i class="fas fa-fw fa-id-card"></i>
                <span>Unit Tatatertib</span>
            </a>
            <div id="collapsedUTT" class="collapse" aria-labelledby="headingPages"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Senarai Permohonan</h6>
                    <a class="collapse-item" href="/utt/senaraipermohonan">Senarai</a>
                </div>
            </div>
        </li>
    @endif

    @if (Auth::user()->role == 3 || Auth::user()->isAdmin == 1)
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Tapisan
        </div>
        {{-- BKP --}}
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBKP"
                aria-expanded="true" aria-controls="collapseBKP">
                <i class="fas fa-fw fa-id-card"></i>
                <span>BKP</span>
            </a>
            <div id="collapseBKP" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Senarai Permohonan</h6>
                    <a class="collapse-item" href="/bkp/senaraipermohonan">Senarai</a>
                </div>
            </div>
        </li>
    @endif

    @if (Auth::user()->role == 1 || Auth::user()->isAdmin == 1)
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Tapisan
        </div>
        {{-- PUB --}}
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePUB"
                aria-expanded="true" aria-controls="collapsePUB">
                <i class="fas fa-fw fa-id-card"></i>
                <span>PUB</span>
            </a>
            <div id="collapsePUB" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Senarai Permohonan</h6>
                    <a class="collapse-item" href="/pub/senaraipermohonan">Senarai</a>
                </div>
            </div>
        </li>
    @endif

    @if (Auth::user()->role == 4 || Auth::user()->isAdmin == 1)
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Tapisan
        </div>
        {{-- JKKPL --}}
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseJKKPL"
                aria-expanded="true" aria-controls="collapseJKKPL">
                <i class="fas fa-fw fa-id-card"></i>
                <span>JKKPL</span>
            </a>
            <div id="collapseJKKPL" class="collapse" aria-labelledby="headingPages"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Senarai Permohonan</h6>
                    <a class="collapse-item" href="/jkkpl/senaraipermohonan">Senarai</a>
                </div>
            </div>
        </li>
    @endif

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
