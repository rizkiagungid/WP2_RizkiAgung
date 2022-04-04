<section>
    <h1><?php echo $judul?></h1>
    <p arign='justify'>Pada pengertian codeigniter di atas tadi di jelaskan bahwa codeigniter menggunakan metode MVC. apa itu MVC? Kita juga harus mengetahui apa itu MVC sebelum masuk dan lebih jauh dalam belajar codeigniter</p>
    <p>MVC adalah teknik atau konsep yang memisahkan komponen utama menjadi tiga komponen yaitu model, view, dan controller.</p>

            <ol type="a">
            <li>Model</li>
    <p align='justify'>Model adalah kelas yang merepresentasikan atau memodelkan tipe data yang akan digunakan oleh aplikasi. model juga dapat didefinisikan sebagai bagian penanganan yang berhubungan dengan pengolajan atau manipulasi database. seperti misalnya mengambil data dati data base, menginput dan pengilahan database lainnya. semua intruksi atau fungsi yang berhubung dengan pengolahan database di letakkan di dalam model. sebagai contoh, jika ingin membuat apliaksi untuk menghitung luas dan keliling lingkaran, maka dapat memodelkan objek lingkaran sebagai kelas model</p>
    <p align='justify'>sebagai catatan, semua model harus disimpan di dalam folder application\model.</p>
    <li>view</li>
    <p align='justify'>View merupakan bagian yang menangani halaman user intergace atau halaman yang munvul apda user(pada browser). tampilan dari user interface di kumpulkan pada view untuk memisahkannya dengan controller dan model sehingga memudahkan web designer dalam melakukan pengembangan tampilan halaman website</p>
    <li>Controller</li>
    <p align='justify'>Controller merupakan kumpulan intruksi aksi yang menghubungkan model dan view, jadi user tidak akan berhubungan dengan model secara langsung, intinya data yang tersimpan di dalam database (model) di ambil oleh controller dan kemudian controller pula uang menampilkan nya ke view. jadi controller lan yang mengolah intruksi.</p>
    <p align='justify'>dari penjelasan tentang model view dan controller di atas dapat disimpulkan bahwa controller sebagai penhubung view dan model .misalnya pada aplikasi yang menampilka ndata dengan menggunakan metode konsep mvc, controller memanggil intruksi pada model yang mengambil data pada database, kemudian controller yang menerukannya pada view untuk di tampilkan. Jadi jelas sudah dan sangat mudah dalam pengembangkan aplikasi dengan cara mbc ini karena web designer atau front-end developer tidak perlu lagi berhubungan dengan controller, dia hanya perlu berhubungan dengan view untuk mendesign tampilan apliaksi, arena back-end developer yang menangani bagian controller dan modelnya, jadi pembagian tugas pun menjadi mudah dan pengembangan aplikasi dapat dilakukan dengan cepat dan terstruktur</p>
</section>