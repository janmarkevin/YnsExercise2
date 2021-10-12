<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Seisaku</title>
    <meta name="description" content="Seisaku" />
    <link rel="stylesheet" href="<?=get_template_directory_uri() ?> /style.css" />
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script><script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> <![endif]-->
</head>
<body>
    <header class="header">
        <div class="header__wrapper">
            <div class="header__logo-container">
                <div class="logo">
                    <span class="logo__text">ホームページ制作は豊富な実績のアップワード</span>
                    <a href="#" class="logo__img-wrapper" title="Yns">
                        <img src="<?=get_template_directory_uri() ?>/img/logo.png" alt="logo" class="logo__img">
                    </a>
                </div>
            </div>
            <div class="header__links">
                <div class="header__btn">
                    <button class="btn">
                        <img src="<?=get_template_directory_uri() ?>/img/tele.png" alt="Telephone" class="btn__icon btn__icon--header-tele">
                        <span class="btn__text btn__text--larger">03-5826-4652</span>
                        <br>
                        <span class="btn__text btn__text--small">平日受付時間 午前9:00～午後18:00</span>
                    </button>
                    <button class="btn btn--header-mail">
                        <img src="<?=get_template_directory_uri() ?>/img/mail.png" alt="main" class="btn__icon btn__icon--header-mail">
                        <span class="btn__text">メールでお問い合わせ</span>
                    </button>
                </div>
                <div class="header__nav-container">
                    <nav class="nav">
                        <ul class="nav__list">
                            <li class="nav__item">
                                <a href="#" class="nav__link" title="Home">
                                    <img src="<?=get_template_directory_uri() ?>/img/Asset3.png" alt="Home Icon">
                                </a>
                            </li>
                            <li class="nav__item">
                                <a href="#" class="nav__link" title="Service">Service</a>
                            </li>
                            <li class="nav__item">
                                <a href="#" class="nav__link" title="Other">Other</a>
                            </li>
                            <li class="nav__item">
                                <a href="#" class="nav__link" title="Plan">Plan</a>
                            </li>
                            <li class="nav__item">
                                <a href="#" class="nav__link" title="Support">Support</a>
                            </li>
                            <li class="nav__item">
                                <a href="#" class="nav__link" title="Company">Company</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="header__mobile">
                <div class="header__mobile-wrapper">
                    <div class="header__mobile-line">&nbsp;</div>
                    <span class="header__mobile-title">Menu</span>
                </div>
            </div>
        </div>
    </header>