
<aside class="main-sidebar elevation-4 position:in" style="background-color: #34365B; text-color:white">

    <a href="/adminlte/index3.html" class="brand-link">
        <img src="../img/s.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-block" style="color: white;">SIM PKL</span>
    </a>
    
   

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="/profileadmin" class="d-block" style="color: white">Admin SIM PKL</a>
                
            </div>
            
        </div>
    </div>

    <nav style="margin-top:-10px;">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="/dashboardadmin" class="nav-link">
                    <i class="nav-icon fas"><img src="../img/kom.png" style="width: 20px; height:20px"></i>
                    <p style="color: white">
                        Dashboard
                    </p>
                </a>
            </li>


            {{-- Menu Persuratan--}}
            <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas"><img src="../img/folder.png" style="width: 20px; height:20px"></i>
                            <p style="color: white">Persuratan<i class="right fas fa-angle-left"></i></p>
                    </a>

                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/suratpengantaradmin" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                        <p style="color: white">Surat Pengantar</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="/suratpermohonanadmin" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p style="color: white">Surat Permohonan</p>
                </a>
            </li>

        </ul>

        {{-- Menu Rekap Data --}}
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas"><img src="../img/rekapan.png" style="width: 20px; height:20px"></i>
            <p style="color: white">
                Rekapan
                <i class="right fas fa-angle-left"></i>
            </p>
            </a>

                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/rekapdatasiswa" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p style="color: white">Rekap Data Siswa</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="rekapdaftarnilai" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p style="color: white">Rekap Daftar Nilai</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/rekaphasillaporan" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p style="color: white">Rekap Hasil Laporan</p>
                        </a>
                    </li>
                </ul>
        </li>
            {{-- Menu Logout --}}
            <li class="nav-item">
                <a href="/login" class="nav-link">
                    <i class="nav-icon fas"><img src="../img/logout.png" style="width: 20px; height:20px"></i>
                    <p style="color: white">
                        Log Out
                    </p>
                </a>
            </li>

        </li>
        </ul>
    </nav>

</aside>