<?php
require_once 'action/DAO/AnswerDAO.php';

// Database connection
$pdo = new PDO('mysql:host=localhost;dbname=stack_overflow', 'root', '');

// Path to the JSON file
$filePath = 'data/data.json';
$answerDAO = new AnswerDAO($pdo, $filePath);

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $author = $_POST['author'];
    $answer = $_POST['answer'];
    $answerDAO->addAnswer($author, $answer);
}

// Get all answers
$answers = $answerDAO->getAnswers();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Javascript | StackOhVurFlo</title>
    <link href="css/global.css" rel="stylesheet" />
    <script src="https://notes-de-cours.com/dev/toggle-lab-info.js"></script>
    <script src="js/javascript.js"></script>
</head>
<body>
    <header>
        StackOhVurFlo, là où on répond à toutes vos questions!
    </header>
    <main class="container">
        <div class="pub2"></div>
        <div class="question">
            <h1>Pourquoi mon code JavaScript ne fonctionne-t'il pas?</h1>
            <div class="question-text">
                <p>
                    Je ne comprends pas... j'ai tout essayé et mon code JavaScript ne fonctionne simplement pas... j'ai joujours des erreurs...
                </p>
<!-- <pre>
document.getElementById("elem").onclick = test(event);

function test(e) {
    this.style.display = "none";
}
</pre> -->
                <p>
                    Est-ce que quelqu'un pourrait m'aider?
                </p>
                <p>
                    par : Fédérik Tério
                </p>
            </div>
            <div class="cols">
                <div class="left">
                    <h2>Réponses</h2>

                    <?php foreach ($answers as $answer): ?>
                        <div class="answer">
                            <div class="text">
                                <?= htmlspecialchars($answer['answer']) ?>
                            </div>
                            <div class="author">
                                Par : <?= htmlspecialchars($answer['author']) ?>
                            </div>
                        </div>
                    <?php endforeach; ?>

                    <div class="answer">
                        <strong>Vous avez la réponse? Aidez-le !</strong>
                        <form method="post">
                            <div class="text">
                                <textarea name="answer" required placeholder="Votre réponse"></textarea>
                            </div>
                            <div class="author">
                                <input type="text" name="author" required placeholder="Votre nom">
                            </div>
                            <div class="send-btn">
                                <button type="submit">Envoyer</button>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="right">
                    <div class="pub"></div>
                    <h3>Autres questions</h3>
                    <ul>
                        <li>
                            <a href="javascript:void(0)">
                                Est-ce que jQuery fonctionne avec PHP?
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                Du PHP dans une JS ne fonctionne pas, pourquoi?
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                Pourquoi mon petit frère ne comprend pas mes blagues?
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                Je veux inventer une intelligence artificielle, mais je n'y arrive pas... aide s.v.p.!
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div>
            <h3>Stack Overflow</h3>
            <ol>
                <li>
                    Ajouter le framework de classes PHP (IndexAction, CommonAction, etc.)
                </li>
                <li>
                    Sur votre base de données (PostgreSQL, MySQL ou Oracle), créer une table « stack_answers », permettant de conserver les réponses des utilisateurs (voir le fichier table.sql pour la version pgsql). 
                </li>
                <li>
                    Dans un DAO (AnswerDAO), ajouter les méthodes : <code>getAnswers()</code> et <code>addAnswer(author, answer)</code>.
                </li>
                <li>
                    Terminer le formulaire, puis faire en sorte qu'une réponse est ajoutée dans la table lorsque le formulaire est envoyé.
                </li>
                <li>
                    Appelez la méthode AnswerDAO::getAnswers() afin de lire les réponses, puis les afficher dans la page Web via une boucle <code>foreach</code>. Retirer les réponses existantes, mais utiliser la structure (div et et etc.) afin de conserver les styles CSS.
                </li>
            </ol>
        </div>
    </footer>
</body>
</html>