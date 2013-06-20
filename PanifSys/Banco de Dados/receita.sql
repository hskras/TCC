CREATE TABLE `receita` (
   `id_receita` int(10) not null,
   `id_insumo` int(10) not null,
   `quantidade` float not null,
   `unidade_medida` varchar(10) not null
) ENGINE=InnoDB DEFAULT CHARSET=utf8;