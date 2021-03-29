<template>
    <div class="container">
        <div class="row min-vh-100 justify-content-center align-items-center text-center">
            <div class="col-md-6">
                <img :src="this.laravel.assets + 'img/error-404.svg'" class="w-100" />
                <h3 class="text-center">Halaman Tidak Dapat Ditemukan!</h3>
                <p class="text-center text-muted">Maaf, halaman tidak dapat ditemukan! Mohon periksa kembali ejaan URL anda.</p>
                <router-link to="/" class="btn btn-primary btn-dim"><i class="fas fa-home fa-fw mr-1"></i>Beranda</router-link>
            </div>
        </div>
    </div>
</template>

<script>
export default {
	data() {
		return {
			laravel: window.laravel,
			passwordValue: null,
    		score: null,
		}
	},
    mounted() {
        document.title = 'Halaman Tidak Dapat Ditemukan!';
    }
}
</script>