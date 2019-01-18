<html>
<form method="POST" action="">
<h2> Kalkutator BMI</h2>
<table>
	<tr>
		<td> Tinggi </td>
		<td> : </td>
		<td><input type="text" name="tinggi"></td><br>
	</tr>
	<tr>
		<td> Berat </td>
		<td> : </td>
		<td><input type="text" name="berat"></td><br>
	</tr>
	<tr>
		<td> Jenis Kelamin </td>
		<td> : </td>
		<td><input type="radio" name="jk" value="Wanita">Wanita
			<input type="radio" name="jk" value="Pria">Pria
		</td><br>
	</tr>
	<tr>
		<td><input type="submit" name="submit" value="Submit"></td>
	</tr>
</table>
</form>
</html>
<?php
class Kalkulator{

	public $berat=0;
	public $tinggi=0;
	public $hasil_bmi=0;
	public $jk="";
	public function tampil(){
		echo "BMI Anda ".$this->hasil_bmi;
	}

	public function Hasil_Perhitungan(){
		$this->berat = $_POST['berat'];
	$this->tinggi = $_POST['tinggi']/100;
	$this->jk = $_POST['jk'];
		$this->hasil_bmi = $this->berat/($this->tinggi*$this->tinggi);
		
		if ($this->jk == 'wanita') {
			if ($this->Hasil_Perhitungan<18) {
				echo "Under Weight/Kurus <br>";
			}
			elseif ($this->Hasil_Perhitungan=18 && $this->Hasil_Perhitungan<25) {
				echo "Normal <br>";
			}
			elseif ($this->Hasil_Perhitungan=25 && $this->Hasil_Perhitungan<27) {
				echo "Kegemukan <br>";
			}
			elseif ($this->Hasil_Perhitungan=27) {
				echo "Obesitas <br>";
			}

		}

		elseif ($this->jk == 'Pria'){
			if ($this->Hasil_Perhitungan<17) {
				echo "Kurus <br>";
			}
			elseif ($this->Hasil_Perhitungan=17 && $this->Hasil_Perhitungan<23) {
				echo "Normal <br>";
			}
			elseif ($this->Hasil_Perhitungan=23 && $this->Hasil_Perhitungan<27) {
				echo "Kegemukan <br>";
			}
			elseif ($this->Hasil_Perhitungan=27) {
				echo "Obesitas <br>";
			}
		}
	}

}



if (isset($_POST['submit'])) {
	$baru = new Kalkulator();
 	$baru->Hasil_Perhitungan();
 	$baru->tampil();

}

 ?>