/*Inserção de níveis de usuário*/
INSERT INTO tbNivelUsuarios VALUES (0,'administrador');
INSERT INTO tbNivelUsuarios VALUES (1,'usuario');

/*inserção de um usuário com privilégios de administrador*/
INSERT INTO tbUsuarios VALUES (NULL,'Administrador','admin','admin',
'admin.soundtrack@gmail.com',0,1,now());
/*inserção de um usuário comum*/
INSERT INTO tbUsuarios VALUES (NULL,'Usuario','usuario','usuario',
'usuario.soundtrack@gmail.com',1,1,now());

INSERT INTO tbUsuarios VALUES (NULL,'Teste','teste01','01teste01',
'teste.soundtrack@gmail.com',1,0,now());

INSERT INTO tbUsuarios VALUES (NULL,'Teste2','teste02','teste22222',
'teste2@gmail.com',1,0,now());

/*Inserção de Gêneros de Jogos*/
INSERT INTO tbGeneros VALUES (NULL,'Esportes');
INSERT INTO tbGeneros VALUES (NULL,'Ação/Aventura');

/*Inserção de exemplos de jogos com descrição*/
INSERT INTO tbJogos VALUES (NULL,'Fifa 19','imagens/fifa19.jpg','EA Sports','2018-09-28',1,
'Com tecnologia Frostbite™*, o FIFA 19 oferece a oportunidade de viver a 
competição entre clubes europeus de maior prestígio do mundo, com a chegada da 
lendária UEFA Champions League. Seja alcançando a glória máxima de um clube de futebol 
no modo exclusivo da UEFA Champions League, ou vivendo a conclusão emocionante da 
história de Alex Hunter em A Jornada: Campeões*, a UEFA Champions League faz parte de 
vários modos do FIFA 19. Saiba mais sobre os recursos e modos de jogo da UEFA Champions 
League, UEFA Europa League e UEFA Super Cup.');

INSERT INTO tbJogos VALUES (NULL,'Grand Theft Auto V','imagens/gtav.jpg','Rockstar','2013-10-01',2,
'Grand Theft Auto Online é um jogo eletrônico desenvolvido pela Rockstar North 
e publicado pela Rockstar Games para PlayStation 3 e Xbox 360 em 1 de outubro de 2013 
e para Playstation 4 e Xbox One em 18 de novembro de 2014. É um jogo multijogador 
num mundo aberto e persistente que contempla o modo multijogador do jogo Grand Theft 
Auto V. É baseado no estado fictício de San Andreas e permite que até 30 jogadores 
explorem o mundo para que participem de jogos competitivos ou cooperativos (com amigos).
Em finais de 2012, a Rockstar afirmou que "redefinir o multijogador em mundo aberto 
em algo realmente muito especial" teve um enorme foco na produção de Grand Theft Auto V.
Grand Theft Auto Online foi concebido para ser uma experiência em separado, 
que se materializaria no seu próprio jogo num mundo em constante evolução.
Grand Theft Auto Online permite até trinta jogadores explorar livremente o ambiente 
do jogo do modo de um jogador. Os jogadores podem se ajudar uns aos outros em várias 
atividades, como corridas ou assaltos a bancos. Para muitas dessas actividades, 
os parâmetros podem ser determinados pelos jogadores, como criar a pista para as 
corridas ou criar a zona de armas para os jogos deathmatch.');

/*Inserção de músicas relacionadas com os jogos*/
INSERT INTO tbMusicas VALUES (NULL,'Sway (FIFA 19 Official Soundtrack)','Tove Styrke',
'https://youtu.be/qM9K0TzjMWs',
1);
INSERT INTO tbMusicas VALUES (NULL,'Violet City (FIFA 19 Official Soundtrack)','Mansionair',
'https://youtu.be/qpyRuelgbls',
1);

INSERT INTO tbMusicas VALUES (NULL,'Mona Da Vinci - Original Loading Theme','Tangerine Dream',
'https://youtu.be/EwMjazrwPak',
2);

INSERT INTO tbMusicas VALUES (NULL,'Welcome To Los Santos','Tangerine Dream, Woody Jackson, The Alchemist & DJ Shadow',
'https://youtu.be/wiO09d2H3GQ',
2);