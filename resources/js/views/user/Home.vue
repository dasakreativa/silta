<template>
	<Wrapper>

		<!-- Column Definition -->
		<b-row>

			<b-col md="4" class="mt-n5">

				<b-card v-if="!datauser">
					<div class="d-flex justify-content-center align-items-center">
						<b-spinner small type="grow" class="mr-2" /><span>Loading...</span>
					</div>
				</b-card>
				<b-card no-body v-else-if="datauser">
					<b-card-header class="bg-white border-0">
						<b-row>
							<b-col md="4">
								<b-img :src="laravel.assets + datauser.foto['url']" rounded="circle" fluid v-if="datauser.foto" />
								<div class="avatar avatar-lg avatar-primary" v-if="!datauser.foto">AZ</div>
							</b-col>
							<b-col md="8">
								<h3>Halo, {{ datauser.biodata['nama_depan'] }}!</h3>
								<p class="mb-0 text-muted">{{ datauser.user['email'] }}<b-badge variant="danger" v-if="!datauser.user['email_verified_at']">Belum Dikonfirmasi!</b-badge></p>
							</b-col>
						</b-row>
					</b-card-header>
					<b-table-simple :borderless="true" :responsive="true" class="mb-0" :striped="true">
						<b-tbody>
							<b-tr>
								<b-th>Kelas</b-th>
								<b-td>{{ datauser.biodata['kelas'] }} {{ datauser.biodata['jurusan'] }}</b-td>
							</b-tr>
							<b-tr>
								<b-th>NIS</b-th>
								<b-td>{{ datauser.biodata['nis'] }}</b-td>
							</b-tr>
							<b-tr>
								<b-th>NISN</b-th>
								<b-td>{{ datauser.biodata['nisn'] }}</b-td>
							</b-tr>
						</b-tbody>
					</b-table-simple>
				</b-card>

			</b-col>
			<b-col md="8" class="mt-3">
				
				<!-- For Heading -->
				<b-row class="justify-content-between border-bottom pb-3 mb-3 align-items-center">
					
					<b-col md="6">
						<h3>Halaman Depan Panel Siswa</h3>
					</b-col>
					<b-col md="6">
						<b-breadcrumb class="float-right bg-transparant bg-transparent">
							<b-breadcrumb-item active><i class="fas fa-home fa-fw mr-2"></i>Beranda</b-breadcrumb-item>
						</b-breadcrumb>
					</b-col>

				</b-row>
				<!-- End For Heading -->

				<b-row>
					<b-col md="6" class="mb-3">
						<b-card><b-spinner small type="grow" class="mr-2" /><span>Loading...</span></b-card>
					</b-col>
					<b-col md="6" class="mb-3">
						<b-card><b-spinner small type="grow" class="mr-2" /><span>Loading...</span></b-card>
					</b-col>
					<b-col md="6" class="mb-3">
						<b-card><b-spinner small type="grow" class="mr-2" /><span>Loading...</span></b-card>
					</b-col>
					<b-col md="6" class="mb-3">
						<b-card><b-spinner small type="grow" class="mr-2" /><span>Loading...</span></b-card>
					</b-col>
				</b-row>

			</b-col>

		</b-row>
		<!-- End Column Definition -->

	</Wrapper>
</template>

<style lang="scss">
.svg-inline--fa.fa-w-18 {
	width: 1.25rem;
}
</style>

<script>
import Router from '../../router.js';
import Wrapper from './Main.vue';

export default {
    components: {
        Wrapper,
    },
    data() {
        return {
            laravel: window.laravel,
            datauser: null,
        };
    },
    created() {
		fetch(laravel.base_url + '/api/siswa/data-diri')
		.then(res => res.json())
		.then(res => {
			this.datauser = res;
		});

    },
	mounted: function () {
		document.title = "Panel Kontrol Pengguna";
	},
}
</script>
