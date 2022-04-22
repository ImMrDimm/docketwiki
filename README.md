# DocketWiki

[![Total Downloads](https://poser.pugx.org/immrdimm/docketwiki/d/total.svg)](https://packagist.org/packages/immrdimm/docketwiki)
[![License](https://poser.pugx.org/immrdimm/docketwiki/license.svg)](https://packagist.org/packages/immrdimm/docketwiki)

<p align="center"><img alt="DocketWiki" src="https://i.imgur.com/LRYaeCQ.jpeg" width="640" /></p>

See demo here [DocketWiki](docketwiki.immrdimm.ru)

- [About](#about)
- [How To](#how-to)
  - [Getting Started](#getting-started)
  - [Requirements](#requirements)
  - [Install](#install)
  - [Files, Directories and Structure of DocketWiki](#files-directories-and-structure-of-docketwiki)
  - [Configuration](#configuration)
    - [Config structure](#config-structure)
    - [Main settings](#main-settings)
    - [Sidebar navigation settings](#sidebar-navigation-settings)
      - [Subtitle item](#subtitle-item)
      - [Menu item](#menu-item)
- [Elements](#elements)
  - [Headings](#headings)
  - [Texts and other](#texts-and-other)
    - [Paragraphs](#paragraphs)
    - [Blockquote](#blockquote)
    - [Code block](#code-block)
    - [Links](#links)
    - [Footnotes](#footnotes)
    - [Lists](#lists)
      - [Unordered list](#unordered-list)
      - [Ordered list](#ordered-list)
      - [Nested list](#nested-list)
  - [Tables](#tables)
  - [Images](#images)
  - [Alerts](#alerts)
  - [Accordeon](#accordeon)
  - [Icons](#icons)  

# About

DocketWiki is simple and static documentation for your project or knowledge base

DocketWiki based on MD-files without Database

You do not need powerfull server, database and difficult settings to start

Download archive, upload and unzip on your server. That's all

Based on [ParseDown](https://github.com/erusev/parsedown) and [ParseDown Extra](https://github.com/erusev/parsedown-extra) by [Emanuil Rusev](https://github.com/erusev)

Full support of HTML tags and markdown


## How To

### Getting Started

Before you start, check requirements page

### Requirements

The DocketWiki has a few system requirements.

You should ensure that your web server has the following minimum PHP version and extensions:

- PHP >= 7.0
- Fileinfo PHP Extension
- JSON PHP Extension
- No database needed!

### Install

Unpack .zip-file into your webserver folder.

That's all!

### Files, Directories and Structure of DocketWiki

- <var>assets</var> folder contains custom styles, scripts, images and other resources for project
  - <var>css</var> folder contains styles
  - <var>js</var> folder contains custom java-script files
  - <var>favicon</var> folder contains favicons
  - <var>icons</var> folder contains icons for menu
- <var>documents</var> folder contains all your MD-files
  - <var>errors</var> folder contains templates for error-pages
- <var>classes</var> folder contains project classes
- <var>libs</var> folder contains additional third-party libs
- <var>layouts</var> folder contains templates for view
  - <var>sidebar</var> folder contains sidebar views
  - <var>template</var> folder contains main views
- <var>index.php</var> entry point of all project
- <var>.htaccess</var> rules and conditions for webserver
- <var>config.json</var> configuration file
- <var>config_example.json</var> additional example of configuration file

### Configuration

All settings of your DocketWiki placed on config.json at root-folder

You can use config.json of this demo or rename config_example.json and place your changes.

#### Config structure

Config contain:
- Main Wiki settings
- Sidebar navigation settings

#### Main settings

First block of settings contain next code:

```
"version": "1.0.0",
"wiki_name": "DocketWiki",
"wiki_root_url": "/wiki/",
"start_page": "about",
```

where is:

- <var>version</var> of your Wiki
- <var>wiki_name</var> name of your Wiki
- <var>wiki_root_url</var> place '/' if it is root folder, or '/folder_name/' if it is a subfolder of existing website
- <var>start_page</var> place started url of your Wiki

#### Sidebar navigation settings

Sidebar navigation settings contain an array with all menu-items like this:

```
"sidebar":{
   "menu":[
      {
         "type":"link",
         "icon":"icon1",
         "name":"About",
         "url":"about"
      },
      {
         "type":"subtitle",
         "name":"How To"
      },
      {
         "type":"link",
         "icon":"icon1",
         "name":"Getting Started",
         "url":"how_to/getting_started"
      }
    ]
  }
```

where is:

- <var>sidebar</var> - root node for sidebar settings. required.
- <var>menu</var> - root node for menu settings. required.
- <var>menu sub-nodes</var> can be tow types: simple menu-item with icon, text and bubble or subtitle-text

##### Subtitle item

Subtitle item - simple text without links, icons etc.

```
{
   "type":"subtitle",
   "name":"How To"
}
```

- <var>type</var> - type of item. required.
- <var>name</var> - text of item. required.

##### Menu item

Menu item - link to page of DocketWiki

```
{
   "type":"link",
   "icon":"icon1",
   "name":"Getting Started",
   "url":"how_to/getting_started",
   "bubble": "success",
   "bubble_text": "some text"
}
```

- <var>type</var> - type of item. required.
- <var>icon</var> - icon of item. you can choose icon on Icons page of this DocketWiki
- <var>name</var> - text of item. required.
- <var>url</var> - url-link of item. required.
- <var>bubble</var> - bubble-type of item. can be success, warning, danger, info and idle
- <var>bubble_text</var> - bubble-text of item.


## Elements

### Headings

```
# Heading H1
## Heading H2
### Heading H3
#### Heading H4
##### Heading H5
###### Heading H6
```

### Texts and other

#### Paragraphs

You can create a new paragraph by leaving a blank line between lines of text.

#### Styling text

Main styles of text do you need below:

| Style     | Syntax | Example | Output |
| ---       | ---    | ---     | ---    |
| Bold       | <var>\*\* \*\*</var>    | \*\* Bold text \*\*     | ** Bold text **    |
| Italic       | <var>\* \*</var>    | \* Italic text \*     | * Italic text *    |
| Strikethrough       | <var>\~\~ \~\~</var>    | \~\~ Mistaken text \~\~     | ~~Mistaken text~~    |
| Bold and nested italic       | <var>\*\* \*\*</var> and <var>\_ \_</var>    | \*\* Bold  and \_ italic \_ text \*\*  | ** Bold  and _italic_ text ** |
| All bold and italic       | <var>\*\*\* \*\*\*</var>    | \*\*\* Totaly bold and italic \*\*\*     | *** Totaly bold and italic ***    |

#### Blockquote

How to use:

``` > Something important or not important ```


#### Code block

To format code or text into its own distinct block, use triple backticks

```
  ``` Place your code here ```
```

#### Links

How to use:

```
[link text](link url)
```

#### Footnotes

How to use:

```
Some text with footnote[^1].
Do not forget[^2] place the footnote!  
```

### Lists

#### Unordered list

```
- List item 1
- List item 2
- List item 3
```

#### Ordered list

```
1. List item 1
2. List item 2
3. List item 3
```

#### Nested list

You can create nested list:

```
1. First list item
   - First nested list item
     - Second nested list item
```

### Tables

Standart table using like this:

```
| Worker   | Salary  |
| ---      | ---     |
| James    | 1 200 $ |
| Anton    | 1 440 $ |
```

### Images

How to use:

```
![There is an image](https://i.imgur.com/j6EIdA4.png)
```

### Alerts

DocketWiki exists some custom alerts

Example:

```
<p class="notice notice--info">
Notice Text
</p>
```

Available types of notices:

- <var>notice</var>
- <var>notice notice--success</var>
- <var>notice notice--warning</var>
- <var>notice notice--danger</var>
- <var>notice notice--info</var>

#### Accordeon

If you want to hide some content into accordeon, you can place this code:

```
<details>

  <summary>Accordeon: Show and Hide</summary>

  Some hided content

</details>
```

#### Icons

DocketWiki uses Feather Icon Pack for styling your sidebar-menu.

#### HTML tags

DocketWiki has full support of custom HTML-tags

You can place something like this:

```
<a href="#url">Custom a-tag link</a>
```
