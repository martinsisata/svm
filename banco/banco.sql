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
	create table controleUser (
		idControleuser int primary key auto_increment,
		tipo int,
		data varchar(50),
		hora varchar(50),
		idFuncionario int
		);
		---Views
	--vendas
	create view vendas as select precoUnitario as preco, descricao, venda.quantidade as qtd, total, 
	medicamento.nomeMedicamento as nome, dataVendida, nomeFuncionario as func from venda, medicamento, funcionario
	where venda.idMedicamento = medicamento.idMedicamento and venda.idFuncionario=funcionario.idFuncionario;
	--Estoque
	create view estoque as select nomeMedicamento as medicamento, quantidade as estoque from medicamento;
	--Credenciais dos usuários
	create view login as select idFuncionario as id, nomeFuncionario as nome, username, senha, perfil from funcionario;
	--Medicamentos incluido quem cadastrou e o tipo de Medicamentos
	create view medicamentos as select  nomeMedicamento, preco, nomeTipoMedicamento,quantidade as qtd,
	medicamento.dataRegisto as data, nomeFuncionario as func from medicamento, tipoMedicamento, funcionario
	where medicamento.idTipoMedicamento = tipoMedicamento.idTipoMedicamento and medicamento.idFuncionario=funcionario.idFuncionario;
	--Nome Buscar medicamentos disponível 
	create view getMedicamentos as select idMedicamento as id, nomeMedicamento as nome, preco, nomeTipoMedicamento as tipo,
	IF (quantidade>0,quantidade,'Não disponível') as 'qtd' 
	from medicamento, tipoMedicamento 
	where medicamento.idTipoMedicamento=tipoMedicamento.idTipoMedicamento;
	--Controle de assiduida
	create view controleAssiduidade as select  funcionario.nomeFuncionario as nome, controleUser.data , hora,
		case tipo
		when '1' then 'Entrada'
		when '2' then 'Saida'
		else 'Nao encontrado'
		end as tipo
	from controleUser, funcionario where controleUser.idFuncionario = funcionario.idFuncionario;



