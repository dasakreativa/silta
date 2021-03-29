<template>
	<Wrapper>

		<div v-if="!output">
			<h3 class="text-center">Verifikasikan</h3>
			<p class="text-muted text-center">Kirimkan email verifikasi anda dengan cara menekan tombol "Kirimkan Email Verifikasi" dibawah.</p>

			<b-form @submit.prevent="verify" method="post">
				<b-form-group v-if="!datauser" id="input-group-1" label="Email" label-for="email" description="Email anda">
					<b-form-input name="email" v-model="email" id="email" type="text" placeholder="mail@example.com" required />
				</b-form-group>

				<b-button variant="primary" block type="submit"><i class="fas fa-paper-plane fa-fw mr-2"></i>Kirimkan Email Verifikasi</b-button>
				<b-button to="/" variant="secondary" class="btn-dim" :block="true" size="sm"><i class="fas fa-home fa-fw mr-2"></i>Kembali</b-button>
			</b-form>
		</div>
		<div v-else>
			<h3 class="text-center">{{ output.title }}</h3>
			<p v-html="output.html" class="text-center text-muted"></p>

			<b-button :block="true" variant="primary" href="https://mail.google.com" target="_blank"><i class="fab fa-google fa-fw mr-2"></i>Buka Email!</b-button>
			<b-button to="/" variant="secondary" :block="true" size="sm"><i class="fas fa-home fa-fw mr-2"></i>Kembali</b-button>
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
            datauser: null,
            email: '',
            output: false,
        };
    },
    methods: {
    	verify(e) {
			const swalWithBootstrapButtons = Swal.mixin({
				customClass: {
					confirmButton: 'btn btn-success btn-block',
					denyButton: 'btn btn-danger btn-block',
					cancelButton: 'btn btn-muted btn-block'
				},
				buttonsStyling: false
			});
			swalWithBootstrapButtons.fire({
				allowOutsideClick: false, 
				allowEscapeKey: false,
				showConfirmButton: false,
				html: `<div class="d-flex justify-content-center align-items-center"><span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span> Sedang Memuat</div>`,
			});
    		if(this.email !== '') {
    			$.post(laravel.base_url + '/api/verify', $(e.target).serializeArray())
    			.then(res => {
					if(res.data === false) {
						swalWithBootstrapButtons.fire({
							showConfirmButton: false,
							showCancelButton: true,
							cancelButtonText: 'Oke',
							html: 'Maaf, ada kesalahan pada peladen! Mohon coba lagi nanti.',
							title: 'Ups, Maaf!',
							icon: 'error',
						});
						this.output = null;
					} else {
						Swal.close();
						this.output = res;
					}
				});
    		} else {
				fetch(laravel.base_url + '/api/verify')
				.then(res => res.json())
				.then(res => {
					if(res.data === false) {
						swalWithBootstrapButtons.fire({
							showConfirmButton: false,
							showCancelButton: true,
							cancelButtonText: 'Oke',
							html: 'Maaf, ada kesalahan pada peladen! Mohon coba lagi nanti.',
							title: 'Ups, Maaf!',
							icon: 'error',
						});
						this.output = null;
					} else {
						Swal.close();
						this.output = res;
					}
				});
			}
    	}
    },
	mounted: function () {
		fetch(laravel.base_url + '/api/siswa/data-diri')
		.then(res => res.json())
		.then(res => {
			if(res.data === false) {
				this.datauser = null;
			} else {
				this.datauser = res;
			}
		})

		document.title = "Kirimkan Email Verifikasi";
	},
}
</script>
