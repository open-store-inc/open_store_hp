<?php
/*
Template Name: service.php
*/
?>

<!DOCTYPE html>
<html>

<head>
    <title>株式会社 OPEN STORE</title>
    
    <!-- <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="responsive.css"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/stylesheet.css" type="text/css" />
	
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/lib/jquery.js"></script>
    <script type="text/javascript">
    $(function() {

    
        // strategy
        jQuery('.strategy' ).mouseover(function() {
            jQuery('#strategy').slideDown(300);
        });
        jQuery('.strategy').mouseout(function() {
            jQuery('#strategy').slideUp(300);
        });

        //innovation
        jQuery('.innovation' ).mouseover(function() {
            jQuery('#innovation').slideDown(300);
        });
        jQuery('.innovation').mouseout(function() {
            jQuery('#innovation').slideUp(300);
        });

        //consept
        jQuery('.consept' ).mouseover(function() {
            jQuery('#consept').slideDown(300);
        });
        jQuery('.consept').mouseout(function() {
            jQuery('#consept').slideUp(300);
        });

        //branding
        jQuery('.branding' ).mouseover(function() {
            jQuery('#branding').slideDown(300);
        });
        jQuery('.branding').mouseout(function() {
            jQuery('#branding').slideUp(300);
        });

    });
    </script>
</head>

