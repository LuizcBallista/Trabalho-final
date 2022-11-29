CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    login VARCHAR(50) NOT NULL,
    senha VARCHAR(60) NOT NULL,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    data_nascimento DATE NOT NULL
);

CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    descricao TEXT NOT NULL,
    valor DECIMAL(15,2) NOT NULL,
    genero VARCHAR(50) NOT NULL
);

CREATE TABLE produtos_midia (
    id INT AUTO_INCREMENT PRIMARY KEY,
    produto_id INT NOT NULL REFERENCES produtos(id),
    arquivo VARCHAR(100) NOT NULL
);

CREATE TABLE carrinho_itens (
    id INT AUTO_INCREMENT PRIMARY KEY,
    produto_id INT NOT NULL REFERENCES produtos(id),
    valor DECIMAL(15,2) NOT NULL,
    usuario_id INT NOT NULL,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
);

INSERT INTO produtos
(nome, descricao, valor, genero)
VALUES
    ('Call of Duty®: Modern Warfare® II', 'Quem já tiver a Edição Padrão Digital do Modern Warfare® II pode fazer o upgrade para a Edição Cofre como parte de uma oferta por tempo limitado.

Receba as boas-vindas à nova era do Call of Duty®.

O Call of Duty®: Modern Warfare® II coloca os jogadores dentro de um conflito global sem precedentes que conta com o retorno dos Operadores icônicos da Força-Tarefa 141. Desde operações táticas para infiltração de alto risco em pequena escala até missões altamente confidenciais, jogadores vão se mobilizar junto de amigos em uma verdadeira experiência imersiva.

A Infinity Ward traz jogabalidade revolucionária para os fãs, com manuseio de arma totalmente novo, sistema de IA avançada, um novo Armeiro e uma série de outras inovação gráficas e de jogabilidade que vão elevar a franquia a outro nível.

O Modern Warfare® II é lançado com uma campanha para um jogador pelo mundo, combate Multijogador imersivo e uma experiência cooperativa de Operações Especiais centrada na narrativa.

Você também consegue acesso ao Call of Duty®: Warzone™ 2.0, a mais nova experiência Battle Royale.', 299.90, 'FPS'),
    ('Cyberpunk 2077', 'CRIE SEU PRÓPRIO CYBERPUNK
Torne-se um fora-da-lei urbano equipado com melhorias cibernéticas e crie sua lenda nas ruas de Night City.

EXPLORE A CIDADE DO FUTURO
Night City está repleta de coisas para fazer, lugares para ver e pessoas para conhecer. Você decide aonde ir, quando ir e como chegar lá.

CONSTRUA A SUA LENDA
Participe de aventuras ousadas e estabeleça relacionamentos com personagens inesquecíveis cujos destinos são moldados pelas escolhas que você faz.

EQUIPADO COM RECURSOS DE NOVA GERAÇÃO
Experimente Cyberpunk 2077 com uma série de mudanças e melhorias de jogabilidade e na economia, na cidade, no uso de mapas e muito mais.

CONTEÚDO ADICIONAL INCLUSO

Receba uma coleção de itens gratuitos, incluindo novas armas de fogo e corpo a corpo, personalizações adicionais e muito mais.', 99.95, 'RPG'),
    ('Tom Clancy\'s Rainbow Six® Siege', 'Domine a arte da destruição e do uso de gadgets em Tom Clancy’s Rainbow Six Siege. Enfrente combates intensos em curta distância, alta letalidade, decisões táticas, jogabilidade em equipe e ação explosiva a todo momento. Vivencie uma nova era de tiroteios ferozes e estratégia de alto nível nascida do grande legado dos jogos de Tom Clancy''s Rainbow Six passados.

Participe de um novo estilo de ataque usando um nível de destruição e uso de gadgets inigualável.
Na defesa, coordene com sua equipe para transformar seu ambiente em fortalezas. Crie armadilhas, fortificações e sistemas defensivos para prevenir invasões do inimigo.
No ataque, lidere sua equipe por corredores apertados, portas com barricadas e paredes reforçadas. Combine mapas táticos, drones de observação, rapel e mais, a fim de planejar, atacar e dispersar qualquer situação.

Escolha entre dezenas de agentes de forças especiais, altamente treinados, de todo o mundo. Use as mais novas tecnologias para rastrear o movimento inimigo. Destrua paredes para abrir novas linhas de fogo. Invada pelo teto ou pelo chão para criar novos pontos de acesso. Use todas as armas e gadgets do seu arsenal mortal para encontrar, manipular e destruir seus inimigos e o ambiente ao redor deles.

Experimente novas estratégias e táticas enquanto Rainbow Six Siege evolui com o tempo. Mude as regras de Siege com cada atualização incluindo novos agentes, armas, gadgets e mapas. Evolua junto com seus amigos em um ambiente sempre em mudança e tornem-se os agentes mais experientes e perigosos que existem.

Compita contra outros, ao redor do mundo, em partidas classificatórias. Junte seu melhor esquadrão e participe da comunidade competitiva em torneios semanais ou assista as melhores equipes profissionais batalharem entre si no Rainbow Six Siege Pro League.', 23.99, 'FPS'),
    ('God of War', 'Adentre o reino nórdico
Com a vingança contra os deuses do Olimpo em um passado distante, Kratos agora vive como um mortal no reino dos deuses e monstros nórdicos. É nesse mundo duro e implacável que ele deve lutar para sobreviver... e ensinar seu filho a fazer o mesmo.

Tenha uma segunda chance
Kratos é pai novamente. Como mentor e protetor de Atreus, um filho determinado a ganhar seu respeito, ele é forçado a encarar e controlar a fúria que há muito tempo o define enquanto viaja por um mundo ameaçador ao lado do filho.

Viaje até um mundo sombrio e primitivo habitado por criaturas terríveis
Do mármore e das colunas ornadas do Olimpo para as montanhas, cavernas e florestas sombrias do folclore nórdico pré-era viking, este é um reino claramente novo, com um panteão próprio de criaturas, monstros e deuses.

Trave um combate físico e visceral
Com uma câmera sobre o ombro do personagem que deixa o jogador mais próximo do que nunca da ação, as lutas em God of War™ refletem o panteão de criaturas nórdicas que Kratos vai enfrentar: são grandiosas, realistas e cruéis. A nova arma principal e as novas habilidades mantêm o espírito de God of War, mas também introduzem novos conceitos ao gênero, com uma nova perspectiva para os combates.
RECURSOS PARA PC
Gráficos de alta fidelidade
Um visual impressionante aprimorado no PC. Desfrute da resolução em 4K nos dispositivos suportados, [MU1] com taxas de quadros desbloqueadas para melhor desempenho. Ajuste as configurações com uma ampla variedade de predefinições e opções gráficas, incluindo sombras com maior resolução, reflexos do espaço da tela melhorados, a adição de GTAO e SSDO e muito mais.

Suporte a NVIDIA® DLSS e Reflex
Qualidade e desempenho lado a lado. Aproveite o poder da inteligência artificial do NVIDIA Deep Learning Super Sampling (DLSS) para melhorar as taxas de quadros e gerar imagens belas e nítidas em GPUs Nvidia selecionadas. Utilize a tecnologia de baixa latência do NVIDIA Reflex, que permite que você reaja mais rápido e aplique combos mais intensos com a jogabilidade responsiva que você procura em GPUs GeForce.

Personalização de controles
Jogue do seu jeito. Com suporte aos controles sem fio DUALSHOCK®4 e DUALSENSE®, a vários outros controles e a atalhos totalmente personalizáveis para mouse e teclado, você tem o poder de ajustar qualquer ação para adequá-la ao seu estilo de jogo.

Suporte à tecnologia ultrawide
Viva a experiência mais imersiva que você já teve. Viaje pelos reinos nórdicos e aprecie as paisagens de tirar o fôlego em widescreen panorâmico. Com suporte a ultrawidescreen de 21:9, God of War™ oferece uma experiência de cinema que amplia ainda mais a visão teatral e fluida original.', 149.92, 'Ação e Aventura'),
    ('Red Dead Redemption 2', 'Estados Unidos, 1899.

Arthur Morgan e a gangue Van der Linde são bandidos em fuga. Com agentes federais e os melhores caçadores de recompensas no seu encalço, a gangue precisa roubar, assaltar e lutar para sobreviver no impiedoso coração dos Estados Unidos. Conforme divisões internas profundas ameaçam despedaçar a gangue, Arthur deve fazer uma escolha entre os seus próprios ideais e a lealdade à gangue que o criou.

Agora com conteúdo adicional no Modo História e um Modo Foto repleto de recursos, Red Dead Redemption 2 também inclui acesso gratuito ao mundo compartilhado de Red Dead Online. Nele, os jogadores assumem uma diversidade de ofícios para construir suas próprias trajetórias na fronteira, seja perseguindo criminosos procurados como Caçador de Recompensa, estabelecendo um negócio como Mercador, escavando tesouros exóticos como Colecionador ou operando uma destilaria subterrânea como Moonshiner, e muito mais.

Com novas melhorias gráficas e técnicas que tornam o jogo mais imersivo, Red Dead Redemption 2 para PC aproveita ao máximo a potência do PC para dar vida a cada canto deste mundo gigantesco, rico e detalhado, incluindo maiores distâncias de renderização; iluminação global de maior qualidade e oclusão do ambiente para melhorar a iluminação do dia e da noite; melhorias nos reflexos e sombras mais fortes e de maior resolução a todas as distâncias; texturas de árvore tesseladas e melhorias nas texturas de grama e pelo, tornando todas as plantas e animais mais realistas.

Red Dead Redemption 2 para PC também oferece suporte a HDR e a monitores de ponta com resolução 4K ou superior, configurações com vários monitores, widescreen, taxas de quadros mais rápidas, entre outras opções.', 78.87, 'RPG');

INSERT INTO produtos_midia
(produto_id, arquivo)
VALUES
(1, 'mw2_capa.jpg'),
(1, 'mw2_img1.jpg'),
(1, 'mw2_img2.jpg'),
(1, 'mw2_img3.jpg'),
(1, 'mw2_img4.jpg'),
(2, 'cyber_capa.jpg'),
(2, 'cyber_img1.jpg'),
(2, 'cyber_img2.jpg'),
(2, 'cyber_img3.jpg'),
(2, 'cyber_img4.jpg'),
(3, 'r6_capa.jpg'),
(3, 'r6_img1.jpg'),
(3, 'r6_img2.jpg'),
(3, 'r6_img3.jpg'),
(3, 'r6_img4.jpg'),
(4, 'gow_capa.jpg'),
(4, 'gow_img1.jpg'),
(4, 'gow_img2.jpg'),
(4, 'gow_img3.jpg'),
(4, 'gow_img4.jpg'),
(5, 'rdr_capa.jpg'),
(5, 'rdr_img1.jpg'),
(5, 'rdr_img2.jpg'),
(5, 'rdr_img3.jpg'),
(5, 'rdr_img4.jpg');