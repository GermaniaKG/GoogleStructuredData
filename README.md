# GermaniaKG · JsonLD · Google Structured Data


## Installation with Composer

```bash
$ composer require germania-kg/google-structured-data
```

## Usage

```php
<?php
use Germania\GoogleStructuredData\GoogleFaqQuestion;
use Germania\GoogleStructuredData\GoogleFaqAnswer;
use Germania\GoogleStructuredData\GoogleFaqCollection;

$answer = GoogleFaqAnswer::create("This is the answer.");
$answer = $answer->setText("No, another answer.");

// Answer is optional
$question = GoogleFaqQuestion::create("So, what is the answer?", $answer);
$question = GoogleFaqQuestion::create("So, what is the answer?");
$question->setAcceptedAnswer($answer)
  
$faq = GoogleFaqCollection::createFromArray([
	$question,
  ...
]);  
```



## Unit tests

Either copy `phpunit.xml.dist` to `phpunit.xml` and adapt to your needs, or leave as is. Run [PhpUnit](https://phpunit.de/) test or composer scripts like this:

```bash
$ composer test
# or
$ vendor/bin/phpunit
```

