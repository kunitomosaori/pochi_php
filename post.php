<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 50%;
            margin: auto;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }

        td {
            width: 50%;
        }

        .center {
            text-align: center;
        }
        .nested-table {
            width: 100%;
            border: none;
        }
        .nested-table td {
            padding: 8px 0;
            border: none;
        }
    </style>
</head>

<body>
    <form action="read.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>名前</td>
                <td><input type="text" name="name" style="width: 100%;"></td>
            </tr>
            <tr>
                <td>生年月日</td>
                <td><input type="date" name="date" style="width: 100%;"></td>
            </tr>
            <tr>
                <td>性別</td>
                <td><input type="text" name="sex" style="width: 100%;"></td>
            </tr>
            <tr>
                <td>犬種</td>
                <td><input type="text" name="breed" style="width: 100%;"></td>
            </tr>
            <tr>
                <td>不妊・去勢</td>
                <td><input type="text" name="surgery" style="width: 100%;"></td>
            </tr>
            <tr>
                <td>マイクロチップ登録番号</td>
                <td><input type="number" maxlength="15" name="chip" style="width: 100%;"></td>
            </tr>
            <tr>
            <td>愛犬登録</td>
                <td>
                    <table class="nested-table">
                        <tr>
                            <td>登録年月日</td>
                            <td><input type="date" name="record_date" style="width: 100%;"></td>
                        </tr>
                        <tr>
                            <td>登録場所</td>
                            <td><input type="text" name="record_place" style="width: 100%;"></td>
                        </tr>
                        <tr>
                            <td>登録番号№</td>
                            <td><input type="number" name="record_number" style="width: 100%;"></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>画像</td>
                <td><input type="file" name="upimg" accept="image/*" style="width: 100%;"></td>
            </tr>
            <tr>
                <td colspan="2" class="center"><input type="submit" id="submit" value="送信"></td>
            </tr>
        </table>
    </form>
    
</body>

</html>