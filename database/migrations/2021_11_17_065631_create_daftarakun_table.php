<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaftarakunTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftarakun', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_akun',30);
            $table->string('nama_akun',30);
            $table->enum('kategori_akun',['Aktiva Lancar','Investasi Jangka Panjang','Aktiva Tetap','Aktiva Tetap Tidak Berwujud','Aktiva Lain-Lain','Kewajiban','Kewajiban Jangka Panjang','Ekuitas','Pendapatan','Beban']);
            $table->enum('sub_akun',['Persediaan barang dagang','Piutang usah','Penyisihan piutang usaha','Wesel tagih','Perlengkapan','Iklan dibayar dimuka','Sewa dibayar dimuka','Asuransi dibayar dimuka','Investasi saham','Investasi obligasi','Peralatan','Akumulasi penyusutan peralatan','Kendaraan','Akumulasi penyusutan peralatan kendaraan','Gedung','Akumulasi penyusutan gedung','Tanah','Hak paten','Hak cipta','Merk dagang','Goodwill','Franchise','Mesin yang tidak digunakan','Beban yang ditangguhkan','Piutang kepada pemegang saham','Beban emisi saham','Utang usaha','Utang wesel','Beban yang masih harus dibayar','Utang gaji','Utang sewa gedung','Utang pajak penghasilan','Utang hipotek','Utang obligasi','Utang gadai','Modal/ekuitas pemilik','Prive','Pendapatan usaha','Pendapatan di luar usaha','Beban gaji toko','Beban gaji kantor','Beban sewa gedung','Beban penyesuaian piutang','Beban perlengkapan kantor','Beban perlengkapan toko','Beban iklan','Beban penyusutan peralatan','Beban penyusutan','Beban bunga','Beban lain-lain','beban listrik','beban air','beban telepon']);
            $table->integer('saldo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daftarakun');
    }
}
