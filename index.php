<?php
require_once 'config.php';

$testemonials = [
    [
        'photo' => 'Ronald-Barros.png',
        'name'  => 'Ronald Barros',
        'text'  => 'Conheci a empresa através do site cotafrete e me atenderam de imediato, serviço rápido e eficiente! Recomendo',
        'link'  => 'https://share.google/47zOpjGXTFA6QG7l8',
        'stars' => 5
    ],
    [
        'photo' => 'Liliane-TJ.png',
        'name'  => 'Liliane TJ',
        'text'  => 'Prezados,<br>Agradecemos pela entrega realizada por sua equipe. Registramos que a mercadoria foi entregue em bom estado e dentro do prazo combinado, o que demonstra o compromisso e a pontualidade da Royal Express Log LTDA.<br>Reforçamos a importância de manter este padrão de atendimento em nossas próximas operações, garantindo a agilidade e a segurança necessárias ao nosso processo logístico.<br><br>Atenciosamente,<br>TJ Comércio Importação e Exportação<br>Castanhal – PA',
        'link'  => 'https://share.google/z5dgrXcceNTE6Ff3N',
        'stars' => 5
    ],
    [
        'photo' => 'Jussara-Samuel.png',
        'name'  => 'Jussara Samuel',
        'text'  => 'Quem me atendeu foi a Ângela, tive um atendimento excelente, ágil e humanizado. E o serviço rápido e de ótima qualidade, agradeço a toda rede que fez com que a mercadoria chegasse ao meu cliente. Pós atendimento de excelência também. Obrigada, Deus abençoe a todos',
        'link'  => 'https://maps.app.goo.gl/t7rmcn36GSfViMPa9',
        'stars' => 5
    ],
    [
        'photo' => 'denis-oliveira.png',
        'name'  => 'Denis Oliveira',
        'text'  => 'Achei a Royal sem querer. De um dia pro outro me levaram uma mercadoria que estava parada à 30 dias em uma transportadora que não cumpriu a entrega, e me levaram daqui de São Paulo para Miguel Pereira -RJ em apenas 24hs. Simplesmente formidável.  Parabéns a toda equipe da Royal.',
        'link'  => 'https://goo.gl/maps/3Zo6DMujx2eVMKSN8',
        'stars' => 5
    ],
    [
        'photo' => 'aline-honorato.png',
        'name'  => 'Aline Honorato',
        'text'  => 'Tive muita dificuldade  em encontrar uma empresa para transportar minha mudança de Brasília para o Paraná , consegui o contato  deles, fui atendida pela Ângela muito atenciosa e prestativa, mudança chegou em 2 dias ( mesmo tendo feriado). Parabéns continuem com o bom trabalho! Ótimo preço/Qualidade e  Confiança.',
        'link'  => 'https://g.co/kgs/FsyAcC',
        'stars' => 5
    ],
    [
        'photo' => 'fabiana-delicato.png',
        'name'  => 'Fabiana Delicato',
        'text'  => 'Excelente atendimento! Super atenciosos, tudo bem explicado e detalhado, a atendente é muito simpática fora a rapidez nas respostas e também no agendamento de coleta! Entrega super rápida! Recomendo!!!!',
        'link'  => 'https://goo.gl/maps/Cx3uNnHR4u4KNFYk9',
        'stars' => 5
    ],
    [
        'photo' => 'danilo-fragoso.png',
        'name'  => 'Danilo Fragoso',
        'text'  => 'Fomos surpreendidos. Gostamos muito do atendimento, a Angela nos deu total atenção do início ao fim do processo e  entregaram no prazo conforme combinado.',
        'link'  => 'https://g.co/kgs/CLNDF7',
        'stars' => 5
    ],
    [
        'photo' => 'aguinaldo-dalfito.png',
        'name'  => 'Aguinaldo Dalfito',
        'text'  => 'Foi ótimo trabalhar com essa empresa eles cumpriram conforme o combinado. E são muito atenciosos. Eu super recomendo.....',
        'link'  => 'https://g.co/kgs/8g6WvG',
        'stars' => 5
    ],
];

# "Sistema de rotas"...
if (!isset($_GET['segment1'])) {
    view('index', [
        'title' => 'Nós entregamos a diferença',
        'description' => '📦 Transporte rápido ,seguro e confiável. 🛣️ Somos a estrada mais segura para sua logística. ⭐️ Nós entregamos a diferença.',
        'testemonials' => $testemonials
    ]);
}
if ($_GET['segment1'] == 'cotacao') {
    view('cotacao', [
        'title' => 'Faça já sua cotação',
        'description' => 'Transporte com quem entende do assunto: mudanças, fretes fracionados e exclusivos.',
    ]);
}

if ($_GET['segment1'] == 'email') email();