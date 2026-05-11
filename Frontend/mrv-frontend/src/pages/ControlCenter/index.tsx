const ControlCenter = () => {
  return (
    <div className="xl:pl-64 min-h-screen transition-all duration-300">
      <div className="px-margin-desktop py-10 max-w-[1440px] mx-auto">
        <div className="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-10">
          <div>
            <h1 className="font-headline-lg text-headline-lg text-on-surface mb-2">AI Control Center</h1>
            <p className="text-on-surface-variant font-body-md max-w-2xl">Real-time AI recommendations to minimize your carbon footprint.</p>
          </div>
          <div className="flex gap-4">
            <div className="px-4 py-2 solid-card rounded-lg flex items-center gap-3 bg-surface-container-low border border-outline-variant/30">
              <span className="w-2.5 h-2.5 rounded-full bg-secondary animate-pulse"></span>
              <span className="font-label-caps text-label-sm font-bold text-secondary">Optimizing</span>
            </div>
          </div>
        </div>
        {/* ... 其他區域（Active AI recommendations、Battery & EV control 等）完全依 HTML 結構轉換 */}
      </div>
    </div>
  )
}

export default ControlCenter