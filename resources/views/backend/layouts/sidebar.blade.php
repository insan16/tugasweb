<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="{{url('dashboard')}}">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="users-profile.html">
      <i class="bi bi-person"></i>
      <span>Profile</span>
    </a>
  </li><!-- End Profile Page Nav -->

  <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Data Pelanggan</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                    <a href="{{url ('riwayat_tagihan')}}">
                        <i class="bi bi-circle"></i><span>Riwayat Tagihan</span>
                    </a>
                </li>
                <li>
                    <a href="components-alerts.html">
                        <i class="bi bi-circle"></i><span>Pendidikan</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('pengalaman_kerja.index') }}">
                        <i class="bi bi-circle"></i><span>Pengalaman Kerja</span>
                    </a>
                </li>
                <!-- End Components Nav -->

            </ul>
        </li>
</ul>

</aside><!-- End Sidebar-->