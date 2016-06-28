# Magento_NewsletterPopup

Manage a popup containing the newsletter form

## Installation

`composer require canal-web/magento-newsletter-form`

## Usage

Call the block anywhere you like in your layouts : 

```xml
<block type="newsletterpopup/popup" name="newsletter_popup" template="newsletterpopup/template.phtml">
  <block type="newsletter/subscribe" name="newsletter_form" template="newsletterpopup/subscribe.phtml"/>
</block>
```
If needed, you may place it accurately in your template : 

```php
<?php echo $this->getChildHtml('newsletter_popup'); ?>
```
## Settings

The popup settings are located under **System > Configuration > Canal Web > Popup Newsletter**. You may choose between an automatic or a manual trigger.
If automatic, you may define the popup's arrival delay and the cookie duration, preventing the popup from appearing.
To manually trigger the popup, use :

```html
<a href="#" onclick="newsletterPopupCall('#popup_newsletter');">Click Me!</a>
