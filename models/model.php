<?php 

	class Model {
	
	private static $db_host = 'localhost';
    private static $db_user = 'root';
    private static $db_pass = '';
    protected $db_name = 'bbdd_agencia';
    protected $query;
    protected $rows = array();
    private $conn;
    public $missatge = 'Fet';
	
	
	    public function set(){}
	    public function edit(){}
	    public function delete(){}
	    public function get(){}
	
	private function open_connection() {
	    $this->conn = new mysqli(self::$db_host, self::$db_user, 
	                             self::$db_pass, $this->db_name);
	}

	# Desconectar la base de datos
	private function close_connection() {
		$this->conn->close();
	}


	    
		public function login($user, $pass) {
		$this->open_connection();
		$resultado=$this->conn->query("SELECT * FROM usuaris where login ='".$user."' AND password = '".$pass."'");
		$filas=$resultado->fetch_assoc();
		$this->close_connection();
		return $filas;
	    }//login

		 public function get_vuelo() {
		 $this->open_connection();
		$resultado=$this->conn->query('SELECT * FROM vols LIMIT 8');
		while($filas[]=$resultado->fetch_assoc());
		$this->close_connection();
		array_pop($filas);
		//die(var_dump($filas));
		return $filas;
		}//vuelo
	
		 public function get_oferta() {
		 $this->open_connection();
		$resultado=$this->conn->query('SELECT * FROM ofertes LIMIT 10');
		while($filas[]=$resultado->fetch_assoc());
		$this->close_connection();
		array_pop($filas);
		//die(var_dump($filas));
		return $filas;
		}//oferta
			
		
		public function get_hotel() {
		$this->open_connection();
		$resultado=$this->conn->query('SELECT * FROM hotels LIMIT 8');
		while($filas[]=$resultado->fetch_assoc());
		$this->close_connection();
		array_pop($filas);// Elimina la ultima fila
		//die(var_dump($filas));
		return $filas;
		}//hotel

	
	 public function generar_reserva($user) {
		$this->open_connection();
		$resultado=$this->conn->query("INSERT INTO reserves (usuaris_id,dataReserva,status)  VALUES $user, '".date("Y-m-d H:i:s")."','Reservado') ");

		$ultim = mysqli_insert_id($this); //Devuelve el ultimo id generado de forma autoincremental
		$this->close_connection();
		return $ultim;
		}

    public function guardar_reserva($ultim,$id,$cantidad,$precio,$tipo) {
		$this->open_connection();
		$resultado=$this->conn->query("INSERT INTO reserva_detalle VALUES $ultim,$id,$cantidad,$precio,$tipo) ");


		$this->close_connection();
		}

    public function validarStock_reserva($tipo, $id_item) {
        $this->open_connection();
		$resultado=$this->conn->query("SELECT n_places FROM $tipo where id = $id_item");
		$this->close_connection();
    }
	
	
    public function actualizarStock_reserva($tipo, $id_item, $stock) {
		$this->open_connection();
        $resultado=$this->conn->query("UPDATE $tipo SET n_places=$stock WHERE id = $id_item");
		$this->close_connection();
    }
	
		public function get_vuelo_detalle($id) {
		 $this->open_connection();
		$resultado=$this->conn->query("SELECT * FROM vols where id=".$id);
		$filas=$resultado->fetch_assoc();
		$this->close_connection();
		//die(var_dump($filas));
		return $filas;
		}//vuelo
	
		 public function get_oferta_detalle($id) {
		 $this->open_connection();
		$resultado=$this->conn->query("SELECT * FROM ofertes where id=".$id);
		$filas=$resultado->fetch_assoc();
		$this->close_connection();
		//die(var_dump($filas));
		return $filas;
		}//oferta
			
		
		public function get_hotel_detalle($id) {
		$this->open_connection();
		$resultado=$this->conn->query("SELECT * FROM hotels where id=".$id);
		$filas=$resultado->fetch_assoc();
		$this->close_connection();
		//die(var_dump($filas));
		return $filas;
		}//hotel
		
		
		
		public function get_vuelo_lista() {
		 $this->open_connection();
		$resultado=$this->conn->query("SELECT * FROM vols");
		while($filas[]=$resultado->fetch_assoc());
		$this->close_connection();
		array_pop($filas);
		//die(var_dump($filas));
		return $filas;
		}//vuelo
	
		 public function get_oferta_lista() {
		 $this->open_connection();
		$resultado=$this->conn->query("SELECT * FROM ofertes ");
		while($filas[]=$resultado->fetch_assoc());
		$this->close_connection();
		array_pop($filas);
		//die(var_dump($filas));
		return $filas;
		}//oferta
			
		
		public function get_hotel_lista() {
		$this->open_connection();
		$resultado=$this->conn->query("SELECT * FROM hotels");
		while($filas[]=$resultado->fetch_assoc());
		$this->close_connection();
		array_pop($filas);
		//die(var_dump($filas));
		return $filas;
		}//hotel
		
		
		
		
		

	}

?>