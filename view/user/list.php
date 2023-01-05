<h3>List of Users</h3>

<ul>
  
  <?php foreach ($users as $user): ?>
    
    <li>
      <a href="index.php?c=user&action=details&id=<?= $user['id']; ?>">
        <?= $user['name']; ?>
      </a>
      (<?= $user['email']; ?>)
    </li>

  <?php endforeach; ?>

</ul>