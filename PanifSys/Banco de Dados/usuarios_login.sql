CREATE TABLE `usuarios_login` (
   `login` varchar(20) not null,
   `senha` varchar(40) not null,
   `nivel_acesso` int(1) not null,
   `ativo` int(1),
   PRIMARY KEY (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `usuarios_login` (`login`, `senha`, `nivel_acesso`, `ativo`) VALUES 
('adm', 'c3b95e79a56e81177c67983303995204ea9c4a8d', '1', '1'),
('adm2', '1e8c603869f2a5f335fe4d87055999ece24aaa0e', '1', '1'),
('cli1', 'c3b95e79a56e81177c67983303995204ea9c4a8d', '3', '1'),
('func1', '6e18fb28a97e1e3c3e6654bf62c6c0fb4cc321f7', '2', '1');