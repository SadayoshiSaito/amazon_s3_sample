<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>MessageBoard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    </head>
    <body>
        <!-- エラー処理 -->
        @if (count($errors) > 0)
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif

        <h1>Amazon S3へ画像アップロードするサンプル</h1>
        <br>
        <!-- 登録フォーム -->
        <div>
            <form action="{{ url('') }}" method="POST" enctype="multipart/form-data">
                <div>
                    <input type="file" name="image_01" >
                </div>
                <br>
                {{ csrf_field() }}
                <div>
                    <button type="submit" class="btn btn-success"> アップロード </button>
                </div>
            </form>
        </div>

        @if ($imageUrl <> "")
            <div>
                <img src="{{ $imageUrl }}" vspace="10"> 
            </div>
        @else
            <p>画像はありません。</p>
        @endif

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
    </body>
</html>