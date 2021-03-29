<template>
	<main id="login-wrapper" class="align-content-center d-flex flex-column justify-content-between min-vh-100">

		<!-- Wrapper -->
		<div class="container">
			<b-row class="justify-content-center py-3">
				<b-col lg="5" md="12">

					<!-- Login Wrapper -->
					<b-card no-body>
						<b-card-header class="bg-white">
							<b-img-lazy fluid rounded center :style="{width: '50%'}" :src="laravel.assets + 'img/brands/silta-color.svg'" alt="Logo SILTA" />
						</b-card-header>
						<b-card-body>

							<slot></slot>

						</b-card-body>
					</b-card>
					<!-- End Login Wrapper -->

				</b-col>
			</b-row>
		</div>
		<!-- End Wrapper -->

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

	</main>
</template>

<style lang="scss">
main#login-wrapper {
	footer.footer {
		font-size: .875rem;
		background: #fff;
		width: 100%;
		padding: 1rem 0;
		border-top: 1px solid lightgray;
	}
}
</style>

<script>
import '../addons/all.js';

export default {
	data() {
		return {
			laravel: window.laravel,
		}
	},
}
</script>