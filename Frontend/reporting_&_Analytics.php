<!DOCTYPE html>
<html class="light" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta content="width=device-width, initial-scale=1.0" name="viewport" />
		<title>LUMENS AI - Reporting &amp; Analytics</title>
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
	<body class="bg-background text-on-surface font-body-md selection:bg-secondary/20">
		<aside
			class="flex flex-col h-full py-8 border-r border-outline-variant fixed left-0 top-0 z-50 bg-surface-container-lowest w-64 hidden md:flex"
		>
			<div class="px-6 mb-10">
				<h1 class="font-headline-md text-headline-md font-bold text-on-surface">Industrial Hub</h1>
				<p class="text-on-surface-variant text-xs mt-1" data-label="site-version"></p>
			</div>
			<nav class="flex-1 space-y-1 px-4">
				<a
					class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-all duration-200 group"
					href="main.php"
				>
					<span class="material-symbols-outlined">dashboard</span>
					<span class="font-label-caps text-label-caps">Main Dashboard</span>
				</a>
				<a
					class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-all duration-200 group"
					href="verification_&amp;_MRV%20Module.php"
				>
					<span class="material-symbols-outlined">verified</span>
					<span class="font-label-caps text-label-caps">MRV Verification</span>
				</a>
				<a
					class="flex items-center gap-3 px-4 py-3 bg-secondary/5 text-secondary border-r-4 border-secondary transition-all duration-200 group"
					href="reporting_&amp;_Analytics.php"
				>
					<span class="material-symbols-outlined">analytics</span>
					<span class="font-label-caps text-label-caps">Reporting &amp; Analytics</span>
				</a>
				<a
					class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-all duration-200 group"
					href="aI_Control_Center.php"
				>
					<span class="material-symbols-outlined">psychology</span>
					<span class="font-label-caps text-label-caps">AI Control Center</span>
				</a>
			</nav>
			<div class="px-4 mt-auto space-y-4">
				<button class="w-full bg-primary text-on-primary py-3 px-4 font-label-caps text-label-caps rounded-lg hover:opacity-90 transition-all" type="button">
					Export Carbon Report
				</button>
				<div class="space-y-1">
					<a class="flex items-center gap-3 px-4 py-2 text-on-surface-variant hover:text-on-surface transition-colors" href="#">
						<span class="material-symbols-outlined text-sm">settings_heart</span>
						<span class="text-xs">System Health</span>
					</a>
					<a class="flex items-center gap-3 px-4 py-2 text-on-surface-variant hover:text-on-surface transition-colors" href="#">
						<span class="material-symbols-outlined text-sm">menu_book</span>
						<span class="text-xs">Documentation</span>
					</a>
				</div>
			</div>
		</aside>

		<main class="md:ml-64 min-h-screen">
			<header
				class="flex justify-between items-center w-full px-margin-desktop h-20 sticky top-0 z-40 bg-surface/80 backdrop-blur-md border-b border-outline-variant"
			>
				<div class="flex items-center gap-8">
					<span class="font-headline-lg text-headline-lg font-bold tracking-tighter text-secondary">LUMENS AI</span>
					<div class="hidden lg:flex items-center gap-6">
						<div class="bg-surface-container-high px-4 py-2 rounded-lg border border-outline-variant flex items-center gap-3">
							<span class="material-symbols-outlined text-on-surface-variant text-sm">search</span>
							<input
								class="bg-transparent border-none focus:ring-0 text-sm text-on-surface-variant w-48 p-0"
								placeholder="Search analytics..."
								type="text"
							/>
						</div>
					</div>
				</div>
				<div class="flex items-center gap-6">
					<div class="hidden xl:flex flex-col items-end">
						<span class="font-label-caps text-label-caps text-secondary" data-metric="co2-total"></span>
						<span class="text-[10px] text-on-surface-variant uppercase tracking-widest" data-metric="site-status"></span>
					</div>
					<div class="flex gap-2">
						<button class="p-2 text-on-surface-variant hover:bg-surface-container rounded-full transition-colors" type="button">
							<span class="material-symbols-outlined">notifications_active</span>
						</button>
						<button class="p-2 text-on-surface-variant hover:bg-surface-container rounded-full transition-colors" type="button">
							<span class="material-symbols-outlined">settings_input_component</span>
						</button>
					</div>
					<div class="h-10 w-10 rounded-full overflow-hidden border border-outline-variant" aria-label="User profile">
						<img alt="User avatar" class="object-cover h-full w-full" src="" />
					</div>
				</div>
			</header>

			<div class="p-margin-desktop space-y-8 max-w-container-max-width mx-auto">
				<section class="flex flex-col md:flex-row md:items-end justify-between gap-6">
					<div>
						<h2 class="font-headline-lg text-headline-lg text-on-surface">Reporting &amp; Analytics</h2>
						<p class="text-on-surface-variant mt-2">Deep-dive into your site's carbon performance and avoidance metrics.</p>
					</div>
					<div class="flex bg-surface-container-low p-1 rounded-lg border border-outline-variant" data-filter="range"></div>
				</section>

				<div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
					<div class="md:col-span-3 glass-panel p-6 rounded-xl relative overflow-hidden group border border-outline-variant">
						<div class="absolute top-0 right-0 w-24 h-24 bg-secondary/5 rounded-full -mr-12 -mt-12 transition-transform group-hover:scale-150 duration-500"></div>
						<span class="font-label-caps text-label-caps text-on-surface-variant">Avoided CO2e</span>
						<div class="mt-4 flex items-baseline gap-2">
							<span class="font-data-lg text-4xl text-secondary" data-kpi="avoided-co2e"></span>
							<span class="font-label-caps text-label-caps text-on-surface-variant">tons</span>
						</div>
						<div class="mt-6 h-12 w-full" data-kpi="avoided-co2e-chart"></div>
						<div class="flex items-center gap-2 mt-2 text-secondary" data-kpi="avoided-co2e-trend"></div>
					</div>

					<div class="md:col-span-3 glass-panel p-6 rounded-xl relative overflow-hidden group border border-outline-variant">
						<span class="font-label-caps text-label-caps text-on-surface-variant">Net scope 2</span>
						<div class="mt-4 flex items-baseline gap-2">
							<span class="font-data-lg text-4xl text-on-surface" data-kpi="net-scope2"></span>
							<span class="font-label-caps text-label-caps text-on-surface-variant">tons</span>
						</div>
						<div class="mt-6 h-12 w-full" data-kpi="net-scope2-chart"></div>
						<div class="flex items-center gap-2 mt-2 text-error" data-kpi="net-scope2-trend"></div>
					</div>

					<div class="md:col-span-6 glass-panel p-6 rounded-xl flex items-center gap-8 bg-surface-container-lowest border border-outline-variant">
						<div class="h-24 w-24 bg-secondary/10 rounded-full flex items-center justify-center border border-secondary/20 flex-shrink-0">
							<span class="material-symbols-outlined text-5xl text-secondary">park</span>
						</div>
						<div>
							<span class="font-label-caps text-label-caps text-secondary tracking-widest">Impact equivalence</span>
							<h3 class="font-headline-md text-headline-md text-on-surface mt-1" data-metric="impact-equivalence"></h3>
							<p class="text-on-surface-variant text-sm mt-2 max-w-sm" data-metric="impact-description"></p>
							<button class="mt-4 text-secondary text-xs font-label-caps flex items-center gap-2 hover:underline transition-all" type="button">
								View full impact report <span class="material-symbols-outlined text-sm">arrow_forward</span>
							</button>
						</div>
					</div>
				</div>

				<div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
					<div class="md:col-span-8 glass-panel rounded-xl p-8 border border-outline-variant">
						<div class="flex justify-between items-center mb-10">
							<div>
								<h4 class="font-headline-md text-on-surface">Avoided CO2 Trends</h4>
								<p class="text-xs text-on-surface-variant" data-chart="source"></p>
							</div>
							<div class="flex gap-4" data-chart="legend"></div>
						</div>
						<div class="h-64 relative flex items-end justify-between border-l border-b border-outline-variant px-2" data-chart="avoided-co2"></div>
						<div class="text-[10px] text-on-surface-variant" data-chart="axis"></div>
					</div>

					<div class="md:col-span-4 glass-panel rounded-xl p-8 flex flex-col border border-outline-variant">
						<h4 class="font-headline-md text-on-surface mb-2">Self-Consumption</h4>
						<span class="text-4xl font-data-lg text-secondary" data-metric="self-consumption"></span>
						<p class="text-xs text-on-surface-variant mt-2">Energy generated vs consumed on-site</p>
						<div class="mt-8 flex-1 flex items-end gap-2" data-chart="self-consumption-bars"></div>
						<div class="mt-6 pt-6 border-t border-outline-variant">
							<div class="flex justify-between items-center text-xs">
								<span class="text-on-surface-variant">Optimization score</span>
								<span class="text-secondary font-bold" data-metric="optimization-score"></span>
							</div>
						</div>
					</div>
				</div>

				<div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
					<div class="md:col-span-9 glass-panel rounded-xl overflow-hidden border border-outline-variant">
						<div class="px-8 py-6 border-b border-outline-variant flex justify-between items-center bg-surface-container-low">
							<span class="font-label-caps text-label-caps text-on-surface">Generated audit logs</span>
							<div class="flex gap-4">
								<button class="flex items-center gap-2 text-xs text-on-surface-variant hover:text-on-surface" type="button">
									<span class="material-symbols-outlined text-sm">filter_list</span>
									Filter
								</button>
							</div>
						</div>
						<div class="overflow-x-auto">
							<table class="w-full text-left">
								<thead>
									<tr class="bg-surface-container/50">
										<th class="px-8 py-4 font-label-caps text-[10px] text-on-surface-variant uppercase tracking-widest">Report title</th>
										<th class="px-8 py-4 font-label-caps text-[10px] text-on-surface-variant uppercase tracking-widest">Date range</th>
										<th class="px-8 py-4 font-label-caps text-[10px] text-on-surface-variant uppercase tracking-widest">Status</th>
										<th class="px-8 py-4 font-label-caps text-[10px] text-on-surface-variant uppercase tracking-widest">Actions</th>
									</tr>
								</thead>
								<tbody class="divide-y divide-outline-variant/30" data-report-rows></tbody>
							</table>
						</div>
					</div>

					<div class="md:col-span-3 space-y-gutter">
						<div class="glass-panel p-6 rounded-xl border-l-4 border-l-secondary border border-outline-variant">
							<h5 class="font-label-caps text-label-caps text-secondary mb-4">One-click export</h5>
							<div class="space-y-3" data-export-actions></div>
							<p class="text-[10px] text-on-surface-variant mt-4 leading-relaxed" data-export-notes></p>
						</div>
						<div class="glass-panel p-6 rounded-xl bg-surface-container-lowest border-dashed border-outline-variant border">
							<div class="flex items-center gap-2 mb-2">
								<span class="material-symbols-outlined text-secondary text-sm">schedule_send</span>
								<span class="font-label-caps text-label-caps text-on-surface">Scheduled</span>
							</div>
							<p class="text-xs text-on-surface-variant" data-export-schedule></p>
							<button class="mt-4 w-full py-2 border border-outline-variant text-xs font-label-caps rounded hover:bg-surface-container-low transition-colors" type="button">
								Manage schedules
							</button>
						</div>
					</div>
				</div>
			</div>
			<div class="h-20"></div>
		</main>

		<nav
			class="md:hidden fixed bottom-0 left-0 right-0 h-16 bg-surface-container-lowest border-t border-outline-variant flex items-center justify-around z-50"
		>
			<a class="flex flex-col items-center gap-1 text-on-surface-variant" href="main.php">
				<span class="material-symbols-outlined">dashboard</span>
				<span class="text-[10px] font-label-caps">Home</span>
			</a>
			<a class="flex flex-col items-center gap-1 text-secondary" href="reporting_&amp;_Analytics.php">
				<span class="material-symbols-outlined">analytics</span>
				<span class="text-[10px] font-label-caps">Reports</span>
			</a>
			<a class="flex flex-col items-center gap-1 text-on-surface-variant" href="aI_Control_Center.php">
				<span class="material-symbols-outlined">psychology</span>
				<span class="text-[10px] font-label-caps">AI</span>
			</a>
			<a class="flex flex-col items-center gap-1 text-on-surface-variant" href="verification_&amp;_MRV%20Module.php">
				<span class="material-symbols-outlined">settings</span>
				<span class="text-[10px] font-label-caps">System</span>
			</a>
		</nav>
	</body>
</html>
