-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 02, 2022 at 03:33 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblioteca`
--

-- --------------------------------------------------------

--
-- Table structure for table `aluno`
--

CREATE TABLE `aluno` (
  `id_aluno` int(11) NOT NULL,
  `nome_aluno` varchar(200) NOT NULL,
  `sexo` varchar(1) DEFAULT NULL,
  `turma_aluno` int(4) NOT NULL,
  `email_aluno` varchar(200) NOT NULL,
  `tel_aluno` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aluno`
--

INSERT INTO `aluno` (`id_aluno`, `nome_aluno`, `sexo`, `turma_aluno`, `email_aluno`, `tel_aluno`) VALUES
(13, 'Victor VinÃ­cius de Lima Cunha', 'M', 301, 'victor12cunha@gmail.com', '(31) 9964-34916'),
(14, 'vidigal', 'F', 123456, '123@123.com', '(12) 3456-78911');

-- --------------------------------------------------------

--
-- Table structure for table `editora`
--

CREATE TABLE `editora` (
  `id_editora` int(11) NOT NULL,
  `nome_editora` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `editora`
--

INSERT INTO `editora` (`id_editora`, `nome_editora`) VALUES
(4, 'Arqueiro'),
(5, 'Intrinseca'),
(7, 'Kodansha Comics'),
(8, 'Paralela'),
(9, 'Pandorga Digital'),
(11, 'Jangada'),
(12, 'Suma de letras'),
(13, 'Darkside'),
(14, 'Yen press');

-- --------------------------------------------------------

--
-- Table structure for table `emprestimo`
--

CREATE TABLE `emprestimo` (
  `id_emprestimo` int(11) NOT NULL,
  `id_aluno` int(11) NOT NULL,
  `id_livro` int(11) NOT NULL,
  `data_emp` date NOT NULL,
  `data_dev` date NOT NULL,
  `qtd` int(11) NOT NULL,
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emprestimo`
--

INSERT INTO `emprestimo` (`id_emprestimo`, `id_aluno`, `id_livro`, `data_emp`, `data_dev`, `qtd`, `estado`) VALUES
(39, 13, 28, '2019-07-18', '2019-07-25', 1, 'ok'),
(40, 13, 42, '2019-07-15', '2019-07-22', 1, 'ok'),
(41, 13, 30, '2022-03-24', '2022-03-31', 1, 'ok'),
(42, 13, 42, '2022-03-24', '2022-03-31', 1, 'ok'),
(43, 14, 42, '2022-03-24', '2022-03-31', 1, 'ok'),
(44, 14, 42, '2022-03-24', '2022-03-31', 1, 'ok');

-- --------------------------------------------------------

--
-- Table structure for table `funcionario`
--

CREATE TABLE `funcionario` (
  `id_funcionario` int(11) NOT NULL,
  `nome_funcionario` varchar(200) NOT NULL,
  `email_funcionario` varchar(200) NOT NULL,
  `tel_funcionario` varchar(25) NOT NULL,
  `id_funcional` int(11) NOT NULL,
  `senha` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `funcionario`
--

INSERT INTO `funcionario` (`id_funcionario`, `nome_funcionario`, `email_funcionario`, `tel_funcionario`, `id_funcional`, `senha`) VALUES
(1, 'pedro', 'admin', '123', 12345678, 'admin'),
(6, 'Atila', 'atilasb@hotmail.com', '(31) 9659-5009', 111111111, 'admin'),
(7, 'Claudio', 'profcmaulais@gmail.com', '(31) 9817-1063', 111111111, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `genero`
--

CREATE TABLE `genero` (
  `id_genero` int(11) NOT NULL,
  `nome_genero` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genero`
--

INSERT INTO `genero` (`id_genero`, `nome_genero`) VALUES
(2, 'terror'),
(6, 'comÃ©dia'),
(7, 'suspense'),
(8, 'auto ajuda'),
(9, 'aventura'),
(10, 'fantasia'),
(12, 'Educativo');

-- --------------------------------------------------------

--
-- Table structure for table `livro`
--

CREATE TABLE `livro` (
  `id_livro` int(11) NOT NULL,
  `nome_livro` varchar(255) DEFAULT NULL,
  `edicao` int(15) NOT NULL,
  `id_editora` int(11) NOT NULL,
  `id_genero` int(11) NOT NULL,
  `quantidade_livro` int(11) NOT NULL DEFAULT '1',
  `resumo` text,
  `nome_autor` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `livro`
--

INSERT INTO `livro` (`id_livro`, `nome_livro`, `edicao`, `id_editora`, `id_genero`, `quantidade_livro`, `resumo`, `nome_autor`) VALUES
(27, 'That time i got reincarnated as a slime', 1, 7, 9, 1, 'The ordinary Satoru Mikami found himself dead after being stabbed by a slasher. It should have been the end of his meager 37 years, but he found himself deaf and blind after hearing a mysterious voice. He had been reincarnated into a slime!\r\n\r\nWhile complaining about becoming the weak but famous slime and enjoying the life of a slime at the same time, Satoru Mikami met with the Catastrophe-level monster â€œStorm Dragon Verudoraâ€, and his fate began to move.', 'Fuse'),
(28, 'That time i got reincarnated as a slime (novel)', 1, 14, 9, 1, 'Living alone and never having had a girlfriend, 37-year-old Satoru Mikami is dissatisfied with how his life has turned out. But after dying at the hands of a robber, he awakens to a fresh start in a new world...as a slime monster.\r\n', 'Mitz Vah'),
(29, 'O homem do engano', 1, 8, 7, 1, '\r\nPouco tempo depois do colapso da UniÃ£o SoviÃ©tica, dois jovens ocidentais se mudam para Moscou, atraÃ­dos pelas oportunidades profissionais que se abrem com a perspectiva de redemocratizaÃ§Ã£o do paÃ­s. Um deles Ã© jornalista e logo se desilude ao observar, no dia a dia da naÃ§Ã£o formada a partir dos escombros do regime comunista, um vaivÃ©m de expectativas e frustraÃ§Ãµes que parece nÃ£o ter fim. O outro, um advogado medÃ­ocre, deixa-se seduzir pela opulÃªncia em que vivem alguns dos antigos membros da nomenclatura soviÃ©tica e pÃµe-se a serviÃ§o de um deles, emprestando seu nome para camuflar um esquema de corrupÃ§Ã£o que estÃ¡ por trÃ¡s do maior conglomerado privado do setor petrolÃ­fero russo.', 'Chris Morgan Jones'),
(30, 'Programa Grimorio - Filhos da luz ', 0, 9, 9, 1, '\r\nVocÃª jÃ¡ imaginou viver em um planeta pÃ³s-apocalÃ­ptico, onde nÃ£o existem os recursos que conhecemos hoje? Agora Ã© a hora de vivenciar como seria, viver sem energia elÃ©trica, sem comida pronta, sem Ã¡gua encanada, entre outras necessidades que temos hoje em dia. Todos vivem em uma aldeia que Ã© sustentada pelas atividades exercidas pelos moradores, onde cada cidadÃ£o tem uma funÃ§Ã£o. Certa noite, foram encontrados quatro bebÃªs abandonados em uma casa, no meio da floresta, que receberam os nomes de Wolf, Dragon, Joseph e Poli. ApÃ³s anos se passarem, essas quatro crianÃ§as mostram que sÃ£o especiais e, com isso, vÃ£o ajudando no funcionamento da aldeia, atÃ© conhecerem Alben, um homem experiente que viu o mundo antes do apocalipse. EntÃ£o, ele lhes apresenta um livro mÃ¡gico chamado grimÃ³rio, que darÃ¡ a eles acesso aos seus poderes ocultos e Ã  magia. Mas, para chegar atÃ© seus grimÃ³rios, os quatro meninos passam por muitos treinamentos e, consequentemente, por muitas lutas com criaturas de outras dimensÃµes. AtÃ© chegarem ao seu grande e verdadeiro obstÃ¡culo.', 'MÃ¡rio Resmin'),
(31, 'Endgame o chamado', 1, 5, 9, 1, '\r\nA histÃ³ria comeÃ§a hÃ¡ doze mil anos, quando seres poderosos desceram do cÃ©u entre fumaÃ§a e fogo e criaram a humanidade, deixando-nos regras segundo as quais viver. Precisavam de ouro, e, para extraÃ­-lo, instalaram aqui as doze linhagens que deram origem Ã s nossas antigas civilizaÃ§Ãµes. Quando conseguiram o que queriam, foram embora. Mas avisaram que um dia retornariam e que, quando isso acontecesse, seria para o Jogo. O Jogo que determinaria nosso futuro. Os Jogadores terÃ£o que achar trÃªs chaves, que estÃ£o espalhadas pelo planeta. Quem achÃ¡-las primeiro ganha. \"Endgame: O Chamado\" acompanha a busca dos doze Jogadores pela primeira chave. O livro contÃ©m um enigma. Um enigma que convida o leitor a jogar seu prÃ³prio Endgame. Quem encontrar a soluÃ§Ã£o primeiro ganharÃ¡ uma mala cheia de ouro. Em adiÃ§Ã£o ao enigma estarÃ¡ disponÃ­vel um jogo on-line revolucionÃ¡rio desenvolvido pela Niantic Labs, empresa associada ao Google e responsÃ¡vel tambÃ©m pelo jogo Ingress.', 'James Frey E Nils Johnson shelton'),
(32, 'Vortex', 1, 11, 9, 1, '\r\nJackson Meyer agora Ã© um agente secreto da Tempest, a misteriosa divisÃ£o da CIA responsÃ¡vel por oferecer proteÃ§Ã£o contra todas as ameaÃ§as relacionadas a viagens no tempo. Preso no passado apÃ³s a tentativa de salvar Holly, ele tenta apagÃ¡-la da sua vida para nÃ£o colocÃ¡-la em perigo. Mas o Eyewall, um departamento rival da CIA, descobre sua antiga ligaÃ§Ã£o com Holly, colocando novamente em risco a vida dos dois, assim como a de seus parceiros. Eles irÃ£o descobrir que a realidade em torno deles Ã© muito diferente do que pensavam.', 'Julie Cross'),
(33, 'O artifice do tempo', 1, 11, 8, 1, '\r\nJack Morrow, de 13 anos de idade, descobre que tem a capacidade natural de viajar no tempo atravÃ©s das Necrovias, passagens interdimensionais que conectam as lÃ¡pides Ã  data de morte da pessoa enterrada. Desesperado para desvendar o segredo sombrio que cerca seus ancestrais, Jack viaja por elas e descobre um mundo secreto sob as ruas da Londres de 1940. Perseguido pelas Paladinas â€“ versÃ£o feminina e fantasmagÃ³rica de cavaleiros medievais â€“, Jack precisa encontrar a mÃ­tica espada Durendal, perdida, antes que seja usada para reviver o terrÃ­vel mestre das Paladinas, Rouland. O futuro de Jack, e de toda a sua famÃ­lia, depende de que ele evite o retorno de Rouland. Mas estarÃ¡ o tempo do seu lado?', 'Niel Bushnell'),
(34, 'O artifice do tempo', 1, 11, 8, 1, '\r\nJack Morrow, de 13 anos de idade, descobre que tem a capacidade natural de viajar no tempo atravÃ©s das Necrovias, passagens interdimensionais que conectam as lÃ¡pides Ã  data de morte da pessoa enterrada. Desesperado para desvendar o segredo sombrio que cerca seus ancestrais, Jack viaja por elas e descobre um mundo secreto sob as ruas da Londres de 1940. Perseguido pelas Paladinas â€“ versÃ£o feminina e fantasmagÃ³rica de cavaleiros medievais â€“, Jack precisa encontrar a mÃ­tica espada Durendal, perdida, antes que seja usada para reviver o terrÃ­vel mestre das Paladinas, Rouland. O futuro de Jack, e de toda a sua famÃ­lia, depende de que ele evite o retorno de Rouland. Mas estarÃ¡ o tempo do seu lado?', 'Niel Bushnell'),
(35, 'tÃºneis da morte', 1, 11, 9, 1, '\r\nQuando Jack Morrow descobre que nÃ£o Ã© um menino comum, ele Ã© arrastado quase imediatamente numa aventura surpreendente, muito alÃ©m de qualquer coisa que um dia tenha imaginado. Isso porque Jack Ã© um Viajante, alguÃ©m com a capacidade de viajar atravÃ©s das Necrovias, tÃºneis multidimensionais que ligam cada lÃ¡pide ao dia em que a pessoa morreu. Ao se ver na Londres devastada pela Segunda Guerra Mundial, na companhia de David, seu avÃ´, na Ã©poca ainda adolescente, Jack percebe que sua chegada a 1940 nÃ£o passou despercebida. ForÃ§as malignas de um mundo secreto sÃ£o convocadas a encontrÃ¡- lo. Enquanto Jack luta para sobreviver nessa aventura cheia de perigos e surpresas, ele acaba por desvendar o segredo sombrio da sua famÃ­lia, e se empenha, numa corrida contra o tempo, para tentar mudar o seu destino.', 'Niel Bushnell'),
(36, 'A coroa escarlate', 1, 4, 8, 7, 'HÃ¡ mil anos, dois jovens amantes foram traÃ­dos - Alger Waterlow foi condenado Ã  morte, e Hanalea, rainha de Fells, a uma vida sem amor. Agora, mais uma vez, o reino de Fells estÃ¡ Ã  beira de se desintegrar. Para a jovem rainha Raisa anaâ€™Marianna, manter a paz Ã© quase impossÃ­vel. A tensÃ£o entre os magos e os clÃ£s atingiu o limite. Os reinos vizinhos veem Fells como uma presa fÃ¡cil, e a maior esperanÃ§a de Raisa Ã© unir seu povo contra um inimigo em comum - mas esse inimigo talvez seja o homem por quem estÃ¡ apaixonada. Emaranhado em uma complexa rede de mentiras e tÃªnues alianÃ§as, o antigo dono da rua Han Alister agora faz parte do Conselho dos Magos. Navegar pela mortal polÃ­tica dos sangues azuis nunca foi tÃ£o perigoso - e Han parece fazer inimigos em todos os lugares. Sua Ãºnica aliada Ã© a rainha, e, apesar dos riscos, Ã© impossÃ­vel ignorar o que sente por ela. EntÃ£o Han descobre um segredo guardado hÃ¡ sÃ©culos, algo poderoso o bastante para unir o povo de Fells. Mas serÃ¡ que ele sobreviverÃ¡ por tempo suficiente para salvar o reino? Uma verdade mascarada hÃ¡ mil anos por uma terrÃ­vel mentira vem Ã  tona nesta emocionante conclusÃ£o da Ã©pica sÃ©rie de fantasia Os Sete Reinos.', 'Cinda Williams chima'),
(37, 'O trono lobo gris', 1, 12, 10, 1, '\r\nHan Alister pensou que jÃ¡ havia perdido todas as pessoas que amava, mas, ao encontrar Rebecca Morley Ã  beira da morte nas Montanhas Espirituais, percebe que nada Ã© mais importante do que salvÃ¡-la. O preÃ§o que paga por isso Ã© alto, e nada poderia preparar Han para o que descobre em seguida: a garota que ele conhece pelo nome de Rebecca Ã©, na verdade, Raisa anaâ€™Marianna, a princesa-herdeira de Fells. Magoado e se sentindo traÃ­do, Han tem certeza de que nÃ£o hÃ¡ futuro para ele ao lado da herdeira do trono. AlÃ©m do mais, ainda nutre Ã³dio pela famÃ­lia real, que permitiu que sua mÃ£e e irmÃ£ fossem assassinadas. Enquanto isso, forÃ§as parecem se unir para impedir que Raisa suba ao trono. A cada atentado contra sua vida, ela se pergunta quanto tempo terÃ¡ atÃ© que seus inimigos venÃ§am. Com ameaÃ§as surgindo de todos os lados, Raisa sÃ³ pode contar com sua inteligÃªncia e forÃ§a de vontade para sobreviver â€” e mesmo isso pode nÃ£o ser o bastante quando a forÃ§a do destino Ã© cruel e inevitÃ¡vel.', 'Cinda Williams chima'),
(38, 'A rainha exilada', 1, 12, 10, 1, 'Depois de ter a famÃ­lia assassinada por Lorde Bayar, Han Alister faz um acordo com os clÃ£s: eles bancarÃ£o seus estudos na Academia Mystwerk em troca de ajuda contra o Conselho dos Magos. Han logo aprende a se transportar para o mundo mÃ¡gico de Aediion, onde conhece Corvo, um mago poderoso que oferece lhe ensinar magia avanÃ§ada e uma parceria para destruir os Bayar. Mais um acordo do qual ele espera nÃ£o se arrepender depois. Em A Rainha Exilada, segundo volume da sÃ©rie Os Sete Reinos, a princesa-herdeira de Fells, Raisa anaâ€™Marianna, foge de seu reino para escapar de um casamento indesejado. Ela acredita que sÃ³ a Academia Wien pode oferecer o que precisa para ser uma boa rainha para Fells, por isso decide se passar por uma estudante comum na escola militar. Quando os caminhos de Han e Raisa se cruzam novamente, Ã© difÃ­cil resistir Ã  conexÃ£o imediata que sentem. Embora nÃ£o possam revelar sua verdadeira identidade, os dois estÃ£o destinados a mudar tanto a vida um do outro quanto o futuro de todo o Reino de Fells.', 'Cinda Williams chima'),
(39, 'O rei demÃ´nio', 1, 12, 10, 1, '\r\nOs tempos sÃ£o difÃ­ceis na cidade de Fellsmarch, nas montanhas. O jovem Han Alister Ã© capaz de quase qualquer coisa para garantir o sustento da mÃ£e e da irmÃ£, Mari. Ironicamente, a Ãºnica coisa valiosa que ele possui nÃ£o pode ser vendida: largos braceletes de prata, marcados com runas, adornam seus pulsos desde que nasceu. SÃ£o claramente enfeitiÃ§ados â€” cresceram conforme ele crescia, e o rapaz nunca conseguiu tirÃ¡-los. Certo dia, depois de uma discussÃ£o, Han toma um amuleto de Micah Bayar, filho do GrÃ£o Mago, para evitar que o rapaz o usasse contra ele. Han logo descobre que o amuleto tem uma histÃ³ria maldita â€” ele pertenceu um dia ao Rei DemÃ´nio, o mago que quase destruiu o mundo, mil anos antes. Com um artefato mÃ¡gico tÃ£o poderoso em jogo, Han sabe que os Bayar farÃ£o de tudo para recuperÃ¡-lo. Enquanto isso, Raisa anaâ€™Marianna, princesa herdeira do Reino de Fells, enfrenta suas prÃ³prias batalhas. Ela acaba de retornar Ã  corte depois de trÃªs anos de relativa liberdade com a famÃ­lia do pai no Campo Demonai. Raisa poderÃ¡ se casar ao completar 16 anos, mas ela nÃ£o estÃ¡ muito interessada em trocar sua liberdade por aulas de etiqueta e bailes esnobes. Almeja ser mais que um enfeite, aspira ser como Hanalea, a lendÃ¡ria rainha guerreira que matou o Rei DemÃ´nio e salvou o mundo. Mas parece que sua mÃ£e tem outros planos para ela â€” planos que incluem um pretendente que renega tudo que o reino representa. Os Sete Reinos tremerÃ£o quando as vidas de Han e Raisa colidirem nesta sÃ©rie emocionante da autora Cinda Williams Chima.', 'Cinda Williams chima'),
(40, 'MAGO Mestre', 1, 4, 10, 1, '\r\nPassaram-se trÃªs anos desde o terrÃ­vel cerco a Crydee. Os trÃªs rapazes que eram melhores amigos se encontram agora a quilÃ´metros de distÃ¢ncia uns dos outros. Pug, um escravo dos tsurani, estÃ¡ prestes a se tornar um dos maiores magos que jÃ¡ existiram. Tomas um grande guerreiro entre os elfos, arrisca-se a perder sua humanidade para a armadura encantada que veste. Arutha, PrÃ­ncipe de Crydee, luta desesperadamente contra invasores e traidores para salvar seu reino. Mestre, segundo livro da sÃ©rie A Saga do Mago, Ã© recheado de aventura, emoÃ§Ã£o e ameaÃ§as tÃ£o antigas quanto o prÃ³prio tempo. Nele, Raymond E. Feist volta a provar que Ã© um dos maiores nomes da literatura fantÃ¡stica contemporÃ¢nea.', 'Raymond E.Feist'),
(41, 'MAGO Aprendiz', 1, 4, 10, 1, 'â€œUm dos 100 melhores livros de todos os tempos.â€ â€“ BBC  â€œUma fantasia Ã©pica repleta de aÃ§Ã£o eletrizante e herÃ³is inesquecÃ­veis.â€ â€“ The Washington Post  Na fronteira do Reino das Ilhas existe uma vila tranquila chamada Crydee. Ã‰ lÃ¡ que vive Pug, um Ã³rfÃ£o franzino que sonha ser um guerreiro Destemido a serviÃ§o do rei. Mas a vida dÃ¡ voltas e Pug acaba se tornando aprendiz do misterioso mago Kulgan. Nesse dia, o destino de dois mundos se altera para sempre.  Com sua coragem, Pug conquista um lugar na corte e no coraÃ§Ã£o de uma princesa, mas subitamente a paz do reino Ã© desfeita por misteriosos inimigos que devastam cidade apÃ³s cidade. Ele, entÃ£o, Ã© arrastado para o conflito e, sem saber, inicia uma odisseia pelo desconhecido: terÃ¡ de dominar os poderes inimaginÃ¡veis de uma nova e estranha forma de magiaâ€¦ ou morrer.  Dividida em quatro livros, A Saga do Mago Ã© uma aventura sem igual, uma viagem por reinos distantes e ilhas misteriosas, onde conhecemos culturas exÃ³ticas, aprendemos a amar e descobrimos o verdadeiro valor da amizade. E, no fim, tudo serÃ¡ decidido na derradeira batalha entre as forÃ§as da Ordem e do Caos. **** â€œA Saga do Mago Ã© uma sÃ©rie obrigatÃ³ria para qualquer leitor de fantasia. Dos admiradores de Harry Potter aos fÃ£s de George R.R. Martin, ninguÃ©m deve perder estaobra-prima.â€ â€“ Lista dos 100 melhores livros da BBC â€œUma sÃ©rie memorÃ¡vel e poderosa.â€ â€“ Melhor Fantasia da Amazon â€œUm enredo extremamente rico que desvenda uma saga de amor, coragem e sacrifÃ­cio.â€ â€“ Publishers Weekly â€œDimensÃ£o Ã©pica e imaginaÃ§Ã£o vigorosa.â€ â€“ The Washington Post', 'Raymond E.Feist'),
(42, 'A Musica do silÃªncio', 1, 4, 8, 1, 'â€œTalvez vocÃª nÃ£o queira comprar este livro. Eu sei, nÃ£o se espera que um autor diga esse tipo de coisa. Mas prefiro ser honesto com vocÃª logo de saÃ­da. Acho justo avisar que esta Ã© uma histÃ³ria um pouquinho estranha. NÃ£o gosto muito de dar spoilers, mas basta dizer que esta aqui Ã©... diferente. NÃ£o tem um monte de coisas que se espera de uma histÃ³ria clÃ¡ssica. Por outro lado, se vocÃª gosta de palavras e mistÃ©rios e segredos, este livro tem muito a lhe oferecer. Se sente curiosidade sobre os SubterrÃ¢neos e a alquimia. Se deseja conhecer melhor os meandros ocultos do meu mundo... Bem, nesse caso, talvez este livro seja para vocÃª.â€ â€“ Patrick Rothfuss \r\n<br>\r\nDebaixo da Universidade, bem lÃ¡ no fundo, hÃ¡ um lugar escuro. Poucas pessoas sabem de sua existÃªncia, uma rede descontÃ­nua de antigas passagens e cÃ´modos abandonados. Ali, bem no meio desse local esquecido, situado no coraÃ§Ã£o dos SubterrÃ¢neos, vive uma jovem. Seu nome Ã© Auri, e ela Ã© cheia de mistÃ©rios. A mÃºsica do silÃªncio Ã© um recorte breve e agridoce de sua vida, uma pequena aventura sÃ³ dela. Ao mesmo tempo alegre e inquietante, esta histÃ³ria nos oferece a oportunidade de enxergar o mundo pelos olhos de Auri. E nos dÃ¡ a chance de conhecer algumas coisas que sÃ³ ela sabe... Neste livro, Patrick Rothfuss nos leva ao mundo de uma das personagens mais enigmÃ¡ticas da sÃ©rie As CrÃ´nicas do Matador do Rei. Repleto de segredos e mistÃ©rios, A mÃºsica do silÃªncio Ã© uma narrativa sobre uma jovem ferida em um mundo devastado.', 'Patrick Rothfuss'),
(44, 'CrÃ´nicas do Matador do Rei: Segundo Dia O Temor Do SÃ¡bio', 1, 4, 10, 1, '\r\nâ€œLembre-se de que hÃ¡ trÃªs coisas que todo sÃ¡bio teme: o mar na tormenta, uma noite sem luar e a ira de um homem gentil.â€ O temor do sÃ¡bio dÃ¡ continuidade Ã  impressionante histÃ³ria de Kvothe, o Arcano, o Sem-Sangue, o Matador do Rei. Quando Ã© aconselhado a abandonar seus estudos na Universidade por um perÃ­odo, por causa de sua rivalidade com um membro da nobreza local, Kvothe Ã© obrigado a tentar a vida em outras paragens. Em busca de um patrocinador para sua mÃºsica, viaja mais de mil quilÃ´metros atÃ© Vintas. LÃ¡, Ã© rapidamente envolvido na polÃ­tica da corte. Enquanto tenta cair nas graÃ§as de um nobre poderoso, Kvothe usa sua habilidade de arcanista para impedir que ele seja envenenado e lidera um grupo de mercenÃ¡rios pela floresta, a fim de combater um bando de ladrÃµes perigosos. Ao longo do caminho, tem um encontro fantÃ¡stico com Feluriana, uma criatura encantada Ã  qual nenhum homem jamais pÃ´de resistir ou sobreviver â€“ atÃ© agora. Kvothe tambÃ©m conhece um guerreiro ademirano que o leva a sua terra, um lugar de costumes muito diferentes, onde vai aprender a lutar como poucos. Enquanto persiste em sua busca de respostas sobre o Chandriano, o grupo de criaturas demonÃ­acas responsÃ¡vel pela morte de seus pais, Kvothe percebe como a vida pode ser difÃ­cil quando um homem se torna uma lenda de seu prÃ³prio tempo.', 'Patrick Rothfuss'),
(45, 'CrÃ´nicas do Matador do Rei: Primeiro Dia O Nome do Vento', 1, 4, 10, 1, '\r\nâ€œLembre-se de que hÃ¡ trÃªs coisas que todo sÃ¡bio teme: o mar na tormenta, uma noite sem luar e a ira de um homem gentil.â€ O temor do sÃ¡bio dÃ¡ continuidade Ã  impressionante histÃ³ria de Kvothe, o Arcano, o Sem-Sangue, o Matador do Rei. Quando Ã© aconselhado a abandonar seus estudos na Universidade por um perÃ­odo, por causa de sua rivalidade com um membro da nobreza local, Kvothe Ã© obrigado a tentar a vida em outras paragens. Em busca de um patrocinador para sua mÃºsica, viaja mais de mil quilÃ´metros atÃ© Vintas. LÃ¡, Ã© rapidamente envolvido na polÃ­tica da corte. Enquanto tenta cair nas graÃ§as de um nobre poderoso, Kvothe usa sua habilidade de arcanista para impedir que ele seja envenenado e lidera um grupo de mercenÃ¡rios pela floresta, a fim de combater um bando de ladrÃµes perigosos. Ao longo do caminho, tem um encontro fantÃ¡stico com Feluriana, uma criatura encantada Ã  qual nenhum homem jamais pÃ´de resistir ou sobreviver â€“ atÃ© agora. Kvothe tambÃ©m conhece um guerreiro ademirano que o leva a sua terra, um lugar de costumes muito diferentes, onde vai aprender a lutar como poucos. Enquanto persiste em sua busca de respostas sobre o Chandriano, o grupo de criaturas demonÃ­acas responsÃ¡vel pela morte de seus pais, Kvothe percebe como a vida pode ser difÃ­cil quando um homem se torna uma lenda de seu prÃ³prio tempo.', 'Patrick Rothfuss'),
(46, 'Trilogia dos Espinhos', 1, 13, 10, 1, '\r\nA saga completa em uma ediÃ§Ã£o de colecionador. Ele estava preso nos espinhos venenosos. Tinha a reputaÃ§Ã£o de ser violento e imprevisÃ­vel. Era preciso muita coragem para lanÃ§ar um livro desses. E foi assim que a DarkSideÂ® Books apostou no escuro e lanÃ§ou sua primeira fantasia dark: Prince of Thorns, livro de estreia da aclamada Trilogia dos Espinhos, de Mark Lawrence. Um sucesso que surpreendeu muita gente, e que se repetiria com os outros livros da sÃ©rie, King of Thorns e Emperor of Thorns. Agora, a saga completa estÃ¡ reunida em Trilogia dos Espinhos â€” Dark Age Edition. Os trÃªs romances saem em um Ãºnico volume em capa dura, capaz de resistir a um apocalipse nuclear. SÃ£o quase mil pÃ¡ginas cobertas de sangue nessa ediÃ§Ã£o de luxo que mais parece um autÃªntico grimÃ³rio da Idade das Trevas.A Trilogia narra as batalhas por vinganÃ§a e poder de Jorg Ancrath. Cruel demais para ser chamado de herÃ³i, Jorg entra facilmente na lista dos grandes canalhas que aprendemos a amar na literatura fantÃ¡stica, como Alex DeLarge (Laranja MecÃ¢nica) ou Tyrion Lannister (Game of Thrones).', 'Mark Lawrence');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id_aluno`);

--
-- Indexes for table `editora`
--
ALTER TABLE `editora`
  ADD PRIMARY KEY (`id_editora`);

--
-- Indexes for table `emprestimo`
--
ALTER TABLE `emprestimo`
  ADD PRIMARY KEY (`id_emprestimo`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id_funcionario`);

--
-- Indexes for table `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id_genero`);

--
-- Indexes for table `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`id_livro`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id_aluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `editora`
--
ALTER TABLE `editora`
  MODIFY `id_editora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `emprestimo`
--
ALTER TABLE `emprestimo`
  MODIFY `id_emprestimo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id_funcionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `genero`
--
ALTER TABLE `genero`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `livro`
--
ALTER TABLE `livro`
  MODIFY `id_livro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
