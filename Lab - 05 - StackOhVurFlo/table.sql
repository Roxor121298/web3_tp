CREATE TABLE stack_answers (
	id serial PRIMARY KEY,
	author VARCHAR(40) NOT NULL,
	answer VARCHAR(2000) NOT NULL
);


INSERT INTO stack_answers (id,author,answer) {
	VALUES
	(1,'John W', 'JavaScript est de la bouette, passe donc à C#. Il a été prouvé que lutilisation de JavaScript augmente la dépendance à la programmation Web!' ),
	(2, 'Mario B', 'Est-ce que JavaScript est installé sur ton ordinateur? Moi, jai la JVM 1.8.');
}


