<?php
// Simula uma lista de cursos (substitua por sua lógica de busca real)
$cursos = ['Curso 1', 'Curso 2', 'Curso 3', 'Outro Curso'];

// Obtém a palavra-chave da pesquisa
$keyword = $_GET['keyword'];

// Filtra os cursos com base na palavra-chave
$filteredCursos = array_filter($cursos, function ($curso) use ($keyword) {
    return stripos($curso, $keyword) !== false;
});

// Retorna os cursos filtrados como JSON
echo json_encode($filteredCursos);
?>