import React from 'react';
import { render, screen } from '@testing-library/react';

import App from './App';

test('renders Muldis Application Inventory: WEBAPP: React (MULDIS-APPINV-WEBAPP-REACT) title', () => {
  render(<App />);
  const linkElement = screen.getByText('Muldis Application Inventory: WEBAPP: React (MULDIS-APPINV-WEBAPP-REACT)');
  expect(linkElement).toBeInTheDocument();
});
