<?php
include'db.php';
mysql_query("CREATE TABLE IF NOT EXISTS `comment` (
  `commentid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `content` varchar(300) NOT NULL,
  `comsubid` int(11) NOT NULL,
  `images` varchar(30) NOT NULL,
  PRIMARY KEY (`commentid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;");
		$name=$_POST['name'];
		$content=$_POST['content'];
		$commentid=$_POST['commentid'];
		$images='http://www.gravatar.com/avatar.php';
		mysql_query("INSERT INTO comment(name, content, images, comsubid)VALUES('$name', '$content', '$images', '$commentid')");
header('Location:Comment.php');
?>