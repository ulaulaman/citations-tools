The plugin add some shortcodes add a link to a paper using the doi code or to resolve doi code and publish a full citation apa formatted.

# Description
Using the standard for doi link, the plugin introduce a shortcode in order to create a link to a paper provided by doi.
How to use the shortcode:

[cpdoi code="..."]Title of the paper[/doi]

The plugin send the doi code to [Crossref Metadata Search](https://search.crossref.org/), get the information and publish a full citation in apa standard with the shortcode [cpdoiresolve ...].
How to use the shortcode:

[cpdoiresolve code="..."]

There are also two optional parameters:

[cpdoiresolve code="..." arxiv="..."]

if the paper has an arXiv version

[cpdoiresolve code="..." pdfurl="..."]

if the paper has a free pdf version

## External service

**Digital Object Identifier**, or *DOI*, is a persistent identifier used to uniquely identify objects, standardized by the **International Organization for Standardization** (*ISO*). DOIs are mainly used to identify academic, professional, and government information, such as journal articles, research reports and data sets, official publications.

***Citations tools*** uses the [CrossRef Metadata API](http://search.crossref.org/help/api) to retrieve complete publication information using the doi code as a search query. CrossRef is a part of the [doi system](https://dx.doi.org/).

# Installation
1.  Extract the citations-tools.zip file and upload its contents to the /wp-content/plugins/ directory. Alternately, you can install directly from the Plugin directory within your WordPress Install.
2. Activate the plugin through the "Plugins" menu in WordPress.
3. Use the shortcode into your posts or pages.

# Changelog
* 0.2.4 changed functions names
* 0.2.3 add pdf link in doi resolver as ahortcode's parameter
* 0.2.2 add arXiv link in doi resolver as shortcode's parameter
* 0.2.1 add doi link in doi resolver
* 0.2 add shortcode to resolve doi using code
* 0.1 shortcode for doi link
