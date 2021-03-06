CREATE DATABASE template_mvc;
USE template_mvc;

CREATE TABLE users (
  id INT NOT NULL AUTO_INCREMENT,
  full_name VARCHAR(255) NOT NULL,
  login VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL,
  forget VARCHAR(255),
  photo VARCHAR(255),
  user_type_id INT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
);

CREATE TABLE user_type (
  id INT NOT NULL AUTO_INCREMENT,
  type VARCHAR(20) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE cpf (
  id INT NOT NULL AUTO_INCREMENT,
  cpf VARCHAR(20) NOT NULL,
  user_id INT NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE cnpj (
  id INT NOT NULL AUTO_INCREMENT,
  cnpj VARCHAR(20) NOT NULL,
  user_id INT NOT NULL,
  PRIMARY KEY (id)
);

ALTER TABLE users ADD CONSTRAINT fk_user_type_id FOREIGN KEY (user_type_id) REFERENCES user_type (id) ON DELETE CASCADE;

ALTER TABLE cpf ADD CONSTRAINT fk_user_id FOREIGN KEY (user_id) REFERENCES users (id) ON DELETE CASCADE;

ALTER TABLE cnpj ADD CONSTRAINT fk_user_id_2 FOREIGN KEY (user_id) REFERENCES users (id) ON DELETE CASCADE;

INSERT INTO user_type (type) VALUES ("Administrador"), ("Marca"), ("Consumidor");
