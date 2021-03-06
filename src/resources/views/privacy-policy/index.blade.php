@extends('layouts.app')
@section('title', "プライバシーポリシー：" . config('app.name'))
@section('content')
<div class="container">
    <div class="box">
        @include('shared.top-title')
    </div>
    <div class="box privacy-policy">
        <h1>プライバシーポリシー</h1>

        <h2>個人情報の利用目的</h2>
        <p>お問い合わせの際に取得した個人情報は、お問い合わせに対する回答や必要な情報をご連絡する場合に利用させていただくものであり、これらの目的以外では利用いたしません。</p>

        <h2>広告について</h2>
        <p>当サイトでは、第三者配信の広告サービス（Googleアドセンス）を利用しており、ユーザーの興味に応じた商品やサービスの広告を表示するため、クッキー（Cookie）を使用しております。
        クッキーを使用することで当サイトはお客様のコンピュータを識別できるようになりますが、お客様個人を特定できるものではありません。
        Cookieを無効にする方法やGoogleアドセンスに関する詳細は「広告 – ポリシーと規約 – Google」をご確認ください。</p>

        <h2>アクセス解析ツールについて</h2>
        <p>当サイトでは、Googleによるアクセス解析ツール「Googleアナリティクス」を利用しています。このGoogleアナリティクスはトラフィックデータの収集のためにクッキー（Cookie）を使用しております。トラフィックデータは匿名で収集されており、個人を特定するものではありません。</p>

        <h2>免責事項</h2>
        <p>当サイトからのリンクやバナーなどで移動したサイトで提供される情報、サービス等について一切の責任を負いません。
        また当サイトのコンテンツ・情報について、正確性や安全性を保証するものではありません。情報が古くなっていることもございます。
        当サイトに掲載された内容によって生じた損害等の一切の責任を負いかねますのでご了承ください。</p>

        <h2>著作権について</h2>
        <p>当サイトで掲載している文章や画像などにつきましては、無断転載することを禁止します。
        当サイトは著作権や肖像権の侵害を目的としたものではありません。著作権や肖像権に関して問題がございましたら、お問い合わせフォームよりご連絡ください。迅速に対応いたします。</p>

        <h2>リンクについて</h2>
        <p>当サイトは基本的にリンクフリーです。リンクを行う場合の許可や連絡は不要です。</p>
    </div>
</div>
@endsection
