<template>
    <div id="siswa-loggedin" class="d-flex flex-column min-vh-100">

    	<header class="bg-info pb-5">
	        <b-navbar :toggleable="false" type="light" variant="white">
	            <b-container>

	                <!-- Navbar Brand/Title -->
	                <b-navbar-brand to="/siswa">
	                    <img class="d-inline-block align-middle" height="30" :src="laravel.assets + 'img/brands/silta-color.svg'" />
	                </b-navbar-brand>
	                <!-- Navbar Brand/Title -->

	                <b-collapse id="nav-top" is-nav>

	                    <!-- Left aligned nav items -->
	                    <b-navbar-nav class="align-items-center">
	                        <b-nav-text>
	                            <span id="clockwrap" class="ml-2 ml-md-0 border-primary border rounded p-2"></span>
	                        </b-nav-text>
	                    </b-navbar-nav>
	                    <!-- End Left aligned nav items -->

	                    <!-- Right aligned nav items -->
	                    <b-navbar-nav class="ml-auto align-items-center">
	                    	<b-nav-item v-if="!userdata"><b-spinner small type="grow" class="mr-2" /><span>Loading...</span></b-nav-item>
	                        <li class="nav-item dropdown nav-profile" v-if="userdata">
	                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                <div class="d-flex align-items-center">
	                                    <div class="profile">
											<b-img :src="laravel.assets + userdata.foto['url']" height="50" rounded="circle" v-if="userdata.foto" />
											<div class="avatar avatar-lg avatar-xs avatar-primary" v-if="!userdata.foto">AZ</div>
	                                    </div>
	                                    <div class="ml-2 d-none d-md-none d-lg-inline">
	                                        <p class="font-weight-bold mb-0">Amir Zuhdi Wibowo</p>
	                                        <p class="mb-0 text-primary">XII MIPA 1</p>
	                                    </div>
	                                </div>
	                            </a>
	                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
	                                <div class="dropdown-header">
	                                    <div class="user-info">
	                                        <div class="profile-image">
												<b-img :src="laravel.assets + userdata.foto['url']" height="50" rounded="circle" v-if="userdata.foto" />
												<div class="avatar avatar-lg avatar-sm avatar-primary" v-if="!userdata.foto">AZ</div>
	                                        </div>
	                                        <div class="detail">
	                                            <p class="title">Halo Amir</p>
	                                            <p class="job">officialcakadi@gmail.com</p>
	                                        </div>
	                                    </div>
	                                </div>
	                                <a class="dropdown-item" href="#"><i class="fas fa-user fa-fw mr-2"></i>Profil</a>
	                                <a class="dropdown-item" href="#" v-if="!userdata.user['email_verified_at']"><i class="fas fa-envelope fa-fw mr-2"></i>Konfirmasi Email</a>
	                                <a class="dropdown-item" href="#"><i class="fas fa-cog fa-fw mr-2"></i>Pengaturan</a>
	                                <div class="dropdown-divider"></div>
	                                <a class="dropdown-item bg-hover-danger bg-focus-danger bg-active-danger" href="#"><i class="fas fa-sign-in-alt fa-fw mr-2"></i>Keluar</a>
	                            </div>
	                        </li>
	                    </b-navbar-nav>
	                    <!-- End Right aligned nav items -->

	                </b-collapse>
	            </b-container>
	        </b-navbar>

	        <b-navbar toggleable="lg" type="dark" variant="info" id="bottom-navbar">
	        	<b-container>
		            <b-navbar-toggle target="botnav-controller"></b-navbar-toggle>
		            <b-navbar-brand tag="span" class="d-md-none text-info bg-white p-2 rounded">Dasbor Siswa</b-navbar-brand>

		            <b-collapse id="botnav-controller" is-nav>
		                <b-navbar-nav>
		                	<b-nav-item to="/siswa"><i class="fas fa-tachometer-alt mr-2 fa-fw"></i>Dasbor</b-nav-item>
		                	<b-nav-item to="/siswa/pengumuman"><i class="fas fa-bullhorn mr-2 fa-fw"></i>Pengumuman</b-nav-item>

		                    <b-nav-item-dropdown>
		                        <template #button-content>
		                            <i class="fas fa-credit-card mr-2 fa-fw"></i>Pembayaran
		                        </template>

		                        <b-dropdown-item href="#"><i class="fas fa-credit-card mr-2 fa-fw"></i>Riwayat Pembayaran</b-dropdown-item>
		                        <b-dropdown-item href="#"><i class="fas fa-plus mr-2 fa-fw"></i>Pembayaran Baru</b-dropdown-item>
		                    </b-nav-item-dropdown>
		                    
		                    <b-nav-item-dropdown>
		                        <template #button-content>
		                            <i class="fas fa-clock mr-2 fa-fw"></i>Kehadiran
		                        </template>

		                        <b-dropdown-item href="#"><i class="fas fa-clock mr-2 fa-fw"></i>Riwayat Absen</b-dropdown-item>
		                        <b-dropdown-item href="#"><i class="fas fa-plus mr-2 fa-fw"></i>Absensi Baru</b-dropdown-item>
		                    </b-nav-item-dropdown>

		                    <b-nav-item-dropdown>
		                        <template #button-content>
		                            <i class="fas fa-book-reader mr-2 fa-fw"></i>Kelas
		                        </template>

		                        <b-dropdown-item href="#"><i class="fas fa-book-reader mr-2 fa-fw"></i>Kelasku</b-dropdown-item>
		                        <b-dropdown-divider></b-dropdown-divider>
		                        <b-dropdown-item href="#"><i class="fas fa-bookmark mr-2 fa-fw"></i>Tugasku</b-dropdown-item>
		                        <b-dropdown-item href="#"><i class="fas fa-book mr-2 fa-fw"></i>Materiku</b-dropdown-item>
		                    </b-nav-item-dropdown>
		                </b-navbar-nav>

		                <!-- Right aligned nav items -->
		                <b-navbar-nav class="ml-auto">
		                    <b-nav-text class="bg-white p-2 rounded d-none d-md-inline-block d-sm-none text-info">Dasbor Siswa</b-nav-text>
		                </b-navbar-nav>

		            </b-collapse>
	        	</b-container>
	        </b-navbar>
    	</header>

    	<!-- Main Content -->
    	<div class="container flex-grow-1">
    		
    		<!-- Rendering The Components -->
    		<slot></slot>
    		<!-- End of Rendering The Components -->

    	</div>
    	<!-- End Main Content -->

		<!-- Footer -->
		<footer class="footer">
			<div class="container">
				<b-row class="justify-content-center text-md-left text-center align-items-center">
					<b-col md="8">
						<span class="copyright" v-if="!laravel.config.app.footer">Hak Cipta {{ moment().locale('id').format('Y') }} <a href="https://www.silta.co.id">SILTA &mdash; Sistem Informasi Akademik SLTA Sederajat</a> yang dibuat oleh <a href="https://www.dasakreativa.web.id">Dasa Kreativa Studio</a>.</span>
					</b-col>
					<b-col md="4" class="mt-2 mt-md-0">
						<b-nav pills class="justify-content-center justify-md-content-end">
							<b-nav-item>Blog</b-nav-item>
							<b-nav-item>Informasi</b-nav-item>
							<b-nav-item>Status Server</b-nav-item>
						</b-nav>
					</b-col>
				</b-row>
			</div>
		</footer>
		<!-- End Footer -->

    </div>
</template>

<style lang="scss">
#bottom-navbar {
	.navbar-brand,
	a.nav-link {
		font-size: 1rem;
	}

	li.nav-item > a.nav-link {
		padding: .5rem 1rem;
		color: white;
		border-radius: 5px;
		transition: .15s all;
		@media screen and (min-width: 768px) {
			margin-right: .25rem;
		}

		&:hover,
		&:focus,
		&.active {
			outline: 0;
			background: rgba(0,0,0,.1);
		}
	}

	#botnav-controller {
		@media screen and (max-width: 768px) {
			padding: 1rem 0;
		}
	}
}

footer.footer {
	font-size: .875rem;
	background: #fff;
	width: 100%;
	padding: 1rem 0;
	border-top: 1px solid lightgray;
}
</style>

<script>
import '../../addons/all.js';

export default {
	data() {
		return {
			laravel: window.laravel,

			userdata: '',
		}
	},
	created() {
		fetch(laravel.base_url + '/api/siswa/data-diri')
		.then(res => res.json())
		.then(res => {
			this.userdata = res;
		})
	},
	mounted() {
		document.title = "Panel Kontrol Siswa";
	}
}
</script>