<!-- Pro-14 : Write a program to get value from database into dropdown using oop php mysql-->
<?php
class Database
{
    private $host = "localhost";
    private $username = "username"; // Change these to your actual database credentials
    private $password = "";
    private $database = "user";

    private $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getOptions()
    {
        $options = array();

        $sql = "SELECT option_name FROM options";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $options[] = $row['option_name'];
            }
        }

        return $options;
    }

    public function closeConnection()
    {
        $this->conn->close();
    }
}

// Usage:
$db = new Database();
$options = $db->getOptions();
$db->closeConnection();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dropdown Example</title>
</head>
<body>
    <form>
        <select>
            <?php foreach ($options as $option) : ?>
                <option value="<?php echo $option; ?>"><?php echo $option; ?></option>
            <?php endforeach; ?>
        </select>
    </form>
</body>
</html>
