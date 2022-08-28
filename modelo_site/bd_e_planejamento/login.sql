-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Nov-2020 às 13:17
-- Versão do servidor: 10.4.16-MariaDB
-- versão do PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `login`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `livro_id` int(11) NOT NULL,
  `livro` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`livro_id`, `livro`) VALUES
(1, 'Lolita, Vladímir Nabókov, 1955'),
(2, 'Enquanto Agonizo, William Faulkner, 1930'),
(3, 'A Morte de Virgílio, Hermann Broch, 1945'),
(4, 'Os Lusíadas, Luís de Camões, 1572'),
(5, 'O Homem Invisível, Ralph Ellison, 1952'),
(6, 'Hamlet, William Shakespeare, 1603'),
(7, 'Finnegans Wake, James Joyce, 1939'),
(8, 'Rumo ao Farol, Virginia Woolf, 1927'),
(9, 'Pedro Páramo, Juan Rulfo, 1955'),
(10, 'As Três Irmãs, Anton Tchekhov, 1901'),
(11, 'Pais e Filhos, de Ivan Turguêniev, 1862'),
(12, 'Contos da Cantuária, Geoffrey Chaucer, século 15'),
(13, 'As Viagens de Gulliver, Jonathan Swift, 1726'),
(14, 'Folhas de Relva, Walt Whitman, 1855'),
(15, 'Middlemarch, George Eliot, 1874'),
(16, 'O Apanhador no Campo de Centeio, J. D. Salinger, 1951'),
(17, 'O Lobo da Estepe, Herman Hesse, 1927'),
(18, 'O Grande Gatsby, Scott Fitzgerald, 1925'),
(19, 'A Peste, Albert Camus, 1947'),
(20, 'O Mestre e Margarida, Mikhail Bulgákov, 1940'),
(21, 'As Vinhas da Ira, John Steinbeck, 1939'),
(22, 'Memórias de Adriano, Marguerite Yourcenar, 1951'),
(23, 'Paralelo 42, John dos Passos, 1930'),
(24, 'Admirável Mundo Novo, Aldous Huxley, 1932'),
(25, 'O Jogo da Amarelinha, Julio Cortázar, 1963'),
(26, 'A Náusea, Jean-Paul Sartre, 1938'),
(27, 'A Invenção de Morel, Adolfo Bioy Casares, 1940'),
(28, 'Memorial do Convento, José Saramago, 1982'),
(29, 'Crime e Castigo, Fiódor Dostoiévski, 1866'),
(30, 'Orgulho e Preconceito, Jane Austen, 1813');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(11) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `data_nascimento` date NOT NULL,
  `data_cadastro` datetime(6) NOT NULL,
  `livro_emprestado` varchar(200) NOT NULL COMMENT 'Nada consta'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `usuario`, `senha`, `nome`, `data_nascimento`, `data_cadastro`, `livro_emprestado`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '1994-10-25', '2020-11-29 08:57:23.000000', 'Livro devolvido'),
(2, 'Joao', 'cdc952e024c99837dc7af684adf322ee', 'Joao Paulo', '1992-06-26', '2020-11-29 08:57:58.000000', 'Livro devolvido'),
(3, 'Marcos', 'dfefdb66581190514404f57cdf74a8eb', 'Marcos Fernandes', '2000-04-26', '2020-11-29 08:58:45.000000', 'Livro devolvido'),
(4, 'Luiz', 'c00adbd55b64a6c37a227f20e74a4637', 'Luiz Enrique', '1998-04-02', '2020-11-29 08:59:15.000000', '08'),
(5, 'Carlos', '8fe918632d847e8ea3ebffbd47bd8ca9', 'Carlos Robelis', '1985-03-19', '2020-11-29 08:59:56.000000', '10'),
(6, 'Olivia', 'ba546f8d6d55634ce9106423ee4c5275', 'Olivia Maria', '1990-05-06', '2020-11-29 09:00:22.000000', 'Livro devolvido'),
(7, 'Benício', '258bf7f4019eaee73fe1078b4e36c81d', 'Benício Barbosa', '1972-02-16', '2020-11-29 09:01:05.000000', 'Livro devolvido'),
(8, 'Theo', '648c4b84114609edf619be0de4e27fad', 'Theo Eduardo', '1995-05-11', '2020-11-29 09:01:35.000000', '28'),
(9, 'Eduardo', '364a440226e1b575411a0e324e712d17', 'Eduardo Reis', '2006-05-04', '2020-11-29 09:02:01.000000', 'Livro devolvido'),
(10, 'Marcia', '21fce892eb93a570082c873459130024', 'Marcia Carvalho', '1989-11-06', '2020-11-29 09:02:52.000000', 'Livro devolvido');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`livro_id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `livro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
