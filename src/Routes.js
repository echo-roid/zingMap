import React, { useState } from "react";
//Routes
import { BrowserRouter, Routes, Route } from "react-router-dom";
import Home from "./pages/home/Home";
import Work from "./pages/work/Work";
import Header from "./component/common/header/Header";
import Menubar from "./component/common/menubar/Menubar.jsx";
import AOS from 'aos';

const MyRoutes = () => {
  if(typeof window !== 'undefined') {
    AOS.init({
    once: false,
    mirror: false,
    });
  }
  const [menuState, setMenuUpdate] = useState(false);
  const toggleMenu = () =>{
     setMenuUpdate(!menuState)
  }
  return (
    <>
    <Header funname={toggleMenu}></Header>
     {menuState && <Menubar funname={toggleMenu}/>}
    <BrowserRouter>
      <Routes>
        <Route exact path="/" element={<Home />} />
        <Route path="/home/" element={<Home />} />
        <Route path="/work/" element={<Work />} />
        <Route
          path="*"
          element={
            <main style={{ padding: "1rem" }}>
              <p>There's nothing here!</p>
            </main>
          }
        />
      </Routes>
    </BrowserRouter>
   </>
  );
};

export default MyRoutes;
