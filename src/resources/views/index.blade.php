<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/sanitize.css')}}">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__title" href="/">Cantact Form</a>
        </div>
    </header>


    <main class="main">
        <form class="form" action="/contacts/confirm" method="post">
            @csrf
            <div class="main__inner">
                <div class="main__title">
                    <h2 class="main__about">お問い合わせ</h2>
                </div>
                <div class="main__list">
                    <table class="main__table">
                        <tr class="main__table-tad">
                            <th class="main__table-category">お名前<span>必須</span></th>
                            <td class="main__table-text">
                                <input type="text" name="name" placeholder="テスト太郎" value="{{old('name')}}">
                            </td>
                        </tr>
                        <div class="form__error">
                        @error('name')
                        {{$message}}
                        @enderror
                        </div>
                        <tr class="main__table-tad">
                            <th class="main__table-category">メールアドレス<span>必須</span></th>
                            <td class="main__table-text">
                                <input type="email" name="email" placeholder="test@example.com" value="{{old('email')}}">
                            </td>
                        </tr>
                        @error('email')
                        {{$message}}
                        @enderror
                        <tr class="main__table-tad">
                            <th class="main__table-category">電話番号<span>必須</span></th>
                            <td class="main__table-text">
                                <input type="tel" name="tel" placeholder="09012345678" value="{{old('tel')}}">
                            </td>
                        </tr>
                        @error('tel')
                        {{$message}}
                        @enderror
                        <tr class="main__table-tad">
                            <th class="main__table-category">お問い合わせ内容</th>
                            <td class="main__table-text">
                                <textarea  name="content" cols="30" rows="5" placeholder="資料を頂きたいです"></textarea>
                                    
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="button">
                    <button>送信</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>