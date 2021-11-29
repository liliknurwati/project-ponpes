<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link {{ ($title === "Dashboard") ? 'active' : '' }}" href="/">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link {{ ($title === "Pendaftaran") ? 'active' : '' }}" href="/pendaftaran">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Pendaftaran
                            </a>
                            <a class="nav-link {{ ($title === "Infaq") ? 'active' : '' }}" href="/infaq">
                                <div class="sb-nav-link-icon"><i class="fas fa-hand-holding-usd"></i></div>
                                Infaq dan Shodaqoh
                            </a>
                            <a class="nav-link {{ ($title === "Berita") ? 'active' : '' }}" href="/berita">
                                <div class="sb-nav-link-icon"><i class="fas fa-newspaper"></i></div>
                                Berita
                            </a>
                            <a class="nav-link {{ ($title === "Prestasi") ? 'active' : '' }}" href="/prestasi">
                                <div class="sb-nav-link-icon"><i class="fas fa-award"></i></div>
                                Prestasi
                            </a>
                            <a class="nav-link {{ ($title === "Kegiatan Pondok") ? 'active' : '' }}" href="/kegiatan">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Kegiatan Pondok
                            </a>
                            <a class="nav-link {{ ($title === "Data Admin") ? 'active' : '' }}" href="/admin">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-cog"></i></div>
                                Admin
                            </a>
                        </div>
                    </div>
                </nav>
            </div>