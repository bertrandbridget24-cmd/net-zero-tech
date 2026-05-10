<!DOCTYPE html>
<html class="light" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta content="width=device-width, initial-scale=1.0" name="viewport" />
		<title>LUMENS AI | MRV Verification</title>
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
							"headline-lg": ["Inter"],
							"label-caps": ["Inter"],
							"headline-md": ["Inter"],
							"data-lg": ["JetBrains Mono"],
							"body-md": ["Inter"],
							"data-sm": ["JetBrains Mono"],
						},
						fontSize: {
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
							"data-lg": [
								"20px",
								{
									lineHeight: "1.2",
									letterSpacing: "-0.02em",
									fontWeight: "600",
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
		<header
			class="flex justify-between items-center w-full px-margin-desktop h-20 sticky top-0 z-40 bg-surface/90 backdrop-blur-md border-b border-outline-variant"
		>
			<div class="flex items-center gap-8">
				<h1 class="font-headline-lg text-headline-lg font-bold tracking-tighter text-primary">LUMENS AI</h1>
				<div class="hidden md:flex gap-6 items-center">
					<span
						class="text-on-surface-variant font-medium hover:bg-surface-container-low transition-colors duration-200 px-3 py-1 cursor-pointer rounded-lg"
					>
						Main Dashboard
					</span>
					<span class="text-secondary font-bold border-b-2 border-secondary px-3 py-1 cursor-pointer">MRV Verification</span>
					<span
						class="text-on-surface-variant font-medium hover:bg-surface-container-low transition-colors duration-200 px-3 py-1 cursor-pointer rounded-lg"
					>
						Reporting and Analytics
					</span>
				</div>
			</div>
			<div class="flex items-center gap-6">
				<div class="hidden lg:flex flex-col items-end">
					<span class="font-label-caps text-label-caps text-secondary uppercase tracking-wider" data-metric="co2-total"></span>
					<span class="font-data-lg text-data-lg text-on-surface" data-metric="site-status"></span>
				</div>
				<div class="flex gap-3">
					<button
						class="material-symbols-outlined p-2 rounded-full hover:bg-surface-container-low text-on-surface-variant"
						type="button"
					>
						notifications_active
					</button>
					<button
						class="material-symbols-outlined p-2 rounded-full hover:bg-surface-container-low text-on-surface-variant"
						type="button"
					>
						settings_input_component
					</button>
					<img alt="User avatar" class="w-10 h-10 rounded-full border border-outline-variant" src="" />
				</div>
			</div>
		</header>

		<nav
			class="flex flex-col h-full py-8 border-r border-outline-variant fixed left-0 top-0 z-50 bg-surface-container-lowest w-64 hidden xl:flex"
		>
			<div class="px-6 mb-10">
				<h2 class="font-headline-md text-headline-md font-bold text-on-surface">Industrial Hub</h2>
				<p class="text-on-surface-variant font-label-caps text-[10px] uppercase tracking-widest" data-label="site-version"></p>
			</div>
			<div class="flex-1 px-4 space-y-2">
				<div
					class="flex items-center gap-3 p-3 text-on-surface-variant hover:bg-surface-container-low transition-all duration-200 rounded-lg cursor-pointer"
				>
					<span class="material-symbols-outlined">dashboard</span>
					<span class="font-label-caps text-label-caps">Main Dashboard</span>
				</div>
				<div
					class="flex items-center gap-3 p-3 bg-secondary/5 text-secondary border-r-4 border-secondary transition-all rounded-lg cursor-pointer font-bold"
				>
					<span class="material-symbols-outlined">verified</span>
					<span class="font-label-caps text-label-caps">MRV Verification</span>
				</div>
				<div
					class="flex items-center gap-3 p-3 text-on-surface-variant hover:bg-surface-container-low transition-all duration-200 rounded-lg cursor-pointer"
				>
					<span class="material-symbols-outlined">analytics</span>
					<span class="font-label-caps text-label-caps">Reporting and Analytics</span>
				</div>
				<div
					class="flex items-center gap-3 p-3 text-on-surface-variant hover:bg-surface-container-low transition-all duration-200 rounded-lg cursor-pointer"
				>
					<span class="material-symbols-outlined">psychology</span>
					<span class="font-label-caps text-label-caps">AI Control Center</span>
				</div>
			</div>
			<div class="px-4 mt-auto space-y-4">
				<button
					class="w-full bg-primary text-on-primary py-3 font-label-caps text-label-caps font-bold rounded-lg hover:opacity-90 transition-all shadow-sm"
					type="button"
				>
					Export Carbon Report
				</button>
				<div class="pt-4 border-t border-outline-variant space-y-2">
					<div
						class="flex items-center gap-3 p-2 text-on-surface-variant hover:text-on-surface cursor-pointer rounded-lg hover:bg-surface-container-low transition-colors"
					>
						<span class="material-symbols-outlined">settings_heart</span>
						<span class="font-label-caps text-label-caps">System Health</span>
					</div>
					<div
						class="flex items-center gap-3 p-2 text-on-surface-variant hover:text-on-surface cursor-pointer rounded-lg hover:bg-surface-container-low transition-colors"
					>
						<span class="material-symbols-outlined">menu_book</span>
						<span class="font-label-caps text-label-caps">Documentation</span>
					</div>
				</div>
			</div>
		</nav>

		<main class="xl:pl-64 pt-6 px-margin-desktop pb-12">
			<div class="max-w-container-max-width mx-auto">
				<div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-8 gap-4">
					<div>
						<span
							class="text-secondary font-label-caps text-label-caps flex items-center gap-2 font-bold uppercase tracking-widest"
						>
							<span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
							Live data integrity verification
						</span>
						<h1 class="font-headline-lg text-headline-lg mt-2 text-on-surface">Audit and Compliance Engine</h1>
					</div>
					<div class="flex gap-4">
						<div class="glass-panel px-4 py-2 rounded-xl flex items-center gap-4">
							<span class="text-on-surface-variant font-label-caps text-[10px] uppercase tracking-wider">
								Verification status
							</span>
							<div
								class="flex items-center gap-2 bg-secondary/10 px-3 py-1 rounded-full text-secondary border border-secondary/20"
								data-metric="verification-status"
							>
								<span class="material-symbols-outlined text-[16px]">verified_user</span>
								<span class="font-data-sm text-data-sm font-bold"></span>
							</div>
						</div>
					</div>
				</div>

				<div class="grid grid-cols-12 gap-gutter">
					<div
						class="col-span-12 lg:col-span-4 glass-panel p-6 rounded-xl flex flex-col justify-between h-48 group hover:border-secondary transition-colors cursor-default"
					>
						<div class="flex justify-between items-start">
							<span class="font-label-caps text-label-caps text-on-surface-variant uppercase tracking-wider">
								Active sensors
							</span>
							<span class="material-symbols-outlined text-secondary group-hover:scale-110 transition-transform">sensors</span>
						</div>
						<div class="mt-4">
							<h3 class="font-data-lg text-[40px] text-on-surface" data-kpi="active-sensors"></h3>
							<div class="w-full bg-surface-container-highest h-1.5 rounded-full mt-2 overflow-hidden">
								<div class="bg-secondary h-full glow-accent" data-kpi="active-sensors-progress"></div>
							</div>
						</div>
						<div
							class="mt-2 flex justify-between text-[10px] font-label-caps text-on-surface-variant uppercase tracking-tighter"
						>
							<span class="font-bold" data-kpi="active-sensors-rate"></span>
							<span class="text-error font-bold" data-kpi="active-sensors-offline"></span>
						</div>
					</div>

					<div
						class="col-span-12 lg:col-span-4 glass-panel p-6 rounded-xl flex flex-col justify-between h-48 group hover:border-secondary transition-colors cursor-default"
					>
						<div class="flex justify-between items-start">
							<span class="font-label-caps text-label-caps text-on-surface-variant uppercase tracking-wider">
								Anomaly detection rate
							</span>
							<span class="material-symbols-outlined text-on-surface-variant group-hover:rotate-12 transition-transform">
								psychology
							</span>
						</div>
						<div class="mt-4">
							<h3 class="font-data-lg text-[40px] text-on-surface" data-kpi="anomaly-rate"></h3>
							<div class="h-12 w-full mt-2 opacity-80" data-kpi="anomaly-sparkline"></div>
						</div>
						<div
							class="mt-2 flex justify-between text-[10px] font-label-caps text-on-surface-variant uppercase tracking-tighter"
						>
							<span class="font-bold" data-kpi="anomaly-accuracy"></span>
							<span class="text-secondary font-bold" data-kpi="anomaly-change"></span>
						</div>
					</div>

					<div
						class="col-span-12 lg:col-span-4 glass-panel p-6 rounded-xl flex flex-col justify-between h-48 group hover:border-secondary transition-colors cursor-default"
					>
						<div class="flex justify-between items-start">
							<span class="font-label-caps text-label-caps text-on-surface-variant uppercase tracking-wider">
								Audit confidence
							</span>
							<span class="material-symbols-outlined text-secondary">security</span>
						</div>
						<div class="mt-4">
							<h3 class="font-data-lg text-[40px] text-on-surface" data-kpi="audit-confidence"></h3>
							<p class="text-on-surface-variant font-data-sm text-data-sm" data-kpi="audit-summary"></p>
						</div>
						<div
							class="mt-2 flex justify-between text-[10px] font-label-caps text-on-surface-variant uppercase tracking-tighter"
						>
							<span class="font-bold" data-kpi="audit-sync"></span>
							<span class="font-bold" data-kpi="audit-block"></span>
						</div>
					</div>

					<div class="col-span-12 lg:col-span-8 glass-panel p-8 rounded-xl min-h-[400px] relative overflow-hidden">
						<div class="flex flex-col md:flex-row justify-between items-start mb-10">
							<div>
								<h2 class="font-headline-md text-headline-md text-on-surface">Carbon Emission Delta</h2>
								<p class="text-on-surface-variant font-body-md">Predicted model vs. real-time sensor aggregation</p>
							</div>
							<div class="flex gap-4 mt-4 md:mt-0" data-chart-legend></div>
						</div>
						<div class="relative h-64 w-full border-l border-b border-outline-variant flex items-end" data-chart="emissions-delta"></div>
						<div
							class="absolute -bottom-8 w-full flex justify-between font-label-caps text-[10px] text-on-surface-variant font-bold"
							data-chart-axis
						></div>
					</div>

					<div class="col-span-12 lg:col-span-4 glass-panel p-6 rounded-xl flex flex-col">
						<h2 class="font-headline-md text-headline-md mb-6 text-on-surface">AI Anomalies</h2>
						<div class="space-y-4 overflow-y-auto max-h-[320px] pr-2" data-anomalies></div>
						<button
							class="mt-6 w-full py-3 border border-outline-variant hover:bg-surface-container-low transition-colors font-label-caps text-label-caps text-on-surface-variant font-bold rounded-lg shadow-sm"
							type="button"
						>
							View all logs
						</button>
					</div>

					<div class="col-span-12 glass-panel p-8 rounded-xl overflow-hidden">
						<div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
							<div>
								<h2 class="font-headline-md text-headline-md text-on-surface">Immutable Audit Log</h2>
								<p class="text-on-surface-variant font-body-md">
									Third-party verification ledger. Cryptographically signed hash entries.
								</p>
							</div>
							<div class="flex gap-2">
								<button
									class="flex items-center gap-2 px-4 py-2 border border-outline-variant text-on-surface rounded-lg font-label-caps text-label-caps hover:bg-surface-container-low transition-colors font-bold shadow-sm"
									type="button"
								>
									<span class="material-symbols-outlined text-[18px]">download</span>
									PDF report
								</button>
								<button
									class="flex items-center gap-2 px-4 py-2 bg-secondary text-on-secondary rounded-lg font-label-caps text-label-caps hover:opacity-90 transition-opacity font-bold shadow-md"
									type="button"
								>
									<span class="material-symbols-outlined text-[18px]">share</span>
									External audit link
								</button>
							</div>
						</div>
						<div class="overflow-x-auto">
							<table class="w-full text-left border-collapse">
								<thead>
									<tr class="border-b border-outline-variant">
										<th class="pb-4 font-label-caps text-label-caps text-on-surface-variant uppercase tracking-wider">Timestamp</th>
										<th class="pb-4 font-label-caps text-label-caps text-on-surface-variant uppercase tracking-wider">
											Action / event
										</th>
										<th class="pb-4 font-label-caps text-label-caps text-on-surface-variant uppercase tracking-wider">Verified by</th>
										<th class="pb-4 font-label-caps text-label-caps text-on-surface-variant uppercase tracking-wider">
											Hash signature
										</th>
										<th class="pb-4 font-label-caps text-label-caps text-on-surface-variant uppercase tracking-wider">Status</th>
									</tr>
								</thead>
								<tbody class="divide-y divide-outline-variant/30" data-audit-log></tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</main>

		<nav
			class="md:hidden fixed bottom-0 left-0 right-0 h-16 bg-surface border-t border-outline-variant z-50 flex justify-around items-center px-4"
		>
			<button class="flex flex-col items-center gap-1 text-on-surface-variant" type="button">
				<span class="material-symbols-outlined">dashboard</span>
				<span class="text-[10px] font-label-caps font-bold">Main</span>
			</button>
			<button class="flex flex-col items-center gap-1 text-secondary" type="button">
				<span class="material-symbols-outlined">verified</span>
				<span class="text-[10px] font-label-caps font-bold">MRV</span>
			</button>
			<button class="flex flex-col items-center gap-1 text-on-surface-variant" type="button">
				<span class="material-symbols-outlined">analytics</span>
				<span class="text-[10px] font-label-caps font-bold">Reports</span>
			</button>
			<button class="flex flex-col items-center gap-1 text-on-surface-variant" type="button">
				<span class="material-symbols-outlined">psychology</span>
				<span class="text-[10px] font-label-caps font-bold">AI</span>
			</button>
		</nav>
		<div class="h-20 md:hidden"></div>
	</body>
</html>
