<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Pola;
use App\History;
class MainController extends Controller
{
	public function __construct(){
		$this->middleware('auth');
	}

	//Input Berat dan Tinggi Badan
	public function showFormInput(){
		return view('FormMain');
	}
	public function updateTinggiBeratBadan(Request $request){
		$this->validate($request,[
			'tinggi_badan' => 'required',
			'berat_badan' => 'required'
		]);
		$user = Auth::user();
		$user->update([
			'tinggi_badan' => $request->tinggi_badan,
			'berat_badan' => $request->berat_badan
		]);
		return redirect('/idealBadan');
	}

	//Show Kategori Badan dan Berat Badan yang dianjurkan
	public function showKondisiBadan(){
		$data = (object) $this->kondisiBadan();
		//menampilkan berat badan yang disugestikan
		return view('BeratBadan', compact('data'));
	}
	public function kondisiBadan(){
		$user = Auth::user();
		//mengetahuin status gizi orang dewasa
		$beratBadan = $user->berat_badan;
		$tinggiBadan = $user->tinggi_badan;
		$indeksMasaTubuh = $beratBadan / pow(($tinggiBadan / 100), 2);
		if($indeksMasaTubuh  < 17){
			$kondisi = "Sangat Kurus";
		}elseif($indeksMasaTubuh <= 18.5){
			$kondisi = "Kurus";
		}elseif ($indeksMasaTubuh <= 25) {
			$kondisi = "Normal (Ideal)";
		}elseif ($indeksMasaTubuh <= 27) {
			$kondisi = "Gemuk";
		}else{
			$kondisi = "Sangat Gemuk (Obesitas)";
		}
		//menghitung berat badan ideal
		$beratBadanIdeal = 0.9 * ($tinggiBadan - 100);
		return array(
			'indeksMasaTubuh' => bcdiv($indeksMasaTubuh, 1, 4),
			'kondisiBadan' => $kondisi,
			'beratBadanIdeal' => $beratBadanIdeal
		);
	}

	//Menghitung Jumlah Nutrisi yang dibutuhkan
	public function showKebutuhanGizi(){
		$nutrisi = (object) $this->kebutuhanGizi();
		return view('Nutrisi', compact('nutrisi'));
	}
	public function kebutuhanGizi(){
		$user = Auth::user();
		$beratBadanIdeal = $this->kondisiBadan()['beratBadanIdeal'];
		$kebutuhanBasal = 0;
		if ($user->gender == 'laki-laki') {
			$kebutuhanBasal = $beratBadanIdeal * 30;
		}else{
			$kebutuhanBasal = $beratBadanIdeal * 25;
		}
		//50% untuk atlit, karena aplikasi ini fokus pada atlit maka menggunakan 50%
		$aktifitas = 50 / 100 * $kebutuhanBasal;
		//koreksiUsia 5% jika usia telah melebihi 40tahun
		$koreksiUsia = 5 / 100 * $kebutuhanBasal;
		$totalKaloriPerHari = $kebutuhanBasal + $aktifitas - $koreksiUsia;

		//kandungan protein 10-15 % dari total Kalori ,1 kkal = 4 gram protein
		$proteinMin = (10 / 100 * $totalKaloriPerHari) / 4;
		$proteinMaks = (15 / 100 * $totalKaloriPerHari) / 4;
		//kandungan lemak 10-25 % dari total Kalori ,1 kkal = 9 gram lemak
		$lemakMin = (10 / 100 * $totalKaloriPerHari) / 9;
		$lemakMaks = (25 / 100 * $totalKaloriPerHari) / 9;
		//kandungan karbohidrat 60-75 % dari total Kalori ,1 kkal = 4 gram karbohidrat
		$karbohidratMin = (60 / 100 * $totalKaloriPerHari) / 4;
		$karbohidratMaks = (75 / 100 * $totalKaloriPerHari) / 4;

		return array(
			'kebutuhanBasal' => $kebutuhanBasal,
			'totalKaloriPerHari' => $totalKaloriPerHari,
			'proteinMin' => (double) bcdiv($proteinMin, 1, 4),
			'proteinMaks' => (double) bcdiv($proteinMaks, 1, 4),
			'lemakMin' => (double) bcdiv($lemakMin,1,4),
			'lemakMaks' => (double) bcdiv($lemakMaks,1,4),
			'karbohidratMin' => (double) bcdiv($karbohidratMin,1,4),
			'karbohidratMaks' => (double) bcdiv($karbohidratMaks,1,4)
		);
	}

	//Show Pola Makan Yang Cocok sesuai database
	public function showPolaMakan(){
		$polaMakan = $this->polaMakan($this->kebutuhanGizi());
		return view('PolaMakan', compact('polaMakan'));
	}
	public function polaMakan(array $data){
		$user = Auth::user();
		$data = (object) $data;
		//mencari pola yang nilai lemak_total, protein_total, dan karbohidrat_total diantara nilai minimal dan maksimal yang dibutuhkan user
		$pola = Pola::whereBetween('lemak_total', [$data->lemakMin, $data->lemakMaks])
		->whereBetween('protein_total', [$data->proteinMin, $data->proteinMaks])
		->whereBetween('karbohidrat_total', [$data->karbohidratMin, $data->karbohidratMaks])
		->first();
		if(!$pola){
			return null;
		}else{
			History::create([
				'user_id' => $user->id,
				'pola_id' => $pola->id,
				'berat_badan' => $user->berat_badan,
				'tinggi_badan' => $user->tinggi_badan
			]); 
			return $pola;
		}
	}
	public function testingPolaMakan(Request $request){
		return $this->polaMakan($request->all());
	}
}
