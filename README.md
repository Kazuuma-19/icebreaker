### CSS Architecture

FLOCS
https://zenn.dev/yurukei20/articles/df151d3b276fbc

#### Foundation

基本となるスタイル。
リセットやフォント、ブレークポイントなど

#### Layouts

サイト全体の共通部分となるもの

#### Object

##### Component

サイト内で再利用するパーツ。最小単位でなければならない。

##### Project

component をまとめたもの。複数の component を塊のように扱う。

##### Utility

一部分のみスタイリングが必要になった際に利用。
