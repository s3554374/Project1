<!-- start of footer -->
<!-- test version 0.1 -->
<?php
$db = mysqli_connect("localhost", "root", "", "project1") or die(mysqli_error($db));
$query = "select * from user";
$resultset = mysqli_query($db, $query) or die(mysqli_error($db));
while($row = mysqli_fetch_array($resultset))
{
print "<a href='member.php?username={$row['username']}'>{$row['username']}</a>\n";
}
?>

<footer>
  <p>&copy; 2020 Team name</p>
</footer>
</body>
</html>
