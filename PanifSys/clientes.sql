
CREATE TABLE `clientes` (
   `id_cliente` int(10) not null auto_increment,
   `nome` varchar(50) not null,
   `sexo` varchar(10),
   `cpf` varchar(14) not null,
   `data_nascimento` date,
   `endereco` varchar(80),
   `numero` varchar(5),
   `cidade` varchar(20),
   `estado` varchar(2),
   `cep` varchar(9),
   `complemento` varchar(30),
   `bairro` varchar(30),
   `telefone` varchar(15),
   `celular` varchar(15),
   `email` varchar(50),
   `login_cliente` varchar(20) not null,
   PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=5;

INSERT INTO `clientes` (`id_cliente`, `nome`, `sexo`, `cpf`, `data_nascimento`, `endereco`, `numero`, `cidade`, `estado`, `cep`, `complemento`, `bairro`, `telefone`, `celular`, `email`, `login_cliente`) VALUES ('1', 'Helder Santos', 'Masculino', '12312312312', '0000-00-00', 'Rua Joaracy Mariano de Barros', '242', 'Indaiatuba', 'SP', '1333390', '', 'Solar do Itamaracá', '38750161', '', 'abc@gmail.com', 'adm');
INSERT INTO `clientes` (`id_cliente`, `nome`, `sexo`, `cpf`, `data_nascimento`, `endereco`, `numero`, `cidade`, `estado`, `cep`, `complemento`, `bairro`, `telefone`, `celular`, `email`, `login_cliente`) VALUES ('2', 'Carlos Silva', '', '128.476.521-08', '0000-00-00', 'Rua Abx33', '12', 'Cidade D', 'SP', '13333-333', '', 'Bairro B', '(12)1212-1333', '', 'soulsollem@gmail.com', 'cli1');
INSERT INTO `clientes` (`id_cliente`, `nome`, `sexo`, `cpf`, `data_nascimento`, `endereco`, `numero`, `cidade`, `estado`, `cep`, `complemento`, `bairro`, `telefone`, `celular`, `email`, `login_cliente`) VALUES ('4', 'dsdsds', '', '373.317.648-02', '0000-00-00', 'endereco', '12121', 'cidade', 'SP', '11112-222', '', '', '(12)1212-1212', '(12)1212-1212', 'soulsollem@gmail.com', 'teste');