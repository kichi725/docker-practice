<!DOCTYPE html>
<html>

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
  <meta charset="UTF-8">
  <title>Laravel EC2</title>
  <meta name="description" content="サイトの説明文">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="canonical" href="あなたのサイトURL">
  <link rel="icon" type="image/png" href="ファビコンのパス" />
  <!-- OGP設定 -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="あなたのサイトURL" />
  <meta property="og:image" content="SNSで表示させたい画像のパス" />
  <meta property="og:title" content="ページタイトル" />
  <meta property="og:description" content="サイトの説明文" />
  <!-- Facebook用設定 -->
  <meta property="fb:app_id" content="facebookのApp ID" />
  <meta property="article:publisher" content="FacebookページのURL">
  <!-- Twitter用設定 -->
  <meta name="twitter:card" content="Twitterカードの種類">
  <meta name="twitter:site" content="@ユーザー名">
  <!-- スタイルシートはここから -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  {{-- @vite(['resources/css/style.css', 'resources/css/queries.css']) --}}
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/queries.css') }}">
</head>

<body>
  <header>
    <div class="container d-none d-lg-block">
      <div class="text-center mx-auto my-3"><a href="/"><img src="{{asset('img/logo.png')}}" alt="Clinic Name"></a></div>
      <h1 class="text-center h6">とそふろつひすりさひわ茶ん饗ピほをぜ浦い</h1>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light mb-3">
      <div class="container-fluid">
        <a class="navbar-brand d-inline-block d-lg-none w-75" href="/"><img src="{{asset('img/logo.png')}}" alt="Clinic Name" class="img-fluid"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="ナビゲーションの切替">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item px-3"><a href="#notice" class="nav-link">メニュー1</a></li>
            <li class="nav-item px-3"><a href="#list" class="nav-link">メニュー2</a></li>
            <li class="nav-item px-3"><a href="#message" class="nav-link">メニュー3</a></li>
            <li class="nav-item px-3"><a href="#chara" class="nav-link">メニュー4</a></li>
            <li class="nav-item px-3"><a href="#blog" class="nav-link">メニュー5</a></li>
            <li class="nav-item right px-3"><a href="#access" class="nav-link">メニュー6</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="jumbotron-fluid">
      <img src="{{asset('img/main-img')}}.jpg" alt="Main Image" class="img-fluid">
    </div>
  </header>

  <div class="container-fluid bg-primary py-3 mb-5">

    <div class="container">
      <div class="text-center h1"><a href="" class="text-dark text-decoration-none">じつそてんぉくきえこもくあをピぴぽ砧り蟹<br>の取り組みについてはこちら</a></div>
    </div>

  </div>

  <article class="container">

    <section class="row justify-content-around">
      <div class="col-md-4">
        <img src="{{asset('img/logo.png')}}" alt="Clinic Name" class="img-fluid mb-4 d-none d-md-block">
        <h2 class="h4">SAMPLE クリニック</h2>
        <h3 class="h3">TEL:03-1234-5678</h3>
        <p>〒000-0000 東京都港区芝8丁目0-0&ensp;<br class="d-block d-md-none">ビジネスビル1F</p>
      </div>
      <div class="col-md-8">
        <table class="table mb-1 bg-light text-center align-items-center">
          <tr>
            <th class="col-4">1週間</th>
            <th>月</th>
            <th>火</th>
            <th>水</th>
            <th>木</th>
            <th>金</th>
            <th>土</th>
            <th>日</th>
          </tr>
          <tr>
            <td>9:00 - 13:00<br>（最終受付12：30）</td>
            <td class="h3">●</td>
            <td class="h3">●</td>
            <td class="h3">●</td>
            <td class="h3">●</td>
            <td class="h3">●</td>
            <td class="h3">●</td>
            <td class="h3">―</td>
          </tr>
          <tr>
            <td>14:30 - 19:00<br>（最終受付18：30）</td>
            <td class="h3">●</td>
            <td class="h3">●</td>
            <td class="h3">―</td>
            <td class="h3">●</td>
            <td class="h3">●</td>
            <td class="h5 align-middle">▲</td>
            <td class="h3">―</td>
          </tr>
        </table>
        <ul class="small list-unstyled text-right">
          <li>きな粧しバわぺ吻ぎぞんぬぞワぼさけハをメ&emsp;<br class="d-block d-md-none">頃わそてはそ合い麿ソぉぎヌめあソあセすし</li>
        </ul>
      </div>
    </section>

    <section class="py-3 py-md-5">
      <a href="/" class="btn btn-secondary rounded-pill w-100 py-3">ネットでのご予約はこちらから</a>
    </section>

    <section class="py-5" id="notice">
      <div class="text-center"><img src="{{asset('img/teeth.png')}}" alt="Teeth" class="img-fluid img-size"></div>
      <h2 class="text-center font-weight-bold mb-5">お知らせ</h2>
      <ul class="list-unstyled h5">
        <li class="border-bottom p-3"><span class="me-5">yyyy.mm.dd</span>んからふがげ褒どとどきだ気ぞけぜ粧穀ざイ</li>
        <li class="border-bottom p-3"><span class="me-5">yyyy.mm.dd</span>ぞラどねざれぜこ倒ぬぞ里だ究ずにま槌をが。</li>
        <li class="border-bottom p-3"><span class="me-5">yyyy.mm.dd</span>ひヒゴだげあんは煩ぃめつゼほさき纏踊ふモ</li>
      </ul>
    </section>

    <section class="py-5" id="list">
      <div class="text-center"><img src="{{asset('img/teeth.png')}}" alt="Teeth" class="img-fluid img-size"></div>
      <h2 class="text-center font-weight-bold mb-5">診療科目</h2>

      <div class="row pb-5">
        <div class="col-lg-2 col-md-4 col-6 text-center mb-3">
          <img src="{{asset('img/list-teeth')}}.png" alt=" 歯のイラスト" class="img-fluid">
          <h4 class="text-center my-3 h5">一般歯科</h4>
          <a href="#" role="button" class="btn btn-secondary rounded-pill px-3 text-white">詳しくはこちら</a>
        </div>
        <div class="col-lg-2 col-md-4 col-6 text-center mb-3">
          <img src="{{asset('img/list-teeth')}}.png" alt=" 歯のイラスト" class="img-fluid">
          <h4 class="text-center my-3 h5">矯正歯科</h4>
          <a href="#" role="button" class="btn btn-secondary rounded-pill px-3 text-white">詳しくはこちら</a>
        </div>
        <div class="col-lg-2 col-md-4 col-6 text-center mb-3">
          <img src="{{asset('img/list-teeth')}}.png" alt=" 歯のイラスト" class="img-fluid">
          <h4 class="text-center my-3 h5">診療科目</h4>
          <a href="#" role="button" class="btn btn-secondary rounded-pill px-3 text-white">詳しくはこちら</a>
        </div>
        <div class="col-lg-2 col-md-4 col-6 text-center mb-3">
          <img src="{{asset('img/list-teeth')}}.png" alt=" 歯のイラスト" class="img-fluid">
          <h4 class="text-center my-3 h5">診療科目</h4>
          <a href="#" role="button" class="btn btn-secondary rounded-pill px-3 text-white">詳しくはこちら</a>
        </div>
        <div class="col-lg-2 col-md-4 col-6 text-center mb-3">
          <img src="{{asset('img/list-teeth')}}.png" alt=" 歯のイラスト" class="img-fluid">
          <h4 class="text-center my-3 h5">診療科目</h4>
          <a href="#" role="button" class="btn btn-secondary rounded-pill px-3 text-white">詳しくはこちら</a>
        </div>
        <div class="col-lg-2 col-md-4 col-6 text-center mb-3">
          <img src="{{asset('img/list-teeth')}}.png" alt=" 歯のイラスト" class="img-fluid">
          <h4 class="text-center my-3 h5">診療科目</h4>
          <a href="#" role="button" class="btn btn-secondary rounded-pill px-3 text-white">詳しくはこちら</a>
        </div>
      </div>
    </section>

    <section class="py-5" id="message">
      <div class="text-center"><img src="{{asset('img/teeth.png')}}" alt="Teeth" class="img-fluid img-size"></div>
      <h2 class="text-center font-weight-bold mb-5">院長ごあいさつ</h2>

      <div class="row mb-3">
        <div class="col-12 col-md-4">
          <img src="{{asset('img/docter.png')}}" alt="docter" class="img-fluid">
        </div>
        <div class="col-12 col-md-8 px-4">
          <h3 class="my-4 text-center">タイトルが入ります。タイトルが入ります。</h3>
          <p>とそふろつひすりさひわ茶ん饗ピほをぜ浦い とをぜ粧ここぷボもダ番およぽ榊ぉルさぉ巡</p>
          <p>づもてフぽへあビおニあかゆご こボあゆ吻ぎよそごぷちハぽでや益うを心ネすろく招理さ</p>
          <h4 class="h5 text-end">院長／<span class="fw-bolder">山田 太郎</span></h4>
        </div>
      </div>

      <h4 class="pb-2 border-bottom fw-bold" style="border-bottom-width: 3px !important;">経歴</h4>
      <div class="d-md-flex">
        <div class="col-md-4">
          <p class="pb-2 border-bottom fw-bold">平成××年</p>
          <ul class="list-unstyled">
            <li>××××××大学歯学部 卒業</li>
            <li>××××××歯学部附属病院(口腔外科)　勤務</li>
          </ul>
        </div>
        <div class="col-md-4">
          <p class="pb-2 border-bottom fw-bold">平成××年</p>
          <ul class="list-unstyled">
            <li>医療法人××××××病院　勤務</li>
          </ul>
        </div>
        <div class="col-md-4">
          <p class="pb-2 border-bottom fw-bold">平成××年</p>
          <ul class="list-unstyled">
            <li>SAMPLEクリニック　開院</li>
          </ul>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <h4 class="pb-2 border-bottom fw-bold" style="border-bottom-width: 3px !important;">資格</h4>
          <ul class="my-3">
            <li>歯科医師</li>
            <li>博士（歯学）</li>
            <li>日本摂食嚥下リハビリテーション学会認定士</li>
          </ul>
        </div>
        <div class="col-md-6">
          <h4 class="pb-2 border-bottom fw-bold" style="border-bottom-width: 3px !important;">所属</h4>
          <ul class="my-3">
            <li>顎咬合学会 会員</li>
            <li>日本矯正歯科学会 会員</li>
          </ul>
        </div>
      </div>
    </section>

    <section class="py-5" id="chara">
      <div class="text-center">
        <img src="{{asset('img/teeth.png')}}" alt="Teeth" class="img-fluid img-size">
      </div>
      <h2 class="text-center font-weight-bold mb-5">当院の特長</h2>

      <div class="row mb-5">
        <img src="{{asset('img/features.png')}}" alt="写真" class="col-md-7 img-fluid order-2">
        <div class="col-md-5 order-1">
          <h3 class="my-3 text-center">タイトルが入ります。</h3>
          <p>じつそてんぉくきえこもくあをピぴぽ砧り蟹 ぞラどねざれぜこ倒ぬぞ里だ究ずにま槌をが</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 mb-5 mb-md-0">
          <img src="{{asset('img/features.png')}}" alt="写真" class="img-fluid">
          <div class="px-2">
            <h3 class="my-4 text-center">タイトルが入ります。</h3>
            <p class="pl-2">みフべ瓦尾べむぷ道パくらぉレかぉごは編る シぷれぽあ革うにびトれ革こけ鈷たをんぱ最</p>
          </div>
        </div>
        <div class="col-md-4 mb-5 mb-md-0">
          <img src="{{asset('img/features.png')}}" alt="写真" class="img-fluid">
          <div class="px-2">
            <h3 class="my-4 text-center">タイトルが入ります。</h3>
            <p class="pl-2">ぽＧふｍＮラ骸８はど５るｚ２ｔぽぱん８ｃ ヲＺ２よ８うぱ０８ふｑぺぶＮサＵむのゆ２</p>
          </div>
        </div>
        <div class="col-md-4 mb-5 mb-md-0">
          <img src="{{asset('img/features.png')}}" alt="写真" class="img-fluid">
          <div class="px-2">
            <h3 class="my-4 text-center">タイトルが入ります。</h3>
            <p class="pl-2">Ｇ２１お２０チＡ０妄７たク茸づ措Ｋ廿ぼ蒙 智５ｈげ稔１４るメ２ばぃ９ＹＷせ３Ｙ８ユ</p>
          </div>
        </div>
      </div>
    </section>

    <section class="py-5" id="blog">
      <div class="text-center"><img src="{{asset('img/teeth.png')}}" alt="Teeth" class="img-fluid img-size"></div>
      <h2 class="text-center font-weight-bold mb-5">院内ブログ</h2>

      <div class="row">
        <div class="col-12 col-lg-6 mb-4">
          <div class="row align-items-center">
            <div class="col-md-4">
              <img src="{{asset('img/blog.png')}}" alt="ブログ" class="img-fluid border">
            </div>
            <div class="col-md-8">
              <h4 class="blog-post-title h5"><a href="#">ブログのタイトル</a></h4>
              <p class="blog-post-meta">2014/01/01　投稿者：管理人</p>
              <p>つれづれなるままに、日暮らし、硯にむかひて…</p>
              <div class="text-right">
                <a href="#" class="btn btn-secondary rounded-pill px-3 text-white btn-sm">続きを読む</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 mb-4">
          <div class="row align-items-center">
            <div class="col-md-4">
              <img src="{{asset('img/blog.png')}}" alt="ブログ" class="img-fluid border">
            </div>
            <div class="col-md-8">
              <h4 class="blog-post-title h5"><a href="#">ブログのタイトル</a></h4>
              <p class="blog-post-meta">2014/01/01　投稿者：管理人</p>
              <p>つれづれなるままに、日暮らし、硯にむかひて…</p>
              <div class="text-right">
                <a href="#" class="btn btn-secondary rounded-pill px-3 text-white btn-sm">続きを読む</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-lg-6 mb-4">
          <div class="row align-items-center">
            <div class="col-md-4">
              <img src="{{asset('img/blog.png')}}" alt="ブログ" class="img-fluid border">
            </div>
            <div class="col-md-8">
              <h4 class="blog-post-title h5"><a href="#">ブログのタイトル</a></h4>
              <p class="blog-post-meta">2014/01/01　投稿者：管理人</p>
              <p>つれづれなるままに、日暮らし、硯にむかひて…</p>
              <div class="text-right">
                <a href="#" class="btn btn-secondary rounded-pill px-3 text-white btn-sm">続きを読む</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div class="row align-items-center">
            <div class="col-md-4">
              <img src="{{asset('img/blog.png')}}" alt="ブログ" class="img-fluid border">
            </div>
            <div class="col-md-8">
              <h4 class="blog-post-title h5"><a href="#">ブログのタイトル</a></h4>
              <p class="blog-post-meta">2014/01/01　投稿者：管理人</p>
              <p>つれづれなるままに、日暮らし、硯にむかひて…</p>
              <div class="text-right">
                <a href="#" class="btn btn-secondary rounded-pill px-3 text-white">続きを読む</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-5" id="access">
      <div class="text-center"><img src="{{asset('img/teeth.png')}}" alt="Teeth" class="img-fluid img-size"></div>
      <h2 class="text-center font-weight-bold mb-5">アクセス</h2>

      <div class="row border py-3 mx-2">
        <div class="col-12 col-md-6">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9326.96681706626!2d139.7639690305034!3d35.67941960197571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bfbd89f700b%3A0x277c49ba34ed38!2z5p2x5Lqs6aeF!5e0!3m2!1sja!2sjp!4v1589874974792!5m2!1sja!2sjp" class="border border-0" style="width:100%;height:100%;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="col-12 col-md-6 p-3">
          <h5 class="card-title mb-0"><span class="material-icons md-36 me-1 mb-1">train</span>電車でお越しの方</h5>
          <ul class="card-text list-unstyled">
            <li>×××××線 ×××××駅下車 徒歩7分</li>
            <li>×××××線 ×××××駅下車 徒歩9分</li>
          </ul>
          <h5 class="card-title mb-0"><span class="material-icons md-36 me-1 mb-1">directions_bus</span>バスでお越しの方</h5>
          <ul class="card-text list-unstyled">
            <li>×××××駅東口発 都営バス ×××××駅行き ×××××停留所下車<br>(乗車時間約20分) 徒歩2分</li>
          </ul>
          <h5 class="card-title mb-0"><span class="material-icons md-36 me-1 mb-1">directions_car</span>車でお越しの方</h5>
          <ul class="card-text list-unstyled">
            <li>駐車場3台完備、もしくは近隣コインパーキング割引券あり</li>
            <li>×××××ICから×××××線 ×××××町出口から5分</li>
          </ul>
        </div>
      </div>
    </section>

    <section class="pb-5">
      <div class="d-lg-flex justify-content-between align-items-center">
        <div class="col-lg-4 text-center mb-3">
          <img src="{{asset('img/logo.png')}}" alt="Clinic Name" class="img-fluid">
        </div>
        <div class="col-lg-4 text-center mb-3">
          <h4>SAMPLE 歯科クリニック</h4>
          <h4 class="h3">TEL:03-1234-5678</h4>
          <p class="mb-0">〒000-0000 東京都港区芝8丁目0-0&ensp;<br class="d-block d-md-none">ビジネスビル1F</p>
        </div>
        <div class="col-lg-4 text-center">
          <a href="#" class="btn btn-secondary rounded-pill w-100 py-3">ネットでのご予約はこちらから</a>
        </div>
      </div>
    </section>

  </article>

  <footer class="bg-secondary py-5 position-relative">
    <nav class="navbar navbar-expand navbar-light px-4">
      <!--メニュー項目-->
      <div class="collapse navbar-collapse px-3">
        <ul class="navbar-nav mx-auto footer">
          <li class="nav-item px-2 border-after"><a href="#notice" class="nav-link text-white">おしらせ</a></li>
          <li class="nav-item px-2 border-after"><a href="#list" class="nav-link text-white">診療科目</a></li>
          <li class="nav-item px-2 border-after"><a href="#message" class="nav-link text-white">院長ごあいさつ</a></li>
          <li class="nav-item px-2 border-after"><a href="#chara" class="nav-link text-white">当院の特徴</a></li>
          <li class="nav-item px-2 border-after"><a href="#blog" class="nav-link text-white">院内ブログ</a></li>
          <li class="nav-item right px-2 border-after"><a href="#access" class="nav-link text-white">アクセス</a></li>
        </ul>
      </div>
    </nav>
    <div class="text-center mt-4">
      <small class="mb-5 text-white">&copy;2023 Laravel EC"</small>
    </div>

    <div class="totop">
      <i class="far fa-arrow-alt-circle-up fa-3x"></i>
    </div>
  </footer>

  <div class="floating-nav">
    <div class="px-3 py-4 bg-secondary">
      <a class="" href="#">ネット予約</a>
    </div>
    <div class="px-3 py-4 bg-dark">
      <a class="" href="#">電話予約</a>
    </div>
  </div>

  <!-- JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>
