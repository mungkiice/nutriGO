<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use App\Pola;
use App\History;
class PolaMakanTest extends TestCase
{
	use RefreshDatabase;
	/** @test */
    public function jalur_1(){
        // membuat pola yang cocok dengan inputan test case
    	Pola::create([
    		'id' => 1,
    		'protein_total' => 70,
    		'lemak_total' => 50,
    		'karbohidrat_total' => 450
    	]);
        // membuat user dengan data sesuai test case
    	$user = User::create([
    		'id' => 1,
			'nama' => 'testing',
			'email' => 'testing@example.net',
			'password' => 'secret',
			'gender' => 'laki-laki',
			'tinggi_badan' => 170,
			'berat_badan' => 50,
			'usia' => 17,
		]);
        //membuat user tersebut login
		$this->actingAs($user);
        // data inputan sesuai testcase
    	$data = [
    		'proteinMin' => 68.5125,
    		'proteinMaks' => 102.7687,
    		'lemakMin' => 30.45,
    		'lemakMaks' => 76.125,
    		'karbohidratMin' => 411.075,
    		'karbohidratMaks' => 513.8437, 
    	];
        // memanggil method khusus untuk testing polaMakan melalui HTTP request POST, dan hasilnya berbentuk json
    	$hasil = $this->post('/testPolaMakan', $data)->json();
        // Expected result yaitu respon tersebut tidak null
    	$this->assertNotNull($hasil);
        //Expected Result yaitu telah dibuat sebuah history pada database jika pola yang cocok ditemukan
        $this->assertEquals(1, History::count());
    }
	/** @test */
    public function jalur_2(){
       // membuat user dengan data sesuai test case
        $user = User::create([
            'id' => 1,
            'nama' => 'testing',
            'email' => 'testing@example.net',
            'password' => 'secret',
            'gender' => 'laki-laki',
            'tinggi_badan' => 170,
            'berat_badan' => 50,
            'usia' => 17,
        ]);
        //membuat user tersebut login
        $this->actingAs($user);
        // data inputan sesuai testcase
    	$data = [
    		'proteinMin' => 600,
    		'proteinMaks' => 650,
    		'lemakMin' => 120,
    		'lemakMaks' => 150,
    		'karbohidratMin' => 700,
    		'karbohidratMaks' => 900, 
    	];
        // memanggil method khusus untuk testing polaMakan melalui HTTP request POST, dan mengambil konten tersebut
    	$hasil = $this->post('/testPolaMakan', $data)->getContent();
        // Expected result yaitu '' atau null dalam string, karena tidak ada pola yang cocok dengan data yang diinputkan
    	$this->assertEquals('', $hasil);
    }
}
