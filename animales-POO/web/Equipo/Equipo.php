<?php 

class Equipo{
    private $nombre;
    private $marca;
    private $precio;
    public function __construct($nombre, $marca, $precio){
        $this->nombre = $nombre;
        $this->marca = $marca;
        $this->precio = $precio;
    }
    public function imprimir(){
        echo "<td>".$this->nombre."</td>";
        echo "<td>".$this->marca."</td>";
        echo "<td>".$this->precio."</td>";
    }
    public function list(){
        return [
            'nombre' => $this->nombre,
            'marca' => $this->marca,
            'precio' => $this->precio
        ];
    }
}

?>