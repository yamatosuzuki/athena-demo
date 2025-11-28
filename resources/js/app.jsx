import './bootstrap.js';
import { createRoot } from 'react-dom/client';
import Example from './components/Example.jsx';

const el = document.getElementById('react-app');
if (el) createRoot(el).render(<Example />);
