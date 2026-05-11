import { Outlet, useNavigate } from 'react-router-dom'

const MainLayout = () => {
  const navigate = useNavigate()

  return (
    <div className="bg-background text-on-surface font-body-md min-h-screen selection:bg-secondary-container">
      {/* Header */}
      <header className="flex justify-between items-center w-full px-margin-desktop h-20 sticky top-0 z-40 bg-surface/80 backdrop-blur-md border-b border-outline-variant/30">
        <div className="flex items-center gap-8">
          <span className="font-headline-lg text-headline-lg font-bold tracking-tighter text-primary">LUMENS AI</span>
          <nav className="hidden md:flex gap-6">
            <button onClick={() => navigate('/')} className="text-primary font-bold border-b-2 border-primary py-2 font-label-caps text-label-caps">Dashboard</button>
            <button onClick={() => navigate('/control-center')} className="text-on-surface-variant font-medium hover:text-on-surface transition-colors font-label-caps text-label-caps">AI Control</button>
            <button onClick={() => navigate('/reporting')} className="text-on-surface-variant font-medium hover:text-on-surface transition-colors font-label-caps text-label-caps">Reports</button>
            <button onClick={() => navigate('/verification')} className="text-on-surface-variant font-medium hover:text-on-surface transition-colors font-label-caps text-label-caps">MRV</button>
          </nav>
        </div>
        <div className="flex items-center gap-6">
          <div className="flex flex-col items-end mr-4">
            <span className="font-label-caps text-label-caps text-secondary font-bold">-- tCO₂</span>
            <span className="font-data-mono text-xs text-on-surface-variant">Site Online</span>
          </div>
          <button className="p-2 hover:bg-surface-container-high transition-colors duration-200 rounded-full">
            <span className="material-symbols-outlined text-on-surface">notifications</span>
          </button>
          <button className="p-2 hover:bg-surface-container-high transition-colors duration-200 rounded-full">
            <span className="material-symbols-outlined text-on-surface">settings_input_component</span>
          </button>
          <div className="w-10 h-10 rounded-full overflow-hidden border border-outline/30" aria-label="User profile">
            <img alt="User avatar" className="w-full h-full object-cover" src="" />
          </div>
        </div>
      </header>

      <div className="flex min-h-[calc(100vh-80px)]">
        {/* Sidebar */}
        <aside className="flex flex-col h-full py-8 border-r border-outline-variant/30 fixed left-0 top-20 w-64 z-50 bg-surface-container-lowest">
          <div className="px-6 mb-10">
            <h2 className="font-headline-md text-headline-md font-bold text-on-surface">Industrial Hub</h2>
            <p className="text-on-surface-variant text-[10px] font-label-caps mt-1">v2.1.0</p>
          </div>
          <nav className="flex-1 space-y-2 px-3">
            <button onClick={() => navigate('/')} className="flex items-center gap-4 px-4 py-3 bg-surface-container text-primary font-bold border-r-4 border-primary transition-all w-full text-left">
              <span className="material-symbols-outlined">dashboard</span>
              <span className="font-label-caps text-label-caps">Main Dashboard</span>
            </button>
            <button onClick={() => navigate('/verification')} className="flex items-center gap-4 px-4 py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container-low transition-all w-full text-left">
              <span className="material-symbols-outlined">verified</span>
              <span className="font-label-caps text-label-caps">MRV Verification</span>
            </button>
            <button onClick={() => navigate('/reporting')} className="flex items-center gap-4 px-4 py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container-low transition-all w-full text-left">
              <span className="material-symbols-outlined">analytics</span>
              <span className="font-label-caps text-label-caps">Reporting and Analytics</span>
            </button>
            <button onClick={() => navigate('/control-center')} className="flex items-center gap-4 px-4 py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container-low transition-all w-full text-left">
              <span className="material-symbols-outlined">psychology</span>
              <span className="font-label-caps text-label-caps">AI Control Center</span>
            </button>
          </nav>
          <div className="mt-auto px-4 py-6 border-t border-outline-variant/30 space-y-4">
            <button className="w-full py-3 bg-primary text-on-primary font-bold font-label-caps text-label-caps tracking-widest rounded hover:opacity-90 transition-opacity">
              Export Carbon Report
            </button>
            <div className="space-y-1">
              <button className="flex items-center gap-4 px-4 py-2 text-on-surface-variant hover:text-on-surface text-sm w-full text-left">
                <span className="material-symbols-outlined text-sm">settings_heart</span>
                <span className="font-label-caps text-label-caps text-[10px]">System Health</span>
              </button>
              <button className="flex items-center gap-4 px-4 py-2 text-on-surface-variant hover:text-on-surface text-sm w-full text-left">
                <span className="material-symbols-outlined text-sm">menu_book</span>
                <span className="font-label-caps text-label-caps text-[10px]">Documentation</span>
              </button>
            </div>
          </div>
        </aside>

        {/* Page content will appear here */}
        <main className="flex-1 ml-64 p-margin-desktop bg-background">
          <div className="max-w-container-max-width mx-auto">
            <Outlet />
          </div>
        </main>
      </div>
    </div>
  )
}

export default MainLayout