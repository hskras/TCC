CREATE TABLE `funcionarios` (
   `id_funcionario` int(10) not null auto_increment,
   `nome` varchar(50) not null,
   `cpf` varchar(14) not null,
   `data_nascimento` date,
   `sexo` varchar(10),
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
   `login_funcionario` varchar(20),
   `data_admissao` date,
   `cargo` varchar(20),
   `estado_civil` varchar(15),
   PRIMARY KEY (`id_funcionario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=4;

INSERT INTO `funcionarios` (`id_funcionario`, `nome`, `cpf`, `data_nascimento`, `sexo`, `endereco`, `numero`, `cidade`, `estado`, `cep`, `complemento`, `bairro`, `telefone`, `celular`, `email`, `login_funcionario`, `data_admissao`, `cargo`, `estado_civil`) VALUES ('1', 'Aloisio', '212.423.707-14', '1980-01-10', '', 'Rua A', '12', 'Indaiatuba', 'SP', '13556-565', '', '', '(19)1212-1212', '', 'abc@gmail.com', 'func2', '2008-01-10', 'Padeiro', 'Solteiro');
INSERT INTO `funcionarios` (`id_funcionario`, `nome`, `cpf`, `data_nascimento`, `sexo`, `endereco`, `numero`, `cidade`, `estado`, `cep`, `complemento`, `bairro`, `telefone`, `celular`, `email`, `login_funcionario`, `data_admissao`, `cargo`, `estado_civil`) VALUES ('2', 'Aloisio 2', '212.423.707-14', '1982-06-05', '', 'Rua A', '12', 'Indaiatuba', 'SP', '13556-565', '', '', '(19)1212-1212', '', 'abc@gmail.com', 'func3', '2006-06-05', 'Confeiteiro', 'Casado');
INSERT INTO `funcionarios` (`id_funcionario`, `nome`, `cpf`, `data_nascimento`, `sexo`, `endereco`, `numero`, `cidade`, `estado`, `cep`, `complemento`, `bairro`, `telefone`, `celular`, `email`, `login_funcionario`, `data_admissao`, `cargo`, `estado_civil`) VALUES ('3', 'Aloisio 3', '212.423.707-14', '1975-12-12', 'masculino', 'Rua A', '12', 'Indaiatuba', 'SP', '13556-565', '', '', '(19)1212-1212', '', 'abc@gmail.com', 'func4', '2005-12-12', 'Padeiro', 'Casado');