<?php
$people_obj = json_decode(file_get_contents("https://raw.githubusercontent.com/arc6828/SCS211/main/week13/staff.json"), true);
$people = $people_obj["people"];
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="text-center">
        <p class="fs-1">ชื่อบุคคล</p>
        <p class="fs-3">รายละเอียดพนักงาน</p>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <?php foreach ($people as $row) { ?>
                <div class="col-6">
                    <div class="card mb-3">
                        <img src="<?= $row["image"] ?>" style="width:100%">
                        <div class="card-body">
                            <h5 class="card-title"><?= $row["name"] ?></h5>
                            <p class="card-text"><?= $row["role"] ?></p>
                            <p class="card-text"><?= $row["education"] ?></p>
                            <p class="card-text"><?= $row["email"] ?></p>
                            <p class="card-text"><?= $row["phone"] ?></p>
                            <button type="button" class="btn btn-danger">ติดต่อ</button>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

</body>

</html>