CREATE TABLE `estoque` (
   `id_insumo` int(100) not null auto_increment,
   `insumo` varchar(50) not null,
   `quantidade` float not null,
   `quantidade_minima` float not null,
   `unidade_medida` varchar(10) not null,
   PRIMARY KEY (`id_insumo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=6;

INSERT INTO `estoque` (`id_insumo`, `insumo`, `quantidade`, `quantidade_minima`, `unidade_medida`) VALUES 
('2', 'Farinha', '5000', '500', 'Kilogramas');