<?php
/*
Template Name: service.php
*/
?>

<!DOCTYPE html>
<html>

<head>
    <title>株式会社 OPEN STORE</title>
    <?php get_header(); ?> 
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/stylesheet.css" type="text/css" />
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

    <div class="consulting" id="id1">
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





    <div class="consulting" id="id2">
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
    <div class="consulting" id="id3">
        <div class="container">
            <div class="consult">
                <div class="consult-img ">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/WEB-MARKETING.png" alt="">
                </div>
                <div class="consult-me ">
                    <h3>ECサイト構築/運営 <span>WEB CONSULTING</span></h3>
                    <p><a class="ec_site">ECサイト制作</a>/<a class="system_custom">システムカスタマイズ</a>/<a class="kpi_setting">KPI設定</a>/<a class="site_operation">サイト運営代行</a>/<a class="model_photograph">モデル撮影</a>/<a class="product_photograph">商品撮影</a></p>

                    <div class = "subbox" id = "ec_site" style="display:none; background-color:#1abc9c;">
                        <h3>ECサイト制作</h3>
                        <p>
                        </p>
                    </div>

                    <div class = "subbox" id = "system_custom" style="display:none; background-color:#1abc9c;">
                        <h3>システムカスタマイズ</h3>
                        <p>
                        </p>
                    </div>

                    <div class = "subbox" id = "kpi_setting" style="display:none; background-color:#1abc9c;">
                        <h3>KPI設定</h3>
                        <p>
                        KPIとは、Key Performance Indicatorの略称で、「重要業績評価指数」と訳されています。</br>
                        KPIは、最終目標を達成するために必要な要因を幾つか洗い出し、</br>
                        目標達成に向かって順調に進んでいるかを点検するために設ける中間指標で、</br>
                        具体的な数値で表したものです。</br>
                        またKPIはただ設定するだけではなく、<br>
                        PDCA（Plan:計画、Do：実行、Check：評価、Action：改善）サイクルで行うことが必要です。</br>
                        そしてこれを1回で終わらせないで何回も続けて行うことが重要ですので、一連の流れが定着するよう支援します。
                        </p>
                    </div>

                    <div class = "subbox" id = "site_operation" style="display:none; background-color:#1abc9c;">
                        <h3>サイト運営代行</h3>
                        <p>
                        </p>
                    </div>

                    <div class = "subbox" id = "model_photograph" style="display:none; background-color:#1abc9c;">
                        <h3>モデル撮影</h3>
                        <p>
                        </p>
                    </div>

                    <div class = "subbox" id = "product_photograph" style="display:none; background-color:#1abc9c;">
                        <h3>商品撮影</h3>
                        <p>
                        </p>
                    </div>

                    <script type="text/javascript">
                        $(function() {
                        
                            // ec_site
                            jQuery('.ec_site' ).mouseover(function() {
                                jQuery('#ec_site').slideDown(300);
                            });
                            jQuery('.ec_site').mouseout(function() {
                                jQuery('#ec_site').slideUp(300);
                            });

                            //system_custom
                            jQuery('.system_custom' ).mouseover(function() {
                                jQuery('#system_custom').slideDown(300);
                            });
                            jQuery('.system_custom').mouseout(function() {
                                jQuery('#system_custom').slideUp(300);
                            });

                            //kpi_setting
                            jQuery('.kpi_setting' ).mouseover(function() {
                                jQuery('#kpi_setting').slideDown(300);
                            });
                            jQuery('.kpi_setting').mouseout(function() {
                                jQuery('#kpi_setting').slideUp(300);
                            });

                            //site_operation
                            jQuery('.site_operation' ).mouseover(function() {
                                jQuery('#site_operation').slideDown(300);
                            });
                            jQuery('.site_operation').mouseout(function() {
                                jQuery('#site_operation').slideUp(300);
                            });
                            
                            //model_photograph
                            jQuery('.model_photograph' ).mouseover(function() {
                                jQuery('#model_photograph').slideDown(300);
                            });
                            jQuery('.model_photograph').mouseout(function() {
                                jQuery('#model_photograph').slideUp(300);
                            });

                            //product_photograph
                            jQuery('.product_photograph' ).mouseover(function() {
                                jQuery('#product_photograph').slideDown(300);
                            });
                            jQuery('.product_photograph').mouseout(function() {
                                jQuery('#product_photograph').slideUp(300);
                            });

                        });
                    </script>


                    </br>
                    <p class="" style="font-size:1.1rem; font-weight: bold;">ECサイト構築/運営とは</p>
                    </br>
                    <p class="" style="font-size:0.9rem;">
                    実店舗を持っているがWEBでも販売したい、すでにWEBで商品を売っているが自社ショップを一新したいなど様々なご要望を伺い、</br>
                    お客様にあった最適なECサイト構築プランをご提案します。</br>
                    国外EC・国内ECの構築、運営代行をワンストップでサポートしています。</br>
                    ECサイト運営に必要な構築からブランディング、SEO対策、運用、分析改善、構築・カスタマイズ、オンラインEC決済、販促、マーケティング、SNS運用など幅広く対応しています。</br>
                    お客様の商品やオリジナルブランドを独自のオンラインショップを通じて日本中、世界中のユーザーに届けます</br>
                    </p>

                </div>
            </div>
        </div>
        <div class="container">
            <div class="consult1">
                <div class="consult1-top ">
                    <h3>あなたのお店を、全ての場所に</h3>
                </div>
                <div class="consult1-me " style="text-align:center;">
                    <p>お客様の商品やオリジナルブランドを独自のオンラインショップを通じて</br>
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
    <div class="consulting" id="id4">
        <div class="container">
            <div class="consult">
                <div class="consult-me ">
                    <h3>WEBマーケティング/運用<span><br>WEB CONSULTING</span></h3>
                    <p>
                    <a class="targeting">ターゲティング戦略</a>
                    /
                    <a class="influencer_marketing">インフルエンサーマーケティング</a>
                    /
                    <a class="sns_advertising">SNS広告</a>
                    /
                    <a class="gdn_ydn_advertising">GDN・YDN広告</a>
                    /
                    <a class="listing_advertising">リスティング広告</a>
                    /
                    <a class="dsp_advertising">DSP広告</a>
                    /
                    <a class="ssability_survey">ユーザビリティ調査</a>
                    /
                    <a class="heuristic_evaluation">ヒューリスティック評価</a>
                    </p>

                    <div class = "subbox" id = "targeting" style="display:none; background-color:#3498db;">
                        <h3>ターゲティング戦略</h3>
                        <p>
                        6R</br>
                        &nbsp;&nbsp;・有効な市場規模</br>
                        &nbsp;&nbsp;・競合状況</br>
                        &nbsp;&nbsp;・成長性</br>
                        &nbsp;&nbsp;・波及効果</br>
                        &nbsp;&nbsp;・到達可能性</br>
                        &nbsp;&nbsp;・測定可能性</br>
                        を用いて、STP分析(セグメンテーション、ターゲティング、ポジショニング)をします。</br>
                        </p>
                    </div>

                    <div class = "subbox" id = "influencer_marketing" style="display:none; background-color:#3498db;">
                        <h3>インフルエンサーマーケティング</h3>
                        <p>
                        主にSNS(Instagram、Twitter、Facebook等)で大きな影響力をもつ</br>
                        インフルエンサーにブランドの製品やサービスを紹介してもらい、</br>
                        消費者の態度変容や行動変容を促すコミュニケーション型マーケティング手法になります。</br>
                        </p>
                    </div>

                    <div class = "subbox" id = "sns_advertising" style="display:none; background-color:#3498db;">
                        <h3>SNS広告</h3>
                        <p>
                        SNS広告とはSNS(Instagram、Twitter、Facebook等)を露出媒体とした広告です。</br>
                        Web上での集客や認知拡大が売上に直結する今、</br>
                        セグメントやターゲティングが細かく設定でき、</br>
                        より多くの潜在顧客にリーチできるSNS広告は必須となります。</br>
                        </p>
                    </div>

                    <div class = "subbox" id = "gdn_ydn_advertising" style="display:none; background-color:#3498db;">
                        <h3>GDN・YDN広告</h3>
                        <p>
                        GDN(Googleディスプレイネットワーク)</br>
                        YDN(Yahooディスプレイネットワーク)</br>
                        上記を用いたディスプレイ広告(サイト閲覧時に画像・動画形式で広告が表示される広告)になります。</br>
                        </p>
                    </div>

                    <div class = "subbox" id = "listing_advertising" style="display:none; background-color:#3498db;">
                        <h3>リスティング広告</h3>
                        <p>
                        リスティング広告とは、検索エンジン(Google、Yahoo!)の検索結果に連動して表示される検索連動型広告です。</br>
                        特定のキーワードに対して広告を表示させることができ、</br>
                        そのキーワードをユーザーが検索している関心が高いときに広告が表示されるため、</br>
                        コンバージョン率が高くなりやすいのが特徴です。</br>
                        </p>
                    </div>


                    <div class = "subbox" id = "dsp_advertising" style="display:none; background-color:#3498db;">
                        <h3>DSP広告</h3>
                        <p>
                        DSP広告は、DSP(広告主側)、SSP(媒体側)それぞれが持つユーザーの行動履歴などの膨大なデータをもとに、</br>
                        自動的に広告の最適化と費用対効果を上げる仕組みであるため、</br>
                        面(とにかく幅広い層)ではなく人(ピンポイント)にアプローチできるのが特徴です。</br>
                        </p>
                    </div>

                    <div class = "subbox" id = "ssability_survey" style="display:none; background-color:#3498db;">
                        <h3>ユーザビリティ調査</h3>
                        <p>
                        ユーザビリティ調査とは、製品やWEBサイト、スマートフォンのアプリなどの使い勝手の良さを評価する調査です。</br>
                        競合とのサービス比較やサイト・アプリリニューアルの際の課題の洗い出しや方向性の指針を明確にすることが可能になります。</br>
                        </p>
                    </div>

                    <div class = "subbox" id = "heuristic_evaluation" style="display:none; background-color:#3498db;">
                        <h3>ヒューリスティック評価</h3>
                        <p>
                        ヒューリスティック評価とは、10の経験則</br>
                        &nbsp;&nbsp;・システムの状態の把握</br>
                        &nbsp;&nbsp;・利用環境に適合したシステムの作成</br>
                        &nbsp;&nbsp;・ユーザーに操作の主導権と自由度の付与</br>
                        &nbsp;&nbsp;・一貫性を保つ</br>
                        &nbsp;&nbsp;・エラーの防止</br>
                        &nbsp;&nbsp;・シンプルなデザイン</br>
                        &nbsp;&nbsp;・柔軟性と効率性</br>
                        &nbsp;&nbsp;・最小限</br>
                        &nbsp;&nbsp;・サポート</br>
                        &nbsp;&nbsp;・ヘルプ</br>
                        に基づいてユーザビリティを評価し、 UI 上の問題を発見できます。</br>
                        </p>
                    </div>



                    <script type="text/javascript">
                        $(function() {
                        
                            // targeting
                            jQuery('.targeting' ).mouseover(function() {
                                jQuery('#targeting').slideDown(300);
                            });
                            jQuery('.targeting').mouseout(function() {
                                jQuery('#targeting').slideUp(300);
                            });

                            //influencer_marketing
                            jQuery('.influencer_marketing' ).mouseover(function() {
                                jQuery('#influencer_marketing').slideDown(300);
                            });
                            jQuery('.influencer_marketing').mouseout(function() {
                                jQuery('#influencer_marketing').slideUp(300);
                            });

                            //sns_advertising
                            jQuery('.sns_advertising' ).mouseover(function() {
                                jQuery('#sns_advertising').slideDown(300);
                            });
                            jQuery('.sns_advertising').mouseout(function() {
                                jQuery('#sns_advertising').slideUp(300);
                            });

                            //gdn_ydn_advertising
                            jQuery('.gdn_ydn_advertising' ).mouseover(function() {
                                jQuery('#gdn_ydn_advertising').slideDown(300);
                            });
                            jQuery('.gdn_ydn_advertising').mouseout(function() {
                                jQuery('#gdn_ydn_advertising').slideUp(300);
                            });
                            
                            //listing_advertising
                            jQuery('.listing_advertising' ).mouseover(function() {
                                jQuery('#listing_advertising').slideDown(300);
                            });
                            jQuery('.listing_advertising').mouseout(function() {
                                jQuery('#listing_advertising').slideUp(300);
                            });

                            //dsp_advertising
                            jQuery('.dsp_advertising' ).mouseover(function() {
                                jQuery('#dsp_advertising').slideDown(300);
                            });
                            jQuery('.dsp_advertising').mouseout(function() {
                                jQuery('#dsp_advertising').slideUp(300);
                            });

                            //ssability_survey
                            jQuery('.ssability_survey' ).mouseover(function() {
                                jQuery('#ssability_survey').slideDown(300);
                            });
                            jQuery('.ssability_survey').mouseout(function() {
                                jQuery('#ssability_survey').slideUp(300);
                            });

                            //heuristic_evaluation
                            jQuery('.heuristic_evaluation' ).mouseover(function() {
                                jQuery('#heuristic_evaluation').slideDown(300);
                            });
                            jQuery('.heuristic_evaluation').mouseout(function() {
                                jQuery('#heuristic_evaluation').slideUp(300);
                            });
                        });
                    </script>

                    </br>
                    <p class="" style="font-size:1.1rem; font-weight: bold;">WEBマーケティング/運用とは</p>
                    </br>
                    <p class="" style="font-size:0.9rem;">
                    デジタル領域のマーケティングを中心に、データ解析と効果計測に基づく実践的マーケティングの立案から実施・コンサルティングまで柔軟に対応いたします。</br>
                    また、ブランド構築やインフルエンサー・メディア・広告の運用など、幅広い領域のソリューションでお客様の事業を一貫してサポートいたします。</br>
                    Webサイト運営に不可欠な各種広告の運用やデータ解析を通じてマーケティング活動を支援。</br>
                    また販売パートナー開拓を通じた集客・販売活動支援など幅広くお手伝いしています
                    </p>



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
                <div class="consult1-me " style="text-align:center;">
                    <p><span>デジタル広告の重要性が非常に高まっている今</br></span>インターネット上でユーザーを集める為の仕組みづくりを提供します。</p>
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
    <div class="consulting" id="id5">
        <div class="container">
            <div class="consult">
                <div class="consult-me">
                    <h3>クリエイティブ制作 <span>WEB CONSULTING</span></h3>
                    <p>
                    <a class="pamphlet">パンフレット・カタログ制作</a>
                    /
                    <a class="uniform">ユニフォームデザイン
                    /
                    <a class="content_creation">コンテンツ制作</a>
                    </p>

                    <div class = "subbox" id = "pamphlet" style="display:none; background-color:#9b59b6;">
                        <h3>パンフレット・カタログ制作</h3>
                        <p>
                        「営業支援」「新商品紹介」「サービス紹介」「総合カタログ」「ブランディング」といった目的や、</br>
                        「BtoB」「BtoC」「商談ツール」「店頭での陳列」「イベント・展示会での配布」「DM」など、</br>
                        それぞれの用途を明確にし、作成します。
                        </p>
                    </div>

                    <div class = "subbox" id = "uniform" style="display:none; background-color:#9b59b6;">
                        <h3>ユニフォームデザイン</h3>
                        <p>
                        ユニフォームは着ている事で私達見る側に対して安心感を与える効果があり、</br>
                        同じ服を着用する事で連帯意識を持ち仕事の精度が上がる、</br>
                        仕事の機能性を上げるなどの役割も果たす、</br>
                        そのようなデザインを提案します。
                        </p>
                    </div>

                    <div class = "subbox" id = "content_creation" style="display:none; background-color:#9b59b6;">
                        <h3>コンテンツ制作</h3>
                        <p>
                        音声と映像の組み合わせによって受ける印象というのが大きく変化し、同じ映像だとしても同時に流す音声によって動画コンテンツの印象が変わります。</br>
                        このように、音声と映像をセットで用いられる動画コンテンツならではの強みがあり、印象付けを強めたり、世界観を表現したりユーザーに与える印象をコントロールしたりといった施策が展開できます。
                        </p>
                    </div>

                    <script type="text/javascript">
                        $(function() {
                        
                            // pamphlet
                            jQuery('.pamphlet' ).mouseover(function() {
                                jQuery('#pamphlet').slideDown(300);
                            });
                            jQuery('.pamphlet').mouseout(function() {
                                jQuery('#pamphlet').slideUp(300);
                            });

                            //uniform
                            jQuery('.uniform' ).mouseover(function() {
                                jQuery('#uniform').slideDown(300);
                            });
                            jQuery('.uniform').mouseout(function() {
                                jQuery('#uniform').slideUp(300);
                            });

                            //content_creation
                            jQuery('.content_creation' ).mouseover(function() {
                                jQuery('#content_creation').slideDown(300);
                            });
                            jQuery('.content_creation').mouseout(function() {
                                jQuery('#content_creation').slideUp(300);
                            });
                        });
                    </script>

                    </br>
                    <p class="" style="font-size:1.1rem; font-weight: bold;">クリエイティブ制作とは</p>
                    </br>
                    <p class="" style="font-size:0.9rem;">
                    ブランドのネーミングからブランドスローガンやステートメントのコピーライティング、ブランドイメージにふさわしい商品やモデルの撮影、ブランドサイトやランディングページのWebデザインなど、ブランドを具現化するために必要なクリエイティブを幅広く提供しています。</br>
                    たったひとつのロゴやパッケージだとしても、ブランドのビジョンや文脈にふさわしいあり方を目指してデザインに取り組んでいます。</br>
                    その一つひとつの積み重ねが、ターゲットやコミュニティとの繋がりを生み出し、</br>
                    対話のチャンスを広げるブランドを実現させると信じて、クライアントと共に関わる全ての仕事を成功させていきたいと願っています。
                    </p>


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
                <div class="consult1-me"  style="text-align:center;">
                    <p>ユーザーのココロと行動を変化させ、
                    お客様のブランドが </br><span>人々の記憶に深く刻まれるような
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
    <div class="consulting" id="id6">
        <div class="container">
            <div class="consult">
                <div class="consult-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/SYSTEM-DEVELOPMENT.png" alt="">
                </div>
                <div class="consult-me">
                    <h3>システム開発 <span>WEB CONSULTING</span></h3>
                    <p>
                    <a class="in_house_tools">社内ツール改善</a>
                    /
                    <a class="select_system">システム選定</a>
                    /
                    <a class="select_server">サーバー選定</a>
                    /
                    <a class="vulnerability_diagnosis">脆弱性診断</a>
                    </p>

                    <div class = "subbox" id = "in_house_tools" style="display:none; background-color:#696969;">
                        <h3>社内ツール改善</h3>
                        <p>
                        社内で使われるツールを開発・改善することです。</br>
                        社内ツールは、課題発見から解決まで社内で行うからこそ、ユーザーサイドと開発サイドが近く、ビジネスに直結する有効なツールを生み出すことができます。
                        </p>
                    </div>

                    <div class = "subbox" id = "select_system" style="display:none; background-color:#696969;">
                        <h3>システム選定</h3>
                        <p>

                        </p>
                    </div>

                    <div class = "subbox" id = "select_server" style="display:none; background-color:#696969;">
                        <h3>サーバー選定</h3>
                        <p>
                        業務上で利用するシステムは、ビジネスを取り巻く環境の変化や新事業の発足等によって新しいものへと変えるタイミングがやってきます。</br>
                        その際システム選定を成功させるポイントは、現状の業務フローを作成し、業務を可視化することです。</br>
                        そして現状の業務を正しく理解することができれば、現状の業務を改善するためのシステム選定を的確に行うことが可能になります。
                        </p>
                    </div>

                    <div class = "subbox" id = "vulnerability_diagnosis" style="display:none; background-color:#696969;">
                        <h3>脆弱性診断</h3>
                        <p>
                        脆弱性診断とは、ネットワーク・OS・ミドルウェアやWebアプリケーションなどに脆弱性がないか診断することです。</br>
                        脆弱性診断を実施することでネットワーク/サーバ、Webアプリケーションのセキュリティの現状を確認することで攻撃者からの悪意ある攻撃や情報漏えい事故などのリスクを未然に防ぐことができます。
                        </p>
                    </div>

                    <script type="text/javascript">
                        $(function() {
                        
                            // in_house_tools
                            jQuery('.in_house_tools' ).mouseover(function() {
                                jQuery('#in_house_tools').slideDown(300);
                            });
                            jQuery('.in_house_tools').mouseout(function() {
                                jQuery('#in_house_tools').slideUp(300);
                            });

                            //select_system
                            jQuery('.select_system' ).mouseover(function() {
                                jQuery('#select_system').slideDown(300);
                            });
                            jQuery('.select_system').mouseout(function() {
                                jQuery('#select_system').slideUp(300);
                            });

                            //select_server
                            jQuery('.select_server' ).mouseover(function() {
                                jQuery('#select_server').slideDown(300);
                            });
                            jQuery('.select_server').mouseout(function() {
                                jQuery('#select_server').slideUp(300);
                            });

                            //vulnerability_diagnosis
                            jQuery('.vulnerability_diagnosis' ).mouseover(function() {
                                jQuery('#vulnerability_diagnosis').slideDown(300);
                            });
                            jQuery('.vulnerability_diagnosis').mouseout(function() {
                                jQuery('#vulnerability_diagnosis').slideUp(300);
                            });
                        });
                    </script>

                    </br>
                    <p class="" style="font-size:1.1rem; font-weight: bold;">システム開発とは</p>
                    </br>
                    <p class="" style="font-size:0.9rem;">
                    事業戦略や業務プロセスがITと不可分となっている中、ITの活用力は競争力に大きく 影響します。</br>
                    幅広い業種を対象に、IT戦略の策定やITを活用した業務改革の計画・実行支援、標準アーキテクチャの確立など、</br>
                    企業のIT活用力の向上を支援する多様なサービスを提供しています。</br>
                    業務とITの両方に精通したコンサルタントが、お客様と一体となって、IT活用力の向上に取り組んでいます。
                    </p>

                </div>
            </div>
        </div>
        <div class="container">
            <div class="consult1">
                <div class="consult1-top">
                    <h3>「効率」から「創造」へ</h3>
                </div>
                <div class="consult1-me" style="text-align:center;">
                    <p>顧客管理、営業管理システムといったITの導入により業務を効率化し、</br>
                    <span>新たなビジネスチャンスを創造します。</span></p>
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
				var scroll = jQuery('#id1').offset().top;
			}
			if(prm == "?id=2"){
				var scroll = jQuery('#id2').offset().top;
			}
			if(prm == "?id=3"){
				var scroll = jQuery('#id3').offset().top;
			}
			if(prm == "?id=4"){
				var scroll = jQuery('#id4').offset().top;
			}
			if(prm == "?id=5"){
				var scroll = jQuery('#id5').offset().top;
			}
			if(prm == "?id=6"){
				var scroll = jQuery('#id6').offset().top;
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