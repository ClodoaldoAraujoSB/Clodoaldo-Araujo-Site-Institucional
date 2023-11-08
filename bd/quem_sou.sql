CREATE TABLE Textos_QuemSou (
    texto_id INT PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(255),
    conteudo TEXT
);

CREATE TABLE Videos_QuemSou (
    video_id INT PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(255),
    url_video VARCHAR(255)
);

CREATE TABLE Fotos_QuemSou (
    foto_id INT PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(255),
    caminho_arquivo VARCHAR(255)
);