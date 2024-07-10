import './Beranda.css'

const CarouselBeranda = () => {
  return (
    <>
      <div className='container-carousel'>
        <div className="carousel w-full z-index-0" >
          <div id="slide1" className="carousel-item relative w-full">
            <div className="bg-gradient-to-r from-blue-500 to-blue-800 w-full h-full absolute top-0 left-0 opacity-50"></div>
            <img src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg" className="w-full" />
            <div className="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
              <div>
                <h1 className="text-4xl font-bold judul-carousel">SELAMAT DATANG DI WEBSITE SAMSAT XYZ</h1>
                <p className="sub-judul-carousel"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio aperiam fugit rem eveniet dolor reprehenderit hic? Voluptate autem hic nobis provident incidunt atque quidem fuga quo sed eligendi, quod expedita.

                  <br></br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, ut maiores! Velit dolore temporibus quae quidem vel, aliquam quod alias nemo doloremque, quam, aliquid nostrum a rerum placeat sint! Aperiam!
                  <br></br>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae rerum debitis suscipit neque atque quas, necessitatibus labore eveniet eaque, ab, quae illo nihil error repellendus iusto expedita provident. Laborum, nostrum.
                </p>
                <br></br>
                <button className="btn btn-primary baca-sejarah">Daftar</button>
              </div>
            </div>
          </div>
        </div >
      </div >
    </>
  )
}
export default CarouselBeranda