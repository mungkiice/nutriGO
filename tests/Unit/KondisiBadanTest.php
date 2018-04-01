<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class KondisiBadanTest extends TestCase
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
			'berat_badan' => 40,
			'usia' => 17,
		]);
		//data user tersebut sebagai user yang sedang login
		$this->actingAs($user);
		//memanggil method kondisiBadan melalui HTTP Request, dan diconvert object response tersebut sebagai json
		$hasil = $this->get('/testKondisiBadan')->json();
		//ekspektasi hasil sama dengan Expected Result sebagai berikut
		$this->assertEquals([
			'indeksMasaTubuh' => 13.8408,
			'kondisiBadan' => 'Sangat Kurus',
			'beratBadanIdeal' => 63
		], $hasil);
	}
	/** @test */
    public function jalur_2(){
		//membuat user dengan data sesuai test case
		$user = User::create([
			'nama' => 'testing',
			'email' => 'testing@example.net',
			'password' => 'secret',
			'gender' => 'laki-laki',
			'tinggi_badan' => 170,
			'berat_badan' => 50,
			'usia' => 17,
		]);
		//data user tersebut sebagai user yang sedang login
		$this->actingAs($user);
		//memanggil method kondisiBadan melalui HTTP Request, dan diconvert object response tersebut sebagai json
		$hasil = $this->get('/testKondisiBadan')->json();
		//ekspektasi hasil sama dengan Expected Result sebagai berikut
		$this->assertEquals([
			'indeksMasaTubuh' => 17.3010,
			'kondisiBadan' => 'Kurus',
			'beratBadanIdeal' => 63
		], $hasil);
    }
	/** @test */
    public function jalur_3(){
		//membuat user dengan data sesuai test case
		$user = User::create([
			'nama' => 'testing',
			'email' => 'testing@example.net',
			'password' => 'secret',
			'gender' => 'laki-laki',
			'tinggi_badan' => 170,
			'berat_badan' => 63,
			'usia' => 17,
		]);
		//data user tersebut sebagai user yang sedang login
		$this->actingAs($user);
		//memanggil method kondisiBadan melalui HTTP Request, dan diconvert object response tersebut sebagai json
		$hasil = $this->get('/testKondisiBadan')->json();
		//ekspektasi hasil sama dengan Expected Result sebagai berikut
		$this->assertEquals([
			'indeksMasaTubuh' => 21.7993,
			'kondisiBadan' => 'Normal (Ideal)',
			'beratBadanIdeal' => 63
		], $hasil);
    }
	/** @test */
    public function jalur_4(){
		//membuat user dengan data sesuai test case
		$user = User::create([
			'nama' => 'testing',
			'email' => 'testing@example.net',
			'password' => 'secret',
			'gender' => 'laki-laki',
			'tinggi_badan' => 170,
			'berat_badan' => 77,
			'usia' => 17,
		]);
		//data user tersebut sebagai user yang sedang login
		$this->actingAs($user);
		//memanggil method kondisiBadan melalui HTTP Request, dan diconvert object response tersebut sebagai json
		$hasil = $this->get('/testKondisiBadan')->json();
		//ekspektasi hasil sama dengan Expected Result sebagai berikut
		$this->assertEquals([
			'indeksMasaTubuh' => 26.6435,
			'kondisiBadan' => 'Gemuk',
			'beratBadanIdeal' => 63
		], $hasil);
    }
	/** @test */
    public function jalur_5(){
		//membuat user dengan data sesuai test case
		$user = User::create([
			'nama' => 'testing',
			'email' => 'testing@example.net',
			'password' => 'secret',
			'gender' => 'laki-laki',
			'tinggi_badan' => 170,
			'berat_badan' => 85,
			'usia' => 17,
		]);
		//data user tersebut sebagai user yang sedang login
		$this->actingAs($user);
		//memanggil method kondisiBadan melalui HTTP Request, dan diconvert object response tersebut sebagai json
		$hasil = $this->get('/testKondisiBadan')->json();
		//ekspektasi hasil sama dengan Expected Result sebagai berikut
		$this->assertEquals([
			'indeksMasaTubuh' => 29.4117,
			'kondisiBadan' => 'Sangat Gemuk (Obesitas)',
			'beratBadanIdeal' => 63
		], $hasil);
    }
}
