import { StrictMode } from 'react'
import { createRoot } from 'react-dom/client'
import './index.css'
import App from './App.tsx'

const publicRoot: HTMLElement|null = document.getElementById('root-public-ui');

if (publicRoot) {
    createRoot(publicRoot).render(
        <StrictMode>
            <App />
        </StrictMode>
    )
}
