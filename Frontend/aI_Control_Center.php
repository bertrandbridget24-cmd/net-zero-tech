<!DOCTYPE html>
<html class="light" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta content="width=device-width, initial-scale=1.0" name="viewport" />
		<title>LUMENS AI | Carbon-First Optimization</title>
		<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@500;600&display=swap"
			rel="stylesheet"
		/>
		<link
			href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
			rel="stylesheet"
		/>
		<link href="style.css" rel="stylesheet" />
		<script id="tailwind-config">
			tailwind.config = {
				darkMode: "class",
				theme: {
					extend: {
						colors: {
							error: "#ba1a1a",
							"on-background": "#1b1b1d",
							"on-tertiary-fixed-variant": "#653e00",
							"surface-tint": "#565e74",
							"surface-container-low": "#f6f3f5",
							"on-secondary-fixed": "#002109",
							primary: "#000000",
							"on-primary-fixed": "#131b2e",
							"inverse-surface": "#303032",
							"on-primary-container": "#7c839b",
							"surface-bright": "#fcf8fa",
							"primary-fixed-dim": "#bec6e0",
							"on-tertiary": "#ffffff",
							"inverse-primary": "#bec6e0",
							"on-tertiary-container": "#b87500",
							"on-secondary-container": "#007432",
							"on-tertiary-fixed": "#2a1700",
							surface: "#fcf8fa",
							"tertiary-fixed": "#ffddb8",
							"secondary-fixed-dim": "#4ae176",
							"surface-variant": "#e4e2e4",
							"on-error": "#ffffff",
							"primary-container": "#131b2e",
							"on-surface": "#1b1b1d",
							"surface-container-highest": "#e4e2e4",
							"on-secondary": "#ffffff",
							background: "#ffffff",
							"tertiary-container": "#2a1700",
							"on-secondary-fixed-variant": "#005321",
							"surface-container-high": "#eae7e9",
							"outline-variant": "#c6c6cd",
							"on-primary-fixed-variant": "#3f465c",
							"surface-container-lowest": "#ffffff",
							tertiary: "#000000",
							"error-container": "#ffdad6",
							"secondary-container": "#6bff8f",
							"surface-container": "#f0edef",
							"tertiary-fixed-dim": "#ffb95f",
							outline: "#76777d",
							"secondary-fixed": "#6bff8f",
							"inverse-on-surface": "#f3f0f2",
							"on-surface-variant": "#45464d",
							secondary: "#006e2f",
							"on-primary": "#ffffff",
							"primary-fixed": "#dae2fd",
							"surface-dim": "#dcd9db",
							"on-error-container": "#93000a",
						},
						borderRadius: {
							DEFAULT: "0.125rem",
							lg: "0.25rem",
							xl: "0.5rem",
							full: "0.75rem",
						},
						spacing: {
							xl: "40px",
							"margin-mobile": "16px",
							xs: "4px",
							gutter: "16px",
							sm: "8px",
							unit: "4px",
							lg: "24px",
							"margin-desktop": "32px",
							md: "16px",
							"container-max-width": "1440px",
						},
						fontFamily: {
							"data-mono": ["Inter"],
							"label-md": ["Inter"],
							"headline-md": ["Inter"],
							"headline-sm": ["Inter"],
							"label-sm": ["Inter"],
							"body-lg": ["Inter"],
							"body-md": ["Inter"],
							"headline-lg": ["Inter"],
							"label-caps": ["Inter"],
							"data-lg": ["JetBrains Mono"],
							"data-sm": ["JetBrains Mono"],
						},
						fontSize: {
							"data-mono": [
								"14px",
								{
									lineHeight: "1",
									letterSpacing: "-0.01em",
									fontWeight: "500",
								},
							],
							"label-md": [
								"12px",
								{
									lineHeight: "1.4",
									letterSpacing: "0.02em",
									fontWeight: "500",
								},
							],
							"headline-md": [
								"24px",
								{
									lineHeight: "1.3",
									letterSpacing: "-0.01em",
									fontWeight: "600",
								},
							],
							"headline-sm": [
								"18px",
								{
									lineHeight: "1.4",
									letterSpacing: "0",
									fontWeight: "600",
								},
							],
							"label-sm": [
								"11px",
								{
									lineHeight: "1.2",
									letterSpacing: "0.04em",
									fontWeight: "600",
								},
							],
							"body-lg": [
								"16px",
								{
									lineHeight: "1.6",
									letterSpacing: "0",
									fontWeight: "400",
								},
							],
							"body-md": [
								"14px",
								{
									lineHeight: "1.5",
									letterSpacing: "0",
									fontWeight: "400",
								},
							],
							"headline-lg": [
								"32px",
								{
									lineHeight: "1.2",
									letterSpacing: "-0.02em",
									fontWeight: "600",
								},
							],
							"label-caps": [
								"12px",
								{
									lineHeight: "1.0",
									letterSpacing: "0.05em",
									fontWeight: "700",
								},
							],
							"data-lg": [
								"20px",
								{
									lineHeight: "1.2",
									letterSpacing: "-0.02em",
									fontWeight: "600",
								},
							],
							"data-sm": [
								"14px",
								{
									lineHeight: "1.4",
									letterSpacing: "0",
									fontWeight: "500",
								},
							],
						},
					},
				},
			};
		</script>
	</head>
	<body class="bg-background text-on-background min-h-screen">
		<header
			class="flex justify-between items-center w-full px-margin-desktop h-20 sticky top-0 z-40 bg-surface/80 backdrop-blur-md border-b border-outline-variant/30"
		>
			<div class="flex items-center gap-8">
				<span class="font-headline-lg text-headline-lg font-bold tracking-tighter text-primary">LUMENS AI</span>
				<div class="hidden md:flex items-center gap-6">
					<nav class="flex gap-6">
						<a class="text-on-surface-variant font-medium hover:text-primary transition-colors duration-200 px-3 py-1 rounded" href="main.php">
							Main Dashboard
						</a>
						<a class="text-on-surface-variant font-medium hover:text-primary transition-colors duration-200 px-3 py-1 rounded" href="verification_&amp;_MRV%20Module.php">
							MRV Verification
						</a>
						<a class="text-on-surface-variant font-medium hover:text-primary transition-colors duration-200 px-3 py-1 rounded" href="reporting_&amp;_Analytics.php">
							Reporting &amp; Analytics
						</a>
						<a class="text-primary font-bold border-b-2 border-primary px-3 py-1" href="aI_Control_Center.php">AI Control Center</a>
					</nav>
				</div>
			</div>
			<div class="flex items-center gap-6">
				<div class="hidden lg:flex flex-col items-end">
					<span class="font-label-caps text-[10px] text-on-surface-variant">Trailing savings</span>
					<span class="font-data-lg text-data-lg text-secondary" data-metric="trailing-savings"></span>
				</div>
				<div class="h-8 w-[1px] bg-outline-variant/30 mx-2"></div>
				<div class="flex items-center gap-4">
					<span class="material-symbols-outlined text-on-surface-variant hover:text-primary cursor-pointer">notifications_active</span>
					<span class="material-symbols-outlined text-on-surface-variant hover:text-primary cursor-pointer">
						settings_input_component
					</span>
					<img alt="User avatar" class="w-10 h-10 rounded-full border border-outline-variant" src="" />
				</div>
			</div>
		</header>

		<aside
			class="flex flex-col h-full py-8 border-r border-outline-variant/30 fixed left-0 top-0 z-50 bg-surface-container-low/95 backdrop-blur-xl w-64 hidden xl:flex"
		>
			<div class="px-6 mb-10">
				<div class="flex items-center gap-3 mb-2">
					<div class="w-8 h-8 rounded bg-primary text-white flex items-center justify-center">
						<span class="material-symbols-outlined text-[20px]">bolt</span>
					</div>
					<div>
						<h2 class="font-headline-md text-headline-sm font-bold text-on-surface leading-tight">Industrial Hub</h2>
						<p class="font-label-caps text-[10px] text-on-surface-variant" data-label="site-version"></p>
					</div>
				</div>
			</div>
			<nav class="flex-1 px-4 space-y-1">
				<a
					class="flex items-center gap-3 px-4 py-2.5 rounded text-on-surface-variant hover:bg-surface-variant/40 transition-all duration-200 group"
					href="main.php"
				>
					<span class="material-symbols-outlined text-[20px] group-hover:text-primary">dashboard</span>
					<span class="font-label-md text-label-md">Main Dashboard</span>
				</a>
				<a
					class="flex items-center gap-3 px-4 py-2.5 rounded text-on-surface-variant hover:bg-surface-variant/40 transition-all duration-200 group"
					href="verification_&amp;_MRV%20Module.php"
				>
					<span class="material-symbols-outlined text-[20px] group-hover:text-primary">verified</span>
					<span class="font-label-md text-label-md">MRV Verification</span>
				</a>
				<a
					class="flex items-center gap-3 px-4 py-2.5 rounded text-on-surface-variant hover:bg-surface-variant/40 transition-all duration-200 group"
					href="reporting_&amp;_Analytics.php"
				>
					<span class="material-symbols-outlined text-[20px] group-hover:text-primary">analytics</span>
					<span class="font-label-md text-label-md">Reporting &amp; Analytics</span>
				</a>
				<a class="flex items-center gap-3 px-4 py-2.5 rounded bg-primary text-white transition-transform" href="aI_Control_Center.php">
					<span class="material-symbols-outlined text-[20px]">psychology</span>
					<span class="font-label-md text-label-md">AI Control Center</span>
				</a>
			</nav>
			<div class="px-4 mt-auto space-y-6">
				<button class="w-full bg-primary text-white py-3 rounded font-bold font-label-caps text-[11px] hover:opacity-90 transition-all" type="button">
					Export carbon report
				</button>
				<div class="space-y-1">
					<a class="flex items-center gap-3 px-4 py-2 text-on-surface-variant hover:text-primary transition-colors" href="#">
						<span class="material-symbols-outlined text-[18px]">settings_heart</span>
						<span class="font-body-md text-[13px]">System Health</span>
					</a>
					<a class="flex items-center gap-3 px-4 py-2 text-on-surface-variant hover:text-primary transition-colors" href="#">
						<span class="material-symbols-outlined text-[18px]">menu_book</span>
						<span class="font-body-md text-[13px]">Documentation</span>
					</a>
				</div>
			</div>
		</aside>

		<main class="xl:pl-64 min-h-screen transition-all duration-300">
			<div class="px-margin-desktop py-10 max-w-[1440px] mx-auto">
				<div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-10">
					<div>
						<h1 class="font-headline-lg text-headline-lg text-on-surface mb-2">AI Control Center</h1>
						<p class="text-on-surface-variant font-body-md max-w-2xl" data-summary="ai-status"></p>
					</div>
					<div class="flex gap-4">
						<div class="px-4 py-2 solid-card rounded-lg flex items-center gap-3 bg-surface-container-low border border-outline-variant/30">
							<span class="w-2.5 h-2.5 rounded-full bg-secondary animate-pulse"></span>
							<span class="font-label-caps text-label-sm font-bold text-secondary" data-status="optimization"></span>
						</div>
					</div>
				</div>

				<div class="grid grid-cols-12 gap-gutter">
					<section class="col-span-12 lg:col-span-7 space-y-6">
						<div class="flex items-center justify-between mb-4">
							<h3 class="font-label-caps text-label-sm text-on-surface-variant tracking-widest flex items-center gap-2">
								<span class="material-symbols-outlined text-[16px]">bolt</span>
								Active AI recommendations
							</h3>
							<span class="text-secondary font-bold text-data-sm" data-metric="priority-insights"></span>
						</div>
						<div class="space-y-6" data-recommendations></div>
					</section>

					<section class="col-span-12 lg:col-span-5 space-y-gutter">
						<h3 class="font-label-caps text-label-sm text-on-surface-variant tracking-widest flex items-center gap-2">
							<span class="material-symbols-outlined text-[16px]">battery_charging_full</span>
							Battery &amp; EV control
						</h3>
						<div class="solid-card rounded-xl p-8 relative overflow-hidden">
							<div class="relative z-10">
								<div class="flex justify-between items-start mb-10">
									<div>
										<span class="font-label-caps text-[10px] text-on-surface-variant">Current system SOC</span>
										<div class="flex items-baseline gap-2 mt-1">
											<span class="font-data-lg text-[48px] leading-none text-on-surface" data-metric="soc-value"></span>
											<span class="font-headline-md text-secondary">%</span>
										</div>
									</div>
									<div class="text-right">
										<span class="font-label-caps text-[10px] text-on-surface-variant">Discharge rate</span>
										<div class="font-data-lg text-data-lg text-on-surface" data-metric="discharge-rate"></div>
									</div>
								</div>
								<div class="w-full h-4 bg-surface-container-high rounded-full mb-10 p-0.5 border border-outline-variant/30">
									<div class="h-full bg-primary rounded-full relative progress-fill" data-metric="soc-progress">
										<div
											class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-1/2 w-4 h-4 bg-white rounded-full border-4 border-primary"
										></div>
									</div>
								</div>
								<div class="grid grid-cols-2 gap-6">
									<div class="p-4 bg-surface-container-low rounded-lg border border-outline-variant/20">
										<span class="font-label-caps text-[10px] text-on-surface-variant block mb-2 uppercase">Carbon reduction</span>
										<span class="font-data-lg text-data-lg text-secondary tracking-tight" data-metric="carbon-reduction"></span>
										<p class="text-[10px] text-on-surface-variant mt-1 leading-tight" data-metric="carbon-reduction-note"></p>
									</div>
									<div class="p-4 bg-surface-container-low rounded-lg border border-outline-variant/20">
										<span class="font-label-caps text-[10px] text-on-surface-variant block mb-2 uppercase">Time to neutral</span>
										<span class="font-data-lg text-data-lg text-on-surface tracking-tight" data-metric="time-to-neutral"></span>
										<p class="text-[10px] text-on-surface-variant mt-1 leading-tight" data-metric="time-to-neutral-note"></p>
									</div>
								</div>
							</div>
						</div>

						<div class="solid-card rounded-xl overflow-hidden">
							<div class="px-6 py-4 border-b border-outline-variant/30 flex justify-between items-center bg-surface-container-low">
								<span class="font-label-caps text-label-sm font-bold">Managed assets</span>
								<span class="font-label-caps text-label-sm text-on-surface-variant" data-metric="asset-count"></span>
							</div>
							<div class="p-0">
								<table class="w-full text-left font-body-md">
									<thead class="border-b border-outline-variant/20">
										<tr class="font-label-caps text-[10px] text-on-surface-variant bg-surface-container-lowest">
											<th class="px-6 py-3">Asset ID</th>
											<th class="px-6 py-3">State</th>
											<th class="px-6 py-3">Optimization</th>
											<th class="px-6 py-3 text-right">Savings</th>
										</tr>
									</thead>
									<tbody class="divide-y divide-outline-variant/10" data-assets></tbody>
								</table>
							</div>
						</div>
					</section>

					<div class="col-span-12 grid grid-cols-1 md:grid-cols-3 gap-gutter mt-6">
						<div class="solid-card p-6 rounded-xl flex items-center gap-6">
							<div class="p-3 bg-secondary-container/20 rounded-lg">
								<span class="material-symbols-outlined text-secondary text-3xl">forest</span>
							</div>
							<div>
								<span class="font-label-caps text-[10px] text-on-surface-variant">Equivalent trees planted</span>
								<div class="font-data-lg text-headline-md text-on-surface" data-metric="trees-equivalent"></div>
							</div>
						</div>
						<div class="solid-card p-6 rounded-xl flex items-center gap-6">
							<div class="p-3 bg-secondary-container/20 rounded-lg">
								<span class="material-symbols-outlined text-secondary text-3xl">cloud_done</span>
							</div>
							<div>
								<span class="font-label-caps text-[10px] text-on-surface-variant">Avoided emissions</span>
								<div class="font-data-lg text-headline-md text-on-surface" data-metric="avoided-emissions"></div>
							</div>
						</div>
						<div class="solid-card p-6 rounded-xl border-l-4 border-primary flex flex-col justify-center">
							<span class="font-label-caps text-[10px] text-primary mb-1 font-bold">Network status</span>
							<p class="text-on-surface font-body-md leading-tight" data-metric="network-status"></p>
						</div>
					</div>
				</div>
			</div>
		</main>

		<div class="fixed top-0 left-0 w-full h-full pointer-events-none -z-10 opacity-5">
			<div class="absolute top-0 right-0 w-[50rem] h-[50rem] bg-secondary/20 rounded-full blur-[150px]"></div>
			<div class="absolute bottom-0 left-0 w-[40rem] h-[40rem] bg-primary/10 rounded-full blur-[120px]"></div>
		</div>
	</body>
</html>
