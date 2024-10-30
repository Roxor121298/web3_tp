<?php
class AnswerDAO {
    private $pdo;
    private $filePath;

    public function __construct($pdo, $filePath) {
        $this->pdo = $pdo;
        $this->filePath = $filePath;
    }

    public function getAnswers() {
        // Get answers from the database
        $stmt = $this->pdo->query("SELECT * FROM stack_answers ORDER BY created_at DESC");
        $dbAnswers = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Get answers from the JSON file
        $jsonData = file_get_contents($this->filePath);
        $fileData = json_decode($jsonData, true);
        $fileAnswers = $fileData['answers'];

        // Merge both sets of answers
        $answers = array_merge($dbAnswers, $fileAnswers);
        return $answers;
    }

    public function addAnswer($author, $answer) {
        // Add answer to the database
        $stmt = $this->pdo->prepare("INSERT INTO stack_answers (author, answer) VALUES (:author, :answer)");
        $stmt->execute(['author' => $author, 'answer' => $answer]);

        // Add answer to the JSON file
        $jsonData = file_get_contents($this->filePath);
        $data = json_decode($jsonData, true);

        $newAnswer = [
            "id" => end($data['answers'])['id'] + 1,
            "author" => $author,
            "answer" => $answer
        ];

        $data['answers'][] = $newAnswer;
        file_put_contents($this->filePath, json_encode($data, JSON_PRETTY_PRINT));
    }
}
?>