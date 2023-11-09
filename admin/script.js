// const isbn = document.getElementById('isbn')
// const judul = document.getElementById('judul')
// const tahun = document.getElementById('tahun')
// const katalog = document.getElementById('katalog')
// const stok = document.getElementById('stok')
// const harga_pinjam = document.getElementById('harga_pinjam')
// const form = document.getElementById('form')
// const errorElement = document.getElementById('error')

// form.addEventListener('submit', (e) => {
//     let messages = []
//     if (isbn.value === '' || isbn. value == null) {
//         messages.push('isbn is required')
//     }
//     if (judul.value === '' || judul. value == null) {
//         messages.push('judul is required')
//     }
//     if (tahun.value === '' || tahun. value == null) {
//         messages.push('tahun is required')
//     }
//     if (katalog.value === '' || katalog. value == null) {
//         messages.push('katalog is required')
//     }
//     if (stok.value === '' || stok. value == null) {
//         messages.push('stok is required')
//     }
//     if (harga_pinjam.value === '' || harga_pinjam. value == null) {
//         messages.push('Harga is required')
//     }

//     if(messages.length > 0) {
//         e.preventDefault()
//         errorElement.innerText = messages.join(', ')
//     }
// })