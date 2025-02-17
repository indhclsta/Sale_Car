<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display:flex;
            justify-content:center;
            color:white;
            font-family:verdana;
        }
        form{
            width: 500px;
            height:500px;
            background:grey;
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
            border:2px solid skyblue;
            box-shadow:15px 10px 15px rgba(0,0,0,0.5);
        }
        input{
            border-radius:5px;
        }
    </style>
</head>
<body>
    
    <form method="post" action="{{route('submit2')}}" enctype="multipart/form-data">
        @csrf
        <h1 style="margin-bottom:100px;">Form create tipe mobil</h1>
        <table>
            <tr>
                <td>Img </td>
                <td>:</td>
                <td><input name="image" type="file"></td>
            </tr>
            <tr>
                <td>Nama </td>
                <td>:</td>
                <td><input name="nama" typw="text"></td>
            </tr>
            <tr>
                <td>deskripsi </td>
                <td>:</td>
                <td><input name="deskripsi" type="text"></td>
            </tr>
        </table>
        <button name="submit" type="submit">submit</button>
    </form>

</body>
</html>