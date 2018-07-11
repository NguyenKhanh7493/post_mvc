<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm bài viết</title>
</head>
<body>
<form action="?action=addSuccess" method="post" name="frm_add">
    <label for="">title</label><br/><input type="text" name="txttitle" size="30"> <br/>
    <hr>
    <label for="">introduction</label><br/><input type="text" name="txtintroduction" size="30"><br/>
    <hr>
    <label for="">content</label><br/><textarea name="content" cols="50" rows="10"></textarea><br/>
    <hr>
    <label for="">thumbnail</label><br/><input type="text" name="txtthumbnail" size="30"><br/>
    <hr>
    <label for="">tag</label><br/><input type="text" name="txttag" size="30"><br/>
    <hr>
    <input type="submit" name="btnok" value="add">
</form>
</body>
</html>