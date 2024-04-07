import Navbar from "@/Components/Common/navbar/Navbar"
import DaftarPemerintahDesa from "@/Components/PemerintahDesa/DaftarPemerintahdesa"
import CarouselPemerintahDesa from "@/Components/PemerintahDesa/CarouselPemerintahDesa"

function PemerintahDesa() {
  return (
    <>
      <Navbar />
      <CarouselPemerintahDesa />
      <DaftarPemerintahDesa />
    </>
  )
}
export default PemerintahDesa