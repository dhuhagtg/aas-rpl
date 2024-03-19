import Navbar from '@/Components/Navbar';
import { Link, Head } from '@inertiajs/react';



export default function Berita(props) {
  return (

    <div className='min-h-screen bg-slate-50'>
      <Head title={props.title} />
      <Navbar />
      <h1>INI HALAMAN PRODUK HUKKUM</h1>
    </div>

  )
}