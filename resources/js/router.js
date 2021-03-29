/**
 * Core Vue
 */
import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);

/** Initialize Routing Vue */
const router = new VueRouter({
	mode: 'history',
	routes: [
		{ path: '*', component: () => import('./views/ErrorNotFound') },
		{ path: '/', beforeEnter(to, from, next) {
			next({ name: 'autentikasi' });
		}},

		//
		// For Login
		//
		{ path: '/sesi/masuk', name: 'autentikasi', component: () => import('./views/Autentikasi'), beforeEnter(to, from, next) {
			fetch(laravel.base_url + '/api/middlewares/no-auth')
			.then((response) => response.json())
			.then((response) => {
				if (response.type) {
					next({ name: `${response.type}.main` });
				} else {
					next();
				}
			});
		}},
		{ path: '/lupa-sandi', name: 'lupa-sandi', component: () => import('./views/ForgotPassword') },
		{ path: '/sesi/keluar', name: 'keluar', component: () => import('./views/Logout') },

		{ path: '/verify', name: 'reverifikasi', component: () => import('./views/verifikasi/Verifikasikan') },
		{ path: '/verify/enter-code', name: 'verifikasi.enter-code', component: () => import('./views/verifikasi/Kode') },

		//
		// For Siswa
		//
		{ path: '/siswa', name: 'siswa.main', component: () => import('./views/user/Home') },

		//
		// For Admin
		//
		{ path: '/admin', name: 'admin.main', component: () => import('./views/user/Home') },

		//
		// For Guru
		//
		{ path: '/guru', name: 'guru.main', component: () => import('./views/user/Home') },

		//
		// For Pegawai
		//
		{ path: '/pegawai', name: 'pegawai.main', component: () => import('./views/user/Home') },
	],
});

/**
 * Progress Bars Animation Loading
 */
router.beforeResolve((to, from, next) => {
	if (to.name) {
		NProgress.start();
	}
	next();
});
router.afterEach((to, from) => {
  	NProgress.done();
});

export default router;