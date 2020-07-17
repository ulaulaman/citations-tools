<?php
/*
Plugin Name: Citations tools
Description: Some tools for scientific and editorial bloggers.
Version: 0.3.2
Author: Gianluigi Filippelli
Author URI: http://dropseaofulaula.blogspot.it/
Plugin URI: https://ulaulaman.github.io/citations-tools/
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

   $link = '<a href="https://dx.doi.org/'.$code.'" target="doi">'.$content.'</a>';

   return $link;
}

# doi resolver
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

   $citation = '<div class="paperbox">'.$fullCitation.' doi:<a href="https://dx.doi.org/'.$code.'" target="doi">'.$code.'</a>';

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

   $results = $citation.'</div>';

   return $results;
}

# paperdata
add_shortcode('paperdata', 'paperdata');

 function paperdata ($atts, $content = null) {

  extract(
      shortcode_atts(
         array( 
                'auth' => null,
                'year' => null,
                'title' => null,
                'journal' => null,
                'vol' => null,
                'issue' => null,
                'pages' => null,
		'code' => null,
                'arxiv' => null,
                'pdfurl' => null,
                'archiveurl' => null
	 ),
         $atts
      )
   );
  
  $fullcitation = null;

  if ( $auth <> null )
  {$fullcitation = $fullcitation.$auth;}
  else
  {$fullcitation = $fullcitation;}

  if ( $year <> null )
  {$fullcitation = $fullcitation.', '.$year;}
  else
  {$fullcitation = $fullcitation;}

  if ( $title <> null )
  {$fullcitation = $fullcitation.', '.$title;}
  else
  {$fullcitation = $fullcitation;}

  if ( $journal <> null )
  {$fullcitation = $fullcitation.', <em>'.$journal.'</em>';}
  else
  {$fullcitation = $fullcitation;}

  if ( $vol <> null )
  {$fullcitation = $fullcitation.', vol.'.$vol;}
  else
  {$fullcitation = $fullcitation;}

  if ( $issue <> null )
  {$fullcitation = $fullcitation.', n.'.$issue;}
  else
  {$fullcitation = $fullcitation;}

  if ( $pages <> null )
  {$fullcitation = $fullcitation.', pp. '.$pages;}
  else
  {$fullcitation = $fullcitation;}

  $citation = '<div class="paperbox">'.$fullcitation;

  if ( $code <> null )
  {$citation = $citation.' doi:<a href="https://dx.doi.org/'.$code.'" target="doi">'.$code.'</a>';}
  else
  {$citation = $citation;}

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

  $results = $citation.'</div>';

  return $results;

}
/* ------------------------------------------------------ */
