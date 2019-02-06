<?php if(empty($news)){ die; }  echo '<?xml version="1.0" encoding="' . $encoding . '"?>' . "\n"; ?>

<rss version="2.0"
    xmlns:dc="http://purl.org/dc/elements/1.1/"
    xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
    xmlns:admin="http://webns.net/mvcb/"
    xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
    xmlns:content="http://purl.org/rss/1.0/modules/content/"
    xmlns:atom="http://www.w3.org/2005/Atom">
 
    <channel>
    	<title><?php echo $feed_name; ?></title>
 
		<link><?php echo $feed_url; ?></link>
		<description><?php echo $page_description; ?></description>
		<dc:language><?php echo $page_language; ?></dc:language>
		<dc:creator><?php echo $creator_email; ?></dc:creator>
		 
		<dc:rights>Copyright <?php echo gmdate("Y", time()); ?></dc:rights>
		<admin:generatorAgent rdf:resource="http://www.codeigniter.com/" />
		<atom:link href="https://www.companyvakil.com/feed" rel="self" type="application/rss+xml" />

		<?php if(!empty($news)) foreach ($news as $key => $value) { ?>
		
			<item>
				<title><?php echo xml_convert(strip_tags($value->title)); ?></title>
				<link><?php echo base_url().$value->name; ?></link>
				<description><![CDATA[ <?php echo strip_tags(str_replace(array("&rsquo;","&nbsp;","&lsquo","&deg","&zwj"),"",$value->description)); ?> ]]> </description>
				<dc:creator>Company Vakil</dc:creator>
				<guid isPermaLink="false"> <?php echo base_url().$value->name; ?> </guid>
				<pubDate><?php $date = strtotime($value->update_time); echo date("l, d M Y H:i:s",$date); ?> +0530 </pubDate>
			</item>

		<?php } ?>

	</channel>
</rss>