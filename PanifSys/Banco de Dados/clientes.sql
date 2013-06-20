CREATE TABLE `clientes` (
   `id_cliente` int(10) not null auto_increment,
   `nome` varchar(50) not null,
   `cpf` varchar(14) not null,
   `endereco` varchar(80),
   `numero` varchar(5),
   `cidade` varchar(20),
   `estado` varchar(20),
   `cep` varchar(9),
   `complemento` varchar(30),
   `bairro` varchar(30),
   `telefone` varchar(15),
   `celular` varchar(15),
   `email` varchar(50),
   `login_cliente` varchar(20) not null,
   PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=15;

INSERT INTO `clientes` (`id_cliente`, `nome`, `cpf`, `endereco`, `numero`, `cidade`, `estado`, `cep`, `complemento`, `bairro`, `telefone`, `celular`, `email`, `login_cliente`) VALUES 
('2', 'José pablo assunção', '128.476.521-08', 'Rua: Joaracy Mariano de Barros', '122', 'Indaiatuba', 'SP', '13333-390', '', 'Solar de Itamaracá', '(12)1212-1333', '(19)9898-6545', 'soulsollem@gmail.com', 'cli1');