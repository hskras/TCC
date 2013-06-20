CREATE TABLE `produtos` (
   `produto` varchar(100) not null,
   `descricao` varchar(100),
   `preco` float not null,
   `imagem` varchar(100),
   `id_receita` int(10) not null,
   `id_produto` int(100) not null auto_increment,
   PRIMARY KEY (`id_produto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=6;

INSERT INTO `produtos` (`produto`, `descricao`, `preco`, `imagem`, `id_receita`, `id_produto`) VALUES 
('Pão de Hamburguer', 'Pão de Hamburguer', '0.25', '4179614edb9b5d669e5fac21d706fd4e.jpg', '0', '4'),
('Pão de Cachorro Quente', 'Pão de Cachorro Quente', '0.22', '52a3c2b03fc26f3c92daeec9192888c1.jpg', '0', '5');
