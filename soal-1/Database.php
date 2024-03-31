<?php
class Database
{

  private $conn = null;

  public function __construct($host = 'localhost', $dbname = 'test_dataon', $username = 'root', $password = '')
  {
    try {
      $this->conn = new mysqli($host, $username, $password, $dbname);
      if (mysqli_connect_errno()) {
        throw new Exception("Could not connect to database.");
      }
    } catch (Exception $e) {
      throw new Exception($e->getMessage());
    }
  }

  public function insert($query = "", $params = [])
  {
    try {
      $stmt = $this->executeStatement($query, $params);
      $stmt->close();
      return $this->conn->insert_id;
    } catch (Exception $e) {
      throw new Exception($e->getMessage());
    }
    return false;
  }

  public function select($query = "", $params = [])
  {
    try {
      $stmt = $this->executeStatement($query, $params);
      $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
      $stmt->close();
      return $result;
    } catch (Exception $e) {
      throw new Exception($e->getMessage());
    }
    return false;
  }

  public function update($query = "", $params = [])
  {
    try {
      $this->executeStatement($query, $params)->close();
    } catch (Exception $e) {
      throw new Exception($e->getMessage());
    }
    return false;
  }

  public function destroy($query = "", $params = [])
  {
    try {
      $this->executeStatement($query, $params)->close();
    } catch (Exception $e) {
      throw new Exception($e->getMessage());
    }
    return false;
  }

  private function executeStatement($query = "", $params = [])
  {
    try {
      $stmt = $this->conn->prepare($query);
      if ($stmt === false) {
        throw new Exception("Unable to do prepared statement: " . $query);
      }
      if ($params) {
        call_user_func_array(array($stmt, 'bind_param'), $params);
      }
      $stmt->execute();
      return $stmt;
    } catch (Exception $e) {
      throw new Exception($e->getMessage());
    }
  }
}
