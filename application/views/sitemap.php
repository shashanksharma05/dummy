<?= '<?xml version="1.0" encoding="UTF-8" ?>' ?>
 
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

<url>
    <loc><?php echo base_url();?></loc>
    <changefreq>daily</changefreq>
    <priority>1.0</priority>
</url>

<url>
  <loc>https://www.companyvakil.com/</loc>
  <lastmod>2018-02-20T07:48:29+00:00</lastmod>
  <priority>1.00</priority>
</url>
<url>
  <loc>https://www.companyvakil.com/private-limited-company</loc>
  <lastmod>2018-02-20T07:48:29+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.companyvakil.com/limited-liability-partnership</loc>
  <lastmod>2018-02-20T07:48:29+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.companyvakil.com/one-person-company</loc>
  <lastmod>2018-02-20T07:48:29+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.companyvakil.com/trademark-registration</loc>
  <lastmod>2018-02-20T07:48:29+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.companyvakil.com/trademark-objection</loc>
  <lastmod>2018-02-20T07:48:29+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.companyvakil.com/trademark-renewal-and-assignment</loc>
  <lastmod>2018-02-20T07:48:29+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.companyvakil.com/copyright-registration</loc>
  <lastmod>2018-02-20T07:48:29+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.companyvakil.com/terms-of-service</loc>
  <lastmod>2018-02-20T07:48:29+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.companyvakil.com/founder-agreement</loc>
  <lastmod>2018-02-20T07:48:29+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.companyvakil.com/employment-contract</loc>
  <lastmod>2018-02-20T07:48:29+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.companyvakil.com/GST-registration</loc>
  <lastmod>2018-02-20T07:48:29+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.companyvakil.com/MSME-registration</loc>
  <lastmod>2018-02-20T07:48:29+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.companyvakil.com/import-export-code</loc>
  <lastmod>2018-02-20T07:48:29+00:00</lastmod>
  <priority>0.80</priority>
</url>

<?php if(!empty($pagelist)) foreach ($pagelist as $key => $value){ ?>
<url>
  <loc><?php echo base_url().$value->name; ?></loc>
  <lastmod><?php echo str_replace(" ", "T", $value->update_time); ?></lastmod>
  <priority>0.80</priority>
</url>
<?php } ?>
</urlset>