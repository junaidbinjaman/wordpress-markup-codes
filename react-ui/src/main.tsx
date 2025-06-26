import {StrictMode} from 'react'
import {createRoot} from 'react-dom/client'
import './index.css'
import App from './App.tsx'

const userRoot: HTMLElement | null = document.getElementById('shayekh-user-root');

if (userRoot) {
    createRoot(userRoot).render(
        <StrictMode>
            <App/>
        </StrictMode>
    )
}
