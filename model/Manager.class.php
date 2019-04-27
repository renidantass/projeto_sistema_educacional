<?php

include 'Connection.class.php';


class Manager extends Connection {
    public function addCourse ($data) {
        $connection = parent::instance();
        $keys = implode(', ', array_keys($data));
        $values = ':'.implode(', :', array_keys($data));
        $statement = $connection->prepare("INSERT INTO cursos ($keys) VALUES($values)");
        foreach ($data as $key => $value) {
            $statement->bindValue(":$key", $value);
        }
        $result = $statement->execute();
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getRecentCourses() {
        $connection = parent::instance();
        $statement = $connection->prepare("SELECT * FROM cursos ORDER BY id_curso DESC LIMIT 4");
        $statement->execute();
        return $statement->fetchAll();
    }

    public function addTeacher ($data) {
        $connection = parent::instance();
        $keys = implode(', ', array_keys($data));
        $values = ':'.implode(', :', array_keys($data));
        $statement = $connection->prepare("INSERT INTO professores ($keys) VALUES($values)");
        foreach ($data as $key => $value) {
            $statement->bindValue(":$key", $value);
        }
        $result = $statement->execute();
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function addStudent ($data) {
        $connection = self::instance();
        $keys = implode(', ', array_keys($data));
        $values = ':'.implode(', :', array_keys($data));
        $statement = $connection->prepare("INSERT INTO alunos ($keys) VALUES($values)");
        foreach ($data as $key => $value) {
            $statement->bindValue(":$key", $value);
        }
        $result = $statement->execute();
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function loginTeacher ($data) {
        $connection = self::instance();
        $email = $data['email'];
        $statement = $connection->prepare("SELECT * FROM professores WHERE email = :email");
        $statement->bindValue(':email', $email);
        $statement->execute();
        return $statement->fetch();
    }

    public function getCourseDetails($id) {
        $connection = self::instance();
        $statement = $connection->prepare("SELECT * FROM cursos c INNER JOIN professores p ON c.id_professor=p.id_professor WHERE id_curso = :id ");
        $statement->bindValue(":id", $id);
        $statement->execute();
        return $statement->fetch();
    }
}