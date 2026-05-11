const Reporting = () => {
  return (
    <div className="space-y-8">
      {/* 頁首標題區 */}
      <section className="flex flex-col md:flex-row md:items-end justify-between gap-6">
        <div>
          <h2 className="font-headline-lg text-headline-lg text-on-surface">Reporting &amp; Analytics</h2>
          <p className="text-on-surface-variant mt-2">Deep-dive into your site's carbon performance and avoidance metrics.</p>
        </div>
        <div className="flex bg-surface-container-low p-1 rounded-lg border border-outline-variant">
          {/* 時間範圍按鈕群，僅佔位示意 */}
          <button className="px-3 py-1 text-xs rounded">7D</button>
          <button className="px-3 py-1 text-xs rounded bg-surface-container">30D</button>
          <button className="px-3 py-1 text-xs rounded">1Y</button>
        </div>
      </section>

      {/* KPI 卡片群 */}
      <div className="grid grid-cols-1 md:grid-cols-12 gap-gutter">
        <div className="md:col-span-3 glass-panel p-6 rounded-xl relative overflow-hidden group border border-outline-variant">
          <div className="absolute top-0 right-0 w-24 h-24 bg-secondary/5 rounded-full -mr-12 -mt-12 transition-transform group-hover:scale-150 duration-500"></div>
          <span className="font-label-caps text-label-caps text-on-surface-variant">Avoided CO2e</span>
          <div className="mt-4 flex items-baseline gap-2">
            <span className="font-data-lg text-4xl text-secondary">1,250</span>
            <span className="font-label-caps text-label-caps text-on-surface-variant">tons</span>
          </div>
          <div className="mt-6 h-12 w-full bg-surface-container-highest rounded" />
          <div className="flex items-center gap-2 mt-2 text-secondary">
            <span className="text-xs font-bold">+12.5%</span> vs last period
          </div>
        </div>

        <div className="md:col-span-3 glass-panel p-6 rounded-xl relative overflow-hidden group border border-outline-variant">
          <span className="font-label-caps text-label-caps text-on-surface-variant">Net scope 2</span>
          <div className="mt-4 flex items-baseline gap-2">
            <span className="font-data-lg text-4xl text-on-surface">845</span>
            <span className="font-label-caps text-label-caps text-on-surface-variant">tons</span>
          </div>
          <div className="mt-6 h-12 w-full bg-surface-container-highest rounded" />
          <div className="flex items-center gap-2 mt-2 text-error">
            <span className="text-xs font-bold">+3.2%</span> vs target
          </div>
        </div>

        <div className="md:col-span-6 glass-panel p-6 rounded-xl flex items-center gap-8 bg-surface-container-lowest border border-outline-variant">
          <div className="h-24 w-24 bg-secondary/10 rounded-full flex items-center justify-center border border-secondary/20 flex-shrink-0">
            <span className="material-symbols-outlined text-5xl text-secondary">park</span>
          </div>
          <div>
            <span className="font-label-caps text-label-caps text-secondary tracking-widest">Impact equivalence</span>
            <h3 className="font-headline-md text-headline-md text-on-surface mt-1">12,500 trees</h3>
            <p className="text-on-surface-variant text-sm mt-2 max-w-sm">Equivalent to the carbon sequestered by 12,500 trees over one year.</p>
            <button className="mt-4 text-secondary text-xs font-label-caps flex items-center gap-2 hover:underline transition-all" type="button">
              View full impact report <span className="material-symbols-outlined text-sm">arrow_forward</span>
            </button>
          </div>
        </div>
      </div>

      {/* 趨勢圖表區 */}
      <div className="grid grid-cols-1 md:grid-cols-12 gap-gutter">
        <div className="md:col-span-8 glass-panel rounded-xl p-8 border border-outline-variant">
          <div className="flex justify-between items-center mb-10">
            <div>
              <h4 className="font-headline-md text-on-surface">Avoided CO2 Trends</h4>
              <p className="text-xs text-on-surface-variant">Apr 1 – May 31, 2026</p>
            </div>
            <div className="flex gap-4">
              <span className="flex items-center gap-2 text-xs"><span className="w-3 h-3 bg-secondary rounded-sm"></span> Solar</span>
              <span className="flex items-center gap-2 text-xs"><span className="w-3 h-3 bg-primary/30 rounded-sm"></span> Battery</span>
            </div>
          </div>
          <div className="h-64 relative flex items-end justify-between border-l border-b border-outline-variant px-2">
            {/* 柱狀示意 */}
            <div className="w-8 h-32 bg-secondary/60 rounded-t"></div>
            <div className="w-8 h-48 bg-secondary/80 rounded-t"></div>
            <div className="w-8 h-40 bg-secondary/60 rounded-t"></div>
            <div className="w-8 h-52 bg-secondary rounded-t"></div>
            <div className="w-8 h-44 bg-secondary/80 rounded-t"></div>
            <div className="w-8 h-60 bg-secondary rounded-t"></div>
            <div className="w-8 h-56 bg-secondary/90 rounded-t"></div>
          </div>
          <div className="text-[10px] text-on-surface-variant mt-2 flex justify-between">
            <span>Apr 1</span><span>Apr 15</span><span>May 1</span><span>May 15</span><span>May 31</span>
          </div>
        </div>

        <div className="md:col-span-4 glass-panel rounded-xl p-8 flex flex-col border border-outline-variant">
          <h4 className="font-headline-md text-on-surface mb-2">Self-Consumption</h4>
          <span className="text-4xl font-data-lg text-secondary">87%</span>
          <p className="text-xs text-on-surface-variant mt-2">Energy generated vs consumed on-site</p>
          <div className="mt-8 flex-1 flex items-end gap-2">
            <div className="w-4 h-24 bg-secondary/70 rounded-t"></div>
            <div className="w-4 h-16 bg-secondary/50 rounded-t"></div>
            <div className="w-4 h-20 bg-secondary/60 rounded-t"></div>
            <div className="w-4 h-28 bg-secondary rounded-t"></div>
          </div>
          <div className="mt-6 pt-6 border-t border-outline-variant">
            <div className="flex justify-between items-center text-xs">
              <span className="text-on-surface-variant">Optimization score</span>
              <span className="text-secondary font-bold">92/100</span>
            </div>
          </div>
        </div>
      </div>

      {/* 報告紀錄表與匯出區 */}
      <div className="grid grid-cols-1 md:grid-cols-12 gap-gutter">
        <div className="md:col-span-9 glass-panel rounded-xl overflow-hidden border border-outline-variant">
          <div className="px-8 py-6 border-b border-outline-variant flex justify-between items-center bg-surface-container-low">
            <span className="font-label-caps text-label-caps text-on-surface">Generated audit logs</span>
            <button className="flex items-center gap-2 text-xs text-on-surface-variant hover:text-on-surface" type="button">
              <span className="material-symbols-outlined text-sm">filter_list</span>
              Filter
            </button>
          </div>
          <div className="overflow-x-auto">
            <table className="w-full text-left">
              <thead>
                <tr className="bg-surface-container/50">
                  <th className="px-8 py-4 font-label-caps text-[10px] text-on-surface-variant uppercase tracking-widest">Report title</th>
                  <th className="px-8 py-4 font-label-caps text-[10px] text-on-surface-variant uppercase tracking-widest">Date range</th>
                  <th className="px-8 py-4 font-label-caps text-[10px] text-on-surface-variant uppercase tracking-widest">Status</th>
                  <th className="px-8 py-4 font-label-caps text-[10px] text-on-surface-variant uppercase tracking-widest">Actions</th>
                </tr>
              </thead>
              <tbody className="divide-y divide-outline-variant/30">
                <tr>
                  <td className="px-8 py-4 text-sm">Monthly Carbon Report - May</td>
                  <td className="px-8 py-4 text-sm">May 1 – 31, 2026</td>
                  <td className="px-8 py-4"><span className="px-2 py-1 text-xs rounded-full bg-secondary/20 text-secondary font-bold">Verified</span></td>
                  <td className="px-8 py-4">
                    <button className="text-xs text-secondary font-bold">Download</button>
                  </td>
                </tr>
                <tr>
                  <td className="px-8 py-4 text-sm">Annual Sustainability Report</td>
                  <td className="px-8 py-4 text-sm">Jan – Dec 2025</td>
                  <td className="px-8 py-4"><span className="px-2 py-1 text-xs rounded-full bg-primary/10 text-primary font-bold">Draft</span></td>
                  <td className="px-8 py-4">
                    <button className="text-xs text-secondary font-bold">Edit</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div className="md:col-span-3 space-y-gutter">
          <div className="glass-panel p-6 rounded-xl border-l-4 border-l-secondary border border-outline-variant">
            <h5 className="font-label-caps text-label-caps text-secondary mb-4">One-click export</h5>
            <button className="w-full py-2 bg-secondary text-on-secondary rounded-lg font-label-caps text-label-caps hover:opacity-90 transition mb-2">Generate PDF</button>
            <button className="w-full py-2 border border-outline-variant rounded-lg font-label-caps text-label-caps hover:bg-surface-container-low transition mb-2">Export CSV</button>
            <p className="text-[10px] text-on-surface-variant mt-4 leading-relaxed">Reports are auditable and follow IPCC guidelines.</p>
          </div>
          <div className="glass-panel p-6 rounded-xl bg-surface-container-lowest border-dashed border-outline-variant border">
            <div className="flex items-center gap-2 mb-2">
              <span className="material-symbols-outlined text-secondary text-sm">schedule_send</span>
              <span className="font-label-caps text-label-caps text-on-surface">Scheduled</span>
            </div>
            <p className="text-xs text-on-surface-variant">Monthly report sent every 1st to auditors.</p>
            <button className="mt-4 w-full py-2 border border-outline-variant text-xs font-label-caps rounded hover:bg-surface-container-low transition-colors" type="button">
              Manage schedules
            </button>
          </div>
        </div>
      </div>
    </div>
  )
}

export default Reporting