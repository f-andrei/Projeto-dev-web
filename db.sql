CREATE TABLE contato(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    sobrenome VARCHAR(255) NOT NULL,
    telefone VARCHAR(255) NOT NULL,
    tipo VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    empresa VARCHAR(255) NOT NULL
    );

CREATE TABLE email(
    id INT AUTO_INCREMENT PRIMARY KEY,
    assunto VARCHAR(255) NOT NULL,
    conteudo TEXT NOT NULL,
    remetente_contato_id INT,
    destinatario_contato_id INT,
    FOREIGN KEY (remetente_contato_id) REFERENCES contato(id),
    FOREIGN KEY (destinatario_contato_id) REFERENCES contato(id)
);


CREATE TABLE anotacao(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    conteudo TEXT NOT NULL,
    links_uteis TEXT NOT NULL
);
