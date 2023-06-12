# アイスブレイクお題表示アプリ - ICEBREAKER -

## 制作背景

自分が所属しているゼミで毎週アイスブレイクを行う。そのためのお題を毎週考えるのはめんどくさい。
さらに何年間も同じ作業を繰り返しているため、使い回すこともできそう。
そこでお題を自動で作成でき、かつお題登録・保存できるようなサービスがあれば現役世代＋後輩にとっても非常に便利だと感じた。

## 技術

### 使用技術

HTML, CSS, JavaScript, PHP, SQL
Sass, Bootstrap, Vue, Laravel

Node.js, vite, inertia

### CSS Architecture

FLOCS
https://zenn.dev/yurukei20/articles/df151d3b276fbc

#### ■Foundation

基本となるスタイル。
リセットやフォント、ブレークポイントなど

#### ■Layouts

サイト全体の共通部分となるもの
ex: header, footer

#### ■Object

##### ＜ Component ＞

サイト内で再利用するパーツ。最小単位でなければならない。

##### ＜ Project ＞

component をまとめたもの。複数の component を塊のように扱う。
ex:button

##### ＜ Utility ＞

一部分のみスタイリングが必要になった際に利用。
