<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

// Ubicación del archivo Excel
$excelFile = 'Talonario precios (actualizado).xlsx';

try {
    $reader = new Xlsx();
    $spreadsheet = $reader->load($excelFile);
    $sheet = $spreadsheet->getActiveSheet();

    echo "<table>";

    // Itera sobre las filas
    foreach ($sheet->getRowIterator() as $row) {
        // Crea un array para almacenar los valores de las celdas
        $cells = [];
        
        // Itera sobre las celdas de la fila
        foreach ($row->getCellIterator() as $cell) {
            // Obtén el valor calculado de la celda y agrégalo al array si no es nulo ni vacío
            if (!is_null($cell) && $cell->getCalculatedValue() !== null && $cell->getCalculatedValue() !== '') {
                $cells[] = $cell->getCalculatedValue();
            }
        }
        
        // Si el array de celdas no está vacío, imprime la fila
        if (!empty($cells)) {
            // Imprime la fila
            echo "<tr>";
            foreach ($cells as $key => $value) {
                // Determina si la celda está en la segunda columna y contiene un número
                if ($key == 1 && $value == "Precio") {
                    echo "<th>" . $value . "</th>";
                } else if ($key == 1 && is_numeric($value)) {
                    echo "<td class=\"centrar-celda\">" . $value . "</td>";
                } else {
                    echo "<td>" . $value . "</td>";
                }
            }
            echo "</tr>";
        }
    }

    echo "</table>";
} catch (\PhpOffice\PhpSpreadsheet\Reader\Exception $e) {
    echo 'Error loading file: ' . $e->getMessage();
} catch (\PhpOffice\PhpSpreadsheet\Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
?>
