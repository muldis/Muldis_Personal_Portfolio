import React from 'react';
import { render, screen } from '@testing-library/react';

import App from './App';

test('renders Muldis Application Inventory (MULDIS-APPINV) title', () => {
  render(<App />);
  const linkElement = screen.getByText('Muldis Application Inventory (MULDIS-APPINV)');
  expect(linkElement).toBeInTheDocument();
});
