CREATE DATABASE autochoice;

USE autochoice;

CREATE TABLE Carro (
    id_carro INT AUTO_INCREMENT PRIMARY KEY,
    categoria VARCHAR(50),
    marca VARCHAR(50),
    modelo VARCHAR(50),
    motor VARCHAR(50),
    potencia INT,
    lugares INT,
    consumo_combustivel DECIMAL(5, 2),
    ano INT,
    faixa_preco FLOAT,
    qnt_lugares INT,
    consumo_estrada FLOAT,
    qnt_airbags INT,
    estepe BOOLEAN,
    consumo_cidade FLOAT,
    nota_teste_seguranca INT,
    apple_android BOOLEAN,
    transmissao CHAR(50),
    porta_malas INT,
    altura FLOAT,
    largura FLOAT,
    comprimento FLOAT,
    zero_a_cem FLOAT,
    propulsao CHAR(50),
    tracao CHAR(50),
    torque FLOAT,
    importado BOOLEAN,
    camera_re BOOLEAN,
    sensor_estacionamento BOOLEAN,
    teto_solar BOOLEAN,
    chave_presencial BOOLEAN,
    farol_neblina BOOLEAN,
    foto1 VARCHAR(255),
    foto2 VARCHAR(255),
    foto3 VARCHAR(255),
    foto4 VARCHAR(255),
    foto5 VARCHAR(255)
);


INSERT INTO Carro (categoria, marca, modelo, motor, potencia, lugares, consumo_combustivel, ano, faixa_preco, qnt_lugares, consumo_estrada, qnt_airbags, estepe, consumo_cidade, nota_teste_seguranca, apple_android, transmissao, porta_malas, altura, largura, comprimento, zero_a_cem, propulsao, tracao, torque, importado, camera_re, sensor_estacionamento, teto_solar, chave_presencial, farol_neblina, foto1, foto2, foto3, foto4, foto5)
VALUES
('SUV', 'Toyota', 'RAV4', '2.5L 4-Cilindros', 203, 5, 9.5, 2024, 80000.00, 5, 7.8, 8, TRUE, 10.2, 5, TRUE, 'Automática', 580, 1.70, 1.85, 4.60, 8.1, 'Gasolina', 'Integral', 224, FALSE, TRUE, TRUE, TRUE, TRUE, TRUE, 'https://imgs.search.brave.com/Cksai7_Wjbg0Tz3H7bmPYJ-wMIl_QLDRYGvuF9AkZRE/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9lZGdl/Y2FzdC1pbWcueWFo/b28ubmV0L215c3Rl/cmlvL2FwaS8yQ0Y3/QzBDQjgzODJGN0Qz/MUQwMThENDYyNUQ0/QTA4QzAwNDQwRDZG/QjU3NTMwMzVGODc3/QzcxRTZERjYyQUJD/L2F1dG9ibG9nL3Jl/c2l6ZWZpbGxfdzEy/MDBfaDY3NTtxdWFs/aXR5XzgwO2Zvcm1h/dF93ZWJwO2NjXzMx/NTM2MDAwOy9odHRw/czovL3MuYW9sY2Ru/LmNvbS9jb21tZXJj/ZS9hdXRvZGF0YS9p/bWFnZXMvVVNEMDBU/T1MxMTJBMDIxMDAx/LmpwZw', 'https://imgs.search.brave.com/leFR1dnq5Z5VrXc-QexkzAOAz1hMINxCU5a7WHDRe18/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9waWN0/dXJlcy5kZWFsZXIu/Y29tL3Mvc2xvYW5l/dG95b3RhZ2xlbnNp/ZGVzbGFnLzAwNTYv/NzNjNGI4ODYxZjVl/ZDdhNGI1YjRmYWMw/ZmEyMmI5ZmF4Lmpw/Zw'),
('Hatchback', 'Volkswagen', 'Golf GTI', '2.0L 4-Cilindros Turbo', 241, 5, 8.5, 2024, 90000.00, 5, 7.2, 6, FALSE, 9.8, 5, TRUE, 'Automática', 380, 1.45, 1.80, 4.25, 6.4, 'Gasolina', 'Dianteira', 350, FALSE, TRUE, TRUE, TRUE, TRUE, TRUE),
('Sedan', 'Honda', 'Civic', '2.0L 4-Cilindros', 158, 5, 7.2, 2024, 75000.00, 5, 6.5, 6, TRUE, 8.5, 5, TRUE, 'Automática', 420, 1.40, 1.80, 4.70, 9.1, 'Gasolina', 'Dianteira', 187, FALSE, TRUE, TRUE, TRUE, TRUE, TRUE),
('SUV', 'Mazda', 'CX-5', '2.5L 4-Cilindros Turbo', 250, 5, 10.0, 2024, 85000.00, 5, 8.0, 6, TRUE, 11.5, 5, TRUE, 'Automática', 460, 1.65, 1.85, 4.60, 7.3, 'Gasolina', 'Integral', 310, FALSE, TRUE, TRUE, TRUE, TRUE, TRUE),
('Cupê', 'Ford', 'Mustang', '5.0L V8', 450, 4, 13.0, 2024, 120000.00, 4, 9.5, 6, TRUE, 14.5, 5, TRUE, 'Automática', 382, 1.38, 1.91, 4.78, 4.3, 'Gasolina', 'Traseira', 529, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE),
('SUV', 'Jeep', 'Wrangler', '3.6L V6', 285, 5, 11.5, 2024, 85000.00, 5, 9.0, 6, TRUE, 12.5, 4, TRUE, 'Automática', 533, 1.88, 1.87, 3.83, 8.1, 'Gasolina', 'Integral', 353, FALSE, TRUE, TRUE, TRUE, TRUE, TRUE),
('Sedan', 'Hyundai', 'Elantra', '2.0L 4-Cilindros', 147, 5, 7.0, 2024, 70000.00, 5, 6.2, 6, TRUE, 8.0, 5, TRUE, 'Automática', 408, 1.43, 1.80, 4.60, 9.5, 'Gasolina', 'Dianteira', 179, FALSE, TRUE, TRUE, TRUE, TRUE, TRUE),
('Cupê', 'Chevrolet', 'Camaro', '6.2L V8', 455, 4, 14.0, 2024, 110000.00, 4, 9.8, 6, TRUE, 15.0, 5, TRUE, 'Automática', 258, 1.40, 1.88, 4.78, 4.0, 'Gasolina', 'Traseira', 617, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE),
('Hatchback', 'Ford', 'Focus', '1.5L 3-Cilindros Turbo', 150, 5, 6.5, 2024, 65000.00, 5, 5.8, 6, TRUE, 7.8, 5, TRUE, 'Automática', 375, 1.45, 1.80, 4.40, 8.9, 'Gasolina', 'Dianteira', 240, FALSE, TRUE, TRUE, TRUE, TRUE, TRUE),
('Sedan', 'Toyota', 'Corolla', '1.8L 4-Cilindros', 138, 5, 6.0, 2024, 72000.00, 5, 5.3, 6, TRUE, 7.0, 5, TRUE, 'Automática', 470, 1.45, 1.78, 4.63, 10.4, 'Gasolina', 'Dianteira', 176, FALSE, TRUE, TRUE, TRUE, TRUE, TRUE);







