# Template Symlinks - Magento 2

Magento 2 allows you to symlink in a custom module from outside of it's directory structure but does not allow you to do this with templates. This module changes that so your templates will work from outside of the Magento 2 directory structure.

This isn't best practice for a live site but will work fine on a local or development site.

You must first enable symlinks by going to Admin > Stores > Configuration > Advanced > Developer > Template Settings and setting the Allow Symlinks option to Yes.
