<!DOCTYPE html>
<html class="light" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta content="width=device-width, initial-scale=1.0" name="viewport" />
		<title>LUMENS AI | Industrial Energy Control</title>
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
							"data-mono": ["JetBrains Mono"],
							"label-md": ["Inter"],
							"headline-md": ["Inter"],
							"headline-sm": ["Inter"],
							"label-sm": ["Inter"],
							"body-lg": ["Inter"],
							"body-md": ["Inter"],
							"headline-lg": ["Inter"],
							"label-caps": ["Inter"],
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
						},
					},
				},
			};
		</script>
	</head>
	<body class="bg-background text-on-surface font-body-md min-h-screen selection:bg-secondary-container">
		<header
			class="flex justify-between items-center w-full px-margin-desktop h-20 sticky top-0 z-40 bg-surface/80 backdrop-blur-md border-b border-outline-variant/30"
		>
			<div class="flex items-center gap-8">
				<span class="font-headline-lg text-headline-lg font-bold tracking-tighter text-primary">LUMENS AI</span>
				<nav class="hidden md:flex gap-6">
					<a class="text-primary font-bold border-b-2 border-primary py-2 font-label-caps text-label-caps" href="#">
						Dashboard
					</a>
					<a class="text-on-surface-variant font-medium hover:text-on-surface transition-colors font-label-caps text-label-caps" href="#">
						Site View
					</a>
					<a class="text-on-surface-variant font-medium hover:text-on-surface transition-colors font-label-caps text-label-caps" href="#">
						Assets
					</a>
				</nav>
			</div>
			<div class="flex items-center gap-6">
				<div class="flex flex-col items-end mr-4">
					<span class="font-label-caps text-label-caps text-secondary font-bold" data-metric="co2-total"></span>
					<span class="font-data-mono text-xs text-on-surface-variant" data-metric="site-status"></span>
				</div>
				<button class="p-2 hover:bg-surface-container-high transition-colors duration-200 rounded-full">
					<span class="material-symbols-outlined text-on-surface">notifications</span>
				</button>
				<button class="p-2 hover:bg-surface-container-high transition-colors duration-200 rounded-full">
					<span class="material-symbols-outlined text-on-surface">settings_input_component</span>
				</button>
				<div class="w-10 h-10 rounded-full overflow-hidden border border-outline/30" aria-label="User profile">
					<img alt="User avatar" class="w-full h-full object-cover" src="" />
				</div>
			</div>
		</header>

		<div class="flex min-h-[calc(100vh-80px)]">
			<aside
				class="flex flex-col h-full py-8 border-r border-outline-variant/30 fixed left-0 top-20 w-64 z-50 bg-surface-container-lowest"
			>
				<div class="px-6 mb-10">
					<h2 class="font-headline-md text-headline-md font-bold text-on-surface">Industrial Hub</h2>
					<p class="text-on-surface-variant text-[10px] font-label-caps mt-1" data-label="site-version"></p>
				</div>
				<nav class="flex-1 space-y-2 px-3">
					<a class="flex items-center gap-4 px-4 py-3 bg-surface-container text-primary font-bold border-r-4 border-primary transition-all" href="main.php">
						<span class="material-symbols-outlined">dashboard</span>
						<span class="font-label-caps text-label-caps">Main Dashboard</span>
					</a>
					<a class="flex items-center gap-4 px-4 py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container-low transition-all" href="verification_&amp;_MRV%20Module.php">
						<span class="material-symbols-outlined">verified</span>
						<span class="font-label-caps text-label-caps">MRV Verification</span>
					</a>
					<a class="flex items-center gap-4 px-4 py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container-low transition-all" href="reporting_&amp;_Analytics.php">
						<span class="material-symbols-outlined">analytics</span>
						<span class="font-label-caps text-label-caps">Reporting and Analytics</span>
					</a>
					<a class="flex items-center gap-4 px-4 py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container-low transition-all" href="aI_Control_Center.php">
						<span class="material-symbols-outlined">psychology</span>
						<span class="font-label-caps text-label-caps">AI Control Center</span>
					</a>
				</nav>
				<div class="mt-auto px-4 py-6 border-t border-outline-variant/30 space-y-4">
					<button class="w-full py-3 bg-primary text-on-primary font-bold font-label-caps text-label-caps tracking-widest rounded hover:opacity-90 transition-opacity">
						Export Carbon Report
					</button>
					<div class="space-y-1">
						<a class="flex items-center gap-4 px-4 py-2 text-on-surface-variant hover:text-on-surface text-sm" href="#">
							<span class="material-symbols-outlined text-sm">settings_heart</span>
							<span class="font-label-caps text-label-caps text-[10px]">System Health</span>
						</a>
						<a class="flex items-center gap-4 px-4 py-2 text-on-surface-variant hover:text-on-surface text-sm" href="#">
							<span class="material-symbols-outlined text-sm">menu_book</span>
							<span class="font-label-caps text-label-caps text-[10px]">Documentation</span>
						</a>
					</div>
				</div>
			</aside>

			<main class="flex-1 ml-64 p-margin-desktop bg-background">
				<div class="max-w-container-max-width mx-auto">
					<section class="grid grid-cols-12 gap-gutter mb-gutter" aria-label="Key performance indicators">
						<div class="col-span-3 glass-card rounded-lg p-6 glow-primary relative overflow-hidden">
							<div class="flex justify-between items-start mb-4">
								<span class="font-label-caps text-label-caps text-on-surface-variant uppercase">Solar Yield</span>
								<span class="material-symbols-outlined text-secondary">wb_sunny</span>
							</div>
							<div class="font-headline-md text-primary mb-1" data-kpi="solar-yield"></div>
							<div class="text-xs text-secondary flex items-center gap-1 font-bold" data-kpi="solar-yield-trend"></div>
							<div class="absolute bottom-0 left-0 w-full h-8 opacity-10" aria-hidden="true">
								<div class="w-full h-full bg-secondary"></div>
							</div>
						</div>

						<div class="col-span-3 glass-card rounded-lg p-6 relative overflow-hidden">
							<div class="flex justify-between items-start mb-4">
								<span class="font-label-caps text-label-caps text-on-surface-variant uppercase">Site Load</span>
								<span class="material-symbols-outlined text-on-surface-variant">factory</span>
							</div>
							<div class="font-headline-md text-on-surface mb-1" data-kpi="site-load"></div>
							<div class="text-xs text-on-surface-variant flex items-center gap-1" data-kpi="site-load-status"></div>
						</div>

						<div class="col-span-3 glass-card rounded-lg p-6 relative overflow-hidden">
							<div class="flex justify-between items-start mb-4">
								<span class="font-label-caps text-label-caps text-on-surface-variant uppercase">Net Grid</span>
								<span class="material-symbols-outlined text-on-surface">electric_bolt</span>
							</div>
							<div class="font-headline-md text-on-surface mb-1" data-kpi="net-grid"></div>
							<div class="text-xs text-secondary font-bold" data-kpi="net-grid-status"></div>
						</div>

						<div class="col-span-3 glass-card rounded-lg p-6 relative overflow-hidden">
							<div class="flex justify-between items-start mb-4">
								<span class="font-label-caps text-label-caps text-on-surface-variant uppercase">Grid Intensity</span>
								<span class="material-symbols-outlined text-error">co2</span>
							</div>
							<div class="font-headline-md text-on-surface mb-1" data-kpi="grid-intensity"></div>
							<div class="text-[10px] text-error font-bold uppercase tracking-wider" data-kpi="grid-intensity-status"></div>
						</div>
					</section>

					<section class="grid grid-cols-12 gap-gutter">
						<div class="col-span-4 glass-card rounded-lg p-gutter flex flex-col items-center justify-center relative overflow-hidden min-h-[400px]">
							<div class="absolute top-6 left-6 font-label-caps text-label-caps text-on-surface-variant">Live Energy Flow</div>
							<div class="relative w-full h-64" data-chart="energy-flow"></div>
							<div class="grid grid-cols-3 w-full gap-2 mt-4 text-center" data-flow-metrics></div>
						</div>

						<div class="col-span-8 glass-card rounded-lg p-gutter relative overflow-hidden">
							<div class="flex justify-between items-center mb-8">
								<div>
									<h3 class="font-headline-sm text-on-surface">System Performance</h3>
									<p class="text-on-surface-variant text-xs">Last 24 Hours</p>
								</div>
								<div class="flex gap-2" aria-label="Chart filters">
									<button
										class="px-4 py-1 rounded border border-secondary text-secondary text-[10px] font-label-caps bg-secondary/5 font-bold"
										type="button"
									>
										Solar
									</button>
									<button
										class="px-4 py-1 rounded border border-outline-variant text-on-surface-variant text-[10px] font-label-caps hover:bg-surface-container"
										type="button"
									>
										Load
									</button>
									<button
										class="px-4 py-1 rounded border border-outline-variant text-on-surface-variant text-[10px] font-label-caps hover:bg-surface-container"
										type="button"
									>
										CO2 Saved
									</button>
								</div>
							</div>
							<div class="h-64 w-full relative rounded border border-outline-variant/30 bg-surface-container-low" data-chart="system-performance"></div>
							<div class="flex justify-between mt-4 text-[10px] text-on-surface-variant font-data-mono" data-chart-axis></div>
						</div>
					</section>

					<section class="grid grid-cols-12 gap-gutter mt-gutter">
						<div class="col-span-8 glass-card rounded-lg p-6 flex gap-8 items-center border-l-4 border-secondary">
							<div
								class="flex-shrink-0 w-24 h-24 bg-surface-container-high rounded-full flex items-center justify-center border border-secondary/10 relative"
							>
								<span class="material-symbols-outlined text-secondary text-4xl">psychology</span>
								<div
									class="absolute -bottom-1 right-0 bg-secondary text-white text-[9px] px-2 py-0.5 rounded-full font-bold"
									data-badge="ai-status"
								></div>
							</div>
							<div class="flex-1">
								<h4 class="text-secondary font-label-caps text-[10px] mb-2 font-bold tracking-wider">AI Engine Insights</h4>
								<p class="text-on-surface font-body-md leading-relaxed" data-insight="summary"></p>
								<div class="mt-4 flex gap-4" data-insight-actions></div>
							</div>
							<div class="text-right border-l border-outline-variant/30 pl-8">
								<div class="text-on-surface-variant font-label-caps text-[10px] mb-1">Today Avoided CO2</div>
								<div class="text-headline-sm font-data-mono text-secondary" data-metric="co2-avoided"></div>
								<div class="text-[10px] text-on-surface-variant mt-1" data-metric="co2-context"></div>
							</div>
						</div>

						<div class="col-span-4 glass-card rounded-lg p-6">
							<div class="flex items-center gap-2 mb-4">
								<div class="w-2 h-2 rounded-full bg-secondary"></div>
								<span class="font-label-caps text-label-caps text-on-surface font-bold">Data Streams</span>
							</div>
							<div class="space-y-4" data-streams="connections"></div>
						</div>
					</section>
				</div>
			</main>
		</div>
	</body>
</html>
