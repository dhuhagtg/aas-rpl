import React, { useState } from "react";
import './Navbar.css';
import Logo from '../../../../../public/img/logo-banyumas.png'





const Navbar = () => {


  return (
    <>

      <div className="navbar bg-base-100 sticky-navbar">
        <div className="navbar-start" >
          <img  alt="Logo" className="logo" />
          <div className="dropdown z-2 z-index-2">
            <div tabIndex={0} role="button" className="btn btn-ghost lg:hidden">
              <svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
            </div>
            <ul tabIndex={0} className="menu menu-sm dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
              <li><a href={route('/')}>Beranda</a></li>
            </ul>
          </div>
          <a className="btn btn-ghost text-xl">SAMSAT XYZ</a>
        </div>
        <div className="navbar-center hidden lg:flex">
          <ul className="menu menu-horizontal px-1" >
            <li><a href={route('/')}>Beranda</a></li>
          </ul>
        </div>

        <div className="navbar-end">
          <a href={route('login')} className="btn">Login</a>
        </div>
      </div>
    </>
  )
}

export default Navbar