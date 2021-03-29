<template>
	<Wrapper>

		<h3 class="text-center">Berhasil Keluar</h3>
		<p class="text-muted text-center">Anda telah berhasil mengakhiri sesi. Silahkan kembali ke beranda dan hapus cache browser.</p>

		<b-button variant="primary" to="/" block><i class="fas fa-home fa-fw mr-2"></i>Ke Beranda</b-button>

	</Wrapper>
</template>

<style lang="scss">
.svg-inline--fa.fa-w-18 {
	width: 1.25rem;
}
</style>

<script>
import Router from '../router.js';
import Wrapper from './Main.vue';

export default {
    components: {
        Wrapper,
    },
    data() {
        return {
            laravel: window.laravel,
        };
    },
	mounted: function () {
		document.title = "Berhasil Keluar";

		fetch(laravel.base_url + '/api/auth/logout');
	},
}
</script>
