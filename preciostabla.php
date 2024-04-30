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
            // Determina si la celda en la segunda columna contiene el texto "Precio"
            $secondColumnValue = isset($cells[1]) ? $cells[1] : null;
            $isPriceRow = $secondColumnValue === "Precio";

            // Imprime la fila con las celdas marcadas como <th> si es una fila de "Precio"
            echo "<tr>";
            foreach ($cells as $key => $value) {
                $cellTag = $isPriceRow ? "th" : "td";
                if ($key == 1 && is_numeric($value)) {
                    echo "<$cellTag class=\"centrar-celda\">" . $value . "</$cellTag>";
                } else {
                    echo "<$cellTag>" . $value . "</$cellTag>";
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
