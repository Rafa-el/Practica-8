<?php
class Tabla
{
    public $producto;

    public function creaTabla()
    {
        echo "<a href='/Catalago/nuevo.php' align ='RIGHT';>Agregar producto </a>";
        echo '<table border="1">';
             echo '<tr>';
                echo '<th>ID</th>';
                echo '<th>Clave</th>';
                echo '<th>Nombre</th>';
                echo '<th>Descripcion</th>';
                echo '<th>Precio </th>';
                echo '<th>Opciones</th>';
            echo '</tr>';
            foreach($this->producto as $prod){
                echo '<tr>';
                    echo '<td>'.$prod['id']. '</td>';
                    echo '<td>'.$prod['clave'].'</td>';
                    echo '<td>'.$prod['nombre'].'</td>';
                    echo '<td>'.$prod['descripcion'].'</td>';
                    echo '<td>'.$prod['precio'].'</td>';
                echo '</tr>';
            }
        echo "</table>";
    }
}

?>