<?php 
namespace DB;
final class MySQLi_secure {
        private $connection;
        
        public function __construct($hostname, $username, $password, $database, $port = '3306') {
        $ssl = DB_SSL;
        $ssl_keyfile = DB_SSL_KEYFILE;
        $ssl_certfile = DB_SSL_CERTFILE;
        $ssl_cafile = DB_SSL_CAFILE;
        $password = 'pscale_pw_TzyNxhgdv3aZe8D8iZAqd7WxE3FUetbAX1TLQVnoGe4';
       
        $this->connection = new \mysqli();
		$this->connection->init();
       
        $this->connection->ssl_set($ssl_keyfile, $ssl_certfile, $ssl_cafile,NULL,NULL);
        
		$this->connection->real_connect($hostname, $username, $password, $database);
                if ($this->connection->connect_error) {
                        //throw new ErrorException('Error: Could not make a database link (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
			throw new ErrorException($this->connection->dump_debug_info());
                }
                
                $this->connection->set_charset("utf8");
                $this->connection->query("SET SQL_MODE = ''");
        }

        public function query($sql) {
			$query = $this->connection->query($sql);
	
			if (!$this->connection->errno) {
				if ($query instanceof \mysqli_result) {
					$data = array();
	
					while ($row = $query->fetch_assoc()) {
						$data[] = $row;
					}
	
					$result = new \stdClass();
					$result->num_rows = $query->num_rows;
					$result->row = isset($data[0]) ? $data[0] : array();
					$result->rows = $data;
	
					$query->close();
	
					return $result;
				} else {
					return true;
				}
			} else {
				throw new \Exception('Error: ' . $this->connection->error  . '<br />Error No: ' . $this->connection->errno . '<br />' . $sql);
			}
		}
		public function escape($value) {
			return $this->connection->real_escape_string($value);
		}
		
		public function countAffected() {
			return $this->connection->affected_rows;
		}
	
		public function getLastId() {
			return $this->connection->insert_id;
		}
		
		public function connected() {
			return $this->connection->ping();
		}
		
		public function __destruct() {
			$this->connection->close();
		}
}
?>
