const adaBerita = (berita) => {
  return berita.map((data, i) => {
    return (
      <div key={i} className="card w-full lg:w-96 bg-base-100 shadow-xl">
        <figure><img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
        <div className="card-body">
          <h2 className="card-title">
            {data.judul}
            <div className="badge badge-secondary">NEW</div>
          </h2>
          <p>{data.deskripsi}</p>
          <div className="card-actions justify-end">
            <div className="badge badge-outline">{data.author}</div>
            <div className="badge badge-outline">{data.gambar}</div>
          </div>
        </div>
      </div>
    )
  })
}

const noBerita = () => {
  return (
    <div>Maaf berita belum tersedia</div>
  )
}

const DaftarBerita = ({ berita }) => {
  return !berita ? noBerita() : adaBerita(berita)
}

export default DaftarBerita