<div id="NavPane" class="col-3 panes">
  <div class="">
    <p class="textStyle">User information</p>
    <ul>
      <?php
      session_start();
      include 'php/db_connect.php';
      if (isset($_SESSION['user_id'])) {
        $id = $_SESSION['user_id'];
        $sql = "SELECT username, role, user_contact_info, profile_url FROM `traceability`.`user` WHERE user_id = $id;";

        $stmt = $pdo->prepare($sql);

        $stmt->execute();

        $results = [];
        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
           $results = [
            'name' => $row['username'],
            'role' => $row['role'],
            'info' => $row['user_contact_info'],
            'url' => $row['profile_url']
          ];
        }

        echo '
          <li class="text-left textStyle">'.$results['name'].'</li>
          <li class="text-left textStyle">'.$results['role'].'</li>
          <li class="text-left textStyle">'.$results['info'].'</li>
          <li class="text-left textStyle">'.$results['url'].'</li>
        ';
      }
      ?>

    </ul>
  </div>


  <ul class="list-group">
    <li class="list-group-item">
      <a href="dashboard.php">Home</a>
    </li>
    <li class="list-group-item">
      <a href="connections.php">Connections</a>
    </li>
    <li class="list-group-item">
      <a href="products.php">Products</a>
    </li>
  </ul>
</div>
