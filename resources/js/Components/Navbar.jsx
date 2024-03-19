import { Link } from "@inertiajs/react"
import "../Components/css/navbar.css"

Link

const Navbar = () => {
  return (
    <div className="navbar bg-primary h-[100px]">
      <div className="navbar-start">
        <div className="dropdown">
          <div tabIndex={0} role="button" className="btn btn-ghost lg:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
          </div>
        </div>
        <img src="/img/desa-margasana-logo.png" width="200"></img>
      </div>
      <div className="navbar-center hidden lg:flex">
        <ul className="menu menu-horizontal px-1">
          <li><a href={route('/')}>Beranda</a></li>
          <li>
            <details>
              <summary>Pemerintahan</summary>
              <ul className="p-2">
                <li><a href={route('pemerintahdesa')}>Pemerintah Desa</a></li>
                <li><a href={route('bpd')}>BPD</a ></li>
              </ul>
            </details>
          </li>
          <li>
            <details>
              <summary>Layanan</summary>
              <ul className="p-2">
                <li><a href={route('pengajuansurat')}>Pengajuan Surat</a></li>
                <li><a href={route('pengaduanmasyarakat')}>Pengaduan Masyarakat</a></li>
              </ul>
            </details>
          </li>
          <li><a href={route('produkhukum')}>Produk Hukum</a></li>
          <li><a href={route('berita')}>Berita</a></li>
          <li><a href={route('galeri')}>Galeri</a></li>
        </ul>
      </div>
      <div className="navbar-end">
        <Link href={route('login')} className="btn">Login</Link>
      </div>
    </div>
  )
}

export default Navbar