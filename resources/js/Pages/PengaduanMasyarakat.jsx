import Navbar from "@/Components/Common/navbar/Navbar"
import CarouselPengaduanMasyarakat from "@/Components/PengaduanMasyarakat/CarouselPengaduanMasyarakat"
import TutorialPengaduanMasyarakat from "@/Components/PengaduanMasyarakat/TutorialPengaduanMasyarakat"





function PengaduanMasyarakat() {
  return (
    <>
      <Navbar />
      <CarouselPengaduanMasyarakat />
      <TutorialPengaduanMasyarakat />

    </>

  )
}
export default PengaduanMasyarakat