<?php

$pairs = [
    ['http://oshiete.goo.ne.jp/qa/1547695.html',
    '/こんにちは/u'],
    ['http://oshiete.goo.ne.jp/qa/1547695.html',
    '/こんにちは/u'],
    ['http://spanish-study.net/spain-phrase-more20.html',
    '/あなたの名前は何ですか？/u'],
    ['https://twitter.com/sixi1217/status/766289160734773248',
    '/わざわざ名前を聞く必要ないだろ/u'],
    ['https://twitter.com/DarkcrowShin/status/767192805873627136',
    '/言われてみれば確かにそうだなあ。俺はＦＦ７が好きすぎるんで目が歪んでいるのやもしれぬ。/u'],
    ['https://twitter.com/mayn_tw/status/764243393161498626',
    '/絶対そうだ！/u'],
    ['http://gypsyrui.exblog.jp/21015252/',
    '/きっとそうに違いない/u'],
    /*['http://b.hatena.ne.jp/entry/146814790/comment/kasedac',
    '/「『あなた』はどうしてそんなふうに思うのですか？」などの言い方をせず、「『私』はそんなふうに思われて悲しい」というように、あくまで『私』を主語にする言い方に徹するのが秘訣/u'],*/
    ['http://www.tanoshikoto.com/archives/45301106.html',
    '/俺『ちょっと何言ってるかわからない…/u'],
];

$options = array(
    'http' => array(
        'method' => 'GET',
        'header' => 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:48.0) Gecko/20100101 Firefox/48.0',
    ),
);
$context = stream_context_create($options);

foreach($pairs as $pair){
    $regex = $pair[1];
    $contents = file_get_contents($pair[0]);
    // $contents = file_get_contents($pair[0], false,  $context);
    $matches = [];
    preg_match($regex, $contents, $matches);
    echo $pair[0]."\n";
    echo $matches[0]."\n\n";
}
