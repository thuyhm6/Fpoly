<?php 
    namespace model;
    use PDO;
    class Book {
        public $conn;
        public function __construct()
        {

            $this->conn = new PDO("mysql:host=".db_host.";dbname=".db_name."", db_user, db_pass);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }

        public function index() {
            $sql = "select * from books";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }

        public function delete($id) {
            $sql = "delete from books where id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$id]);
        }

        public function create() {
            $sql = "insert into books (title, cover_image, author, publisher, publish_date) values (?, ?, ?, ?, ?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$_POST['title'], $_POST['cover_image'], $_POST['author'], $_POST['publisher'], $_POST['publish_date']]);
        }

        public function edit() {
            //debug($_POST);
            if (isset($_POST['cover_image'])) {
                $sql = "update books set title = ?, cover_image = ?, author = ?, publisher = ?, publish_date = ? where id = ?";
                $stmt = $this->conn->prepare($sql);
                $stmt->execute([$_POST['title'], $_POST['cover_image'], $_POST['author'], $_POST['publisher'], $_POST['publish_date'], $_GET['id']]);
            } else {
                $sql = "update books set title = ?, author = ?, publisher = ?, publish_date = ? where id = ?";
                $stmt = $this->conn->prepare($sql);
                $stmt->execute([$_POST['title'], $_POST['author'], $_POST['publisher'], $_POST['publish_date'], $_GET['id']]);
            }
            
        }

        public function find($id) {
            $sql = "select * from books where id = $id";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetch();
        }
    }
?>