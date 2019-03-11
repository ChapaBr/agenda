<?php

class conn {
	# Host
	private $host = 'localhost';
	# Usuario
	private $usuario = 'root';
	# Senha
	private $senha = '';
	#Banco de dados
	private $database = 'pessoas';

	public function conecta_mysql(){
		$con = mysqli_connect ($this -> host, $this -> usuario, $this -> senha, $this -> database);
		mysqli_set_charset($con, 'utf8');

		if(mysqli_connect_errno()){
			echo "Erro ao conectar com o Banco de Dados MySQL". mysqli_connect_error();
		}
		return $con;
	}
}