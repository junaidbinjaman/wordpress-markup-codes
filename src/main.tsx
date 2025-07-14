import { StrictMode } from 'react'
import { createRoot } from 'react-dom/client'
import './index.css'
import App from './App.tsx'
import Admin from "./Admin.tsx";

const userRoot:HTMLElement|null = document.getElementById('sheyakh-user-root');
const adminRoot:HTMLElement|null = document.getElementById('sheyakh-admin-root');

if (userRoot) {
    createRoot(userRoot).render(
        <StrictMode>
            <App />
        </StrictMode>
    )
}

if (adminRoot) {
    createRoot(adminRoot).render(
        <StrictMode>
            <Admin />
        </StrictMode>
    )
}
