import React, { useState } from "react";
import './Navbar.css';

const Navbar = () => {


  return (
    <>
      <div className="navbar bg-base-100">
        <div className="navbar-start">
          <div className="dropdown">
            <div tabIndex={0} role="button" className="btn btn-ghost lg:hidden">
              <svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
            </div>
            <ul tabIndex={0} className="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
              <li><a>Beranda</a></li>
              <li>
                <a>Profil</a>
                <ul className="p-2">
                  <li><a>Visi dan Misi</a></li>
                  <li><a>Sejarah Desa</a></li>
                  <li><a>Wilayah Desa</a></li>
                </ul>
              </li>
              <li>
                <a>Lembaga Desa</a>
                <ul className="p-2">
                  <li><a>Pemerintah Desa</a></li>
                  <li><a>BPD</a></li>
                </ul>
              </li>
              <li>
                <a>Layanan</a>
                <ul className="p-2">
                  <li><a>Pengajuan Surat</a></li>
                  <li><a>Pengaduan Masyarakat</a></li>
                </ul>
              </li>

              <li><a>Berita</a></li>
              <li><a>Galeri</a></li>

            </ul>
          </div>
          <a className="btn btn-ghost text-xl">Desa Margasana</a>
        </div>
        <div className="navbar-center hidden lg:flex">
          <ul className="menu menu-horizontal px-1">
            <li><a>Beranda</a></li>
            <li>
              <details>
                <summary>Profil</summary>
                <ul className="p-2">
                  <li><a>Visi dan Misi</a></li>
                  <li><a>Sejarah Desa</a></li>
                  <li><a>Wilayah Desa</a></li>
                </ul>
              </details>
            </li>
            <li>
              <details>
                <summary>Lembaga Desa</summary>
                <ul className="p-2">
                  <li><a>Pemerintah Desa</a></li>
                  <li><a>BPD</a></li>
                </ul>
              </details>
            </li>
            <li>
              <details>
                <summary>Layanan</summary>
                <ul className="p-2">
                  <li><a>Pengajuan Surat</a></li>
                  <li><a>Pengaduan Masyarakat</a></li>
                </ul>
              </details>
            </li>
            <li><a>Berita</a></li>
            <li><a>Galeri</a></li>
          </ul>
        </div>
        <div className="navbar-end">
          <a className="btn">Login</a>
        </div>
      </div>
    </>
  )
}

export default Navbar