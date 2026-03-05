<?php
require_once 'config.php';

# "Sistema de rotas"...
if (!isset($_GET['segment1'])) {
    view('index', [
        'title' => 'Nós entregamos a diferença',
        'description' => '📦 Transporte rápido ,seguro e confiável. 🛣️ Somos a estrada mais segura para sua logística. ⭐️ Nós entregamos a diferença.',
    ]);
}
if ($_GET['segment1'] == 'cotacao') {
    view('cotacao', [
        'title' => 'Faça já sua cotação',
        'description' => 'Transporte com quem entende do assunto: mudanças, fretes fracionados e exclusivos.',
    ]);
}

if ($_GET['segment1'] == 'email') email();