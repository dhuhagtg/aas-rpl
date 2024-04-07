import Navbar from '@/Components/Common/Navbar/Navbar';
import { Link, Head } from '@inertiajs/react';



export default function Berita(props) {
  return (

    <div className='min-h-screen bg-slate-50'>
      <Head title={props.title} />
      <Navbar />
      <h1>INI HALAMAN GALERI</h1>
    </div>

  )
}