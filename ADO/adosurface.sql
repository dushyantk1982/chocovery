CREATE TABLE `file` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `design_cat` varchar(30) NOT NULL,
  `product_code` varchar(30) NOT NULL,
  `name` varchar(255) NOT NULL default 'Untitled.txt',
  `mime` varchar(50) NOT NULL default 'text/plain',
  `size` bigint(20) unsigned NOT NULL default '0',
  `data` mediumblob NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;


CREATE TABLE `gallery` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `gallery_cat` varchar(30) NOT NULL,
  `product_code` varchar(30) NOT NULL,
  `name` varchar(255) NOT NULL default 'Untitled.txt',
  `mime` varchar(50) NOT NULL default 'text/plain',
  `size` bigint(20) unsigned NOT NULL default '0',
  `data` mediumblob NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;
