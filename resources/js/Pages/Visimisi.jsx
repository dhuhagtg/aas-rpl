import CarouselVisimisi from "@/Components/Visimisi/CarouselVisimisi"
import Visidanmisi from "@/Components/Visimisi/Visidanmisi"
import Navbar from "@/Components/Common/navbar/Navbar"
import { Helmet } from "react-helmet";

function Visimisi() {
  return (
    <>
      <Helmet>
        <title>Visi dan Misi - Desa Margasana</title>
      </Helmet>
      <Navbar />
      <CarouselVisimisi />
      <Visidanmisi />

    </>
  )
}
export default Visimisi