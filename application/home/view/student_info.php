<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2 align='center'>学生信息表</h2>
<table align='center' border='1' cellspacing='0' cellpadding='5' width='60%'>
    <tr align='center' bgcolor='#87ceeb'>
        <th>字段</th>
        <th>值</th>
        </th>
    </tr>
    <tr align='center'>
        <td>id</td>
        <td><?php echo $data['id']; ?></td>
    </tr>
    <tr align='center'>
        <td>姓名</td>
        <td><?php echo $data['name']; ?></td>
    </tr>
    <tr align='center'>
        <td>邮箱</td>
        <td><?php echo $data['email']; ?></td>
    </tr>
    <tr align='center'>
        <td>课程</td>
        <td><?php echo $data['course']; ?></td>
    </tr>
    <tr align='center'>
        <td>成绩</td>
        <td <?php
        if ($data['grade'] < 60) {
            echo 'style="color: red"';
        }
        ?>><?php echo $data['grade']; ?></td>
    </tr>
</table>
<p align="center"
    <?php
    if ($data['grade'] < 60) {
        echo 'style="color: red"';
    }
    ?>
>
    <?php
    if ($data['grade'] < 60) {
        echo '没及格，需要补考~';
    } else {
        echo '恭喜你，毕业了~';
    }
    ?>
</p>
</body>
</html>