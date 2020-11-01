@extends('layouts.layout')

@section('title', 'home')

@section('main')
<div id="app">
  <main>
    <div id="eyechatch">
      <p class="eyechatch-title">機械ではできない仕事を</p>
      <table class="news">
        <tr>
          <td>2019/01/01</td>
          <th rowspan="2">news</th>
        </tr>
        <tr>
          <td>ニュースタイトルがここに入ります。3月の決算報告書</td>
        </tr>
      </table>
    </div>
    <div id="mission">
      <div class="mission-contents">
        <h2>お客様のために進化する成長企業であり続ける</h2>
        <p>
          顧客主導型サービスを提供する企業として、お客様の会社経営に必要なサービスと情報を提供し続ける企業支援会社を目指します。企業が現在直面している「勝ち残る」の戦略を提供できる会社として、ホームページを始め、各種マーケティングを提供いたします。
        </p>
        <a href="#">ミッション詳細</a>
      </div>
      <div class="mission-img">
        <img src="img/mission-img.jpg" />
      </div>
    </div>
    <div id="service">
      <h2>service</h2>
      <div class="service1">
        <div class="service1-img">
          <img src="img/service2.jpg" />
        </div>
        <div class="service1-content">
          <h3>web製作事業</h3>
          <h4>コーチングのミッション</h4>
          <p>
            ユーザーから求めるものを分析し、ユーザビリティを備えた最適なサイトを提供。建設業から美容、ブライダル、飲食店まで多種多様な業種の製作実績があります
          </p>
          <div class="service-link">
            <a href="#" class="service1-link">サービス詳細</a>
          </div>
        </div>
      </div>
      <div class="service2">
        <div class="service2-img">
          <img src="img/service1.jpg" />
        </div>
        <div class="service2-content">
          <h3>web製作事業</h3>
          <h4>コーチングのミッション</h4>
          <p>
            ユーザーから求めるものを分析し、ユーザビリティを備えた最適なサイトを提供。建設業から美容、ブライダル、飲食店まで多種多様な業種の製作実績があります
          </p>
          <div class="service-link">
            <a href="#" class="service1-link">サービス詳細</a>
          </div>
        </div>
      </div>
    </div>
    <div id="company">
      <div class="flex-box">
        <div class="company">
          <h2>company</h2>
          <a href="#"></a>
          <p><b>会社概要</b></p>
        </div>
        <div class="recruit">
          <h2>recruit</h2>
          <a href="#"></a>
          <p><b>採用情報</b></p>
        </div>
      </div>
      <div class="question">
        <h2>FAQ</h2>
        <p>良くある質問</p>
        <div></div>
        <a href="#"></a>
      </div>
    </div>
    <div id="contact">
      <div class="contact-area">
        <h2>contact</h2>
        <h3>お問い合わせ</h3>
        <p class="contact-title">お気軽にお問い合わせください。</p>
        <p class="contact-content">
          資料請求・お問い合わせなど何でも気軽にお問い合わせください。お仕事のご連絡もお問い合わせページに飛んでいただいて、入力フォームにご記入お願いします。
        </p>
        <a href="/apply" class="contact-btn">お問い合わせへ</a>
      </div>
    </div>
  </main>
</div>
@endsection