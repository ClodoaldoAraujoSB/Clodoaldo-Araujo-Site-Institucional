CREATE TABLE Textos_Index (
    texto_id INT PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(255),
    conteudo TEXT
);

CREATE TABLE Videos_Index (
    video_id INT PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(255),
    url_video VARCHAR(255)
);

CREATE TABLE Fotos_Index (
    foto_id INT PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(255),
    caminho_arquivo VARCHAR(255)
);