----------------------------------------------------------------------------
drop table usuario;
drop table favoritos;

CREATE TABLE Usuario (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nome_usuario VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(50) NOT NULL,
    tipo VARCHAR(50) NOT NULL DEFAULT 'normal'
);


CREATE TABLE Favoritos (
    id_favorito INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT,
    id_carro INT,
    FOREIGN KEY (id_usuario) REFERENCES Usuario(id_usuario),
    FOREIGN KEY (id_carro) REFERENCES Carro(id_carro)
);



-- Inserção de dados de exemplo na tabela de usuários
INSERT INTO usuario
  (senha, email, nome_usuario, tipo)
VALUES
  ('admin', 'admin@admin', 'admin', 'admin'),
  ('Ary2005', 'aryfelipe@gmail.com', 'AryFelipe', 'normal'),
  ('IcaroLKBold', 'icarolk@gmail.com', 'Icarolk', 'admin'),
  ('Adriano1603', 'adrianovale@gmail.com', 'Coldplay', 'normal'),
  ('MariFodasse', 'marixsprada@gmail.com', 'MariXsprada', 'normal');



-- Consulta de login
SELECT id_usuario, nome_usuario
FROM usuario
WHERE email = 'aryfelipe@gmail.com'
  AND senha = 'Ary2005';
  
  

select * from carro;
  
  USE autochoice;
  SELECT * FROM usuario;
  SELECT * FROM favoritos;