import Navbar from "@/Components/Common/navbar/Navbar"
import DaftarPemerintahDesa from "@/Components/PemerintahDesa/DaftarPemerintahdesa"
import CarouselPemerintahDesa from "@/Components/PemerintahDesa/CarouselPemerintahDesa"
import { Helmet } from "react-helmet";

function PemerintahDesa() {
  return (
    <>
      <Helmet>
        <title>Pemerintah Desa - Desa Margasana</title>
      </Helmet>
      <Navbar />
      <CarouselPemerintahDesa />
      <DaftarPemerintahDesa />
    </>
  )
}
export default PemerintahDesa