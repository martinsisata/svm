	create table funcionario 
		(
			idFuncionario int primary key auto_increment,
			nomeFuncionario varchar(50),
			dataNascimento date,
			bI varchar(50) unique,
			telefone varchar(50),
			Morada varchar(50),
			perfil int,
			username varchar(50) unique,
			senha varchar(50)
		);
	create table tipoMedicamento
		(
			idTipoMedicamento int primary key auto_increment,
			nomeTipoMedicamento varchar(50),
			dataRegisto timestamp,
			idFuncionario int,
			foreign key (idFuncionario) references funcionario(idFuncionario)
	    );
	create table medicamento 
		(
			idMedicamento int primary key auto_increment,
			nomeMedicamento varchar(50),
			preco double(10,2),
			idTipoMedicamento int,
			quantidade int,
			dataRegisto timestamp,
			idFuncionario int,
			foreign key (idFuncionario) references funcionario(idFuncionario),
			foreign key (idTipoMedicamento) references tipoMedicamento(idTipoMedicamento)
		);

	create table venda 
		(
			idvenda int primary key auto_increment,
			precoUnitario double(10,2),
			descricao varchar(50),
			quantidade int,
			total double(10,2),
			idMedicamento int,
			idFuncionario int,
			dataVenda date,
			dataVendida timestamp,
			foreign key (idFuncionario) references funcionario(idFuncionario),
			foreign key (idMedicamento) references medicamento(idMedicamento)
			);
		---Views
	create view vendas as select precoUnitario as preco, descricao, venda.quantidade as qtd, total, 
	medicamento.nomeMedicamento as nome, dataVendida, nomeFuncionario as func from venda, medicamento, funcionario
	where venda.idMedicamento = medicamento.idMedicamento and venda.idFuncionario=funcionario.idFuncionario;
	create view estoque as select nomeMedicamento as medicamento, quantidade as estoque from medicamento;
	create view login as select idFuncionario as id, nomeFuncionario as nome, username, senha, perfil from funcionario;
	create view medicamentos as select  nomeMedicamento, preco, nomeTipoMedicamento,quantidade as qtd,
	medicamento.dataRegisto as data, nomeFuncionario as func from medicamento, tipoMedicamento, funcionario
	where medicamento.idTipoMedicamento = tipoMedicamento.idTipoMedicamento and medicamento.idFuncionario=funcionario.idFuncionario;