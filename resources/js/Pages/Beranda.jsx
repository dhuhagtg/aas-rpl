import CardButton from '@/Components/Beranda/CardButton';
import HeroBeranda from '@/Components/Beranda/HeroBeranda';
import Footer from '@/Components/Footer';
import Navbar from '@/Components/Navbar';
import { Link, Head } from '@inertiajs/react';





export default function Beranda(props) {
  console.log(props)
  return (

    <div className='min-h-screen bg-slate-50'>
      <Head title={props.title} />
      <Navbar />
      <HeroBeranda />
      <CardButton />
      <Footer />
    </div>

  )
}