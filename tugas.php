<?php 

	class identitas {
		public $nama;
		public $pekerjaan;
		public $alamat;

		function __construct ($nama, $pekerjaan, $alamat){
			$this->nama = $nama;
			$this->tempat = $pekerjaan;
			$this->kelas = $alamat;
		}
		public function get_nama(){
			return $this->nama;
		}
		public function get_tempat(){
			return $this->pekerjaan;
		}
		public function get_kelas(){
			return $this->alamat;
	
	}

?>