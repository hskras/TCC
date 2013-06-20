CREATE TABLE `funcionarios` (
   `id_funcionario` int(10) not null auto_increment,
   `nome` varchar(50) not null,
   `telefone` varchar(15),
   `celular` varchar(15),
   `email` varchar(50),
   `login_funcionario` varchar(20),
   PRIMARY KEY (`id_funcionario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=9;

INSERT INTO `funcionarios` (`id_funcionario`, `nome`, `telefone`, `celular`, `email`, `login_funcionario`) VALUES 
('1', 'Aloisio', '(19)1212-1212', '(12)3332-3323', 'abc@gmail.com', 'adm'),
('7', 'Funcionario 1', '(19)3545-9875', '', 'soulsollem@gmail.com', 'func1'),
('8', 'Administrador', '(19)3856-8654', '', 'helder.kr@gmail.com', 'adm2');