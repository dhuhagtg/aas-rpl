import { useEffect, useState } from 'react'
import './Berita.css'

const DaftarFoto = () => {
  const [data, setData] = useState([]);
  const [currentPage, setCurrentPage] = useState(1);
  const [itemsPerPage] = useState(6); // Ubah sesuai dengan jumlah item per halaman yang diinginkan

  useEffect(() => {
    const fetchData = async () => {
      try {
        let result = await fetch("http://127.0.0.1:8000/api/daftar-berita-desa");
        result = await result.json();
        setData(result);
      } catch (error) {
        console.error('Error fetching data:', error);
      }
    };

    fetchData();
  }, []);

  // Menghitung indeks awal dan akhir untuk item pada halaman saat ini
  const indexOfLastItem = currentPage * itemsPerPage;
  const indexOfFirstItem = indexOfLastItem - itemsPerPage;
  const currentItems = data.slice(indexOfFirstItem, indexOfLastItem);

  // Mengubah halaman
  const paginate = (pageNumber) => setCurrentPage(pageNumber);

  return (
    <>
      <div className="container">
        {currentItems.map((item, id) => (
          <div key={id} className="flex gap-4" style={{ marginRight: 50, marginLeft: 50, marginTop: 50, marginBottom: 50 }}>
            <div className="card bg-base-100 shadow-xl" style={{ width: 300 }}>
              <figure><img src={"storage/" + item.gambar} alt={item.judul} /></figure>
              <div className="card-body">
                <strong className="text-center text-2xl font-bold"><a>{item.judul}</a></strong>
              </div>
            </div>
          </div>
        ))}
      </div>

      {/* Paginator */}
      <div className="paginator">
        <button onClick={() => paginate(currentPage - 1)} disabled={currentPage === 1}>Previous</button>
        <button onClick={() => paginate(currentPage + 1)} disabled={indexOfLastItem >= data.length}>Next</button>
      </div>
    </>
  )
}

export default DaftarFoto
