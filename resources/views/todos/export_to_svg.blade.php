<?php
require 'db_config.php';

// Fetch todos from the database
$stmt = $pdo->query('SELECT title, description, is_completed FROM todos');
$todos = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Start SVG content
$svgContent = '<?xml version="1.0" encoding="UTF-8"?>';
$svgContent .= '<svg width="600" height="400" xmlns="http://www.w3.org/2000/svg">';
$svgContent .= '<rect width="100%" height="100%" fill="#f2f2f2" />';
$svgContent .= '<text x="50%" y="50" text-anchor="middle" font-size="24" font-family="Arial" fill="#333">All Tasks</text>';
$svgContent .= '<text x="20" y="100" font-size="16" font-family="Arial" fill="#333">Title</text>';
$svgContent .= '<text x="180" y="100" font-size="16" font-family="Arial" fill="#333">Description</text>';
$svgContent .= '<text x="400" y="100" font-size="16" font-family="Arial" fill="#333">Completed</text>';

$y = 140;
foreach ($todos as $todo) {
    $svgContent .= '<text x="20" y="' . $y . '" font-size="14" font-family="Arial" fill="#333">' . htmlspecialchars($todo['title']) . '</text>';
    $svgContent .= '<text x="180" y="' . $y . '" font-size="14" font-family="Arial" fill="#333">' . htmlspecialchars($todo['description']) . '</text>';
    $svgContent .= '<text x="400" y="' . $y . '" font-size="14" font-family="Arial" fill="#333">' . ($todo['is_completed'] ? 'Yes' : 'No') . '</text>';
    $y += 40;
}

$svgContent .= '</svg>';

// Force download of the SVG file
header('Content-Type: image/svg+xml');
header('Content-Disposition: attachment; filename="todo_list.svg"');
echo $svgContent;
?>