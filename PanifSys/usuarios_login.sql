CREATE TABLE `usuarios_login` (
   `login` varchar(20) not null,
   `senha` varchar(40) not null,
   `nivel_acesso` int(1) not null,
   `ativo` int(1),
   PRIMARY KEY (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `usuarios_login` (`login`, `senha`, `nivel_acesso`, `ativo`) VALUES ('adm', '2e6f9b0d5885b6010f9167787445617f553a735f', '1', '1');
INSERT INTO `usuarios_login` (`login`, `senha`, `nivel_acesso`, `ativo`) VALUES ('cli1', 'c3b95e79a56e81177c67983303995204ea9c4a8d', '3', '1');
INSERT INTO `usuarios_login` (`login`, `senha`, `nivel_acesso`, `ativo`) VALUES ('fun1', '2e6f9b0d5885b6010f9167787445617f553a735f', '2', '1');
INSERT INTO `usuarios_login` (`login`, `senha`, `nivel_acesso`, `ativo`) VALUES ('teste', '2e6f9b0d5885b6010f9167787445617f553a735f', '3', '1');