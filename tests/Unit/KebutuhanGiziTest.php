<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
class KebutuhanGiziTest extends TestCase
{
	use RefreshDatabase;
	/** @test */
	public function jalur_1(){
		//membuat user dengan data sesuai test case
		$user = User::create([
			'nama' => 'testing',
			'email' => 'testing@example.net',
			'password' => 'secret',
			'gender' => 'laki-laki',
			'tinggi_badan' => 170,
			//dengan tinggi 170cm maka beratBadanIdealnya 63
			'berat_badan' => 40,
			'usia' => 17,
		]);
		//data user tersebut sebagai user yang sedang login
		$this->actingAs($user);
		//memanggil method kondisiBadan melalui HTTP Request, dan diconvert object response tersebut sebagai json
		$hasil = $this->get('/testKebutuhanGizi')->json();
		//ekspektasi hasil sama dengan Expected Result sebagai berikut
		$this->assertEquals([
			'kebutuhanBasal' => 1890,
			'totalKaloriPerHari' => 2740.5,
			'proteinMin' => 68.5125,
			'proteinMaks' => 102.7687,
			'lemakMin' => 30.45,
			'lemakMaks' => 76.125,
			'karbohidratMin' => 411.075,
			'karbohidratMaks' => 513.8437
		], $hasil);
	}
	/** @test */
	public function jalur_2(){
		//membuat user dengan data sesuai test case
		$user = User::create([
			'nama' => 'testing',
			'email' => 'testing@example.net',
			'password' => 'secret',
			'gender' => 'perempuan',
			'tinggi_badan' => 170,
			//dengan tinggi 170cm maka beratBadanIdealnya 63
			'berat_badan' => 40,
			'usia' => 17,
		]);
		//data user tersebut sebagai user yang sedang login
		$this->actingAs($user);
		//memanggil method kondisiBadan melalui HTTP Request, dan diconvert object response tersebut sebagai json
		$hasil = $this->get('/testKebutuhanGizi')->json();
		//ekspektasi hasil sama dengan Expected Result sebagai berikut
		$this->assertEquals([
			'kebutuhanBasal' => 1575,
			'totalKaloriPerHari' => 2283.75,
			'proteinMin' => 57.0937,
			'proteinMaks' => 85.6406,
			'lemakMin' => 25.375,
			'lemakMaks' => 63.4375,
			'karbohidratMin' => 342.5625,
			'karbohidratMaks' => 428.2031
		], $hasil);
	}
}
