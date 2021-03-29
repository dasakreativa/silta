<template>
	<!-- This is for wrapping all components in view routers -->
	<main id="base">
		<transition name="fade" mode="out-in">
			<router-view />
		</transition>
	</main>
</template>

<style lang="scss">
#base {
	overflow-x: hidden !important;
}

.fade {
	&-enter,
	&-leave-to {
		opacity: 0;
		transform: translateY(-2em);
	}

	&-enter-active,
	&-leave-active {
		transition: all .3s ease;
	}
}
</style>