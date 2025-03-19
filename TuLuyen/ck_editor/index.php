<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.ckeditor.com/ckeditor5/35.3.0/classic/ckeditor.js"></script>
</head>
<body>
    <form action="">
        <table>
            <tr>
                <th>Noi dung</th>
                <td>
                    <textarea name="noidung" id="content" rows="90" cols="90"></textarea>
                </td>
            </tr>
            
        </table>
    </form>
    <script>
        ClassicEditor
            .create(document.querySelector('#content'))
            .then(editor => {
                console.log('Editor đã khởi tạo!', editor);
            })
            .catch(error => {
                console.error('Lỗi CKEditor:', error);
            });
    </script>
</body>
</html>