<body>
    <div class="header-color">
        <p></p>
    </div>
    <header>

        <div class="header container ">
            <div class="header-left">
                <div class="header-logo">
                    <a href="">OPEN STORE</a>
                </div>

            </div>
            <div class="header-right">
                <div class="header-contact">

                </div>
                <div class="header-nav" style="width:100px;">
                    <a href="#" id="header-course"><img
                            src="https://everydayicons.jp/wp/wp-content/themes/everydayicons/icons/png/ei-menu.png"
                            alt=""> </a>
                    <ul id="header-toggle">
                        <li>初級</li>
                        <li>中級</li>
                        <li>上級</li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div class="container clear">
        <div class="top">
            <div class="top-logo">
                <h3><span>SERVICE</span></h3>
                　　　<p>提供サービス</p>
            </div>
            <div class="top-me">
                <p>
                    <br>
                </p>
            </div>
            <div class="sc ">
                <p>scroll<span>→</span></p>
            </div>
        </div>
    </div>

    <div class="consulting" 　id = "1">
        <div class="container">
            <div class="consult consultx">
                <div class="consult-me ">
                    <h3 class="">webコンサルティング <br><span >WEB CONSULTING</span></h3>
                    <p class=""><a class="strategy">戦略立案</a>/<a class="innovation">イノベーション支援</a>/<a class="consept">コンセプト設計</a>/<a class="branding">ブランディング戦略</a></p>

                    <div class = "subbox" id = "strategy" style="display:none; background-color:#e74c3c;">
                        <h3>戦略立案</h3>
                        <p>
                        企業において、有効な事業戦略を立案し、実施することは重要な課題です。しかし、事業戦略とは、単純に商品を投入する計画を立てることではありません。</br>
                        企業の環境や市場の動向、競合との差別化など、様々な要因を考慮しつつ、それらを適切に分析・判断し、自社にとって有効な一手となるように計画しなくてはなりません。</br>
                        顧客の獲得、顧客単価の底上げ、認知拡大といったマーケティング上の課題や、さらに上位の視点から売り上げや利益の拡大といった全体的な課題の解決を目的に考えなければなりません。</br>
                        事業戦略に沿ったWebサイト戦略を展開できるでしょう。
                        </p>
                    </div>

                    <div class = "subbox" id = "innovation" style="display:none; background-color:#e74c3c;">
                        <h3>イノベーション支援</h3>
                        <p>
                        現在、IT技術は私たちの生活に欠かせないものになっています。</br>
                        今後も、全ての業種でIT技術の活用なくして企業や事業の発展はあり得ない状況です。</br>
                        そこで、私たちの様なITサービス提供会社を活用いただきたく事が事業改善や企業発展に必要なIT技術を活用する近道になると考えています。
                        </p>
                    </div>

                    <div class = "subbox" id = "consept" style="display:none; background-color:#e74c3c;">
                        <h3>コンセプト設計</h3>
                        <p>
                        「どうやったら魅力的なコンセプトが作れるようになるか？」は永遠のテーマですが、それを考え出すためのいわゆる「コツ」があります。</br>
                        コンセプトとはビジネスのアイデアや構想を一言にまとめたもので、事業計画を立てる際に必須となる項目です。</br>
                        これから計画する事業活動はどのような市場や人を対象にしていて、何のために、どのようなモノ・コトを提供するのかといったポイントを具体的に示します</br>
                        コンセプトがはじめから明確になっていると、事業の概念や考え方に沿った商品やサービスを生み出すことができ、お客様にも選ばれる事業になっていくと考えられています。
                        </p>
                    </div>

                    <div class = "subbox" id = "branding" style="display:none; background-color:#e74c3c;">
                        <h3>ブランディング戦略</h3>
                        <p>
                        
                        </p>
                    </div>

                    </br>
                    <p class="" style="font-size:1.1rem; font-weight: bold;">webコンサルタントとは</p>
                    </br>
                    <p class="" style="font-size:0.9rem;">
                    「自社のWebサイトでサービスや製品をもっと多くの人に届けたい」「Web上で人材採用を進めていきたい」と思ったことはありませんか？</br>
                    中小企業の管理職や新米のWeb担当者など、Webサイトの活用に関する知識や経験が少ない方から、</br>
                    「自社のWebサイトはあるけれどどうやって改善していけばいいのか分からない」という悩みをよくお聞きします。</br>
                    インターネットの急速な普及により、Webサイトからの売り上げを伸ばしている企業が急増しています。</br>
                    また、Webサイトだけでサービスを展開している企業も多く、ユーザーにサービスの利用を促す施策を打つ必要性が高まっています
                    </p>
                </div>
                <div class="consult-img ">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/WEB-CONSULTING.png" alt="">
                </div>
            </div>
        </div>
       <div class="container">
            <div class="consult1">
                <div class="consult1-top ">
                    <h3>「WEBサービス」の成功は戦略で決まる</h3>
                </div>
                <div class="consult1-me" style="text-align: center;">
                    <p class="">綿密なヒアリングをもとに、
                    <span class="">WEBサービスの問題発見や解決策の提案、戦略立案などを中心に、</br>お客様が最適なWEBサービスを活用できるようサポートします。</span>
                    </p>
                </div>
            </div>
            <div class="consult2">
                <div class="consult2-top">
                    <h3 class="">POINT<span class="">!</span></h3>
                </div>
                <div class="con-course ">
                    <div class="course ">
                        <div class="course-img ">
                            <img src="https://m-hand.biz/cms/wp-content/themes/m-hand_inbound/img/service/ico_circle01.png" alt="">
                        </div>
                        <div class="course-me ">
                            <h3>POINT!1</h3>
                            <p>お客様ご自身では表現しきれなかったご要望を綿密なヒアリングで引き出し課題を明確にします。</p>
                        </div>
                    </div>
                    <div class="course ">
                        <div class="course-img ">
                            <img src="https://m-hand.biz/cms/wp-content/themes/m-hand_inbound/img/service/ico_circle01.png" alt="">
                        </div>
                        <div class="course-me ">
                            <h3>POINT2</h3>
                            <p>お客様ご自身では表現しきれなかったご要望を綿密なヒアリングで引き出し課題を明確にします。</p>
                        </div>
                    </div>
                    <div class="course ">
                        <div class="course-img ">
                            <img src="https://m-hand.biz/cms/wp-content/themes/m-hand_inbound/img/service/ico_circle01.png" alt="">
                        </div>
                        <div class="course-me ">
                            <h3>POINT!3</h3>
                            <p>お客様ご自身では表現しきれなかったご要望を綿密なヒアリングで引き出し課題を明確にします。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="consulting" 　id = "2">
        <div class="container">
            <div class="consult">
                <div class="consult-img ">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/WEB-SERVICE-PRODUCTION.png" alt="">
                </div>
                <div class="consult-me ">
                    <h3>WEBサービス制作/開発 <span>WEB CONSULTING</span></h3>
                    <p><a class="corporate">コーポレートサイト</a>/<a class="service_site">サービスサイト</a>/<a class="lp">ランディングページ(LP)</a>/<a class="owned">オウンドメディア</a>/<a class="recruit_site">リクルートサイト</a></p>

                    <div class = "subbox" id = "corporate" style="display:none; background-color:#f1c40f;">
                        <h3>コーポレートサイト</h3>
                        <p>
                        会社のWebサイトです。簡単に言えば、会社の公式プロフィールとも言えます。</br>
                        主にどのような会社なのか、どのような製品・サービスを扱っているのか、などの情報を記載します</br>
                        従来は、会社案内のパンフレットのWeb晩=コーポレートサイトといった認識が一般的でしたが、現在では、「採用、広告、企業ブランディング」と用途は多岐にわたります。</br>
                        コーポレートサイトを通じて何をしたいのか「目的意識」をもって制作・運用に力を入れる企業が増えてきています。
                        </p>
                    </div>

                    <div class = "subbox" id = "service_site" style="display:none; background-color:#f1c40f;">
                        <h3>サービスサイト</h3>
                        <p>
                        広告の商品やサービスについて詳しく紹介し、問い合わせや購入につなげるためのサイトです。</br>
                        企業そのものよりも、商品やサービスにスポットを当てています。</br>
                        会社が扱う全ての商品やサービスの情報を紹介しています。ページ数も多く、商品やサービスに関するあらゆる情報が網羅されている事が特徴です。</br>
                        また、BtoB と BtoC によってもサイトによるアプローチ手法が異なります。
                        </p>
                    </div>

                    <div class = "subbox" id = "lp" style="display:none; background-color:#f1c40f;">
                        <h3>lp</h3>
                        <p>
                        サービスサイトから、さらにターゲットや商品を絞り、「１つ」の商品やサービスを売るためのWebサイトのことをランディングページといいます。</br>
                        サービスサイトを「Web版カタログ」とすると、LPは「Web版チラシ」に近いイメージです。</br></br>
                        ・特定の商品やサービスを売ることに特価</br>
                        ・１ページのみで構成「他のページに移動できない」</br>
                        ・サイトのゴールが明白(お問い合わせや販売に特価)
                        </p>
                    </div>

                    <div class = "subbox" id = "owned" style="display:none; background-color:#f1c40f;">
                        <h3>オウンドメディア</h3>
                        <p>
                        同じ「集客」が目的でも、ランディングページとは異なり、中長期的な集客施策を行うなら、オウンドメディアがおすすめです。</br>
                        オウンドメディアは、「様々なコンテンツを通して商品やサービスの魅力を発信し、集客を行う」ためのWebサイトです。</br></br>
                        ・ランディングページのように広告費が不要</br>
                        ・コンテンツが積みあがってくると継続的に集客を行える</br>
                        ・ユーザーにしっかり情報発信を行うため顧客単価が高い
                        </p>
                    </div>

                    <div class = "subbox" id = "recruit_site" style="display:none; background-color:#f1c40f;">
                        <h3>リクルートサイト</h3>
                        <p>
                        基本的に企業の採用を強化するのが目的です。</br>
                        コーポレートサイトの中に、「採用情報」として掲載されている会社も存在します。</br>
                        しかし、基本的に採用を行う場合は、採用サイトとして独立したWebサイトが求められます。</br>
                        採用サイトの主な目的は、「他媒体で会社のことを知った候補者に応募するための一押しをする」ことです。</br>
                        </p>
                    </div>

                    <script type="text/javascript">
                        $(function() {
                        
                            // corporate
                            jQuery('.corporate' ).mouseover(function() {
                                jQuery('#corporate').slideDown(300);
                            });
                            jQuery('.corporate').mouseout(function() {
                                jQuery('#corporate').slideUp(300);
                            });

                            //service_site
                            jQuery('.service_site' ).mouseover(function() {
                                jQuery('#service_site').slideDown(300);
                            });
                            jQuery('.service_site').mouseout(function() {
                                jQuery('#service_site').slideUp(300);
                            });

                            //lp
                            jQuery('.lp' ).mouseover(function() {
                                jQuery('#lp').slideDown(300);
                            });
                            jQuery('.lp').mouseout(function() {
                                jQuery('#lp').slideUp(300);
                            });

                            //owned
                            jQuery('.owned' ).mouseover(function() {
                                jQuery('#owned').slideDown(300);
                            });
                            jQuery('.owned').mouseout(function() {
                                jQuery('#owned').slideUp(300);
                            });
                            
                            //recruit_site
                            jQuery('.recruit_site' ).mouseover(function() {
                                jQuery('#recruit_site').slideDown(300);
                            });
                            jQuery('.recruit_site').mouseout(function() {
                                jQuery('#recruit_site').slideUp(300);
                            });

                        });
                    </script>

                    </br>
                    <p class="" style="font-size:1.1rem; font-weight: bold;">WEB制作/開発とは</p>
                    </br>
                    <p class="" style="font-size:0.9rem;">
                    Webサイト構築とは、単にテキスト要素を含むHTMLファイルとデザイン要素としての</br>画像ファイルの組み合わせを行うことではありません。</br>
                    Webサイトを立ち上げたい、リニューアルしたい、売り上げを伸ばしたい、など様々なニーズがありますが、</br>
                    Webサイトを構築するための全工程をしっかり把握してから構築を行っている企業は、どれくらいあるでしょうか？</br>
                    特に、Webサイトを企業のマーケティングツールとして捉えた場合はなおさらです。</br>
                    その場合、Webサイト構築の目的は「より多くのお客様からコンタクトをもらえるような仕組み」を作ることです。
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="consult1">
                <div class="consult1-top ">
                    <h3>あくまでもユーザーのためのもの。</h3>
                </div>
                <div class="consult1-me " style="text-align: center;">
                    <p>お客様の「伝えたいコト」「やりたいコト」と</br><span>ユーザーの「求めているコト」を用いて様々なカタチで実現します。</span></p>
                </div>
            </div>
            <div class="consult2">
                <div class="consult2-top ">
                    <h3>POINT<span>!</span></h3>
                </div>
                <div class="con-course">
                    <div class="course ">
                        <div class="course-img ">
                            <img src="https://m-hand.biz/cms/wp-content/themes/m-hand_inbound/img/service/ico_circle01.png" alt="">
                        </div>
                        <div class="course-me ">
                            <h3>POINT!1</h3>
                            <p>お客様ご自身では表現しきれなかったご要望を綿密なヒアリングで引き出し課題を明確にします。</p>
                        </div>
                    </div>
                    <div class="course ">
                        <div class="course-img ">
                            <img src="https://m-hand.biz/cms/wp-content/themes/m-hand_inbound/img/service/ico_circle01.png" alt="">
                        </div>
                        <div class="course-me ">
                            <h3>POINT２</h3>
                            <p>お客様ご自身では表現しきれなかったご要望を綿密なヒアリングで引き出し課題を明確にします。</p>
                        </div>
                    </div>
                    <div class="course ">
                        <div class="course-img ">
                            <img src="https://m-hand.biz/cms/wp-content/themes/m-hand_inbound/img/service/ico_circle01.png" alt="">
                        </div>
                        <div class="course-me ">
                            <h3>POINT3</h3>
                            <p>お客様ご自身では表現しきれなかったご要望を綿密なヒアリングで引き出し課題を明確にします。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="consulting" 　id = "3">
        <div class="container">
            <div class="consult">
                <div class="consult-img ">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/WEB-MARKETING.png" alt="">
                </div>
                <div class="consult-me ">
                    <h3>ECサイト構築/運営 <span>WEB CONSULTING</span></h3>
                    <p>ECサイト制作/システムカスタマイズ（shopify）/KPI設定/サイト運営代行/モデル撮影/商品撮影</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="consult1">
                <div class="consult1-top ">
                    <h3>あなたのお店を、全ての場所に</h3>
                </div>
                <div class="consult1-me ">
                    <p>お客様の商品やオリジナルブランドを
                        独自のオンラインショップを通じて
                        <span>誰にでもどこにでもお届けすることができます。</span>
                    </p>
                </div>
            </div>
            <div class="consult2">
                <div class="consult2-top ">
                    <h3>POINT<span>!</span></h3>
                </div>
                <div class="con-course">
                    <div class="course ">
                        <div class="course-img ">
                            <img src="https://m-hand.biz/cms/wp-content/themes/m-hand_inbound/img/service/ico_circle01.png" alt="">
                        </div>
                        <div class="course-me ">
                            <h3>POINT１</h3>
                            <p>お客様ご自身では表現しきれなかったご要望を綿密なヒアリングで引き出し課題を明確にします。</p>
                        </div>
                    </div>
                    <div class="course ">
                        <div class="course-img ">
                            <img src="https://m-hand.biz/cms/wp-content/themes/m-hand_inbound/img/service/ico_circle01.png" alt="">
                        </div>
                        <div class="course-me ">
                            <h3>POINT２</h3>
                            <p>お客様ご自身では表現しきれなかったご要望を綿密なヒアリングで引き出し課題を明確にします。</p>
                        </div>
                    </div>
                    <div class="course  ">
                        <div class="course-img ">
                            <img src="https://m-hand.biz/cms/wp-content/themes/m-hand_inbound/img/service/ico_circle01.png" alt="">
                        </div>
                        <div class="course-me ">
                            <h3>POINT３</h3>
                            <p>お客様ご自身では表現しきれなかったご要望を綿密なヒアリングで引き出し課題を明確にします。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="consulting" 　id = "4">
        <div class="container">
            <div class="consult">
                <div class="consult-me ">
                    <h3>WEBマーケティング/運用<span><br>WEB CONSULTING</span></h3>
                    <p>ターゲティング/戦略/インフルエンサーマーケティング/SNS広告/GDN/YDN広告/リスティング広告/DSP広告/ユーザビリティ調査/ヒューリスティック評価/</p>
                </div>
                <div class="consult-img ">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/EC-SITE-CONSTRUCTION.png" alt="">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="consult1">
                <div class="consult1-top ">
                    <h3>「だれに」「どこで」「どう伝えるか」</h3>
                </div>
                <div class="consult1-me ">
                    <p><span>デジタル広告の重要性が非常に高まっている今。</span>インターネット上でユーザーを集める為の仕組みづくりを提供します。</p>
                </div>
            </div>
            <div class="consult2">
                <div class="consult2-top ">
                    <h3>POINT<span>!</span></h3>
                </div>
                <div class="con-course">
                    <div class="course ">
                        <div class="course-img ">
                            <img src="https://m-hand.biz/cms/wp-content/themes/m-hand_inbound/img/service/ico_circle01.png" alt="">
                        </div>
                        <div class="course-me ">
                            <h3>POINT１</h3>
                            <p>お客様ご自身では表現しきれなかったご要望を綿密なヒアリングで引き出し課題を明確にします。</p>
                        </div>
                    </div>
                    <div class="course ">
                        <div class="course-img ">
                            <img src="https://m-hand.biz/cms/wp-content/themes/m-hand_inbound/img/service/ico_circle01.png" alt="">
                        </div>
                        <div class="course-me ">
                            <h3>POINT２</h3>
                            <p>お客様ご自身では表現しきれなかったご要望を綿密なヒアリングで引き出し課題を明確にします。</p>
                        </div>
                    </div>
                    <div class="course ">
                        <div class="course-img ">
                            <img src="https://m-hand.biz/cms/wp-content/themes/m-hand_inbound/img/service/ico_circle01.png" alt="">
                        </div>
                        <div class="course-me ">
                            <h3>POINT３</h3>
                            <p>お客様ご自身では表現しきれなかったご要望を綿密なヒアリングで引き出し課題を明確にします。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="consulting" 　id = "5">
        <div class="container">
            <div class="consult">
                <div class="consult-me">
                    <h3>クリエイティブ制作 <span>WEB CONSULTING</span></h3>
                    <p>パンフレット・カタログ制作/ユニフォームデザイン/コンテンツ制作</p>
                </div>
                <div class="consult-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/CREATIVE.png" alt="">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="consult1">
                <div class="consult1-top">
                    <h3>創造がビジネスを加速させる</h3>
                </div>
                <div class="consult1-me">
                    <p><span>ユーザーのココロと行動を変化させ,
                    お客様のブランドが 人々の記憶に深く刻まれるような
                    "伝わる"クリエイティブを制作します。
                    </span></p>
                </div>
            </div>
            <div class="consult2">
                <div class="consult2-top">
                    <h3>POINT<span>!</span></h3>
                </div>
                <div class="con-course">
                    <div class="course">
                        <div class="course-img">
                            <img src="https://m-hand.biz/cms/wp-content/themes/m-hand_inbound/img/service/ico_circle01.png" alt="">
                        </div>
                        <div class="course-me">
                            <h3>POINT１</h3>
                            <p>お客様ご自身では表現しきれなかったご要望を綿密なヒアリングで引き出し課題を明確にします。</p>
                        </div>
                    </div>
                    <div class="course">
                        <div class="course-img">
                            <img src="https://m-hand.biz/cms/wp-content/themes/m-hand_inbound/img/service/ico_circle01.png" alt="">
                        </div>
                        <div class="course-me">
                            <h3>POINT２</h3>
                            <p>お客様ご自身では表現しきれなかったご要望を綿密なヒアリングで引き出し課題を明確にします。</p>
                        </div>
                    </div>
                    <div class="course">
                        <div class="course-img">
                            <img src="https://m-hand.biz/cms/wp-content/themes/m-hand_inbound/img/service/ico_circle01.png" alt="">
                        </div>
                        <div class="course-me">
                            <h3>POINT３</h3>
                            <p>お客様ご自身では表現しきれなかったご要望を綿密なヒアリングで引き出し課題を明確にします。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="consulting" 　id = "6">
        <div class="container">
            <div class="consult">
                <div class="consult-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/SYSTEM-DEVELOPMENT.png" alt="">
                </div>
                <div class="consult-me">
                    <h3>システム開発 <span>WEB CONSULTING</span></h3>
                    <p>社内ツール改善/システム選定/サーバー選定/脆弱性診断</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="consult1">
                <div class="consult1-top">
                    <h3>「効率」から「創造」へ</h3>
                </div>
                <div class="consult1-me">
                    <p><span>顧客管理、営業管理システムといった
                        ITの導入により業務を効率化し、新たな
                        ビジネスチャンスを創造します。</span></p>
                </div>
            </div>
            <div class="consult2">
                <div class="consult2-top">
                    <h3>POINT<span>!</span></h3>
                </div>
                <div class="con-course">
                    <div class="course">
                        <div class="course-img">
                            <img src="https://m-hand.biz/cms/wp-content/themes/m-hand_inbound/img/service/ico_circle01.png" alt="">
                        </div>
                        <div class="course-me">
                            <h3>POINT１</h3>
                            <p>お客様ご自身では表現しきれなかったご要望を綿密なヒアリングで引き出し課題を明確にします。</p>
                        </div>
                    </div>
                    <div class="course">
                        <div class="course-img">
                            <img src="https://m-hand.biz/cms/wp-content/themes/m-hand_inbound/img/service/ico_circle01.png" alt="">
                        </div>
                        <div class="course-me">
                            <h3>POINT２</h3>
                            <p>お客様ご自身では表現しきれなかったご要望を綿密なヒアリングで引き出し課題を明確にします。</p>
                        </div>
                    </div>
                    <div class="course">
                        <div class="course-img">
                            <img src="https://m-hand.biz/cms/wp-content/themes/m-hand_inbound/img/service/ico_circle01.png" alt="">
                        </div>
                        <div class="course-me">
                            <h3>POINT３</h3>
                            <p>お客様ご自身では表現しきれなかったご要望を綿密なヒアリングで引き出し課題を明確にします。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<script type="text/javascript">
		jQuery(function(){
			var prm = location.search;
			
			if(prm == "?id=1"){
				var scroll = 690;
			}
			if(prm == "?id=2"){
				var scroll = 2050;
			}
			if(prm == "?id=3"){
				var scroll = 3320;
			}
			if(prm == "?id=4"){
				var scroll = 4600;
			}
			if(prm == "?id=5"){
				var scroll = 5900;
			}
			if(prm == "?id=6"){
				var scroll = 7200;
			}
			jQuery(window).scrollTop(scroll);				
			
		});
	</script>
    
</body>
<footer>
    <div class="footer">
        <p>株式会社open store</p>
    </div>
</footer>

</html>