-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2014 at 07:26 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `weskola_clone`
--

-- --------------------------------------------------------

--
-- Table structure for table `text_page`
--

CREATE TABLE IF NOT EXISTS `text_page` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` int(10) unsigned NOT NULL,
  `button_name` char(32) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `text_page`
--

INSERT INTO `text_page` (`id`, `slug`, `position`, `button_name`, `title`, `short_description`, `content`) VALUES
(1, 'par-lapu', 3, 'Par skolu', 'Par skolu', 'Webskola — profesionālās izglītības iestāde,<br>\r\norientēta uz web izstrādi un dizainu.', '      <div class="article">\r\n <div class="container article-container">\r\n            <div class="article-intro">\r\n                <p>\r\n                    <strong>Webskola</strong> — tā ir profesionālās izglītības mācību iestāde, kas piedāvā dažādu izglītības līmeņu programmas — sākot ar neformālām \r\n                    programmām līdz profesionālajai kvalifikācijai. Webskola specializējas izglītības sniegšanā visiem tiem, kas vēlas iegūt \r\n                    profesionālas iemaņas dizaina un web izstrādes nozarē, kā arī kvalifikācijas celšanā strādājošajiem dizaineriem un programmētājiem.\r\n                </p>\r\n            </div>\r\n\r\n            <div class="article-bodytext">\r\n                <p>\r\n                    Skolas mācību programmas tiek gatavotas katram pasniedzējam atsevišķi, balstoties uz darba pieredzi, kas iegūta savā \r\n                    specializācijā: dizains, datorgrafika, programmēšana, lietotāja interfeiss, u.c. Šīs programmas mēs dēvējam par «autorprogrammām». \r\n                    Katrs autors programmas saturā ieliek pašu labāko, ko vien var iemācīt nozarē, kurā strādā ikdienā. Autors netiek ierobežots ne \r\n                    mācību laika, ne metožu, ne izmantojamo tehnoloģiju ziņā.\r\n                </p>\r\n\r\n\r\n                <p>\r\n                    Webskola kursi ir strikti sadalīti pēc specializācijas: datorgrafika, illustrācija, grafiskais dizains, web dizains, \r\n                    programmēšana u.c. Jebkurš profesionālis savā nozarē (saistīta ar IT un dizainu) ar mūsu palīdzību var organizēt kursu un \r\n                    saņemt nenovērtējamu pieredzi pasniedzēja darbā un komunikācijā ar cilvēkiem, dalīties zināšanās, kā arī «izaudzināt» \r\n                    jaunus profesionāļus, kuri nākotnē var kļūt par kolēģiem.\r\n                </p>\r\n\r\n                <h2>Bez tam</h2>\r\n\r\n                <p>\r\n                    Profesionālās kvalifikācijas programmas tiek saskaņotas ar Latvijas Republikas Izglītības uz zinātnes ministriju un iziet \r\n                    valsts akreditāciju, kas dod iespēju mūsu skolai izsniegt profesionālās kvalifikācijas diplomus līdz 3. kvalifikācijas \r\n                    līmenim ieskaitot (tehnikuma līmenis).\r\n                </p>\r\n\r\n                <p>\r\n                    Bieži skolas viesi ir profesionālos lokos pazīstami web izstrādātāji, uzņemēji un dizaineri, kas vieslekcijās un \r\n                    meistarklasēs dalās savā pieredzē ar mūsu izglītojamajiem.\r\n                </p>\r\n\r\n                <p>\r\n                    <a href="http://webskola-clone.dev/info/kontakti">Sazinieties ar mums</a> un piedāvājiet jaunu mācību programmu, meistarklasi, semināru vai citu izglītojošu pasākumu \r\n                    un mēs ar prieku ar Jums apspriedīsim sadarbības iespējas.\r\n                </p>\r\n            </div>  \r\n        </div>\r\n</div>'),
(2, 'kontakti', 5, 'Kontakti', 'Kontakti', NULL, '    <div class="article">\r\n        <div class="container article-container">\r\n            <section class="contacts">\r\n                <table>\r\n                    <tbody>\r\n                        <tr>\r\n                            <th>Telefons</th>\r\n                            <td>(+371) 259-00-636</td>\r\n                        </tr>\r\n                        <tr>\r\n                            <th>E-pasts</th>\r\n                            <td><a href="mailto:info@webskola.lv">info@webskola.lv</a></td>\r\n                        </tr>\r\n                        <tr>\r\n                            <th>Adrese</th>\r\n                            <td>Rīga, Lāčplēša iela 87 (namruņa poga - 10), 203.&nbsp;kab.</td>\r\n                        </tr>\r\n                        <tr>\r\n                            <th>Darbalaiks:</th>\r\n                            <td><ul>\r\n                                    <li>darbadienās 9:00—20:00</li>\r\n                                    <li>sestdienās 10:00—14:00</li>\r\n                                </ul></td>\r\n                        </tr>\r\n                    </tbody>\r\n                </table>\r\n            </section>\r\n        </div>\r\n    </div>'),
(3, 'partneri', 4, 'Partneri', 'Partneri', NULL, '<div class="article">\r\n        <div class="container article-container">\r\n            <div class="article-intro">\r\n                <p>\r\n                    Mūsu darbā ir svarīgi patstāvīgi sekot līdzi jaunākajām tendencēm, tādēļ uzturam kontaktus ar web tehnoloģiju un \r\n                    dizaina jomu saistītiem uzņēmumiem, kuri dalās pieredzē un palīdz uzlabot un papildināt mācību programmu saturu, \r\n                    kā arī nodrošina mūsu izglītojamos ar prakses vietām un aktuālajām darba vakancēm.\r\n                </p>\r\n            </div>\r\n        </div>\r\n    </div>\r\n    <div class="article-section">\r\n        <hgroup class="content-header">\r\n            <h2>Galvenie partneri</h2>\r\n        </hgroup>\r\n        <div class="partners-list">\r\n            <a href="http://ambergames.com" style="background-image: url(''/img/thumbs/amber-games-c.png'')" target="_blank"><img src="/img/thumbs/amber-games.png" alt=""></a>\r\n            <a href="http://www.axiomadev.ru" style="background-image: url(''/img/thumbs/axioma-c.png'')" target="_blank"><img src="/img/thumbs/axioma.png" alt=""></a>\r\n            <a href="http://reproto.com/" style="background-image: url(''/img/thumbs/reproto-c.png'')" target="_blank"><img src="/img/thumbs/reproto.png" alt=""></a>\r\n            <a href="http://www.efumo.lv/" style="background-image: url(''/img/thumbs/efumo-c.png'')" target="_blank"><img src="/img/thumbs/efumo.png" alt=""></a>\r\n            <a href="http://arcana.lv/" style="background-image: url(''/img/thumbs/arcana-c.png'')" target="_blank"><img src="/img/thumbs/arcana.png" alt=""></a>\r\n            <a href="" style="background-image: url(''/img/thumbs/domnus-c.png'')" target="_blank"><img src="/img/thumbs/domnus.png" alt=""></a>\r\n            <a href="http://www.gudriem.lv/sakums?lng=lv" style="background-image: url(''/img/thumbs/gudriem-c.jpg'')" target="_blank"><img src="/img/thumbs/gudriem.jpg" alt=""></a>\r\n            <a href="http://www.intechsystems.lv/" style="background-image: url(''/img/thumbs/intech-c.png'')" target="_blank"><img src="/img/thumbs/intech.png" alt=""></a>\r\n            <a href="http://sem.lv/" style="background-image: url(''/img/thumbs/sem-c.jpg'')" target="_blank"><img src="/img/thumbs/sem.jpg" alt=""></a>\r\n        </div>\r\n    </div>\r\n    <div class="article-section">\r\n        <hgroup class="content-header two-rows">\r\n            <h2>Uzņēmumi,<br> \r\n                kuros izglītojamie iziet kvalifikācijas praksi</h2>\r\n        </hgroup>\r\n        <div class="partners-list">\r\n            <a href="" style="background-image: url(''/img/thumbs/aidio-c.png'')" target="_blank"><img src="/img/thumbs/aidio.png" alt=""></a>\r\n            <a href="" style="background-image: url(''/img/thumbs/cherry-c.jpg'')" target="_blank"><img src="/img/thumbs/cherry.jpg" alt=""></a>\r\n            <a href="" style="background-image: url(''/img/thumbs/creative-c.jpg'')" target="_blank"><img src="/img/thumbs/creative.jpg" alt=""></a>\r\n            <a href="" style="background-image: url(''/img/thumbs/fms-c.gif'')" target="_blank"><img src="/img/thumbs/fms.gif" alt=""></a>\r\n        </div>\r\n    </div>');
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
