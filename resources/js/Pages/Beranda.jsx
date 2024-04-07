import Navbar from "@/Components/Common/navbar/Navbar"
import "../Components/Beranda/Beranda.css"
import Footer from "@/Components/Common/footer/Footer"
import CarouselBeranda from "@/Components/Beranda/CarouselBeranda"
import MenuCard from "@/Components/Beranda/MenuCard"
import Sambutan from "@/Components/Beranda/Sambutan"




function Beranda() {
  return (
    <>
      <Navbar />
      <CarouselBeranda />
      <Sambutan />

      <Footer />

    </>
  )
}

export default Beranda