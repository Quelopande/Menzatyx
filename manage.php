<?php
session_start();
$user = $_SESSION['user'];

$errors = '';

require 'connection.php';

$statement = $connection->prepare('SELECT * FROM users WHERE user = :user LIMIT 1');
$statement->execute(array(':user' => $user));
$result = $statement->fetch();

$jsonString = file_get_contents('content.json');

$data = json_decode($jsonString, true);
$desiredUserId = $result['id'];

$articles = [];
foreach ($data['users'] as $jsonUser) {
    if ($jsonUser['id'] == $desiredUserId) {
        $articles = $jsonUser['articles'];
        break;
    }
}

$html = '';
foreach ($articles as $article) {
    $articleId = isset($article['articleId']) ? $article['articleId'] : 0;
    $articleName = isset($article['articleName']) ? $article['articleName'] : 'Sin nombre';
    $date = isset($article['date']) ? $article['date'] : '0000-00-00';
    $formattedDate = date('d/m/Y', strtotime($date));
    $tags = isset($article['tags']) ? $article['tags'] : [];
    $sections = isset($article['sections']) ? $article['sections'] : [];
    $html .= '<br>';
    $html .= '<div class="content">';
    $html .= '<span> Date: ' . $formattedDate . '</span>';
    $html .= '<form id="deleteForm' . $article['articleId'] . '" action="manage.php" method="POST">';
    $html .= '<input type="hidden" name="action" value="delete">';
    $html .= '<input type="hidden" name="articleId" value="' . $article['articleId'] . '">';
    $html .= '<button type="button" class="myBtn" action="event.preventDefault()"><i class="fa-solid fa-trash"></i> Delete</button>';
    $html .= '		<div id="myModal" class="emodal">
					<div class="emodal-content">
						<p>Are you sure that you want to delete this article. You won´t be able to get it back.</p>
						<a class="eclose last">Back</a>
						<button class="last esubmit" type="submit">Delete article</button>
					</div>
				</div>';
    $html .= '</form>';
    $html .= '<button style="margin-right: 90px;" class="edit-button" data-toggle="modal" data-target="#editModal' . $articleId . '"><i class="fa-solid fa-pen"></i> Edit</button>';
    $html .= '<h2>' . htmlspecialchars($articleName) . '</h2>';
    $html .= '<p>' . implode(', ', array_map('htmlspecialchars', $tags)) . '</p>';
    $html .= '</div>';
    
    $html .= '
    <input type="hidden" name="action" value="delete">
    <input type="hidden" name="articleId" value="1">
    <div class="modal fade" id="editModal' . $articleId . '" tabindex="-1" role="dialog" aria-labelledby="editModalLabel' . $articleId . '" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editModalLabel' . $articleId . '">' . htmlspecialchars($articleName) . '</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form id="editForm' . $articleId . '">
            <div class="modal-body">
              <p>Date: ' . $formattedDate . '</p>
              <label for="tags">Tags:</label>
              <input type="text" id="tags' . $articleId . '" name="tags" value="' . implode(', ', array_map('htmlspecialchars', $tags)) . '">';
    
    foreach ($sections as $index => $section) {
        $sectionTitle = isset($section['title']) ? $section['title'] : 'Sin título';
        $sectionDescription = isset($section['description']) ? $section['description'] : 'Sin descripción';
        $html .= '
              <div class="section">
                <label for="title' . $articleId . '_' . $index . '">Title:</label>
                <input type="text" id="title' . $articleId . '_' . $index . '" name="sections[' . $index . '][title]" value="' . htmlspecialchars($sectionTitle) . '">
                <br>
                <label for="description' . $articleId . '_' . $index . '">Section:</label>
                <input type="text" id="description' . $articleId . '_' . $index . '" name="sections[' . $index . '][description]" value="' . htmlspecialchars($sectionDescription) . '">
              </div>';
    }
    
    $html .= '
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </form>
        </div>
      </div>
    </div>';    
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'delete') {
  $articleIdToDelete = $_POST['articleId'];

  $jsonString = file_get_contents('content.json');
  $jsonData = json_decode($jsonString, true);

  $articleFound = false;
  foreach ($jsonData['users'] as &$jsonUser) {
      foreach ($jsonUser['articles'] as $index => $article) {
          if ($article['articleId'] == $articleIdToDelete) {
              array_splice($jsonUser['articles'], $index, 1);
              $articleFound = true;
              break 2; 
          }
      }
  }

  if ($articleFound) {
      $updatedJsonString = json_encode($jsonData, JSON_PRETTY_PRINT);
      file_put_contents('content.json', $updatedJsonString);

      $_SESSION['message'] = "The article was deleted correctly.";
      header('Location: manage.php');
      exit;
  } else {
      $_SESSION['message'] = "Article not found.";
      header('Location: manage.php');
      exit;
  }
}

if ($result['status'] == 'verified') {
  require 'views/manage.view.php';
} elseif ($result['status'] == 'notverified') {
  require 'views/nv.view.php';
} elseif (!isset($_SESSION['user'])) {
  header('Location: login.php');
} else {
  require 'ban.php';
}
?>