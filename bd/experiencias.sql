CREATE TABLE Textos_Experiencias (
    texto_id INT PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(255),
    conteudo TEXT
);

CREATE TABLE Fotos_Experiencias (
    foto_id INT PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(255),
    caminho_arquivo VARCHAR(255)
);