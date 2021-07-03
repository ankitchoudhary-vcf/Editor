
<?php

if(isset($_POST['submit'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'testing');
    $content = $_POST['editor'];
    $sql = "INSERT INTO `content`(`content`) VALUES('$content')";
    if(mysqli_query($conn, $sql)) {
    echo "Data Inserted";
    }
    else{
    echo "Please Try Again";
    }
}

?>

<script src="ckeditor/ckeditor.js" ></script>
<script src="ckfinder/ckfinder.js" ></script>


<form method="post">
    <textarea id="editor" name="editor"></textarea>
    <input type="submit" value="submit" name="submit">
</form>

<script>
    var editor = CKEDITOR.replace('editor');
    CKFinder.setupCKEditor(editor);
</script>