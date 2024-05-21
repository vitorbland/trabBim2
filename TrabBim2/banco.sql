CREATE TABLE carro(
    placa VARCHAR(7) PRIMARY KEY,
    fabri VARCHAR(30) NOT NULL,
    modelo VARCHAR(50) NOT NULL,
    cor VARCHAR(30) NOT NULL,
    ano INTEGER NOT NULL,
    preco DOUBLE NOT NULL
);