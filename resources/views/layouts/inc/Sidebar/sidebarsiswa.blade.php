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
            <div class="info ml-2 pt-1">
                <a href="/profilesiswa/{id}" class="d-block" style="color: white">{{ Auth::user()->nama }}
                    <br>
                    {{ Auth::user()->role }}
                </a>
                
            </div>
            
        </div>
    </div>
    <!-- dashboard -->
    <nav style="margin-top:-10px;">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="/dashboardsiswa" class="nav-link">
                    <i class="nav-icon fas"><img src="../img/kom.png" style="width: 20px; height:20px"></i>
                    <p style="color: white">
                        Dashboard
                    </p>
                </a>
            </li>
    
        <!-- Surat Izin orang Tua -->
        <li class="nav-item">
                <a href="/izinsiswa" class="nav-link">
                    <i class="nav-icon fas"><img src="../img/checking.png" style="width: 20px; height:20px"></i>
                    <p style="color: white">
                        Izin Orang Tua
                    </p>
                </a>
            </li>

            <!-- Daftar Hadir -->
            <li class="nav-item">
                <a href="{{ route('presensi.index') }}" class="nav-link">
                    <i class="nav-icon fas"><img src="../img/clipboard.png" style="width: 20px; height:20px"></i>
                    <p style="color: white">
                        Daftar Hadir
                    </p>
                </a>
            </li>

            <!-- Jurnal PKL -->
            <li class="nav-item">
                <a href="/Jurnalpkl" class="nav-link">
                    <i class="nav-icon fas"><img src="../img/rekapan.png" style="width: 20px; height:20px"></i>
                    <p style="color: white">
                        Jurnal PKL
                    </p>
                </a>
            </li>

            {{-- {{ route('laporansiswa.index') }} --}}
            <!-- Laporan -->
            <li class="nav-item">
                <a href="#" class="nav-link"> 
                    <i class="nav-icon fas"><img src="../img/report.png" style="width: 20px; height:20px"></i>
                    <p style="color: white">
                        Laporan
                    </p>
                </a>
            </li>

            <!-- Nilai -->
            <li class="nav-item">
                <a href="/nilaisiswa" class="nav-link">
                    <i class="nav-icon fas"><img src="../img/checklist.png" style="width: 20px; height:20px"></i>
                    <p style="color: white">
                        Nilai
                    </p>
                </a>
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