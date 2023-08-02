import React from 'react';
import { render, screen } from '@testing-library/react';

import App from './App';

test('renders Muldis Application Inventory: WEBAPP: CRA (MULDIS-APPINV-WEBAPP-CRA) title', () => {
  render(<App />);
  const linkElement = screen.getByText('Muldis Application Inventory: WEBAPP: CRA (MULDIS-APPINV-WEBAPP-CRA)');
  expect(linkElement).toBeInTheDocument();
});
