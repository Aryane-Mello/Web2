create table produto (
    idProduto int(11) not null,
    idCategoria int not null auto_increment,
    preco double not null,
    nomeProduto varchar(30) not null,
    descricao varchar(60) not null,
    imagem varchar(60) not null,
    estoque_minimo int(11) not null,
    estoque_maximo int(11) not null,
    quant_estoque integer not null,
    primary key (idCategoria)
);

create table categoria (
    idCategoria int not null auto_increment,
    descricao varchar(50),
    primary key (idCategoria)
);

create table endereco (
    idEndereco int(11) not null,
    cpf bigint not null,
    logradouro varchar(60) not null,
    numero varchar(7) not null,
    complemento varchar(60) not null,
    bairro varchar(60) not null,
    cidade varchar(60) not null,
    cep varchar(60) not null,
    primary key (cpf)
);

create table usuario (
    cpf bigint not null,
    nomeUsuario varchar(60) not null,
    email varchar(60) not null,
    senha varchar(12) not null,
    DataDeNascimento date not null,
    sexo char(1) not null,
    tipoUsuario varchar(10),
    primary key (cpf)
);
