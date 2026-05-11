import { BrowserRouter, Routes, Route } from 'react-router-dom'
import MainLayout from './components/Layout/MainLayout'
import Dashboard from './pages/Dashboard'
import ControlCenter from './pages/ControlCenter'
import Reporting from './pages/Reporting'
import Verification from './pages/Verification'

function App() {
  return (
    <BrowserRouter>
      <Routes>
        <Route path="/" element={<MainLayout />}>
          <Route index element={<Dashboard />} />
          <Route path="control-center" element={<ControlCenter />} />
          <Route path="reporting" element={<Reporting />} />
          <Route path="verification" element={<Verification />} />
        </Route>
      </Routes>
    </BrowserRouter>
  )
}

export default App