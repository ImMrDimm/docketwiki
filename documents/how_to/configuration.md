#Configuration

All settings of your DocketWiki placed on config.json at root-folder

You can use config.json of this demo or rename config_example.json and place your changes.

##Config structure

Config contain:
- Main Wiki settings
- Sidebar navigation settings

###Main settings

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

###Sidebar navigation settings
