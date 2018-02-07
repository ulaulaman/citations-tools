=== Citations tools ===
Contributors: ulaulaman
Tags: doi, citations, research, blog, blogging, research blogging, arXiv
Requires at least: 4.8.5
Tested up to: 4.9.3
Requires PHP: 7.0.18
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Some tools for scientific and editorial bloggers.

== Description ==
The plugin add a shortcode in order to link a paper using its doi code. You can also use an other shortcode to resolve doi code and publish a full citation apa formatted. It is also a shortcode for manual citations.

## Link doi

Using the standard for doi link, the plugin introduce a shortcode in order to create a link to a paper provided by doi.
**How to use the shortcode**:

[ctdoi code="..."]Title of the paper[/doi]

## Doi resolver

The plugin send the doi code to [Crossref Metadata Search](https://search.crossref.org/), get the information and publish a full citation in apa standard with the shortcode [ctdoiresolve ...].
**How to use the shortcode**:

[ctdoiresolve code="..."]

There are also three optional parameters:

[ctdoiresolve code="..." arxiv="..."]

if the paper has an arXiv version

[ctdoiresolve code="..." pdfurl="..."]

if the paper has a free pdf version

[ctdoiresolve code="..." archiveurl="..."]

if the paper has a free version on [archive.org](https://archive.org/)

## Manual citations

There's also a shortcode for manual citations, [paperdata ...]. You can use it with the following syntax:

[paperdata auth="author/s name/s" year="..." title="..." journal="..." vol="..." issue="..." pages="..." code="..."]

You can also use the arxiv, pdfurl, archiveurl parameters.

## Styling

You can style citations adding in your css theme the class "paperdata".

## External service

**Digital Object Identifier**, or *DOI*, is a persistent identifier used to uniquely identify objects, standardized by the **International Organization for Standardization** (*ISO*). DOIs are mainly used to identify academic, professional, and government information, such as journal articles, research reports and data sets, official publications.

***Citations tools*** uses the [CrossRef Metadata API](http://search.crossref.org/help/api) to retrieve complete publication information using the doi code as a search query. CrossRef is a part of the [doi system](https://dx.doi.org/).

== Screenshots ==
1. The doi resolver: the shortcode (up) and the results (down)

== Installation ==
1.  Extract the citations-tools.zip file and upload its contents to the /wp-content/plugins/ directory. Alternately, you can install directly from the Plugin directory within your WordPress Install.
2. Activate the plugin through the "Plugins" menu in WordPress.
3. Use the shortcode into your posts or pages.

== Changelog ==
* 0.3 add shortcode for manual citations
* 0.2.6.1 update readme.txt
* 0.2.6 add archive.org link in doi resolver as shortcode's parameter
* 0.2.5 fix error code
* 0.2.4 changed functions names
* 0.2.3 add pdf link in doi resolver as shortcode's parameter
* 0.2.2 add arXiv link in doi resolver as shortcode's parameter
* 0.2.1 add doi link in doi resolver
* 0.2 add shortcode to resolve doi using code
* 0.1 shortcode for doi link
