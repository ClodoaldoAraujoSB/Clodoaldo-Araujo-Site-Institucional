<?php
if (isset($_GET['curso'])) {
    $keyword = $_GET['curso'];

    // Simule uma busca de cursos relacionados (substitua por sua lógica de busca real)
    $cursosRelacionados = ['Curso 1', 'Curso 2', 'Curso 3', 'Outro Curso'];

    // Filtra cursos relacionados
    $cursosFiltrados = array_filter($cursosRelacionados, function ($curso) use ($keyword) {
        return stripos($curso, $keyword) !== false;
    });

    // Exibe os cursos relacionados
    echo "<h2>Resultados para '$keyword':</h2>";
    echo "<ul>";
    foreach ($cursosFiltrados as $curso) {
        echo "<li>$curso</li>";
    }
    echo "</ul>";
}
?>
