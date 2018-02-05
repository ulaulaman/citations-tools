<?php
/*
Plugin Name: Citations tools
Description: The plugin add some shortcodes add a link to a paper using the doi code or to resolve doi code and publish a full citation apa formatted.
Version: 0.2.6.1
Author: Gianluigi Filippelli
Author URI: http://dropseaofulaula.blogspot.it/
Plugin URI: https://github.com/ulaulaman/citations-tools
License: GPLv2 or later
*/
/* ------------------------------------------------------ */
# ---------------------------------------------------------

# doi
add_shortcode('ctdoi', 'ctdoi');

 function ctdoi ($atts, $content = null) {

   extract(
      shortcode_atts(
         array( 
		'code' => null
	 ),
         $atts
      )
   );

   $link = '<a href="https://dx.doi.org/'.$code.'/" target="doi">'.$content.'</a>';

   return $link;
}

# doi resolve
add_shortcode('ctdoiresolve', 'ctdoiresolve');

 function ctdoiresolve ($atts, $content = null) {

  extract(
      shortcode_atts(
         array( 
		'code' => null,
                'arxiv' => null,
                'pdfurl' => null,
                'archiveurl' => null
	 ),
         $atts
      )
   );

   $fullCitation = null;
   $getfile = 'https://search.crossref.org/dois?sort=score&page=1&rows=1&q='.$code;
   $jsondata = file_get_contents($getfile);
   $array = json_decode($jsondata,true);
   $item=$array[0];
   $doi = $item['doi'];
   $coins = $item['coins'];
   $fullCitation =$item['fullCitation'];

   $citation = '<p>'.$fullCitation.' doi:<a href="https://dx.doi.org/'.$code.'" target="doi">'.$code.'</a>';

   if ( $arxiv <> null )
   {$citation = $citation.' (<a href="https://arxiv.org/abs/'.$arxiv.'" target="arxiv">arXiv</a>)';}
   else
   {$citation = $citation;}

   if ( $pdfurl <> null )
   {$citation = $citation.' (<a href="'.$pdfurl.'" target="pdf">pdf</a>)';}
   else
   {$citation = $citation;}

   if ( $archiveurl <> null )
   {$citation = $citation.' (<a href="'.$archiveurl.'" target="archive">archive.org</a>)';}
   else
   {$citation = $citation;}

   $results = $citation.'</p>';

   return $results;
}
/* ------------------------------------------------------ */
