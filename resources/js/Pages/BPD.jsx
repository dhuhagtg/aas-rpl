import CarouselBPD from "@/Components/BPD/CarouselBPD"
import DaftarBPD from "@/Components/BPD/DaftarBPD"
import Navbar from "@/Components/Common/navbar/Navbar"
import { Helmet } from "react-helmet";


function BPD() {
  return (
    <>
      <Helmet>
        <title>BPD - Desa Margasana</title>
      </Helmet>
      <Navbar />
      <CarouselBPD />
      <DaftarBPD />
    </>
  )
}
export default BPD