import DaftarBerita from '@/Components/Berita/DaftarBerita';
import Paginator from '@/Components/Berita/Paginator';
import Navbar from '@/Components/Common/Navbar/Navbar';
import { Link, Head } from '@inertiajs/react';
import { Helmet } from "react-helmet";


export default function Berita(props) {
  return (
    <>
      <Helmet>
        <title>Berita Desa - Desa Margasana</title>
      </Helmet>
      <div className='min-h-screen bg-slate-50'>
        <Head title={props.title} />
        <Navbar />
        <div className='flex justify-center flex-col lg:flex-row lg:flex-wrap lg:flex-stretch item-center gap-4 pd-4'>
          <DaftarBerita berita={props.berita.data} />
        </div>
        <div className='flex justify-center item-center'>
          <Paginator meta={props.berita.meta} />
        </div>
      </div>
    </>
  )
}