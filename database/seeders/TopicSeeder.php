<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('topics')->insert([
            [
                'user_id' => 1,
                'topic' => '私の幸せを感じる瞬間',
            ],
            [
                'user_id' => 1,
                'topic' => '私の弱み、ダメなところ',
            ],
            [
                'user_id' => 1,
                'topic' => '最近の個人的ニュース',
            ],
            [
                'user_id' => 1,
                'topic' => '私の熱中症対策',
            ],
            [
                'user_id' => 1,
                'topic' => '異性のキュンとする仕草、シチュエーション',
            ],
            [
                'user_id' => 1,
                'topic' => '夏休みの思い出',
            ],
            [
                'user_id' => 1,
                'topic' => '最近のやらかした、失敗した話',
            ],
            [
                'user_id' => 1,
                'topic' => '夏の就活状況報告と今後の予定',
            ],
            [
                'user_id' => 1,
                'topic' => 'ずっとやりたいと思っていたけれど、まだやっていないことはありますか？理由は何ですか？',
            ],
            [
                'user_id' => 1,
                'topic' => '何か隠れた才能はありますか？',
            ],
            [
                'user_id' => 1,
                'topic' => '自分が思っていたものとギャップを感じた出来事',
            ],
            [
                'user_id' => 1,
                'topic' => 'あなたの恥ずかしい趣味は何ですか？',
            ],
            [
                'user_id' => 1,
                'topic' => '小さい頃や若い頃に怖かったもので、今振り返ると全然怖くないものは何ですか？',
            ],
            [
                'user_id' => 1,
                'topic' => '現在のデスクトップや携帯電話の壁紙は何ですか？その画像を選んだ理由は何ですか？',
            ],
            [
                'user_id' => 1,
                'topic' => ' 一番ついてなかった日を教えてください。',
            ],
            [
                'user_id' => 1,
                'topic' => 'もし 3 つの願いが叶うとしたら、何を願いますか？',
            ],
            [
                'user_id' => 1,
                'topic' => 'もしも 1 億円当たったら、まず何をしますか？',
            ],
            [
                'user_id' => 1,
                'topic' => 'もし 1 日に 1 時間余計に時間があったら、何をしますか？',
            ],
            [
                'user_id' => 1,
                'topic' => 'ナンバーワンの旅行先はどこですか？',
            ],
            [
                'user_id' => 1,
                'topic' => '卒業までにしたいこと',
            ],
            [
                'user_id' => 1,
                'topic' => '今だから言える過去の黒歴史or幼少期の笑い話、かわいい話',
            ],
            [
                'user_id' => 1,
                'topic' => '最近あった嬉しかったこと',
            ],
            [
                'user_id' => 1,
                'topic' => 'GWの思い出',
            ],
            [
                'user_id' => 1,
                'topic' => '最近あったプチ不幸',
            ],
            [
                'user_id' => 1,
                'topic' => '今ちょっと欲しいもの',
            ],
            [
                'user_id' => 1,
                'topic' => 'いま行ってみたい国',
            ],
            [
                'user_id' => 1,
                'topic' => '大学卒業までにやりたいこと',
            ],
            [
                'user_id' => 1,
                'topic' => '私のストレス解消法',
            ],
            [
                'user_id' => 1,
                'topic' => 'ゼミ合宿の自由時間にやりたいこと！',
            ],
            [
                'user_id' => 1,
                'topic' => '先生のここが好き',
            ],
            [
                'user_id' => 1,
                'topic' => '理想の休日の過ごし方',
            ],
            [
                'user_id' => 1,
                'topic' => '最近のマイブーム',
            ],
            [
                'user_id' => 1,
                'topic' => '最も影響を受けた本や映画について語ってください',
            ],
            [
                'user_id' => 1,
                'topic' => '自分の将来の夢や目標について話してください',
            ],
            [
                'user_id' => 1,
                'topic' => '自分の人生で最も克服したい課題は何ですか？',
            ],
            [
                'user_id' => 1,
                'topic' => '最も思い出深い旅行のエピソードを教えてください。',
            ],
            [
                'user_id' => 1,
                'topic' => '人生で一番感謝していることは何ですか？',
            ],
            [
                'user_id' => 1,
                'topic' => '最近挑戦した新しい趣味やアクティビティは何ですか？',
            ],
            [
                'user_id' => 1,
                'topic' => 'もしも時間を巻き戻せるとしたら、何をやり直したいですか？',
            ],
            [
                'user_id' => 1,
                'topic' => '自分の人生で一番大切な教訓は何ですか？',
            ],
            [
                'user_id' => 1,
                'topic' => '自分の人生での成功体験や達成感のある瞬間を教えてください',
            ],
            [
                'user_id' => 1,
                'topic' => '自分の人生での失敗体験や挫折を教えてください。',
            ],
            [
                'user_id' => 1,
                'topic' => '最近始めた新しい習慣やルーティン',
            ],
            [
                'user_id' => 1,
                'topic' => '大学生を初めからやり直せるならやりたいことは？',
            ],
            [
                'user_id' => 1,
                'topic' => '大学で一番印象に残った授業や講義は何ですか？',
            ],
            [
                'user_id' => 1,
                'topic' => '大学生活で一番お金を使ったものや出来事は？',
            ],
            [
                'user_id' => 1,
                'topic' => '自分が大学で出会った一番影響を受けた友人や仲間について',
            ],
            [
                'user_id' => 1,
                'topic' => '大学生活での就活やキャリアに関する経験やアドバイスを教えてください',
            ],
            [
                'user_id' => 1,
                'topic' => '自分が大学で達成した一番大きな目標や成果について話してください',
            ],
            [
                'user_id' => 1,
                'topic' => '大学生活での一番恐ろしかった試験',
            ],
            [
                'user_id' => 1,
                'topic' => '幸せを感じる瞬間は？',
            ],
            [
                'user_id' => 1,
                'topic' => '自分の黄金期は？',
            ],
            [
                'user_id' => 1,
                'topic' => '今までで1番辛かったこと',
            ],
            [
                'user_id' => 1,
                'topic' => '今までで一番楽しかったこと',
            ],
            [
                'user_id' => 1,
                'topic' => '受験の思い出',
            ],
            [
                'user_id' => 1,
                'topic' => '今ちょっとだけ頑張っている事',
            ],
            [
                'user_id' => 1,
                'topic' => '生まれ変わったらこうなりたい',
            ],
            [
                'user_id' => 1,
                'topic' => '健康のために気を付けていること',
            ],
            [
                'user_id' => 1,
                'topic' => '得意なこと＆苦手なこと',
            ],
            [
                'user_id' => 1,
                'topic' => 'これだけは譲れないこと',
            ],
            [
                'user_id' => 1,
                'topic' => 'プチ自慢は？',
            ],
            [
                'user_id' => 1,
                'topic' => '最後に泣いた映画や本は何ですか？',
            ],
            [
                'user_id' => 1,
                'topic' => 'もし自分が生まれ変われるとしたら、何になりたいですか？',
            ],
            [
                'user_id' => 1,
                'topic' => '最も驚いたニュースや出来事は何ですか？',
            ],
            [
                'user_id' => 1,
                'topic' => '子供の頃、なりたかった職業は何ですか？',
            ],
            [
                'user_id' => 1,
                'topic' => '自分が一日だけ他の人と入れ替わるとしたら、誰と入れ替わりたいですか？',
            ],
            [
                'user_id' => 1,
                'topic' => 'もし明日が人生最後の日だとしたら何をしますか？',
            ],
            [
                'user_id' => 1,
                'topic' => 'もし時間を遡れるとしたら、どの時期に戻りますか？',
            ],
            [
                'user_id' => 1,
                'topic' => '好きだった給食のメニューは？',
            ],
            [
                'user_id' => 1,
                'topic' => '一日だけ性別が変わったとしたら何がしたい',
            ],
            [
                'user_id' => 1,
                'topic' => '地元の自慢は？',
            ],
            [
                'user_id' => 1,
                'topic' => 'あなたのおすすめのアプリは？',
            ],
            [
                'user_id' => 1,
                'topic' => 'カバンに絶対入れておきたいもの(財布・携帯以外で)',
            ],
            [
                'user_id' => 1,
                'topic' => '魔法が使えたら何をしたい？',
            ],
            [
                'user_id' => 1,
                'topic' => '家にあるどうしても捨てられないものは？',
            ],
            [
                'user_id' => 1,
                'topic' => 'アナタの推しはだれ？(漫画・ゲーム・アイドル・タレント・スポーツ選手など)',
            ],
            [
                'user_id' => 1,
                'topic' => 'ドラえもんの道具、何が欲しい？どんなことをしたい？',
            ],
            [
                'user_id' => 1,
                'topic' => 'タイムマシンで行きたいのは未来？過去？そこに行って何をしたい？',
            ],
            [
                'user_id' => 1,
                'topic' => 'これまでで一番時間やお金をかけた趣味',
            ],
            [
                'user_id' => 1,
                'topic' => '大人になったなぁと思うこと',
            ],
            [
                'user_id' => 1,
                'topic' => 'なくしてほしい学校のルール',
            ],
            [
                'user_id' => 1,
                'topic' => 'このクラスで１億円使えるとしたら何を提案する',
            ],
            [
                'user_id' => 1,
                'topic' => 'これまでで一番痛かったこと',
            ],
            [
                'user_id' => 1,
                'topic' => '世の中でなんとなく納得がいかないこと',
            ],
            [
                'user_id' => 1,
                'topic' => 'どうしても寝られない夜は何をする？',
            ],
            [
                'user_id' => 1,
                'topic' => '恋人の遅刻は何分まで許せる？',
            ],
            [
                'user_id' => 1,
                'topic' => '先生「おやつは300円まで」あなたは何を持っていく？',
            ],
            [
                'user_id' => 1,
                'topic' => '何されたら怒る？',
            ],
            [
                'user_id' => 1,
                'topic' => '運命って信じる？',
            ],
            [
                'user_id' => 1,
                'topic' => '緊張する時ってどんな時？',
            ],
            [
                'user_id' => 1,
                'topic' => '貴方が考える「男らしさ」を教えて下さい。',
            ],
            [
                'user_id' => 1,
                'topic' => '3年後の自分を想像してみて下さい！',
            ],
            [
                'user_id' => 1,
                'topic' => '何部だった？',
            ],
            [
                'user_id' => 1,
                'topic' => 'つい言ってしまう口癖',
            ],
            [
                'user_id' => 1,
                'topic' => 'どこからが浮気？例：内緒で会ったら、LINE交換、連絡取るの、異性の連絡先の保有',
            ],
            [
                'user_id' => 1,
                'topic' => '買い物をしていておつりを多く貰った。素直に言う？さりげなく持ち帰る？',
            ],
            [
                'user_id' => 1,
                'topic' => 'どっちがマシ？「時間に超ルーズな彼氏彼女」「お金に超ルーズな彼氏彼女」',
            ],
            [
                'user_id' => 1,
                'topic' => '恋人、嫁または夫が何のオタクだったら一番いやですか。',
            ],
            [
                'user_id' => 1,
                'topic' => '一つ願いが叶えられるなら？',
            ],
            [
                'user_id' => 1,
                'topic' => 'お気に入りのYouTubeチャンネルは？',
            ],
            [
                'user_id' => 1,
                'topic' => '一度でいいから体験してみたい職業は何ですか？',
            ],
            [
                'user_id' => 1,
                'topic' => '幼少期に絶対に欲しかったおもちゃは何ですか？',
            ],
            [
                'user_id' => 1,
                'topic' => '最も記憶に残る誕生日プレゼントは何でしたか？',
            ],
            [
                'user_id' => 1,
                'topic' => '自分が一番苦労したテストや試験は何でしたか？',
            ],
            [
                'user_id' => 1,
                'topic' => '中学・高校時代に一番面白かった授業は何でしたか？',
            ],
            [
                'user_id' => 1,
                'topic' => '中学・高校時代の修学旅行の思い出は？',
            ],
            [
                'user_id' => 1,
                'topic' => '初めてのアルバイトのエピソードを教えてください。',
            ],
            [
                'user_id' => 1,
                'topic' => '小さい頃に信じていたが大人になってから間違いだと分かったことは何ですか？',
            ],
            [
                'user_id' => 1,
                'topic' => '運動会で一番印象に残った出来事は何ですか？',
            ],
            [
                'user_id' => 1,
                'topic' => '高校時代、一番盛り上がった学校行事は何でしたか？',
            ],
        ]);
    }
}