<?php


class Mariadb
{
    private string $host = "127.0.0.1:3306";
    private string $name = "12fjkp";
    private string $user = "root";
    private string $password = "";
    private $pdo;



    public function testDatabase(): string
    {
        try {
            // set the PDO error mode to exception
            $this->pdo()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        } catch(PDOException $e) {
           $stmt = "Connection failed: " . $e->getMessage();
        }
        if (isset($stmt)){
            return $stmt;
        }else{
            return "ist nicht da";
        }
    }

    public function generateAdmin(string $username, $password, $rank) :string
    {
        $res = $this->pdo()->prepare("INSERT INTO admin_user(username, password, rank) VALUES (:user, :pass, :rank)");
        $res->bindValue("user", $username);
        $res->bindValue("pass", $password);
        $res->bindValue("rank", $rank);
        $res->execute();
         return "<h3>Der neue Nutzer ".$username." wurde hinzugefügt!";
    }

    public function generateMember(string $username, int $post, int $position, int $rank, int $special_post, string $url, string $steamId) :string
    {
        $res = $this->pdo()->prepare("INSERT INTO member(username, post, position, user_rank, special_post, url, steam_id) VALUES (:user, :post, :position,:rank, :spec_post, :url, :steam)");
        $res->bindValue("user", $username);
        $res->bindValue("post", $post);
        $res->bindValue("position", $position);
        $res->bindValue("rank", $rank);
        $res->bindValue("spec_post", $special_post);
        $res->bindValue("url", $url);
        $res->bindValue("steam", $steamId);
        $res->execute();
        return "<h3>Der neue Nutzer ".$username." wurde hinzugefügt!";
    }


    /**
     * @return listAdminUser[]
     */

    public function listAdminUser(): array
    {
        $res = $this->pdo()->query("SELECT * FROM admin_user ORDER BY id DESC");
        $results = [];
        while ($row = $res->fetch()) {
            $results[] = new listAdminUser($row["rank"], $row["username"], $row["id"]);
        }
        return $results;
    }

    public function listMember():array
    {
        $res = $this->pdo()->query("SELECT * FROM member");
        $results = [];
        while ($row = $res->fetch()) {
            $results[] = new listMemberUser($row["id"], $row["username"], $row["post"], $row["position"], $row["user_rank"], $row["special_post"], $row["url"], $row["steam_id"]);
        }
        return $results;
    }

    function pdo()
    {

        $host = $this->host;
        $name = $this->name;
        $password = $this->password;
        $user = $this->user;


        if (!$this->pdo) {
            $this->pdo = new PDO("mysql:host=$host;dbname=$name", $this->user, $this->password);
        }
        return $this->pdo;
    }

    public function findUserByName(string $username, string $password): ?User
    {
        $stmt = $this->pdo()->prepare("SELECT * FROM admin_user WHERE username =:usr AND password =:pwd");
        $stmt->bindParam(":usr", $username, PDO::PARAM_STR);
        $stmt->bindParam(":pwd", $password, PDO::PARAM_STR);
        $stmt->execute();
        $row = $stmt->fetch();
        if ($row) {
            return new User($row["username"], $row["id"], $row["rank"]);
        }
        return null;
    }

    public function findUser(int $id): ?User
    {
        $stmt = $this->pdo()->prepare("SELECT * FROM admin_user WHERE id = :value");
        $stmt->bindParam(":value", $id, PDO::PARAM_INT);
        $stmt->execute();
        $row = $stmt->fetch();
        if ($row) {
            return new User($row["username"], $row["id"], $row["rank"]);
        }
        return null;
    }

    public function deleteMember(int $id)
    {
        $this->pdo()->query("DELETE FROM member WHERE id = ".$id);
    }
    public function changeRank(int $id, int $rank)
    {
        $this->pdo()->query("UPDATE member SET user_rank = ".$rank." WHERE id = ".$id);
    }
    public function changeUrl(int $id, string $url): void
    {
        $this->pdo()->query("UPDATE member SET url = '$url' WHERE id = ".$id);
    }
    public function changeUsername(int $id, string $name):void
    {
        $this->pdo()->query("UPDATE member SET username = '$name' WHERE id = ".$id);
    }
    public function changePost(int $id, int $post):void
    {
        $this->pdo()->query("UPDATE member SET post = ".$post." WHERE id = ".$id);
    }
    public function changePosition(int $id, int $position):void
    {
        $this->pdo()->query("UPDATE member SET position = ".$position." WHERE id = ".$id);
    }
    public function changeSpecialPost(int $id, int $special_post):void
    {
        $this->pdo()->query("UPDATE member SET special_post = ".$special_post." WHERE id = ".$id);
    }


    public function changeAdminUsername(int $id, string $name): void
    {
        $this->pdo()->query("UPDATE admin_user SET username = '$name' WHERE id = ".$id);
    }
    public function changeAdminRank(int $id, int $rank): void
    {
        $this->pdo()->query("UPDATE admin_user SET `rank` = ".$rank." WHERE id = ".$id);
    }
    public function deleteAdmin(int $id): void
    {
        $this->pdo()->query("DELETE FROM admin_user WHERE id = ".$id);
    }






    function createQuestion(ForumQuestion $forumQuestion)
    {
        $res = $this->pdo()->prepare("INSERT INTO forum_quest(quest, sort, head, userID) VALUES (:quest, :sort, :head, :usr)");
        $res->bindValue("quest", $forumQuestion->getQuestion());
        $res->bindValue("usr", $forumQuestion->getUserId());
        $res->bindValue("sort",$forumQuestion->getCategory());
        $res->bindValue("head",$forumQuestion->getSubject());
        $res->execute();
    }

    function createAnswer(ForumAnswer $forumAnswer)
    {
        $res = $this->pdo()->prepare("INSERT INTO forum_reply(answer, userId, questionId) VALUES (:answ, :usr, :questId)");
        $res->bindValue("answ", $forumAnswer->getAnswer());
        $res->bindValue("usr", $forumAnswer->getUserId());
        $res->bindValue("questId",$forumAnswer->getQuestionId());
        $res->execute();
    }

    /**
     * @return ForumAnswer[]
     */
    function listAnswers(int $questionId)
    {
        $res = $this->pdo()->query("SELECT * FROM forum_reply WHERE questionId = ".$questionId." ORDER BY ID DESC");
        $resultsAnswer = [];
        while ($row = $res->fetch()) {
            $resultsAnswer[] = new ForumAnswer($row["ID"], $row["answer"], $row["userId"], $row["questionId"]);

        }
        return $resultsAnswer;
    }



    function deleteQuestion(int $id)
    {
        $this->pdo()->query("DELETE FROM forum_quest WHERE ID = ".$id);
        $this->pdo()->query("DELETE FROM forum_reply WHERE questionId = ".$id);
    }

    function findQuestion(int $id):?ForumQuestion
    {
        $res = $this->pdo()->query("SELECT * FROM forum_quest WHERE ID = ".$id);
        if ($row = $res->fetch()) {
            return new ForumQuestion($row["quest"], $row["userID"], $row["sort"], $row["head"], $row["ID"]);
        } else {
            return null;
        }

    }

    function listUser(): array
    {
        $res = $this->pdo()->query("SELECT * FROM `user`");
        $resultsUser = [];
        while ($row = $res->fetch()) {
            $resultsUser[] = new User($row["username"], $row["ID"], $row["rank"]);
        }
        return $resultsUser;
    }
    function deleteUser(int $id)
    {
        $this->pdo()->query("DELETE FROM `user` WHERE ID = ".$id);
    }
}