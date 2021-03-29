<template>
	<Wrapper>

		<b-alert show variant="info">
			<div class="alert-icon"><i class="fas fa-info-circle"></i></div>
			<h3>Halaman Lupa Kata Sandi</h3>
			<p>Anda bisa mengembalikan akun dengan cara mengirimkan email validasi akun anda dan ganti kata sandi dengan mudah.</p>
		</b-alert>
		
		<!-- Form -->
		<b-form @submit.stop.prevent="onSubmit">

			<!-- Email Input -->
			<b-form-group id="email-group" label="Email" label-for="email">
				<b-input-group>
					<template #prepend>
						<b-input-group-text><i class="fas fa-envelope fa-fw"></i></b-input-group-text>
					</template>
					<b-form-input placeholder="Email anda" id="email" name="email" v-model="form.email" v-validate="{ required: true, min: 3, email: true }" :state="validateState('email')" aria-describedby="email-feedback" data-vv-as="Email"></b-form-input>
				</b-input-group>
				<b-form-invalid-feedback id="email-feedback" :class="{ 'd-block' : veeErrors.first('email') }">{{ veeErrors.first('email') }}</b-form-invalid-feedback>
			</b-form-group>
			<!-- End Email Input -->

			<!-- Button Block -->
			<b-button class="mb-2" block variant="primary" type="submit"><i class="fas fa-sign-in-alt fa-fw mr-2"></i>Masuk</b-button>
			<b-button block type="button" size="sm" :to="{ name: 'autentikasi' }" variant="muted"><i class="fas fa-fw fa-home mr-2"></i>Kembali</b-button>
			<!-- End Button Block -->

		</b-form>
		<!-- End Form -->

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
    beforeEnter: function() {
    	console.log("this is a middlewarer");
    },
    components: {
        Wrapper,
    },
    data() {
        return {
            laravel: window.laravel,
			roles: [
				{ value: null, text: "--[ Pilih Salah Satu ] --", disabled: true },
				{ value: "siswa", text: "Siswa" },
				{ value: "guru", text: "Guru" },
				{ value: "pegawai", text: "Pegawai" },
				{ value: "admin", text: "Administrator" }
			],
			form: {
				email: null,
			}
        };
    },
	mounted: function () {
		document.title = "Lupa Sandi?";
	},
	methods: {
		validateState(ref) {
			if ( this.veeFields[ref] && (this.veeFields[ref].dirty || this.veeFields[ref].validated) ) {
				return !this.veeErrors.has(ref);
			}
			return null;
		},
		onSubmit(e) {
			this.$validator.validateAll().then(result => {
				if (!result) {
					return;
				}
			});
		},
	}
}
</script>
