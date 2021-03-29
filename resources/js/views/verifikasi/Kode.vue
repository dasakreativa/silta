<template>
	<Wrapper>

		<div v-if="this.$route.query.token">
			<h3 class="text-center">Verifikasikan</h3>
			<p class="text-muted text-center">Masukkan kode verifikasi yang sudah dikirimkan melalui email anda.</p>

			<b-form>
				<b-form-group id="input-group-1" label="Kode" label-for="kode-verifikasi" description="Kode yang sudah diterima">
					<b-form-input id="kode-verifikasi" type="text" placeholder="Masukan Kode" required />
				</b-form-group>

				<b-button type="submit" variant="primary" :block="true"><i class="fas fa-check-circle fa-fw mr-2"></i>Verifikasi!</b-button>
				<b-button varant="muted" :to="{ name: 'reverifikasi' }" :block="true" class="btn-dim btn-sm"><i class="fas fa-sync fa-fw mr-2"></i>Belum Dapat Kode?</b-button>
			</b-form>
		</div>
		<div v-else>
			<h3 class="text-center">Ups, Maaf!</h3>
			<p class="text-muted text-center">Kesalahan tak terduga, mungkin anda lupa memasukan token akses untuk mereset akun anda. Bisa dicoba lagi nanti dengan mengklik tombol "Reset Sandi" dibawah!</p>

			<b-button variant="primary" :to="{ name: 'reverifikasi' }" :block="true"><i class="fas fa-sync fa-fw mr-2"></i>Reset Sandi</b-button>
			<b-button to="/" variant="secondary" :block="true" size="sm" class="btn-dim"><i class="fas fa-home fa-fw mr-2"></i>Kembali</b-button>
		</div>

	</Wrapper>
</template>

<style lang="scss">
.svg-inline--fa.fa-w-18 {
	width: 1.25rem;
}
</style>

<script>
import Router from '../../router.js';
import Wrapper from '../Main.vue';

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
		document.title = "Masukan Kode";
	},
}
</script>
