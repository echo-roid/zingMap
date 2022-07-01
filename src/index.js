import React from 'react';
import ReactDOM from 'react-dom';
import 'bootstrap/dist/css/bootstrap.min.css';
import "react-responsive-carousel/lib/styles/carousel.min.css";

import MyRoutes from './Routes';


ReactDOM.render(
  <React.StrictMode>
    <MyRoutes />
  </React.StrictMode>,
  document.getElementById('root')
);
