create database ltarq;

use ltarq;
 
create table contato(
	idCli int not null auto_increment primary key,
    nomeCli varchar(30) not null,
    emailCli varchar(30) not null,
    msgCli varchar (200) not null
    );
    
create table produto(
	id_prod varchar(10) not null primary key,
	custo float(10) not null,
	desc_prod varchar(100) not null,
	tipo_prod enum ('interna','externa','humanizada','video')
);

insert into produto (id_prod,custo, desc_prod)
values ('humani','250.00','Planta Humanizada');

create table orcamento(
	id_orc int not null auto_increment,
	nome varchar(30) not null,
	email varchar(30) not null,
	dataOrc date not null,
	totalOrc double not null,
    primary key (id_orc)
    );
    
create table prodOrcamento(
	id_orc int not null auto_increment,
	id_prod varchar(10) not null,
	qtd_prod int not null,
	foreign key (id_orc) references orcamento (id_orc),
	foreign key (id_prod) references produto (id_prod),
    constraint prodOrcPK primary key (id_orc, id_prod)
	);
    
create table PageBlog(
	id_post int not null auto_increment primary key,
    assinatura varchar(30) not null,
    titulo varchar(30) not null,
    dataPost date not null,
    conteudo varchar(1000) not null
    );

create table Admin(
	usuario varchar(10) not null primary key,
	senha varchar(8)not null
	);
    
create table galInterna(
    
    
);
    