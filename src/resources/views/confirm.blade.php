<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/sanitize.css')}}">
    <link rel="stylesheet" href="{{asset('css/confirm.css')}}">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__title" href="/">Contact Form</a>
        </div>
    </header>

    <main class="main">
        <form class="form" action="/contacts" method="post">
            @csrf
        <div class="main__title">
            <div class="main__about">
                <h2 class="main__about-ttl">お問い合わせ内容確認</h2>
            </div>
            <table class="main__table">
                <tr class="main__list">
                    <th class="main__list-category">お名前</th>
                    <td class="main__list-text">
                        <input type="text" name="name" value="{{ $contact['name']}}" readonly />
                    </td>
                </tr>
                <tr class="main__list">
                    <th class="main__list-category">メールアドレス</th>
                    <td class="main__list-text">
                        <input type="email" name="email" value="{{$contact['email']}}" readonly />
                    </td>
                </tr>
                <tr class="main__list">
                    <th class="main__list-category">電話番号</th>
                    <td class="main__list-text">
                        <input type="tel" name="tel" value="{{$contact['tel']}}" readonly />
                    </td>
                </tr>
                <tr class="main__list">
                    <th class="main__list-category">お問い合わせ内容</th>
                    <td class="main__list-text">
                        <input type="text" name="content" value="{{$contact['content']}}" readonly />
                    </td>
                </tr>
            </table>
            <div class="button">
                <button>送信</button>
            </div>
        </div>
        </form>
    </main>
</body>
</html>