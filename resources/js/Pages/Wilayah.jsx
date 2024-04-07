import CarouselWilayah from "@/Components/Wilayah/CarouselWilayah"
import WilayahDesa from "@/Components/Wilayah/WilayahDesa"
import Navbar from "@/Components/Common/navbar/Navbar"

function Wilayah() {
  return (
    <>
      <Navbar />
      <CarouselWilayah />
      <WilayahDesa />
    </>
  )
}
export default Wilayah