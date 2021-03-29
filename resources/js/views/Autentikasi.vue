<template>
	<Wrapper>

		<!-- Heading -->
		<div class="text-center">
			<h3>Selamat Datang</h3>
			<p class="text-muted">Masuk dahulu ke akun anda dan kelola tugas anda.</p>
		</div>
		<!-- End Heading -->
		
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

			<!-- Password Input -->
			<b-form-group id="password-group" label="Kata Sandi" label-for="password">
				<b-input-group>
					<template #prepend>
						<b-input-group-text><i class="fas fa-key fa-fw"></i></b-input-group-text>
					</template>
					<b-form-input id="password" placeholder="Kata sandi anda" :type="form.visible" name="password" v-model="form.password" v-validate="{ required: true, min: 5 }" :state="validateState('password')" aria-describedby="password-feedback" data-vv-as="Kata Sandi"></b-form-input>
					<template #append>
						<b-button v-if="form.visible === 'password'" variant="danger" @click="showPassword"><i class="fas fa-fw" :class="{'fa-eye': form.visible === 'password', 'fa-eye-slash': form.visible === 'text'}"></i></b-button>
						<b-button v-else-if="form.visible === 'text'" variant="primary" @click="hidePassword"><i class="fas fa-fw" :class="{'fa-eye': form.visible === 'password', 'fa-eye-slash': form.visible === 'text'}"></i></b-button> 
					</template>
				</b-input-group>
				<b-form-invalid-feedback id="password-feedback" :class="{ 'd-block' : veeErrors.first('password') }">{{ veeErrors.first('password') }}</b-form-invalid-feedback>
			</b-form-group>
			<!-- End Password Input -->

			<!-- Role User Input -->
			<b-form-group id="roles-group" label="Jenis Pengguna" label-for="roles">
				<b-form-select id="roles" name="roles" v-model="form.role" v-validate="{ required: true }" :options="roles" :state="validateState('roles')" aria-describedby="roles-feedback" data-vv-as="Jenis Pengguna" />
				<b-form-invalid-feedback id="roles-feedback" :class="{ 'd-block' : veeErrors.first('roles') }">{{ veeErrors.first('roles') }}</b-form-invalid-feedback>
			</b-form-group>
			<!-- Role User Input -->

			<!-- Remember Me -->
			<div class="custom-control custom-checkbox mb-3">
				<input type="checkbox" class="custom-control-input" name="remember" id="remember" />
				<label class="custom-control-label" for="remember">Ingatkan Saya</label>
			</div>
			<!-- End Remember Me -->

			<!-- Button Block -->
			<b-button class="mb-2" block variant="primary" type="submit"><i class="fas fa-sign-in-alt fa-fw mr-2"></i>Masuk</b-button>
			<b-button block type="button" :to="{ name: 'lupa-sandi' }" size="sm" variant="muted"><i class="fas fa-fw fa-question-circle mr-2"></i>Lupa Sandi?</b-button>
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
				password: null,
				role: null,

				visible: 'password',
			}
        };
    },
	mounted: function () {
		document.title = "Masuk Dahulu";
	},
	methods: {
		validateState(ref) {
			if ( this.veeFields[ref] && (this.veeFields[ref].dirty || this.veeFields[ref].validated) ) {
				return !this.veeErrors.has(ref);
			}
			return null;
		},
		onSubmit(e) {

			// Init The Validation on Submit Prevent Vue
			this.$validator.validateAll().then(result => {
				if (!result) {
					return;
				}

				// Swal Show Loading Screens
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

				$.ajax({
					url: laravel.base_url + '/api/auth/login',
					type: "POST",
					data: $(e.target).serializeArray(),

					success: function(response) {
						swalWithBootstrapButtons.fire({
							allowOutsideClick: false, 
							allowEscapeKey: false,
							showConfirmButton: false,
							showCancelButton: false,
							showDenyButton: false,
							html: response.html,
							title: response.title,
							icon: response.severity,
						});

						setTimeout(() => {
							Router.push({ name: response.redirect });
							Swal.close();
						}, 5000);
					}, 
					error: function(response) {
						var result = response.responseJSON;
						swalWithBootstrapButtons.fire({
							showConfirmButton: false,
							showCancelButton: true,
							cancelButtonText: 'Oke',
							html: result.html,
							title: result.title,
							icon: result.severity,
						});

					}, 
				});

			});
		},
		showPassword() {
			this.form.visible = 'text';
		},
		hidePassword() {
			this.form.visible = 'password';
		}
	}
}
</script>
