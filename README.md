## Plugin Name

Contributors: Shoken Fujisaki, Ken Ogino, Tetsutaro Watanabe  
Tags: comments, registration, recaptcha, antispam, mailhide, captcha, majang  
Requires at least: 3.5.1  
Tested up to: 3.5.1  
Stable tag: 0.1.0  
  
Integrates MJ-reCAPTCHA anti-spam methods with WordPress including comment, registration, and email spam protection.  

## Description

## Notice

If anyone is interested in taking up development of this plugin, please contact me at syokenz at gmail.com. I would be glad to provide access to the plugin repository. Preferably someone who has experience with the WP and WP multisite APIs (primarily their authorization and options APIs).

## What is reCAPTCHA?

[reCAPTCHA](http://recaptcha.net/ "reCAPTCHA") is an anti-spam method originating from [Carnegie Mellon University](http://www.cmu.edu/index.shtml "Carnegie Mellon University"), then acquired by [Google](http://www.google.com/recaptcha) which uses [CAPTCHAs](http://recaptcha.net/captcha.html "CAPTCHA") in a [genius way](http://recaptcha.net/learnmore.html "How Does it Work? - reCAPTCHA"). Instead of randomly generating useless characters which users grow tired of continuosly typing in, risking the possibility that spammers will eventually write sophisticated spam bots which use [OCR](http://en.wikipedia.org/wiki/Optical_character_recognition "Optical Character Recognition - Wikipedia") libraries to read the characters, reCAPTCHA uses a different approach.  

The world is in the process of digitizing books by use of automated machines which employ the use of Optical Character Recognition software. Sometimes the certain words cannot be read by the software. reCAPTCHA uses a combination of these words, further distorts them, and then constructs a CAPTCHA image. After a certain percentage of users solve the 'unknown' word the same way, it is assumed that it is the correct spelling of the word. This helps digitize books, giving users a ***reason*** to solve reCAPTCHA forms. Because the industry level scanners and OCR software which are used to digitize the books can't read the words with which the CAPTCHAs are constructed, it is safe to assume that in-house spam-bot OCR techniques will not be able to bypass the resulting CAPTCHA, which is a further distortion of the unreadable word.  

reCAPTCHA is probably the most popular and widely accepted CAPTCHA systems by both end-users and site-owners. It is used by such sites prominent sites as [Facebook](http://www.facebook.com), [Twitter](http://www.twitter.com), to the Average Joe's little blog out there on the corner of the Internet.  

It is accessible by everyone. If the user has trouble reading the CAPTCHA challenge, he or she has the option of requesting a new one. If this does not help, there is also an audio challenge which users may use.  

## Installation

To install in regular WordPress and [WordPress MultiSite](http://codex.wordpress.org/Create_A_Network):

1. Upload the `wp-mjrecaptcha` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the `Plugins` menu in WordPress
1. Get the MJ-reCAPTCHA keys [here](http://mjrecaptcha.com "MJ-reCAPTCHA API keys")

## Requirements

* You need the MJ-reCAPTCHA keys [here](http://mjrecaptcha.com "MJ-reCAPTCHA API keys")
* If you plan on using MailHide, you will need to have the [mcrypt](http://php.net/mcrypt "mcrypt") PHP module loaded (*Most servers do*)
* If you turn on XHTML 1.0 Compliance you and your users will need to have Javascript enabled to see and complete the reCAPTCHA form
* Your theme must have a `do_action('comment_form', $post->ID);` call right before the end of your form (*Right before the closing form tag*). Most themes do.

## ChangeLog

### Version 0.1.0

* First release

## Frequently Asked Questions

