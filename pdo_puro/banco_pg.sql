CREATE SEQUENCE clientes_cliente_seq;

CREATE TABLE clientes (
    cliente integer NOT NULL DEFAULT nextval('clientes_cliente_seq'),
	cpf char(11), -- Caso os clientes sejam também empresas o campo deveria ser cpf_cnpj
	nome char(45) not null,
	credito_liberado char(1) not null check( credito_liberado='s' OR credito_liberado = 'n'),
	data_nasc date,
	email varchar(50)
);

ALTER SEQUENCE clientes_cliente_seq
OWNED BY clientes.cliente;

INSERT INTO clientes (cpf,nome,credito_liberado,email,data_nasc) VALUES 
('11111111111', 'Joao Pereira Brito', 's', 'joao@brito.com', '14/04/1976'),
('11111111112', 'Roberto Pereira Brito', 'n', 'roberto@brito.com', '14/04/1966'),
('11111111113', 'Antônio Pereira Brito', 'n', 'antonio@brito.com', '14/04/1986'),
('11111111114', 'Carlos Pereira Brito', 's', 'carlos@brito.com', '14/12/1976'),
('11111111115', 'Otoniel Pereira Brito', 's', 'otoniel@brito.com', '14/04/1976'),
('11111111116', 'Helena Pereira Brito', 's', 'helena@brito.com', '14/05/1976'),
('11111111117', 'Flávio Pereira Brito', 's', 'flavio@brito.com', '14/06/1976'),
('11111111118', 'Joana Pereira Brito', 'n', 'joana@brito.com', '14/07/1976'),
('11111111119', 'Francisco Pereira Brito', 'n', 'francisco@brito.com', '14/08/1976'),
('11111111110', 'Jorge Pereira Brito', 's', 'jorje@brito.com', '14/09/1976'),
('11111111121', 'Pedro Pereira Brito', 's', 'pedro@brito.com', '14/10/1976'),
('11111111131', 'Ribamar Pereira Brito', 's', 'ribamar@brito.com', '14/11/1976'),
('11111111141', 'Tiago Pereira Brito', 's', 'tiago@brito.com', '14/11/1976'),
('11111111151', 'Elias Pereira Brito', 'n', 'elias@brito.com', '14/12/1976'),
('11111111161', 'Marcos Pereira Brito', 's', 'marcos@brito.com', '14/04/1977'),
('11111111171', 'Ricardo Pereira Brito', 's', 'ricardo@brito.com', '14/04/1978'),
('11111111181', 'Rômulo Pereira Brito', 's', 'romulo@brito.com', '14/04/1979'),
('11111111191', 'Henrique Pereira Brito', 'n', 'henrique@brito.com', '14/04/1975'),
('11111111101', 'Francis Pereira Brito', 's', 'francis@brito.com', '14/04/1974'),
('11111111211', 'Otávio Pereira Brito', 's', 'otavio@brito.com', '14/04/1973'),
('11111111311', 'Rogério Pereira Brito', 's', 'rogerio@brito.com', '14/04/1972'),
('11111111411', 'Jurandir Pereira Brito', 's', 'jurandir@brito.com', '14/04/1971'),
('11111111511', 'Raquél Pereira Brito', 'n', 'raquel@brito.com', '14/04/1970');
