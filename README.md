# Generic Views Module

Simple way to generate view, add, edit and search interfaces for your DataObject instances. Targeted towards usage in a website-frontend. Uses “scaffolding” of formfields based on meta-information from the DataObject class for sensible defaults.

# Maintainer Contact

 * Ingo Schommer (Nickname: ischommer, Email: <ingo (at) silverstripe (dot) com>)

# Requirements

 * SilverStripe 2.3

# Features

 * View a list of all records
 * Create, edit or delete records
 * Customizeable templates for all views
 * Implement your own logic in subclasses
 * Integrate in your CMS-Menu as a page type, or use as a standalone controller
 * Uses the DataObject permission model (can*() methods)
 * Scaffolded search interface based on SearchContext

# Related

 * http://silverstripe.org/generic-views-module/
 * The SilverStripe book (Wiley, 2009), chapters "5. Development: Job Postings" and "6. CRM".
   See http://wiley.com/go/silverstripe

# Usage

1. Download code from github, rename the folder to ‘genericviews’ 
1. Create a DataObject for use with CRUD (ensuring the canCreate / canEdit / canDelete functions are defined - see http://doc.silverstripe.org/old/recipes:cheat_sheet#dataobject_sitetree_settings)
1. Run a /dev/build/
1. Create a new ‘Collection Page’ in the CMS.
1. Change the 'CollectionModelClass' (on the 'GenericView' tab of the page just created) to the Model requiring CRUD

