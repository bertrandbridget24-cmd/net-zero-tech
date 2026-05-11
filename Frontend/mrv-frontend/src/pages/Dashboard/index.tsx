const Dashboard = () => {
  return (
    <>
      {/* Main Content Canvas */}
      <div className="max-w-container-max-width mx-auto">
        {/* Bento Grid Header */}
        <div className="grid grid-cols-12 gap-gutter mb-gutter">
          {/* KPI: Solar Yield */}
          <div className="col-span-3 glass-card rounded-lg p-6 glow-primary relative overflow-hidden">
            <div className="flex justify-between items-start mb-4">
              <span className="font-label-caps text-label-caps text-on-surface-variant uppercase">Solar Yield</span>
              <span
                className="material-symbols-outlined text-secondary"
                style={{ fontVariationSettings: "'FILL' 1" }}
              >
                wb_sunny
              </span>
            </div>
            <div className="font-headline-md text-primary mb-1">
              842.5 <span className="text-sm font-normal">kW</span>
            </div>
            <div className="text-xs text-secondary flex items-center gap-1 font-bold">
              <span className="material-symbols-outlined text-xs">trending_up</span> +12% from peak
            </div>
            <div className="absolute bottom-0 left-0 w-full h-8 opacity-10">
              <svg className="w-full h-full" preserveAspectRatio="none" viewBox="0 0 100 20">
                <path
                  className="text-secondary"
                  d="M0 20 Q 25 5, 50 15 T 100 10 V 20 H 0 Z"
                  fill="currentColor"
                />
              </svg>
            </div>
          </div>

          {/* KPI: Site Load */}
          <div className="col-span-3 glass-card rounded-lg p-6 relative overflow-hidden">
            <div className="flex justify-between items-start mb-4">
              <span className="font-label-caps text-label-caps text-on-surface-variant uppercase">Site Load</span>
              <span className="material-symbols-outlined text-on-surface-variant">factory</span>
            </div>
            <div className="font-headline-md text-on-surface mb-1">
              1,240.2 <span className="text-sm font-normal">kW</span>
            </div>
            <div className="text-xs text-on-surface-variant flex items-center gap-1">
              <span className="material-symbols-outlined text-xs">sync</span> Real-time monitoring
            </div>
          </div>

          {/* KPI: Net Grid */}
          <div className="col-span-3 glass-card rounded-lg p-6 relative overflow-hidden">
            <div className="flex justify-between items-start mb-4">
              <span className="font-label-caps text-label-caps text-on-surface-variant uppercase">Net Grid</span>
              <span className="material-symbols-outlined text-on-surface">electric_bolt</span>
            </div>
            <div className="font-headline-md text-on-surface mb-1">
              -397.7 <span className="text-sm font-normal">kW</span>
            </div>
            <div className="text-xs text-secondary font-bold">Exporting to Grid</div>
          </div>

          {/* KPI: Carbon Intensity */}
          <div className="col-span-3 glass-card rounded-lg p-6 relative overflow-hidden">
            <div className="flex justify-between items-start mb-4">
              <span className="font-label-caps text-label-caps text-on-surface-variant uppercase">Grid Intensity</span>
              <span className="material-symbols-outlined text-error">co2</span>
            </div>
            <div className="font-headline-md text-on-surface mb-1">
              184 <span className="text-sm font-normal">gCO2/kWh</span>
            </div>
            <div className="text-[10px] text-error font-bold uppercase tracking-wider">High Intensity Alert</div>
          </div>
        </div>

        {/* Main Section: Time Series */}
        <div className="grid grid-cols-12 gap-gutter">
          <div className="glass-card rounded-lg p-gutter relative overflow-hidden col-span-12">
            <div className="flex justify-between items-center mb-8">
              <div>
                <h3 className="font-headline-sm text-on-surface">System Performance</h3>
                <p className="text-on-surface-variant text-xs">Last 24 Hours Generation vs Consumption</p>
              </div>
              <div className="flex gap-2">
                <button className="px-4 py-1 rounded border border-secondary text-secondary text-[10px] font-label-caps bg-secondary/5 font-bold">
                  Solar
                </button>
                <button className="px-4 py-1 rounded border border-outline-variant text-on-surface-variant text-[10px] font-label-caps hover:bg-surface-container">
                  Load
                </button>
                <button className="px-4 py-1 rounded border border-outline-variant text-on-surface-variant text-[10px] font-label-caps hover:bg-surface-container">
                  CO2 Saved
                </button>
              </div>
            </div>
            <div className="h-64 w-full relative">
              {/* SVG Placeholder for Chart */}
              <svg className="w-full h-full overflow-visible">
                <defs>
                  <linearGradient id="chartGradient" x1="0" x2="0" y1="0" y2="1">
                    <stop offset="0%" stopColor="#006e2f" stopOpacity="0.15" />
                    <stop offset="100%" stopColor="#006e2f" stopOpacity="0" />
                  </linearGradient>
                </defs>
                {/* Grid Lines */}
                <line className="text-outline-variant/30" stroke="currentColor" x1="0" x2="100%" y1="0" y2="0" />
                <line className="text-outline-variant/30" stroke="currentColor" x1="0" x2="100%" y1="25%" y2="25%" />
                <line className="text-outline-variant/30" stroke="currentColor" x1="0" x2="100%" y1="50%" y2="50%" />
                <line className="text-outline-variant/30" stroke="currentColor" x1="0" x2="100%" y1="75%" y2="75%" />
                <line className="text-outline-variant/50" stroke="currentColor" x1="0" x2="100%" y1="100%" y2="100%" />
                {/* Solar Line (Industrial Green) */}
                <path
                  className="neon-line-primary"
                  d="M0 200 Q 100 180, 200 100 T 400 50 T 600 150 T 800 200"
                  fill="none"
                  stroke="#006e2f"
                  strokeWidth="2.5"
                />
                <path
                  d="M0 200 Q 100 180, 200 100 T 400 50 T 600 150 T 800 200 V 250 H 0 Z"
                  fill="url(#chartGradient)"
                />
                {/* Load Line (Dashed Grey) */}
                <path
                  d="M0 150 L 100 160 L 200 140 L 300 180 L 400 120 L 500 130 L 600 160 L 800 140"
                  fill="none"
                  opacity="0.4"
                  stroke="#1b1b1d"
                  strokeDasharray="4"
                  strokeWidth="1.5"
                />
              </svg>
              {/* X-Axis Labels */}
              <div className="flex justify-between mt-4 text-[10px] text-on-surface-variant font-data-mono">
                <span>00:00</span>
                <span>04:00</span>
                <span>08:00</span>
                <span>12:00</span>
                <span>16:00</span>
                <span>20:00</span>
                <span>00:00</span>
              </div>
            </div>
          </div>
        </div>

        {/* Footer Section: Insights and Alerts */}
        <div className="grid grid-cols-12 gap-gutter mt-gutter">
          {/* AI Insights Panel */}
          <div className="col-span-8 glass-card rounded-lg p-6 flex gap-8 items-center border-l-4 border-secondary">
            <div className="flex-shrink-0 w-24 h-24 bg-surface-container-high rounded-full flex items-center justify-center border border-secondary/10 relative">
              <span
                className="material-symbols-outlined text-secondary text-4xl"
                style={{ fontVariationSettings: "'FILL' 1" }}
              >
                psychology
              </span>
              <div className="absolute -bottom-1 right-0 bg-secondary text-white text-[9px] px-2 py-0.5 rounded-full font-bold">
                LIVE
              </div>
            </div>
            <div className="flex-1">
              <h4 className="text-secondary font-label-caps text-[10px] mb-2 font-bold tracking-wider">
                AI ENGINE INSIGHTS
              </h4>
              <p className="text-on-surface font-body-md leading-relaxed">
                Optimal solar-to-load matching detected. Predictive modeling suggests increasing HVAC pre-cooling at
                14:00 to utilize excess PV generation.
              </p>
              <div className="mt-4 flex gap-4">
                <button className="text-xs font-label-caps text-secondary border-b border-secondary/30 pb-0.5 hover:border-secondary transition-colors font-bold">
                  Apply Auto-Optimization
                </button>
                <button className="text-xs font-label-caps text-on-surface-variant hover:text-on-surface transition-colors">
                  Dismiss
                </button>
              </div>
            </div>
            <div className="text-right border-l border-outline-variant/30 pl-8">
              <div className="text-on-surface-variant font-label-caps text-[10px] mb-1">TODAY'S AVOIDED CO2</div>
              <div className="text-headline-sm font-data-mono text-secondary">
                12.4 <span className="text-sm">kg</span>
              </div>
              <div className="text-[10px] text-on-surface-variant mt-1">≡ 57 trees planted</div>
            </div>
          </div>

          {/* Status / Activity Badge */}
          <div className="col-span-4 glass-card rounded-lg p-6">
            <div className="flex items-center gap-2 mb-4">
              <div className="w-2 h-2 rounded-full bg-secondary"></div>
              <span className="font-label-caps text-label-caps text-on-surface font-bold">Data Streams</span>
            </div>
            <div className="space-y-4">
              <div className="flex justify-between items-center">
                <span className="text-xs text-on-surface-variant">Inverter 01 (South)</span>
                <span className="text-xs font-data-mono text-secondary font-bold">Connected</span>
              </div>
              <div className="flex justify-between items-center">
                <span className="text-xs text-on-surface-variant">Grid Metering (Main)</span>
                <span className="text-xs font-data-mono text-secondary font-bold">Connected</span>
              </div>
              <div className="flex justify-between items-center">
                <span className="text-xs text-on-surface-variant">HVAC Controller V2</span>
                <span className="text-xs font-data-mono text-on-surface">Optimizing</span>
              </div>
              <div className="flex justify-between items-center">
                <span className="text-xs text-on-surface-variant">Battery Array A</span>
                <span className="text-xs font-data-mono text-on-surface-variant">Standby</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </>
  );
};

export default Dashboard;