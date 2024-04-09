
CREATE DATABASE autochoice;

USE autochoice

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    senha VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    nome_usuario VARCHAR(100) NOT NULL
);

-- Inserção de dados de exemplo na tabela de usuários
INSERT INTO usuarios
  (senha, email, nome_usuario)
VALUES
  ('Ary2005', 'aryfelipe@gmail.com', 'AryFelipe'),
  ('IcaroLKBold', 'icarolk@gmail.com', 'Icarolk'),
  ('Adriano1603', 'adrianovale@gmail.com', 'Coldplay'),
  ('MariFodasse', 'marixsprada@gmail.com', 'MariXsprada');

-- Consulta de login
SELECT id, nome_usuario
FROM usuarios
WHERE email = 'email_fornecido_pelo_usuario'
  AND senha = 'senha_fornecida_pelo_usuario';
