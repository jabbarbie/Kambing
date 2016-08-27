<?php

use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('unit')->insert([[
            'id_unit' => null,
            'tertanggung' => 'FAUZI JABBAR FAISAL',
            'nopol'   => 'KH 27 JB',
            'norangka'=> 'MHKV1BA1JCK009578',
            'nomesin' => 'DL66330',
            'warna'   => 'Hitam',
            'merk'    => 'Honda',
            'jenis'   => 'Jazz',
            'tahun'   => '2017',
            'nomodel' => 'F601RM-GMMFJJ',
          ],
          [
            'id_unit' => null,
            'tertanggung' => 'RANDY KURNIA AKBAR',
            'nopol'   => 'KH 8888 AB',
            'norangka'=> 'MHKV1BA1JCK009578',
            'nomesin' => 'DL66330',
            'warna'   => 'Hitam',
            'merk'    => 'Toyota',
            'jenis'   => 'Alpard',
            'tahun'   => '2017',
            'nomodel' => 'F601RM-GMMFJJ',
          ],
          [
            'id_unit' => null,
            'tertanggung' => 'SURYA DHARMA FREDICK',
            'nopol'   => 'KH 1234 AL',
            'norangka'=> 'MHKV1BA1JCK009578',
            'nomesin' => 'DL66330',
            'warna'   => 'Merah Metalic',
            'merk'    => 'Honda',
            'jenis'   => 'Brio',
            'tahun'   => '2017',
            'nomodel' => 'F601RM-GMMFJJ',
          ],
          [
            'id_unit' => null,
            'tertanggung' => 'NOVITA SARI',
            'nopol'   => 'KH 7777 AK',
            'norangka'=> 'MHKV1BA1JCK009578',
            'nomesin' => 'DL66330',
            'warna'   => 'Hitam',
            'merk'    => 'Mitsubhisi',
            'jenis'   => 'Triton',
            'tahun'   => '2020',
            'nomodel' => 'F601RM-GMMFJJ',
          ],
          [
            'id_unit' => null,
            'tertanggung' => 'SEBASTIAN ARIEF',
            'nopol'   => 'KH 11 AL',
            'norangka'=> 'MHKV1BA1JCK009578',
            'nomesin' => 'DL66330',
            'warna'   => 'BIRU METALIC',
            'merk'    => 'TOYOTA',
            'jenis'   => 'SWIFT',
            'tahun'   => '2021',
            'nomodel' => 'F601RM-GMMFJJ'

        ]]);
    }
}
