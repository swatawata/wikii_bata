-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 20, 2021 at 08:03 PM
-- Server version: 5.6.49-log
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sho1111_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `wiki_info`
--

CREATE TABLE `wiki_info` (
  `text_id` int(11) NOT NULL,
  `original_file` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `text_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `text_file` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `text_date` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wiki_info`
--

INSERT INTO `wiki_info` (`text_id`, `original_file`, `text_title`, `text_file`, `text_date`) VALUES
(87, '--OSとは？-/\r<br>\r<br>**OSとはOperating Systemの略で、コンピュータへ指令をはじめソフトの管理などを行うソフトウェアのこと。*/\r<br>**パソコンには必ずOSが入っています。[]OSがないと動かすことはできません*/\r<br>++OSの種類+/\r<br>**主なOSは | Windows macOs Linux android ios | など*/', 'OSとは？', '<h1>OSとは？</h1>\r\r<p>OSとはOperating Systemの略で、コンピュータへ指令をはじめソフトの管理などを行うソフトウェアのこと。</p>\r<p>パソコンには必ずOSが入っています。<br>OSがないと動かすことはできません</p>\r<h2>OSの種類</h2>\r<p>主なOSは | Windows macOs Linux android ios | など</p>', '2021-02-19 20:37:58'),
(88, '--Bluetoothとは？-/\r<br>\r<br>**Bluetooth(ブルートゥース)は近接の無線接続である。[]主にスマートフォンとイヤホンを無線でつなげる際に利用する。*/\r<br>\r<br>**ちなみにBluetoothは「青い歯」ですが、これはデンマーク王ハーラル1世の異名である[]「青歯王」からきている。*/', 'Bluetoothとは？', '<h1>Bluetoothとは？</h1>\r\r<p>Bluetooth(ブルートゥース)は近接の無線接続である。<br>主にスマートフォンとイヤホンを無線でつなげる際に利用する。</p>\r\r<p>ちなみにBluetoothは「青い歯」ですが、これはデンマーク王ハーラル1世の異名である<br>「青歯王」からきている。</p>', '2021-02-19 20:40:10'),
(89, '--Dockerとは？-/\r<br>**Docker(ドッカー)とはDocker Inc.(旧DotCloud社)によって開発されたコンテナ仮想化ツールです。*/\r<br>**本来Dockerには港湾労働者の意味があります[]1台のサーバー上に、複数のサーバーとして利用できる仕組みを構築する方法ができました。[]それが仮想化と呼ばれる技術です。*/\r<br>\r<br>++Dockerの特徴+/\r<br>**軽快さ、そして保存と再利用のしやすさにあります。</p>\r<br>\r<br>\r<br>こんにちは！', 'Dockerとは？', '<h1>Dockerとは？</h1>\r<p>Docker(ドッカー)とはDocker Inc.(旧DotCloud社)によって開発されたコンテナ仮想化ツールです。</p>\r<p>本来Dockerには港湾労働者の意味があります<br>1台のサーバー上に、複数のサーバーとして利用できる仕組みを構築する方法ができました。<br>それが仮想化と呼ばれる技術です。</p>\r\r<h2>Dockerの特徴</h2>\r<p>軽快さ、そして保存と再利用のしやすさにあります。</p>\r\r\rこんにちは！', '2021-02-19 20:41:37'),
(84, '--Wikiとは？-/\r<br>\r<br>**Wikiはハワイ語のwikiwiki(速い)が根源です。[]ブラウザから手軽に記事を作成できるシステムのことを指す総称。*/\r<br>**複数の利用者が共同で記事の編集をすることができる。*/\r<br>**代表的なサービスとしてWikipediaというサービスがある。*/\r<br>\r<br>++更新したよー+/', 'Wikiとは？', '<h1>Wikiとは？</h1>\r\r<p>Wikiはハワイ語のwikiwiki(速い)が根源です。<br>ブラウザから手軽に記事を作成できるシステムのことを指す総称。</p>\r<p>複数の利用者が共同で記事の編集をすることができる。</p>\r<p>代表的なサービスとしてWikipediaというサービスがある。</p>\r\r<h2>更新したよー</h2>', '2021-02-19 20:31:50'),
(86, '--WordPressとは？-/\r<br>\r<br>**WordPress（ワードプレス）とは、サイトの作成やブログの作成などができる[]CMS(コンテンツ管理システム)の1つで、無料のソフトウェアです。*/\r<br>\r<br>**Web関連技術が無い人でもサイト管理や記事投稿ができるため、[]世界中のサイトのおよそ4分の1はWordPressで構築されていると言われています。*/', 'WordPressとは？', '<h1>WordPressとは？</h1>\r\r<p>WordPress（ワードプレス）とは、サイトの作成やブログの作成などができる<br>CMS(コンテンツ管理システム)の1つで、無料のソフトウェアです。</p>\r\r<p>Web関連技術が無い人でもサイト管理や記事投稿ができるため、<br>世界中のサイトのおよそ4分の1はWordPressで構築されていると言われています。</p>', '2021-02-19 20:35:39'),
(99, '--rootユーザとは？-/\r<br>**rootユーザーとはlinux上での管理者という意味。[]windowsでいうsystem administer。*/', 'rootユーザとは？', '<h1>rootユーザとは？</h1>\r<p>rootユーザーとはlinux上での管理者という意味。<br>windowsでいうsystem administer。</p>', '2021-02-19 23:41:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wiki_info`
--
ALTER TABLE `wiki_info`
  ADD PRIMARY KEY (`text_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wiki_info`
--
ALTER TABLE `wiki_info`
  MODIFY `text_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
