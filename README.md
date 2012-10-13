NEOS Guestbook Plugin
=====================

This project aims to provide a simple guestbook plugin for the
next generation CMS [TYPO3 Neos](http://neos.typo3.org).

Currently, this project is primarily a playground for myself to familiarize
myself with developing NEOS Packages.

Installation
------------

### Using Git

Currently, Git is the easiest way to install this plugin:

    git clone https://github.com/martin-helmich/neos-guestbook.git Packages/Application/MH.Guestbook
    flow package:active MH.Guestbook
    flow doctrine:migrate

### Include TypoScript setup

This plugin uses custom TypoScript to register a custom content type. To include
this plugin's TypoScript simply add the following line to the root setup of your
TypoScript template:

    include: resource://MH.Guestbook/Private/TypoScript/Root.ts2
