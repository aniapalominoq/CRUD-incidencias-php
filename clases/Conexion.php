<?php
    class Conexion {
    public $servidor = 'localhost';
    public $usuario = 'root';
    public $password = '';
    public $database = 'centro-control';
    public $port = 3306;
    private $conexion;

    public function conectar() {
        $this->conexion = mysqli_connect(
            $this->servidor,
            $this->usuario,
            $this->password,
            $this->database,
            $this->port
        );
        
        return $this->conexion;
    }

    public function desconectar() {
        if ($this->conexion) {
            mysqli_close($this->conexion);
            $this->conexion = null;
        }
    }
}

?>