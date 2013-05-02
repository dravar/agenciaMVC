<?php
abstract class DBCon {

	private static $db_host = 'drubuntu.com.mysql';
    private static $db_user = 'drubuntu_com';
    private static $db_pass = 'drubuntu!2013';
    protected $db_name = 'drubuntu_com';
	

/*
    private static $db_host = 'localhost';
    private static $db_user = 'root';
    private static $db_pass = '';
    protected $db_name = 'bbdd_agencia';
	*/
    protected $query;
    protected $rows = array();
    private $conn;
    public $missatge = 'Fet';

    # métodos abstractos para ABM de clases que hereden    
    abstract protected function get();
    abstract protected function set();
    abstract protected function edit();
    abstract protected function delete();
    
    # los siguientes métodos pueden definirse con exactitud y no son abstractos
	# Conectar a la base de datos
	private function open_connection() {
	    $this->conn = new mysqli(self::$db_host, self::$db_user, 
	                             self::$db_pass, $this->db_name);
	}

	# Desconectar la base de datos
	private function close_connection() {
		$this->conn->close();
	}

	# Ejecutar un query simple del tipo INSERT, DELETE, UPDATE
	protected function execute_single_query() {
	    if($_POST) {
	        $this->open_connection();
	        $this->conn->query($this->query);
	        $this->close_connection();
	    } else {
	        $this->missatge = 'Metodo no permitido';
	    }
	}

	# Ejecutar un query simple del tipo INSERT, DELETE, UPDATE
	protected function ejecutarQuery() {
	        $this->open_connection();
	        $this->conn->query($this->query);
	        $this->close_connection();
	}

	# Traer resultados de una consulta en un Array
	protected function get_results_from_query() {
        $this->open_connection();
        $result = $this->conn->query($this->query);
        while ($this->rows[] = $result->fetch_assoc());
        $result->close();
        $this->close_connection();
        array_pop($this->rows);
	}

	protected function consulta($sql){ //consultas que devuelven uno o mas valores
		//echo $sql;
		$this->open_connection();
		$resultado=$this->conn->query($sql);
		while($filas[]=$resultado->fetch_assoc());
		$this->close_connection();
		array_pop($filas);
		return $filas;
	}
	protected function consultaSimple($sql){ //Solo para consultas que devuelven un solo valor
		$this->open_connection();
		$resultado=$this->conn->query($sql);
		$filas=$resultado->fetch_assoc();
		$this->close_connection();
		return $filas;
		}
}
?>
