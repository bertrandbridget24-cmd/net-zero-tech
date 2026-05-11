const Verification = () => {
  return (
    <div className="max-w-container-max-width mx-auto">
      {/* 頂部狀態列 */}
      <div className="flex flex-col md:flex-row justify-between items-start md:items-end mb-8 gap-4">
        <div>
          <span className="text-secondary font-label-caps text-label-caps flex items-center gap-2 font-bold uppercase tracking-widest">
            <span className="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
            Live data integrity verification
          </span>
          <h1 className="font-headline-lg text-headline-lg mt-2 text-on-surface">Audit and Compliance Engine</h1>
        </div>
        <div className="flex gap-4">
          <div className="glass-panel px-4 py-2 rounded-xl flex items-center gap-4">
            <span className="text-on-surface-variant font-label-caps text-[10px] uppercase tracking-wider">Verification status</span>
            <div className="flex items-center gap-2 bg-secondary/10 px-3 py-1 rounded-full text-secondary border border-secondary/20">
              <span className="material-symbols-outlined text-[16px]">verified_user</span>
              <span className="font-data-sm text-data-sm font-bold">Passed</span>
            </div>
          </div>
        </div>
      </div>

      {/* KPI 卡片 */}
      <div className="grid grid-cols-12 gap-gutter mb-gutter">
        <div className="col-span-12 lg:col-span-4 glass-panel p-6 rounded-xl flex flex-col justify-between h-48 group hover:border-secondary transition-colors cursor-default">
          <div className="flex justify-between items-start">
            <span className="font-label-caps text-label-caps text-on-surface-variant uppercase tracking-wider">Active sensors</span>
            <span className="material-symbols-outlined text-secondary group-hover:scale-110 transition-transform">sensors</span>
          </div>
          <div className="mt-4">
            <h3 className="font-data-lg text-[40px] text-on-surface">24</h3>
            <div className="w-full bg-surface-container-highest h-1.5 rounded-full mt-2 overflow-hidden">
              <div className="bg-secondary h-full glow-accent" style={{ width: '96%' }}></div>
            </div>
          </div>
          <div className="mt-2 flex justify-between text-[10px] font-label-caps text-on-surface-variant uppercase tracking-tighter">
            <span className="font-bold">96% online</span>
            <span className="text-error font-bold">1 offline</span>
          </div>
        </div>

        <div className="col-span-12 lg:col-span-4 glass-panel p-6 rounded-xl flex flex-col justify-between h-48 group hover:border-secondary transition-colors cursor-default">
          <div className="flex justify-between items-start">
            <span className="font-label-caps text-label-caps text-on-surface-variant uppercase tracking-wider">Anomaly detection rate</span>
            <span className="material-symbols-outlined text-on-surface-variant group-hover:rotate-12 transition-transform">psychology</span>
          </div>
          <div className="mt-4">
            <h3 className="font-data-lg text-[40px] text-on-surface">0.2%</h3>
            <div className="h-12 w-full mt-2 opacity-80 bg-surface-container-low rounded flex items-center px-3">
              <span className="text-xs">Last 24h: 3 anomalies detected</span>
            </div>
          </div>
          <div className="mt-2 flex justify-between text-[10px] font-label-caps text-on-surface-variant uppercase tracking-tighter">
            <span className="font-bold">99.8% accuracy</span>
            <span className="text-secondary font-bold">-0.1% vs yesterday</span>
          </div>
        </div>

        <div className="col-span-12 lg:col-span-4 glass-panel p-6 rounded-xl flex flex-col justify-between h-48 group hover:border-secondary transition-colors cursor-default">
          <div className="flex justify-between items-start">
            <span className="font-label-caps text-label-caps text-on-surface-variant uppercase tracking-wider">Audit confidence</span>
            <span className="material-symbols-outlined text-secondary">security</span>
          </div>
          <div className="mt-4">
            <h3 className="font-data-lg text-[40px] text-on-surface">98.5%</h3>
            <p className="text-on-surface-variant font-data-sm text-data-sm">Based on 12,456 verified entries</p>
          </div>
          <div className="mt-2 flex justify-between text-[10px] font-label-caps text-on-surface-variant uppercase tracking-tighter">
            <span className="font-bold">Last sync: 2 min ago</span>
            <span className="font-bold">Blockchain block #14532</span>
          </div>
        </div>
      </div>

      {/* 碳排放差異圖表 + 異常列表 */}
      <div className="grid grid-cols-12 gap-gutter">
        <div className="col-span-12 lg:col-span-8 glass-panel p-8 rounded-xl min-h-[400px] relative overflow-hidden">
          <div className="flex flex-col md:flex-row justify-between items-start mb-10">
            <div>
              <h2 className="font-headline-md text-headline-md text-on-surface">Carbon Emission Delta</h2>
              <p className="text-on-surface-variant font-body-md">Predicted model vs. real-time sensor aggregation</p>
            </div>
            <div className="flex gap-4 mt-4 md:mt-0">
              <span className="flex items-center gap-2 text-xs"><span className="w-3 h-3 bg-secondary rounded-sm"></span> Model</span>
              <span className="flex items-center gap-2 text-xs"><span className="w-3 h-3 bg-primary/50 rounded-sm"></span> Actual</span>
            </div>
          </div>
          <div className="relative h-64 w-full border-l border-b border-outline-variant flex items-end px-2">
            <div className="w-8 h-32 bg-secondary/40 rounded-t mr-1"></div>
            <div className="w-8 h-40 bg-primary/30 rounded-t mr-1"></div>
            <div className="w-8 h-36 bg-secondary/40 rounded-t mr-1"></div>
            <div className="w-8 h-44 bg-primary/30 rounded-t mr-1"></div>
            <div className="w-8 h-48 bg-secondary/40 rounded-t mr-1"></div>
            <div className="w-8 h-52 bg-primary/30 rounded-t mr-1"></div>
            <div className="w-8 h-50 bg-secondary/40 rounded-t mr-1"></div>
            <div className="w-8 h-56 bg-primary/30 rounded-t"></div>
          </div>
          <div className="absolute bottom-2 w-full flex justify-between font-label-caps text-[10px] text-on-surface-variant font-bold">
            <span>00:00</span><span>06:00</span><span>12:00</span><span>18:00</span><span>24:00</span>
          </div>
        </div>

        <div className="col-span-12 lg:col-span-4 glass-panel p-6 rounded-xl flex flex-col">
          <h2 className="font-headline-md text-headline-md mb-6 text-on-surface">AI Anomalies</h2>
          <div className="space-y-4 overflow-y-auto max-h-[320px] pr-2">
            <div className="p-3 rounded border border-outline-variant bg-surface-container-low">
              <div className="flex justify-between text-xs font-bold"><span>Anomaly #1023</span><span className="text-error">High</span></div>
              <p className="text-xs text-on-surface-variant mt-1">Meter reading spike at 14:23 UTC</p>
              <span className="text-[10px]">2 min ago</span>
            </div>
            <div className="p-3 rounded border border-outline-variant bg-surface-container-low">
              <div className="flex justify-between text-xs font-bold"><span>Anomaly #1022</span><span className="text-secondary">Low</span></div>
              <p className="text-xs text-on-surface-variant mt-1">Minor drift in temperature sensor</p>
              <span className="text-[10px]">25 min ago</span>
            </div>
          </div>
          <button className="mt-6 w-full py-3 border border-outline-variant hover:bg-surface-container-low transition-colors font-label-caps text-label-caps text-on-surface-variant font-bold rounded-lg shadow-sm" type="button">
            View all logs
          </button>
        </div>
      </div>

      {/* 不可篡改審計日誌表 */}
      <div className="col-span-12 glass-panel p-8 rounded-xl overflow-hidden mt-gutter">
        <div className="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
          <div>
            <h2 className="font-headline-md text-headline-md text-on-surface">Immutable Audit Log</h2>
            <p className="text-on-surface-variant font-body-md">Third-party verification ledger. Cryptographically signed hash entries.</p>
          </div>
          <div className="flex gap-2">
            <button className="flex items-center gap-2 px-4 py-2 border border-outline-variant text-on-surface rounded-lg font-label-caps text-label-caps hover:bg-surface-container-low transition-colors font-bold shadow-sm" type="button">
              <span className="material-symbols-outlined text-[18px]">download</span>
              PDF report
            </button>
            <button className="flex items-center gap-2 px-4 py-2 bg-secondary text-on-secondary rounded-lg font-label-caps text-label-caps hover:opacity-90 transition-opacity font-bold shadow-md" type="button">
              <span className="material-symbols-outlined text-[18px]">share</span>
              External audit link
            </button>
          </div>
        </div>
        <div className="overflow-x-auto">
          <table className="w-full text-left border-collapse">
            <thead>
              <tr className="border-b border-outline-variant">
                <th className="pb-4 font-label-caps text-label-caps text-on-surface-variant uppercase tracking-wider">Timestamp</th>
                <th className="pb-4 font-label-caps text-label-caps text-on-surface-variant uppercase tracking-wider">Action / event</th>
                <th className="pb-4 font-label-caps text-label-caps text-on-surface-variant uppercase tracking-wider">Verified by</th>
                <th className="pb-4 font-label-caps text-label-caps text-on-surface-variant uppercase tracking-wider">Hash signature</th>
                <th className="pb-4 font-label-caps text-label-caps text-on-surface-variant uppercase tracking-wider">Status</th>
              </tr>
            </thead>
            <tbody className="divide-y divide-outline-variant/30">
              <tr>
                <td className="py-4 text-sm font-mono">2026-05-10 14:23:01 UTC</td>
                <td className="py-4 text-sm">Meter reading recorded</td>
                <td className="py-4 text-sm">Verifier A</td>
                <td className="py-4 text-sm font-mono text-[10px]">0x7a3b...c9f2</td>
                <td className="py-4"><span className="px-2 py-1 text-xs rounded-full bg-secondary/20 text-secondary font-bold">Confirmed</span></td>
              </tr>
              <tr>
                <td className="py-4 text-sm font-mono">2026-05-10 13:45:12 UTC</td>
                <td className="py-4 text-sm">Calibration updated</td>
                <td className="py-4 text-sm">Sensor ID 12</td>
                <td className="py-4 text-sm font-mono text-[10px]">0x2e8f...a4d1</td>
                <td className="py-4"><span className="px-2 py-1 text-xs rounded-full bg-secondary/20 text-secondary font-bold">Confirmed</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  )
}

export default Verification